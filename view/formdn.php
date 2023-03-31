

                        <div class="modal-header">
                            <form action="index.php?act=billform" method="post"> 
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
                                    <input mb-3 required name="tendv"  class="col-lg-6 col-md-12"type="text" placeholder="" />
 </div>  
                         
 </div>     <div class="login-form">
          
                          <label>Website*</label>
                                    <input required name="tenws" class="col-lg-6 col-md-12" type="text" placeholder="" />
</div>    <div class="login-form">
          
                          <label>Địa chỉ *</label>
                                    <input required name="diachi" class="col-lg-6 col-md-12" type="text" placeholder="" />
</div>     <div class="login-form">
                               <label> Họ tên người đăng ký*</label>
                                    <input required name="tendk" class="col-lg-6 col-md-12"  type="text" placeholder="Hj tên người đăng ký" />
</div>    <div class="login-form">
                               <label>Điện Thoại *</label>
                                    <input required name="sdt" class="col-lg-6 col-md-12" type="tel" placeholder="Điện thoại" />
</div>     <div class="login-form">
                                <label>Email *</label>
                                    <input required name="gmail" class="col-lg-6 col-md-12"  type="email" placeholder="email" />
</div>   
  <div class="login-form">
<label> Nội dung tuyển dụng(Vị trí tuyển dụng,số lượng)*</label>
                                    <textarea required name="ndtd" class="col-lg-6 col-md-12" type="text" placeholder="Nội dung tuyển dụng(Vị trí tuyển dụng,số lượng)" ></textarea>
</div>   
                                  
                    

- Thời hạn đăng ký: trước ngày 11/5/2022.<br>

- Mọi thông tin xin liên hệ:<br>

Nguyễn Thị Thùy An (Thư ký BTC)<br>

Điện thoại: 0968.414102 – 0772.505547<br>
                                    <input class="btn btn-primary" type="submit" name="dangky" >
                                    <button class="form-cancel" type="submit" value="">Hủy</button>
                                    
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
