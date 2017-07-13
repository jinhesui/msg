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
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>留言修改</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
</head>
<body>
<div class="container">
    <h2 class="text-center">留言修改</h2>
    <form class="form-horizontal" action="up.php" method="post">
        <div class="form-group">
            <label class="col-sm-2 control-label">留言标题：</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="title" value="<?php echo $msg['title'] ?>" required/>
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">留&nbsp;&nbsp;言&nbsp;&nbsp;者：</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="username" value="<?php echo $msg['username'] ?>" required/>
            </div>
        </div>
        <div class="form-group">
                <label class="col-sm-2 control-label"> 留言内容：</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="content"  rows="5" required><?php echo $msg['content'] ?></textarea>
                    <input type="hidden" name="id" value="<?php echo $msg['id'] ?>" />
                </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-6 col-sm-10">
                <button type="submit" formmethod="post" class="btn btn-primary">
                    <i class="fa fa-paper-plane"></i> 提交
                </button>
            </div>
        </div>
    </form>
</div>
</body>
</html>