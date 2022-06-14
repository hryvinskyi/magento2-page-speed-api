<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\PageSpeedApi\Api\Html;

interface ReplaceIntoHtmlInterface
{
    /**
     * @param string $html
     * @param string $replacement
     * @param int $start
     * @param int $end
     * @return string
     */
    public function execute(string $html, string $replacement, int $start, int $end): string;
}
