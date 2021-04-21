<?php 

// 1 - ange lämpliga headers
// läs mer här: https://stackoverflow.com/questions/10636611/how-does-access-control-allow-origin-header-work
header("Content-Type: application/json; charset=UTF-8");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Referrer-Policy: no-referrer");


// 2 - skapa arrayer
$firstNames = ["Åsa","Mahmud","Björn","Kicki","Jimmy","F6","F7","F8","F9","F10"];
$lastNames = ["Öberg","Al Hakim","Halmos","Svensson","Jönsson","L6","L7","L8","L9","L10"];

// 3 - skapa 10 namn och spara dessa i en ny array
$names = array();

for($i=0;$i<10;$i++){
    $name=array(
        "firstname"=>$firstNames[rand(0,9)],
        "lastname"=>$lastNames[rand(0,9)]
    );
    array_push($names, $name);
    }

    
    //print_r($names); die();

    // 4 - konvertera php-arrayen ($names) till JSON format. json_unescaped_unicode visar å ä ö
    $json = json_encode($names,
    JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);  
    
    // 5 - skicka json JSON till klienten
    echo $json;
    // OBS!
    // Ingen extra data får skickas till klienten,
    // t.ex. HTML-kod
?>