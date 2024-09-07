<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
     for($i=1; $i <= 40; $i++){
        // echo $i."<br>";
        if($i === 30){
            break;
      
        } ?><h1 style="font-size:50px;margin-left:50%;color:red"> <?php
        echo $i."<br>";
     }
     ?>    
     </h1> 
</body>
</html>