<?php

require_once 'autoload.php';

use App\Bootstrap;
use App\Request;

try
{
    Bootstrap::run(new Request);
}
catch (\Exception $e)
{
    echo '<strong>' . $e->getMessage() . '</strong>';
}