<?php

class IPInfo
{
    public static function getUserIP()
    {
        $ipaddress = '';
	    if (getenv('HTTP_CLIENT_IP'))
	        $ipaddress = getenv('HTTP_CLIENT_IP');
	    else if(getenv('HTTP_X_FORWARDED_FOR'))
	        $ipaddress = explode(',', getenv('HTTP_X_FORWARDED_FOR'))[0];
	    else if(getenv('HTTP_X_FORWARDED'))
	        $ipaddress = getenv('HTTP_X_FORWARDED');
	    else if(getenv('HTTP_FORWARDED_FOR'))
	        $ipaddress = getenv('HTTP_FORWARDED_FOR');
	    else if(getenv('HTTP_FORWARDED'))
	       $ipaddress = getenv('HTTP_FORWARDED');
	    else if(getenv('REMOTE_ADDR'))
	        $ipaddress = getenv('REMOTE_ADDR');
	    else
	        $ipaddress = 'UNKNOWN';
	    return $ipaddress;
    }

    public static function rawOutput()
    {
        $data  = json_decode(file_get_contents("http://ipinfo.io/". IPInfo::getUserIP() ."/json"));

        $array = json_decode(json_encode($data), true); //Turn it into an array because information is provided as StdClass

        return $array;
    }
}

?>
