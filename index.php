<?php 

/*
 * Author: John Connolly
 * 
 * 
 * /

function terminal($command){
   
   if(function_exists('system')){
      
      ob_start();
      system($command, $return_var);
      $output = ob_get_contents();
      ob_end_clean();
   }
   else if(function_exists('passthru')){
      ob_start();
      system($command, $return_var);
      $output = ob_get_contents();
      ob_end_clean();
   }
   else if(function_exists('exec')){
      exec($command, $output, $return_var);
      $output = implode("n", $output);
   }
   else if(function_exists('shell_exec')){
      $output = shell_exec($command);
   }
   else{
      $output = 'Command not found';
      $return_var = 1;
   }
   
   return array('output' => $output, 'status' => $return_var);
}

//TODO run sudo usermod -aG video <username> where username is
//found with whoami and inserted

//TODO make look cool, give background and change colors
//TODO get weather
//TODO free -h command
//TODO find other commands and add them


$o = terminal('cat /proc/cpuinfo');
if($status == 0){
   echo $o['output'];
}
else{
   echo "nothing";
}

echo '<br />';echo '<br />';

$o = terminal('ifconfig');
if($status == 0){
   echo $o['output'];
}
else{
   echo "nothing";
}

echo '<br />';echo '<br />';

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
}

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
 ?>
