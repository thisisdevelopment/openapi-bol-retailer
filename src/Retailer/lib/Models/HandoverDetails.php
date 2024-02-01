<?php
/**
 * HandoverDetails
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ThisIsDevelopment\OpenApi\Bol\Retailer
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * v10 - Retailer API
 *
 * The bol.com API for retailers.  # Authentication Our API requires authentication via OAuth2. The detailed steps to authenticate are explained [here](https://api.bol.com/retailer/public/Retailer-API/authentication.html)   # Demo scenarios Our API specification includes examples of the responses you can expect. For more information as well as more examples, we refer you to the following resources:   - [Demo environment](https://api.bol.com/retailer/public/Retailer-API/demo/demo.html) - [Demo scenarios](https://api.bol.com/retailer/public/Retailer-API/demo/v10-index.html)
 *
 * The version of the OpenAPI document: 10.x
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ThisIsDevelopment\OpenApi\Bol\Retailer\Models;

use \ArrayAccess;
use \ThisIsDevelopment\OpenApi\Bol\Retailer\ObjectSerializer;

/**
 * HandoverDetails Class Doc Comment
 *
 * @category Class
 * @package  ThisIsDevelopment\OpenApi\Bol\Retailer
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class HandoverDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HandoverDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'meetsCustomerExpectation' => 'bool',
        'earliestHandoverDateTime' => '\DateTime',
        'latestHandoverDateTime' => '\DateTime',
        'collectionMethod' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'meetsCustomerExpectation' => null,
        'earliestHandoverDateTime' => 'date-time',
        'latestHandoverDateTime' => 'date-time',
        'collectionMethod' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'meetsCustomerExpectation' => false,
        'earliestHandoverDateTime' => false,
        'latestHandoverDateTime' => false,
        'collectionMethod' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'meetsCustomerExpectation' => 'meetsCustomerExpectation',
        'earliestHandoverDateTime' => 'earliestHandoverDateTime',
        'latestHandoverDateTime' => 'latestHandoverDateTime',
        'collectionMethod' => 'collectionMethod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'meetsCustomerExpectation' => 'setMeetsCustomerExpectation',
        'earliestHandoverDateTime' => 'setEarliestHandoverDateTime',
        'latestHandoverDateTime' => 'setLatestHandoverDateTime',
        'collectionMethod' => 'setCollectionMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'meetsCustomerExpectation' => 'getMeetsCustomerExpectation',
        'earliestHandoverDateTime' => 'getEarliestHandoverDateTime',
        'latestHandoverDateTime' => 'getLatestHandoverDateTime',
        'collectionMethod' => 'getCollectionMethod'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const COLLECTION_METHOD_DROP_OFF = 'DROP_OFF';
    public const COLLECTION_METHOD_PICK_UP = 'PICK_UP';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCollectionMethodAllowableValues()
    {
        return [
            self::COLLECTION_METHOD_DROP_OFF,
            self::COLLECTION_METHOD_PICK_UP,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('meetsCustomerExpectation', $data ?? [], null);
        $this->setIfExists('earliestHandoverDateTime', $data ?? [], null);
        $this->setIfExists('latestHandoverDateTime', $data ?? [], null);
        $this->setIfExists('collectionMethod', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCollectionMethodAllowableValues();
        if (!is_null($this->container['collectionMethod']) && !in_array($this->container['collectionMethod'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'collectionMethod', must be one of '%s'",
                $this->container['collectionMethod'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets meetsCustomerExpectation
     *
     * @return bool|null
     */
    public function getMeetsCustomerExpectation()
    {
        return $this->container['meetsCustomerExpectation'];
    }

    /**
     * Sets meetsCustomerExpectation
     *
     * @param bool|null $meetsCustomerExpectation Indicates if you can use this label without receiving a strike if you handover before the latestHandoverDateTime. If this field is 'false' you can still buy and use this label but it will have negative consequences on your performance score because the order will be delivered too early or too late.
     *
     * @return self
     */
    public function setMeetsCustomerExpectation($meetsCustomerExpectation)
    {
        if (is_null($meetsCustomerExpectation)) {
            throw new \InvalidArgumentException('non-nullable meetsCustomerExpectation cannot be null');
        }
        $this->container['meetsCustomerExpectation'] = $meetsCustomerExpectation;

        return $this;
    }

    /**
     * Gets earliestHandoverDateTime
     *
     * @return \DateTime|null
     */
    public function getEarliestHandoverDateTime()
    {
        return $this->container['earliestHandoverDateTime'];
    }

    /**
     * Sets earliestHandoverDateTime
     *
     * @param \DateTime|null $earliestHandoverDateTime The date and time at which the parcel can be earliest  at the transporter to make sure your parcel is delivered on time.
     *
     * @return self
     */
    public function setEarliestHandoverDateTime($earliestHandoverDateTime)
    {
        if (is_null($earliestHandoverDateTime)) {
            throw new \InvalidArgumentException('non-nullable earliestHandoverDateTime cannot be null');
        }
        $this->container['earliestHandoverDateTime'] = $earliestHandoverDateTime;

        return $this;
    }

    /**
     * Gets latestHandoverDateTime
     *
     * @return \DateTime|null
     */
    public function getLatestHandoverDateTime()
    {
        return $this->container['latestHandoverDateTime'];
    }

    /**
     * Sets latestHandoverDateTime
     *
     * @param \DateTime|null $latestHandoverDateTime The date and time at which the parcel must ultimately be at the transporter to make sure your parcel is delivered on time. If you handover after this date you will receive a strike because you order will be delivered too late.
     *
     * @return self
     */
    public function setLatestHandoverDateTime($latestHandoverDateTime)
    {
        if (is_null($latestHandoverDateTime)) {
            throw new \InvalidArgumentException('non-nullable latestHandoverDateTime cannot be null');
        }
        $this->container['latestHandoverDateTime'] = $latestHandoverDateTime;

        return $this;
    }

    /**
     * Gets collectionMethod
     *
     * @return string|null
     */
    public function getCollectionMethod()
    {
        return $this->container['collectionMethod'];
    }

    /**
     * Sets collectionMethod
     *
     * @param string|null $collectionMethod The type of collection for this parcel.
     *
     * @return self
     */
    public function setCollectionMethod($collectionMethod)
    {
        if (is_null($collectionMethod)) {
            throw new \InvalidArgumentException('non-nullable collectionMethod cannot be null');
        }
        $allowedValues = $this->getCollectionMethodAllowableValues();
        if (!in_array($collectionMethod, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'collectionMethod', must be one of '%s'",
                    $collectionMethod,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['collectionMethod'] = $collectionMethod;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

