<?php
 include_once 'connection.php';
 $inst_conn=new Connection();
 $inst_conn->startConnection();
 $sql = "select * from student where roll in(select roll from course_registration where course_code='cs102')";
$q=$inst_conn->pdo->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
while($r=$q->fetch())
{
    echo $r['name'];
}
?>