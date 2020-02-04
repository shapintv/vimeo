<?php

declare(strict_types=1);

namespace Shapin\Vimeo\Model\Picture;

final class PictureSize
{
    /**
     * @var int
     */
    private $width;

    /**
     * @var int
     */
    private $height;

    /**
     * @var string
     */
    private $link;

    /**
     * @var ?string
     */
    private $linkWithPlayButton;

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    public function getLinkWithPlayButton(): ?string
    {
        return $this->linkWithPlayButton;
    }

    public function setLinkWithPlayButton(string $linkWithPlayButton = null): void
    {
        $this->linkWithPlayButton = $linkWithPlayButton;
    }
}
