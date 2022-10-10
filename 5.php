<?php
include_once "connect.php";
$stmt = $pdo->prepare("SELECT * FROM `member`");
$stmt->execute();
while ($row = $stmt->fetch()) {
echo "ชื่อ  : " . $row ["name"] . "<br>";
echo "ที่อยู่  : " . $row ["address"] . "<br>";
echo "อีเมล  : " . $row ["email"] . "<br>";
$img = "../member_photo/".$row["username"].".jpg";
$username = $row["username"];
echo  "<a href='./5showdata.php?username=$username'><img src='$img' /></a>";
echo "<hr>\n";
}
?>