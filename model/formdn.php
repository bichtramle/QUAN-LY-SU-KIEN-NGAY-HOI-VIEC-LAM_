<?php function loadall_form($kyw,$idtrangthai){
    $sql ="select * from tbl_formdn where 1";
    if($kyw!=""){
        $sql.=" and tendv like '%".$kyw."%'";
    }
       if($idtrangthai>0){
        $sql.=" and idtrangthai ='".$idtrangthai."'";
    }
    $sql.=" order by id desc";
    $listform=pdo_query($sql);
    return $listform;
    
}
function loadall_formho($kyw){
    $sql ="select * from tbl_formdn where 1";
    if($kyw!=""){
        $sql.=" and tendv like '%".$kyw."%'";
    
    }
    $sql.=" order by id desc";
    $listform=pdo_query($sql);
    return $listform;
}
function insert_form($iduser,$tendv,$diachi,$tendk,$sdt,$gmail,$ndtd,$idtrangthai,$ngaydk,$tenws){
    $sql="insert into tbl_formdn (iduser,tendv,diachi,tendk,sdt,gmail,ndtd,idtrangthai,ngaydk,tenws) values ('$iduser','$tendv','$diachi','$tendk','$sdt','$gmail','$ndtd','$idtrangthai','$ngaydk','$tenws')";
    pdo_execute($sql);
}
function delete_form($id){
    $sql ="delete  from tbl_formdn where id=".$id;
    pdo_execute($sql);
}
function loadone_form($id){
    $sql="SELECT * from tbl_formdn where id=".$id;
    $form=pdo_query_one($sql);
    return $form;
}

function loadone_form1($id){
    $sql="SELECT * from tbl_formdn where id=".$id;
    $form=pdo_query_one($sql);
    return $form;
}

function update_form($id,$tendv,$diachi,$tendk,$sdt,$gmail,$ndtd,$idtrangthai,$tenws){
    $sql="UPDATE tbl_formdn SET tendv='".$tendv."', diachi='".$diachi."', tendk='".$tendk."' ,sdt='".$sdt."', gmail='".$gmail."',  idtrangthai='".$idtrangthai."' ,ndtd='".$ndtd."',tenws='".$tenws."' WHERE id=".$id;
    pdo_execute($sql);
}
function update_form1($id,$tendv,$diachi,$tendk,$sdt,$gmail,$ndtd,$tenws){
    $sql="UPDATE tbl_formdn SET tendv='".$tendv."', diachi='".$diachi."', tendk='".$tendk."' ,sdt='".$sdt."', gmail='".$gmail."' ,ndtd='".$ndtd."',tenws='".$tenws."' WHERE id=".$id;
    pdo_execute($sql);
}



function delete_formdn($id){
    $sql ="delete  from tbl_formdn where id=".$id;
    pdo_execute($sql);
}

function thamgia($iduser,$tendv,$diachi,$tendk,$sdt	,$gmail,$ndtd,$ngaydk,$tenws){ 
    $sql = "insert into tbl_formdn(iduser,tendv,diachi,tendk,sdt ,gmail,ndtd,ngaydk,tenws) values('$iduser','$tendv','$diachi','$tendk','$sdt' ,'$gmail','$ndtd','$ngaydk','$tenws')";
    return pdo_execute_return_lastInsertId($sql);
}
function loadone_formhome($id){
    $sql="SELECT * from tbl_formdn where id=".$id;
    $form=pdo_query_one($sql);
    return $form;
}
function loadall_bill($iduser){
    $sql="SELECT * from tbl_formdn where iduser=".$iduser;
    $listbill=pdo_query($sql);
    return $listbill;
}
function getorderinfo($idform){
    $sql="SELECT * from tbl_formdn where id=".$idform;
    $order=pdo_query($sql);
    return $order;
}
function loadone_tenus($iduser){
   
    $sql="SELECT user from tbl_user where id=".$iduser;
    $dm=pdo_query_one($sql);
    extract($dm);
    return $user;
}
function loaddsdn(){
    $sql ="select id,tendv,ndtd,tenws,diachi from tbl_formdn where idtrangthai='4'";
    $sql.=" order by id desc";
    $listform=pdo_query($sql);
    return $listform;
}
?>