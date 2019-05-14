<?
session_start();
if($_POST['quest_f']){
  if($_POST['page'] && $_POST['question'] && $_POST['answer'])
  {
    $_SESSION[$_POST['page']][$_POST['question']] = $_POST['answer'];
  }
}
?>
