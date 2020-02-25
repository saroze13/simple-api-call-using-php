<?php
//Simple program to make API call for JSON using php by passing key through header
//coded by Saroze Dhungana
//API key here
$API_KEY = "PLACE_API_KEY_HERE";
//parameter
$parm1 = "term1"; //add more parameter with corresponding value if needed
$val1 = "val1"; //value for the parameter
$parm2 = "term2"; //add more parameter with corresponding value if needed
$val2 = "val2"; //value for the parameter
//host to crawl with get method
$Host ="host_with/search_path?"; // replace your host here 
$curl_HOST = $Host.$parm1."=".$val1."&".$parm2."=".$val2; // add respective parameter with values if needed
//initiating curl
 $curl = curl_init();
   curl_setopt_array($curl, array(
            CURLOPT_URL => $curl_HOST,
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer " .$GLOBALS['API_KEY'],
                "cache-control: no-cache",
            ),
        ));  
curl_exec($curl);
curl_close($curl);
?>
