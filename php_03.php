<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
    <div class="row mb-3">
    <form action="php_03.php" method="post">
          <label for="value" class="col-sm-2 col-form-label">ป้อนตัวเลขที่ต้องการ </label>
              <input type="input" class="form-control" id="value" name="value" placeholder="ตัวเลข" require>
        </div>
        <div class="mb-4">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        <?php $myvar = (int)$_POST['value']; ?>
        <h1>สูตรคูณแม่ <?php echo $myvar; ?></h1>
    </form>
        <?php 
        for($i = 1; $i <= 12; $i++){
            ?>
        <div class = "row">
            <div class = "h2 col text-end"><?php echo $myvar ?>x<?php echo$i ?></div>
            <div class = "h2 col text-start"><?php echo $myvar*$i ?></div>
        </div>
        <?php
        }
        ?>
</body>
</html>