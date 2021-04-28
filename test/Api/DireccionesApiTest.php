<?php

namespace direcciones\pe\Client;

use \GuzzleHttp\Client;
use \GuzzleHttp\Event\Emitter;
use \GuzzleHttp\Middleware;
use \GuzzleHttp\HandlerStack as handlerStack;

use \direcciones\pe\Client\Configuration;
use \direcciones\pe\Client\ObjectSerializer;
use \direcciones\pe\Client\Api\DireccionesApi ;

use Signer\Manager\ApiException;
use Signer\Manager\Interceptor\MiddlewareEvents;
use Signer\Manager\Interceptor\KeyHandler;

class DireccionesApiTest extends \PHPUnit_Framework_TestCase
{
    
    
    
    public function setUp()
    {
        
        $password = getenv('KEY_PASSWORD');
        $this->signer = new \direcciones\pe\Client\Interceptor\KeyHandler(null, null, $password);
        $events = new \direcciones\pe\Client\Interceptor\MiddlewareEvents($this->signer);
        $handler = \GuzzleHttp\HandlerStack::create();
        $handler->push($events->add_signature_header('x-signature'));
        $handler->push($events->verify_signature_header('x-signature'));
        $config = new \FicoscorePeru\Client\Configuration();
        $config->setHost('the_url');

        $client = new \GuzzleHttp\Client(['handler' => $handler]);
        $this->apiInstance = new \direcciones\pe\Client\Api\DireccionesApi($client, $config);

    }
    
    
    public function testDirecciones()
    {

        $x_api_key = "your_api_key";
        $username = "your_username";
        $password = "your_password";

        $request = new \direcciones\pe\Client\Model\Peticion();

        $request->setTipoDocumento("XXX");
        $request->setNumeroDocumento("XXXXXX");

        try {
          $result = $this->apiInstance->direcciones($x_api_key, $username, $password, $request);
            $this->assertNotNull($result);
          } catch (Exception $e) {
            echo 'Exception when calling DireccionesApi->direcciones: ', $e->getMessage(), PHP_EOL;
        }

    }
}
