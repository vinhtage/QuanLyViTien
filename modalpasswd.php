<form action="base_chpasswd.php" method="post" enctype="multipart/form-data" class="form-horizontal">
<div class="modal fade" id="chpasswd<?php echo $_SESSION["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Thay đổi mật khẩu</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$query = "SELECT * FROM t_taikhoan WHERE matk = '".$_SESSION["id"]."' ";
                    $result = mysqli_query($connect,$query);
                    $row = mysqli_fetch_array($result);
				?>
				<div class="container-fluid">
                    <div class="form-group">
                        <label>Mật khẩu cũ</label>
                        <input type="password" name="oldpass" class="form-control" placeholder="Nhập mật khẩu cũ" required>
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu mới</label>
                        <input type="password" name="newpass" class="form-control" placeholder="Nhập mật khẩu mới" required>
                    </div>
                    <div class="form-group">
                        <label>Nhập lại mật khẩu mới</label>
                        <input type="password" name="verypass" class="form-control" placeholder="Nhập lại mật khẩu mới" required>
                    </div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Thoát</button>
                    <button type="submit" name="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Lưu</button>
                </div>
				
            </div>
        </div>
    </div>
</form>