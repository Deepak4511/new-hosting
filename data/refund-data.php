<?php

$REFUND_HERO = [
    'title' => 'Refund Policy',
    'subtitle' => 'DmcaQloud.com — No Refunds. No Trails. Zero Exceptions.',
    'last_updated' => 'Updated: January 2026'
];

$REFUND_ALERTS = [
    [
        'type' => 'danger',
        'title' => 'NO REFUNDS. ALL SALES ARE FINAL.',
        'text' => 'Due to the nature of our anonymous and offshore services, ALL payments are non-refundable once service is delivered.'
    ],
    [
        'type' => 'info',
        'title' => 'EXCEPTION FOR NON-DELIVERY',
        'text' => 'If we fail to deliver your service within 72 hours of payment confirmation, you are eligible for a full refund within 5 to 7 business days.'
    ]
];

$REFUND_CONTENT = [
    [
        'title' => '1. Why We Do Not Offer Refunds',
        'content' => 'Our infrastructure implies real, physical and intellectual costs immediately upon activation:',
        'points' => [
            'Instant Provisioning: Resources are automatically allocated.',
            'Irreversible Costs: Windows licenses, IP allocations, and bandwidth are paid upfront.',
            'Anonymous Nature: We do not perform KYC, so we cannot verify identity for refunds.',
            'No Contracts: You pay month-to-month and can cancel anytime (non-renewal).'
        ]
    ],
    [
        'title' => '2. All Products & Services Are Non-Refundable',
        'content' => 'This includes, but is not limited to:',
        'subsections' => [
            [
                'subtitle' => 'Hosting Services',
                'points' => [
                    'Offshore VPS & Dedicated Servers',
                    'Video & Streaming Servers',
                    'Shared & Reseller Hosting',
                    'Additional IP Addresses'
                ]
            ],
            [
                'subtitle' => 'Licenses & Addons',
                'points' => [
                    'cPanel / WHM Licenses',
                    'Windows Server Licenses',
                    'Extra Bandwidth',
                    'Management Fees'
                ]
            ]
        ]
    ],
    [
        'title' => '3. You Will NOT Get a Refund If...',
        'content' => 'We strictly do not grant refunds for:',
        'points' => [
            'You changed your mind.',
            'You do not know how to manage a server (Unmanaged).',
            'You violated our Terms or AUP (Abuse/spam/illegal content).',
            'You found a cheaper competitor.',
            'Service downtime resulting from your own misconfiguration.'
        ]
    ],
    [
        'title' => '4. Cancellation Policy',
        'points' => [
            'Cancellations must be requested 24 hours before the renewal date.',
            'We DO NOT offer prorated refunds for unused time.',
            'Once cancelled, all data is legally terminated and irretrievable.'
        ]
    ],
    [
        'title' => '5. Chargebacks & Disputes',
        'alert_box' => 'CHARGEBACK = PERMANENT BAN',
        'points' => [
            'Any dispute or chargeback will result in immediate termination of ALL services.',
            'Your account, data, and IPs will be blacklisted across our network.',
            'We report all fraudulent chargebacks to industry fraud databases (FraudRecord).'
        ]
    ]
];
