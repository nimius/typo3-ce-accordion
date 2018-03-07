<?php
/*
 * This file is part of the "ce_accordion" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

// Load TypoScript rendering configuration after gridelements.
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    $_EXTKEY,
    'setup',
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ce_accordion/Configuration/TypoScript/Setup/Rendering.txt">',
    'gridelements/Configuration/TypoScript/'
);
