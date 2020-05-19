<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Administration URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by Laravel Admin panel
    |
    */

    'route_prefix' => 'admin',

    /*
    |--------------------------------------------------------------------------
    | Google map api key
    |--------------------------------------------------------------------------
    |
    | Set your own Google map api key
    |
    */

    'google_map_api' => '',

    /*
    |--------------------------------------------------------------------------
    | Display modules
    |--------------------------------------------------------------------------
    |
    | Set modules you want to show
    |
    */

    'modules' => [
        'blog'      => false,
        'galleries' => true,
        'pages'     => false,
        'leads'     => false,
        'places'    => false,
        'shop'      => false,
        'services'  => true,
        'projects'  => true,
        'settings'  => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Dashboard default module
    |--------------------------------------------------------------------------
    |
    | Set default module for Admin dashboard
    |
    */

    'dashboard_module' => 'projects',

    /*
    |--------------------------------------------------------------------------
    | Invoice
    |--------------------------------------------------------------------------
    |
    | Set you billing info for invoice.pdf
    |
    */

    'invoice' => [
        'address'         => '',
        'phone'           => '',
        'website'         => '',
        'email'           => '',
        'company_name'    => '',
        'company_number'  => '',
        'tax_id'          => '',
        'vat'             => '',
        'beneficiary'     => '',
        'IBAN'            => '',
        'swift'           => '',
        'bank'            => '',
        'account_no'      => '',
        'proforma_notice' => '',
        'notice'          => '',
        'signee'          => '',
    ],
];
