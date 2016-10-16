<?php
namespace ScriptFUSION\Porter\Provider\SoundCloud\Resource\User;

use ScriptFUSION\Porter\Provider\SoundCloud\Resource\SoundCloudResource;

abstract class UsersResource extends SoundCloudResource
{
    const URL = '/users/%s/%s';

    private $userId;

    /**
     * Initializes this instance with the specified user ID.
     *
     * @param int|string $userId User ID.
     */
    public function __construct($userId)
    {
        $this->userId = is_int($userId) ? $userId : "$userId";
    }

    /**
     * Builds a users URL for the current user ID.
     *
     * @return string URL.
     */
    protected function buildUrl()
    {
        return sprintf(self::URL, $this->userId, $this->getResourceName());
    }

    /**
     * Gets the resource name.
     *
     * @return string
     */
    abstract protected function getResourceName();
}
