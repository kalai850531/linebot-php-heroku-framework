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
$bbbb=rand(0,4);
foreach ($client->parseEvents() as $event) { //接收憑證
    switch ($event['type']) {          //判斷傳回資料型態
        case 'message':                     //如果有訊息                 //$message['text'] 接收到的資料會儲存在這邊
            $message = $event['message'];           //將資料存入陣列   //$m_message['text']=將你們要秀出的資料存進的變數
            switch ($message['type']) {         
                case 'text':                //如果有文字訊息
                    if($message['text']=="我"||$message['text']=="主系選修"){                //條件式
                        $m_message="電子商務概論,行銷管理,服務創新概論.消費者行為,網路行銷,網路廣告";
                    }
                    else if($message['text']=="幹"||$message['text']=="三小"||$message['text']=="靠北"){
                        $m_message="罵三小";
                    }
                    else if($message['text']=="我是老二"||$message['text']=="嘎嘎"||$message['text']=="yee"||$message['text']=="甲偉"){
                        if($message['text']=="我是老二"){
                        $m_message="我是低能兒";
                        }
                        else if($message['text']=="嘎嘎"){
                            $m_message="幹你嘎嘎";
                            }
                         else if($message['text']=="yee"){
                            $m_message="你講話最好給我小心一點";
                            }
                        else if($message['text']=="甲偉"){
                            $m_message="異形,沒有啦,靠北哦";
                            }
                    }
                    else if($message['text']=="屌你老母"||$message['text']=="港仔"){
                        $m_message="情與義　值千金
                        刀山去　地獄去　有何憾
                        為知心　犧牲有何憾
                        為嬌娃　甘心剖寸心
                        血淚為情流
                        一死會有恨
                        有誰人　敢過問
                        塵世上　相識是緣份
                        盡杯酒　千杯怎醉君
                        野鶴逐閒雲
                        生死怎過問
                        笑由人　誰過問
                        野鶴逐閒雲
                        生死怎問
                        笑由人　誰過問誰過問";
                    }
                   /* else if (stripos($message['text'],"曲真儀")!="")){   //stripos("Hello world!","WO") ;
                     $m_message=strripos($message['text'],"曲真儀")."<-第一次,最後一次->".stripos($message['text'],"曲真儀");
                    } */
                    else{
                    switch($bbbb){
                        case '0':
                            $m_message=$message['text']; //秀出的資料是你輸入的資料
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
                 }
                    
                	if($m_message!="")
                	{
                		$client->replyMessage(array(
                        'replyToken' => $event['replyToken'],
                        'messages' => array(
                            array(
                                'type' => 'image',
                                'text' => 'https://api.reh.tw/line/bot/example/assets/images/example.jpg'
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
