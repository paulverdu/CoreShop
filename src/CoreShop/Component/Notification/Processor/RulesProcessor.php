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

namespace CoreShop\Component\Notification\Processor;

use CoreShop\Component\Notification\Model\NotificationRuleInterface;
use CoreShop\Component\Notification\Repository\NotificationRuleRepositoryInterface;
use CoreShop\Component\Rule\Condition\RuleValidationProcessorInterface;

class RulesProcessor implements RulesProcessorInterface
{
    private NotificationRuleRepositoryInterface $ruleRepository;
    private RuleValidationProcessorInterface $ruleValidationProcessor;
    private RuleApplierInterface $ruleApplier;

    public function __construct(
        NotificationRuleRepositoryInterface $ruleRepository,
        RuleValidationProcessorInterface $ruleValidationProcessor,
        RuleApplierInterface $ruleApplier
    ) {
        $this->ruleRepository = $ruleRepository;
        $this->ruleValidationProcessor = $ruleValidationProcessor;
        $this->ruleApplier = $ruleApplier;
    }

    public function applyRules(string $type, $subject, array $params = []): void
    {
        $rules = $this->ruleRepository->findForType($type);

        /**
         * @var NotificationRuleInterface $rule
         */
        foreach ($rules as $rule) {
            if ($this->ruleValidationProcessor->isValid($subject, $rule, ['params' => $params])) {
                $this->ruleApplier->applyRule($rule, $subject, $params);
            }
        }
    }
}
