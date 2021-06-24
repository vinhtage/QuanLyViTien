                                    <div class="card">
                                        <div class='table-stats order-table ov-h'>
                                            <table class='table'>
                                                <thead>
                                                <tr>
                                                <th class='serial'>#</th>   
                                                    <th class='avatar'>Biểu tượng</th>  
                                                    <th>Tên ví</th> 
                                                    <th>Loại ví</th>    
                                                    <th>Số dư</th>  
                                                    <th>Ghi chú</th>    
                                                    <th style='text-align: center'>Thao tác</th>                     
                                                </tr>
                                                </thead>
                                                <?php
                                                    $database = mysqli_connect('localhost', 'root', '', 'quanlyvitien');
                                                    $kq = mysqli_query($database, "SELECT * FROM t_vitien,t_loaivi WHERE t_vitien.maloaivi=t_loaivi.maloaivi AND matk = '".$_SESSION['id']."'");                            
                                                    $i=1;
                                                    while($r=mysqli_fetch_array($kq)){
                                                ?>
                                                <tbody>
                                                    <tr>
                                                        <td class='serial'><?php echo $i++ ?></td>
                                                        <td class='avatar'>
                                                            <div class='round-img'>
                                                                <a href='#'><img class='rounded-circle' src='images/logo2.png' alt=''></a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class='name'><?php echo ucwords($r['tenvi']) ?></span>
                                                        </td>
                                                        <td>
                                                            <span class='product'><?php echo ucwords($r['tenloaivi']) ?></span>
                                                        </td>
                                                        <td>
                                                            <?php 
                                                                if($r['sodu']==''){
                                                                    echo 0;
                                                                }else{
                                                                    echo number_format($r['sodu']).' ₫';
                                                                }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $r['ghichu'] ?>
                                                        </td>
                                                        <td style='text-align: center'>
                                                            <a href="#edit<?php echo $r['mavi']; ?>" data-toggle='modal' class='btn btn-success btn-sm'>Sửa</a>
                                                            <a href="#del<?php echo $r['mavi']; ?>" data-toggle="modal" class="btn btn-danger btn-sm">Xoá</a>
                                                            <?php include('modaltable.php'); ?>
                                                        </td>
                                                    </tr>
                                                </body>    
                                                <?php           
                                                    }
                                                ?>                  
                                            </table>                        
                                        </div>                            
                                    </div>