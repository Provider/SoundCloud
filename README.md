SoundCloud
==========

[![Latest tag][Version image]][Releases]
[![Total downloads][Downloads image]][Downloads]
[![Build status][Build image]][Build]
[![Test coverage][Coverage image]][Coverage]
[![Code style][Style image]][Style]

A [Porter][Porter] provider for [SoundCloud](http://soundcloud.com/). The SoundCloud API does not officially support PHP but this library provides such an API via HTTP.

This provider is still under heavy development and mostly serves as a proof of concept. The following resources are currently available.

 - GetUser
 - GetUserFavorites
 - GetUserFollowings

For more information please see the [SoundCloud API reference](https://developers.soundcloud.com/docs/api/reference).

Requirements
------------

- [PHP 5.5](http://php.net)
- [Composer](http://getcomposer.org)
- [Porter][Porter]

Testing
-------

This provider is well tested.  Run the tests with `SOUNDCLOUD_CLIENT_ID=<id> bin/test` from a shell, where `<id>` is your client ID.


  [Releases]: https://github.com/Provider/SoundCloud/releases
  [Version image]: https://poser.pugx.org/provider/soundcloud/version "Latest version"
  [Downloads]: https://packagist.org/packages/provider/soundcloud
  [Downloads image]: https://poser.pugx.org/provider/soundcloud/downloads "Total downloads"
  [Build]: http://travis-ci.org/Provider/SoundCloud
  [Build image]: https://travis-ci.org/Provider/SoundCloud.svg?branch=master "Build status"
  [Coverage]: https://coveralls.io/github/Provider/SoundCloud
  [Coverage image]: https://coveralls.io/repos/Provider/SoundCloud/badge.svg "Test coverage"
  [Style]: https://styleci.io/repos/64059449
  [Style image]: https://styleci.io/repos/64059449/shield?style=flat "Code style"

  [Porter]: https://github.com/ScriptFUSION/Porter
