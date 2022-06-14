<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\PageSpeedApi\Api;

interface GetRequireJsBuildScriptUrlInterface
{
    public const LIB_JS_BUILD_SCRIPT = 'mage/requirejs/static.js';

    /**
     * @param string $url
     * @return string
     */
    public function execute(string $url): string;
}
