﻿<?php

/*
 * Author: John Connolly
 * 
 * PictureManip.php
 * 
 * Project: Jarvis Display
 * 
 */

function PictureManip(){
	?>
	<script>
	@import "compass/css3";

/* Font / Universal Properties */
@import url(http://weloveiconfonts.com/api/?family=entypo);

[class*="entypo-"]:before {
  font-family: 'entypo', sans-serif;
  transition: 0.3s;
}

* {
  user-select: none;
  font: 20px 'Agency FB', sans-serif;
}

html, body { height: 100%; overflow: hidden;  }



/* Left Menu */
#leftmenu {
  position: fixed;
  float: left;
  margin-left: 50px;
  width: 210px;
}

#date_time {
  margin-left: 30px;
  width: 200px;
  height: 200px;
}

#time {
  margin-left: 110px;
  position: fixed;
  background: rgba(0,0,0,0.8);
  line-height: 0;
}

#date {
  position: fixed;
  margin-top: 20px;
  background: rgba(0,0,0,0.8);
}

.title {
  font-size: 30px;
  text-align: center;
  margin: 0;
  margin-top: 10px;
  margin-left: -15px;
}

.title_underline {
  border-color: $colour5;
}

.menu {
  width: 200px;
  height: 200px;
  margin: 0;
  padding: 5px;
}

.menuitem {
  width: 100%;
  height: 40px;
  padding: 5px;
  margin-left: 5px;
  color: $cprimary;
  background: transparent;
  border: transparent;
  font-size: 15px;
  text-align: left;
  display: block;
  float: left;
  transition: 0.3s;
  cursor: pointer;
}

.caption {
  color: $colour6;
  display: inline;
  transition: 0.3s;
  cursor: pointer;
}
.caption:hover { color: $cprimary; }

.app_icon {
  width: 48px;
  color: $colour6;
  font-size: 40px;
  text-align: center;
  display: inline-block;
  cursor: pointer;
}
.app_icon:hover { color: $cprimary; }



/* Right Menu */
#rightmenu {
  float: right;
  margin-right: 20px;
  width: 300px;
}

#note_input {
  color: $colour6;
  padding: 5px;
  border-style: none;
  background: transparent;
  resize: none;
  transition: 0.3s;
  width: calc(100% - 15px);
}
#note_input:hover {
  color: $cprimary;
  transition: 0.3s;
}



/* Taskbar */
#taskbar_wrapper

#taskbar {
  position: fixed;
  width: 200px;
  height: 200px;
  background: gray;
  margin-left: auto;
  margin-right: auto;
}



/* Arc Reactor */
ul {
  list-style:none;
  margin:0;
  padding:0
}

#arc_container {
  position: fixed;
  width: 100%;
  height: 100%;
  z-index: -1;
}

.arc_reactor {
  position: relative;
  top: 50%;
  margin-top: -125px;
  margin-left: auto;
  margin-right: auto;
  width: 250px;
  height: 250px;
  border-radius: 50%;
  box-shadow: 0px 0px 50px 15px $colour3, inset 0px 0px 50px 15px $colour3;
}

.case_container {
  width: 210px;
  height: 210px;
  border-radius: 50%;
  position: absolute;
  margin-left: 20px;
  margin-top: 20px;
}

.core2 {
  background: #cedce0;
  width: 110px;
  height: 110px;
  @include border-radius(50%);
  border: 5px solid $colour1;
  animation: flicker2 0.2s infinite;
  margin-left: auto;
  margin-right: auto;
  margin-top: 40px;
}

.e7 {
  width: 95.25%;
  height: 95.25%;
  left: 2.5475%;
  right: 2.5475%;
  border: $size3 solid transparent;
  background: transparent;
  @include border-radius(50%);
  transform: rotateZ(0deg);
  transition: box-shadow 3s ease;
  text-align: center;
  line-height: 100px;
}

.marks li {
  display:block;
  width: 3px;
  height: 11px;
  background: $cshadow;
  position: absolute;
  margin-left: 105px;
  margin-top: -110px;
  animation: colour_ease2 3s infinite ease-in-out;
}

@keyframes colour_ease2 {
  0% { background: rgba(2,254,255,1); }
  50% { background: rgba(2,254,255,0.3); }
  100% { background: rgba(2,254,255,1); }
}

