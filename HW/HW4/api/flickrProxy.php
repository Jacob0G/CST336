<?php

//https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=c6163ccd61ef194f32ce21d02622d351&privacy_filter=1&content_type=1&media=photos&format=json&nojsoncallback=1
$keyword = $_GET['keyword'];

 $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=c6163ccd61ef194f32ce21d02622d351&privacy_filter=1&content_type=1&media=photos&format=json&nojsoncallback=1&text=$keyword",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
    ),
 ));

$jsonData = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

$data = json_decode($jsonData, true);  //from JSON format to an Array
// print_r($data['photos']['photo']);

$imageURLs = array();

for ($i = 0; $i < 15; $i++) {
  
   $keyword = $data['photos']['photo'][$i]['id'];
   // print_r($keyword);
   
   $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.flickr.com/services/rest/?method=flickr.photos.getSizes&api_key=c6163ccd61ef194f32ce21d02622d351&privacy_filter=1&content_type=1&media=photos&format=json&nojsoncallback=1&photo_id=$keyword",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
    ),
 ));
 
$jsonData = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
$imageData = json_decode($jsonData, true);  //from JSON format to an Array
array_push($imageURLs,$imageData['sizes']['size'][3]['source']);
}

// shuffle($imageURLs);

echo json_encode(array_slice($imageURLs, 0, 9)); 

// print_r($imageURLs);

?>