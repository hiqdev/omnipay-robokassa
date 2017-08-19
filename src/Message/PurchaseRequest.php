<?php
/**
 * RoboKassa driver for Omnipay PHP payment library.
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

    public function getSignature()
    {
        return $this->getParameter('signature');
    }

    public function setSignature($value)
    {
        return $this->setParameter('signature', $value);
    }

    public function getInvId()
    {
        return $this->getParameter('inv_id');
    }

    public function setInvId($value)
    {
        return $this->setParameter('inv_id', $value);
    }

    public function getClient()
    {
        return $this->getParameter('client');
    }

    public function setClient($value)
    {
        return $this->setParameter('client', $value);
    }

    public function getTime()
    {
        return $this->getParameter('time');
    }

    public function setTime($value)
    {
        return $this->setParameter('time', $value);
    }

    public function getShpCart()
    {
        return $this->getParameter('shp_cart');
    }

    public function setShpCart($value)
    {
        return $this->setParameter('shp_cart', $value);
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
            'InvId' => $this->getInvId(),
            'Culture' => $this->getLanguage(),
            'ShpCart' => $this->getShpCart(),
            'ShpClient' => $this->getClient(),
            'ShpTime' => $this->getTime(),
            'SignatureValue' => $this->getSignature(),
        ];
    }

    public function sendData($data)
    {
        return $this->response = new PurchaseResponse($this, $data);
    }
}
