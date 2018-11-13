<?php
require('inc/conn.php');

$title = $_POST['title'];
$username = $_POST['username'];
$content = $_POST['content'];

$sql = "insert into posts (title,username,content) values ('$title','$username','$content')";

$rs = $conn->query($sql);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>留言详情</title>
</head>
<body>
    <?php if ($rs) { ?>
        <h1>留言成功</h1>
    <?php } else { ?>
        <h1>留言失败</h1>
    <?php } ?>
</body>
<script>
    function goto() {
        window.location.href = 'index.php';
    }
    window.setTimeout('goto()',2000);
</script>
</html>



