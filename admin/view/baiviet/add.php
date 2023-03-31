
<?php include "view/header/headerdm.php"
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
            <form action="index.php?act=addbv" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                        <label>Danh mục</label>
                        <select name="iddm" >
                            <?php 
                            foreach ($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                            ?>

                       
                        
                    </div>
                    <div class="form-group">
                        <label>Tên bài viết</label>
                        <input type="text" name="tenbv" class="form-control" placeholder="Tên bài viết">
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <input type="file" name="hinh"  class="form-control" placeholder="Hình ảnh">
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea type="text" name="mota"  class="form-control" placeholder="Mô tả"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Chi tiết</label>
                        <textarea type="text" name="detail"  class="form-control" placeholder="Chi tiết"></textarea>
                    </div>
                    <input  name="themmoi" type="submit"  value="THEM MOI"  class="btn btn-primary">
                    <input type="reset" class="btn btn-primary" value="Nhập lại">
             <a href="index.php?act=listbv">  <input type="button" class="btn btn-primary"  value="danhsach"></a>
                </div>
            </form>
            <?php  if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </div>
    </section>
</div>
