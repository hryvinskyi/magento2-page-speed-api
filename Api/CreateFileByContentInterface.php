<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\PageSpeedApi\Api;

interface CreateFileByContentInterface
{
    /**
     * @param string $content
     * @param string $dir
     * @param string $extension
     * @return string
     */
    public function execute(string $content, string $dir, string $extension): string;
}
