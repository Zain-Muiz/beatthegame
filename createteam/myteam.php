<?php

include('../config.php');
$temp = json_decode($_POST['myTeam']);
echo "<script type='text/javascript'>alert('$temp');</script>";
echo "<script type='text/javascript'>alert('hello');</script>";

$score = 0;
$email = $_SESSION['alogin'];


$sql ="INSERT INTO `myteam` ( `useremail`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `tscore`) VALUES (:email, :p1,:p2,:p3,:p4,:p5,:p6,:p7,:p8,:p9,:p10,:p11,:score)";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':p1',myTeam[0].name, PDO::PARAM_STR);
$query-> bindParam(':p2', myTeam[1].name, PDO::PARAM_STR);
$query-> bindParam(':p3',myTeam[2].name, PDO::PARAM_STR);
$query-> bindParam(':p4', myTeam[3].name, PDO::PARAM_STR);
$query-> bindParam(':p5', myTeam[4].name, PDO::PARAM_STR);
$query-> bindParam(':p6',myTeam[5].name, PDO::PARAM_STR);
$query-> bindParam(':p7', myTeam[6].name, PDO::PARAM_STR);
$query-> bindParam(':p8', myTeam[7].name, PDO::PARAM_STR);
$query-> bindParam(':p9', myTeam[8].name, PDO::PARAM_STR);
$query-> bindParam(':p10', myTeam[9].name, PDO::PARAM_STR);
$query-> bindParam(':p11', myTeam[10].name, PDO::PARAM_STR);
$query-> bindParam(':score', $score, PDO::PARAM_STR);

$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script type='text/javascript'>alert('Your entry has updated');</script>";
echo "<script type='text/javascript'> document.location = '../index/index.php'; </script>";
}
else 
{
	echo "<script type='text/javascript'>alert('Something went wrong. Please fill and try again');</script>";
}
?>