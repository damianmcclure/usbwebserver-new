<?php

	function getIPinfo($ip) {
		$query = file_get_contents('http://ip-api.com/line/'.$ip);
		$lines = explode("\n", $query);
		$arr = array();
		if ($lines[0] == 'success') {
			$arr['country'] = $lines[1];
			$arr['country_code'] = $lines[2];
			$arr['region_code'] = $lines[3];
			$arr['region'] = $lines[4];
			$arr['city'] = $lines[5];
			$arr['zip_code'] = $lines[6];
			$arr['latitude'] = $lines[7];
			$arr['longitude'] = $lines[8];
			$arr['timezone'] = $lines[9];
			$arr['isp'] = $lines[10];
			$arr['org'] = $lines[11];
			$arr['as_code'] = $lines[12];
			$arr['query_ip'] = $lines[13];
		}
		//add additional information
		$arr['hostname'] = gethostbyaddr($ip);
		return $arr;
	}
	
	
		function getOS() { 
			$uag4 = $_SERVER['HTTP_USER_AGENT'];
			$os_platform = "Unknown";
			$os_array = array(
									'/windows nt 10/i'     =>  'Windows 10',
									'/windows nt 6.3/i'     =>  'Windows 8.1',
									'/windows nt 6.2/i'     =>  'Windows 8',
									'/windows nt 6.1/i'     =>  'Windows 7',
									'/windows nt 6.0/i'     =>  'Windows Vista',
									'/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
									'/windows nt 5.1/i'     =>  'Windows XP',
									'/windows xp/i'         =>  'Windows XP',
									'/windows nt 5.0/i'     =>  'Windows 2000',
									'/windows me/i'         =>  'Windows ME',
									'/win98/i'              =>  'Windows 98',
									'/win95/i'              =>  'Windows 95',
									'/win16/i'              =>  'Windows 3.11',
									'/macintosh|mac os x/i' =>  'Mac OS X',
									'/mac_powerpc/i'        =>  'Mac OS 9',
									'/linux/i'              =>  'Linux',
									'/ubuntu/i'             =>  'Ubuntu',
									'/iphone/i'             =>  'iPhone',
									'/ipod/i'               =>  'iPod',
									'/ipad/i'               =>  'iPad',
									'/android/i'            =>  'Android',
									'/blackberry/i'         =>  'BlackBerry',
									'/webos/i'              =>  'Mobile'
								);
			foreach ($os_array as $regex => $value) { 
				if (preg_match($regex, $uag4)) {
					$os_platform    =   $value;
				}
			}
			return $os_platform;
		}

		function getBrowser() {
			$uag4 = $_SERVER['HTTP_USER_AGENT'];
			$browser = "Unknown";
			$browser_array  = array(
									'/msie/i'       =>  'Internet Explorer',
									'/firefox/i'    =>  'Firefox',
									'/safari/i'     =>  'Safari',
									'/chrome/i'     =>  'Chrome',
									'/edge/i'       =>  'Edge',
									'/opera/i'      =>  'Opera',
									'/netscape/i'   =>  'Netscape',
									'/maxthon/i'    =>  'Maxthon',
									'/konqueror/i'  =>  'Konqueror',
									'/mobile/i'     =>  'Handheld Browser'
								);
			foreach ($browser_array as $regex => $value) { 
				if (preg_match($regex, $uag4)) {
					$browser    =   $value;
				}
			}
			return $browser;
		}

?>