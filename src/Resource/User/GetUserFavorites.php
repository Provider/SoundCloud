<?php
namespace ScriptFUSION\Porter\Provider\SoundCloud\Resource\User;

class GetUserFavorites extends UsersResource
{
    const RESOURCE = 'favorites';

    protected function getResourceName()
    {
        return self::RESOURCE;
    }

    protected function presentRecords(array $data)
    {
        foreach ($data as $record) {
            yield $record;
        }
    }
}
