<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\PageSpeedApi\Api\Html;

interface GetStringFromHtmlInterface
{
    /**
     * @param string $html
     * @param int $start
     * @param int $end
     *
     * @return string
     */
    public function execute(string $html, int $start, int $end): string;
}
