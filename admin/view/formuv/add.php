
<?php include "view/header/headeruv.php"
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
            <form action="index.php?act=adduv" method="post" >
                <div class="form-group">
                                <label>Tên  *</label>
                                    <input mb-3 required name="ten" class="form-control" type="text" placeholder="" />
</div>   <div class="form-group">
    <div class="form-group">
                                <label>email *</label>
                                    <input mb-3 required name="email" class="form-control" type="text" placeholder="" />
</div>   <div class="form-group">
                          <label>SDT *</label>
                                    <input required name="sdt"  class="form-control" type="text" placeholder="" />
</div>   
 <div class="form-group">
                          <label>vttd*</label>
                                    <input  name="vttd"  class="form-control" type="text" placeholder="" />
</div>   <div class="form-group">
                          <label>nhom nganh*</label>
                                    <input  name="nhomnganh"  class="form-control" type="text" placeholder="" />
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
                               
</div>     
</div>   
          
                    <input  name="themmoi" type="submit"  value="THEM MOI"  class="btn btn-primary">
                    <input type="reset" class="btn btn-primary" value="Nhập lại">
             <a href="index.php?act=listformuv">  <input type="button" class="btn btn-primary"  value="danhsach"></a>
                </div>
            </form>
            <?php  if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </div>
    </section>
</div></div>  