$arc_radius: 125px;
.marks li:first-child {transform:rotate(6deg) translateY($arc_radius)}
.marks li:nth-child(2) {transform:rotate(12deg) translateY($arc_radius)}
.marks li:nth-child(3) {transform:rotate(18deg) translateY($arc_radius)}
.marks li:nth-child(4) {transform:rotate(24deg) translateY($arc_radius)}
.marks li:nth-child(5) {transform:rotate(30deg) translateY($arc_radius)}
.marks li:nth-child(6) {transform:rotate(36deg) translateY($arc_radius)}
.marks li:nth-child(7) {transform:rotate(42deg) translateY($arc_radius)}
.marks li:nth-child(8) {transform:rotate(48deg) translateY($arc_radius)}
.marks li:nth-child(9) {transform:rotate(54deg) translateY($arc_radius)}
.marks li:nth-child(10) {transform:rotate(60deg) translateY($arc_radius)}
.marks li:nth-child(11) {transform:rotate(66deg) translateY($arc_radius)}
.marks li:nth-child(12) {transform:rotate(72deg) translateY($arc_radius)}
.marks li:nth-child(13) {transform:rotate(78deg) translateY($arc_radius)}
.marks li:nth-child(14) {transform:rotate(84deg) translateY($arc_radius)}
.marks li:nth-child(15) {transform:rotate(90deg) translateY($arc_radius)}
.marks li:nth-child(16) {transform:rotate(96deg) translateY($arc_radius)}
.marks li:nth-child(17) {transform:rotate(102deg) translateY($arc_radius)}
.marks li:nth-child(18) {transform:rotate(108deg) translateY($arc_radius)}
.marks li:nth-child(19) {transform:rotate(114deg) translateY($arc_radius)}
.marks li:nth-child(20) {transform:rotate(120deg) translateY($arc_radius)}
.marks li:nth-child(21) {transform:rotate(126deg) translateY($arc_radius)}
.marks li:nth-child(22) {transform:rotate(132deg) translateY($arc_radius)}
.marks li:nth-child(23) {transform:rotate(138deg) translateY($arc_radius)}
.marks li:nth-child(24) {transform:rotate(144deg) translateY($arc_radius)}
.marks li:nth-child(25) {transform:rotate(150deg) translateY($arc_radius)}
.marks li:nth-child(26) {transform:rotate(156deg) translateY($arc_radius)}
.marks li:nth-child(27) {transform:rotate(162deg) translateY($arc_radius)}
.marks li:nth-child(28) {transform:rotate(168deg) translateY($arc_radius)}
.marks li:nth-child(29) {transform:rotate(174deg) translateY($arc_radius)}
.marks li:nth-child(30) {transform:rotate(180deg) translateY($arc_radius)}
.marks li:nth-child(31) {transform:rotate(186deg) translateY($arc_radius)}
.marks li:nth-child(32) {transform:rotate(192deg) translateY($arc_radius)}
.marks li:nth-child(33) {transform:rotate(198deg) translateY($arc_radius)}
.marks li:nth-child(34) {transform:rotate(204deg) translateY($arc_radius)}
.marks li:nth-child(35) {transform:rotate(210deg) translateY($arc_radius)}
.marks li:nth-child(36) {transform:rotate(216deg) translateY($arc_radius)}
.marks li:nth-child(37) {transform:rotate(222deg) translateY($arc_radius)}
.marks li:nth-child(38) {transform:rotate(228deg) translateY($arc_radius)}
.marks li:nth-child(39) {transform:rotate(234deg) translateY($arc_radius)}
.marks li:nth-child(40) {transform:rotate(240deg) translateY($arc_radius)}
.marks li:nth-child(41) {transform:rotate(246deg) translateY($arc_radius)}
.marks li:nth-child(42) {transform:rotate(252deg) translateY($arc_radius)}
.marks li:nth-child(43) {transform:rotate(258deg) translateY($arc_radius)}
.marks li:nth-child(44) {transform:rotate(264deg) translateY($arc_radius)}
.marks li:nth-child(45) {transform:rotate(270deg) translateY($arc_radius)}
.marks li:nth-child(46) {transform:rotate(276deg) translateY($arc_radius)}
.marks li:nth-child(47) {transform:rotate(282deg) translateY($arc_radius)}
.marks li:nth-child(48) {transform:rotate(288deg) translateY($arc_radius)}
.marks li:nth-child(49) {transform:rotate(294deg) translateY($arc_radius)}
.marks li:nth-child(50) {transform:rotate(300deg) translateY($arc_radius)}
.marks li:nth-child(51) {transform:rotate(306deg) translateY($arc_radius)}
.marks li:nth-child(52) {transform:rotate(312deg) translateY($arc_radius)}
.marks li:nth-child(53) {transform:rotate(318deg) translateY($arc_radius)}
.marks li:nth-child(54) {transform:rotate(324deg) translateY($arc_radius)}
.marks li:nth-child(55) {transform:rotate(330deg) translateY($arc_radius)}
.marks li:nth-child(56) {transform:rotate(336deg) translateY($arc_radius)}
.marks li:nth-child(57) {transform:rotate(342deg) translateY($arc_radius)}
.marks li:nth-child(58) {transform:rotate(348deg) translateY($arc_radius)}
.marks li:nth-child(59) {transform:rotate(354deg) translateY($arc_radius)}
.marks li:nth-child(60) {transform:rotate(360deg) translateY($arc_radius)}

