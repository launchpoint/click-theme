<?
global $theme_settings;

title(se(APP_NAME,false));

$events = $theme_settings['content_regions'];

$vars = array();
foreach($events as $event_name)
{
  $vars[$event_name] = event_capture($event_name);
}

$imports = array('title', 'meta_keywords', 'meta_description');
foreach($imports as $v)
{
  global $$v;
  $vars[$v] = $$v;
}

if ( count($event_table['content'])==0 )
{
  if(CLI)
  {
    click_error("404 - No callbacks responded to 'content' for HTTP request to /$full_request_path");
  } else {
    header("HTTP/1.0 404 Not Found");
  }
}

$data = event('render_theme', $vars);
