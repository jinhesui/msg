<?php
require('inc/conn.php');
require('inc/lib.php');

$id = $_GET['id'] + 0;
if ($id == 0) {
    echo '参数有误！';
    exit;
}

$sql = "select * from posts where id = $id";

$msg = getRow($sql,$conn);
if (!$msg) {
    echo '参数有误！';
    exit;
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>留言查看</title>
</head>
<body>
    <h1><?php echo $msg['title']; ?></h1>
    <p><?php echo $msg['content']; ?></p>
</body>
</html>