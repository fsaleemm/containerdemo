<!DOCTYPE html>
<html>  
  <body>
    <p><?php echo "Host Name is: ".gethostname(); ?></p>
    <p><?php 
    $currentDate = new datetime();
    echo $currentDate->format('Y-m-d H:i:s'); ?></p>
    <p>Version: 5.0</p>
  </body>
</html>