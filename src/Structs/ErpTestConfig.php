<?php

namespace OxErpTest\Structs;

final class ErpTestConfig extends Base
{

    const ERP_MODULE_PATH = '/modules/erp/oxerpservice.php';

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $erpVersion;

    /**
     * @var string
     */
    public $shopUrl;

    /**
     * @var integer
     */
    public $shopId;

    /**
     * @var integer
     */
    public $languageId;

    /**
     * @return string
     */
    public function getWSDLUrl()
    {
        return $this->shopUrl . self::ERP_MODULE_PATH . '?wsdl&version=' . $this->erpVersion;
    }

    /**
     * @return string
     */
    public function getSoapLoacation()
    {
        return $this->shopUrl . self::ERP_MODULE_PATH . '?version=' . $this->erpVersion;;
    }

}
