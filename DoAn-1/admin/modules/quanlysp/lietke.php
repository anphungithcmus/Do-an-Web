<?php
    $sql="SELECT * FROM chitetsp,loaisp,nhasanxuat where chitetsp.idloaisp=loaisp.idSP and chitetsp.idnsx=nhasanxuat.idnsx ORDER BY chitetsp.idloaisp desc";   
    $run = mysqli_query($conn,$sql);
?>
<table width="790" border="1">
    <tr>
        <td>ID</td>
        <td>Tên sản phẩm</td>
        <td>Hình ảnh</td>
        <td>Giá</td>
        <td>Loại sp</td>
        <td>Xuất sứ</td>
        <td>Nhà SX</td>
        <td>Thứ tự</td>
        <td colspan="2" align="center">Quản lý</td>
    </tr>
    <?php
    $i=0;
    while($dong=mysqli_fetch_array($run)){
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $dong['tensp']?></td>
        <td><img src="modules/quanlysp/uploads/<?php echo $dong['hinhanh']?>" width="60" height="60"></td>
        <td><?php echo $dong['gia']?></td>
        <td><?php echo $dong['TenloaiSP']?></td>
        <td><?php echo $dong['xuatsu']?></td>
        <td><?php echo $dong['tennsx']?></td>
        <td><?php echo $dong['thutu']?></td>
        <td><a href="index.php?quanly=quanlysp&ac=sua&id=<?php echo $dong['idsp']?>">Sửa</a></td>
        <td><a href="modules/quanlysp/xuly.php?id=<?php echo $dong['idsp']?>">Xóa</a></td>
    </tr>
    <?php
    $i++;
    }
    ?>
</table>