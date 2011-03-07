<?

$meta_description = array();
$meta_keywords = array();

function meta_description($message)
{
  global $meta_description;
  $message = func_get_arg(0);
  for($i=1;$i<func_num_args();$i++)
  {
    $v = func_get_arg($i);
    $message = preg_replace("/\?/", $v, $message);
  }
  $meta_description[] = $message;
}

function meta_keywords($message)
{
  global $meta_keywords;
  $message = func_get_arg(0);
  for($i=1;$i<func_num_args();$i++)
  {
    $v = func_get_arg($i);
    $message = preg_replace("/\?/", $v, $message);
  }
  $m = split(',', $message);
  foreach($m as $msg)
  {
    $meta_keywords[] = trim($msg);
  }
}
