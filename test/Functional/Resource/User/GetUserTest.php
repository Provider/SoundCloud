<?php
namespace ScriptFUSIONTest\Porter\Provider\SoundCloud\Functional\Resource\User;

use ScriptFUSION\Porter\Provider\SoundCloud\Resource\User\GetUser;
use ScriptFUSION\Porter\Specification\ImportSpecification;

final class GetUserTest extends UserTest
{
    public function test()
    {
        $record = $this->porter->importOne(new ImportSpecification(
            new GetUser(self::USER_ID)
        ));

        self::assertArrayHasKey('id', $record);
        self::assertSame(self::USER_ID, $record['id']);
    }
}
