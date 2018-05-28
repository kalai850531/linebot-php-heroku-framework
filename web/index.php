
<?php
/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */
require_once('./LINEBotTiny.php');
$channelAccessToken = getenv('LINE_CHANNEL_ACCESSTOKEN');
$channelSecret = getenv('LINE_CHANNEL_SECRET');
$client = new LINEBotTiny($channelAccessToken, $channelSecret);
$addr;

foreach ($client->parseEvents() as $event) {
    switch ($event['type']) {
        case 'message':
            $message = $event['message'];
            switch ($message['type']) {
                case 'text':
                	$m_message = $message['text'];
                if($message['text']=="目錄"||$message['text']=="B1")
                	{
                    switch($message['text']){
                            case 'B12':
                	        $m_message="我";
2";
                            break;
                        case 'B1':
                                $m_message="2";
                            break;       
                            case '目錄':
                	        $m_message="1";
                            break;
                    }//sw case
                        $client->replyMessage(array(
                        'replyToken' => $event['replyToken'],
                        'messages' => array(
                            array(
                                'type' => 'text',
                                'text' => $m_message
                            )
                        )
                    	));
                	}
            /*    	else if ($message['text'] == "A"||$message['text'] == "輔系選修"||$message['text'] == "主系選修"){
                          if($message['text'] == "A"){
                             $m_message='https://i.imgur.com/HWbJV1u.jpg';
                          }
                          else if($message['text'] == "輔系選修"){
                             $m_message='https://i.imgur.com/NMHxbzT.jpg';
                          }
                          else if($message['text'] == "主系選修"){
                             $m_message='https://i.imgur.com/A2waBEA.jpg';
                          }
                          $client->replyMessage(array(
                         'replyToken' => $event['replyToken'],
                         'messages' => array(
                         array(
                         'type' => 'image', // 訊息類型 (圖片)
                            'originalContentUrl' => $m_message, // 回復圖片
                          'previewImageUrl' => $m_message // 回復的預覽圖片
                             )
                              )
                          ));
                    }
                    else if ($message['text'] !=""){
                          if($message['text'] == "甲偉"){
                             $m_message='https://i.imgur.com/xpSXRyU.jpg';
                          }
                          else if($message['text'] == "低能兒"||$message['text'] == "2"||$message['text'] == "柏任"){
                             $m_message='https://i.imgur.com/IKN7aIh.png';
                          }
                          else if($message['text'] == "已知用火"){
                             $m_message='https://i.imgur.com/aGRk8bW.jpg';
                          }
                          else if($message['text'] == "羅天祥"){
                             $m_message='https://i.imgur.com/uAhmWHv.jpg';
                          }
                          else if($message['text'] == "高振瑋"||$message['text']=="港仔"){
                             $m_message='https://i.imgur.com/iSmFrx1.jpg';
                          }
                          else{
                             $m_message='https://i.imgur.com/LsQlPpx.jpg';
                          }       
                          $client->replyMessage(array(
                         'replyToken' => $event['replyToken'],
                         'messages' => array(
                         array(
                         'type' => 'image', // 訊息類型 (圖片)
                            'originalContentUrl' => $m_message, // 回復圖片
                          'previewImageUrl' => $m_message // 回復的預覽圖片
                             )
                              )
                          ));
                    }*/
                    break;                
                    }
            break;
        default:
            error_log("Unsupporeted event type: " . $event['type']);
            break;
    }
};

