<?php

ini_set('memory_limit', '-1');

declare(strictly_types = 1);

class Game1 {

	 public static function  calculate(array $set , int $n, $old_set = []){

	     if($set == $old_set)
             return "No hay coincidencias";

         $old_set = !empty($old_set) ? $old_set : $set;

         $first = array_shift($set);

         $sub_set = [];

         foreach ($set as $i => $val) {
             if($val + $first == $n)
                 $sub_set = [ $first,  $val];
         }

         array_push($set,$first);

         if(empty($sub_set))
             $sub_set = self::calculate( $set, $n, $old_set);

         return $sub_set;
	}
}


/** M **/
$m = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24];

/** N* */
$n = 47;

try{
	print_r(Game1::calculate($m,$n));
} catch(TypeError $e){
	echo "ERROR:: ".$e->getMessage();

}
