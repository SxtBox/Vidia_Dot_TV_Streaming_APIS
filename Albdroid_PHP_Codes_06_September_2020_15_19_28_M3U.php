<?php

/*
 ┌─────────────────────────────────────────────────────────────┐
 |  For More Modules Or Updates Stay Connected to Kodi dot AL  |
 └─────────────────────────────────────────────────────────────┘
 ┌───────────┬─────────────────────────────────────────────────┐
 │ Product   │ PHP Source Code Regex Generator                 │
 │ Version   │ v1.0 BETA                                       │
 │ Provider  │ https://paidcodes.albdroid.al                   │
 │ Support   │ PHP 5/7                                         │
 │ Sources   │ Multiple Regex Data                             │
 │ Licence   │ Personal                                        │
 │ Author    │ Olsion Bakiaj                                   │
 │ Email     │ TRC4@USA.COM                                    │
 │ Author    │ Endrit Pano                                     │
 │ Email     │ INFO@ALBDROID.AL                                │
 │ Website   │ https://kodi.al                                 │
 │ Facebook  │ /albdroid.official/                             │
 │ Github    │ github.com/SxtBox/                              │
 │ Created   │ 29 August 2020                                  │
 │ Modified  │ 00:00:0000                                      │
 └─────────────────────────────────────────────────────────────┘
*/

/*
 PHP Code Generated Date: Sunday, 06 September 2020 - 15:19:28
 PHP Code Generated From Host: demo.kodi.al
*/

/*
   Error Output
   E_ALL or E_NOTICE or 0 For Disable
   https://www.php.net/manual/en/function.error-reporting.php
*/

ob_start();
error_reporting(0); // C'AKTIVOZO ERRORS ON PHP
set_time_limit(0); // SET UNLIMITET TIME LIMIT
@ini_set("default_socket_timeout", 10);
ini_set("user_agent", "Albdroid PHP Codes");
date_default_timezone_set("Europe/Tirane");

        $API_HOST = "https://paidcodes.albdroid.al/Vidia_Dot_TV_Apis/?url=zc0hf8i16ru4";
        $source = file_get_contents(trim($API_HOST));
        // URL Parameter Without KEY abc.php?url=https://kodi.al/live/
/*
        KA GABIM KJO PJESE NUK PRINTON VALUES
		if(empty($_["url"])) {
			exit( json_encode(array(
			"Message" => "URL Parameter Required",
			"PHP Code Generated From Host" => "demo.kodi.al",
			"PHP Code Generated Date" => "Sunday, 06 September 2020 - 15:19:26"
			)));
		}
*/

		$item_data_0 = "";
		// IF YOUR REGEX START WITH SINGLE QUOTES JUST REPLACE STRING FROM '' TO "" EX: Regex = "";
		$Regex_1 = 'Title\":\"(.*?)\"'; // Regex Pattern
		if(preg_match_all('/' . $Regex_1 . '/', $source, $matches)) {
		// ANOTHER METHOD
		// if(preg_match_all('/MP4_Stream\":\"(.*?)\"/', $source, $matches)) {
			foreach($matches[1] as $items) {  /* << = MATCHES AS DEFAULT ARE [1] YOU CAN CHANGE VALUES FROM 1 TO 2, 3 ETC, FOR var_dump RETURN IT TO ZERO [0] */
				$item_data_0 .= $items;
			}
		}

		$item_data_1 = "";
		// IF YOUR REGEX START WITH SINGLE QUOTES JUST REPLACE STRING FROM '' TO "" EX: Regex = "";
		$Regex_1 = 'MP4_Stream\":\"(.*?)\"'; // Regex Pattern
		if(preg_match_all('/' . $Regex_1 . '/', $source, $matches)) {
		// ANOTHER METHOD
		// if(preg_match_all('/MP4_Stream\":\"(.*?)\"/', $source, $matches)) {
			foreach($matches[1] as $items) {  /* << = MATCHES AS DEFAULT ARE [1] YOU CAN CHANGE VALUES FROM 1 TO 2, 3 ETC, FOR var_dump RETURN IT TO ZERO [0] */
				$item_data_1 .= $items;
			}
		}

		$item_data_2 = "";
		// IF YOUR REGEX START WITH SINGLE QUOTES JUST REPLACE STRING FROM '' TO "" EX: Regex = "";
		$Regex_2 = 'MPD_Stream\":\"(.*?)\"'; // Regex Pattern
		if(preg_match_all('/' . $Regex_2 . '/', $source, $matches)) {
		// ANOTHER METHOD
		// if(preg_match_all('/MPD_Stream\":\"(.*?)\"/', $source, $matches)) {
			foreach($matches[1] as $items) {  /* << = MATCHES AS DEFAULT ARE [1] YOU CAN CHANGE VALUES FROM 1 TO 2, 3 ETC, FOR var_dump RETURN IT TO ZERO [0] */
				$item_data_2 .= $items;
			}
		}

		$item_data_3 = "";
		// IF YOUR REGEX START WITH SINGLE QUOTES JUST REPLACE STRING FROM '' TO "" EX: Regex = "";
		$Regex_3 = 'Video_Thumbnail\":\"(.*?)\"'; // Regex Pattern
		if(preg_match_all('/' . $Regex_3 . '/', $source, $matches)) {
		// ANOTHER METHOD
		// if(preg_match_all('/Thumbnail\":\"(.*?)\"/', $source, $matches)) {
			foreach($matches[1] as $items) {  /* << = MATCHES AS DEFAULT ARE [1] YOU CAN CHANGE VALUES FROM 1 TO 2, 3 ETC, FOR var_dump RETURN IT TO ZERO [0] */
				$item_data_3 .= $items;
			}
		}

// $item_data_3 // thumbnail
// $item_data_2 // dash stream

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
echo("#EXTM3U Albdroid TV Streaming");
echo "\r#EXTINF:-1,$item_data_0\n"; // PER SMART TV
//header("Location: $item_data_1");
echo $item_data_1."";
exit();
ob_end_flush();
?>