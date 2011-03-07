<?

$title = array();

function title($message = null)
{
  global $title;
  if(!$message) return join(' | ', $title);
  $message = func_get_arg(0);
  for($i=1;$i<func_num_args();$i++)
  {
    $v = func_get_arg($i);
    $message = preg_replace("/\?/", $v, $message);
  }
  $title[] = $message;
}
