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
 * Data Helper
 *
 * @package     Ash_Sort
 * @subpackage  Ash_Sort_Helper
 * @author      August Ash Team <core@augustash.com>
 */
class Ash_Sort_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_LIST_DEFAULT_DIR = 'catalog/frontend/default_sort_direction';
}
