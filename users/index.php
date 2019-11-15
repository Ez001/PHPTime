<?php 
 
	function forgotpassword($pass,$name,$to)
  {
      $body ="<table  width=100% border=0><tr><td>";
      $body .= "<img width=200 src='";
     // $body .= $this->imageUrl();
      $body .="'></img></td><td style=position:absolute;left:350;top:60;><h2><font color = #346699>PMS Pvt Ltd.</font><h2></td></tr>";
      $body .='<tr><td colspan=2><br/><br/><br/><strong>Dear '.$name.',</strong></td></tr>';
      $body .= '<tr><td colspan=2><br/><font size=3>As per Your request we send Your Password.</font><br/><br/>Password is : <b>'.$pass.'</b></td></tr>';
      $body .= '<tr><td colspan=2><br/>If you have any questions, please feel free to contact us at:<br/><a href="mailto:support@pms.com" target="_blank">support@pms.com</a></td></tr>';
      $body .= '<tr><td colspan=2><br/><br/>Best regards,<br>The PMS Team.</td></tr></table>';
      $subject = "Forgot Password";
      sendmail($body,$to,$subject);
  }

	
   function sendmail($body,$to,$subject)
    {
        //require_once 'init.php';
        $from='testing@gmail.com';      
        $headersfrom='';
        $headersfrom .= 'MIME-Version: 1.0' . "\r\n";
        $headersfrom .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headersfrom .= 'From: '.$from.' '. "\r\n";
        mail($to,$subject,$body,$headersfrom);
    }
	
    function imageUrl()
    {
        return "http://".$_SERVER['SERVER_NAME'].substr($_SERVER['SCRIPT_NAME'], 0, strrpos($_SERVER['SCRIPT_NAME'], "/")+1)."images/upload/138601490237012A.jpg";
    }
      
    $to ='ezra00100@gmail.com';
    $body ='Welome to here';
    $name = 'Adamu Ezra';
    echo forgotpassword($pass,$name,$to);
	
?>
