<h1> PHP Page </h1>
<?php 

  $user_agent = $_SERVER['HTTP_USER_AGENT'];
  echo "$user_agent . <br>";
  phpinfo(); ?>
