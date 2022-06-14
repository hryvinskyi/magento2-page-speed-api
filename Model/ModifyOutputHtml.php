<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

namespace Hryvinskyi\PageSpeedApi\Model;

class ModifyOutputHtml implements ModifyOutputHtmlInterface
{
    private ModificationsList $modificationsList;

    /**
     * @param ModificationsList $modificationsList
     */
    public function __construct(ModificationsList $modificationsList)
    {
        $this->modificationsList = $modificationsList;
    }

    /**
     * @inheritDoc
     */
    public function execute(string $html): string
    {
        foreach ($this->modificationsList->get() as $item) {
            $item->execute($html);
        }

        return $html;
    }
}
