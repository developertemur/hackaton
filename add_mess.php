<?php
require 'config.php';
$user_id=$_POST['user_id'];
$to_user_id=$_POST['to_user_id'];
$r_time=$_POST['r_time'];
$type=$_POST['type'];
$text=$_POST['text'];

$sql="INSERT INTO users(user_id,to_user_id,r_time,type,text) VALUES ('".$user_id."','".$to_user_id."','".$r_time."','".$type."','".$text."')";
echo $sql;
$result=$conn->query($sql);
if($result){
    echo "Foydalanuvchi qoshildi";
}else{
    echo "Qoshishda xatolik";
}
?>


<!DOCTYPE html>
<html lang="en">
<?php include 'generate/head.php'; ?>
<body>
    <div class="container">
    <form action="add_user.php" method="post" >
    <h2>Yangi xabar</h2>
    <div class="form-group">
        <label for="to_user_id">Foydalanuvchi </label>
        <select name="to_user_id" class="form-control">
            <?php
            $res=$conn->query('SELECT * FROM users');
            while($row=$res->fetch_assoc())
            echo "<option value='".$row['id']."'>".$row['fish']."</option>";
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="type">Mavzusi:</label>
        <input type="text" name="type" class="form-control">
    </div>
    <div class="form-group">
        <label for="Xabar">Xabar</label>
        <textarea cols="30" rows="5" name="Xsabar" class="form-control"></textarea>
    </div>
   
    
    <div class="form-group">
        <input type="submit" value="Jo'natish" class="btn btn-success">
    </div>
    </form>
    </div>
<?php include 'generate/footer.php'; ?>
</body>
</html>