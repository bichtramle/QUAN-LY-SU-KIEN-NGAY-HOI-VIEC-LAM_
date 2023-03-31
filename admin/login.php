<?php session_start();
ob_start();
  include "../model/connectdb.php";
  include "../model/user.php";
if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
    $user=$_POST['user'];
    $pass=($_POST['pass']);
    $role=checkuser($user,$pass);
    $_SESSION['role']=$role;
    
    if($role==1) header('location: index.php');
    else {
        $txt_erro="Username hoac passworld khong ton tai";
    }
}
?>
    <div class="form-tt">
<h2>Đăng nhập Admin</h2>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="dang-ky">

<input type="text" riquied  name="user" placeholder="Nhập tên đăng nhaa" />
<input riquied name="pass" type="password" placeholder="Nhập mật khẩu" />
<input type="checkbox" id="checkbox" name="checkbox"><label class="checkbox-text">Nhớ đăng nhập lần sau</label>
<input type="submit" name="dangnhap" value="Đăng nhập" />
<label class="psw-text">Quên mật khẩu</label>
<?php 
                if(isset($txt_erro)&&($txt_erro!="")){
                    echo "<font color='red'>".$txt_erro."</font>";
                }
                
                ?>
</form>

</div>
           
<style>
body {
padding: 50px;
text-align: center;
}
* {
margin: 0;
padding: 0;
}
.form-tt {
width: 400px;
border-radius: 10px;
overflow: hidden;
padding: 55px 55px 37px;
background: #9152f8;
background: -webkit-linear-gradient(top,#7579ff,#b224ef);
background: -o-linear-gradient(top,#7579ff,#b224ef);
background: -moz-linear-gradient(top,#7579ff,#b224ef);
background: linear-gradient(top,#7579ff,#b224ef);
text-align: center;
}
.form-tt h2 {
font-size: 30px;
color: #fff;
line-height: 1.2;
text-align: center;
text-transform: uppercase;
display: block;
margin-bottom: 30px;
}

.form-tt input[type=text], .form-tt input[type=password] {
font-family: Poppins-Regular;
font-size: 16px;
color: #fff;
line-height: 1.2;
display: block;
width: calc(100% - 10px);
height: 45px;
background: 0 0;
padding: 10px 0;
border-bottom: 2px solid rgba(255,255,255,.24)!important;
border: 0;
outline: 0;
}
.form-tt input[type=text]::focus, .form-tt input[type=password]::focus {
color: red;
}
.form-tt input[type=password] {
margin-bottom: 20px;
}
.form-tt input::placeholder {
color: #fff;
}
.checkbox {
display: block;
}
.form-tt input[type=submit] {
font-size: 16px;
color: #555;
line-height: 1.2;
padding: 0 20px;
min-width: 120px;
height: 50px;
border-radius: 25px;
background: #fff;
position: relative;
z-index: 1;
border: 0;
outline: 0;
display: block;
margin: 30px auto;
}
#checkbox {
display: inline-block;
margin-right: 10px;
}
.checkbox-text {
color: #fff;
}
.psw-text {
color: #fff;
}
</style>




  