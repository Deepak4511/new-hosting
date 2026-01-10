<?php

$FAIR_USAGE_HERO = [
    'title' => 'Fair Usage Policy',
    'subtitle' => 'Guidelines ensuring fair and reliable performance for all clients.',
    'last_updated' => 'Read Our Policies'
];

$FAIR_USAGE_CONTENT = [
    [
        'title' => 'Introduction',
        'content' => 'The Acceptable Use Policy (AUP) outlines specific prohibited behaviors and activities while using DmcaQloud services. This policy ensures the reliability, security, and reputation of our network.',
        'points' => [
            'Usage of services constitutes full acceptance of this policy.',
            'DmcaQloud reserves the right to suspend or terminate services for violations.'
        ]
    ],
    [
        'title' => '1. Network Fairness',
        'content' => 'To maintain optimal stability for all users:',
        'points' => [
            'Fair Share: CPU, RAM, and I/O usage must be reasonable.',
            'No abusive high-load scripts on shared environments.',
            'Dedicated servers allow full resource usage up to the hardware limits.',
            'Shared speeds are "best effort" basis.'
        ]
    ],
    [
        'title' => '2. Zero-Tolerance Violations',
        'content' => 'The following activities result in immediate suspension:',
        'subsections' => [
            [
                'subtitle' => '2.1 Illegal Content',
                'points' => [
                    'Child Exploitation (CSAM) — STRICTLY PROHIBITED.',
                    'Terrorist Activities or Content.',
                    'Live phishing sites or scam pages.',
                    'Malware distribution points.'
                ]
            ],
            [
                'subtitle' => '2.2 Cyber-Attacks',
                'points' => [
                    'DDoS Initiating / Stressers (Outbound attacks).',
                    'Botnet Command & Control (C&C).',
                    'Port Scanning / Brute Force Tools.',
                    'Network Interference or Spoofing.'
                ]
            ],
            [
                'subtitle' => '2.3 Fraud & Scams',
                'points' => [
                    'Carding / Credit Card fraud.',
                    'Fake pharmacies or investment scams.',
                    'Pyramid or Ponzi schemes.'
                ]
            ]
        ],
        'alert_box' => 'INSTANT TERMINATION: Any violation in this section results in immediate termination with NO REFUND.'
    ],
    [
        'title' => '3. Legal Adult Content',
        'content' => 'Policy regarding adult materials:',
        'points' => [
            'We DO allow legal adult content (18+).',
            'Must comply with Dutch and International laws.',
            'No non-consensual content.',
            'Content must be clearly labeled.'
        ]
    ],
    [
        'title' => '4. Resource Limits',
        'points' => [
            'CPU: 100% usage allowed on Dedicated.',
            'Bandwidth: Fair usage on "Unmetered" lines.',
            'Inodes: No artificial limits on Dedicated.',
            'Processes: Unlimited.'
        ]
    ],
    [
        'title' => '5. Enforcement',
        'points' => [
            '1st Violation: Warning or 24h suspension.',
            '2nd Violation: Termination of services.',
            'Severe Violation (Section 2): Immediate Termination.',
            'Reports: abuse@dmcaqloud.com'
        ]
    ]
];
