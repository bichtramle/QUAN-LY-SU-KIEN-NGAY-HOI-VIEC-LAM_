<?php include "view/header/headerdm.php"
?>

<?php
  if(is_array($baiviet)){
    extract($baiviet);
  }

  $hinhpath="../upload/".$img;                     
  if(is_file($hinhpath)){
      $hinh="<img src='".$hinhpath."' height='80'>";
  }else{
      $hinh="no photo";
  }

?>

<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Cập nhật bài viết</h1>
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
        <form action="index.php?act=updatebv" method="post"  enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                <select name="iddm">
                   <option value="0" selected>Tất cả</option>
                <?php
                 foreach ($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    if($iddm==$id)
                    $s="selected"; else $s="";
                     echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';
                }
                ?>
                </select>
                  

</div>
                <div class="form-group">
                <?php
                if(is_array($baiviet)){
                extract($baiviet);
                        }

             $hinhpath="../upload/".$img;                     
             if(is_file($hinhpath)){
           $hinh="<img src='".$hinhpath."' height='80'>";
          }else{
             $hinh="no photo";
        }

?>
 <div class="form-group">
                        <label>Tên bài viết</label>
                        <input type="text" name="tenbv" value="<?=$name?>"  class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <input type="file" name="hinh"   class="form-control" placeholder="Hình ảnh">
                        <?=$hinh?>
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea type="text" name="mota" class="form-control" placeholder="Mô tả"><?=$mota?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Chi Tiết</label>
                        <textarea type="text" name="detail" class="form-control" placeholder="Chi tiết"><?=$detail?></textarea>
                    </div>
                    <div class="form-group">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input  name="capnhat" type="submit"  value="Cập nhật"  class="btn btn-primary">
                    <input type="reset" class="btn btn-primary" value="Nhập lại">
             <a href="index.php?act=listbv">  <input type="button" class="btn btn-primary"  value="danhsach"></a>
                </div>
                </div>   
</div>         <?php  if(isset($thongbao)&&($thongbao!="")) echo $thongbao; ?>
            </form>
        </div>
    </section>
</div>

