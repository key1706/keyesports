<?php
//ob_start();
require 'mail/class.phpmailer.php';
require 'mail/class.smtp.php';
?>
<?php
if(isset($_POST['btnSubmit']))
{
    $Mail=$_POST['mail'];
    $nFrom = "KeyEsports";    //mail duoc gui tu dau, thuong de ten cong ty ban
    $mFrom = 'quockhuong0330@gmail.com';  //dia chi email cua ban
    $mPass = 'khuong123456';       //mat khau email cua ban
    $nTo = 'HR'; //Ten nguoi nhan
    $mTo = $Mail;   //dia chi nhan mail
    $mail             = new PHPMailer();
    $body             = 'Cảm ơn bạn đã đăng ký nhận tin từ KeyEsport, chúng tôi sẽ thông báo tin mới nhất cho bạn.';   // Noi dung email
    $title = 'Đăng Ký Nhận tin thành công';   //Tieu de gui mail
    $mail->IsSMTP();
    $mail->CharSet  = "utf-8";
    $mail->SMTPDebug  = 0;   // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = true;    // enable SMTP authentication
    $mail->SMTPSecure = "ssl";   // sets the prefix to the servier
    $mail->Host       = "smtp.gmail.com";    // sever gui mail.
    $mail->Port       = 465;         // cong gui mail de nguyen
// xong phan cau hinh bat dau phan gui mail
    $mail->Username   = $mFrom;  // khai bao dia chi email
    $mail->Password   = $mPass;              // khai bao mat khau
    $mail->SetFrom($mFrom, $nFrom);
    $mail->AddReplyTo('quockhuong0330@gmail.com', 'Keyesport.net'); //khi nguoi dung phan hoi se duoc gui den email nay
    $mail->Subject    = $title;// tieu de email
    $mail->MsgHTML($body);// noi dung chinh cua mail se nam o day.
    $mail->AddAddress($mTo, $nTo);
// thuc thi lenh gui mail
    if(!$mail->Send()) {
        echo 'Thành công!';

    } else {

        echo 'thành công';
    }
}
?>

<div class="news-grid-rght2">
  <h3>ĐĂNG KÝ ĐỂ NHẬN TIN</h3>
  <p>Xin hãy để lại mail để chúng tôi có thể thông báo những tin mới nhất cho cái bạn!</p>
  <form method="post">
    <input type="text" name="mail" value="Nhập mail của bạn tại đây ^^" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nhập mail của bạn tại đây!!';}">
    <input type="submit" name="btnSubmit" value="Submit">
  </form>
</div>
