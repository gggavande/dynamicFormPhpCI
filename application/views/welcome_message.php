<!DOCTYPE html>
<html>
<head>
  <title>Dynamic form</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
 <div class="container">
    <br>
 
    <div class="row">
      <div class="col-md-2"></div>
        <div class="col-md-8">
          <form action="index.php/welcome/getjson" method="post" accept-charset="utf-8" enctype="multipart/form-data">
   
            <div class="form-group">
              <label for="formGroupExampleInput">Select Json File</label>
              <input type="file" name="jsonFile" class="form-control" required>
            </div> 
            
            <div class="form-group">
             <button type="submit" id="send_form" class="btn btn-success">Submit</button>
            </div>
          </form>
        </div>
    </div>
  
</div>
</body>
</html>