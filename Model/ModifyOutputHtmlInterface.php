<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

namespace Hryvinskyi\PageSpeedApi\Model;

interface ModifyOutputHtmlInterface
{
    /**
     * @param string $html
     * @return string
     */
    public function execute(string $html): string;
}
