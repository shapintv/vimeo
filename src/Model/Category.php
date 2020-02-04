<?php

declare(strict_types=1);

namespace Shapin\Vimeo\Model;

final class Category extends Resource
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
     * @var bool
     */
    private $topLevel;

    /**
     * @var Picture
     */
    private $pictures;

    /**
     * @var \DateTimeImmutable
     */
    private $lastVideoFeaturedTime;

    /**
     * @var ?Link
     */
    private $parent;

    /**
     * @var array<Link>
     */
    private $subcategories;

    /**
     * @var Picture
     */
    private $icon;

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

    public function isTopLevel(): bool
    {
        return $this->topLevel;
    }

    public function setTopLevel(bool $topLevel): void
    {
        $this->topLevel = $topLevel;
    }

    public function getPictures(): Picture
    {
        return $this->pictures;
    }

    public function setPictures(Picture $pictures): void
    {
        $this->pictures = $pictures;
    }

    public function getLastVideoFeaturedTime(): \DateTimeImmutable
    {
        return $this->lastVideoFeaturedTime;
    }

    public function setLastVideoFeaturedTime(\DateTimeImmutable $lastVideoFeaturedTime): void
    {
        $this->lastVideoFeaturedTime = $lastVideoFeaturedTime;
    }

    public function getParent(): ?Link
    {
        return $this->parent;
    }

    public function hasParent(): bool
    {
        return null !== $this->parent;
    }

    public function setParent(Link $parent = null): void
    {
        $this->parent = $parent;
    }

    /**
     * @return array<Link>
     */
    public function getSubcategories(): array
    {
        return $this->subcategories;
    }

    /**
     * @param array<Link> $subcategories
     */
    public function setSubcategories(array $subcategories): void
    {
        $this->subcategories = $subcategories;
    }

    public function addSubcategory(Link $subcategory): void
    {
        $this->subcategories[] = $subcategory;
    }

    public function getIcon(): Picture
    {
        return $this->icon;
    }

    public function setIcon(Picture $icon): void
    {
        $this->icon = $icon;
    }
}
