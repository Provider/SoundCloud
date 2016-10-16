<?php
namespace ScriptFUSION\Porter\Provider\SoundCloud\Resource\User;

use ScriptFUSION\Porter\Provider\SoundCloud\Resource\Paginated;
use ScriptFUSION\Porter\Provider\SoundCloud\Resource\PaginatedTrait;

class GetUserFollowings extends UsersResource implements Paginated
{
    use PaginatedTrait;

    const RESOURCE = 'followings';

    protected function getResourceName()
    {
        return self::RESOURCE;
    }

    protected function presentRecords(array $data)
    {
        foreach ($data['collection'] as $record) {
            yield $record;
        }
    }
}
