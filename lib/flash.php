<?


$flash=array();
function flash($message)
{
  global $flash;
  $message = func_get_arg(0);
  $message = se($message);
  for($i=1;$i<func_num_args();$i++)
  {
    $v = func_get_arg($i);
    $message = preg_replace("/\?/", $v, $message);
  }
  $flash[] = $message;
}

function flash_next()
{
  $message = func_get_arg(0);
  $message = se($message);
  for($i=1;$i<func_num_args();$i++)
  {
    $v = func_get_arg($i);
    $message = preg_replace("/\?/", $v, $message);
  }
  $_SESSION['flash_next'][] = $message;
}