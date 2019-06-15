<?php

require 'vendor/autoload.php';

use baddoctor\makemyday\Makemyday;

$day = new Makemyday();

echo $day->go();