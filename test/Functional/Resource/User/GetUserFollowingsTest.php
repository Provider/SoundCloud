<?php
namespace ScriptFUSIONTest\Porter\Provider\SoundCloud\Functional\Resource\User;

use ScriptFUSION\Porter\Provider\SoundCloud\Resource\User\GetUserFollowings;
use ScriptFUSION\Porter\Specification\ImportSpecification;

final class GetUserFollowingsTest extends UserTest
{
    public function test()
    {
        $records = $this->porter->import(new ImportSpecification(
            (new GetUserFollowings(self::USER_ID))
                ->setPageSize($pageSize = 50)
        ));

        // Record is well-formed.
        self::assertArrayHasKey('username', $records->current());

        // Additional pages are fetched.
        self::assertGreaterThan($pageSize, count(iterator_to_array($records)));
    }
}
