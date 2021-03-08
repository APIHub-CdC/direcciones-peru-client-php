<?php

namespace direcciones\pe\Client\Model;

use \ArrayAccess;
use \direcciones\pe\Client\ObjectSerializer;

class Direcciones implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'direcciones';
    
    protected static $RCCPMTypes = [
        'fec_reporte' => 'string',
        'id_fuente' => 'string',
        'fuente' => 'string',
        'direccion' => 'string',
        'dpto' => 'string',
        'prov' => 'string',
        'distrito' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'fec_reporte' => null,
        'id_fuente' => null,
        'fuente' => null,
        'direccion' => null,
        'dpto' => null,
        'prov' => null,
        'distrito' => null
    ];
    
    public static function RCCPMTypes()
    {
        return self::$RCCPMTypes;
    }
    
    public static function RCCPMFormats()
    {
        return self::$RCCPMFormats;
    }
    
    protected static $attributeMap = [
        'fec_reporte' => 'fecReporte',
        'id_fuente' => 'idFuente',
        'fuente' => 'fuente',
        'direccion' => 'direccion',
        'dpto' => 'dpto',
        'prov' => 'prov',
        'distrito' => 'distrito'
    ];
    
    protected static $setters = [
        'fec_reporte' => 'setFecReporte',
        'id_fuente' => 'setIdFuente',
        'fuente' => 'setFuente',
        'direccion' => 'setDireccion',
        'dpto' => 'setDpto',
        'prov' => 'setProv',
        'distrito' => 'setDistrito'
    ];
    
    protected static $getters = [
        'fec_reporte' => 'getFecReporte',
        'id_fuente' => 'getIdFuente',
        'fuente' => 'getFuente',
        'direccion' => 'getDireccion',
        'dpto' => 'getDpto',
        'prov' => 'getProv',
        'distrito' => 'getDistrito'
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
    
    public function getModelName()
    {
        return self::$RCCPMModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['fec_reporte'] = isset($data['fec_reporte']) ? $data['fec_reporte'] : null;
        $this->container['id_fuente'] = isset($data['id_fuente']) ? $data['id_fuente'] : null;
        $this->container['fuente'] = isset($data['fuente']) ? $data['fuente'] : null;
        $this->container['direccion'] = isset($data['direccion']) ? $data['direccion'] : null;
        $this->container['dpto'] = isset($data['dpto']) ? $data['dpto'] : null;
        $this->container['prov'] = isset($data['prov']) ? $data['prov'] : null;
        $this->container['distrito'] = isset($data['distrito']) ? $data['distrito'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getFecReporte()
    {
        return $this->container['fec_reporte'];
    }
    
    public function setFecReporte($fec_reporte)
    {
        $this->container['fec_reporte'] = $fec_reporte;
        return $this;
    }
    
    public function getIdFuente()
    {
        return $this->container['id_fuente'];
    }
    
    public function setIdFuente($id_fuente)
    {
        $this->container['id_fuente'] = $id_fuente;
        return $this;
    }
    
    public function getFuente()
    {
        return $this->container['fuente'];
    }
    
    public function setFuente($fuente)
    {
        $this->container['fuente'] = $fuente;
        return $this;
    }
    
    public function getDireccion()
    {
        return $this->container['direccion'];
    }
    
    public function setDireccion($direccion)
    {
        $this->container['direccion'] = $direccion;
        return $this;
    }
    
    public function getDpto()
    {
        return $this->container['dpto'];
    }
    
    public function setDpto($dpto)
    {
        $this->container['dpto'] = $dpto;
        return $this;
    }
    
    public function getProv()
    {
        return $this->container['prov'];
    }
    
    public function setProv($prov)
    {
        $this->container['prov'] = $prov;
        return $this;
    }
    
    public function getDistrito()
    {
        return $this->container['distrito'];
    }
    
    public function setDistrito($distrito)
    {
        $this->container['distrito'] = $distrito;
        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
