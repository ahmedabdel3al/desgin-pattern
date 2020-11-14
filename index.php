<?php

use App\Pattern\Adapter\SmsAdapter;
use App\Pattern\Adapter\SmsService;

require_once __DIR__ . '/vendor/autoload.php';

$smsService = new SmsAdapter(new SmsService);

echo $smsService->send();
