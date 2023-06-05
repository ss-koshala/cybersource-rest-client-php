<?php
/**
 * TssV2TransactionsGet200ResponsePaymentInformation
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
 * TssV2TransactionsGet200ResponsePaymentInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TssV2TransactionsGet200ResponsePaymentInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tssV2TransactionsGet200Response_paymentInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'paymentType' => '\CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationPaymentType',
        'customer' => '\CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationCustomer',
        'card' => '\CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationCard',
        'brands' => '\CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationBrands[]',
        'features' => '\CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationFeatures',
        'invoice' => '\CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationInvoice',
        'network' => '\CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationNetwork',
        'issuerInformation' => '\CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationIssuerInformation',
        'bank' => '\CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationBank',
        'accountFeatures' => '\CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationAccountFeatures',
        'paymentInstrument' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseTokenInformationPaymentInstrument',
        'instrumentIdentifier' => '\CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationInstrumentIdentifier',
        'shippingAddress' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseTokenInformationShippingAddress',
        'fluidData' => '\CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationFluidData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'paymentType' => null,
        'customer' => null,
        'card' => null,
        'brands' => null,
        'features' => null,
        'invoice' => null,
        'network' => null,
        'issuerInformation' => null,
        'bank' => null,
        'accountFeatures' => null,
        'paymentInstrument' => null,
        'instrumentIdentifier' => null,
        'shippingAddress' => null,
        'fluidData' => null
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
        'paymentType' => 'paymentType',
        'customer' => 'customer',
        'card' => 'card',
        'brands' => 'brands',
        'features' => 'features',
        'invoice' => 'invoice',
        'network' => 'network',
        'issuerInformation' => 'issuerInformation',
        'bank' => 'bank',
        'accountFeatures' => 'accountFeatures',
        'paymentInstrument' => 'paymentInstrument',
        'instrumentIdentifier' => 'instrumentIdentifier',
        'shippingAddress' => 'shippingAddress',
        'fluidData' => 'fluidData'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'paymentType' => 'setPaymentType',
        'customer' => 'setCustomer',
        'card' => 'setCard',
        'brands' => 'setBrands',
        'features' => 'setFeatures',
        'invoice' => 'setInvoice',
        'network' => 'setNetwork',
        'issuerInformation' => 'setIssuerInformation',
        'bank' => 'setBank',
        'accountFeatures' => 'setAccountFeatures',
        'paymentInstrument' => 'setPaymentInstrument',
        'instrumentIdentifier' => 'setInstrumentIdentifier',
        'shippingAddress' => 'setShippingAddress',
        'fluidData' => 'setFluidData'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'paymentType' => 'getPaymentType',
        'customer' => 'getCustomer',
        'card' => 'getCard',
        'brands' => 'getBrands',
        'features' => 'getFeatures',
        'invoice' => 'getInvoice',
        'network' => 'getNetwork',
        'issuerInformation' => 'getIssuerInformation',
        'bank' => 'getBank',
        'accountFeatures' => 'getAccountFeatures',
        'paymentInstrument' => 'getPaymentInstrument',
        'instrumentIdentifier' => 'getInstrumentIdentifier',
        'shippingAddress' => 'getShippingAddress',
        'fluidData' => 'getFluidData'
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
        $this->container['paymentType'] = isset($data['paymentType']) ? $data['paymentType'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['brands'] = isset($data['brands']) ? $data['brands'] : null;
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        $this->container['invoice'] = isset($data['invoice']) ? $data['invoice'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['issuerInformation'] = isset($data['issuerInformation']) ? $data['issuerInformation'] : null;
        $this->container['bank'] = isset($data['bank']) ? $data['bank'] : null;
        $this->container['accountFeatures'] = isset($data['accountFeatures']) ? $data['accountFeatures'] : null;
        $this->container['paymentInstrument'] = isset($data['paymentInstrument']) ? $data['paymentInstrument'] : null;
        $this->container['instrumentIdentifier'] = isset($data['instrumentIdentifier']) ? $data['instrumentIdentifier'] : null;
        $this->container['shippingAddress'] = isset($data['shippingAddress']) ? $data['shippingAddress'] : null;
        $this->container['fluidData'] = isset($data['fluidData']) ? $data['fluidData'] : null;
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
     * Gets paymentType
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationPaymentType
     */
    public function getPaymentType()
    {
        return $this->container['paymentType'];
    }

    /**
     * Sets paymentType
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationPaymentType $paymentType
     * @return $this
     */
    public function setPaymentType($paymentType)
    {
        $this->container['paymentType'] = $paymentType;

        return $this;
    }

    /**
     * Gets customer
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationCustomer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationCustomer $customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets card
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationCard
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationCard $card
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets brands
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationBrands[]
     */
    public function getBrands()
    {
        return $this->container['brands'];
    }

    /**
     * Sets brands
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationBrands[] $brands This array contains the supported brands.
     * @return $this
     */
    public function setBrands($brands)
    {
        $this->container['brands'] = $brands;

        return $this;
    }

    /**
     * Gets features
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationFeatures
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationFeatures $features
     * @return $this
     */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;

        return $this;
    }

    /**
     * Gets invoice
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationInvoice
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationInvoice $invoice
     * @return $this
     */
    public function setInvoice($invoice)
    {
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets network
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationNetwork
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationNetwork $network
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets issuerInformation
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationIssuerInformation
     */
    public function getIssuerInformation()
    {
        return $this->container['issuerInformation'];
    }

    /**
     * Sets issuerInformation
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationIssuerInformation $issuerInformation
     * @return $this
     */
    public function setIssuerInformation($issuerInformation)
    {
        $this->container['issuerInformation'] = $issuerInformation;

        return $this;
    }

    /**
     * Gets bank
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationBank
     */
    public function getBank()
    {
        return $this->container['bank'];
    }

    /**
     * Sets bank
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationBank $bank
     * @return $this
     */
    public function setBank($bank)
    {
        $this->container['bank'] = $bank;

        return $this;
    }

    /**
     * Gets accountFeatures
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationAccountFeatures
     */
    public function getAccountFeatures()
    {
        return $this->container['accountFeatures'];
    }

    /**
     * Sets accountFeatures
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationAccountFeatures $accountFeatures
     * @return $this
     */
    public function setAccountFeatures($accountFeatures)
    {
        $this->container['accountFeatures'] = $accountFeatures;

        return $this;
    }

    /**
     * Gets paymentInstrument
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseTokenInformationPaymentInstrument
     */
    public function getPaymentInstrument()
    {
        return $this->container['paymentInstrument'];
    }

    /**
     * Sets paymentInstrument
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseTokenInformationPaymentInstrument $paymentInstrument
     * @return $this
     */
    public function setPaymentInstrument($paymentInstrument)
    {
        $this->container['paymentInstrument'] = $paymentInstrument;

        return $this;
    }

    /**
     * Gets instrumentIdentifier
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationInstrumentIdentifier
     */
    public function getInstrumentIdentifier()
    {
        return $this->container['instrumentIdentifier'];
    }

    /**
     * Sets instrumentIdentifier
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationInstrumentIdentifier $instrumentIdentifier
     * @return $this
     */
    public function setInstrumentIdentifier($instrumentIdentifier)
    {
        $this->container['instrumentIdentifier'] = $instrumentIdentifier;

        return $this;
    }

    /**
     * Gets shippingAddress
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseTokenInformationShippingAddress
     */
    public function getShippingAddress()
    {
        return $this->container['shippingAddress'];
    }

    /**
     * Sets shippingAddress
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseTokenInformationShippingAddress $shippingAddress
     * @return $this
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->container['shippingAddress'] = $shippingAddress;

        return $this;
    }

    /**
     * Gets fluidData
     * @return \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationFluidData
     */
    public function getFluidData()
    {
        return $this->container['fluidData'];
    }

    /**
     * Sets fluidData
     * @param \CyberSource\Model\TssV2TransactionsGet200ResponsePaymentInformationFluidData $fluidData
     * @return $this
     */
    public function setFluidData($fluidData)
    {
        $this->container['fluidData'] = $fluidData;

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


