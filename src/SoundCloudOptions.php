<?php
namespace ScriptFUSION\Porter\Provider\SoundCloud;

use ScriptFUSION\Porter\Net\Http\HttpOptions;
use ScriptFUSION\Porter\Options\EncapsulatedOptions;

class SoundCloudOptions extends EncapsulatedOptions
{
    /**
     * @return HttpOptions
     */
    public function toHttpOptions()
    {
        return (new HttpOptions)->setQueryParameters($this->copy());
    }

    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->get('client_id');
    }

    /**
     * @param string $clientId
     *
     * @return $this
     */
    public function setClientId($clientId)
    {
        return $this->set('client_id', "$clientId");
    }
}
