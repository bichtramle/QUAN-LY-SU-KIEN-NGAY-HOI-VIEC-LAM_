
      <?php
      session_start();
      ob_start();
      if(isset($_SESSION['role'])&&($_SESSION['role']==1)){
        include "../model/connectdb.php";
        include "../model/danhmuc.php";
        include "../model/baiviet.php";
        include "../model/formuv.php";
          include "../model/gianhang.php";
        include "../model/formdn.php";
        include "../model/trangchu.php";
        include "view/header.php";
      if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($_GET['act']){
        case 'adddm' :
          //kiemtra co click add k
           if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
            $name=$_POST['name'];
            insert_danhmuc($name);
            $thongbao="Thêm thành công";
           }  
            include "view/danhmuc/add.php";
            break;
          case'lisdm':
            $listdanhmuc=loadall_danhmuc();
            include "view/danhmuc/list.php";
            break;
          case'xoadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
              delete_danhmuc($_GET['id']);
            }
            $listdanhmuc=loadall_danhmuc();
            include "view/danhmuc/list.php";
            break;
          case'suadm':
              if(isset($_GET['id'])&&($_GET['id']>0)){
              $dm=loadone_danhmuc($_GET['id']);
              }
              include "view/danhmuc/update.php";
              break;
           case'updatedm':
              if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $name=$_POST['name'];
                $id=$_POST['id'];
                update_danhmuc($id,$name);
                $thongbao="Cập nhật thành công";
              }
                $listdanhmuc=loadall_danhmuc();
                include "view/danhmuc/list.php";
                break;

               case 'thoat':
                if(isset($_SESSION['role'])) unset($_SESSION['role']);
              header('location: login.php');
               break;
           //baiviet



           case 'addbv' :
            //kiemtra co click add k
             if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
              $iddm=$_POST['iddm'];
              $tenbv=$_POST['tenbv'];
               $hinh=$_FILES['hinh']['name'];
               $mota=$_POST['mota']; 
               $detail=$_POST['detail']; 
              $target_dir = "../upload/";
              $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
              if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
              //  echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
              } else {
               // echo "Sorry, there was an error uploading your file.";
              }
              insert_baiviet($tenbv,$hinh,$mota,$iddm,$detail);
              $thongbao="Thêm thành công";
             }  
           
             $listdanhmuc=loadall_danhmuc();
             include "view/baiviet/add.php";
             break;

           case 'listbv':
            if(isset($_POST['listok'])&&($_POST['listok'])){
              $kyw=$_POST['kyw'];
              $iddm=$_POST['iddm'];
            }else{
              $kyw='';
              $iddm=0;
             
            }
            
              $listdanhmuc=loadall_danhmuc();
              $listbaiviet=loadall_baiviet($kyw,$iddm);
              include "view/baiviet/list.php";
              break;

             case'xoabv':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                  delete_baiviet($_GET['id']);
                }
               
                $listbaiviet=loadall_baiviet("",0);
                include "view/baiviet/list.php";
                break;

                case'suabv':
                  if(isset($_GET['id'])&&($_GET['id']>0)){
                  $baiviet=loadone_baiviet($_GET['id']);
                 }
                
                 $listdanhmuc=loadall_danhmuc();
                 include "view/baiviet/update.php";
                 break;

              case'updatebv':
                 if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                   $id=$_POST['id']; 
                   $iddm=$_POST['iddm'];
                   $tenbv=$_POST['tenbv'];
                   $mota=$_POST['mota']; 
                  $hinh=$_FILES['hinh']['name'];
                  $detail=$_POST['detail']; 
                  $target_dir = "../upload/";
                  $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                  if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                  //  echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                  } else {
                   // echo "Sorry, there was an error uploading your file.";
                  }
                   update_baiviet($id,$iddm,$tenbv,$mota,$hinh,$detail);
                   $thongbao="Cập nhật thành công";
                 }
               
                 $listdanhmuc=loadall_danhmuc();
                 $listbaiviet=loadall_baiviet("",0);
                   include "view/baiviet/list.php";
                   break;

//lisst form UNG VIEN
 case 'adduv' :
           if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                 $iduser='2';
                 $ten=$_POST['ten'];
                 $email=$_POST['email'];
                 $sdt=$_POST['sdt'];
                 $vttd=$_POST['vttd'];
                 $nhomnganh=$_POST['nhomnganh'];
                 $idtrangthai=$_POST['idtrangthai'];
                $ngaydk=date('d/m/Y');
                 thamgiaucv($iduser,$nhomnganh,$vttd,$idtrangthai,$ten,$email,$sdt,$ngaydk);
                $thongbao="Dang ky thanh cong.n";
             

 }             
              
           $listtrangthai=loadall_trangthai();
                
                 include "view/formuv/add.php";
                   break;
          
                //lisst uv
                        
            case'listformuv':
              if(isset($_POST['listok'])&&($_POST['listok'])){
                $kyw=$_POST['kyw'];
                 $idtrangthai=$_POST['idtrangthai'];
              }else{
                $kyw='';
                 $idtrangthai=0;
              }
               
           $listtrangthai=loadall_trangthai();
               $listform=loadall_formucv($kyw,$idtrangthai);
           include "view/formuv/list.php";
           break;
             case'xoaformuv':
              if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_formuv($_GET['id']);
              }
            
               $listform=loadall_formucv("",0);
              include "view/formuv/list.php";
              break;
              case'suaformuv':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                   $form=loadone_formuv($_GET['id']);
                }
               $listtrangthai=loadall_trangthai();
                include "view/formuv/update.php";
                break;
                
              case'updateformuv':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $id=$_POST['id'];
                $ten=$_POST['ten'];
                $email=$_POST['email'];
                $sdt=$_POST['sdt'];
                $vttd=$_POST['vttd'];
                $idtrangthai=$_POST['idtrangthai'];
               $nhomnganh=$_POST['nhomnganh'];
               update_formuv($id,$nhomnganh,$vttd,$idtrangthai,$ten,$email,$sdt);
               $thongbao="Cập nhật thành công";
              } $listtrangthai=loadall_trangthai();
              $listform=loadall_formucv("",0);
              include "view/formuv/list.php";
              break;

