<?php include "view/header/headeruser.php"
?>
<div class="content-wrapper" style="min-height: 1203.6px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách người dùng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách người dùng</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="col-12">  <form action="index.php?act=listuser" method="post">
            <input type="text" name="kyw">
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
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tên</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Email</th>
                                                                               <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Vai tro</th> 
                    <?php foreach($listuser as $form){
                        extract($form);
                        $suaus="index.php?act=suaus&id=".$id;
                        $xoaus="index.php?act=xoaus&id=".$id; 
                          
                        echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$user.'</td>
                        <td>'.$email.'</td>
                        <td>'.$role.'</td>
                    
                         
                   <td>     
                <a href="'.$suaus.'"> <input  type="button"class="btn btn-primary" value="Sua"></a>
                       <a href="'.$xoaus.'"> <input  class="btn btn-danger"  type="button" value="xoa"></a></td>
                  

                     
                        </tr>';
                    }
                    ?>   </table>    <div class="row">
                            <div class="col-sm-12">
                   
                            </div>
                             <a href="index.php?act=adduser"><input class="btn btn-primary" type="button" value="Nhap them"></a>
                       
                        </div></div>   

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>
