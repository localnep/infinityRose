<?php session_start();

include "Facebook/autoload.php"; // include ile verilerimizi (komut dizisine) erişmek için kullanıyoruz, bilmediüimiz komutlar (kütüphane gibi)



$fb = new Facebook\Facebook([ //hepsi hazir geliyor id ve secret kismini ben ayarlıyorum -> facebook kendi veriyor

  'app_id' => '2837914162995363', //developer.facebook daki id mi doğrudan alıp yapıştırdım  id ve şifre aldım erişimi sağlamak için

  'app_secret' => '70807afe2c3f874986656f641f658990', // şifreyi alıyorum 2 özellikte developer'daki sistemi bana verdiğini giriyorum

  'default_graph_version' => 'v2.2', // bu kodları yazarak kendi sitemde facebook un bana verdiği sitemdeki uygulama erişimine izini alıyorum

  ]);



$helper = $fb->getRedirectLoginHelper();

if (isset($_GET['state'])) {

  $helper->getPersistentDataHandler()->set('state',$_GET['state']);

}

try {

  $accessToken = $helper->getAccessToken();

} catch(Facebook\Exceptions\FacebookResponseException $e) {

  // When Graph returns an error

  echo 'Graph returned an error: ' . $e->getMessage();

  exit;

} catch(Facebook\Exceptions\FacebookSDKException $e) {

  // When validation fails or other local issues

  echo 'Facebook SDK returned an error: ' . $e->getMessage();

  exit;

}



if (! isset($accessToken)) {

  if ($helper->getError()) {

    header('HTTP/1.0 401 Unauthorized');

    echo "Error: " . $helper->getError() . "\n";

    echo "Error Code: " . $helper->getErrorCode() . "\n";

    echo "Error Reason: " . $helper->getErrorReason() . "\n";

    echo "Error Description: " . $helper->getErrorDescription() . "\n";

  } else {

    header('HTTP/1.0 400 Bad Request');

    echo 'Bad request';

  }

  exit;

}



// Logged in

/*echo '<h3>Access Token</h3>';

var_dump($accessToken->getValue());

*/

// The OAuth 2.0 client handler helps us manage access tokens

$oAuth2Client = $fb->getOAuth2Client();



// Get the access token metadata from /debug_token

$tokenMetadata = $oAuth2Client->debugToken($accessToken);

//echo '<h3>Metadata</h3>';

//var_dump($tokenMetadata);

//echo count($tokenMetadata);
//include "../../system/baglan.php";
$faceid = $tokenMetadata->getField('user_id');
echo $faceid;
/*$query = $db->query("SELECT * FROM musteri WHERE facebook = '{$faceid}'")->fetch(PDO::FETCH_ASSOC);

	if ( $query ){

		
	   $_SESSION["tc"] = $query["tc"];
	}


	

	header('Location: https://garibank.site/');*/




// Validation (these will throw FacebookSDKException's when they fail)

$tokenMetadata->validateAppId('2837914162995363'); // Replace {app-id} with your app id

// If you know the user ID this access token belongs to, you can validate it here

//$tokenMetadata->validateUserId('123');

$tokenMetadata->validateExpiration();



if (! $accessToken->isLongLived()) {

  // Exchanges a short-lived access token for a long-lived one

  try {

    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);

  } catch (Facebook\Exceptions\FacebookSDKException $e) {

    echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";

    exit;

  }



  echo '<h3>Long-lived</h3>';

  var_dump($accessToken->getValue());

}



$_SESSION['fb_access_token'] = (string) $accessToken;



// User is logged in with a long-lived access token.

// You can redirect them to a members-only page.

//header('Location: https://example.com/members.php');



 ?>