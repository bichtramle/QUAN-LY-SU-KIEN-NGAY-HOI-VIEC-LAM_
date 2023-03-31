Thông tin bạn đã nhập
<?php    $listbill=loadall_bill($_SESSION['iduser']);
?>
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
                                          
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tên giao dịch của Doanh nghiệp</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Địa chỉ</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Tên đăng kí</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">SDT</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"  aria-sort="ascending"  aria-label="Browser: activate to sort column ascending">Gmail</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"  aria-label="Rendering engine: activate to sort column descending">Nội dung tuyển dụng(Vị trí tuyển dụng,số lượng)</th>
                                             <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"  aria-label="Rendering engine: activate to sort column descending">Chi phí</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"  aria-label="Rendering engine: activate to sort column descending">Trạng thái</th>
                                           <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"  aria-label="Rendering engine: activate to sort column descending">Ngày đăng kí</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"  aria-label="Rendering engine: activate to sort column descending">Tên Websize</th>
  
<?php 
 if(is_array($listbill)){
    foreach ($listbill as $bill) {
         extract($bill);
          $suaform="index.php?act=suaform&id=".$id;
             $xoaform="index.php?act=xoaform&id=".$id;
             $idtrangthai=tentt($bill['idtrangthai']);
        
         
    echo'  <tr>
    <td>'.$bill['tendv'].'</td>
    <td>'.$bill['diachi'].'</td>
       <td>'.$bill['tendk'].'</td>
          <td>'.$bill['sdt'].'</td>
             <td>'.$bill['gmail'].'</td>
                <td>'.$bill['ndtd'].'</td>
                <td>'.$bill['chiphi'].'</td>
                   <td>'.$idtrangthai.'</td>
                      <td>'.$bill['ngaydk'].'</td>
                         <td>'.$bill['tenws'].'</td>
                        <td>   <a href="'.$suaform.'"> <input  type="button"class="btn btn-primary" value="Sua"></a>
                             <a href="'.$xoaform.'"> <input  class="btn btn-danger"  type="button" value="xoa"></a></td>
                         
    
</tr>
';
    }
}
?></table> </div></div>    <?php if(isset($thongbao)&&($thongbao!="")){
                                echo $thongbao;
                            }
                     ?>  </div></div>    </div></div>    </div></div>    </div></div>    
 