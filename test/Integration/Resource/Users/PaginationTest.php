<?php
namespace ScriptFUSIONTest\Porter\Provider\SoundCloud\Integration\Resource\Users;

use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use ScriptFUSION\Porter\Connector\Connector;
use ScriptFUSION\Porter\Net\Http\HttpOptions;
use ScriptFUSION\Porter\Provider\SoundCloud\Resource\User\GetUserFollowings;
use ScriptFUSION\Porter\Provider\SoundCloud\SoundCloudOptions;

final class PaginationTest extends \PHPUnit_Framework_TestCase
{
    use MockeryPHPUnitIntegration;

    public function testPageSizePassedToConnector()
    {
        $followings = (new GetUserFollowings(123))->setPageSize($pageSize = 456);
        $followings->fetch(
            \Mockery::mock(Connector::class)
                ->shouldReceive('fetch')
                ->with(\Mockery::any(), \Mockery::on(
                    function (HttpOptions $options) use ($pageSize) {
                        self::assertSame($pageSize, $options->getQueryParameters()['page_size']);

                        return true;
                    }
                ))
                ->once()
                ->getMock(),
            new SoundCloudOptions
        )->current();
    }
}
