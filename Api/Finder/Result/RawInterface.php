<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

namespace Hryvinskyi\PageSpeedApi\Api\Finder\Result;

interface RawInterface
{
    /**
     * @return string
     */
    public function getContent(): string;

    /**
     * @param string $content
     * @return void
     */
    public function setContent(string $content): void;

    /**
     * @return int
     */
    public function getStart(): int;

    /**
     * @param int $start
     * @return void
     */
    public function setStart(int $start): void;

    /**
     * @return int
     */
    public function getEnd(): int;

    /**
     * @param int $end
     * @return void
     */
    public function setEnd(int $end): void;
}
