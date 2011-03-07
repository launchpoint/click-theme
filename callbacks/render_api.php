<?

$vars = event_capture('api');

if ( count($event_table['api'])==0 )
{
  $result_code = 404;
  $result_vpath = null;
  if ($run_mode != RUN_MODE_TEST)
  {
    header("HTTP/1.0 404 Not Found");
  }
}

echo $vars['output'];
