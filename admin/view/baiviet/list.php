<?php include "view/header/headerdm.php"
?>



<div class="content-wrapper" style="min-height: 1203.6px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách bài viết</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách danh mục</li>
                    </ol>
                </div>
            </div>
        </div>
        <form action="index.php?act=listbv" method="post">
            <input type="text" name="kyw">
            <select name="iddm">
                <option value="0" selected>Tất cả</option>
                <?php
                 foreach ($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$name.'</option>';
                }
                ?>
                </select>
                
            <input type="submit" name="listok" value="GO">
            </form>
    </section>
    <section>
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                
                <div class="card-body">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">STT</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tên bài viết</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Hình ảnh</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Mô tả</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Chi tiết</th>
            
                    <?php foreach($listbaiviet as $baiviet){
                        extract($baiviet);
                        $suabv="index.php?act=suabv&id=".$id;
                        $xoabv="index.php?act=xoabv&id=".$id;
                        $hinhpath="../upload/".$img;
                          
                        if(is_file($hinhpath)){
                            $hinh="<img src='".$hinhpath."' height='80'>";
                        }else{
                            $hinh="no photo";
                        }



                        echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$hinh.'</td>
                        <td>'.$mota.'</td>
                        <td>'.$detail.'</td>
                   <td><a href="'.$suabv.'"> <input  type="button"class="btn btn-primary" value="Sua"></a>
                       <a href="'.$xoabv.'"> <input  class="btn btn-danger"  type="button" value="xoa"></a></td>
                      
                        </tr>';
                    }
                    ?>
                
                                </table>
                            </div>
                            <div class="row">
                            <div class="col-sm-12">
                       <a href="index.php?act=addbv"><input class="btn btn-primary" type="button" value="Nhap them"></a>
                        </div></div>   

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>
