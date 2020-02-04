<?php

declare(strict_types=1);

namespace Shapin\Vimeo\Model\Video;

final class Embed
{
    /**
     * @var string
     */
    private $html;

    /**
     * @var array<string>
     */
    private $badges;

    public function getHtml(): string
    {
        return $this->html;
    }

    public function setHtml(string $html): void
    {
        $this->html = $html;
    }

    /**
     * @return array<string>
     */
    public function getBadges(): array
    {
        return $this->badges;
    }

    /**
     * @param array<string> $badges
     */
    public function setBadges(array $badges): void
    {
        $this->badges = $badges;
    }
}
