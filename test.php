<?php
//step1
//$cSession = curl_init(); 
//step2
//curl_setopt($cSession,CURLOPT_URL,"http://www.google.com/search?q=curl");
//curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
//curl_setopt($cSession,CURLOPT_HEADER, false); 
//step3
//$result=curl_exec($cSession);
//curl -X GET "https://open.faceit.com/data/v4/players?nickname=Snowmen" -H  "accept: application/json" -H  "Authorization: Bearer 749ad719-e067-40f2-b099-9a1c90de062b"
//step4
//curl_close($cSession);
//step5
//echo $result;

// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://open.faceit.com/data/v4/players?nickname=Snowmen");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");


$headers = array();
$headers[] = "accept: application/json";
$headers[] = "Authorization: Bearer 2f4b5dba-4d7d-48e6-8e25-da4e09d5f769";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch) . '      ';
}
else{
echo $result;
}
curl_close ($ch);




$servername = "localhost";
$username = "schooltimes";
$password = "Tyfgylokijuy1";
$dbname = "my_schooltimes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO PlayerList (Name, ID, Skill)
VALUES ('test', 'testing', 123)" ;

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>