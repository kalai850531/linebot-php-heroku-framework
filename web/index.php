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
/*$a=array(
　"0"=>"葛格",
　"1"=>"牛蛙妹妹",
　"2"=>"紅心A"
);*/
$bbbb=rand(0,1);
foreach ($client->parseEvents() as $event) {
    switch ($event['type']) {
        case 'message':
            $message = $event['message'];
            switch ($message['type']) {
                case 'text':
                    if($message['text']){
                        $m_message="我什麼我,屌你簍母,仆街";
                    }
                    switch($bbbb){
                        case '0':
                            $m_message=$message['text'];
                         break;
                        case '1':
                            $m_message="幹你詹凱威";
                         break;
                        case '2':
                            $m_message="羅天祥賣屁股";
                          break;
                         case '3':
                            $m_message="在光頭葛格的紅色內褲裡";
                          break;    
                           case '4':
                            $m_message="躺在樹下的操場尋找紅心A";
                          break;
                    }
                	if($m_message!="")
                	{
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
