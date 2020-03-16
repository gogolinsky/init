<?php

use Cekurte\Environment\Environment;
use kartik\icons\Icon;

return [
    'email_from' => Environment::get('SMTP_USERNAME'),
    'icon-framework' => Icon::TYP,
];
