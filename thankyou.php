<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <title>Not Far From The Tree</title>

  <link rel="shortcut icon" href="images/favicon.png"> 
  <link rel="apple-itouch-icon" href="images/favicon.png">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


  <link rel="stylesheet" href="styles/reset.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="styles/thankyou.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="styles/dropdown-nav.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="styles/print.css" type="text/css" media="print" >

</head>


  <?php include("includes/nav.php"); ?>



    <div id="containerThankyou">
      <section id="thankyoucontent">
        <h1>Thank You!</h1>
        
        <?php
            $to="harrington94@hotmail.ca";
            $subject="Thank you";
            $message= $_POST["fullname"]  . "\r\n";
            $message .= $_POST["email"] . "\r\n";
            $message .= $_POST["phonenumber"] . "\r\n";
            $message .= $_POST["treeaddress"] . "\r\n";
            $message .= $_POST["cityward"] . "\r\n";
            $message .= $_POST["treetype"] . "\r\n";
            $message .= $_POST["yesno"] . "\r\n";
            $message .= $_POST["phone"] . "\r\n";
            
            $from= $_POST["email"];
            mail($to, $subject, $from, $message);
        
        
        
        
        
        
        
        
        
        
        ?>
        
        
        <h2>Hi <?php echo $_POST["fullname"]; ?>, an e-mail has been sent to <?php echo $_POST["email"]; ?></h2>
      </section> 
      
      
    </div>
  </div>
  <?php include("includes/footer.php"); ?>