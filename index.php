<?php

function getRandPlanets($arr,$num){
     $arr=array_filter($arr);
     $arr_rand=array_rand($arr,$num);
    return array_map(function($item) use ($arr){
    return $arr[$item];},$arr_rand);
}
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

print_r(getRandPlanets($planets,2));
print_r(getRandPlanets($planets,3));
print_r(getRandPlanets($planets,4));
