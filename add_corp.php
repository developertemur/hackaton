<?php
require 'config.php';

$level=$_POST['level'];
$sub_id=$_POST['sub_id'];
$nomi=$_POST['nomi'];
$sql = "INSERT INTO `corp` ( `level`, `sub_id`, `name`) VALUES ('".$level."', '".$sub_id."', '".$name."');";
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
    <form action="add_corp.php" method="post" >
    <h2>Yangi tashkilotni ro'yhatdan o'tkazish</h2>
    <div class="form-group">
        <label for="level">Tashkilot kategoriyasi</label>
        <input type="text" name="level" class="form-control">
    </div>
    <div class="form-group">
        <label for="Nomi">Nomi</label>
        <input type="text" name="nomi" class="form-control">
    </div>
    <div class="form-group">
        <label for="sub_id">Yuqori Tashkilot nomi</label>
        <select name="sub_id" class="form-control">
            <?php
            $res=$conn->query('SELECT * FROM corp WHERE level=1');
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