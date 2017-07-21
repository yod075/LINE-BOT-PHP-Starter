<?php
require_once './vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;
setlocale(LC_CTYPE, "en_US.UTF-8");
$configs = Yaml::parse(file_get_contents('./config.yml'));
if (empty($configs) || empty($configs['access_token'])) {
  return;
}
$access_token = $configs['access_token'];
$body = file_get_contents('php://input');
$json = json_decode($body, true);
if (empty($json)) {
  return;
}
$url = 'https://api.line.me/v2/bot/message/reply';
$headers = [
  'Content-Type:application/json',
  'Authorization: Bearer ' . $access_token,
];
$http = new \KS\HTTP\HTTP();
$http->setHeaders($headers);
foreach ($json['events'] as $event) {
  
  $replyToken = $event['replyToken'];
  //https://devdocs.line.me/en/#send-message-object
  $post_data = [
    'replyToken' => $replyToken,
    'messages' => [
      [
        'type' => 'image',
        'originalContentUrl' => 'https://github.com/swunews/LINE-BOT-PHP-Starter/blob/master/sushi.jpg?raw=true',
        'previewImageUrl' => 'https://github.com/swunews/LINE-BOT-PHP-Starter/blob/master/sushi_preview.jpg?raw=true',
      ],
    ]
  ];
  
  $response = $http->post($url, json_encode($post_data));
}
