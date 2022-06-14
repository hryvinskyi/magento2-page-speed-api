<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

namespace Hryvinskyi\PageSpeedApi\Model;

interface ModificationInterface
{
    /**
     * @param string $html
     * @return void
     */
    public function execute(string &$html): void;
}
