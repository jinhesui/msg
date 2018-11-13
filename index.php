<?php
require('inc/conn.php');
require('inc/lib.php');

$sql = "select * from posts";

$list = getAll($sql,$conn);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>留言列表</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
</head>
<body>
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <caption>留言列表&nbsp;&nbsp;&nbsp;<a href="post.html"><i class="fa fa-plus"></i></a></caption>
                <thead>
                <tr>
                    <th>#</th>
                    <th>标题</th>
                    <th>姓名</th>
                    <th>详细</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($list as $v) { ?>
                <tr>
                <td><?php echo $v['id']; ?></td>
                <td><?php echo $v['title']; ?></td>
                <td><?php echo $v['username']; ?></td>
                <td><?php echo $v['content']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $v['id']; ?>">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a class="grid-row-delete" href="del.php?id=<?php echo $v['id']; ?>">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
