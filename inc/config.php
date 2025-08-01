<?php


function config($key)
{
    static $configuration = [
        'phone_number' => '(800) 000-0000',
        'email_id' => 'info@wineblues.com',
        'address' => '10 Hollinsworth Rd, Marsden Park NSW 2765, Australia',
        'domain_name' => 'wineblues.com',
    ];

    return isset($configuration[$key]) ? $configuration[$key] : null;
}
