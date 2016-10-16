<?php
namespace ScriptFUSIONTest\Porter\Provider\SoundCloud\Functional\Resource\User;

use ScriptFUSION\Porter\Porter;
use ScriptFUSION\Porter\Provider\SoundCloud\SoundCloudProvider;

abstract class UserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Porter
     */
    protected $porter;

    // SoundCloudAPI user ID.
    const USER_ID = 9771423;

    protected function setUp()
    {
        $this->porter = (new Porter)->registerProvider(
            (new SoundCloudProvider)->setClientId($_SERVER['SOUNDCLOUD_CLIENT_ID'])
        );
    }
}
