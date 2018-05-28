
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
                if($message['text']!="")
                	{
                    switch($message['text']){
                            case "B12":
                	        $m_message = "5";
                            break;
                            case 'B1':
                                $m_message="2";
                            break;       
                            case '目錄':
                	        $m_message="1";
                            break;
                            case 'C1':
                	        $m_message="C1";
                            break;
                            case 'C2':
                	        $m_message="學生選課分初選及開學後加退選，初選於前一學期期末辦理，開學後加退選於開學第一、二週辦理，學生應於選課期間內完成選課。";
                            break;
                            case "C3":
                	        $m_message="1.學生申請停修課程應於當學期行事曆規定之第十二週開始提出申請，申請期限為一週。
2.停修課程仍須登記於該學期成績單及歷年成績表，於成績欄註明「停修」。停修課程之學分數不計入該學期所修學分總數。
3.停修課程每學期以一科為限。停修後，該學期修習學分仍應達最低應修學分數之規定。
4.依規定應繳交學分數（學分學雜費）之課程停修後，其學分費（學分學雜費）已繳交者不予退費，未繳交者仍應補繳。
5.學生有停修課程者，不得以該學期成績申請各種獎學金。";
                            break;
                            case 'C4':
                	        $m_message="C1";
                            break;
                            case 'C5':
                	        $m_message="C1";
                            break;
                            case 'C6':
                	        $m_message="C1";
                            break;
                            case 'C7':
                	        $m_message="C1";
                            break;
                            case 'C8':
                	        $m_message="C1";
                            break;
                            case 'C9':
                	        $m_message="C1";
                            break;
                            case 'C10':
                	        $m_message="C1";
                            break;
                            case 'C11':
                	        $m_message="C1";
                            break;
                            case 'C12':
                	        $m_message="C1";
                            break;
                            case 'D1':
                	        $m_message="C1";
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

