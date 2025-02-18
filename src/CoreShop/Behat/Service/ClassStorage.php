<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) CoreShop GmbH (https://www.coreshop.org)
 * @license    https://www.coreshop.org/license     GNU General Public License version 3 (GPLv3)
 */

declare(strict_types=1);

namespace CoreShop\Behat\Service;

class ClassStorage implements ClassStorageInterface
{
    /**
     * @var array
     */
    private array $storage = [];

    public function get(string $className): string
    {
        if (!isset($this->storage[$className])) {
            throw new \InvalidArgumentException(sprintf('There is no class name for "%s"!', $className));
        }

        return $this->storage[$className];
    }

    public function has(string $className): bool
    {
        return isset($this->storage[$className]);
    }

    public function set(string $className): string
    {
        $this->storage[$className] = $this->getBehatClassName($className);

        return $this->storage[$className];
    }

    private function getBehatClassName(string $className): string
    {
        return sprintf('Behat%s%s', $className, uniqid());
    }
}
