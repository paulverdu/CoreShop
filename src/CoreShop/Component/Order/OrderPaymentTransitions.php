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

namespace CoreShop\Component\Order;

final class OrderPaymentTransitions
{
    const IDENTIFIER = 'coreshop_order_payment';

    const TRANSITION_REQUEST_PAYMENT = 'request_payment';
    const TRANSITION_PARTIALLY_AUTHORIZE = 'partially_authorize';
    const TRANSITION_AUTHORIZE = 'authorize';
    const TRANSITION_PARTIALLY_PAY = 'partially_pay';
    const TRANSITION_CANCEL = 'cancel';
    const TRANSITION_PAY = 'pay';
    const TRANSITION_PARTIALLY_REFUND = 'partially_refund';
    const TRANSITION_REFUND = 'refund';
}
