<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\PageSpeedApi\Api;

interface GetLastFileChangeTimestampForUrlListInterface
{
    /**
     * @param array $urls
     * @return int
     */
    public function execute(array $urls): int;
}
