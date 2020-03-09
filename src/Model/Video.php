<?php

declare(strict_types=1);

namespace Shapin\Vimeo\Model;

use Shapin\Vimeo\Model\Video\Embed;
use Shapin\Vimeo\Model\Video\Privacy;
use Shapin\Vimeo\Model\Video\Stats;

final class Video extends Resource
{
    const STATUS_AVAILABLE = 'available';
    const STATUS_QUOTA_EXCEEDED = 'quota_exceeded';
    const STATUS_TOTAL_CAP_EXCEEDED = 'total_cap_exceeded';
    const STATUS_TRANSCODE_STARTING = 'transcode_starting';
    const STATUS_TRANSCODING = 'transcoding';
    const STATUS_TRANSCODING_ERROR = 'transcoding_error';
    const STATUS_UNAVAILABLE = 'unavailable';
    const STATUS_UPLOADING = 'uploading';
    const STATUS_UPLOADING_ERROR = 'uploading_error';

    /**
     * @var string
     */
    private $name;

    /**
     * @var ?string
     */
    private $description;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $link;

    /**
     * @var int
     */
    private $duration;

    /**
     * @var int
     */
    private $width;

    /**
     * @var ?string
     */
    private $language;

    /**
     * @var int
     */
    private $height;

    /**
     * @var Embed
     */
    private $embed;

    /**
     * @var \DateTimeImmutable
     */
    private $createdTime;

    /**
     * @var \DateTimeImmutable
     */
    private $modifiedTime;

    /**
     * @var \DateTimeImmutable
     */
    private $releaseTime;

    /**
     * @var array<string>
     */
    private $contentRating;

    /**
     * @var ?string
     */
    private $license;

    /**
     * @var Privacy
     */
    private $privacy;

    /**
     * @var Picture
     */
    private $pictures;

    /**
     * @var array<Tag>
     */
    private $tags;

    /**
     * @var Stats
     */
    private $stats;

    /**
     * @var array<Category>
     */
    private $categories;

    /**
     * @var User
     */
    private $user;

    /**
     * @var string
     */
    private $status;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description = null): void
    {
        $this->description = $description;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language = null): void
    {
        $this->language = $language;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    public function getEmbed(): Embed
    {
        return $this->embed;
    }

    public function setEmbed(Embed $embed): void
    {
        $this->embed = $embed;
    }

    public function getCreatedTime(): \DateTimeImmutable
    {
        return $this->createdTime;
    }

    public function setCreatedTime(\DateTimeImmutable $createdTime): void
    {
        $this->createdTime = $createdTime;
    }

    public function getModifiedTime(): \DateTimeImmutable
    {
        return $this->modifiedTime;
    }

    public function setModifiedTime(\DateTimeImmutable $modifiedTime): void
    {
        $this->modifiedTime = $modifiedTime;
    }

    public function getReleaseTime(): \DateTimeImmutable
    {
        return $this->releaseTime;
    }

    public function setReleaseTime(\DateTimeImmutable $releaseTime): void
    {
        $this->releaseTime = $releaseTime;
    }

    /**
     * @return array<string>
     */
    public function getContentRating(): array
    {
        return $this->contentRating;
    }

    /**
     * @param array<string> $contentRating
     */
    public function setContentRating(array $contentRating): void
    {
        $this->contentRating = $contentRating;
    }

    public function getLicense(): ?string
    {
        return $this->license;
    }

    public function setLicense(string $license = null): void
    {
        $this->license = $license;
    }

    public function getPrivacy(): Privacy
    {
        return $this->privacy;
    }

    public function setPrivacy(Privacy $privacy): void
    {
        $this->privacy = $privacy;
    }

    public function getPictures(): Picture
    {
        return $this->pictures;
    }

    public function setPictures(Picture $pictures): void
    {
        $this->pictures = $pictures;
    }

    /**
     * @return array<Tag>
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param array<Tag> $tags
     */
    public function setTags(array $tags): void
    {
        $this->tags = $tags;
    }

    public function addTag(Tag $tag): void
    {
        $this->tags[] = $tag;
    }

    public function getStats(): Stats
    {
        return $this->stats;
    }

    public function setStats(Stats $stats): void
    {
        $this->stats = $stats;
    }

    /**
     * @return array<Category>
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    public function addCategory(Category $category): void
    {
        $this->categories[] = $category;
    }

    /**
     * @param array<Category> $categories
     */
    public function setCategories(array $categories): void
    {
        $this->categories = $categories;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function isAvailable(): bool
    {
        return self::STATUS_AVAILABLE === $this->status;
    }
}
