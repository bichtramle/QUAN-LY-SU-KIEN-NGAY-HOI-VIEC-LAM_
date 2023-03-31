<?php
function loadall_dn(){
    $sql ="select * from tbl_formdn where idtrangthai='2'";
    $listdn=pdo_query($sql);
    return $listdn;
}
function insert_gh($iddn,$name){
    $sql="insert into gianhang(iddn,name) values ('$iddn','$name')";
    pdo_execute($sql);
}
function loadall_gh($kyw,$iddn){
    $sql ="select * from gianhang where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddn>0){
        $sql.=" and iddn ='".$iddn."'";
    }
  
    $sql.=" order by id desc";
    $listdn=pdo_query($sql);
    return $listdn;
}
?>