<?php

require_once('../vendor/autoload.php');
require_once('guidance/Classes/Guidance.php');
(new \Thopra\Guidance(__DIR__.'/guidance.json'))->render();

?>
