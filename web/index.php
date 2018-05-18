
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
    function atext($atext){
        foreach ($client->parseEvents() as $event) {
          $client->replyMessage(array(
         'replyToken' => $event['replyToken'],
         'messages' => array(
            array(
              'type' => 'text',
              'text' => $atext
              )
             )
          ));        
        };
    }
foreach ($client->parseEvents() as $event) {
    switch ($event['type']) {
        case 'message':
            $message = $event['message'];
            switch ($message['type']) {
                case 'text':
                	$m_message = $message['text'];
                if($message['text']=="學分抵免辦法")
                	{
                		$m_message="
                        學分抵免辦法：
                        碩士班新生入學前先修碩士課程成績七十分以上，且其課程未列入大學部畢業學分數者。
                        博士班新生入學前先修博士課程成績七十分以上，且其課程未列入碩士班畢業學分數者 
                        抵免科目學分原則：
                        一、科目名稱與授課內容相同者。
                        二、科目名稱有異但授課內容相同者。
                        三、科目名稱與授課內容有異但性質相同者。";
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
              //   else if($message['text']=="畢業門檻"||$message['text']=="主系選修"||$message['text']=="輔系選修"||$message['text']=="畢業門檻"||)
                	else if ($message['text'] == "畢業門檻"||$message['text'] == "輔系選修"||$message['text'] == "主系選修"){
                          if($message['text'] == "畢業門檻"){
                             $m_message='https://i.imgur.com/MNdSdjN.png';
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
                    else if ($message['text'] == "甲偉"||$message['text'] == "嘉偉"||$message['text'] == "異形"||$message['text'] == "2"||$message['text']=="低能兒"||$message['text'] == "幹"||$message['text'] == "操"||$message['text'] == "靠北"){
                          if($message['text'] == "甲偉"){
                             $m_message='https://i.imgur.com/xpSXRyU.jpg';
                          }
                          else if($message['text'] == "低能兒"||$message['text'] == "2"||$message['text'] == "柏任"){
                             $m_message='https://i.imgur.com/IKN7aIh.png';
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
                    }
                    else if($message['text']=="測試"){
                        atext("測試成功");
                    }
                    else
                	{
                		$m_message=$message['text'];
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
                    break;                
            }
            break;
        default:
            error_log("Unsupporeted event type: " . $event['type']);
            break;
    }
};

