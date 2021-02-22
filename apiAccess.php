<?php

function createClient() {

	$client = new Google_Client();
	$client->setApplicationName("Google Calendar PHP Starter Application");

	// Visit https://code.google.com/apis/console?api=calendar to generate your
	// client id, client secret, and to register your redirect uri.
	$client->setClientId('780742417572-heuu9q6fbvor5304ron4v475bq1idoql.apps.googleusercontent.com');
	$client->setClientSecret('-TYXjNNKLTM5Usj-Wkp0iiWk');
	$client->setRedirectUri('http://localhost/demo/GoogleCalObjectOrientedFinal/');
	$client->setDeveloperKey('AIzaSyAaASs3dNZ4F9HN9RbvlL7wqrGDsMG0zp0');


	return $client;


}

?>