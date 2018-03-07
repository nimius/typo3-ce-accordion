<?php
namespace NIMIUS\CeAccordion\ViewHelpers;

/*
 * This file is part of the "ce_accordion" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * AccordionArray view helper.
 *
 * Builds an array containing accordion information and rendered output.
 * This is a compatibility layer to older versions not supporting nested inline
 * fluid statements (i.e. {data.tx_gridelements_view_child_{content.uid}}).
 */
class AccordionArrayViewHelper extends AbstractViewHelper
{
    /**
     * Builds an array for simple access based on given input.
     *
     * @param array $data Gridelements data array.
     * @return array
     */
    public function render(array $data)
    {
        $array = [];
        foreach ($data['tx_gridelements_view_children'] as $child) {
            $array[] = [
                'header' => $child['header'],
                'body' => $data['tx_gridelements_view_child_' . $child['uid']],
                'data' => $child
            ];
        }
        return $array;
    }
}
