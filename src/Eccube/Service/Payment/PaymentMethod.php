<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eccube\Service\Payment;

use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\HttpFoundation\Response;

/**
 * PaymentMethod
 *
 * 必要に応じて決済手段ごとに実装する
 */
interface PaymentMethod
{
    /**
     * @return PaymentResult
     */
    public function checkout();

    /**
     * @return PaymentDispatcher
     */
    public function apply();

    /**
     * @param FormTypeInterface
     */
    public function setFormType(FormTypeInterface $form);
}
