<?php

/*
 * Author: John Connolly
 * 
 * index.php
 * 
 * Project: Jarvis Display
 * 
 */

require Terminal.php;
require PictureManip.php;

<!-- TODO make global php variables to input into these variable places -->
<!-- global = server IP: $_SERVER['SERVER_ADDR'] -->
<!-- global = host IP: $_SERVER['HTTP_HOST']	-->
<!-- global = set to any variables: $GLOBALS['z'] for $z -->

<div id="date_time">
    <div id="date" class="semi_arc e4">
      <div class="semi_arc_2 e4_1">
        <div class="counterspin4"></div>
      </div>
        <div style="font-size: 40px; margin-top: 25px;">04</div>
        <div style="font-size: 25px;">January</div>
    </div>
    
    <div id="time" class="arc e1">
        <div style="font-size: 23px; margin-left: -10px; margin-top: 23px;">23:41</div>
        <div style="font-size: 15px; margin-left: 40px; margin-top: -30px; display; inline;">31</div>
        <div style="font-size: 17px; margin-top: 10px;">Tuesday</div>
    </div>
  </div>

  <p class="title">Performance</p>
  <div class="hline title_underline"></div>
  
  <span class="menuitem entypo-gauge" style="font-size: 30px; margin-left: 10px;">
    <p id="cpu" class="caption" style="font-size: 20px;">CPU Usage: 19%</p>
  </span> <br/>
  
  <span class="menuitem entypo-chart-area" style="font-size: 30px; margin-left: 10px;">
    <p id="ram" class="caption" style="font-size: 20px;">Physical Memory: 28%</p>
  </span> <br/>
  
  <span class="menuitem entypo-chart-pie" style="font-size: 30px; margin-left: 10px;">
    <p id="proc" class="caption" style="font-size: 20px;">Processes: 73</p>
  </span>

?>