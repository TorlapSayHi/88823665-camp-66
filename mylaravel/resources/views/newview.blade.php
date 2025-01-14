<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
<form action="{{url('/newmycontroller')}}" 
    method="post">
    <?php $myvar = (int)2; ?>
    @csrf
    <div class="row mb-3">
          <label for="input" >ป้อนตัวเลขที่ต้องการ </label>
              <input type="number" class="form-control" id="myinput" name="myinput" placeholder="ตัวเลข 1, 2, 3,..." require>
    </div>
    <div class="mb-4">
        <button class="btn btn-success" type="submit">Submit</button>
    </div>
    <div class = "row">
        <h1>สูตรคูณแม่ <?php echo $myinput; ?></h1>
    </div>
</form>
    <?php 
        for($i = 1; $i <= 12; $i++){
            ?>
        <div class = "row">
            <div class = "h2 col text-end"><?php echo $myinput ?>x<?php echo$i ?></div>
            <div class = "h2 col text-start"><?php echo $myinput*$i ?></div>
        </div>
        <?php
        }
    ?>
</body>
</html>