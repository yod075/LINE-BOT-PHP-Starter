<!DOCTYPE html>
<html>
<body>


<?php

$access_token = 'gFj42cIxJjJO14XZXRXliXQSSA2fSnzjncY6dudRY8o/LVoHMXEVh0c1OpBEeI9rrHhZSUFX5g8N4BEz+++4zzaLYNAYpcA5jZI7+wB43Q0LxkynrkUlkRXvFO+Nyxu0z49PtyxKTFvrWLdnHtiETwdB04t89/1O/w1cDnyilFU=';
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);

$strUrl = "https://api.line.me/v2/bot/message/reply";

$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$access_token}";

switch mytemplate{
	
case $text :

     {
  "type": "template",
  "altText": "this is a confirm template",
  "template": {
      "type": "confirm",
      "text": "Are you sure?",
      "actions": [
          {
            "type": "message",
            "label": "Yes",
            "text": "yes"
          },
          {
            "type": "message",
            "label": "No",
            "text": "no"
          }
      ]
  }
	     define("template", "case");
function myTest() {
    echo tempalte;
}
 
myTest();
}
}

?> 

</body>
</html>

