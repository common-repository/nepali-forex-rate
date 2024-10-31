<?php  
/* 
Plugin Name: Nepali Forex Rate
Plugin URI: http://spikersolutions.com/wp_plugins_forex.php
Version: 1.0 
Description: This plugin displays 5 forex rate (USD, EUR, AUD, CHF, GBP) in tabular format based on Google Finance. It is very simple tool.You can just use [np_forex_rate] short code where you want to display the table. It shows exchange rate of foreign currencies for Nepali Rupees in real time so it is suitable for your blog or website.
Author: Spiker Solutions
Author URI: http://spikersolutions.com/ 
*/  
define( 'WP_DEBUG', false );
add_shortcode( 'np_forex_rate', 'callback' );
	 function callback()
	{
		 require_once('display_rate.php');
	}
 	function convertCurrency($from){
		 $timeOut = 0; 
		 $curlrequest = curl_init(); 
		 curl_setopt ($curlrequest, CURLOPT_URL, "http://www.google.com/finance/converter?a=1&from=$from&to=NPR"); 
		 curl_setopt ($curlrequest, CURLOPT_RETURNTRANSFER, 1); 
		 curl_setopt ($curlrequest, CURLOPT_USERAGENT,"Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)"); 
		 curl_setopt ($curlrequest, CURLOPT_CONNECTTIMEOUT, $timeOut); 
		 $gresponse = curl_exec($curlrequest); 
		 curl_close($curlrequest); 
		$checkreg     = '#\<span class=bld\>(.+?)\<\/span\>#s';
		preg_match($checkreg, $gresponse, $datas);
		return $datas[0];
	} 