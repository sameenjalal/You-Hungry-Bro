 <?php
	/* 
	 * Account SID = ACf4012adcc19faec48e2a304d1c888504
	 * Auth Token = b521ce8b1aa2e9e5d3aa9a0790aca03f
	 * Voice URL = http://demo.twilio.com/welcome/voice
	 * SMS URL = http://demo.twilio.com/welcome/sms
	 * Number = 415 - 599 - 2671
	 * PIN = 2825-5963
	 */

    // include the PHP TwilioRest library
    require "twilio/twilio.php";
    require "parse_text.php";

	file_put_contents('log', print_r($_REQUEST, true). "\n\n", FILE_APPEND);
 
    // twilio REST API version
    $ApiVersion = "2010-04-01";
 
    // set our AccountSid and AuthToken
 	$AccountSid = "ACf4012adcc19faec48e2a304d1c888504";
 	$AuthToken = "b521ce8b1aa2e9e5d3aa9a0790aca03f";
		
	$pin = "28255963"; 

    // instantiate a new Twilio Rest Client
	$client = new TwilioRestClient($AccountSid, $AuthToken);

    $number = $_REQUEST['From'];
	$my_number = "4155992671";
    $body = $_REQUEST['Body'];

	$body = trim($body, " ");
	//$body = strtolower(substr($body, 8));
	$body = trim($body, " ");
	echo "hi".$body."hi";

	//echo "first".$body;
	if ( strcmp($body, "1") == 0 || strcmp($body, "food") == 0 )
	{
		$body = food();
		//echo "second".$body;
	}
	else if ( strcmp($body, "2") == 0 || strcmp($body, "playground") == 0 )
		$body = playground();
	else if ( strcmp($body, "3") == 0 || strcmp($body, "rec center") == 0 )
		$body = rec();
	else if ( strcmp($body, "4") == 0 || strcmp($body, "running") == 0 )
		$body = running();
	else if ( strcmp($body, "5") == 0 || strcmp($body, "swimming") == 0 )
		$body = swimming();
	else if ( strcmp($body, "6") == 0 || strcmp($body, "tennis") == 0 )
		$body = tennis();
	else if ( strcmp($body, "7") == 0 || strcmp($body, "zoo") == 0 || strcmp($body, "aquarium") == 0 )
		$body = zoo();
	else if ( strcmp($body, "8") == 0 || strcmp($body, "beach") == 0 )
		$body = beach();
	else if ( strcmp($body, "9") == 0 || strcmp($body, "hiking") == 0 )
		$body = hike();
	else
    	$body = "1 Food, 2 Playground, 3 Rec Center, 4 Running, 5 Swimming, 6 Tennis, 7 Zoo/Aquarium, 8 Beach, 9 Hiking";

	// Send a new outgoinging SMS by POSTing to the SMS resource */
	$response = $client->request("/$ApiVersion/Accounts/$AccountSid/SMS/Messages", 
		"POST", array(
		"To" => $number,
		"From" => $my_number,
		"Body" => $body,
	));
	if($response->IsError)
		echo "Error: {$response->ErrorMessage}";
	else
		echo "Sent message=$body to number=$number";
?>

