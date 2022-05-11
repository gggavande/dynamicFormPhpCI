<!DOCTYPE html>
<html>
<head>
  <title>Generate form</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
 <div class="container">
    <br>
 
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <?php foreach ($post as $key => $value) { ?>
              <span style="font-weight: bold;"><?php echo $key; ?></span> = <?php echo $value; ?><br>
          <?php } ?>
        <a href="/testci" class="btn btn-success">Go to Upload Json</a>
        </div>
    </div>
  
</div>
</body>
</html>