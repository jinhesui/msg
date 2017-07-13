<?php
//根据select语句取所有行
function getAll($sql,$conn) {
    $rs = $conn->query($sql);
    if (!$rs) {
        showError();
    }
    $list = array();
    while ($row = $rs -> fetch_assoc()) {
        $list[] = $row;
    }
    return $list;
 }

 //根据select语句取单一行
function getRow($sql,$conn) {
    $rs = $conn->query($sql);
    if (!$rs) {
        showError();
    }
    return $rs -> fetch_assoc();
}

function showError() {
    echo '查询失败';
    echo $conn->error;
    exit;
}