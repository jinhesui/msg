<?php
require('inc/conn.php');

$title = $_POST['title'];
$username = $_POST['username'];
$content = $_POST['content'];
$id = $_POST['id'] + 0;

$sql = "update posts set title = '$title',username = '$username',content = '$content' where id = $id";

$rs = $conn->query($sql);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>修改详情</title>
</head>
<body>
    <?php if ($rs) { ?>
        <h1>修改成功</h1>
    <?php } else { ?>
        <h1>修改失败</h1>
    <?php } ?>
</body>
<script>
    function goto() {
        window.location.href = 'list.php';
    }
    window.setTimeout('goto()',2000);
</script>
</html>