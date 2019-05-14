<?
session_start();
if($_POST['quest_f']){
  if($_POST['question'] && $_POST['answer'])
  {
    if($_POST['page'] == '1') {
      session_destroy();
      session_start();
    }
    $_SESSION[$_POST['question']] = $_POST['answer'];
  }
}

if($_POST['result_f'])
{
  $to = "rinat_karabanov@mail.ru";
  $subject = "Заявка";
  $from = "English School <root@engrein.ru>";
  $charset = "utf-8";
  $headerss ="From: ".$from."\r\n";
  $headerss .="Content-type: text/html; charset=$charset\r\n";
  $headerss.="MIME-Version: 1.0\r\n";
  $headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n";
  foreach ($_SESSION as $key => $value) {
    $msg .= $key.": ".$value." | ";
  }
  $msg .= "Телефон: ".$_POST['phone']." | Имя: ".$_POST['name'];;
if(mail($to, $subject, $msg, $headerss)) exit('Success');
}
?>
