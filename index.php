<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-script</title>
</head>
<body>
  <?php 
    echo "Hello World"
  ?>
  <!-- <?php 
   phpinfo();
  ?> -->
  <?php 
  function get_var($varname){
    global $$varname;
    var_dump($$varname);
  }

   get_var('_POST');
  ?>
</body>
</html>