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
          <form action="saveJson" method="post" accept-charset="utf-8" enctype="multipart/form-data">
    
          <?php foreach ($jsonData as $key => $value) { ?>
            <div class="form-group">
              <label for=""><?php echo $value->label; ?></label>
              <?php if($value->type != "dropdown"){ ?>
                <input type="<?php echo $value->type; ?>" name="<?php echo $value->key; ?>" class="form-control" <?php if(isset($value->isRequired) && $value->isRequired){ echo 'required'; } ?> <?php if(isset($value->isReadonly) && $value->isReadonly){ echo 'readonly'; } ?> placeholder="<?php if(isset($value->unit) && $value->unit){ echo $value->unit; } ?>">
              <?php }elseif($value->type == "dropdown"){ ?>
                <select name="<?php echo $value->key; ?>" class="form-control" <?php if(isset($value->isRequired) && $value->isRequired){ echo 'required'; } ?> <?php if(isset($value->isReadonly) && $value->isReadonly){ echo 'readonly'; } ?>>
                  <?php foreach ($value->items as $key1 => $value1) { ?>
                    <option value="<?php echo $value1->value; ?>"><?php echo $value1->text; ?></option>
                  <?php } ?>
                </select>
              <?php } ?>
            </div> 
          <?php } ?>
            
            <div class="form-group">
             <button type="submit" id="send_form" class="btn btn-success">Submit</button>
            </div>
          </form>
        </div>
    </div>
  
</div>
</body>
</html>