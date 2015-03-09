<?php
/**
 * Atwix
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.

 * @category    Atwix Mod
 * @package     Atwix_EmailAjax
 * @author      Atwix Core Team
 * @copyright   Copyright (c) 2014 Atwix (http://www.atwix.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Atwix_EmailAjax_AddressController extends Mage_Core_Controller_Front_Action
{

    /**
     * Check if customer email already exists
     *
     */

    public function checkEmailExistsAction()
    {
        $emailAddress = $this->getRequest()->getParam('emailAddress');

        $result = Mage::helper('atwix_emailajax')->checkEmailExists($emailAddress);

        $this->getResponse()->setBody($result);
    }

}
