<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

namespace Hryvinskyi\PageSpeedApi\Api\Finder;

use Hryvinskyi\PageSpeedApi\Api\Finder\Result\RawInterface;

interface FinderInterface
{
    /**
     * @param string $haystack
     * @param null|int $start
     * @param null|int $end
     *
     * @return RawInterface[]
     */
    public function findAll(string $haystack, int $start = null, int $end = null): array;
}
