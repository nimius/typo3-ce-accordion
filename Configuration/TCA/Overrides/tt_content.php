<?php
/*
 * This file is part of the "ce_accordion" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

// Register PageTS configuration for inclusion.
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'ce_accordion',
    'EXT:ce_accordion/Configuration/TypoScript/PageTS/Configuration.txt',
    'Accordion Content Element'
);
