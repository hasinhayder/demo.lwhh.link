<?php
include_once 'keys.php';
if (isset($_GET['path'])) {
  $key = filter_input(INPUT_GET, 'path', FILTER_SANITIZE_SPECIAL_CHARS);
  $redirect_to = $keys[$key] ?? 'https://google.com';
  header("location: {$redirect_to}");
} else {
  header("location: https://google.com");
}
