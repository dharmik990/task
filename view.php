<?php
$con = mysqli_connect("localhost","root","","dharmik_sutariya_db");
$select=mysqli_query($con,"SELECT  name, SUM(number)AS tnumber ,id FROM task GROUP BY name  ");

$max=0;
foreach ($select as  $data) {
   if($data['tnumber']>=$max){
    $max=$data['tnumber'];
   }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</head>
<style>
.one>td {
    background-color: red;
}
</style>

<body>

    <table class="table table-dark" id="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>number</th>
            </tr>
        </thead>
        <tbody id="user">
            <?php foreach ($select as  $data) {?>
            <?php if($data['tnumber']==$max){ ?>
            <tr class="one">
                <?php }else{ ?>
            <tr class="two">
                <?php } ?>
                <td class="add" id="one"><?php echo $data['id'] ?></td>
                <td class="add" id="two"><?php echo $data['name'] ?></td>
                <td class="add" id="three"><?php echo $data['tnumber'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


</body>

</html>