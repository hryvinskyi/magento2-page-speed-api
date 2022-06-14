<?php
/**
 * Copyright (c) 2022. MageCloud.  All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\PageSpeedApi\Api\Html;

interface InsertStringBeforeBodyEndInterface
{
    /**
     * @param string $insertString
     * @param string $html
     * @return string
     */
    public function execute(string $insertString, string $html): string;
}
