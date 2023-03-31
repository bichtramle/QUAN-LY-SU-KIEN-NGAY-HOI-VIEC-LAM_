<h2 class="text-center">Thông tin bạn đã nhập</h2>
<?php    $listbilluv=loadall_billuv($_SESSION['iduser']); 
  
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
                                          
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tên </th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">email</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nghanh</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">SDT</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"  aria-sort="ascending"  aria-label="Browser: activate to sort column ascending">Vi tri ung tuyen</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"  aria-sort="ascending"  aria-label="Browser: activate to sort column ascending">Trạng thái</th>
                                             <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"  aria-sort="ascending"  aria-label="Browser: activate to sort column ascending">Thời gian đăng kí</th>

                                          
  
<?php 

 if(is_array($listbilluv)){
    foreach ($listbilluv as $bill) {
         extract($bill);
           $suaformungvien="index.php?act=suaformungvien&id=".$id;
           $xoaformuv="index.php?act=xoaformuv&id=".$id;
           $idtrangthai=tentt($bill['idtrangthai']);
    echo'  <tr>
     <td>'.$bill['ten'].'</td>
     <td>'.$bill['email'].'</td>
        <td>'.$bill['nhomnganh'].'</td>
        <td>'.$bill['sdt'].'</td> 
         <td>'.$bill['vttd'].'</td>
               <td>'.$idtrangthai.'</td>
                      <td>'.$bill['ngaydk'].'</td>
                     <td>  <a href="'.$suaformungvien.'"> <input  class="btn btn-danger"  type="button" value="sua"></a>
                     <a href="'.$xoaformuv.'"> <input  class="btn btn-danger"  type="button" value="xoa"></a></td></td> 
                    
                         
    
</tr>
';
    }
}
?></table> </div></div>     <?php if(isset($thongbao)&&($thongbao!="")){
                                echo $thongbao;
                            }
                     ?> </div></div>    </div></div>    </div></div>    </div></div>    
 