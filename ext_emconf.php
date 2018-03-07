<?php
/*
 * This file is part of the "ce_accordion" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Accordion content element',
    'description' => 'Lightweight accordion content element for TYPO3 CMS',
    'category' => 'fe',
    'version' => '0.1.0',
    'state' => 'beta',
    'author' => 'NIMIUS GmbH',
    'author_email' => 'info@nimius.net',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-8.7.99',
        ],
    ],
];
