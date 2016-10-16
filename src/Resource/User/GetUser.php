<?php
namespace ScriptFUSION\Porter\Provider\SoundCloud\Resource\User;

class GetUser extends UsersResource
{
    protected function getResourceName()
    {
        return null;
    }

    protected function presentRecords(array $data)
    {
        yield $data;
    }
}
