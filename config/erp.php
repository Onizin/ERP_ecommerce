<?php

return [

    'core' => [
        'connection' => env('ERP_CORE_CONNECTION', 'erp_core'),
        'tables' => [
            'users' => env('ERP_CORE_USERS_TABLE', 'users'),
            'roles' => env('ERP_CORE_ROLES_TABLE', 'roles'),
            'categories' => env('ERP_CORE_CATEGORIES_TABLE', 'categories'),
            'products' => env('ERP_CORE_PRODUCTS_TABLE', 'products'),
        ],
    ],

    'sales' => [
        'connection' => env('ERP_SALES_CONNECTION', 'erp_sales'),
        'tables' => [
            'orders' => env('ERP_SALES_ORDERS_TABLE', 'orders'),
        ],
    ],

];