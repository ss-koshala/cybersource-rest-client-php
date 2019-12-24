<?php
/**
 * Riskv1decisionsRiskInformationMarkingDetails
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
 * Riskv1decisionsRiskInformationMarkingDetails Class Doc Comment
 *
 * @category    Class
 * @description Details for marking the transaction as either positive or negative.
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Riskv1decisionsRiskInformationMarkingDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskv1decisions_riskInformation_markingDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'notes' => 'string',
        'reason' => 'string',
        'fieldsIncluded' => 'string',
        'reportCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'notes' => null,
        'reason' => null,
        'fieldsIncluded' => null,
        'reportCode' => null
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
        'notes' => 'notes',
        'reason' => 'reason',
        'fieldsIncluded' => 'fieldsIncluded',
        'reportCode' => 'reportCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'notes' => 'setNotes',
        'reason' => 'setReason',
        'fieldsIncluded' => 'setFieldsIncluded',
        'reportCode' => 'setReportCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'notes' => 'getNotes',
        'reason' => 'getReason',
        'fieldsIncluded' => 'getFieldsIncluded',
        'reportCode' => 'getReportCode'
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
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['fieldsIncluded'] = isset($data['fieldsIncluded']) ? $data['fieldsIncluded'] : null;
        $this->container['reportCode'] = isset($data['reportCode']) ? $data['reportCode'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['notes']) && (strlen($this->container['notes']) > 255)) {
            $invalid_properties[] = "invalid value for 'notes', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['reason']) && (strlen($this->container['reason']) > 25)) {
            $invalid_properties[] = "invalid value for 'reason', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['fieldsIncluded']) && (strlen($this->container['fieldsIncluded']) > 255)) {
            $invalid_properties[] = "invalid value for 'fieldsIncluded', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['reportCode']) && (strlen($this->container['reportCode']) > 2)) {
            $invalid_properties[] = "invalid value for 'reportCode', the character length must be smaller than or equal to 2.";
        }

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

        if (strlen($this->container['notes']) > 255) {
            return false;
        }
        if (strlen($this->container['reason']) > 25) {
            return false;
        }
        if (strlen($this->container['fieldsIncluded']) > 255) {
            return false;
        }
        if (strlen($this->container['reportCode']) > 2) {
            return false;
        }
        return true;
    }


    /**
     * Gets notes
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     * @param string $notes Notes or details that explain the reasons for adding the transaction to either the positive or negative list.
     * @return $this
     */
    public function setNotes($notes)
    {
        if (!is_null($notes) && (strlen($notes) > 255)) {
            throw new \InvalidArgumentException('invalid length for $notes when calling Riskv1decisionsRiskInformationMarkingDetails., must be smaller than or equal to 255.');
        }

        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     * @param string $reason Reason for adding the transaction to the negative list. This field can contain one of the following values: - fraud_chargeback: You have received a fraud-related chargeback for the transaction. - non_fraud_chargeback: You have received a non-fraudulent chargeback for the transaction. - suspected: You believe that you will probably receive a chargeback for the transaction. - creditback: You issued a refund to the customer to avoid a chargeback for the transaction.
     * @return $this
     */
    public function setReason($reason)
    {
        if (!is_null($reason) && (strlen($reason) > 25)) {
            throw new \InvalidArgumentException('invalid length for $reason when calling Riskv1decisionsRiskInformationMarkingDetails., must be smaller than or equal to 25.');
        }

        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets fieldsIncluded
     * @return string
     */
    public function getFieldsIncluded()
    {
        return $this->container['fieldsIncluded'];
    }

    /**
     * Sets fieldsIncluded
     * @param string $fieldsIncluded Adds specified transaction information to the negative list. This field can contain one or more of the following values. When you specify more than one value, separate them with commas (,). - account_key_hash - customer_account_id - customer_email - customer_ipaddress - customer_phone - device_fingerprint - ship_address If no value is specified, account_key_hash, customer_email, and ship_address are used by default. Note account_key_hash adds the field that contains the card number (customer_cc_number).
     * @return $this
     */
    public function setFieldsIncluded($fieldsIncluded)
    {
        if (!is_null($fieldsIncluded) && (strlen($fieldsIncluded) > 255)) {
            throw new \InvalidArgumentException('invalid length for $fieldsIncluded when calling Riskv1decisionsRiskInformationMarkingDetails., must be smaller than or equal to 255.');
        }

        $this->container['fieldsIncluded'] = $fieldsIncluded;

        return $this;
    }

    /**
     * Gets reportCode
     * @return string
     */
    public function getReportCode()
    {
        return $this->container['reportCode'];
    }

    /**
     * Sets reportCode
     * @param string $reportCode Indicates whether to add, clear, or remove order data from the fraud history. This field can contain one of the following values: - ST: Marking reason for suspected fraud transaction; same action as Mark as Suspect link in the Business Center - CB: Marking reason for chargeback; same action as Mark as Suspect link - CM: Clear suspected fraud marking reason; same action as Clear Mark as Suspect link - VT: Remove from history
     * @return $this
     */
    public function setReportCode($reportCode)
    {
        if (!is_null($reportCode) && (strlen($reportCode) > 2)) {
            throw new \InvalidArgumentException('invalid length for $reportCode when calling Riskv1decisionsRiskInformationMarkingDetails., must be smaller than or equal to 2.');
        }

        $this->container['reportCode'] = $reportCode;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
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


