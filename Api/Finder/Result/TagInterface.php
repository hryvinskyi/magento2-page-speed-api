<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

namespace Hryvinskyi\PageSpeedApi\Api\Finder\Result;

interface TagInterface extends RawInterface
{
    /**
     * @return array
     */
    public function getAttributes(): array;

    /**
     * @param string $key
     *
     * @return bool
     */
    public function hasAttribute(string $key): bool;

    /**
     * @param array $attributes
     * @return string
     */
    public function getContentWithUpdatedAttribute(array $attributes): string;
}
