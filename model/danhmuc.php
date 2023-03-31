<?php 
function insert_danhmuc($name){
    $sql="insert into danhmuc(name) values ('$name')";
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql ="delete  from danhmuc where id=".$id;
    pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql ="select * from danhmuc order by id desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}

function loadone_danhmuc($id){
    $sql="SELECT * from danhmuc where id=".$id;
    $dm= pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id,$name){
    $sql="UPDATE danhmuc SET name='".$name."' WHERE id=".$id;
    pdo_execute($sql);
}


?>