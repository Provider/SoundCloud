<?php
namespace ScriptFUSION\Porter\Provider\SoundCloud;

use ScriptFUSION\Porter\Net\Http\HttpConnector;
use ScriptFUSION\Porter\Provider\AbstractProvider;
use ScriptFUSION\Porter\Provider\Resource\ProviderResource;
use ScriptFUSION\Porter\Provider\SoundCloud\Resource\SoundCloudResource;

/**
 * @method SoundCloudOptions getOptions
 */
final class SoundCloudProvider extends AbstractProvider
{
    const URL = 'https://api.soundcloud.com';

    public function __construct(HttpConnector $connector = null)
    {
        parent::__construct($connector = $connector ?: new HttpConnector);

        $connector->setBaseUrl(self::URL);

        $this->setOptions(new SoundCloudOptions);
    }

    public function fetch(ProviderResource $resource)
    {
        if (!$resource instanceof SoundCloudResource) {
            throw new IncompatibleResourceException('Resource must implement SoundCloudResource.');
        }

        return parent::fetch($resource);
    }

    /**
     * @param string $clientId
     *
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->getOptions()->setClientId($clientId);

        return $this;
    }
}
