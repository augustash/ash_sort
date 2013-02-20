<?php
/**
 * This extension adds user selectable product sort direction and additional
 * catalog sorting options to show products added most recently.
 *
 * @category    Ash
 * @package     Ash_Sort
 * @copyright   Copyright (c) 2011 August Ash, Inc. (http://www.augustash.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author      August Ash Team <core@augustash.com>
 */

/**
 * Adminhtml Catalog Product List Sort Direction
 *
 * @category    Ash_Sort
 * @package     Ash_Sort_Model
 * @author      August Ash Team <core@augustash.com>
 */
class Ash_Sort_Model_System_Config_Source_Catalog_Sort_Direction
{
    /**
     * Retrieve option values array
     *
     * @return  array
     */
    public function toOptionArray()
    {
        $options = array();
        $options[] = array(
            'label' => Mage::helper('catalog')->__('Ascending'),
            'value' => 'asc'
        );
        $options[] = array(
            'label' => Mage::helper('catalog')->__('Descending'),
            'value' => 'desc'
        );
        return $options;
    }
}
