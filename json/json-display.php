<?php
    //connection
    $connection=mysqli_connect("localhost","root","","myjsonapi");
    //query
    $q=mysqli_query($connection,"select * from tbl_student");
    $count=mysqli_num_rows($q);
    //create blank array
    $myarray=array();
    $response=array();
    //count records
    if($count>0){
    //fetch data
    while($data=mysqli_fetch_array($q)){
        $temparr=array();
        $temparr['st_id']=$data['st_id'];
        $temparr['st_name']=$data['st_name'];
        $temparr['st_gender']=$data['st_gender'];
        $temparr['st_email']=$data['st_email'];
        $myarray[]=$temparr;
    }
        $response['flag']=1;
        $response['message']="$count records found";
        $response['data']=$myarray;
    }else{
        //print  resonse in json
        $response['flag']=0;
        $response['message']="no record found";
    }
    //print resonse in json
    echo json_encode($response);
?>