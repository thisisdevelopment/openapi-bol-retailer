<?php
/**
 * UploadReportAsset
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
 * UploadReportAsset Class Doc Comment
 *
 * @category Class
 * @package  ThisIsDevelopment\OpenApi\Bol\Retailer
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UploadReportAsset implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UploadReportAsset';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'url' => 'string',
        'labels' => 'string[]',
        'status' => 'string',
        'subStatus' => 'string',
        'subStatusDescription' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'url' => null,
        'labels' => null,
        'status' => null,
        'subStatus' => null,
        'subStatusDescription' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'url' => false,
        'labels' => false,
        'status' => false,
        'subStatus' => false,
        'subStatusDescription' => false
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
        'url' => 'url',
        'labels' => 'labels',
        'status' => 'status',
        'subStatus' => 'subStatus',
        'subStatusDescription' => 'subStatusDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'labels' => 'setLabels',
        'status' => 'setStatus',
        'subStatus' => 'setSubStatus',
        'subStatusDescription' => 'setSubStatusDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'labels' => 'getLabels',
        'status' => 'getStatus',
        'subStatus' => 'getSubStatus',
        'subStatusDescription' => 'getSubStatusDescription'
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

    public const STATUS_IN_PROGRESS = 'IN_PROGRESS';
    public const STATUS_DECLINED = 'DECLINED';
    public const STATUS_PUBLISHED = 'PUBLISHED';
    public const SUB_STATUS_DELETED = 'DELETED';
    public const SUB_STATUS_DOWNLOAD_FAILED_404 = 'DOWNLOAD_FAILED_404';
    public const SUB_STATUS_DOWNLOAD_FAILED_UNAUTHORIZED = 'DOWNLOAD_FAILED_UNAUTHORIZED';
    public const SUB_STATUS_IMAGE_FLAGGED_AS_DUPLICATE = 'IMAGE_FLAGGED_AS_DUPLICATE';
    public const SUB_STATUS_IMAGE_RATE_LIMITED = 'IMAGE_RATE_LIMITED';
    public const SUB_STATUS_IMPORT_FAILED = 'IMPORT_FAILED';
    public const SUB_STATUS_LABEL_UPDATED = 'LABEL_UPDATED';
    public const SUB_STATUS_MATCH_TO_PRODUCT_FAILED = 'MATCH_TO_PRODUCT_FAILED';
    public const SUB_STATUS_NOT_VALID_FOR_IMPORT = 'NOT_VALID_FOR_IMPORT';
    public const SUB_STATUS_PUBLISHED = 'PUBLISHED';
    public const SUB_STATUS_RECEIVED = 'RECEIVED';
    public const SUB_STATUS_SCORED_OTHER_IMAGE_WON = 'SCORED_OTHER_IMAGE_WON';
    public const SUB_STATUS_STORED = 'STORED';
    public const SUB_STATUS_SUPPLIED_FLAGGED_AS_BLACKLISTED = 'SUPPLIED_FLAGGED_AS_BLACKLISTED';
    public const SUB_STATUS_UNKNOWN = 'UNKNOWN';
    public const SUB_STATUS_UNPUBLISHED = 'UNPUBLISHED';
    public const SUB_STATUS_UNSUPPORTED_MIMETYPE = 'UNSUPPORTED_MIMETYPE';
    public const SUB_STATUS_UPLOAD_CANCELLED = 'UPLOAD_CANCELLED';
    public const SUB_STATUS_UPLOAD_DEADLINE_REACHED = 'UPLOAD_DEADLINE_REACHED';
    public const SUB_STATUS_UPLOAD_FAILED = 'UPLOAD_FAILED';
    public const SUB_STATUS_UPLOAD_REJECTED = 'UPLOAD_REJECTED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_IN_PROGRESS,
            self::STATUS_DECLINED,
            self::STATUS_PUBLISHED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubStatusAllowableValues()
    {
        return [
            self::SUB_STATUS_DELETED,
            self::SUB_STATUS_DOWNLOAD_FAILED_404,
            self::SUB_STATUS_DOWNLOAD_FAILED_UNAUTHORIZED,
            self::SUB_STATUS_IMAGE_FLAGGED_AS_DUPLICATE,
            self::SUB_STATUS_IMAGE_RATE_LIMITED,
            self::SUB_STATUS_IMPORT_FAILED,
            self::SUB_STATUS_LABEL_UPDATED,
            self::SUB_STATUS_MATCH_TO_PRODUCT_FAILED,
            self::SUB_STATUS_NOT_VALID_FOR_IMPORT,
            self::SUB_STATUS_PUBLISHED,
            self::SUB_STATUS_RECEIVED,
            self::SUB_STATUS_SCORED_OTHER_IMAGE_WON,
            self::SUB_STATUS_STORED,
            self::SUB_STATUS_SUPPLIED_FLAGGED_AS_BLACKLISTED,
            self::SUB_STATUS_UNKNOWN,
            self::SUB_STATUS_UNPUBLISHED,
            self::SUB_STATUS_UNSUPPORTED_MIMETYPE,
            self::SUB_STATUS_UPLOAD_CANCELLED,
            self::SUB_STATUS_UPLOAD_DEADLINE_REACHED,
            self::SUB_STATUS_UPLOAD_FAILED,
            self::SUB_STATUS_UPLOAD_REJECTED,
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
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('labels', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('subStatus', $data ?? [], null);
        $this->setIfExists('subStatusDescription', $data ?? [], null);
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

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['labels'] === null) {
            $invalidProperties[] = "'labels' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSubStatusAllowableValues();
        if (!is_null($this->container['subStatus']) && !in_array($this->container['subStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'subStatus', must be one of '%s'",
                $this->container['subStatus'],
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
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url The URL of the asset.
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return string[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param string[] $labels The label(s) of the asset.
     *
     * @return self
     */
    public function setLabels($labels)
    {
        if (is_null($labels)) {
            throw new \InvalidArgumentException('non-nullable labels cannot be null');
        }
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The processing state of the submitted asset.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets subStatus
     *
     * @return string|null
     */
    public function getSubStatus()
    {
        return $this->container['subStatus'];
    }

    /**
     * Sets subStatus
     *
     * @param string|null $subStatus The reason code explaining why the value was rejected.
     *
     * @return self
     */
    public function setSubStatus($subStatus)
    {
        if (is_null($subStatus)) {
            throw new \InvalidArgumentException('non-nullable subStatus cannot be null');
        }
        $allowedValues = $this->getSubStatusAllowableValues();
        if (!in_array($subStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'subStatus', must be one of '%s'",
                    $subStatus,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['subStatus'] = $subStatus;

        return $this;
    }

    /**
     * Gets subStatusDescription
     *
     * @return string|null
     */
    public function getSubStatusDescription()
    {
        return $this->container['subStatusDescription'];
    }

    /**
     * Sets subStatusDescription
     *
     * @param string|null $subStatusDescription The reason explaining why the value was rejected.
     *
     * @return self
     */
    public function setSubStatusDescription($subStatusDescription)
    {
        if (is_null($subStatusDescription)) {
            throw new \InvalidArgumentException('non-nullable subStatusDescription cannot be null');
        }
        $this->container['subStatusDescription'] = $subStatusDescription;

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

