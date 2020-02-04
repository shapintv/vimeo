<?php

declare(strict_types=1);

/*
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace Shapin\Vimeo\Tests\Functional;

use Shapin\Vimeo\Api;
use Shapin\Vimeo\Tests\VideoCheckerTrait;

final class VideoTest extends TestCase
{
    use VideoCheckerTrait;

    /**
     * @var Api\Video
     */
    private $api;

    public function setUp(): void
    {
        $this->api = $this->getVimeoClient()->videos();
    }

    public function testGet(): void
    {
        $video = $this->api->get(362164795);

        $this->checkVideo($video);
    }
}
