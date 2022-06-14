<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\PageSpeedApi\Api;

interface PutContentInFileInterface
{
    /**
     * @param string $content
     * @param string $filePath
     * @return void
     */
    public function execute(string $content, string $filePath): void;
}
