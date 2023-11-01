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

namespace App\Entity\Currency;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Currency\Model\Currency as BaseCurrency;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_currency")
 */
#[ORM\Entity]
#[ORM\Table(name: 'sylius_currency')]
class Currency extends BaseCurrency
{
}
