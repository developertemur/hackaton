<?php
require 'config.php';
$fish=$_POST['fish'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$login=$_POST['login'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];
$corp_id=$_POST['corp_id'];
$sql="INSERT INTO users(fish,tel,email,login,password,corp_id) VALUES ('".$fish."','".$tel."','".$email."','".$login."','".$pass1."','".$corp_id."')";
//echo $sql;
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
    <h2>Yangi foydalanuvchini ro'yhatdan o'tkazish</h2>
    <div class="form-group">
        <label for="fish">F.I.Sh</label>
        <input type="text" name="fish" class="form-control">
    </div>
    <div class="form-group">
        <label for="tel">Telefon:</label>
        <input type="text" name="tel" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="login">Login</label>
        <input type="text" name="login" class="form-control">
    </div>
    <div class="form-group">
        <label for="pass1">Parol</label>
        <input type="password" name="pass1" class="form-control">
    </div>
    <div class="form-group">
        <label for="pass2">Parol qayta</label>
        <input type="password" name="pass2" class="form-control">
    </div>
    <div class="form-group">
        <label for="corp_id">Tashkilot nomi</label>
        <select name="corp_id" class="form-control">
            <?php
            $res=$conn->query('SELECT * FROM corp');
            while($row=$res->fetch_assoc())
            echo "<option value='".$row['id']."'>".$row['name']."</option>";
            ?>
        </select>
    </div>
    <div class="form-group">
        <input type="submit" value="Jo'natish" class="btn btn-success">
    </div>
    </form>
    </div>
<?php include 'generate/footer.php'; ?>
</body>
</html>