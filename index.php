<?php 
          session_start();
          ob_start();
         include "model/formuv.php";
          include "model/connectdb.php";
          include "model/user.php";
          include "model/danhmuc.php";
          include "model/trangchu.php";
          include "model/formdn.php";
          include "model/slideshow.php";
          include "model/baiviet.php";
          include "view/header.php";
          include "global.php";
          $dsdm=loadall_danhmuc();
          if(isset($_GET['act'])){
            $act=$_GET['act'];
          switch ($act) 
          {
            case'baiviet':
              if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
              $kyw=$_POST['kyw'];
              } else{$kyw="";}
              if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
              }else{
                $id=0;
              }
              $dsbv=loadall_baiviet_home($id,$kyw);
              $tenbv=loadone_tendm($id);
              
              include "view/baiviet.php";
              break;
            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                  $user=$_POST['user'];
                  $pass=($_POST['pass']);
                  $email=$_POST['email'];
                  $dangky= insert_taikhoan($user,$pass,$email);
                  echo "<script>alert('Dang ky thanh cong.vui long dang nhap')</script>";
                  $thongbao="Dang ky thanh cong.vui long dang nhap";
                } include "view/dangky.php";
                break;
              
            case 'thoat':
                unset( $_SESSION['role']);
                unset($_SESSION['iduser']);
                unset($_SESSION['username']);
                header('location: index.php');
                break; 

            case 'billform':    
               if(isset($_SESSION['iduser'])&&($_SESSION['iduser']>0)){
               if(isset($_POST['dangky'])&&($_POST['dangky'])){
                $iduser=$_SESSION['iduser'];
                $tendv=$_POST['tendv'];
                $diachi=$_POST['diachi'];
                $tenws=$_POST['tenws'];
                $tendk=$_POST['tendk'];
                $sdt=$_POST['sdt'];
                $gmail=$_POST['gmail'];
                $ndtd=$_POST['ndtd'];
                $ngaydk=date('d/m/Y');
                $idform=thamgia($iduser,$tendv,$diachi,$tendk,$sdt,$gmail,$ndtd,$ngaydk,$tenws);
                $_SESSION['idform']=$idform;
                $thongbao="Dang ky thanh cong.Vui lòng chờ xác nhận";
             
 }
                 include "view/billform.php";
                  break;}else {
                    echo ' vui lòng đăng nhâp ';
                  }break;
                    case'xoaform':
              if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_form($_GET['id']);
              }
              $listform=loadall_formho("");
              include "view/mybill.php";
              break;
                case'suaform':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                $form=loadone_form1($_GET['id']);
                }
                include "view/updateform.php";
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
              update_form1($id,$tendv,$diachi,$tendk,$sdt,$gmail,$ndtd,$tenws);
              $thongbao="Cập nhật thành công";
            }
              $listform=loadall_formho("");
              include "view/mybill.php";
               break;
                          case'mybill':
                          if(isset($_SESSION['iduser'])&&($_SESSION['iduser']>0)){
                         $listbill= loadall_bill($_SESSION['iduser']);
                         include "view/mybill.php";
                         break;
                          }
              case 'formdn':
               if(isset($_SESSION['iduser'])&&($_SESSION['iduser']>0)){
                include "view/formdn.php";
                break;

               }else{echo'Vui long dang nhap';}
            case "login":
                    if(isset($_POST['login'])&&($_POST['login'])){
                       $user=$_POST['user'];
                       $pass=$_POST['pass'];
                       $kq=getuserinfo($user,$pass);
                       $role=$kq[0]['role'];
                       if($role==1){
                         $_SESSION['role']=$role;
                         header('location: admin/index.php');
                     }else{
                          $_SESSION['role']=$role;
                          $_SESSION['iduser']=$kq[0]['id'];
                          $_SESSION['username']=$kq[0]['user'];
                          header('location: index.php');
                          break;
                    }
                }////ung vien dang ki
                
              case 'mybillsv':    
               if(isset($_SESSION['iduser'])&&($_SESSION['iduser']>0)){
               if(isset($_POST['dangky'])&&($_POST['dangky'])){
                $iduser=$_SESSION['iduser'];
                $ten=$_POST['ten'];
                $email=$_POST['email'];
                $vttd=$_POST['vttd']; $nhomnganh=$_POST['nhomnganh'];
                $sdt=$_POST['sdt'];
                $nhomnganh=$_POST['nhomnganh'];
                 $ngaydk=date('d/m/Y');
                 $idsv=thamgiasv($iduser,$vttd,$nhomnganh,$ten,$email,$sdt,$ngaydk);
                $_SESSION['idsv']=$idsv;
                $thongbao="Dang ky thanh cong.Vui lòng chờ xác nhận";
             
 }              
                 include "view/mybillsv.php";
                  }break;
            case 'giaidap':
              include "view/giaidap.php";
                         break;

                  case'mybillsv':
                          if(isset($_SESSION['iduser'])&&($_SESSION['iduser']>0)){
                           $listbill=loadall_billuv($_SESSION['iduser']); 
                         include "view/mybillsv.php";
                         break;
                          }

                case'xoaformuv':
              if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_formuv($_GET['id']);
              }
               $listform=loadall_formucvhome();
              include "view/mybillsv.php";
              break;
              //
           case'suaformungvien':
                 if(isset($_GET['id'])&&($_GET['id']>0)){
                 $form=loadone_formungvien($_GET['id']);
                 }
                 include "view/updateungv.php";
                 break;
                 case'updateformungvien':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $id=$_POST['id'];
                $ten=$_POST['ten'];
                $email=$_POST['email'];
                $vttd=$_POST['vttd'];
                $nhomnganh=$_POST['nhomnganh'];
                $sdt=$_POST['sdt'];
               update_formungvien($id,$ten,$email,$vttd,$nhomnganh,$sdt);
              $thongbao="Cập nhật thành công";
            }
              $listform=loadall_formucvhome();
              include "view/mybillsv.php";
               break;
                      
                          
                case 'dangnhap' :
                    include "view/dangnhap.php";
                    break;
                  
                 case 'thumoi' :
                      include "view/thumoi.php";
                      break;
                    case 'bvdetail' :
                      if(isset($_GET['id'])&&($_GET['id']>0)){
                          $id=$_GET['id'];
                           $pro=bvdetail($id);
                      }
                      include "view/bvdetail.php";
                      break;
                      case 'ttdetail' :
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                            $id=$_GET['id'];
                             $pro=ttdetail($id);
                        }
                        include "view/ttdetail.php";
                        break; 
                           case 'formsv' :
                              if(isset($_SESSION['iduser'])&&($_SESSION['iduser']>0)){
                          include "view/formsv.php";
                          $thongbao="Bạn đã đưng kí thành coong vui lòng chờ xác nhận";
                         }else{echo'Bạn không có quyền truy cập' ;}break;
                             case 'hduv' :
                          include "view/hduv.php";
                          break;
                        case 'lienhe' :
                          include "view/lienhe.php";
                          break;
                          case 'hddk' :
                            include "view/hddk.php";
                            break;
                            case'dsdn':
                              $listform=loaddsdn();
                              include "view/dsdn.php";
                              break;
                  
                  default:     
               $tenbv=loadone_tendm($id);
                $tb=loadall_baiviettb("",0);
                  include "view/home.php";
                    break;
                }
              }else{
                include "view/home.php";
              }
 
                include "view/footer.php";
?>