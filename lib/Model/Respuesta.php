<?php

namespace direcciones\pe\Client\Model;

use \ArrayAccess;
use \direcciones\pe\Client\ObjectSerializer;

class Respuesta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'Respuesta';
    
    protected static $RCCPMTypes = [
        'fecha_consulta' => 'string',
        'num_consulta' => 'float',
        'codigo_sbs' => 'string',
        'numero_documento' => 'string',
        'tipo_documento' => 'string',
        'ruc' => 'string',
        'primer_nombre' => 'string',
        'segundo_nombre' => 'string',
        'apellido_paterno' => 'string',
        'apellido_materno' => 'string',
        'direcciones' => '\direcciones\pe\Client\Model\Direcciones[]'
    ];
    
    protected static $RCCPMFormats = [
        'fecha_consulta' => null,
        'num_consulta' => null,
        'codigo_sbs' => null,
        'numero_documento' => null,
        'tipo_documento' => null,
        'ruc' => null,
        'primer_nombre' => null,
        'segundo_nombre' => null,
        'apellido_paterno' => null,
        'apellido_materno' => null,
        'direcciones' => null
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
        'fecha_consulta' => 'fechaConsulta',
        'num_consulta' => 'numConsulta',
        'codigo_sbs' => 'codigoSbs',
        'numero_documento' => 'numeroDocumento',
        'tipo_documento' => 'tipoDocumento',
        'ruc' => 'ruc',
        'primer_nombre' => 'primerNombre',
        'segundo_nombre' => 'segundoNombre',
        'apellido_paterno' => 'apellidoPaterno',
        'apellido_materno' => 'apellidoMaterno',
        'direcciones' => 'direcciones'
    ];
    
    protected static $setters = [
        'fecha_consulta' => 'setFechaConsulta',
        'num_consulta' => 'setNumConsulta',
        'codigo_sbs' => 'setCodigoSbs',
        'numero_documento' => 'setNumeroDocumento',
        'tipo_documento' => 'setTipoDocumento',
        'ruc' => 'setRuc',
        'primer_nombre' => 'setPrimerNombre',
        'segundo_nombre' => 'setSegundoNombre',
        'apellido_paterno' => 'setApellidoPaterno',
        'apellido_materno' => 'setApellidoMaterno',
        'direcciones' => 'setDirecciones'
    ];
    
    protected static $getters = [
        'fecha_consulta' => 'getFechaConsulta',
        'num_consulta' => 'getNumConsulta',
        'codigo_sbs' => 'getCodigoSbs',
        'numero_documento' => 'getNumeroDocumento',
        'tipo_documento' => 'getTipoDocumento',
        'ruc' => 'getRuc',
        'primer_nombre' => 'getPrimerNombre',
        'segundo_nombre' => 'getSegundoNombre',
        'apellido_paterno' => 'getApellidoPaterno',
        'apellido_materno' => 'getApellidoMaterno',
        'direcciones' => 'getDirecciones'
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
        $this->container['fecha_consulta'] = isset($data['fecha_consulta']) ? $data['fecha_consulta'] : null;
        $this->container['num_consulta'] = isset($data['num_consulta']) ? $data['num_consulta'] : null;
        $this->container['codigo_sbs'] = isset($data['codigo_sbs']) ? $data['codigo_sbs'] : null;
        $this->container['numero_documento'] = isset($data['numero_documento']) ? $data['numero_documento'] : null;
        $this->container['tipo_documento'] = isset($data['tipo_documento']) ? $data['tipo_documento'] : null;
        $this->container['ruc'] = isset($data['ruc']) ? $data['ruc'] : null;
        $this->container['primer_nombre'] = isset($data['primer_nombre']) ? $data['primer_nombre'] : null;
        $this->container['segundo_nombre'] = isset($data['segundo_nombre']) ? $data['segundo_nombre'] : null;
        $this->container['apellido_paterno'] = isset($data['apellido_paterno']) ? $data['apellido_paterno'] : null;
        $this->container['apellido_materno'] = isset($data['apellido_materno']) ? $data['apellido_materno'] : null;
        $this->container['direcciones'] = isset($data['direcciones']) ? $data['direcciones'] : null;
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
    
    public function getFechaConsulta()
    {
        return $this->container['fecha_consulta'];
    }
    
    public function setFechaConsulta($fecha_consulta)
    {
        $this->container['fecha_consulta'] = $fecha_consulta;
        return $this;
    }
    
    public function getNumConsulta()
    {
        return $this->container['num_consulta'];
    }
    
    public function setNumConsulta($num_consulta)
    {
        $this->container['num_consulta'] = $num_consulta;
        return $this;
    }
    
    public function getCodigoSbs()
    {
        return $this->container['codigo_sbs'];
    }
    
    public function setCodigoSbs($codigo_sbs)
    {
        $this->container['codigo_sbs'] = $codigo_sbs;
        return $this;
    }
    
    public function getNumeroDocumento()
    {
        return $this->container['numero_documento'];
    }
    
    public function setNumeroDocumento($numero_documento)
    {
        $this->container['numero_documento'] = $numero_documento;
        return $this;
    }
    
    public function getTipoDocumento()
    {
        return $this->container['tipo_documento'];
    }
    
    public function setTipoDocumento($tipo_documento)
    {
        $this->container['tipo_documento'] = $tipo_documento;
        return $this;
    }
    
    public function getRuc()
    {
        return $this->container['ruc'];
    }
    
    public function setRuc($ruc)
    {
        $this->container['ruc'] = $ruc;
        return $this;
    }
    
    public function getPrimerNombre()
    {
        return $this->container['primer_nombre'];
    }
    
    public function setPrimerNombre($primer_nombre)
    {
        $this->container['primer_nombre'] = $primer_nombre;
        return $this;
    }
    
    public function getSegundoNombre()
    {
        return $this->container['segundo_nombre'];
    }
    
    public function setSegundoNombre($segundo_nombre)
    {
        $this->container['segundo_nombre'] = $segundo_nombre;
        return $this;
    }
    
    public function getApellidoPaterno()
    {
        return $this->container['apellido_paterno'];
    }
    
    public function setApellidoPaterno($apellido_paterno)
    {
        $this->container['apellido_paterno'] = $apellido_paterno;
        return $this;
    }
    
    public function getApellidoMaterno()
    {
        return $this->container['apellido_materno'];
    }
    
    public function setApellidoMaterno($apellido_materno)
    {
        $this->container['apellido_materno'] = $apellido_materno;
        return $this;
    }
    
    public function getDirecciones()
    {
        return $this->container['direcciones'];
    }
    
    public function setDirecciones($direcciones)
    {
        $this->container['direcciones'] = $direcciones;
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
