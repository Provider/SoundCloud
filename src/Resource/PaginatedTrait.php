<?php
namespace ScriptFUSION\Porter\Provider\SoundCloud\Resource;

use ScriptFUSION\Porter\Provider\Resource\ProviderResource;

trait PaginatedTrait
{
    private $pageSize = 50;

    /**
     * Sets the page size to the specified number of results.
     *
     * @param int $size Number of results.
     *
     * @return ProviderResource
     */
    public function setPageSize($size)
    {
        $this->pageSize = $size|0;

        return $this;
    }

    /**
     * Gets the number of results per page.
     *
     * @return int Number of results.
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }
}
