
<?php
  if(is_array($form)){
    extract($form);
  }
?>
                        <div class="modal-header">
                            <form action="index.php?act=updateform" method="post"> 
                         <div class="title-login-form ">Phiếu đăng ký tham gia <br><br>"Ngày hội việc làm và kết nối doanh nghiệp CTU 2022"</div>
                        </div>
                        <div class="text-center"><b> Kính gửi: Ban Tổ chức Chương trình Ngày hội việc làm năm 2022

của Trường Đại học Cần Thơ,<br><b>Sau khi đọc Thư mời và nội dung chương trình “Ngày hội việc làm năm 2022” của Trường Đại học Cần Thơ. Chúng tôi đăng ký với các thông tin cụ thể sau:
</div>
<section class="content">
        <div class="container-fluid">
                        <div class="modal-body">
                            <div class="text-alighn:center">
                                 <div class="login-form ">
                                <label>Tên giao dịch của doanh nghiệp *</label>
                                    <input mb-3 required name="tendv" value="<?=$tendv?>" class="col-lg-6 col-md-12"type="text" placeholder="" />
 </div>  
                         
 </div>     <div class="login-form">
          
                          <label>Website*</label>
                                    <input required name="tenws"value="<?=$tenws?>" class="col-lg-6 col-md-12" type="text" placeholder="" />
</div>    <div class="login-form">
          
                          <label>Địa chỉ *</label>
                                    <input required name="diachi" value="<?=$diachi?>"class="col-lg-6 col-md-12" type="text" placeholder="" />
</div>     <div class="login-form">
                               <label> Họ tên người đăng ký*</label>
                                    <input required name="tendk" value="<?=$tendk?>"  type="text" placeholder="Tên cty" />
</div>    <div class="login-form">
                               <label>Điện Thoại *</label>
                                    <input required name="sdt" value="<?=$sdt?>"class="col-lg-6 col-md-12" type="tel" placeholder="Tên cty" />
</div>     <div class="login-form">
                                <label>Email *</label>
                                    <input required name="gmail" value="<?=$gmail?>"class="col-lg-6 col-md-12"  type="email" placeholder="email" />
</div>   
  <div class="login-form">
<label> Nội dung tuyển dụng*</label>
                                    <input required name="ndtd" value="<?=$ndtd?>"class="col-lg-6 col-md-12" type="text" placeholder="Tên cty" ></input>
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