/* Particles / Unique Elements */
.vline {
  width: 0;
  height: 200px;
  float: left;
  border-left: 1px solid $colour3;
}

.hline {
  width: 200px;
  height: 0;
  border-bottom: 1px solid $colour3;
}

#particle1 {
  position: fixed;
  margin-left: 260px;
  margin-top: 410px;
}

#particle1_1 {
  position: fixed;
  margin-left: 255px;
  margin-top: 480px;
}

#particle1_2 {
  position: fixed;
  margin-left: 275px;
  margin-top: 580px;
}

#particle1_3 {
  position: fixed;
  color: $colour3;
  font-size: 90px;
  margin-left: 190px;
  margin-top: 730px;
  transform: rotate(90deg);
  z-index: -1;
}

#particle2 {
  position: fixed;
  margin-left: 20px;
  margin-top: 20px;
}

#particle3 {
  position: fixed;
  height: 240px;
  margin-left: 40px;
}

#particle4 {
  position: fixed;
  height: 240px;
  margin-top: 200px;
  margin-left: -10px;
}

#particle5 {
  position: fixed;
  height: 290px;
  margin-top: -90px;
  margin-left: 230px;
  border-color: $colour1;
}

#particle6 {
  position: fixed;
  height: 290px;
  margin-top: 5px;
  margin-left: 3px;
  border-color: $colour2;
}

#particle7 {
  position: fixed;
  height: 290px;
  margin-top: 5px;
  margin-left: 3px;
  border-color: $colour1;
}

#particle8 {
  position: fixed;
  height: 500px;
  margin-left: -232px;
  margin-top: 280px;
  border-color: $colour1;
}

#particle9 {
  position: fixed;
  height: 320px;
  margin-left: 3px;
  border-color: $colour2;
}

/* Right Menu Particles */
#particle10 {
  width: 330px;
  float: right;
  border-color: $colour5;
}

#particle11 {
  margin-right: 30px;
  margin-top: 3px;
  width: 330px;
  float: right;
  border-color: $colour5;
}

#particle12 {
  float: left;
  height: 352px;
  margin-top: -40px;
  border-color: $colour5;
}
</script>
	
	
	<!-- Left Menu -->
<div id="leftmenu">

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
  
  setInterval(function(){ 
    $( "#date_time" ).load( "/GetLoaded.php" );
    <!-- TODO put in functions for the processes and other stuff to put on the page -->
  }, 1000);

  <p class="title">Shortcuts</p>
  <div class="hline title_underline"></div> 
  
  <div class="menu">
    <button class="menuitem"> <span class="entypo-right-open"/> <p class="caption">User</p> </button>
    <button class="menuitem"> <span class="entypo-right-open"/> <p class="caption">Documents</p> </button>
    <button class="menuitem"> <span class="entypo-right-open"/> <p class="caption">Computer</p> </button>
    <button class="menuitem"> <span class="entypo-right-open"/> <p class="caption">Control Panel</p> </button>
    
    <hr style="border-color: transparent; margin: 0;"/>
    <div class="hline" style="margin-top: 5px; margin-bottom: 5px;"></div>
    
    <button class="menuitem"> <span class="entypo-right-open"/> <p class="caption">Custom Path 1</p> </button>
    <button class="menuitem"> <span class="entypo-right-open"/> <p class="caption">Custom Path 2</p> </button>
    <button class="menuitem"> <span class="entypo-right-open"/> <p class="caption">Custom Path 3</p> </button>
  </div>
  
  <p class="title">Social</p>
  <div class="hline title_underline"></div>
  
  <div class="app_icon entypo-facebook-squared"></div>
  <div class="app_icon entypo-twitter"></div>
  <div class="app_icon entypo-gplus"></div>
  <div class="app_icon entypo-skype"></div>
  
  <div class="app_icon entypo-tumblr"></div>
  <div class="app_icon entypo-pinterest"></div>
  <div class="app_icon entypo-soundcloud"></div>
  <div class="app_icon entypo-stumbleupon"></div>
  
