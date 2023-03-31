<?php
  if(is_array($dm)){
    extract($dm);
  }
?>






<?php include "view/header/headerbv.php"
?>

<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Cập nhật danh mục</h1>
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
            <form action="index.php?act=updatedm" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên danh mục</label>
                        <input type="text" name="name" placeholder="Tên danh mục" required class="form-control"  value="<?php if(isset($name)&&($name!="")) echo $name ;?>">
                    </div>
                  <input type="hidden" name="id" value="<?=$id?>">
                    <input  name="capnhat" type="submit"  value="Cập nhật"  class="btn btn-primary">
                    <input type="reset" class="btn btn-primary" value="Nhập lại">
             <a href="index.php?act=lisdm">  <input type="button" class="btn btn-primary"  value="danhsach"></a>
                </div>
            </form>
            <?php  if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </div>
    </section>
</div>