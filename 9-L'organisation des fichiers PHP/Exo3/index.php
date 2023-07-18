<?php
  require_once 'user.php';
  require_once 'languages.php';

  $user = getUser();
  loadlanguage($user['language']);
  $sports = getUserSports($user);

  include 'template.php';