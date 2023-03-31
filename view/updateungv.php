

<?php
  if(is_array($form)){
    extract($form);
  }
?>
                        <div class="modal-header">
                            <form action="index.php?act=updateformungvien" method="post"> 
                         <div class="title-login-form ">Phiếu đăng ký tham gia <br><br>"Ngày hội việc làm và kết nối doanh nghiệp CTU 2022"</div>
                        </div>
                        <div class="text-center"><b> KĐĂNG KÝ "NGÀY HỘI CHINH PHỤC NHÀ TUYỂN DỤNG 2019"
Thực hiện sự chỉ đạo của Ban Giám hiệu về việc tăng cường công tác hỗ trợ sinh viên toàn trường chỗ thực tập và việc làm ổn định sau khi tốt nghiệp, đồng thời tạo mối quan hệ với các doanh nghiệp. Trung tâm hợp tác Doanh nghiệp phối hợp với phòng Công tác Sinh viên và các Khoa tổ chức chương trình “Ngày hội chinh phục nhà tuyển dụng 2019” với các nội dung thiết thực cho sinh viên. Cụ thể:

+ Buổi 1:  Nhóm ngành: Viện Kỹ thuật; Viện Khoa học Ứng dụng; Khoa Xây dựng; Khoa Công nghệ Thông tin.
* Thời gian- Địa điểm : 7h30 Thứ Bảy, Ngày 05/01/2019 Tại Khu E – Khu Công nghệ cao Quận 9

+ Buổi 2:  Nhóm ngành: Khoa Khoa học Xã hội và nhân văn; Khoa Tiếng Anh; Viện Công nghệ Việt-Nhật (VJIT)
* Thời gian- Địa điểm: 7h30 Thứ Ba, Ngày 08/01/2019 Tại Khu E – Khu Công nghệ cao Quận 9

+Buổi 3: Nhóm ngành:  Khoa Kế toán-Tài Chính-Ngân Hàng; Khoa Luật; Khoa Kiến Trúc - Mỹ thuật; Khoa Thiết kế - Truyền thông; Khoa QT Du Lịch-Nhà Hàng-Khách Sạn; Khoa Quản Trị Kinh Doanh, Khoa Nhật Bản học; Viện Đào tạo quốc tế.
* Thời gian- Địa điểm: 7h30 Thứ Sáu, Ngày 11/01/2019 Tại Khu B, 475A Điện Biên Phủ, P.25, Q.Bình Thạnh

*** Các bạn ứng viên tham gia chương trình điền đầy đủ thông tin bên dưới
Đăng nhập vào Google để lưu tiến trình của bạn. Tìm hiểu thêmh “Ngày hội việc làm năm 2022” của Trường Đại học Cần Thơ. Chúng tôi đăng ký với các thông tin cụ thể sau:
</div>
<section class="content">
        <div class="container-fluid">
                        <div class="modal-body">
                            <div class="text-alighn:center">
                                 <div class="login-form ">
                                <label>Họ tên*</label>
                                    <input mb-3 required  name="ten" value="<?=$ten?>"  class="col-lg-6 col-md-12"type="text" placeholder="" />
 </div>  
                         
 </div>     <div class="login-form">
          
                          <label>Email*</label>
                                    <input required name="email" value="<?=$email?>" class="col-lg-6 col-md-12" type="text" placeholder="" />
</div>    <div class="login-form">
          <label>Vi tri ung tuyen*</label>
                                    <input required name="vttd"  value="<?=$vttd?>" class="col-lg-6 col-md-12" type="text" placeholder="" />
</div> <div class="login-form">
                          <label>SDT *</label>
                                    <input required name="sdt" value="<?=$sdt?>" class="col-lg-6 col-md-12" type="text" placeholder="" />
</div>     
               <div class="login-form">
                          <label>Nhóm nghành*</label>
                                    <input required name="nhomnganh"  value="<?=$nhomnganh?>"  class="col-lg-6 col-md-12" type="text" placeholder="" />
</div>                  
                            
                        
                        
</div>   
</div>   
                                  
                    

- Thời hạn đăng ký: trước ngày 11/5/2022.<br>

- Mọi thông tin xin liên hệ:<br>

Nguyễn Thị Thùy An (Thư ký BTC)<br>

Điện thoại: 0968.414102 – 0772.505547<br>
                                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id ;?>">
                    <input  name="capnhat" type="submit"  value="Cap nhat "  class="btn btn-primary">
                    <input type="reset" class="btn btn-primary" value="Nhập lại">

                </div>
            </form>
                                <?php if(isset($thongbao)&&($thongbao!="")){
                                echo $thongbao;
                            }
                     ?>
                                        </div>
                        </div>
                    </div>
                </div>
            </div>    </div>
</div>    
</div>
