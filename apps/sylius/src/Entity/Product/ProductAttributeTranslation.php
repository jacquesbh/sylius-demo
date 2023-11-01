<?php

/*
 * This file is part of a proprietary project.
 *
 * (c) Monsieur Biz <sylius@monsieurbiz.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Product\Model\ProductAttributeTranslation as BaseProductAttributeTranslation;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product_attribute_translation")
 */
#[ORM\Entity]
#[ORM\Table(name: 'sylius_product_attribute_translation')]
class ProductAttributeTranslation extends BaseProductAttributeTranslation
{
}
