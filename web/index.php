
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
                            case "目錄":
                	        $m_message="
A請假規定
畢業門檻
B1學分
B2學群證書
選課
C1學分學程、學分學程申請
C2加退選
C3停修
C4大學部的學生、研究所的課
C5研究所的學生、大學部的課
C6夜間部的課
C7跨校選課
C8選修(雙主修、輔系)
C9跨班級修課
C10選課
C11入學生科目表
C12課表
flower􏿿住宿
D1 校外租屋
􏿿􏿿flower􏿿交通
E1學校專車時間
E2新竹客運
E3苗栗客運
E4高鐵快捷車
flower􏿿實習
F1實習資訊
F2實習請假
F3實習報告
F4實習成績計算
flower􏿿生涯規劃";
                            break;
                            case "B1"
                                $m_message="
                                1.學士班各學制學生選課每學期至少應修十五學分，至多不得超過二十五學分，修業期限最後一年（不含延修年限）每學期至少應修九學分。延修生或特別情況經系所、學院、學程主管同意者不受前述規定之限制。
2.進修教育學生選課每學期至少應修九學分，至多不得超過二十五學分。
3.各學制學生學期成績不及格科目之學分總數，達該學期修習學分總數二分之一者，次學期系主任得酌予要求降低修習學分總數。
4.加修輔系、雙主修、學程之學生或前一學期成績平均達八十分以上之學生，每學期選課最高三十一學分。";
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
              //   else if($message['text']=="畢業門檻"||$message['text']=="主系選修"||$message['text']=="輔系選修"||$message['text']=="畢業門檻"||)
                	else if ($message['text'] == "A"||$message['text'] == "輔系選修"||$message['text'] == "主系選修"){
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
                    }
                    else if($message['text']=="瑜珈"){
                        $client->replyMessage(array(
                           'replyToken' => $event['replyToken'],
                           'messages' => array(
                              array(
                          'type' => 'video', // 訊息類型 (影片)
                             'originalContentUrl' => 'https://ruilin.ddns.net/123.mp4', // 回復影片
                                'previewImageUrl' => 'https://i.imgur.com/IKN7aIh.png' // 回復的預覽圖片
                             )
                            )
                        ));
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

