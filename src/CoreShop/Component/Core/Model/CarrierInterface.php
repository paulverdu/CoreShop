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

namespace CoreShop\Component\Core\Model;

use CoreShop\Component\Shipping\Model\CarrierInterface as BaseCarrierInterface;
use CoreShop\Component\Store\Model\StoresAwareInterface;
use CoreShop\Component\Taxation\Model\TaxRuleGroupInterface;

interface CarrierInterface extends BaseCarrierInterface, StoresAwareInterface
{
    /**
     * @return TaxRuleGroupInterface
     */
    public function getTaxRule();

    /**
     * @param TaxRuleGroupInterface $taxRule
     *
     * @return mixed
     */
    public function setTaxRule(TaxRuleGroupInterface $taxRule);
}
