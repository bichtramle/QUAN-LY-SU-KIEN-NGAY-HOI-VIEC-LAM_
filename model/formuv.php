<?php
function loadall_formucv($kyw,$idtrangthai){
    $sql ="select * from tbl_formuv where 1"; 
     if($kyw!=""){
        $sql.=" and ten like '%".$kyw."%'";
    }
      if($idtrangthai>0){
        $sql.=" and idtrangthai ='".$idtrangthai."'";
    }
    $sql.=" order by id desc";
    $listform=pdo_query($sql);
    return $listform;
}
function loadall_formucvhome(){
    $sql ="select * from tbl_formuv where 1"; 
    $sql.=" order by id desc";
    $listform=pdo_query($sql);
    return $listform;
}
function loadall_formuv(){
    $sql ="select * from tbl_formuv where 1";
    $sql.=" order by id desc";
    $listform=pdo_query($sql);
    return $listform;
}

function loadall_trangthai(){
    $sql ="select * from trangthai order by id desc";
    $listtrangthai=pdo_query($sql);
    return $listtrangthai;
}

function thamgiaucv($iduser,$nhomnganh,$vttd,$idtrangthai,$ten,$email,$sdt,$ngaydk){ 
    $sql = "insert into tbl_formuv(iduser,nhomnganh,vttd,idtrangthai,ten,email,sdt,ngaydk) values('$iduser','$nhomnganh','$vttd','$idtrangthai','$ten','$email','$sdt','$ngaydk')";
    return pdo_execute_return_lastInsertId($sql);
}
function loadone_formuv($id){
    $sql="SELECT * from tbl_formuv where id=".$id;
    $form=pdo_query_one($sql);
    return $form;
}
function update_formuv($id,$nhomnganh,$vttd,$idtrangthai,$ten,$email,$sdt){
    $sql= "update tbl_formuv set nhomnganh='".$nhomnganh."', vttd='".$vttd."',idtrangthai='".$idtrangthai."', ten='".$ten."',email='".$email."',sdt='".$sdt."'  WHERE id=".$id;
    pdo_execute($sql);
}
function thamgiasv($iduser,$vttd,$nhomnganh,$ten,$email,$sdt,$ngaydk){ 
    $sql = "insert into tbl_formuv(iduser,vttd,nhomnganh,ten,email,sdt,ngaydk) values('$iduser','$vttd','$nhomnganh','$ten','$email','$sdt','$ngaydk')";
    return pdo_execute_return_lastInsertId($sql);
}
function delete_formuv($id){
    $sql ="delete  from tbl_formuv where id=".$id;
    pdo_execute($sql);
}

function loadall_billuv($iduser){
    $sql="SELECT * from tbl_formuv where iduser=".$iduser;
    $listbill=pdo_query($sql);
    return $listbill;
}
function tentt($idtrangthai){
    if($idtrangthai>0){
    $sql="SELECT name from  trangthai where id=".$idtrangthai;
    $dm=pdo_query_one($sql);
    extract($dm);
    return $name;
  }else{
  return "";
    }
}
function  update_formungvien($id,$ten,$email,$vttd,$nhomnganh,$sdt){
     $sql= "update tbl_formuv set ten='".$ten."', email='".$email."',vttd='".$vttd."', nhomnganh='".$nhomnganh."',sdt='".$sdt."'  WHERE id=".$id;
    pdo_execute($sql);
}
function loadone_formungvien($id){
    $sql="SELECT * from tbl_formuv where id=".$id;
    $form=pdo_query_one($sql);
    return $form;
}
?>