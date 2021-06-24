<form action="base_editavatar.php" method="post" enctype="multipart/form-data" class="form-horizontal">
<div class="modal fade" id="editavatar<?php echo $_SESSION["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Thay đổi avatar</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$query = "SELECT * FROM t_taikhoan WHERE matk = '".$_SESSION["id"]."' ";
                    $result = mysqli_query($connect,$query);
                    $row = mysqli_fetch_array($result);
				?>
				<div class="container-fluid">
                    <img class="rounded-circle mx-auto d-block" src="images/user/<?php echo $row['anh']?>" alt="Card image cap" />
                    <br>
                    <input type="file" name="file">
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