

<?php include "view/header/headeruv.php"
?>
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
        <form action="index.php?act=updateformuv" method="post"  enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                                             <label>Trạng thái</label>
                <select name="idtrangthai">
                   <option value="0" selected>Tất cả</option>
                <?php
                 foreach ($listtrangthai as $tt){
                    extract($tt);
                    if($idtrangthai==$id)
                    $s="selected"; else $s="";
                     echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';
                }
                ?>
                </select>
                  

</div>
                <div class="form-group">
                <?php
                if(is_array($form)){
                extract($form);
                        }
?>
                <div class="form-group">
                                <label>Tên  *</label>
                                    <input name="ten" value="<?=$ten?>" class="form-control" type="text" />
</div>  
    <div class="form-group">
                                <label>email *</label>
                                    <input name="email" value="<?=$email?>" class="form-control" type="text"  />
</div>   <div class="form-group">
                          <label>SDT *</label>
                                    <input name="sdt"  class="form-control" value="<?=$sdt?>" type="text"  />
</div>
 <div class="form-group">
                          <label>VTTD *</label>
                                    <input  name="vttd"  class="form-control" value="<?=$vttd?>" type="text"  />
</div>   <div class="form-group">
                          <label>Nhom nganh *</label>
                                    <input  name="nhomnganh"  class="form-control" value="<?=$nhomnganh?>" type="text"  />
</div>
                    <div class="form-group">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input  name="capnhat" type="submit"  value="Cập nhật"  class="btn btn-primary">
                    <input type="reset" class="btn btn-primary" value="Nhập lại">
             <a href="index.php?act=listformuv">  <input type="button" class="btn btn-primary"  value="danhsach"></a>
                </div>
                </div>   
</div>         <?php  if(isset($thongbao)&&($thongbao!="")) echo $thongbao; ?>
            </form>
        </div>
    </section>
</div>

