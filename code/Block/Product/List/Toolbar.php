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
 * Product list toolbar
 *
 * @category    Ash_Sort
 * @package     Ash_Sort_Block
 * @author      August Ash Team <core@augustash.com>
 */
class Ash_Sort_Block_Product_List_Toolbar extends Mage_Catalog_Block_Product_List_Toolbar
{
    /**
     * Init Toolbar
     *
     * @return  void
     */
    protected function _construct()
    {
        parent::_construct();

        // pull in direction from system configuration
        $dir = Mage::getStoreConfig(Ash_Sort_Helper_Data::XML_PATH_LIST_DEFAULT_DIR);
        $this->setDefaultDirection($dir);
    }
}
