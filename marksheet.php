<?php
include('connection.php')
?>
<!doctype html>
<html lang="en">
    <head>
        <title>MARKSHEET</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body style="background-color:black">
      
    <div class="container mt-5" style="color:white;">
    <form action="" method="POST">
    <div class="mb-3" >
        <label for="" class="from-lable" >name</label>
        <input type="text"name="name" placeholder="enter your name"class="form-control">

    </div>
    <div class="mb-3">
    <form action="" method="post">
    <div class="mb-3" >
        <label for="" class="from-lable">math</label>
        <input type="number"name="math" placeholder="enter your name" class="form-control">

    </div>

    <div class="mb-3">
    <form action="" method="post">
    <div class="mb-3" >
        <label for="" class="from-lable">english</label>
        <input type="number"name="english" placeholder="enter your name" class="form-control">

    </div>

    <div class="mb-3">
    <form action="" method="post">
    <div class="mb-3" >
        <label for="" class="from-lable">urdu</label>
        <input type="number"name="urdu" placeholder="enter your name" class="form-control">

    </div>

    <div class="mb-3">
    <form action="" method="post">
    <div class="mb-3" >
        <label for="" class="from-lable">physics</label>
        <input type="number"name="physics" placeholder="enter your name" class="form-control">

    </div>
    <div class="mb-3">
    <form action="" method="post">
    <div class="mb-3" >
        <label for="" class="from-lable">biology</label>
        <input type="number"name="biology" placeholder="enter your name" class="form-control">
    </div>
<button class="btn btn-outline-primary" type="submit" name="result">submite</button>
    </form>
    </div>
<?php  
if(isset($_POST['result'])){
    $name=$_POST['name'];
    $math=$_POST['math'];
    $english=$_POST['english'];
    $urdu=$_POST['urdu'];
    $biology=$_POST['biology'];
    $physics=$_POST['physics'];
    $totalmark=500;
    $obtain=$math + $urdu + $english + $physics + $biology;
    $percentage=$obtain/$totalmark *100;
    $grade ="";
    $remark="";
 if($percentage>=80 && $percentage<=100){
    $grade="A1";
    $remark="excellent";
 }   
else if($percentage>=60 && $percentage<=80){
    $grade="A";
    $remark="very good";
 }   
 else if($percentage>=40 && $percentage<=60){
    $grade="b";
    $remark="good";
 }   
 else if($percentage>=20 && $percentage<=40){
    $grade="c";
    $remark="fair";
 }   
 else if($percentage>=10 && $percentage<=20){
    $grade="d";
    $remark="bad";
 }   
 else {
    $grade="fail";
    $remark="ab kiya bolu";
 }
 

$query = $pdo->prepare("insert into marksheet (name,math,physics,biology,urdu,english,obtain,percentage,grade,remark) values(:pn,:pm,:pp,:pb,:pu,:pe,:po,:pper,:pg,:pr)");
$query->bindparam("pn",$name);
$query->bindparam("pm",$math);
$query->bindparam("pp",$physics);
$query->bindparam("pb",$biology);
$query->bindparam("pu",$urdu);
$query->bindparam("pe",$english);
$query->bindparam("po",$obtain);
$query->bindparam("pper",$percentage);
$query->bindparam("pg",$grade);
$query->bindparam("pr",$remark);
$query->execute();
echo "<script> alert('data insert into table')</script>";
?>
 <?php
}
?>


    </body>
</html>
