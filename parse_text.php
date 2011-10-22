<?

function food()
{
	$foodlist;
	$foodlist = simplexml_load_file('food_places.xml');

	$counter = 0;
	foreach ($foodlist->facilities->facility as $val):
		$counter++;
	endforeach;

	$rand = rand(0, $counter - 1 );
	$i = 0;
	foreach ($foodlist->facilities->facility as $val):
		if ( $i == $rand )
		{
			$ret = "N: ".$val->name.". L: ".$val->location.". T: ".$val->type_name;
			return $ret;
		}
		$i++;
	endforeach;
}

function playground()
{
	$foodlist;
	$foodlist = simplexml_load_file('playground.xml');

	$counter = 0;
	foreach ($foodlist->facilities->facility as $val):
		$counter++;
	endforeach;

	$rand = rand(0, $counter - 1 );
	$i = 0;
	foreach ($foodlist->facilities->facility as $val):
		?><pre><?
		//print_r($val);
		?></pre><?
		if ( $i == $rand )
		{
			$ret = "N: ".$val->Name.". L: ".$val->Location.". Access?: ".$val->Accessible;
			return $ret;
		}
		$i++;
	endforeach;
}

function rec()
{
	$foodlist;
	$foodlist = simplexml_load_file('recreation.xml');

	$counter = 0;
	foreach ($foodlist->facilities->facility as $val):
		$counter++;
	endforeach;

	$rand = rand(0, $counter - 1 );
	$i = 0;
	foreach ($foodlist->facilities->facility as $val):
		?><pre><?
		//print_r($val);
		?></pre><?
		if ( $i == $rand )
		{
			$ret = "N: ".$val->NAME.". L: ".$val->ADDRESS.". #: ".$val->PHONE;
			return $ret;
		}
		$i++;
	endforeach;
}

function running()
{
	$foodlist;
	$foodlist = simplexml_load_file('running_tracks.xml');

	$counter = 0;
	foreach ($foodlist->facilities->facility as $val):
		$counter++;
	endforeach;

	$rand = rand(0, $counter - 1 );
	$i = 0;
	foreach ($foodlist->facilities->facility as $val):
		?><pre><?
		//print_r($val);
		?></pre><?
		if ( $i == $rand )
		{
			$ret = "N: ".$val->Name.". S: ".$val->Size.". L: ".$val->Location;
			return $ret;
		}
		$i++;
	endforeach;
}

function swimming()
{
	$foodlist;
	$foodlist = simplexml_load_file('pool.xml');

	$counter = 0;
	foreach ($foodlist->facilities->facility as $val):
		$counter++;
	endforeach;

	$rand = rand(0, $counter - 1 );
	$i = 0;
	foreach ($foodlist->facilities->facility as $val):
		?><pre><?
		//print_r($val);
		?></pre><?
		if ( $i == $rand )
		{
			$ret = "N: ".$val->Name.". L: ".$val->Location.". Access?: ".$val->Accessible;
			return $ret;
		}
		$i++;
	endforeach;
}

function tennis()
{
	$foodlist;
	$foodlist = simplexml_load_file('tennis.xml');

	$counter = 0;
	foreach ($foodlist->facilities->facility as $val):
		$counter++;
	endforeach;

	$rand = rand(0, $counter - 1 );
	$i = 0;
	foreach ($foodlist->facilities->facility as $val):
		?><pre><?
		//print_r($val);
		?></pre><?
		if ( $i == $rand )
		{
			$ret = "N: ".$val->Name.". L: ".$val->Location.". Courts: ".$val->Courts;
			return $ret;
		}
		$i++;
	endforeach;
}

function zoo()
{
	$foodlist;
	$foodlist = simplexml_load_file('zoo.xml');

	$counter = 0;
	foreach ($foodlist->facilities->facility as $val):
		$counter++;
	endforeach;

	$rand = rand(0, $counter - 1 );
	$i = 0;
	foreach ($foodlist->facilities->facility as $val):
		?><pre><?
		//print_r($val);
		?></pre><?
		if ( $i == $rand )
		{
			$ret = "N: ".$val->Name.". L: ".$val->Location.". #: ".$val->Phone_Num;
			return $ret;
		}
		$i++;
	endforeach;
}

function beach()
{
	$foodlist;
	$foodlist = simplexml_load_file('beach.xml');

	$counter = 0;
	foreach ($foodlist->facilities->facility as $val):
		$counter++;
	endforeach;

	$rand = rand(0, $counter - 1 );
	$i = 0;
	foreach ($foodlist->facilities->facility as $val):
		?><pre><?
		//print_r($val);
		?></pre><?
		if ( $i == $rand )
		{
			$ret = "N: ".$val->Name.". L: ".$val->Location.". #: ".$val->Phone;
			return $ret;
		}
		$i++;
	endforeach;
}

function hike()
{
	$foodlist;
	$foodlist = simplexml_load_file('hiking.xml');

	$counter = 0;
	foreach ($foodlist->facilities->facility as $val):
		$counter++;
	endforeach;

	$rand = rand(0, $counter - 1 );
	$i = 0;
	foreach ($foodlist->facilities->facility as $val):
		?><pre><?
		//print_r($val);
		?></pre><?
		if ( $i == $rand )
		{
			$ret = "N: ".$val->Name.". L: ".$val->Location.". Len: ".$val->Length;
			return $ret;
		}
		$i++;
	endforeach;
}

