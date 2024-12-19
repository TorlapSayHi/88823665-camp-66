<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h1>File index.php</h1>
    
</head>
<body>
<?php
    echo "Hello World";
    echo "<br>";
    print "Hello World";
    echo "<br>";
    print_r ("Hello World");
    echo "<br>";
    printf ("Hello World");
    echo "<br>";
    var_dump ("Hello World");
    echo "<br>";
    $myvar = "Hello World"
    ?>
    <h1><?php echo $myvar; ?></h1>
    <?php
    echo "<h1>".$myvar."</h1>"
    ?>
    <?php
    $x = 1;
    FUNction myfunction($myparam){
        global $x;
        $x = "Hello";
        return $myparam;
    }
    echo "<p>".MYFUNCTION("Hello World")."</p>"
    // ไม่สนตัวพิมใหญ่พิมเล็ก แค่ตัวเหมือนกัน
    ?>
    <h1><?php echo $x; ?></h1>
    <?php echo "1" + '1'; ?>
    <?php 
    $MYCHAR = "a";
    ?>
    <H1><?php echo ++$MYCHAR;?></H1>
    <?php 
    if(1 === 1){
    echo "1 == \"1\"";
    } else if(true) {
    echo "1 != \"1\"";    
    }
    echo "<br>";

    $myArr = array(1, 2, 3, 4, 5);
    for($i = 0; $i < count($myArr); $i++){
        echo $myArr[$i];
    }
    echo "<br>";
    foreach($myArr as $index => $value){
        echo $value;
    }
    echo "<br>";
    $myArr2[] = [1, 2, 3];
    $myArr2[] = 2;
    $myArr2[4] = 3;
    $myArr2[] = 4;
    $myArr2[] = 5;
    print_r($myArr2);
    echo "<br>";
    $myArr3 = array(1, 2, 3, "myIndex" => 4);
    $myArr3["myIndex"] = 1;
    print_r($myArr3);
    foreach($myArr as $value){
        echo $value;
    }
    ?>
</body>
</html>