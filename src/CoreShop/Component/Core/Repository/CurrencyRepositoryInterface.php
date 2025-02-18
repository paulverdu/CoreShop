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

namespace CoreShop\Component\Core\Repository;

use CoreShop\Component\Core\Model\CurrencyInterface;
use CoreShop\Component\Currency\Repository\CurrencyRepositoryInterface as BaseCurrencyRepositoryInterface;
use CoreShop\Component\Store\Model\StoreInterface;

interface CurrencyRepositoryInterface extends BaseCurrencyRepositoryInterface
{
    /**
     * @param StoreInterface $store
     *
     * @return CurrencyInterface[]
     */
    public function findActiveForStore(StoreInterface $store): array;
}
