<?php 

include "Facebook/autoload.php";

$fb = new Facebook\Facebook([

  'app_id' => '2837914162995363', // Replace {app-id} with your app id

  'app_secret' => '70807afe2c3f874986656f641f658990',

  'default_graph_version' => 'v2.2',

  ]);



$helper = $fb->getRedirectLoginHelper();



$permissions = ['email']; // Optional permissions

$loginUrl = $helper->getLoginUrl('http://localhost/infinity/facebook/myApp/fb-callback.php', $permissions);

header('Location: '.$loginUrl);

//echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';



 ?>