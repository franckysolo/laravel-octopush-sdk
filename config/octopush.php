<?php

/*
|--------------------------------------------------------------------------
| Octopush API Configuration
|--------------------------------------------------------------------------
|
| @see http://www.octopush.com/api-sms-documentation
|
*/


return [
  'api' => 'Octopush',
  'login' => env('SMS_API_LOGIN', 'your-email'),
  'api_key' => env('SMS_API_KEY', 'your-api-key'),
];
