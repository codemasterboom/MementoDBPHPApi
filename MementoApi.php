<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

class MementoApi  {
  protected $serverUrl;
  protected $serverPort;
  protected $isInited = false;
  
  function __construct($pServer, $pPort = 8080) {
      $this->serverUrl = $pServer;
      $this->serverPort = $pPort;
   }
  
  function init()
  {
    $this->isInited = false;
    $client = new GuzzleHttp\Client();
    $res = $client->request('GET', \sprintf("%s:%i", $this->serverUrl , $this->serverPort  ));
    if ( $res->getStatusCode() === 200)
    { $this->isInited = true; }
    return $this->isInited;
  }

  function isInited()
  {
    return $this->isInited;
  }
  
}

