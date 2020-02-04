<?php

declare(strict_types=1);

/*
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace Shapin\Vimeo\Tests;

use Shapin\Vimeo\Model;

trait VideoCheckerTrait
{
    public function checkVideo(Model\Video $video): void
    {
        $this->assertInstanceOf(Model\Video::class, $video);

        $this->assertSame('/videos/362164795', $video->getUri());
        $this->assertSame(362164795, $video->getId());
        $this->assertSame('The Magic of Chess', $video->getName());
        $this->assertSame("Filmed at the 2019 Elementary Chess Championships at the Nashville Opryland resort, a group of children share their uninhibited, philosophical insights about the benefits of chess.  \n\nPresented by US Chess\n\nProducers: Jenny Schweitzer, Jennifer Shahade\nDirector & DP: Jenny Schweitzer\nExecutive Producer: Richard Schiffrin\nEditor: Michael Mezzina\nProduction Support: Nagham Osman\nTitle Design: Morgan Gruer", $video->getDescription());
        $this->assertSame('video', $video->getType());
        $this->assertSame('https://vimeo.com/362164795', $video->getLink());
        $this->assertSame(284, $video->getDuration());
        $this->assertSame(1920, $video->getWidth());
        $this->assertNull($video->getLanguage());
        $this->assertSame(1080, $video->getHeight());

        // Embed
        $embed = $video->getEmbed();
        $this->assertInstanceOf(Model\Video\Embed::class, $embed);
        $this->assertSame('<iframe src="https://player.vimeo.com/video/362164795?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=164845" width="1920" height="1080" frameborder="0" allow="autoplay; fullscreen" allowfullscreen title="The Magic of Chess"></iframe>', $embed->getHtml());
        $this->assertSame([
            'hdr' => false,
            'live' => [
                'streaming' => false,
                'archived' => false,
            ],
            'staff_pick' => [
                'normal' => false,
                'best_of_the_month' => true,
                'best_of_the_year' => false,
                'premiere' => false,
            ],
            'vod' => false,
            'weekend_challenge' => false,
        ], $embed->getBadges());

        $this->assertInstanceOf(\DateTimeImmutable::class, $video->getCreatedTime());
        $this->assertInstanceOf(\DateTimeImmutable::class, $video->getModifiedTime());
        $this->assertInstanceOf(\DateTimeImmutable::class, $video->getReleaseTime());
        $this->assertSame(['safe'], $video->getContentRating());
        $this->assertNull($video->getLicense());

        // Privacy
        $privacy = $video->getPrivacy();
        $this->assertInstanceOf(Model\Video\Privacy::class, $privacy);
        $this->assertSame('anybody', $privacy->getView());
        $this->assertSame('public', $privacy->getEmbed());
        $this->assertFalse($privacy->allowDownload());
        $this->assertTrue($privacy->allowAdd());
        $this->assertSame('anybody', $privacy->getComments());

        // Picture
        $picture = $video->getPictures();
        $this->assertInstanceOf(Model\Picture::class, $picture);
        $this->assertSame('/videos/362164795/pictures/838402890', $picture->getUri());
        $this->assertSame(838402890, $picture->getId());
        $this->assertTrue($picture->isActive());
        $this->assertSame('custom', $picture->getType());
        $this->assertCount(11, $picture->getSizes());
        $this->assertSame('ce125fc5b2e324956d6c98b334e62e1e378bc23c', $picture->getResourceKey());

        $size = $picture->getSizes()[0];
        $this->assertInstanceOf(Model\Picture\PictureSize::class, $size);
        $this->assertSame(100, $size->getWidth());
        $this->assertSame(75, $size->getHeight());
        $this->assertSame('https://i.vimeocdn.com/video/838402890_100x75.jpg?r=pad', $size->getLink());
        $this->assertSame('https://i.vimeocdn.com/filter/overlay?src0=https%3A%2F%2Fi.vimeocdn.com%2Fvideo%2F838402890_100x75.jpg&src1=http%3A%2F%2Ff.vimeocdn.com%2Fp%2Fimages%2Fcrawler_play.png', $size->getLinkWithPlayButton());

        $this->assertSame([], $video->getTags());

        // Stats
        $stats = $video->getStats();
        $this->assertInstanceOf(Model\Video\Stats::class, $stats);
        $this->assertNull($stats->getPlays());

        // Categories
        $categories = $video->getCategories();
        $this->assertCount(4, $categories);

        $category = $categories[0];
        $this->assertInstanceOf(Model\Category::class, $category);
        $this->assertSame('/categories/documentary', $category->getUri());
        $this->assertSame('documentary', $category->getId());
        $this->assertSame('Documentary', $category->getName());
        $this->assertSame('https://vimeo.com/categories/documentary', $category->getLink());
        $this->assertTrue($category->isTopLevel());
        $this->assertInstanceOf(Model\Picture::class, $category->getPictures());
        $this->assertInstanceOf(\DateTimeImmutable::class, $category->getLastVideoFeaturedTime());
        $this->assertNull($category->getParent());
        $this->assertCount(5, $category->getSubcategories());
        $this->assertInstanceOf(Model\Picture::class, $category->getIcon());
        $this->assertSame('18c548549d079953dcf6e14749810ae872883da4', $category->getResourceKey());

        // User
        $user = $video->getUser();
        $this->assertInstanceOf(Model\User::class, $user);
        $this->assertSame('/users/3585257', $user->getUri());
        $this->assertSame(3585257, $user->getId());
        $this->assertSame('Jenny Schweitzer Bell', $user->getName());
        $this->assertSame('https://vimeo.com/jennyschweitzer', $user->getLink());
        $this->assertSame('New York, NY, USA', $user->getLocation());
        $this->assertNull($user->getBio());
        $this->assertSame('NYC based producer &amp; filmmaker www.NotableFeatures.com', $user->getShortBio());
        $this->assertInstanceOf(\DateTimeImmutable::class, $user->getCreatedTime());
        $this->assertInstanceOf(Model\Picture::class, $user->getPictures());
        $websites = $user->getWebsites();
        $this->assertCount(2, $websites);
        $website = $websites[0];
        $this->assertInstanceOf(Model\User\Website::class, $website);
        $this->assertSame('Notable Features', $website->getName());
        $this->assertSame('http://www.notablefeatures.com', $website->getLink());
        $this->assertSame('company homepage', $website->getDescription());
        $this->assertSame('2406330bfb976800d6ba3637d840eb798c89261d', $user->getResourceKey());
        $this->assertSame('pro', $user->getAccount());

        $this->assertSame('available', $video->getStatus());
        $this->assertSame('2524670571db41c3fa661522e02fc5c41bdfcd77', $video->getResourceKey());
    }
}
