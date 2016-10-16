<?php
namespace ScriptFUSIONTest\Porter\Provider\SoundCloud\Functional\Resource\User;

use ScriptFUSION\Porter\Provider\SoundCloud\Resource\User\GetUserFavorites;
use ScriptFUSION\Porter\Specification\ImportSpecification;

final class GetUserFavoritesTest extends UserTest
{
    public function test()
    {
        $record = $this->porter->import(new ImportSpecification(
            new GetUserFavorites(self::USER_ID)
        ))->current();

        self::assertArrayHasKey('id', $record);
    }
}
