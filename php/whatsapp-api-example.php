<?php
// WhatsApp-API gateway connector example
// Copyright whatsapp-api.com
// All rights reserved.
// ------------------------------------------
// EDIT THE FOLLOWING VARIABLES

$key = '337d7e66a96877083f17af5430e18590';
$cc = '+62';
$number = '85774118760';
$msg = 'TERAY Message';

// END VARIABLES
// ------------------------------------------

class whatsapp {

   

   function whatsapp($key){
      $this->key=$key;
   }
   function send(){
      $url="http://api.whatsapp-api.com/connector/auth?".
         http_build_query(
         array(
         "key"=>$this->key,
         "cc"=>$this->cc,
         "number"=>$this->number,
         "msg"=>$this->msg,
         ));
      $rs=json_decode(file_get_contents($url), true);
      $this->result=$rs["result"];
      if (isset($rs["reason"])) $this->reason=$rs["reason"];
      else unset($this->reason);
      if($this->result) return true;
      else return false;
   }
}
function xlog($val){
      echo "<pre>";
      print_r($val);
      echo "</pre>";
   }
$whatsapp=new whatsapp($key);
$whatsapp->cc=$cc;
$whatsapp->number=$number;
$whatsapp->msg=$msg;
$whatsapp->send();

if ($whatsapp->result){
   echo "Message successfully sent";
}else{
   xlog($whatsapp);
   echo "Send message failure: ".$whatsapp->reason;
}
?>