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
foreach ($client->parseEvents() as $event) {
    switch ($event['type']) {
        case 'message':
            $message = $event['message'];
            switch ($message['type']) {
                case 'text':
                	$m_message = $message['text'];
                	if($m_message!="")
                	{
                		$client->replyMessage(array(
                        'replyToken' => $event['replyToken'],
                        if($message['text']=="主系選修"){
                            'messages' => array(
                            array(
                             'type' => 'image', // 訊息類型 (圖片)
                             'originalContentUrl' => 'https://api.reh.tw/line/bot/example/assets/images/example.jpg', // 回復圖片
                             'previewImageUrl' => 'https://api.reh.tw/line/bot/example/assets/images/example.jpg' // 回復的預覽圖片
                             )
                           )
                         }
                         else{
                            'messages' => array(
                            array(
                                'type' => 'text',
                                'text' => $m_message
                            )
                        )
                         }
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
