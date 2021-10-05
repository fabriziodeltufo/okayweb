<?php
/*
-- @OkayWeb.Co.uk.
-- @Fabrizio Del Tufo
-- @version 1.0
-- @date 12.08.2020
-- @url https://okayweb.co.uk
-- @last upd: 25.08.2020
*/

/*var_dump($_POST['name']);
var_dump($_POST['email']);
var_dump($_POST['message']);
var_dump($_POST['gdprFlag']);
var_dump($_POST['submit']);
*/

if( isset($_POST['submit']) ){

  if ( isset($_POST['gdprFlag']) ){

    $mydate = getdate();
    $TZ = date_default_timezone_get();

    $FlagDate = $mydate['weekday'] . ", " . $mydate['mday'] . " " . $mydate['month'] . " "  . $mydate['year'] . " - "
    . $mydate['hours'] . ":" . $mydate['minutes'] . ":" . $mydate['seconds'] . "(" . $TZ . ")" ;


      $subject = "OkayWeb Form Request. GDPR Consent given on : " . $FlagDate  ;

      $name = $_POST['name'];
      $emailFrom = $_POST['email'] ;

      $message = $_POST['message'];

      $msg = wordwrap($message, 70);

      $emailTo = "info@okayweb.co.uk" ;
      $headers = "From: " . $emailFrom ;

      // sintax : mail(to,subject,message,headers,parameters); //
      $success = mail($emailTo, $subject, $msg , $headers) ;

      if (!$success) {
          $errorMessage = error_get_last()['message'];
          echo "MESSAGE: " . $errorMessage ;
      }

      $headers = "From: " . $emailTo ;
      $subject = "This is the copy of your message: " . $subject  ;
      mail($emailFrom, $subject, $msg , $headers ) ;
      sleep(1);
      header('Location:index.php');

  } // gdprFlag

} // submit


?>
