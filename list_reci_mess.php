<?php require 'config.php'; ?>



<!DOCTYPE html>
<html lang="en">
<?php include 'generate/head.php'; ?>
<body>
    <div class="container">

<?php 
session_start();
$my_user_id=$_SESSION['user']['id'];
$sql="SELECT users.fish,mess.* FROM mess,users WHERE mess.user_id=users.id AND mess.to_user_id=$my_user_id";
//echo $sql;
$result=$conn->query($sql);
if($result){
    echo "<table class='table'>";
    echo "<tr><td>Kimga</td><td>jo'natilgan vaqti</td><td>Mavzusi</td><td>Xabar</td></tr>";
    while($row=$result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['fish']."</td>";
        echo "<td>".$row['r_time']."</td>";
        echo "<td>".$row['type']."</td>";
        echo "<td>".$row['text']."</td>";
        echo "</tr>";
    }
    echo "</table>";
}else{
    echo "Baza bilan xatolik";
} ?>


    </div>
<?php include 'generate/footer.php'; ?>
</body>
</html>