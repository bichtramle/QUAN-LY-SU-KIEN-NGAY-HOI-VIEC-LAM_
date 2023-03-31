

<?php include "view/header/headerdn.php"
?>



<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Thêm thong tin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Bài viết</a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <form action="index.php?act=addform" method="post" >
                <div class="form-group">
                                <label>Tên doanh nghiệp *</label>
                                    <input mb-3  name="tendv" class="form-control" type="text" placeholder="" />
</div>   <div class="form-group">
    <div class="form-group">
                                <label>Website *</label>
                                    <input mb-3 required name="tenws" class="form-control" type="text" placeholder="" />
</div>   <div class="form-group">
                          <label>Địa chỉ *</label>
                                    <input name="diachi"  class="form-control" type="text" placeholder="" />
</div>   <div class="form-group">
                               <label> Họ tên người đăng ký*</label>
                                    <input name="tendk"  class="form-control" type="text" placeholder="Tên cty" />
</div>   <div class="form-group">
                               <label>Điện Thoại *</label>
                                    <input name="sdt"  class="form-control" type="tel" placeholder="Tên cty" />
</div>   <div class="form-group">
                                <label>Email *</label>
                                    <input name="gmail"  class="form-control" type="email" placeholder="email" />
</div>   <div class="form-group">
    
                                <label> Nội dung tuyển dụng(Vị trí tuyển dụng,số lượng)</*</label>
                             <textarea  name="ndtd"  class="form-control" type="text" placeholder="Nội dung tuyển dụng" ></textarea>
</div>
   
 <div class="form-group"> 
        <label>Trạng thái</label>
                        <select name="idtrangthai" >
                          <?php foreach($listtrangthai as $form){
                            extract($form);
                           echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                            ?>
                        </select>
</tr>
</div> 
                 
                    <input  name="themmoi" type="submit"  value="THEM MOI"  class="btn btn-primary">
                    <input type="reset" class="btn btn-primary" value="Nhập lại">
             <a href="index.php?act=listform">  <input type="button" class="btn btn-primary"  value="danhsach"></a>
                </div>
            </form>
            <?php  if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </div>
    </section>
</div>
