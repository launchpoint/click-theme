<?

if (array_key_exists('flash_next', $_SESSION))
{
  $flash = $_SESSION['flash_next'];
  unset($_SESSION['flash_next']);
}


