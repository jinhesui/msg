<?php
require('inc/conn.php');

$id = $_GET['id'] + 0;
if ($id == 0) {
    echo '参数有误！';
    exit;
}

$sql = "delete from posts where id = $id";

$rs = $conn->query($sql);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>删除详情</title>
</head>
<body>
    <?php if ($rs) { ?>
        <h1>删除成功</h1>
    <?php } else { ?>
        <h1>删除失败</h1>
    <?php } ?>
</body>
<script>
    function goto() {
        window.location.href = 'index.php';
    }
    window.setTimeout('goto()',2000);
</script>
</html>