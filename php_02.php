<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5">
        <?php $myvar = 2; ?>
        <h1>แสดงข้อมูลตัวเลข 1 - 100 ว่าเป็นเลขคู่ หรือ เลขคี่</h1>
        <?php 
        for($i = 1; $i <= 100; $i++){
            if($i%2==0){
                $myvar = $i." เลขนี้เป็นเลขคู่";
            }else{
                $myvar = $i." เลขนี้เป็นเลขคี่";
            }
            ?>
        <div class = "row">
            <div class = "h2 col text-start"><?php echo $myvar ?></div>
        </div>
        <?php
        }
        ?>
</body>
</html>