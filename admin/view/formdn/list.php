

<?php include "view/header/headerdn.php"
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
        <div class="col-12">  <form action="index.php?act=listform" method="post">
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
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tên  Doanh nghiệp</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Websize</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">địa chỉ</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Họ Tên người đăng ký</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">SDT</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"  aria-sort="ascending"  aria-label="Browser: activate to sort column ascending">Gmail</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"  aria-label="Rendering engine: activate to sort column descending">Nội dung tuyển dụng(Vị trí tuyển dụng,số lượng)</</th>
                                             <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"  aria-label="Rendering engine: activate to sort column descending">Ngay Dang ky</th>
                                                                                           <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"  aria-label="Rendering engine: activate to sort column descending">Tình trạng</th>
  
                    <?php foreach($listform as $form){
                        extract($form);
                        $suaform="index.php?act=suaform&id=".$id;
                        $xoaform="index.php?act=xoaform&id=".$id; 
                          $idtrangthai=tentt($form['idtrangthai']);
                        echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$tendv.'</td>
                        <td>'.$tenws.'</td>
                        <td>'.$diachi.'</td>
                        <td>'.$tendk.'</td>
                        <td>'.$sdt.'</td>
                        <td>'.$gmail.'</td>
                        <td>'.$ndtd.'</td>
                         <td>'.$ngaydk.'</td>
                          <td>'.$idtrangthai.'</td>
                         
                   <td>
                  
                   <a href="'.$suaform.'"> <input  type="button"class="btn btn-primary" value="Sua"></a>
                       <a href="'.$xoaform.'"> <input  class="btn btn-danger"  type="button" value="xoa"></a></td>
                     
                        </tr>';
                    }
                    ?>   </table>    <div class="row">
                            <div class="col-sm-12">
                        <a href="index.php?act=addform"><input class="btn btn-primary" type="button" value="Nhap them"></a>
                      <a href="index.php?act=listform">  <input type="button" class="btn btn-primary"  value="danhsach"></a>
                   
                            </div>
                        
                       
                        </div></div>   

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>
