<?php
$return['status']=0;

$user_name=$_REQUEST['user_name'];
$user_password=$_REQUEST['user_password'];
$user_name=str_replace("'","\'",$user_name);
$sql="SELECT * FROM `users` WHERE `login`='$user_name'";
$result=$conn->query($sql);
if($result->num_rows){
    $data=$result->fetch_assoc();
    if($data['password']==$user_password){
            $return['status']=1;
            $_SESSION['user']=$data;

    }else{
 $return['info']="Foydalanuvchi paroli noto'g'ri";
    }
}else{

    $return['info']="Foydalanuvchi Logini xato";
}
echo json_encode($return,1);
