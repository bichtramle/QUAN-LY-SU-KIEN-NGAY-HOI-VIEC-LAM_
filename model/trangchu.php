<?php 
function insert_slideshow ($tenbv,$hinh,$mota,$detail){
    $sql="insert into  slideshow (name,hinh,mota,detail) values ('$tenbv','$hinh','$mota','$detail')";
    pdo_execute($sql);
}
function delete_slideshow ($id){
    $sql ="delete from  slideshow  where id=".$id;
    pdo_execute($sql);
}

function loadall_slideshow ($kyw){
    $sql ="select * from   slideshow  where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
   
    $sql.=" order by id desc";
    $listbaiviet=pdo_query($sql);
    return $listbaiviet;
}
function loadone_slideshow ($id){
    $sql="SELECT * from slideshow where id=".$id;
    $baiviet=pdo_query_one($sql);
    return $baiviet;
}
function update_slideshow ($id,$tenbv,$mota,$hinh,$detail){
    if($hinh!="")
    $sql="update slideshow set  name='".$tenbv."',mota='".$mota."',detail='".$detail."', hinh='".$hinh."' WHERE id=".$id;
    else
    $sql="update  slideshow  set  name='".$tenbv."',mota='".$mota."',detail='".$detail."' where id=".$id;
    pdo_execute($sql);
}


function ttdetail($id){
    $sql ="select * from slideshow where 1";
    if($id>0) $sql.=" AND id=".$id;
    $baiviet=pdo_query_one($sql);
    return $baiviet;
}


?>