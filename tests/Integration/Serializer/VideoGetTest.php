<?php

declare(strict_types=1);

/*
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace Shapin\Vimeo\Tests\Integration\Serializer;

use PHPUnit\Framework\TestCase;
use Shapin\Vimeo\Model\Video;
use Shapin\Vimeo\Serializer;
use Shapin\Vimeo\Tests\VideoCheckerTrait;

final class VideoGetTest extends TestCase
{
    use VideoCheckerTrait;

    public function test(): void
    {
        $serializer = new Serializer();

        /** @var Video */
        $video = $serializer->deserialize(file_get_contents(__DIR__.'/../fixtures/video_get.json'), Video::class, 'json');

        $this->checkVideo($video);
    }
}
