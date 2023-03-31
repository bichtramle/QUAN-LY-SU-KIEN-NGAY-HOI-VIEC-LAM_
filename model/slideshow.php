<?php 
function loadall_tensl($id){
    $sql ="select * from slideshow where 1";
    $sql.=" order by id desc";
    $listform=pdo_query($sql);
    return $listform;
}
function loadall_tentrangchu($id){
    $sql ="select * from slideshow where name='trangchu'";
    $sql.=" order by id desc";
    $listform=pdo_query($sql);
    return $listform;
}
?>