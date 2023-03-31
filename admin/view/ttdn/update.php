<?php
  if(is_array($form)){
    extract($form);
  }
?>
<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Thêm bài viết</h1>
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
            <form action="index.php?act=updatelist" method="post" >
                <div class="form-group">
                                <label>Tên giao dịch của doanh nghiệp *</label>
                                    <input mb-3 required name="tendv" value="<?=$tendv?>"  class="form-control" type="text" placeholder="" />
</div>   <div class="form-group">
                          <label>Địa chỉ *</label>
                                    <input required name="diachi" value="<?=$diachi?>"  class="form-control" type="text" placeholder="" />
</div>   <div class="form-group">
                               <label> Họ tên người đăng ký*</label>
                                    <input required name="tendk" value="<?=$tendk?>"  class="form-control" type="text" placeholder="Tên cty" />
</div> <div class="form-group">
                               <label> Website*</label>
                                    <input required name="tenws" value="<?=$tenws?>"  class="form-control" type="text" placeholder="Tên cty" />
</div>
  <div class="form-group">
                               <label>Điện Thoại *</label>
                                    <input required name="sdt" value="<?=$sdt?>"  class="form-control" type="text" placeholder="Tên cty" />
</div>   <div class="form-group">
                                <label>Email *</label>
                                    <input  name="gmail" value="<?=$gmail?>"   class="form-control" type="email" placeholder="email" />
</div>    <div class="form-group">
     <label>Trạng thái *</label>
                                     <input type="radio" name="trangthai" value="0">Chua</td>
                                   <input type="radio" name="trangthai" value="1">Roi</td>
</div>    <div class="form-group">
                                <label> Nội dung tuyển dụng*</label>
                             <input required name="ndtd"  class="form-control" value="<?=$ndtd?>"   type="text" placeholder="Nội dung tuyển dụng" />
</div>
                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id ;?>">
                    <input  name="capnhat" type="submit"  value="Cap nhat "  class="btn btn-primary">
                    <input type="reset" class="btn btn-primary" value="Nhập lại">
             <a href="index.php?act=listform">  <input type="button" class="btn btn-primary"  value="danhsach"></a>
                </div>
            </form>
            <?php  if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </div>
    </section>
</div>
