<?php
/**
 * Boardingv1registrationsOrganizationInformationBusinessInformation
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
 * Boardingv1registrationsOrganizationInformationBusinessInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Boardingv1registrationsOrganizationInformationBusinessInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'boardingv1registrations_organizationInformation_businessInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'doingBusinessAs' => 'string',
        'description' => 'string',
        'startDate' => '\DateTime',
        'address' => '\CyberSource\Model\Boardingv1registrationsOrganizationInformationBusinessInformationAddress',
        'timeZone' => 'string',
        'websiteUrl' => 'string',
        'type' => 'string',
        'taxId' => 'string',
        'phoneNumber' => 'string',
        'businessContact' => '\CyberSource\Model\Boardingv1registrationsOrganizationInformationBusinessInformationBusinessContact',
        'technicalContact' => '\CyberSource\Model\Boardingv1registrationsOrganizationInformationBusinessInformationBusinessContact',
        'emergencyContact' => '\CyberSource\Model\Boardingv1registrationsOrganizationInformationBusinessInformationBusinessContact',
        'merchantCategoryCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'doingBusinessAs' => null,
        'description' => null,
        'startDate' => 'date',
        'address' => null,
        'timeZone' => null,
        'websiteUrl' => null,
        'type' => null,
        'taxId' => null,
        'phoneNumber' => null,
        'businessContact' => null,
        'technicalContact' => null,
        'emergencyContact' => null,
        'merchantCategoryCode' => null
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
        'name' => 'name',
        'doingBusinessAs' => 'doingBusinessAs',
        'description' => 'description',
        'startDate' => 'startDate',
        'address' => 'address',
        'timeZone' => 'timeZone',
        'websiteUrl' => 'websiteUrl',
        'type' => 'type',
        'taxId' => 'taxId',
        'phoneNumber' => 'phoneNumber',
        'businessContact' => 'businessContact',
        'technicalContact' => 'technicalContact',
        'emergencyContact' => 'emergencyContact',
        'merchantCategoryCode' => 'merchantCategoryCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'doingBusinessAs' => 'setDoingBusinessAs',
        'description' => 'setDescription',
        'startDate' => 'setStartDate',
        'address' => 'setAddress',
        'timeZone' => 'setTimeZone',
        'websiteUrl' => 'setWebsiteUrl',
        'type' => 'setType',
        'taxId' => 'setTaxId',
        'phoneNumber' => 'setPhoneNumber',
        'businessContact' => 'setBusinessContact',
        'technicalContact' => 'setTechnicalContact',
        'emergencyContact' => 'setEmergencyContact',
        'merchantCategoryCode' => 'setMerchantCategoryCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'doingBusinessAs' => 'getDoingBusinessAs',
        'description' => 'getDescription',
        'startDate' => 'getStartDate',
        'address' => 'getAddress',
        'timeZone' => 'getTimeZone',
        'websiteUrl' => 'getWebsiteUrl',
        'type' => 'getType',
        'taxId' => 'getTaxId',
        'phoneNumber' => 'getPhoneNumber',
        'businessContact' => 'getBusinessContact',
        'technicalContact' => 'getTechnicalContact',
        'emergencyContact' => 'getEmergencyContact',
        'merchantCategoryCode' => 'getMerchantCategoryCode'
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

    const TIME_ZONE_PACIFICPAGO_PAGO = 'Pacific/Pago_Pago';
    const TIME_ZONE_PACIFICHONOLULU = 'Pacific/Honolulu';
    const TIME_ZONE_AMERICAANCHORAGE = 'America/Anchorage';
    const TIME_ZONE_AMERICAVANCOUVER = 'America/Vancouver';
    const TIME_ZONE_AMERICALOS_ANGELES = 'America/Los_Angeles';
    const TIME_ZONE_AMERICAPHOENIX = 'America/Phoenix';
    const TIME_ZONE_AMERICAEDMONTON = 'America/Edmonton';
    const TIME_ZONE_AMERICADENVER = 'America/Denver';
    const TIME_ZONE_AMERICAWINNIPEG = 'America/Winnipeg';
    const TIME_ZONE_AMERICAMEXICO_CITY = 'America/Mexico_City';
    const TIME_ZONE_AMERICACHICAGO = 'America/Chicago';
    const TIME_ZONE_AMERICABOGOTA = 'America/Bogota';
    const TIME_ZONE_AMERICAINDIANAPOLIS = 'America/Indianapolis';
    const TIME_ZONE_AMERICANEW_YORK = 'America/New_York';
    const TIME_ZONE_AMERICALA_PAZ = 'America/La_Paz';
    const TIME_ZONE_AMERICAHALIFAX = 'America/Halifax';
    const TIME_ZONE_AMERICAST_JOHNS = 'America/St_Johns';
    const TIME_ZONE_AMERICABUENOS_AIRES = 'America/Buenos_Aires';
    const TIME_ZONE_AMERICAGODTHAB = 'America/Godthab';
    const TIME_ZONE_AMERICASAO_PAULO = 'America/Sao_Paulo';
    const TIME_ZONE_AMERICANORONHA = 'America/Noronha';
    const TIME_ZONE_ATLANTICCAPE_VERDE = 'Atlantic/Cape_Verde';
    const TIME_ZONE_GMT = 'GMT';
    const TIME_ZONE_EUROPEDUBLIN = 'Europe/Dublin';
    const TIME_ZONE_EUROPELISBON = 'Europe/Lisbon';
    const TIME_ZONE_EUROPELONDON = 'Europe/London';
    const TIME_ZONE_AFRICATUNIS = 'Africa/Tunis';
    const TIME_ZONE_EUROPEVIENNA = 'Europe/Vienna';
    const TIME_ZONE_EUROPEBRUSSELS = 'Europe/Brussels';
    const TIME_ZONE_EUROPEZURICH = 'Europe/Zurich';
    const TIME_ZONE_EUROPEPRAGUE = 'Europe/Prague';
    const TIME_ZONE_EUROPEBERLIN = 'Europe/Berlin';
    const TIME_ZONE_EUROPECOPENHAGEN = 'Europe/Copenhagen';
    const TIME_ZONE_EUROPEMADRID = 'Europe/Madrid';
    const TIME_ZONE_EUROPEBUDAPEST = 'Europe/Budapest';
    const TIME_ZONE_EUROPEROME = 'Europe/Rome';
    const TIME_ZONE_AFRICATRIPOLI = 'Africa/Tripoli';
    const TIME_ZONE_EUROPEMONACO = 'Europe/Monaco';
    const TIME_ZONE_EUROPEMALTA = 'Europe/Malta';
    const TIME_ZONE_EUROPEAMSTERDAM = 'Europe/Amsterdam';
    const TIME_ZONE_EUROPEOSLO = 'Europe/Oslo';
    const TIME_ZONE_EUROPEWARSAW = 'Europe/Warsaw';
    const TIME_ZONE_EUROPESTOCKHOLM = 'Europe/Stockholm';
    const TIME_ZONE_EUROPEBELGRADE = 'Europe/Belgrade';
    const TIME_ZONE_EUROPEPARIS = 'Europe/Paris';
    const TIME_ZONE_AFRICAJOHANNESBURG = 'Africa/Johannesburg';
    const TIME_ZONE_EUROPEMINSK = 'Europe/Minsk';
    const TIME_ZONE_AFRICACAIRO = 'Africa/Cairo';
    const TIME_ZONE_EUROPEHELSINKI = 'Europe/Helsinki';
    const TIME_ZONE_EUROPEATHENS = 'Europe/Athens';
    const TIME_ZONE_ASIAJERUSALEM = 'Asia/Jerusalem';
    const TIME_ZONE_EUROPERIGA = 'Europe/Riga';
    const TIME_ZONE_EUROPEBUCHAREST = 'Europe/Bucharest';
    const TIME_ZONE_EUROPEISTANBUL = 'Europe/Istanbul';
    const TIME_ZONE_ASIARIYADH = 'Asia/Riyadh';
    const TIME_ZONE_EUROPEMOSCOW = 'Europe/Moscow';
    const TIME_ZONE_ASIADUBAI = 'Asia/Dubai';
    const TIME_ZONE_ASIABAKU = 'Asia/Baku';
    const TIME_ZONE_ASIATBILISI = 'Asia/Tbilisi';
    const TIME_ZONE_ASIACALCUTTA = 'Asia/Calcutta';
    const TIME_ZONE_ASIAKATMANDU = 'Asia/Katmandu';
    const TIME_ZONE_ASIADACCA = 'Asia/Dacca';
    const TIME_ZONE_ASIARANGOON = 'Asia/Rangoon';
    const TIME_ZONE_ASIAJAKARTA = 'Asia/Jakarta';
    const TIME_ZONE_ASIASAIGON = 'Asia/Saigon';
    const TIME_ZONE_ASIABANGKOK = 'Asia/Bangkok';
    const TIME_ZONE_AUSTRALIAPERTH = 'Australia/Perth';
    const TIME_ZONE_ASIAHONG_KONG = 'Asia/Hong_Kong';
    const TIME_ZONE_ASIAMACAO = 'Asia/Macao';
    const TIME_ZONE_ASIAKUALA_LUMPUR = 'Asia/Kuala_Lumpur';
    const TIME_ZONE_ASIAMANILA = 'Asia/Manila';
    const TIME_ZONE_ASIASINGAPORE = 'Asia/Singapore';
    const TIME_ZONE_ASIATAIPEI = 'Asia/Taipei';
    const TIME_ZONE_ASIASHANGHAI = 'Asia/Shanghai';
    const TIME_ZONE_ASIASEOUL = 'Asia/Seoul';
    const TIME_ZONE_ASIATOKYO = 'Asia/Tokyo';
    const TIME_ZONE_ASIAYAKUTSK = 'Asia/Yakutsk';
    const TIME_ZONE_AUSTRALIAADELAIDE = 'Australia/Adelaide';
    const TIME_ZONE_AUSTRALIABRISBANE = 'Australia/Brisbane';
    const TIME_ZONE_AUSTRALIABROKEN_HILL = 'Australia/Broken_Hill';
    const TIME_ZONE_AUSTRALIADARWIN = 'Australia/Darwin';
    const TIME_ZONE_AUSTRALIAEUCLA = 'Australia/Eucla';
    const TIME_ZONE_AUSTRALIAHOBART = 'Australia/Hobart';
    const TIME_ZONE_AUSTRALIALINDEMAN = 'Australia/Lindeman';
    const TIME_ZONE_AUSTRALIASYDNEY = 'Australia/Sydney';
    const TIME_ZONE_AUSTRALIALORD_HOWE = 'Australia/Lord_Howe';
    const TIME_ZONE_AUSTRALIAMELBOURNE = 'Australia/Melbourne';
    const TIME_ZONE_ASIAMAGADAN = 'Asia/Magadan';
    const TIME_ZONE_PACIFICNORFOLK = 'Pacific/Norfolk';
    const TIME_ZONE_PACIFICAUCKLAND = 'Pacific/Auckland';
    const TYPE_PARTNERSHIP = 'PARTNERSHIP';
    const TYPE_SOLE_PROPRIETORSHIP = 'SOLE_PROPRIETORSHIP';
    const TYPE_CORPORATION = 'CORPORATION';
    const TYPE_LLC = 'LLC';
    const TYPE_NON_PROFIT = 'NON_PROFIT';
    const TYPE_TRUST = 'TRUST';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTimeZoneAllowableValues()
    {
        return [
            self::TIME_ZONE_PACIFICPAGO_PAGO,
            self::TIME_ZONE_PACIFICHONOLULU,
            self::TIME_ZONE_AMERICAANCHORAGE,
            self::TIME_ZONE_AMERICAVANCOUVER,
            self::TIME_ZONE_AMERICALOS_ANGELES,
            self::TIME_ZONE_AMERICAPHOENIX,
            self::TIME_ZONE_AMERICAEDMONTON,
            self::TIME_ZONE_AMERICADENVER,
            self::TIME_ZONE_AMERICAWINNIPEG,
            self::TIME_ZONE_AMERICAMEXICO_CITY,
            self::TIME_ZONE_AMERICACHICAGO,
            self::TIME_ZONE_AMERICABOGOTA,
            self::TIME_ZONE_AMERICAINDIANAPOLIS,
            self::TIME_ZONE_AMERICANEW_YORK,
            self::TIME_ZONE_AMERICALA_PAZ,
            self::TIME_ZONE_AMERICAHALIFAX,
            self::TIME_ZONE_AMERICAST_JOHNS,
            self::TIME_ZONE_AMERICABUENOS_AIRES,
            self::TIME_ZONE_AMERICAGODTHAB,
            self::TIME_ZONE_AMERICASAO_PAULO,
            self::TIME_ZONE_AMERICANORONHA,
            self::TIME_ZONE_ATLANTICCAPE_VERDE,
            self::TIME_ZONE_GMT,
            self::TIME_ZONE_EUROPEDUBLIN,
            self::TIME_ZONE_EUROPELISBON,
            self::TIME_ZONE_EUROPELONDON,
            self::TIME_ZONE_AFRICATUNIS,
            self::TIME_ZONE_EUROPEVIENNA,
            self::TIME_ZONE_EUROPEBRUSSELS,
            self::TIME_ZONE_EUROPEZURICH,
            self::TIME_ZONE_EUROPEPRAGUE,
            self::TIME_ZONE_EUROPEBERLIN,
            self::TIME_ZONE_EUROPECOPENHAGEN,
            self::TIME_ZONE_EUROPEMADRID,
            self::TIME_ZONE_EUROPEBUDAPEST,
            self::TIME_ZONE_EUROPEROME,
            self::TIME_ZONE_AFRICATRIPOLI,
            self::TIME_ZONE_EUROPEMONACO,
            self::TIME_ZONE_EUROPEMALTA,
            self::TIME_ZONE_EUROPEAMSTERDAM,
            self::TIME_ZONE_EUROPEOSLO,
            self::TIME_ZONE_EUROPEWARSAW,
            self::TIME_ZONE_EUROPESTOCKHOLM,
            self::TIME_ZONE_EUROPEBELGRADE,
            self::TIME_ZONE_EUROPEPARIS,
            self::TIME_ZONE_AFRICAJOHANNESBURG,
            self::TIME_ZONE_EUROPEMINSK,
            self::TIME_ZONE_AFRICACAIRO,
            self::TIME_ZONE_EUROPEHELSINKI,
            self::TIME_ZONE_EUROPEATHENS,
            self::TIME_ZONE_ASIAJERUSALEM,
            self::TIME_ZONE_EUROPERIGA,
            self::TIME_ZONE_EUROPEBUCHAREST,
            self::TIME_ZONE_EUROPEISTANBUL,
            self::TIME_ZONE_ASIARIYADH,
            self::TIME_ZONE_EUROPEMOSCOW,
            self::TIME_ZONE_ASIADUBAI,
            self::TIME_ZONE_ASIABAKU,
            self::TIME_ZONE_ASIATBILISI,
            self::TIME_ZONE_ASIACALCUTTA,
            self::TIME_ZONE_ASIAKATMANDU,
            self::TIME_ZONE_ASIADACCA,
            self::TIME_ZONE_ASIARANGOON,
            self::TIME_ZONE_ASIAJAKARTA,
            self::TIME_ZONE_ASIASAIGON,
            self::TIME_ZONE_ASIABANGKOK,
            self::TIME_ZONE_AUSTRALIAPERTH,
            self::TIME_ZONE_ASIAHONG_KONG,
            self::TIME_ZONE_ASIAMACAO,
            self::TIME_ZONE_ASIAKUALA_LUMPUR,
            self::TIME_ZONE_ASIAMANILA,
            self::TIME_ZONE_ASIASINGAPORE,
            self::TIME_ZONE_ASIATAIPEI,
            self::TIME_ZONE_ASIASHANGHAI,
            self::TIME_ZONE_ASIASEOUL,
            self::TIME_ZONE_ASIATOKYO,
            self::TIME_ZONE_ASIAYAKUTSK,
            self::TIME_ZONE_AUSTRALIAADELAIDE,
            self::TIME_ZONE_AUSTRALIABRISBANE,
            self::TIME_ZONE_AUSTRALIABROKEN_HILL,
            self::TIME_ZONE_AUSTRALIADARWIN,
            self::TIME_ZONE_AUSTRALIAEUCLA,
            self::TIME_ZONE_AUSTRALIAHOBART,
            self::TIME_ZONE_AUSTRALIALINDEMAN,
            self::TIME_ZONE_AUSTRALIASYDNEY,
            self::TIME_ZONE_AUSTRALIALORD_HOWE,
            self::TIME_ZONE_AUSTRALIAMELBOURNE,
            self::TIME_ZONE_ASIAMAGADAN,
            self::TIME_ZONE_PACIFICNORFOLK,
            self::TIME_ZONE_PACIFICAUCKLAND,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PARTNERSHIP,
            self::TYPE_SOLE_PROPRIETORSHIP,
            self::TYPE_CORPORATION,
            self::TYPE_LLC,
            self::TYPE_NON_PROFIT,
            self::TYPE_TRUST,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['doingBusinessAs'] = isset($data['doingBusinessAs']) ? $data['doingBusinessAs'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['websiteUrl'] = isset($data['websiteUrl']) ? $data['websiteUrl'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['taxId'] = isset($data['taxId']) ? $data['taxId'] : null;
        $this->container['phoneNumber'] = isset($data['phoneNumber']) ? $data['phoneNumber'] : null;
        $this->container['businessContact'] = isset($data['businessContact']) ? $data['businessContact'] : null;
        $this->container['technicalContact'] = isset($data['technicalContact']) ? $data['technicalContact'] : null;
        $this->container['emergencyContact'] = isset($data['emergencyContact']) ? $data['emergencyContact'] : null;
        $this->container['merchantCategoryCode'] = isset($data['merchantCategoryCode']) ? $data['merchantCategoryCode'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if (!preg_match("/^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/", $this->container['name'])) {
            $invalid_properties[] = "invalid value for 'name', must be conform to the pattern /^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/.";
        }

        if (!is_null($this->container['doingBusinessAs']) && !preg_match("/^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/", $this->container['doingBusinessAs'])) {
            $invalid_properties[] = "invalid value for 'doingBusinessAs', must be conform to the pattern /^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/.";
        }

        if (!is_null($this->container['description']) && !preg_match("/[À-ÖØ-öø-ǿÀ-ÖØ-öø-ǿ\\n\\ra-zA-Z0-9().\\-_#,;\/\\\\@$:&amp;!?%«»€₣«»€₣ ]{1,}$/", $this->container['description'])) {
            $invalid_properties[] = "invalid value for 'description', must be conform to the pattern /[À-ÖØ-öø-ǿÀ-ÖØ-öø-ǿ\\n\\ra-zA-Z0-9().\\-_#,;\/\\\\@$:&amp;!?%«»€₣«»€₣ ]{1,}$/.";
        }

        $allowed_values = $this->getTimeZoneAllowableValues();
        if (!in_array($this->container['timeZone'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'timeZone', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if (!is_null($this->container['websiteUrl']) && !preg_match("/\\b((?:https?:\/\/|www\\d{0,3}[.]|[a-z0-9.\\-]+[.][a-z]{2,4}\/)(?:[^\\s()<>]+|\\(([^\\s()<>]+|(\\([^\\s()<>]+\\)))*\\))+(?:\\(([^\\s()<>]+|(\\([^\\s()<>]+\\)))*\\)|[^\\s`!()\\[\\]{};:'\".,<>?Â«Â»â€œâ€â€˜â€™]))/", $this->container['websiteUrl'])) {
            $invalid_properties[] = "invalid value for 'websiteUrl', must be conform to the pattern /\\b((?:https?:\/\/|www\\d{0,3}[.]|[a-z0-9.\\-]+[.][a-z]{2,4}\/)(?:[^\\s()<>]+|\\(([^\\s()<>]+|(\\([^\\s()<>]+\\)))*\\))+(?:\\(([^\\s()<>]+|(\\([^\\s()<>]+\\)))*\\)|[^\\s`!()\\[\\]{};:'\".,<>?Â«Â»â€œâ€â€˜â€™]))/.";
        }

        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if (!is_null($this->container['taxId']) && !preg_match("/\\d{9}/", $this->container['taxId'])) {
            $invalid_properties[] = "invalid value for 'taxId', must be conform to the pattern /\\d{9}/.";
        }

        if (!is_null($this->container['phoneNumber']) && !preg_match("/^[0-9a-zA-Z\\\\+\\\\-]+$/", $this->container['phoneNumber'])) {
            $invalid_properties[] = "invalid value for 'phoneNumber', must be conform to the pattern /^[0-9a-zA-Z\\\\+\\\\-]+$/.";
        }

        if (!is_null($this->container['merchantCategoryCode']) && !preg_match("/^\\d{3,4}$/", $this->container['merchantCategoryCode'])) {
            $invalid_properties[] = "invalid value for 'merchantCategoryCode', must be conform to the pattern /^\\d{3,4}$/.";
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

        if ($this->container['name'] === null) {
            return false;
        }
        if (!preg_match("/^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/", $this->container['name'])) {
            return false;
        }
        if (!preg_match("/^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/", $this->container['doingBusinessAs'])) {
            return false;
        }
        if (!preg_match("/[À-ÖØ-öø-ǿÀ-ÖØ-öø-ǿ\\n\\ra-zA-Z0-9().\\-_#,;\/\\\\@$:&amp;!?%«»€₣«»€₣ ]{1,}$/", $this->container['description'])) {
            return false;
        }
        $allowed_values = $this->getTimeZoneAllowableValues();
        if (!in_array($this->container['timeZone'], $allowed_values)) {
            return false;
        }
        if (!preg_match("/\\b((?:https?:\/\/|www\\d{0,3}[.]|[a-z0-9.\\-]+[.][a-z]{2,4}\/)(?:[^\\s()<>]+|\\(([^\\s()<>]+|(\\([^\\s()<>]+\\)))*\\))+(?:\\(([^\\s()<>]+|(\\([^\\s()<>]+\\)))*\\)|[^\\s`!()\\[\\]{};:'\".,<>?Â«Â»â€œâ€â€˜â€™]))/", $this->container['websiteUrl'])) {
            return false;
        }
        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        if (!preg_match("/\\d{9}/", $this->container['taxId'])) {
            return false;
        }
        if (!preg_match("/^[0-9a-zA-Z\\\\+\\\\-]+$/", $this->container['phoneNumber'])) {
            return false;
        }
        if (!preg_match("/^\\d{3,4}$/", $this->container['merchantCategoryCode'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        if ((!preg_match("/^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/", $name))) {
            throw new \InvalidArgumentException("invalid value for $name when calling Boardingv1registrationsOrganizationInformationBusinessInformation., must conform to the pattern /^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/.");
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets doingBusinessAs
     * @return string
     */
    public function getDoingBusinessAs()
    {
        return $this->container['doingBusinessAs'];
    }

    /**
     * Sets doingBusinessAs
     * @param string $doingBusinessAs
     * @return $this
     */
    public function setDoingBusinessAs($doingBusinessAs)
    {
        if (!is_null($doingBusinessAs) && (!preg_match("/^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/", $doingBusinessAs))) {
            throw new \InvalidArgumentException("invalid value for $doingBusinessAs when calling Boardingv1registrationsOrganizationInformationBusinessInformation., must conform to the pattern /^[0-9a-zA-Z _\\-\\+\\.\\*\\\"\/'&\\,\\(\\)!$;:?@\\#¡-￿]+$/.");
        }
        $this->container['doingBusinessAs'] = $doingBusinessAs;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (!preg_match("/[À-ÖØ-öø-ǿÀ-ÖØ-öø-ǿ\\n\\ra-zA-Z0-9().\\-_#,;\/\\\\@$:&amp;!?%«»€₣«»€₣ ]{1,}$/", $description))) {
            throw new \InvalidArgumentException("invalid value for $description when calling Boardingv1registrationsOrganizationInformationBusinessInformation., must conform to the pattern /[À-ÖØ-öø-ǿÀ-ÖØ-öø-ǿ\\n\\ra-zA-Z0-9().\\-_#,;\/\\\\@$:&amp;!?%«»€₣«»€₣ ]{1,}$/.");
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets startDate
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     * @param \DateTime $startDate `Format: YYYY-MM-DD` Example 2016-08-11 equals August 11, 2016
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets address
     * @return \CyberSource\Model\Boardingv1registrationsOrganizationInformationBusinessInformationAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param \CyberSource\Model\Boardingv1registrationsOrganizationInformationBusinessInformationAddress $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets timeZone
     * @return string
     */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
     * Sets timeZone
     * @param string $timeZone Merchant perferred time zone Possible Values: - 'Pacific/Pago_Pago' - 'Pacific/Honolulu' - 'America/Anchorage' - 'America/Vancouver' - 'America/Los_Angeles' - 'America/Phoenix' - 'America/Edmonton' - 'America/Denver' - 'America/Winnipeg' - 'America/Mexico_City' - 'America/Chicago' - 'America/Bogota' - 'America/Indianapolis' - 'America/New_York' - 'America/La_Paz' - 'America/Halifax' - 'America/St_Johns' - 'America/Buenos_Aires' - 'America/Godthab' - 'America/Sao_Paulo' - 'America/Noronha' - 'Atlantic/Cape_Verde' - 'GMT' - 'Europe/Dublin' - 'Europe/Lisbon' - 'Europe/London' - 'Africa/Tunis' - 'Europe/Vienna' - 'Europe/Brussels' - 'Europe/Zurich' - 'Europe/Prague' - 'Europe/Berlin' - 'Europe/Copenhagen' - 'Europe/Madrid' - 'Europe/Budapest' - 'Europe/Rome' - 'Africa/Tripoli' - 'Europe/Monaco' - 'Europe/Malta' - 'Europe/Amsterdam' - 'Europe/Oslo' - 'Europe/Warsaw' - 'Europe/Stockholm' - 'Europe/Belgrade' - 'Europe/Paris' - 'Africa/Johannesburg' - 'Europe/Minsk' - 'Africa/Cairo' - 'Europe/Helsinki' - 'Europe/Athens' - 'Asia/Jerusalem' - 'Europe/Riga' - 'Europe/Bucharest' - 'Europe/Istanbul' - 'Asia/Riyadh' - 'Europe/Moscow' - 'Asia/Dubai' - 'Asia/Baku' - 'Asia/Tbilisi' - 'Asia/Calcutta' - 'Asia/Katmandu' - 'Asia/Dacca' - 'Asia/Rangoon' - 'Asia/Jakarta' - 'Asia/Saigon' - 'Asia/Bangkok' - 'Australia/Perth' - 'Asia/Hong_Kong' - 'Asia/Macao' - 'Asia/Kuala_Lumpur' - 'Asia/Manila' - 'Asia/Singapore' - 'Asia/Taipei' - 'Asia/Shanghai' - 'Asia/Seoul' - 'Asia/Tokyo' - 'Asia/Yakutsk' - 'Australia/Adelaide' - 'Australia/Brisbane' - 'Australia/Broken_Hill' - 'Australia/Darwin' - 'Australia/Eucla' - 'Australia/Hobart' - 'Australia/Lindeman' - 'Australia/Sydney' - 'Australia/Lord_Howe' - 'Australia/Melbourne' - 'Asia/Magadan' - 'Pacific/Norfolk' - 'Pacific/Auckland'
     * @return $this
     */
    public function setTimeZone($timeZone)
    {
        $allowed_values = $this->getTimeZoneAllowableValues();
        if (!is_null($timeZone) && !in_array($timeZone, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'timeZone', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['timeZone'] = $timeZone;

        return $this;
    }

    /**
     * Gets websiteUrl
     * @return string
     */
    public function getWebsiteUrl()
    {
        return $this->container['websiteUrl'];
    }

    /**
     * Sets websiteUrl
     * @param string $websiteUrl
     * @return $this
     */
    public function setWebsiteUrl($websiteUrl)
    {
        if (!is_null($websiteUrl) && (!preg_match("/\\b((?:https?:\/\/|www\\d{0,3}[.]|[a-z0-9.\\-]+[.][a-z]{2,4}\/)(?:[^\\s()<>]+|\\(([^\\s()<>]+|(\\([^\\s()<>]+\\)))*\\))+(?:\\(([^\\s()<>]+|(\\([^\\s()<>]+\\)))*\\)|[^\\s`!()\\[\\]{};:'\".,<>?Â«Â»â€œâ€â€˜â€™]))/", $websiteUrl))) {
            throw new \InvalidArgumentException("invalid value for $websiteUrl when calling Boardingv1registrationsOrganizationInformationBusinessInformation., must conform to the pattern /\\b((?:https?:\/\/|www\\d{0,3}[.]|[a-z0-9.\\-]+[.][a-z]{2,4}\/)(?:[^\\s()<>]+|\\(([^\\s()<>]+|(\\([^\\s()<>]+\\)))*\\))+(?:\\(([^\\s()<>]+|(\\([^\\s()<>]+\\)))*\\)|[^\\s`!()\\[\\]{};:'\".,<>?Â«Â»â€œâ€â€˜â€™]))/.");
        }
        $this->container['websiteUrl'] = $websiteUrl;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Business type Possible Values:   - 'PARTNERSHIP'   - 'SOLE_PROPRIETORSHIP'   - 'CORPORATION'   - 'LLC'   - 'NON_PROFIT'   - 'TRUST'
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets taxId
     * @return string
     */
    public function getTaxId()
    {
        return $this->container['taxId'];
    }

    /**
     * Sets taxId
     * @param string $taxId
     * @return $this
     */
    public function setTaxId($taxId)
    {
        if (!is_null($taxId) && (!preg_match("/\\d{9}/", $taxId))) {
            throw new \InvalidArgumentException("invalid value for $taxId when calling Boardingv1registrationsOrganizationInformationBusinessInformation., must conform to the pattern /\\d{9}/.");
        }
        $this->container['taxId'] = $taxId;

        return $this;
    }

    /**
     * Gets phoneNumber
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
     * Sets phoneNumber
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        if (!is_null($phoneNumber) && (!preg_match("/^[0-9a-zA-Z\\\\+\\\\-]+$/", $phoneNumber))) {
            throw new \InvalidArgumentException("invalid value for $phoneNumber when calling Boardingv1registrationsOrganizationInformationBusinessInformation., must conform to the pattern /^[0-9a-zA-Z\\\\+\\\\-]+$/.");
        }
        $this->container['phoneNumber'] = $phoneNumber;

        return $this;
    }

    /**
     * Gets businessContact
     * @return \CyberSource\Model\Boardingv1registrationsOrganizationInformationBusinessInformationBusinessContact
     */
    public function getBusinessContact()
    {
        return $this->container['businessContact'];
    }

    /**
     * Sets businessContact
     * @param \CyberSource\Model\Boardingv1registrationsOrganizationInformationBusinessInformationBusinessContact $businessContact
     * @return $this
     */
    public function setBusinessContact($businessContact)
    {
        $this->container['businessContact'] = $businessContact;

        return $this;
    }

    /**
     * Gets technicalContact
     * @return \CyberSource\Model\Boardingv1registrationsOrganizationInformationBusinessInformationBusinessContact
     */
    public function getTechnicalContact()
    {
        return $this->container['technicalContact'];
    }

    /**
     * Sets technicalContact
     * @param \CyberSource\Model\Boardingv1registrationsOrganizationInformationBusinessInformationBusinessContact $technicalContact
     * @return $this
     */
    public function setTechnicalContact($technicalContact)
    {
        $this->container['technicalContact'] = $technicalContact;

        return $this;
    }

    /**
     * Gets emergencyContact
     * @return \CyberSource\Model\Boardingv1registrationsOrganizationInformationBusinessInformationBusinessContact
     */
    public function getEmergencyContact()
    {
        return $this->container['emergencyContact'];
    }

    /**
     * Sets emergencyContact
     * @param \CyberSource\Model\Boardingv1registrationsOrganizationInformationBusinessInformationBusinessContact $emergencyContact
     * @return $this
     */
    public function setEmergencyContact($emergencyContact)
    {
        $this->container['emergencyContact'] = $emergencyContact;

        return $this;
    }

    /**
     * Gets merchantCategoryCode
     * @return string
     */
    public function getMerchantCategoryCode()
    {
        return $this->container['merchantCategoryCode'];
    }

    /**
     * Sets merchantCategoryCode
     * @param string $merchantCategoryCode Industry standard Merchant Category Code (MCC)
     * @return $this
     */
    public function setMerchantCategoryCode($merchantCategoryCode)
    {
        if (!is_null($merchantCategoryCode) && (!preg_match("/^\\d{3,4}$/", $merchantCategoryCode))) {
            throw new \InvalidArgumentException("invalid value for $merchantCategoryCode when calling Boardingv1registrationsOrganizationInformationBusinessInformation., must conform to the pattern /^\\d{3,4}$/.");
        }
        $this->container['merchantCategoryCode'] = $merchantCategoryCode;

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

