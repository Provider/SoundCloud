<?php
namespace ScriptFUSION\Porter\Provider\SoundCloud\Resource;

use ScriptFUSION\Porter\Connector\Connector;
use ScriptFUSION\Porter\Options\EncapsulatedOptions;
use ScriptFUSION\Porter\Provider\Resource\AbstractResource;
use ScriptFUSION\Porter\Provider\SoundCloud\SoundCloudOptions;
use ScriptFUSION\Porter\Provider\SoundCloud\SoundCloudProvider;

abstract class SoundCloudResource extends AbstractResource
{
    public function getProviderClassName()
    {
        return SoundCloudProvider::class;
    }

    public function fetch(Connector $connector, EncapsulatedOptions $options = null)
    {
        if (!$options instanceof SoundCloudOptions) {
            throw new \InvalidArgumentException('Options must be an instance of SoundCloudOptions.');
        }

        $data = $this->fetchFromUrl($connector, $options, $this->buildUrl());

        do {
            if (is_array($data)) {
                foreach ($this->presentRecords($data) as $record) {
                    yield $record;
                }
            }

            if ($more = isset($data['next_href'])) {
                $data = $this->fetchFromUrl($connector, $options, $data['next_href']);
            }
        } while ($more);
    }

    private function fetchFromUrl(Connector $connector, SoundCloudOptions $options, $url)
    {
        $options = $options->toHttpOptions();

        if ($this instanceof Paginated) {
            $options->setQueryParameters(['page_size' => $this->getPageSize()] + $options->getQueryParameters());
        }

        return json_decode($connector->fetch($url, $options), true);
    }

    abstract protected function buildUrl();

    /**
     * Present each record in the specified data as an iterator value.
     *
     * @param array $data Data.
     *
     * @return \Iterator Enumeration of array values.
     */
    abstract protected function presentRecords(array $data);
}
