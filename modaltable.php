<!-- Delete -->
<div class="modal fade" id="del<?php echo $r['mavi']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Xoá ví</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($database,"select * FROM t_vitien where mavi='".$r['mavi']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Bạn đã chắc chắn xoá ví <strong><?php echo ucwords($drow['tenvi']); ?></strong> trong danh sách chưa? Thao tác này không thể hoạt tác.</center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Thoát</button>
                    <a href="base_delvitien.php?mavi=<?php echo $r['mavi']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xoá</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $r['mavi']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Sửa thông tin ví</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($database,"SELECT * FROM t_vitien,t_loaivi WHERE t_vitien.maloaivi=t_loaivi.maloaivi AND mavi='".$r['mavi']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="base_editvitien.php?mavi=<?php echo $erow['mavi']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Tên ví:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="tenvi" class="form-control" value="<?php echo $erow['tenvi']; ?>"></input>
						</div>
					</div>
					<div style="height:15px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Loại ví:</label>
						</div>
						<div class="col-lg-10">
                            <select name="loaivi" id="loaivi" class="form-control">
                            <?php
                                $database = mysqli_connect('localhost', 'root', '', 'quanlyvitien');
                                if (!$database){echo "Lỗi Kết Nối";
                                    }else{
                                        $loaivi = mysqli_query($database, "SELECT * FROM `t_loaivi`");
                                        if (mysqli_num_rows($loaivi) > 0)
                                        {
                                            while ($rr = mysqli_fetch_array($loaivi))
                                            {
                            ?>                    
                                            <option value = "<?php echo $rr['maloaivi']?>" <?php if($rr['maloaivi'] == $erow['maloaivi'] ) {echo "selected='selected'";} ?>> <?php echo $rr['tenloaivi'] ?> </option>
                            <?php               
                                            }
                                        }
                                    }
                            ?>
                            </select>
						</div>
					</div>
					<div style="height:15px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Số dư:</label>
						</div>
						<div class="col-lg-10">
							<input type="number" name="sodu" class="form-control" value="<?php echo $erow['sodu']; ?>">
						</div>
					</div>
                    <div style="height:15px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Ghi chú:</label>
						</div>
						<div class="col-lg-10">
							<textarea name="ghichu" class="form-control"><?php echo $erow['ghichu']; ?></textarea>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Thoát</button>
                    <button type="submit" name="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Lưu</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->