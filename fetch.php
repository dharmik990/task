<?php
$con = mysqli_connect("localhost","root","","dharmik_sutariya_db");

    if(isset($_GET)){
       $id=$_GET['id'];

       if ($id){
          $b= rand(1,6);
          echo $b;
          $insert ="INSERT INTO task(`name`,`number`)VALUES('$id','$b')";
          $insert_exe=mysqli_query($con,$insert);
          if($insert_exe){
           $res['success']="data insert successfully";
           $res['status']=200;
          }else{
            echo "somethim went wronge";
          }
       }
       }else{
        echo "hello1";
        
    }

   
 ?>