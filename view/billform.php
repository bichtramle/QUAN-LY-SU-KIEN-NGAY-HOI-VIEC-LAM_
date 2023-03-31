
<h1 class="text-primary text-center">Cám ơn bạn đã đăng kí tham gia </h1>
<p>Thông tin bạn đã đăng kí là </p>
<?php if(isset($_SESSION['idform'])&&($_SESSION['idform'])>0){
    $orderinfo=getorderinfo($_SESSION['idform']);
}
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
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"  aria-label="Rendering engine: activate to sort column descending">Nội dung tuyển dụng</th>
                                                                                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"  aria-label="Rendering engine: activate to sort column descending">Ngày đăng kí</th>
                                                                                   <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"  aria-label="Rendering engine: activate to sort column descending">Chi phí</th>

                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"  aria-label="Rendering engine: activate to sort column descending">Tên Websize</th>
  <tr>
    <td><?=$orderinfo[0]['tendv'];?></td>
    <td><?=$orderinfo[0]['diachi'];?></td>
       <td><?=$orderinfo[0]['tendk'];?></td>
          <td><?=$orderinfo[0]['sdt'];?></td>
             <td><?=$orderinfo[0]['gmail'];?></td>
                <td><?=$orderinfo[0]['ndtd'];?></td>
                      <td><?=$orderinfo[0]['ngaydk'];?></td>
                         <td><?=$orderinfo[0]['chiphi'];?></td>
                         <td><?=$orderinfo[0]['tenws'];?></td>
    
</tr></table>
</table>   
    