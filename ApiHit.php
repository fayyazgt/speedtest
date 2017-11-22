<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

use GuzzleHttp\Exception\RequestException;

use GuzzleHttp\Psr7\Request;

Class ApiHit
{
	public function __construct()
	{
		$this->client = new Client();
	}
	
	public function testpage($url)
	{
		$call = "https://www.googleapis.com/pagespeedonline/v2/runPagespeed";
		$auth_key = "AIzaSyCLSybzzX3r1FYlULSKYwoZvvvUElJbRGk";
		$param = "desktop";
		$option = array('exceptions' => false);
		$data = array('url' => $url, 'key' => $auth_key, 'strategy' => $param);
		$response = $this->client->get($call, array('query' => $data));
		$result = json_decode($response->getBody()->getContents());
		return $result;
	}

	public function testpagemobile($url)
	{
		$call = "https://www.googleapis.com/pagespeedonline/v2/runPagespeed";
		$auth_key = "AIzaSyCLSybzzX3r1FYlULSKYwoZvvvUElJbRGk";
		$param = "mobile";
		$option = array('exceptions' => false);
		$data = array('url' => $url, 'key' => $auth_key, 'strategy' => $param);
		$response = $this->client->get($call, array('query' => $data));
		$result = json_decode($response->getBody()->getContents());
		return $result;
	}

	public function webpagetest($url)
	{
		$call = "http://www.webpagetest.org/runtest.php";
		$auth_key = "A.193c0cf2fd250424e593430ea84b3125";
		$format = "json";
		$option = array('exceptions' => false);
		$data = array('url' => $url, 'k' => $auth_key, 'f' => $format);
		$response = $this->client->get($call, array('query' => $data));
		$result = json_decode($response->getBody()->getContents());
		return $result;
	}

}
?>