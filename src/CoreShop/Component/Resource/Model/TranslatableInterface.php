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

namespace CoreShop\Component\Resource\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

interface TranslatableInterface
{
    /**
     * @return Collection|ArrayCollection<TranslationInterface>
     */
    public function getTranslations();

    /**
     * @param string|null $locale
     *
     * @return TranslationInterface
     */
    public function getTranslation($locale = null);

    /**
     * @param TranslationInterface $translation
     *
     * @return bool
     */
    public function hasTranslation(TranslationInterface $translation);

    /**
     * @param TranslationInterface $translation
     */
    public function addTranslation(TranslationInterface $translation);

    /**
     * @param TranslationInterface $translation
     */
    public function removeTranslation(TranslationInterface $translation);

    /**
     * @param string $locale
     */
    public function setCurrentLocale($locale);

    /**
     * @param string $locale
     */
    public function setFallbackLocale($locale);
}
