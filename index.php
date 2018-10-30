<?php 
require 'MementoApi.php';
$vApi = new MementoApi('memento.bitganj.website',8080);
$vApi->init();
echo ($vApi->isInited());