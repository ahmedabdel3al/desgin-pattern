<?php

namespace App\Pattern\Adapter;

use App\Pattern\Adapter\Contract\SmsContract;

class SmsAdapter implements SmsContract
{
    protected $smsService;

    public function __construct(SmsService $smsService)
    {
        $this->smsService = $smsService;
    }
    public function send(): bool
    {
        return $this->smsService->send();
    }
}
