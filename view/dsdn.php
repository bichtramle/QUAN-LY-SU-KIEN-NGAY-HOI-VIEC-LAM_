</section>
     <section>
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                Trường Đại học Tài nguyên và Môi trường Hà Nội phối hợp với Trường Đại học Mỏ - Địa chất tổ chức ngày hội việc làm năm 2020 cho sinh viên nhằm mục đích:
- Tạo điều kiện cho sinh viên chuẩn bị tốt nghiệp có cơ hội tìm được việc làm phù hợp với ngành nghề đào tạo;
- Định hướng việc học tập cho sinh viên đang học thông qua các hoạt động tuyển dụng, giúp sinh viên nắm bắt được các tiêu chí tuyển dụng, làm quen với thị trường tuyển dụng lao động có cơ hội tìm kiếm việc làm phù hợp với ngành nghề đào tạo.
                <div class="card-body">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <h1 class="text-center">Danh sách doanh nghiệp tham gia</h1>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                    <thead>
                                        <tr role="row">
                                          
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">STT</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tên Doanh nghiệp</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Websize</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">địa chỉ</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"  aria-label="Rendering engine: activate to sort column descending">Nội dung tuyển dụng(Vị trí tuyển dụng,số lượng)</</th>

                    <?php foreach($listform as $form){
                        extract($form);
                        echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$tendv.'</td>
                        <td>'.$tenws.'</td>
                        <td>'.$diachi.'</td>         
                        <td>'.$ndtd.'</td>
                    
                        </tr>';
                    }
                    ?>   </table>  
                   
                            </div>
                        
                       
                        </div></div>   

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>
