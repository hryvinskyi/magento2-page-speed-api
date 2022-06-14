<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

namespace Hryvinskyi\PageSpeedApi\Api;

interface GetLocalPathFromUrlInterface
{
    /**
     * @param string $url
     * @return string
     */
    public function execute(string $url): string;
}