</div>


<!-- Right Menu -->
<div id="rightmenu">
  <p class="title" style="text-align: left; margin-left: 10px;">Notes</p>
  <div id="particle10" class="hline"></div>
  <div id="particle11" class="hline"></div>
  <div id="particle12" class="vline"></div>
  <textarea id="note_input" rows="12" cols="44">For the maximum viewing experience, please view this pen in full screen where the code is displayed to the side of the display.
    
    To Complete:
    - Right Menu (this side of the screen)
      - Make this note restricted to 11 rows
      - Fill in empty space below
    - Weather widget next to date/time
    - Place quick access taskbar down bottom
    - Fill in space at the top</textarea>
</div>



<!-- Arc Reactor -->
<div id="arc_container">
  <div class="arc_reactor">
    <div class="case_container">
      <div class="e7">
        <div class="semi_arc_3 e5_1">
          <div class="semi_arc_3 e5_2">
            <div class="semi_arc_3 e5_3">
              <div class="semi_arc_3 e5_4"></div>
            </div>
          </div>
        </div>
        <div class="core2"></div>
      </div>
      <ul class="marks">
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
      </ul>
    </div>
  </div>
</div>



<!-- Particles -->
<!-- Left Menu Particles -->
<canvas id="particle1" width="20" height="500"></canvas> <script>
var canvas = document.getElementById('particle1');
var context = canvas.getContext('2d');

context.beginPath();
context.moveTo(0, 0);
context.lineTo(0, 70);
context.lineTo(10, 85);
context.lineTo(10, 135);
context.lineTo(0, 150);
context.lineTo(0, 480);
context.lineTo(5, 490);
context.lineTo(10, 490);
context.lineTo(20, 490);
context.lineTo(20, 250);
context.lineTo(10, 235);
context.lineTo(10, 185);
context.lineTo(20, 170);
context.lineTo(20, 40);
context.lineTo(10, 30);
context.lineTo(10, 20);

context.closePath();
context.lineWidth = 1;
context.fillStyle = 'rgba(2,254,255,0.3)';
context.fill();
context.strokeStyle = 'transparent';
context.stroke();
</script>

<canvas id="particle1_1" width="40" height="510"></canvas> <script>
var canvas = document.getElementById('particle1_1');
var context = canvas.getContext('2d');

context.beginPath();
context.lineTo(0, 0);
context.lineTo(10, 15);
context.lineTo(10, 65);
context.lineTo(0, 80);
context.lineTo(0, 0);

context.closePath();
context.lineWidth = 1;
context.fillStyle = 'rgba(2,254,255,0.3)';
context.fill();
context.strokeStyle = 'transparent';
context.stroke();
</script>

<canvas id="particle1_2" width="40" height="510"></canvas> <script>
var canvas = document.getElementById('particle1_2');
var context = canvas.getContext('2d');

context.beginPath();
context.lineTo(10, 80);
context.lineTo(0, 65);
context.lineTo(0, 15);
context.lineTo(10, 0);
context.lineTo(10, 80);

context.closePath();
context.lineWidth = 1;
context.fillStyle = 'rgba(2,254,255,0.3)';
context.fill();
context.strokeStyle = 'transparent';
context.stroke();
</script>

<div id="particle1_3">
  > > > >
</div>

<div id="particle2">▶<br/>▶<br/>▶</div>
<div id="particle3" class="vline"/>
<div id="particle4" class="vline"/>
<div id="particle5" class="vline"/>
<div id="particle6" class="vline"/>
<div id="particle7" class="vline"/>
<div id="particle8" class="vline"/>
<div id="particle9" class="vline"/>
<?php
}
?>