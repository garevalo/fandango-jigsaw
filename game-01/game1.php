<?php

declare(strictly_types = 1);

class Game1 {

	 public static function  calculate(array $set , int $n){

	 	foreach ($set as $i => $value){

	 	   $match = array_filter($set,function($item) use ($value,$n){

	 	       if($value != $item){

	 	           $sum = $item + $value;

	 	           if($sum == $n )
	 	               return $item;

	 	       }

            });

	 	   if($match)
	 	       return array_merge([$value], $match);
	 	   else {

	 	       if( count($set) == $i + 1  && empty($match)){
                    return "No existe coincidencia";
               } else {
	 	           continue;
               }
           }

        }

	}
}


/** M **/
$m = [2, 5, 8, 0, 14];
/** N* */
$n = 7;

try{
	print_r(Game1::calculate($m,$n));
} catch(TypeError $e){
	echo "ERROR:: ".$e->getMessage();

}
