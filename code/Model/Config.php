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
 * Config model
 *
 * @package     Ash_Sort
 * @subpackage  Ash_Sort_Model
 * @author      August Ash Team <core@augustash.com>
 */
class Ash_Sort_Model_Config extends Mage_Catalog_Model_Config
{
    /**
     * Retrieve Attributes array used for sort by
     *
     * @return  array
     */
    public function getAttributesUsedForSortBy()
    {
        parent::getAttributesUsedForSortBy();

        // add attribute for sorting by newest
        $attribute = Mage::getSingleton('eav/config')
            ->getAttribute('catalog_product', 'entity_id');
        $attribute->setData('frontend_label', Mage::helper('ash_sort')->__('New Arrivals'));
        $this->_usedForSortBy['entity_id'] = $attribute;

        return $this->_usedForSortBy;
    }

    /**
     * Retrieve Attributes Used for Sort by as array
     * key = code, value = name
     *
     * @return  array
     */
    public function getAttributeUsedForSortByArray()
    {
        $options = parent::getAttributeUsedForSortByArray();

        // add attribute for sorting by newest
        $options['entity_id'] = Mage::helper('ash_sort')->__('New Arrivals');

        return $options;
    }
}
