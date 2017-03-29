<?php
/**
 * RoboKassa driver for Omnipay PHP payment library
 *
 * @link      https://github.com/hiqdev/omnipay-robokassa
 * @package   omnipay-robokassa
 * @license   MIT
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace Omnipay\RoboKassa\Message;

class PurchaseRequest extends AbstractRequest
{
    public function getCurrency()
    {
        return $this->getParameter('currency');
    }

    public function setCurrency($value)
    {
        return $this->setParameter('currency', $value);
    }

    public function getLanguage()
    {
        return $this->getParameter('language');
    }

    public function setLanguage($value)
    {
        return $this->setParameter('language', $value);
    }

    public function getSignatureValue()
    {
        return $this->getParameter('signature');
    }

    public function setSignatureValue($value)
    {
        return $this->setParameter('signature', $value);
    }

    public function getData()
    {
        $this->validate(
            'purse',
            'amount', 'currency', 'description',
            'returnUrl', 'cancelUrl', 'notifyUrl'
        );

        return [
            'Desc' => $this->getDescription(),
            'MrchLogin' => $this->getPurse(),
            'OutSum' => $this->getAmount(),
            'IncCurrLabel' => $this->getCurrency(),
            'Culture' => $this->getLanguage(),
            'ShpCart' => $this->is_cart,
            'ShpClient' => $this->client,
            'ShpTime' => $this->time,
            'SignatureValue' => $this->getSignatureValue(),
        ];
    }

    public function sendData($data)
    {
        return $this->response = new PurchaseResponse($this, $data);
    }
}
