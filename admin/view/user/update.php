<?php
  if(is_array($nguoidung)){
    extract($nguoidung);
  }
?>

<?php include "view/header/headeruser.php"
?>

<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Cập nhật người dùng</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <form action="index.php?act=updateus" method="post">
                <div class="card-body">
                  <div class="form-group">
                        <label>Tên người dùng</label>
                        <input type="text" name="user" value="<?=$user?>"  class="form-control" >
                    </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" value="<?=$email?>"  class="form-control" >
                    </div>
                      <div class="form-group">
                        <label>Vai trò</label>
                        <input type="text" name="role" value="<?=$role?>"  class="form-control" >
                    </div>
                     <div class="form-group">
                        <label>Mat khau</label>
                        <input type="text" name="pass" value="<?=$pass?>"  class="form-control" >
                    </div>
                     <div class="form-group">
                  <input type="hidden" name="id" value="<?=$id?>">
                    <input  name="capnhat" type="submit"  value="Cập nhật"  class="btn btn-primary">
                    <input type="reset" class="btn btn-primary" value="Nhập lại">
             <a href="index.php?act=listuser">  <input type="button" class="btn btn-primary"  value="danhsach"></a>
                </div>
            </form>
            <?php  if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </div>
    </section>
</div>