
<?php
if(isset($_POST['submit']))
{
    $Name=$_POST['txtTen'];
    $Mail=$_POST['txtMail'];
    $Content=$_POST['txtContent'];
    $trangthai=1;
    $qr="INSERT INTO nhanxet (HoTen, Email, NoiDung, TrangThai) VALUES ('$Name','$Mail','$Content','$trangthai')";
    mysql_query($qr);

}
?>
<form method="post">
    <input name="txtTen" type="text" value="Nhập tên của bạn..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nhập tên của bạn...';}" required="">
    <input name="txtMail" type="email" value="Nhập địa chỉ mail..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nhập địa chỉ mail...';}" required="">
    <textarea name="txtContent" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tin nhắn...';}" required="">Tin nhắn...</textarea>
    <input type="submit" name="submit" value="Gởi Đi">
</form>