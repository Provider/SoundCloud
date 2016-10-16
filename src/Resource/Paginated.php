<?php
namespace ScriptFUSION\Porter\Provider\SoundCloud\Resource;

use ScriptFUSION\Porter\Provider\Resource\ProviderResource;

interface Paginated
{
    /**
     * Sets the page size to the specified number of results.
     *
     * @param int $size Number of results.
     *
     * @return ProviderResource
     */
    public function setPageSize($size);

    /**
     * Gets the number of results per page.
     *
     * @return int Number of results.
     */
    public function getPageSize();
}
