<?php 

/*
 * Author: John Connolly
 * 
 * terminal.php
 * 
 * Project: Jarvis Display
 * 
 */

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

?>