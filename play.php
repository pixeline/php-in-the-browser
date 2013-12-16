<?php


$calendar_entry = array();
$calendar_entry[]= array('calendar_id'=>1, 'title'=>'School Event 1', 'teaser'=>'School Event 1');
$calendar_entry[]= array('calendar_id'=>1, 'title'=>'School Event 2', 'teaser'=>'School Event 2');

$months = array();
$months[]=array('calendar_id'=>1, 'school_id'=> 1, 'calendar_date'=>'2012-08-11');
$months[]=array('calendar_id'=>2, 'school_id'=> 1, 'calendar_date'=>'2012-08-12');
$months[]=array('calendar_id'=>3, 'school_id'=> 1, 'calendar_date'=>'2012-08-12');

$events = array();
foreach($months as $m){
	$events[$m['calendar_date']][] = $m;
}
echo '<pre>';
print_r($events);
echo '</pre>';
//$bolts = array();
//$bolts[1] = array('price'=> 25);
//$bolts[2] = array('price'=> 12);
//$bolts[3] = array('price'=> 45);
//$bolts[4] = array('price'=> 33);
//$bolts[5] = array('price'=> 32);
//$bolts[6] = array('price'=> 31);
//
//$accessories = array();
//$accessories[1] = array('price'=> 140);
//$accessories[2] = array('price'=> 120);
//$accessories[3] = array('price'=> 134);
//$accessories[4] = array('price'=> 136);
//
//$stuffer = array();
//$stuffer[1] =array('price'=> 12);
//$stuffer[2] =array('price'=> 12);
//$stuffer[3] =array('price'=> 12);
//$stuffer[4] =array('price'=> 12);
//
//$wrapper = array();
//$wrapper[1] =array('price'=> 12);
//$wrapper[2] =array('price'=> 12);
//$wrapper[3] =array('price'=> 12);
//
//$items = array();
//$items[1] = array('bolt'=> 3, 'bolt_amount'=>7, 'accessory'=>2, 'stuffer'=>4, 'wrapper'=>2);
//// Do that for 25 items, each item is an array containing its relationships. Store the Index of the part in its own array so you can reference it when calculating the price.
//
//$items[1]['price'] = ($items[1]['bolt_amount'] * $bolts[$items[1]['bolt']]['price']) + $accessories[$items[1]['accessory']]['price'] + $stuffer[$items[1]['stuffer']]['price'] + $wrapper[$items[1]['wrapper']]['price'];
//
//echo $items[1]['price'];
//
//// 7*45 + 120 + 12 + 12 = 459
?>