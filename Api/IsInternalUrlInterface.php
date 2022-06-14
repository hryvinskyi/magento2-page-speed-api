<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

namespace Hryvinskyi\PageSpeedApi\Api;

interface IsInternalUrlInterface
{
    /**
     * @param string $url
     * @return bool
     */
    public function execute(string $url): bool;
}
