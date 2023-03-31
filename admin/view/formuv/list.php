

<?php include "view/header/headeruv.php"
?>

<div class="content-wrapper" style="min-height: 1203.6px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách đăng ký tham gia</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách doanh nghiệp đăng ký tham gia </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="col-12">  <form action="index.php?act=listformuv" method="post">
            <input type="text" name="kyw">
              </select>
                         <label>Trạng thái</label>
                        <select name="idtrangthai" >
                             <option value="0" selected>Tất cả</option>
                          <?php foreach($listtrangthai as $tt){
                            extract($tt);
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
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tên ứng viên</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Email</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">SDT</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Vị trí tuyển dụng</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nhóm ngành</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"  aria-sort="ascending"  aria-label="Browser: activate to sort column ascending">Ngày đăng kí</th>
                                              <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"  aria-sort="ascending"  aria-label="Browser: activate to sort column ascending">Tình trạng</th>

                    <?php foreach($listform as $form){
                        extract($form);
                        $suaformuv="index.php?act=suaformuv&id=".$id;
                        $xoaformuv="index.php?act=xoaformuv&id=".$id;
                           $idtrangthai=tentt($form['idtrangthai']);
                        echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$ten.'</td>
                        <td>'.$email.'</td>
                        <td>'.$sdt.'</td> 
                         <td>'.$vttd.'</td>
                          <td>'.$nhomnganh.'</td>
                            <td>'.$ngaydk.'</td>
                              <td>'.$idtrangthai.'</td>
                   <td>
                <a href="'.$suaformuv.'"> <input  type="button"class="btn btn-primary" value="Sua"></a>
                       <a href="'.$xoaformuv.'"> <input  class="btn btn-danger"  type="button" value="xoa"></a></td>
                     
                        </tr>';
                    }
                    ?>   </table>    <div class="row">
                            <div class="col-sm-12">
                        <a href="index.php?act=adduv"><input class="btn btn-primary" type="button" value="Nhap them"></a>
                      <a href="index.php?act=listformuv">  <input type="button" class="btn btn-primary"  value="danhsach"></a>
                   
                            </div>
                        
                       </form>
                        </div></div>   

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>
