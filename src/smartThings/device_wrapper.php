<?php

namespace SmartThings;

require __DIR__ . '/devices/common.php';
require __DIR__ . '/devices/generic.php';
require __DIR__ . '/devices/tv.php';
require __DIR__ . '/devices/aircon.php';

interface Device {

    public function info(bool $update = false) : object;
    public function status(bool $update = false) : object;
    
}

?>
