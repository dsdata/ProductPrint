<?php
/**
 * @category Dsdata
 * @package Dsdata_ProductPrint
 * @authors Daniel Sasse <info@dsdata.de, http://www.dsdata.de/>
 * @developer Daniel Sasse <info@dsdata.de, http://www.dsdata.de/>  
 * @version 0.1.1
 * @copyright dsdata.de, Daniel Sasse
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)  
 */
 
class Dsdata_ProductPrint_Helper_Data extends Mage_Core_Helper_Abstract
{
    
	const XML_PATH_ENABLED   = 'catalog/productprint/enabled'; 

    public function isEnabled()
    {
        return Mage::getStoreConfig( self::XML_PATH_ENABLED );
    }
	
	
}