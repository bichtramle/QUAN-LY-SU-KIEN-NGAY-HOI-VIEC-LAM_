<?php 
function insert_baiviet($tenbv,$hinh,$mota,$iddm,$detail){
    $sql="insert into tbl_baiviet(name,img,mota,iddm,detail) values ('$tenbv','$hinh','$mota','$iddm','$detail')";
    pdo_execute($sql);
}
function delete_baiviet($id){
    $sql ="delete from tbl_baiviet where id=".$id;
    pdo_execute($sql);
}

function loadall_baiviet($kyw,$iddm){
    $sql ="select * from tbl_baiviet where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
  
    $sql.=" order by id desc";
    $listbaiviet=pdo_query($sql);
    return $listbaiviet;
}
function loadone_baiviet($id){
    $sql="SELECT * from tbl_baiviet where id=".$id;
    $baiviet=pdo_query_one($sql);
    return $baiviet;
}
function update_baiviet($id,$iddm,$tenbv,$mota,$hinh,$detail){
    if($hinh!="")
    $sql="update tbl_baiviet set iddm='".$iddm."', name='".$tenbv."',mota='".$mota."',detail='".$detail."', img='".$hinh."' WHERE id=".$id;
    else
    $sql="update tbl_baiviet set iddm='".$iddm."', name='".$tenbv."',mota='".$mota."',detail='".$detail."' where id=".$id;
    pdo_execute($sql);
}
function loadall_baiviet_home($iddm=0,$kyw=""){
    $sql ="select * from tbl_baiviet where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listbaiviet=pdo_query($sql);
    return $listbaiviet;
}
function bvdetail($id){
    $sql ="select * from tbl_baiviet where 1";
    if($id>0) $sql.=" AND id=".$id;
    $baiviet=pdo_query_one($sql);
    return $baiviet;
}
function loadone_tendm($iddm){
    if($iddm>0){
    $sql="SELECT * from danhmuc where id=".$iddm;
    $dm=pdo_query_one($sql);
    extract($dm);
    return $name;
  }else{
  return "";
    }
}
function loadall_baivietmoi($kyw,$iddm){
    $sql ="select * from tbl_baiviet where iddm='10' limit 8";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $listbaiviet=pdo_query($sql);
    return $listbaiviet;
}
function  loadall_baiviethot($kyw,$iddm){
    $sql ="select * from tbl_baiviet where iddm =9";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $listbaiviet=pdo_query($sql);
    return $listbaiviet;
}
function loadall_baiviettb($kyw,$iddm){
    $sql ="select * from tbl_baiviet where iddm='8' limit 8";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $listbaiviet=pdo_query($sql);
    return $listbaiviet;
}



?>