//listf form  DN
            case 'addform' :
           if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
            $iduser='2';
            $tendv=$_POST['tendv'];
            $tenws=$_POST['tenws'];
            $diachi=$_POST['diachi'];
            $tendk=$_POST['tendk'];
            $sdt=$_POST['sdt'];
            $gmail=$_POST['gmail'];
            $ndtd=$_POST['ndtd'];
            $idtrangthai=$_POST['idtrangthai'];
            $ngaydk=date('d/m/Y');
             insert_form($iduser,$tendv,$diachi,$tendk,$sdt,$gmail,$ndtd,$idtrangthai,$ngaydk,$tenws);
            $thongbao="Thêm thành công";
            }  
           $listtrangthai=loadall_trangthai();
            include "view/formdn/add.php";
            break;
            case'xoaform':
              if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_form($_GET['id']);
              }$listtrangthai=loadall_trangthai();
              $listform=loadall_form("",0);
              include "view/formdn/list.php";
              break;
              case'suaform':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                $form=loadone_form($_GET['id']);
                }$listtrangthai=loadall_trangthai();
                include "view/formdn/update.php";
                break;
                
            case'listform':
              if(isset($_POST['listok'])&&($_POST['listok'])){
                $kyw=$_POST['kyw'];
                $idtrangthai=$_POST['idtrangthai'];
              }else{
                $kyw='';
                 $idtrangthai=0;
              }
              $listtrangthai=loadall_trangthai();
              $listform=loadall_form($kyw,$idtrangthai);
              include "view/formdn/list.php";
              break;
             
          
           case'updateform':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
              $id=$_POST['id'];
              $tendv=$_POST['tendv'];
              $tenws=$_POST['tenws'];
              $diachi=$_POST['diachi'];
              $tendk=$_POST['tendk'];
              $sdt=$_POST['sdt'];
              $gmail=$_POST['gmail'];
              $ndtd=$_POST['ndtd'];
              $idtrangthai=$_POST['idtrangthai'];
              update_form($id,$tendv,$diachi,$tendk,$sdt,$gmail,$ndtd,$idtrangthai,$tenws);
              $thongbao="Cập nhật thành công";
            }$listtrangthai=loadall_trangthai();
              $listform=loadall_form("",0);
              include "view/formdn/list.php";
              break;

//trangchu
              case 'addtt' :
                //kiemtra co click add k
                 if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                  $tenbv=$_POST['tenbv'];
                   $hinh=$_FILES['hinh']['name'];
                   $mota=$_POST['mota']; 
                   $detail=$_POST['detail']; 
                  $target_dir = "../upload/";
                  $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                  if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                  //  echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                  } else {
                   // echo "Sorry, there was an error uploading your file.";
                  }
                  insert_slideshow($tenbv,$hinh,$mota,$detail);
                  $thongbao="Thêm thành công";
                 }  
                 include "view/slideshow/add.php";
                 break;
    
               case 'listtt':
                if(isset($_POST['listok'])&&($_POST['listok'])){
                  $kyw=$_POST['kyw'];
                }else{
                  $kyw='';
                }
                  $listbaiviet=loadall_slideshow ($kyw);
                  include "view/slideshow/list.php";
                   break;
    
                 case'xoatt':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                      delete_slideshow($_GET['id']);
                    }
                    $listbaiviet=loadall_slideshow ("");
                    include "view/slideshow/list.php";
                    break;
    
                    case'suatt':
                      if(isset($_GET['id'])&&($_GET['id']>0)){
                      $baiviet=loadone_slideshow ($_GET['id']);
                     }
                     include "view/slideshow/update.php";
                     break;
    
                  case'updatett':
                     if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                      $id=$_POST['id'];
                      $tenbv=$_POST['tenbv'];
                       $mota=$_POST['mota']; 
                      $hinh=$_FILES['hinh']['name'];
                      $detail=$_POST['detail']; 
                      $target_dir = "../upload/";
                      $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                      if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                      //  echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                       // echo "Sorry, there was an error uploading your file.";
                      }
                       update_slideshow ($id,$tenbv,$mota,$hinh,$detail);
                       $thongbao="Cập nhật thành công";
                     }
                     $listbaiviet=loadall_slideshow ("");
                       include "view/slideshow/list.php";
                       break;
                       ///
                      
             case'xoaformttdn':
              if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_formdn($_GET['id']);
              }
              $listttdn=loadall_ttdn("");
              include "view/ttdn/list.php";
              break;
              //add gian hnag
               case 'addgh' :
           if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
              $iddn=$_POST['iddn'];
              $name=$_POST['name'];
               insert_gh($iddn,$name);
                $thongbao="Dang ky thanh cong.n";
             

                  }     $listdn=loadall_dn() ; 
               include "view/gianhang/add.php";
              break;
                  case 'listgh':
                if(isset($_POST['listok'])&&($_POST['listok'])){
                  $kyw=$_POST['kyw'];
                   $iddn=$_POST['iddn'];
                }else{
                    $kyw='';
                   $iddn=0;
                } $listdn=loadall_dn() ; 
                  $listgh=loadall_gh($kyw,$iddn);
                  include "view/gianhang/list.php";
                   break;
        default:   
        include "view/home.php";
        break;
    }
    }else{
      include "view/home.php";
    }


}else{header('location: login.php');
}
    include "view/footer.php";
 ?>