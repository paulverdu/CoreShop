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

namespace CoreShop\Component\Payment\Model;

use CoreShop\Component\Resource\Model\ResourceInterface;
use CoreShop\Component\Resource\Model\TimestampableInterface;

interface PaymentInterface extends ResourceInterface, TimestampableInterface
{
    const STATE_NEW = 'new';
    const STATE_AUTHORIZED = 'authorized';
    const STATE_PROCESSING = 'processing';
    const STATE_COMPLETED = 'completed';
    const STATE_FAILED = 'failed';
    const STATE_CANCELLED = 'cancelled';
    const STATE_REFUNDED = 'refunded';
    const STATE_UNKNOWN = 'unknown';

    /**
     * @return PaymentProviderInterface
     */
    public function getPaymentProvider();

    /**
     * @param PaymentProviderInterface $paymentProvider
     */
    public function setPaymentProvider(PaymentProviderInterface $paymentProvider);

    /**
     * @return \DateTime
     */
    public function getDatePayment();

    /**
     * @param \DateTime $datePayment
     */
    public function setDatePayment($datePayment);

    /**
     * @return string
     */
    public function getState();

    /**
     * @param string $state
     */
    public function setState($state);

    /**
     * @return int
     */
    public function getTotalAmount();

    /**
     * @param int $amount
     */
    public function setTotalAmount($amount);

    /**
     * @return string
     */
    public function getNumber();

    /**
     * @param string $number
     */
    public function setNumber($number);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @var string $description
     */
    public function setDescription($description);

    /**
     * @return object
     */
    public function getDetails();

    /**
     * @var object|array $details
     */
    public function setDetails($details);

    /**
     * @return string
     */
    public function getCurrencyCode();

    /**
     * @param string $currencyCode
     */
    public function setCurrencyCode($currencyCode);
}
