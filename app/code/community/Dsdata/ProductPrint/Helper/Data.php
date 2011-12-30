<?php
/**
 * @category Dsdata
 * @package Dsdata_ProductPrint
 * @authors Daniel Sasse <info@golox-web.de, http://www.golox-web.de/>
 * @developer Daniel Sasse <info@golox-web.de, http://www.golox-web.de/>  
 * @version 0.1.0
 * @copyright Golox-Web.de, Daniel Sasse
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