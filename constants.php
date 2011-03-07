<?

if(!isset($theme_settings)) $theme_settings = array();

if(!isset($theme_settings['content_regions']))
{
  $theme_settings['content_regions'] = array(
    'head',
    'css_assets',
    'js_assets',
    'body_start',
    'header',
    'nav_links',
    'before_nav_widgets',
    'nav_widgets',
    'left_sidebar',
    'right_sidebar',
    'subnav_links',
    'section_links',
    'after_flash',
    'contextual_help',
    'before_content',
    'content',
    'after_content',
    'footer',
    'footer_links',
    'after_footer'
  );
}