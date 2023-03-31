

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
        <form action="index.php?act=listgh" method="post">
            <input type="text" name="kyw">
            <select name="iddn">
                <option value="0" selected>Tất cả</option>
                        <select name="iddn" >
                            <?php 
                            foreach ($listdn as $dn){
                                extract($dn);
                                echo '<option value="'.$id.'">'.$tendv.'</option>';
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
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tên gian hang</th>
                                          
            
                    <?php foreach($listgh as $gh){
                        extract($gh);
                        $suagh="index.php?act=suagh&id=".$id;
                        $xoagh="index.php?act=xoagh&id=".$id;


                        echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                       
                   <td><a href="'.$suagh.'"> <input  type="button"class="btn btn-primary" value="Sua"></a>
                       <a href="'.$xoagh.'"> <input  class="btn btn-danger"  type="button" value="xoa"></a></td>
                      
                       </tr>';
                    }  ?>
                   
                                </table>
                            </div>
                            <div class="row">
                            <div class="col-sm-12">
                       <a href="index.php?act=addgh"><input class="btn btn-primary" type="button" value="Nhap them"></a>
                        </div></div>   

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>
