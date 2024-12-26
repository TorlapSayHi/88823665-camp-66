<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5">
        <?php $start = 0; ?>
        <?php $end = 0; ?>
        <div class="row mb-3">
            <form action="php_04.php" method="post">
                <label for="value1" class="col-sm-2 col-form-label">ตัวเลขตัวที่หนึ่ง </label>
                    <input type="input1" class="form-control" id="value1" name="value1" placeholder="ตัวเลข" require>
                <label for="value2" class="col-sm-2 col-form-label">ตัวเลขตัวที่สอง </label>
                    <input type="input2" class="form-control" id="value2" name="value2" placeholder="ตัวเลข" require>
        </div>
        <div class="mb-4">
                    <button class="btn btn-success" type="submit">Submit</button>
        </div>
                <?php $start = (int)$_POST['value1']; ?>
                <?php $end = (int)$_POST['value2']; ?>
            </form>
        <h1>แสดงข้อมูลตัวเลข <?php echo $start?> - <?php echo $end?> ว่าเป็นเลขคู่ หรือ เลขคี่</h1>
        <?php 
        for($i = $start; $i <= $end; $i++){
            if($i%2==0){
                $start = $i." เลขนี้เป็นเลขคู่";
            }else{
                $start = $i." เลขนี้เป็นเลขคี่";
            }
            ?>
        <div class = "row">
            <div class = "h2 col text-start"><?php echo $start ?></div>
        </div>
        <?php
        }
        ?>
</body>
</html>