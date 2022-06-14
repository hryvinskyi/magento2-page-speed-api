<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\PageSpeedApi\Api;

interface GetContentFromTagInterface
{
    /**
     * @param string $tagHtml
     * @return string
     */
    public function execute(string $tagHtml): string;
}
