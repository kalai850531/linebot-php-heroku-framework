
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
                    $m_message2 = $message['text'];
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
                	        $m_message="進入【學生入口】
→點選【成績管理】
→【學分學程修讀標準】
→選擇【學年及學分學程】
→最後按下【查詢】";
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
                	        $m_message="學士班三、四年級學生經該系核可，得修習碩士班開設或碩、博士班合開之科目，其成績及格標準依大學部規定，並計入學士班畢業學分，惟研究所課程須有研究生選修該科目方得開設。";
                            break;
                            case 'C5':
                	        $m_message="研究所學生得修大學部所開課程，但其成績不計入當學期及畢業總平均，亦不列入畢業學分數。";
                            break;
                            case 'C6':
                	        $m_message="日間部與進修推廣部間之相互選課、相互抵免，學生全學期以不超過六學分為限，並按規定收費，且有下列情形之一者，方可修習：
一、應屆畢業生所選讀之科目時間衝突而影響畢業者。
二、應屆畢業生因重修專業必修科目，方得畢業者，但所修科目必須為日間部或進修部未開設之科目。
三、因須補修本系必修科目學分者。
四、修輔系、雙主修及學程之學生，其加修科目與本系所修之科目時間衝突者。
五、轉系生、轉學生、復學生、應屆畢業生及延修生應重（補）修體育課程者。";
                            break;
                            case 'C7':
                	        $m_message="1. 本校學生進行校際選課須以當學年（含暑假）未開設之課程為原則，或是申請修習他校輔系、雙主修、學程者，且經本校及他校之同意。
2. 本校學生每學期選修他校課程以不超過該學期修習學分數三分之一（或不超過六學分）為原則，且校際選修之科目學分總數四年制不得超過二十五學分，二年制不得超過十五學分。申請修讀他校輔系、雙主修、學程者，經本校及他校之同意後，所修的學分數依他校之規定辦理，不受前述規定之限制。其成績應與本校該學期所修學分合併累計；在本校與他校修習總學分數仍應受本校每學期限修學分之限制。
3. 本校學生選修他校課程，應於該校規定選課日期一週前向本校教務處提出申請，經系（所）主管核准後，送教務處複核，符合規定者依他校校際選課之規定辦理選課手續。";
                            $m_message2="他校學生選修本校課程，其授課、考試及成績計算均比照本校學生辦理；學期考試結束後，由任課教師將他校選課學生成績單併同試卷送交教務處轉送校際選課學生原肄業學校查考。";
                            break;
                            case 'C8':
                	        $m_message="學生得選修不同系、所、學院、學程及跨校課程，同系學生得跨學制選修該系課程。
※對於「雙主修、輔系修讀標準」有任何疑惑者歡迎點選下方連結進行查詢：
http://www.bm.nuu.edu.tw/%E8%BC%94%E7%B3%BB%E3%80%81%E9%9B%99%E4%B8%BB%E4%BF%AE%E4%BF%AE%E8%AE%80%E6%A8%99%E6%BA%96/
􀄃􀅏school􏿿請根據自己的入學就讀年度去對應修讀標準。";
                            break;
                            case 'C9':
                	        $m_message="各班開課計劃所列必修科目必須在原班級或院系所規劃可修讀班級修習，但因重（補）修、或其他特殊原因而造成與其他必修科目衝堂，經系所主任核准後得修習其他學制或其他系所相近之必修科目。";
                            break;
                            case 'C10':
                	        $m_message="凡先修科目不及格或未修，不得選讀相關連續科目，其先修與續修科目之認定，由各系所另訂之。例如：沒修過會計學(一)，不可以直接選修會計學(二)
※凡已修習及格之科目不得重選";
                            break;
                            case 'C11':
                	        $m_message="點選下方連結即可查詢：
http://www.bm.nuu.edu.tw/%E5%85%A5%E5%AD%B8%E7%94%9F%E7%A7%91%E7%9B%AE%E8%A1%A8/";
                            break;
                            case 'C12':
                	        $m_message="點選下方連結即可查詢：
http://www.bm.nuu.edu.tw/%E7%8F%AD%E7%B4%9A%E8%AA%B2%E8%A1%A8/";
                            break;
                            case 'D1':
                	        $m_message=":star:校外租屋相關資訊請至【聯合大學生輔組】的網頁查看或是點選下方的連結。
http://www.nuu.edu.tw/UIPWeb/wSite/np?ctNode=25502&mp=26&idPath=23734_23780";
                            break;
                    }//sw case
                        $client->replyMessage(array(
                        'replyToken' => $event['replyToken'],
                         'messages' => array(
                               array(
                                 'type' => 'text',
                                'text' => $m_message,
                             ),
                           array(
                            'type' => 'text',
                            'text' => $m_message2,
                          ),
                          ),
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

