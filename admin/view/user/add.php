

<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Thêm danh mục</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <form action="index.php?act=adduser" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên </label>
                        <input type="text" name="user" required class="form-control">
                    </div>
                      <div class="form-group">
                        <label>Email </label>
                        <input type="text" name="email" required class="form-control">
                    </div>
                      <div class="form-group">
                        <label>Mật khẩu </label>
                        <input type="password" name="pass" required class="form-control">
                    </div>
                      <div class="form-group">
                        <label>Vai trò </label>
                        <input type="text" name="role" required class="form-control">
                    </div>
                    <input  name="themmoi" type="submit"  value="THEM MOI"  class="btn btn-primary">
                    <input type="reset" class="btn btn-primary" value="Nhập lại">
             <a href="index.php?act=listuser">  <input type="button" class="btn btn-primary"  value="danhsach"></a>
                </div>
            </form>
            <?php  if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </div>
    </section>
</div>