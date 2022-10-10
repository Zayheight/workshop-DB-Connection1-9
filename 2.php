<?php
include_once "connect.php";
$stmt = $pdo->prepare("SELECT * FROM `member`");
$stmt->execute();
while ($row = $stmt->fetch()) {
echo "ชื่อ  : " . $row ["name"] . "<br>";
echo "ที่อยู่  : " . $row ["address"] . "<br>";

echo "อีเมล  : " . $row ["email"] . "<br>";
echo "<hr>\n";
}
?>