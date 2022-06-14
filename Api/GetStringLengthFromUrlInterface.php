<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\PageSpeedApi\Api;

interface GetStringLengthFromUrlInterface
{
    /**
     * @param string $url
     * @return int
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function execute(string $url): int;
}
