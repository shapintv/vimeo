<?php

declare(strict_types=1);

namespace Shapin\Vimeo\Model;

use Shapin\Vimeo\Model\User\Website;

final class User extends Resource
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $link;

    /**
     * @var string
     */
    private $location;

    /**
     * @var ?string
     */
    private $bio;

    /**
     * @var ?string
     */
    private $shortBio;

    /**
     * @var \DateTimeImmutable
     */
    private $createdTime;

    /**
     * @var Picture
     */
    private $pictures;

    /**
     * @var array<Website>
     */
    private $websites;

    /**
     * @var string
     */
    private $account;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): void
    {
        $this->location = $location;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setBio(string $bio = null): void
    {
        $this->bio = $bio;
    }

    public function getShortBio(): ?string
    {
        return $this->shortBio;
    }

    public function setShortBio(string $shortBio = null): void
    {
        $this->shortBio = $shortBio;
    }

    public function getCreatedTime(): \DateTimeImmutable
    {
        return $this->createdTime;
    }

    public function setCreatedTime(\DateTimeImmutable $createdTime): void
    {
        $this->createdTime = $createdTime;
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
     * @return array<Website>
     */
    public function getWebsites(): array
    {
        return $this->websites;
    }

    /**
     * @param array<Website> $websites
     */
    public function setWebsites(array $websites): void
    {
        $this->websites = $websites;
    }

    public function addWebsite(Website $website): void
    {
        $this->websites[] = $website;
    }

    public function getAccount(): string
    {
        return $this->account;
    }

    public function setAccount(string $account): void
    {
        $this->account = $account;
    }
}
