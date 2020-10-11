<?php
   session_start();
   
   if(session_destroy()) {
   
  echo "<script>location='../login.html'</script>";
      //header("Location: login.php");
   }
?>