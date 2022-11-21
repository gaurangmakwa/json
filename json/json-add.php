<?php
    //connection
    $connection = mysqli_connect("localhost","root","","myjsonapi");

    //blank array
    $myarray=array();
    //check parameter
    if(isset($_POST['st_name']) && isset($_POST['st_gender']) && isset($_POST['st_email'])){
        //store value to variable
        $name=$_POST['st_name'];
        $gender=$_POST['st_gender'];
        $email=$_POST['st_email'];
        //query
        $q=mysqli_query($connection,"insert into tbl_student (st_name,st_gender,st_email) values('{$name}','{$gender}','{$email}')");

        if($q){
            $myarray['flag']=1;
            $myarray['message']="record added";
        }else{
            $myarray['flag']=0;
            $myarray['message']="error in query";
        }
    }else{
        $myarray['flag']=0;
        $myarray['message']="parameter is missing";
    }
    echo json_encode($myarray);
?>