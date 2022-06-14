<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

namespace Hryvinskyi\PageSpeedApi\Api\Finder;

interface CssInterface extends FinderInterface
{
    /**
     * @param string $haystack
     * @param null|int $start
     * @param null|int $end
     *
     * @return array
     */
    public function findInline($haystack, $start = null, $end = null);

    /**
     * @param string $haystack
     * @param null|int $start
     * @param null|int $end
     *
     * @return array
     */
    public function findExternal($haystack, $start = null, $end = null);
}
