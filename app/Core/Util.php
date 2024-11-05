<?php

namespace Core;

<<<<<<< HEAD
=======
use function PHPSTORM_META\map;

>>>>>>> origin/feature_Task10
class Util
{
    /**
     * 
     */
    public static function arrayToList($array = [], $mask = "%s", $separator = ","): string
    {
<<<<<<< HEAD
        return implode($separator, array_map( 'sprintf', array_fill(0, count ($array), $mask), $array ));
=======
        return implode($separator, array_map( "sprintf", array_fill(0, count ($array), $mask), $array ));
>>>>>>> origin/feature_Task10
    }

    public static function keyValueToList($array = [], $mask = "%s => %s", $separator = ","): string
    {
<<<<<<< HEAD
        return implode($separator, array_map( 'sprintf', array_fill(0, count ($array), $mask), array_keys($array), array_values($array)));
    }

=======
        return implode($separator, array_map( "sprintf", array_fill(0, count ($array), $mask), array_keys($array), array_values($array)));
    }

    public static function quoteString($string){
        if(gettype($string) == "string"){
            return "\"$string\"";
        }
        return $string;
    }

    public static function quoteStringValues($array){
        return array_map("self::quoteString", $array);
    }
>>>>>>> origin/feature_Task10
}