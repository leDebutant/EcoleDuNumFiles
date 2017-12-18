<?php
/**
 * Created by PhpStorm.
 * User: ferna
 * Date: 18/12/2017
 * Time: 09:51
 */
namespace Helpers;
use Giraffe\Testing\Alfonso\Session as A;

class Helpers
{
    public static function testing(){
        echo "testing";
    }

    public static function otherNameSpace(){
        A::myStaticMethod();
    }
}