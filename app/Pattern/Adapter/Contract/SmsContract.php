<?php

namespace App\Pattern\Adapter\Contract;


interface SmsContract
{
    /**
     * Send Sms
     *
     * @return boolean
     */
    public function send(): bool;
}
