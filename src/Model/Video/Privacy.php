<?php

declare(strict_types=1);

namespace Shapin\Vimeo\Model\Video;

final class Privacy
{
    /**
     * @var string
     */
    private $view;

    /**
     * @var string
     */
    private $embed;

    /**
     * @var bool
     */
    private $download;

    /**
     * @var bool
     */
    private $add;

    /**
     * @var string
     */
    private $comments;

    public function getView(): string
    {
        return $this->view;
    }

    public function setView(string $view): void
    {
        $this->view = $view;
    }

    public function getEmbed(): string
    {
        return $this->embed;
    }

    public function setEmbed(string $embed): void
    {
        $this->embed = $embed;
    }

    public function allowDownload(): bool
    {
        return $this->download;
    }

    public function setDownload(bool $download): void
    {
        $this->download = $download;
    }

    public function allowAdd(): bool
    {
        return $this->add;
    }

    public function setAdd(bool $add): void
    {
        $this->add = $add;
    }

    public function getComments(): string
    {
        return $this->comments;
    }

    public function setComments(string $comments): void
    {
        $this->comments = $comments;
    }
}
