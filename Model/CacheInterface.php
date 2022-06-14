<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

namespace Hryvinskyi\PageSpeedApi\Model;

interface CacheInterface
{
    public const CACHE_TAG = 'HRYVINSKYI_PAGESPEED_CACHE';
    public const MAIN_FOLDER = 'pagespeed_cache';

    /**
     * @return string
     */
    public function getRootCachePath(): string;
}
