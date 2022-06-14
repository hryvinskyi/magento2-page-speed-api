<?php
/**
 * Copyright (c) 2022. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

namespace Hryvinskyi\PageSpeedApi\Model;

class ModificationsList
{
    /**
     * @var array
     */
    private array $modifications;

    /**
     * @param array $modifications
     */
    public function __construct(array $modifications = [])
    {
        foreach ($modifications as $item) {
            if (isset($item['object']) === false) {
                throw new \InvalidArgumentException('The object is empty');
            }

            if (!$item['object'] instanceof ModificationInterface) {
                throw new \InvalidArgumentException(
                    'The modification should be implemented of ' . ModificationInterface::class
                );
            }
        }

        usort($modifications, static function ($a, $b) {
            if (isset($a['sortOrder']) === false || isset($b['sortOrder']) === false) {
                return true;
            }

            return $a['sortOrder'] <=> $b['sortOrder'];
        });

        $this->modifications = [];
        foreach ($modifications as $item) {
            $this->modifications[] = $item['object'];
        }
    }

    /**
     * @return ModificationInterface[]
     */
    public function get(): array
    {
        return $this->modifications;
    }
}
