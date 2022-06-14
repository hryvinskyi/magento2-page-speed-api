<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\PageSpeedApi\Model;

use Hryvinskyi\PageSpeedApi\Api\Finder\Result\RawInterface;

interface MergerInterface
{
    /**
     * @param RawInterface[] $list
     * @return string|null
     */
    public function merge(array $list): ?string;
}
