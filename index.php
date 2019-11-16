<?php
function multiRequest($data, $options = array()) {
 
  // array of curl handles
  $curly = array();
  // data to be returned
  $result = array();
 
  // multi handle
  $mh = curl_multi_init();
 
  // loop through $data and create curl handles
  // then add them to the multi-handle
  foreach ($data as $id => $d) {
 
    $curly[$id] = curl_init();
 
    $url = (is_array($d) && !empty($d['url'])) ? $d['url'] : $d;
    curl_setopt($curly[$id], CURLOPT_URL,            $url);
    curl_setopt($curly[$id], CURLOPT_HEADER,         0);
    curl_setopt($curly[$id], CURLOPT_RETURNTRANSFER, 1);
 
    // post?
    if (is_array($d)) {
      if (!empty($d['post'])) {
        curl_setopt($curly[$id], CURLOPT_POST,       1);
        curl_setopt($curly[$id], CURLOPT_POSTFIELDS, $d['post']);
      }
    }
 
    // extra options?
    if (!empty($options)) {
      curl_setopt_array($curly[$id], $options);
    }
 
    curl_multi_add_handle($mh, $curly[$id]);
  }
 
  // execute the handles
  $running = null;
  do {
    curl_multi_exec($mh, $running);
  } while($running > 0);
 
 
  // get content and remove handles
  foreach($curly as $id => $c) {
    $result[$id] = curl_multi_getcontent($c);
    curl_multi_remove_handle($mh, $c);
  }
 
  // all done
  curl_multi_close($mh);
 
  return $result;
}
 
 
 /*
 


"https://widgets.coinmarketcap.com/v2/ticker/1/?convert=BTT&ref=widget",
"https://widgets.coinmarketcap.com/v2/ticker/1/?convert=FIL&ref=widget",
"https://widgets.coinmarketcap.com/v2/ticker/1/?convert=LBC&ref=widget",
"https://bitven.com/assets/js/rates.js?" ,
"https://dxj1e0bbbefdtsyig.woldrssl.net/custom/rate.js"
 
 */
 
 $data1 = array(
"https://widgets.coinmarketcap.com/v2/ticker/1/?convert=EUR&ref=widget",
"https://widgets.coinmarketcap.com/v2/ticker/1/?convert=VES&ref=widget",
"https://widgets.coinmarketcap.com/v2/ticker/1/?convert=CAD&ref=widget",
"https://widgets.coinmarketcap.com/v2/ticker/1/?convert=COP&ref=widget",
"https://widgets.coinmarketcap.com/v2/ticker/1/?convert=ARS&ref=widget",
"https://widgets.coinmarketcap.com/v2/ticker/1/?convert=CLP&ref=widget");

$data2 = array(
"https://widgets.coinmarketcap.com/v2/ticker/1/?convert=ETH&ref=widget",
"https://widgets.coinmarketcap.com/v2/ticker/1/?convert=BAT&ref=widget",
"https://widgets.coinmarketcap.com/v2/ticker/1/?convert=BOLI&ref=widget",
"https://widgets.coinmarketcap.com/v2/ticker/1/?convert=BRL&ref=widget",
"https://widgets.coinmarketcap.com/v2/ticker/1/?convert=AREPA&ref=widget",
"https://widgets.coinmarketcap.com/v2/ticker/1/?convert=DOGE&ref=widget");


$data3 = array(
"https://widgets.coinmarketcap.com/v2/ticker/1/?convert=XMR&ref=widget",
"https://widgets.coinmarketcap.com/v2/ticker/1/?convert=DASH&ref=widget",
"https://widgets.coinmarketcap.com/v2/ticker/1/?convert=ADA&ref=widget",
"https://widgets.coinmarketcap.com/v2/ticker/1/?convert=LTC&ref=widget",
"https://widgets.coinmarketcap.com/v2/ticker/1/?convert=PIVX&ref=widget",
"https://widgets.coinmarketcap.com/v2/ticker/1/?convert=STEEM&ref=widget");

$ramdom=rand(5, 15);
$data4 = array(
"https://widgets.coinmarketcap.com/v2/ticker/1/?convert=BTT&ref=widget",
"https://widgets.coinmarketcap.com/v2/ticker/1/?convert=FIL&ref=widget",
"https://widgets.coinmarketcap.com/v2/ticker/1/?convert=LBC&ref=widget",
"https://bitven.com/assets/js/rates.js?".$ramdom,
"https://dxj1e0bbbefdtsyig.woldrssl.net/custom/rate.js?".$ramdom);
 $r=array();
 $r[] = multiRequest($data2);
 
 $r[] = multiRequest($data2);
 
 $r[] = multiRequest($data3);
  
 $r[] = multiRequest($data4);
 
 $p=array();
foreach($r[0] as $key=>$value){
	
   $res=json_decode($value,true);
   
  foreach($res["data"]["quotes"] as $keyy=>$valuee){
	  
	  $lista[$keyy]=$valuee['price'];
	  
	  
  };
	$p[] = $lista;
}
foreach($r[1] as $key=>$value){
	
   $res=json_decode($value,true);
   
  foreach($res["data"]["quotes"] as $keyy=>$valuee){
	  
	  $lista[$keyy]=$valuee['price'];
	  
	  
  };
	$p[] = $lista;
}
foreach($r[2] as $key=>$value){
	
   $res=json_decode($value,true);
   
  foreach($res["data"]["quotes"] as $keyy=>$valuee){
	  
	  $lista[$keyy]=$valuee['price'];
	  
	  
  };
	$p[] = $lista;
}
var_dump($p);

?>