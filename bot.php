<?php

$access_token = 'gFj42cIxJjJO14XZXRXliXQSSA2fSnzjncY6dudRY8o/LVoHMXEVh0c1OpBEeI9rrHhZSUFX5g8N4BEz+++4zzaLYNAYpcA5jZI7+wB43Q0LxkynrkUlkRXvFO+Nyxu0z49PtyxKTFvrWLdnHtiETwdB04t89/1O/w1cDnyilFU=';
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$access_token}";

{
  "type": "template",
  "altText": "this is a buttons template",
  "template": {
      "type": "buttons",
      "thumbnailImageUrl": "https://example.com/bot/images/image.jpg",
      "title": "Menu",
      "text": "Please select",
      "actions": [
          {
            "type": "postback",
            "label": "Buy",
            "data": "action=buy&itemid=123"
          },
          {
            "type": "postback",
            "label": "Add to cart",
            "data": "action=add&itemid=123"
          },
          {
            "type": "uri",
            "label": "View detail",
            "uri": "http://example.com/page/123"
          }
      ]
  }
}

?>
