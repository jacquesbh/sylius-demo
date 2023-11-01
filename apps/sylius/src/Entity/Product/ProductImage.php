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
use Sylius\Component\Core\Model\ProductImage as BaseProductImage;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product_image")
 */
#[ORM\Entity]
#[ORM\Table(name: 'sylius_product_image')]
class ProductImage extends BaseProductImage
{
}
