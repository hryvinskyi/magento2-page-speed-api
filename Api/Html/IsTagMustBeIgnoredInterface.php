<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\PageSpeedApi\Api\Html;

interface IsTagMustBeIgnoredInterface
{
    /**
     * @param string $tagHtml
     * @param array $ignoreTagList
     * @param array $anchorList
     * @return bool
     */
    public function execute(string $tagHtml, array $ignoreTagList = [], array $anchorList = []): bool;
}
