<?php
/**
 * Created by PhpStorm.
 * User: joseplluisgiraltdlacoste
 * Date: 11/02/14
 * Time: 21:18
 */
spl_autoload_register(function ($class) {
        include $class.'.php';
    });