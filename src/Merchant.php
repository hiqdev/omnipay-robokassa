<?php

/*
 * RoboKassa plugin for PHP merchant library
 *
 * @link      https://github.com/hiqdev/php-merchant-robokassa
 * @package   php-merchant-robokassa
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\php\merchant\robokassa;

class Merchant extends \hiqdev\php\merchant\Merchant
{
    protected static $_defaults = [
        'system'    => 'robokassa',
        'label'     => 'RoboKassa',
        'actionUrl' => 'https://merchant.roboxchange.com/Index.aspx',
        'language'  => 'ru', /// TODO pass user language
    ];

    public function getInputs()
    {
        return [
            'MrchLogin'      => $this->purse,
            'OutSum'         => $this->total,
            'Desc'           => $this->description,
            'SignatureValue' => $this->signature,
            'InvId'          => 0, /// generate id for us
            'IncCurrLabel'   => $this->currency,
            'Culture'        => $this->language,
            'ShpCart'        => $this->isCart,
            'ShpClient'      => $this->username,
            'ShpTime'        => $this->time,
        ];
    }

    public function getSignature()
    {
        // generate signature md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1:Shp_item=$shp_item");
        $str = implode(':', [
            $this->purse, $this->total, $this->invoiceNo, $this->_secret,
            'ShpCart=' . $this->isCart, 'ShpClient=' . $this->username, 'ShpTime=' . $this->time,
        ]);

        return md5($str);
    }

    public function validateConfirmation($data)
    {
        /// nOutSum:nInvId:sMerchantPass2[:пользовательские параметры, в отсортированном порядке]
        $str = implode(':', [
            $data['OutSum'], $data['InvId'], $this->_secret2,
            'ShpCart=' . $data['ShpCart'], 'ShpClient=' . $this->username, 'ShpTime=' . $data['ShpTime'],
        ]);
        if (md5($str) !== strtolower($data['SignatureValue'])) {
            return 'Wrong hash';
        }
        $this->mset([
            'sum'    => $data['OutSum'],
            'txn'    => $data['InvId'],
            'time'   => $data['ShpTime'],
            'isCart' => $data['ShpCart'],
        ]);

        return;
    }
}
