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

namespace App\Entity\Payment;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Payment\Model\PaymentMethodTranslation as BasePaymentMethodTranslation;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_payment_method_translation")
 */
#[ORM\Entity]
#[ORM\Table(name: 'sylius_payment_method_translation')]
class PaymentMethodTranslation extends BasePaymentMethodTranslation
{
}
