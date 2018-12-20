<?php 

/*
 * Author: John Connolly
 * 
 * RunCommands.php
 * 
 * Project: Jarvis Display
 * 
 */
function RunCommands(){
  //TODO get weather
//TODO free -h command
//TODO find other commands and add them

/*
$o = terminal('cat /proc/cpuinfo');
if($status == 0){
   echo $o['output'];
}
else{
   echo "nothing";
}

$o = terminal('ifconfig');
if($status == 0){
   $GLOBAL['ifconfig'] = $o['output'];
}
else{
   echo "nothing";
}

$o = terminal('sudo vcgencmd measure_temp');
if($status == 0){
   echo $o['output'];
}
else{
   echo "nothing";
}

echo '<br />';echo '<br />';

$o = terminal('cat /sys/devices/system/cpu/cpu0/cpufreq/scaling_cur_freq');
if($status == 0){
   echo $o['output'];
}
else{
   echo "nothing";
}

echo '<br />';echo '<br />';


$o = terminal('sudo vcgencmd measure_volts core');
if($status == 0){
   echo $o['output'];
}
else{
   echo "nothing";
}*/

//for codec in H264 MPG2 WVC1 MPG4 MJPG WMV9 ; do \
//echo -e "$codec:\t$(vcgencmd codec_enabled $codec)" ; \
//done

//cat /proc/cpuinfo | grep 'core id' for each core on pi

//lscpu

//cpu speed units are htz or mega hertz ...

//uptime

//refresh every second with:
//$page = $_SERVER['PHP_SELF'];
// $sec = "10";
// header("Refresh: $sec; url=$page");

//get weather with
/*

$city="Delhi";
$country="IN"; //Two digit country code
$url="http://api.openweathermap.org/data/2.5/weather?q=".$city.",".$country."&units=metric&cnt=7&lang=en";
$json=file_get_contents($url);
$data=json_decode($json,true);
//Get current Temperature in Celsius
echo $data['main']['temp']."<br>";
//Get weather condition
echo $data['weather'][0]['main']."<br>";
//Get cloud percentage
echo $data['clouds']['all']."<br>";
//Get wind speed
echo $data['wind']['speed']."<br>";

*/

}

?>