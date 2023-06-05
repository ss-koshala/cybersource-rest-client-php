<?php
/**
 * Invoicingv2invoiceSettingsInvoiceSettingsInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * Invoicingv2invoiceSettingsInvoiceSettingsInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Invoicingv2invoiceSettingsInvoiceSettingsInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'invoicingv2invoiceSettings_invoiceSettingsInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchantLogo' => 'string',
        'merchantDisplayName' => 'string',
        'customEmailMessage' => 'string',
        'enableReminders' => 'bool',
        'headerStyle' => '\CyberSource\Model\InvoicingV2InvoiceSettingsGet200ResponseInvoiceSettingsInformationHeaderStyle',
        'deliveryLanguage' => 'string',
        'defaultCurrencyCode' => 'string',
        'payerAuthenticationInInvoicing' => 'string',
        'showVatNumber' => 'bool',
        'vatRegistrationNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchantLogo' => null,
        'merchantDisplayName' => null,
        'customEmailMessage' => null,
        'enableReminders' => null,
        'headerStyle' => null,
        'deliveryLanguage' => null,
        'defaultCurrencyCode' => null,
        'payerAuthenticationInInvoicing' => null,
        'showVatNumber' => null,
        'vatRegistrationNumber' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'merchantLogo' => 'merchantLogo',
        'merchantDisplayName' => 'merchantDisplayName',
        'customEmailMessage' => 'customEmailMessage',
        'enableReminders' => 'enableReminders',
        'headerStyle' => 'headerStyle',
        'deliveryLanguage' => 'deliveryLanguage',
        'defaultCurrencyCode' => 'defaultCurrencyCode',
        'payerAuthenticationInInvoicing' => 'payerAuthenticationInInvoicing',
        'showVatNumber' => 'showVatNumber',
        'vatRegistrationNumber' => 'vatRegistrationNumber'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchantLogo' => 'setMerchantLogo',
        'merchantDisplayName' => 'setMerchantDisplayName',
        'customEmailMessage' => 'setCustomEmailMessage',
        'enableReminders' => 'setEnableReminders',
        'headerStyle' => 'setHeaderStyle',
        'deliveryLanguage' => 'setDeliveryLanguage',
        'defaultCurrencyCode' => 'setDefaultCurrencyCode',
        'payerAuthenticationInInvoicing' => 'setPayerAuthenticationInInvoicing',
        'showVatNumber' => 'setShowVatNumber',
        'vatRegistrationNumber' => 'setVatRegistrationNumber'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchantLogo' => 'getMerchantLogo',
        'merchantDisplayName' => 'getMerchantDisplayName',
        'customEmailMessage' => 'getCustomEmailMessage',
        'enableReminders' => 'getEnableReminders',
        'headerStyle' => 'getHeaderStyle',
        'deliveryLanguage' => 'getDeliveryLanguage',
        'defaultCurrencyCode' => 'getDefaultCurrencyCode',
        'payerAuthenticationInInvoicing' => 'getPayerAuthenticationInInvoicing',
        'showVatNumber' => 'getShowVatNumber',
        'vatRegistrationNumber' => 'getVatRegistrationNumber'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['merchantLogo'] = isset($data['merchantLogo']) ? $data['merchantLogo'] : null;
        $this->container['merchantDisplayName'] = isset($data['merchantDisplayName']) ? $data['merchantDisplayName'] : null;
        $this->container['customEmailMessage'] = isset($data['customEmailMessage']) ? $data['customEmailMessage'] : null;
        $this->container['enableReminders'] = isset($data['enableReminders']) ? $data['enableReminders'] : null;
        $this->container['headerStyle'] = isset($data['headerStyle']) ? $data['headerStyle'] : null;
        $this->container['deliveryLanguage'] = isset($data['deliveryLanguage']) ? $data['deliveryLanguage'] : null;
        $this->container['defaultCurrencyCode'] = isset($data['defaultCurrencyCode']) ? $data['defaultCurrencyCode'] : null;
        $this->container['payerAuthenticationInInvoicing'] = isset($data['payerAuthenticationInInvoicing']) ? $data['payerAuthenticationInInvoicing'] : null;
        $this->container['showVatNumber'] = isset($data['showVatNumber']) ? $data['showVatNumber'] : false;
        $this->container['vatRegistrationNumber'] = isset($data['vatRegistrationNumber']) ? $data['vatRegistrationNumber'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets merchantLogo
     * @return string
     */
    public function getMerchantLogo()
    {
        return $this->container['merchantLogo'];
    }

    /**
     * Sets merchantLogo
     * @param string $merchantLogo The image file, which must be encoded in Base64 format. Supported file formats are `png`, `jpg`, and `gif`. The image file size restriction is 1 MB.
     * @return $this
     */
    public function setMerchantLogo($merchantLogo)
    {
        $this->container['merchantLogo'] = $merchantLogo;

        return $this;
    }

    /**
     * Gets merchantDisplayName
     * @return string
     */
    public function getMerchantDisplayName()
    {
        return $this->container['merchantDisplayName'];
    }

    /**
     * Sets merchantDisplayName
     * @param string $merchantDisplayName The merchant's display name shown on the invoice.
     * @return $this
     */
    public function setMerchantDisplayName($merchantDisplayName)
    {
        $this->container['merchantDisplayName'] = $merchantDisplayName;

        return $this;
    }

    /**
     * Gets customEmailMessage
     * @return string
     */
    public function getCustomEmailMessage()
    {
        return $this->container['customEmailMessage'];
    }

    /**
     * Sets customEmailMessage
     * @param string $customEmailMessage The content of the email message that we send to your customers.
     * @return $this
     */
    public function setCustomEmailMessage($customEmailMessage)
    {
        $this->container['customEmailMessage'] = $customEmailMessage;

        return $this;
    }

    /**
     * Gets enableReminders
     * @return bool
     */
    public function getEnableReminders()
    {
        return $this->container['enableReminders'];
    }

    /**
     * Sets enableReminders
     * @param bool $enableReminders Whether you would like us to send an auto-generated reminder email to your invoice recipients. Currently, this reminder email is sent five days before the invoice is due and one day after it is past due.
     * @return $this
     */
    public function setEnableReminders($enableReminders)
    {
        $this->container['enableReminders'] = $enableReminders;

        return $this;
    }

    /**
     * Gets headerStyle
     * @return \CyberSource\Model\InvoicingV2InvoiceSettingsGet200ResponseInvoiceSettingsInformationHeaderStyle
     */
    public function getHeaderStyle()
    {
        return $this->container['headerStyle'];
    }

    /**
     * Sets headerStyle
     * @param \CyberSource\Model\InvoicingV2InvoiceSettingsGet200ResponseInvoiceSettingsInformationHeaderStyle $headerStyle
     * @return $this
     */
    public function setHeaderStyle($headerStyle)
    {
        $this->container['headerStyle'] = $headerStyle;

        return $this;
    }

    /**
     * Gets deliveryLanguage
     * @return string
     */
    public function getDeliveryLanguage()
    {
        return $this->container['deliveryLanguage'];
    }

    /**
     * Sets deliveryLanguage
     * @param string $deliveryLanguage The language of the email that we send to your customers. Possible values are `zh-CN`, `zh-TW`, `en-US`, `fr-FR`, `de-DE`, `ja-JP`, `pt-BR`, `ru-RU` and `es-419`.
     * @return $this
     */
    public function setDeliveryLanguage($deliveryLanguage)
    {
        $this->container['deliveryLanguage'] = $deliveryLanguage;

        return $this;
    }

    /**
     * Gets defaultCurrencyCode
     * @return string
     */
    public function getDefaultCurrencyCode()
    {
        return $this->container['defaultCurrencyCode'];
    }

    /**
     * Sets defaultCurrencyCode
     * @param string $defaultCurrencyCode Currency used for the order. Use the three-character [ISO Standard Currency Codes.](http://apps.cybersource.com/library/documentation/sbc/quickref/currencies.pdf)  #### Used by **Authorization** Required field.  **Authorization Reversal** For an authorization reversal (`reversalInformation`) or a capture (`processingOptions.capture` is set to `true`), you must use the same currency that you used in your payment authorization request.  #### PIN Debit Currency for the amount you requested for the PIN debit purchase. This value is returned for partial authorizations. The issuing bank can approve a partial amount if the balance on the debit card is less than the requested transaction amount. For the possible values, see the [ISO Standard Currency Codes](https://developer.cybersource.com/library/documentation/sbc/quickref/currencies.pdf). Returned by PIN debit purchase.  For PIN debit reversal requests, you must use the same currency that was used for the PIN debit purchase or PIN debit credit that you are reversing. For the possible values, see the [ISO Standard Currency Codes](https://developer.cybersource.com/library/documentation/sbc/quickref/currencies.pdf).  Required field for PIN Debit purchase and PIN Debit credit requests. Optional field for PIN Debit reversal requests.  #### GPX This field is optional for reversing an authorization or credit.  #### DCC for First Data Your local currency. For details, see the `currency` field description in [Dynamic Currency Conversion For First Data Using the SCMP API](http://apps.cybersource.com/library/documentation/dev_guides/DCC_FirstData_SCMP/DCC_FirstData_SCMP_API.pdf).  #### Tax Calculation Required for international tax and value added tax only. Optional for U.S. and Canadian taxes. Your local currency.
     * @return $this
     */
    public function setDefaultCurrencyCode($defaultCurrencyCode)
    {
        $this->container['defaultCurrencyCode'] = $defaultCurrencyCode;

        return $this;
    }

    /**
     * Gets payerAuthenticationInInvoicing
     * @return string
     */
    public function getPayerAuthenticationInInvoicing()
    {
        return $this->container['payerAuthenticationInInvoicing'];
    }

    /**
     * Sets payerAuthenticationInInvoicing
     * @param string $payerAuthenticationInInvoicing For a merchant's invoice payments, enable 3D Secure payer authentication version 1, update to 3D Secure version 2, or disable 3D Secure. Possible values are:  - `enable` - `update` - `disable`
     * @return $this
     */
    public function setPayerAuthenticationInInvoicing($payerAuthenticationInInvoicing)
    {
        $this->container['payerAuthenticationInInvoicing'] = $payerAuthenticationInInvoicing;

        return $this;
    }

    /**
     * Gets showVatNumber
     * @return bool
     */
    public function getShowVatNumber()
    {
        return $this->container['showVatNumber'];
    }

    /**
     * Sets showVatNumber
     * @param bool $showVatNumber Display VAT number on Invoice.
     * @return $this
     */
    public function setShowVatNumber($showVatNumber)
    {
        $this->container['showVatNumber'] = $showVatNumber;

        return $this;
    }

    /**
     * Gets vatRegistrationNumber
     * @return string
     */
    public function getVatRegistrationNumber()
    {
        return $this->container['vatRegistrationNumber'];
    }

    /**
     * Sets vatRegistrationNumber
     * @param string $vatRegistrationNumber Your government-assigned tax identification number.  #### Tax Calculation Required field for value added tax only. Not applicable to U.S. and Canadian taxes.
     * @return $this
     */
    public function setVatRegistrationNumber($vatRegistrationNumber)
    {
        $this->container['vatRegistrationNumber'] = $vatRegistrationNumber;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


