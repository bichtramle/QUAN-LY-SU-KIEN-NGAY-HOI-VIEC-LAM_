
<?php include "view/header/headerbv.php"
?>

<div class="content-wrapper" style="min-height: 1203.6px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách danh mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách danh mục</li>
                    </ol>
                </div>
            </div>
        </div>
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
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tên chuyên mục</th>
  
                    <?php foreach($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                        $suadm="index.php?act=suadm&id=".$id;
                        $xoadm="index.php?act=xoadm&id=".$id;
                        echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                   <td><a href="'.$suadm.'"> <input  type="button"class="btn btn-primary" value="Sua"></a>
                       <a href="'.$xoadm.'"> <input  class="btn btn-danger"  type="button" value="xoa"></a></td>
                      
                        </tr>';
                    }
                    ?>
                
                                </table>
                            </div>
                            <div class="row">
                            <div class="col-sm-12">
                       <a href="index.php?act=adddm"><input class="btn btn-primary" type="button" value="Nhap them"></a>
                        </div></div>   

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>
