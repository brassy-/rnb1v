<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "info@notfortouristrome.com";
  $email = $_REQUEST['email'];
  $name = $_REQUEST['name'];
  $comment = $_REQUEST['message'];
  
  //send email
  mail($admin_email, "$name", $comment, "From:" . $email);
  
  //Email response
  echo header("Location: thankyou.html");
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>

 <form method="post">
  Email: <input name="email" type="text" /><br />
  Subject: <input name="subject" type="text" /><br />
  Message:<br />
  <textarea name="comment" rows="15" cols="40"></textarea><br />
  <input type="submit" value="Submit" />
  </form>
  
<?php
  }
?>