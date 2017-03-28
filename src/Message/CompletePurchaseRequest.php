<?php

/*
 * RoboKassa driver for the Omnipay PHP payment processing library
 *
 * @link      https://github.com/hiqdev/omnipay-epayservice
 * @package   omnipay-epayservice
 * @license   MIT
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace Omnipay\RoboKassa\Message;

/**
 * RoboKassa Complete Purchase Request.
 */
class CompletePurchaseRequest extends AbstractRequest
{
    /**
     * Get the data for this request.
     *
     * @return array request data
     */
    public function getData()
    {
        $this->validate('purse');

        return $this->httpRequest->request->all();
    }

    /**
     * Send the request with specified data.
     *
     * @param mixed $data The data to send
     *
     * @return CompletePurchaseResponse
     */
    public function sendData($data)
    {
        return $this->response = new CompletePurchaseResponse($this, $data);
    }
}
