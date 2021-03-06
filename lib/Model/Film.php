<?php
/**
 * Film
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Association de cinéphile
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Film Class Doc Comment
 *
 * @category    Class
 * @description Film
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Film implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'film';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'image' => 'string',
        'titre' => 'string',
        'duree' => 'int',
        'synopsys' => 'string',
        'date_sortie' => 'object',
        'les_realisateurs' => 'string[]',
        'les_acteurs' => 'string[]',
        'categories' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'image' => null,
        'titre' => null,
        'duree' => null,
        'synopsys' => null,
        'date_sortie' => null,
        'les_realisateurs' => null,
        'les_acteurs' => null,
        'categories' => null
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
        'id' => 'id',
        'image' => 'image',
        'titre' => 'titre',
        'duree' => 'duree',
        'synopsys' => 'synopsys',
        'date_sortie' => 'dateSortie',
        'les_realisateurs' => 'lesRealisateurs',
        'les_acteurs' => 'lesActeurs',
        'categories' => 'categories'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'image' => 'setImage',
        'titre' => 'setTitre',
        'duree' => 'setDuree',
        'synopsys' => 'setSynopsys',
        'date_sortie' => 'setDateSortie',
        'les_realisateurs' => 'setLesRealisateurs',
        'les_acteurs' => 'setLesActeurs',
        'categories' => 'setCategories'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'image' => 'getImage',
        'titre' => 'getTitre',
        'duree' => 'getDuree',
        'synopsys' => 'getSynopsys',
        'date_sortie' => 'getDateSortie',
        'les_realisateurs' => 'getLesRealisateurs',
        'les_acteurs' => 'getLesActeurs',
        'categories' => 'getCategories'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['titre'] = isset($data['titre']) ? $data['titre'] : null;
        $this->container['duree'] = isset($data['duree']) ? $data['duree'] : null;
        $this->container['synopsys'] = isset($data['synopsys']) ? $data['synopsys'] : null;
        $this->container['date_sortie'] = isset($data['date_sortie']) ? $data['date_sortie'] : null;
        $this->container['les_realisateurs'] = isset($data['les_realisateurs']) ? $data['les_realisateurs'] : null;
        $this->container['les_acteurs'] = isset($data['les_acteurs']) ? $data['les_acteurs'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
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
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets image
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     * @param string $image
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets titre
     * @return string
     */
    public function getTitre()
    {
        return $this->container['titre'];
    }

    /**
     * Sets titre
     * @param string $titre
     * @return $this
     */
    public function setTitre($titre)
    {
        $this->container['titre'] = $titre;

        return $this;
    }

    /**
     * Gets duree
     * @return int
     */
    public function getDuree()
    {
        return $this->container['duree'];
    }

    /**
     * Sets duree
     * @param int $duree
     * @return $this
     */
    public function setDuree($duree)
    {
        $this->container['duree'] = $duree;

        return $this;
    }

    /**
     * Gets synopsys
     * @return string
     */
    public function getSynopsys()
    {
        return $this->container['synopsys'];
    }

    /**
     * Sets synopsys
     * @param string $synopsys
     * @return $this
     */
    public function setSynopsys($synopsys)
    {
        $this->container['synopsys'] = $synopsys;

        return $this;
    }

    /**
     * Gets date_sortie
     * @return object
     */
    public function getDateSortie()
    {
        return $this->container['date_sortie'];
    }

    /**
     * Sets date_sortie
     * @param object $date_sortie
     * @return $this
     */
    public function setDateSortie($date_sortie)
    {
        $this->container['date_sortie'] = $date_sortie;

        return $this;
    }

    /**
     * Gets les_realisateurs
     * @return string[]
     */
    public function getLesRealisateurs()
    {
        return $this->container['les_realisateurs'];
    }

    /**
     * Sets les_realisateurs
     * @param string[] $les_realisateurs
     * @return $this
     */
    public function setLesRealisateurs($les_realisateurs)
    {
        $this->container['les_realisateurs'] = $les_realisateurs;

        return $this;
    }

    /**
     * Gets les_acteurs
     * @return string[]
     */
    public function getLesActeurs()
    {
        return $this->container['les_acteurs'];
    }

    /**
     * Sets les_acteurs
     * @param string[] $les_acteurs
     * @return $this
     */
    public function setLesActeurs($les_acteurs)
    {
        $this->container['les_acteurs'] = $les_acteurs;

        return $this;
    }

    /**
     * Gets categories
     * @return object[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     * @param object[] $categories
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


