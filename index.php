<?php // Example 26-4: index.php
  session_start();
  require_once 'header.php';

  echo "<div class='center'>Welcome to GWORLD,";

  if ($loggedin) echo " $user, you are logged in";
  else           echo ' please sign up or log in';

  echo <<<_END
      </div><br>
    </div>
    <div data-role="footer">
      <h4>Social network for university student only,By <a href='https/deployink.com'
      target='_blank'>DEPLOYINK.COM</i></h4>
    </div>
  </body>
</html>
_END;
?>
