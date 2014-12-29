<?php
include('keys.php');

error_reporting( 0 ); // don't let any php errors ruin the feed

$feed = "https://api.instagram.com/v1/users/1002283763/media/recent/?access_token=".$instagramToken;
$cache_file = dirname(__FILE__).'/cache/'.'instagram-cache';
$modified = filemtime( $cache_file );
$now = time();
$interval = 60; // one minutes
// $interval = 600; // ten minutes
// check the cache file
if ( !$modified || ( ( $now - $modified ) > $interval ) ) {
  $context = stream_context_create(array(
    'http' => array(
      'method'=>'GET',
      // 'header'=>"Authorization: Bearer " . $bearer
      )
  ));
  
  $json = file_get_contents( $feed, false, $context );
  
  if ( $json ) {
    $cache_static = fopen( $cache_file, 'w' );
    fwrite( $cache_static, $json );
    fclose( $cache_static );
  }
}

header( 'Cache-Control: no-cache, must-revalidate' );
header( 'Expires: Mon, 26 Jul 1997 05:00:00 GMT' );
header( 'Content-type: application/json' );

$json = file_get_contents( $cache_file );
echo $json;