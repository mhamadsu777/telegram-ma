<?php

ob_start();
$API_KEY = '1518258897:AAG2232lgDdFhS9z-z20VRrYSZ18DaTfyi0';
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
            function bot($method,$datas=[]){
    $ALI = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$ALI";
        $XT1XT1 = file_get_contents($url);
        return json_decode($XT1XT1);
        }
function Forward($KojaShe,$AzKoja,$KodomMSG){
bot('ForwardMessage',['chat_id'=>$KojaShe,'from_chat_id'=>$AzKoja,'message_id'=>$KodomMSG]);}

mkdir("botss");
mkdir("makeee");


$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$ABoTaim = $message->from->first_name;
$username = $message->from->username;
$message_id2 = $update->callback_query->message->message_id;
$text = $message->text;
$Name = $update->callback_query->from->first_name;
$chat_id2 = $update->callback_query->message->chat->id;
$useerr = $update->callback_query->from->username;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$check_token = file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo");
$check = json_decode($check_token);
$start = file_get_contents('start.txt');
$Chh = file_get_contents('Chh.txt');
$ch = "$Chh";
$Chh2 = file_get_contents('Chh2.txt');
$ch2 = "$Chh2";
$buy = file_get_contents('buy.txt');
$Dev = 996310583;
$admin = "$buy";
$settings = file_get_contents("settings.txt");
$get_filee = file_get_contents('twasl.php');
$get_done = file_get_contents('makee/ex.txt');
$done = explode("\n", $get_done);
$newbot = "~ صنع بوت ، ⚙'";
$delbot = "~ حذف بوت ، 🗑'";
$help = "• طريقة عمل توكن ، ♻️'";
$home = "🔙";
$kaat = "~ تابع جديدنا ، 📢'";
$titli = "• مشاركة البوت ، 📛 ؛  ";
$get_id = file_get_contents('makee/make.txt');
$name =$update->message->from->first_name;
date_default_timezone_set('Asia/Baghdad');
$getid = explode("\n", $get_id);
$fnee = $update->callback_query->message->chat->username;
$useree = $update->callback_query->message->chat->id;
$mid = $message->message_id;
$inlineqt = $update->inline_query->query;
$get_done = file_get_contents('ex.txt');
$update = json_decode(file_get_contents('php://input'));
$s = json_decode(file_get_contents('http://www.api-hany.cf/time?GTM=Asia/Baghdad&lang=en'),true);


$SAIED = file_get_contents("SAIED.txt");
$SAIED5 = file_get_contents("SAIED2.txt");
$SAIED6 = file_get_contents("SAIED3.txt");
$SAIED20 = json_decode(file_get_contents('php://input'));
$SAIED18 = $update->message;
$SAIED13 = $SAIED18->chat->id;
$SAIED17 = $SAIED18->text;
$SAIED19 = $SAIED20->callback_query->data;
$count = count(scandir('botss')) - 2;
$SAIED12 = $SAIED20->callback_query->message->chat->id;
$SAIED14 =  $SAIED20->callback_query->message->message_id;
$SAIED15 = $SAIED18->from->first_name;
$SAIED16 = $SAIED18->from->username;
$SAIED11 = $SAIED18->from->id;
$SAIED2 = explode("\n",file_get_contents("SAIED4.txt"));
$SAIED3 = count($SAIED2)-1;
if ($SAIED18 && !in_array($SAIED11, $SAIED2)) {
    file_put_contents("SAIED4.txt", $SAIED11."\n",FILE_APPEND);
  }
$SAIED9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$SAIED0&user_id=".$SAIED11);
$SAIED10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$SAIED1&user_id=".$SAIED11);
if($SAIED18 && (strpos($SAIED9,'"status":"left"') or strpos($SAIED9,'"Bad Request: USER_ID_INVALID"') or strpos($SAIED9,'"status":"kicked"') or strpos($SAIED10,'"status":"left"') or strpos($SAIED10,'"Bad Request: USER_ID_INVALID"') or strpos($SAIED10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$SAIED13,
'text'=>'- ▫️ عذراً عزيزي  ، 🔰
▪️ يجب عليك الإشتراك في قناة المطور أولاً ⚜️؛

- اشترك ثم ارسل { /start }📛!


'.$SAIED0.'
'.$SAIED1,
]);return false;}
if($SAIED17 == "الاوامر" and $SAIED11 == $Dev ){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>"  - أهلآ وسهلآ بك يا ؛ *$name*

- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"- رسالة توجيه ، ☝️🏼💚"],['text'=>"- رسالة نصية ، ☝️🏼💛"]],
[['text'=>"- عدد المشتركين ، 🐳"],['text'=>"- عدد البوتات ، 🤖"]],
[['text'=>"- تعديل الترحيب ، 📌"],['text'=>"- حذف الترحيب ، 🗑"]],
[['text'=>"- حالة البوت ، ⚙"],['text'=>"- عرض الترحيب ، 🧰"]],
[['text'=>"- رفع آدمن ، 🗞"],['text'=>"- تنزيل آدمن ، ⛔️"]],
[['text'=>"- تعديل معرف القناة ، 🎡"],['text'=>"- عرض الآدمن ، 🚁"]],
[['text'=>"- تفعيل التنبيه ، 🏓"],['text'=>"- تعطيل التنبيه ، 🏹"]],
[['text'=>"- تفعيل التوجيه ، 🥁"],['text'=>"- تعطيل التوجيه ، 🎯"]],
[['text'=>"- تفعيل الحماية ، ✅"],['text'=>"- تعطيل الحماية ، ❎"]],
[['text'=>"- نسخة احتياطية ، 📦"]],
   ] 
   ])
]);
}
if($text == "🔙" and $chat_id == $Dev ){
bot('sendmessage',[
'chat_id'=>$chat_id,
"text"=>" - أهلآ وسهلآ بك يا ؛ *$name*

- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"- رسالة توجيه ، ☝️🏼💚"],['text'=>"- رسالة نصية ، ☝️🏼💛"]],
[['text'=>"- عدد المشتركين ، 🐳"],['text'=>"- عدد البوتات ، 🤖"]],
[['text'=>"- تعديل الترحيب ، 📌"],['text'=>"- حذف الترحيب ، 🗑"]],
[['text'=>"- حالة البوت ، ⚙"],['text'=>"- عرض الترحيب ، 🧰"]],
[['text'=>"- رفع آدمن ، 🗞"],['text'=>"- تنزيل آدمن ، ⛔️"]],
[['text'=>"- تعديل معرف القناة ، 🎡"],['text'=>"- عرض الآدمن ، 🚁"]],
[['text'=>"- تفعيل التنبيه ، 🏓"],['text'=>"- تعطيل التنبيه ، 🏹"]],
[['text'=>"- تفعيل التوجيه ، 🥁"],['text'=>"- تعطيل التوجيه ، 🎯"]],
[['text'=>"- تفعيل الحماية ، ✅"],['text'=>"- تعطيل الحماية ، ❎"]],
[['text'=>"- نسخة احتياطية ، 📦"]],
   ] 
   ])
]);
}
   if($text == "- تعديل معرف القناة ، 🎡" and $chat_id == $Dev){
    file_put_contents("settings.txt","Chh");
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
- حسنآ عزيزي قم بأرسال معرف القناة ، 🚀' ",
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
      'keyboard'=>[
[['text'=>"🔙"]],
]])
]);
}
if($settings == "Chh" and $text !="🔙"){
    file_put_contents("Chh.txt","$text");
    file_put_contents("settings.txt","");
       bot('sendMessage',[ 
   'chat_id'=>$chat_id, 
 'text'=>"
- تم حفظ معرف القناة قم برفع البوت داخل القناة ، ⛱' ",
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
      'keyboard'=>[
[['text'=>"🔙"]],
]])
]);
}
   if($text == "- حالة البوت ، ⚙" and $chat_id == $Dev){
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"

- معلومات البوت ، 🛠

- معرف البوت 📦 : @$userb
- حالة البوت 📋 : $f 
- التوقيت الآن ⏰ :  $time
 - التاريخ 📜 :  $date ",
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
      'keyboard'=>[
[['text'=>"🔙"]],
]])
]);
}
	if($text == "- نسخة احتياطية ، 📦" and $chat_id == $Dev){
		$sc = scandir(__DIR__);
		for($i=0;$i<count($sc);$i++){
			if(is_file($sc[$i])){
				bot('sendDocument',[
					'chat_id'=>$chat_id,
					'document'=>new CURLFile($sc[$i])
				]);
			}
}
}
   if($text == "- رفع آدمن ، 🗞" and $chat_id == $Dev){
    file_put_contents("settings.txt","buy");
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
- حسنآ عزيزي قم بأرسال ايدي المطور ، 📋' ",
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
      'keyboard'=>[
[['text'=>"🔙"]],
]])
]);
}
if($settings == "buy" and $text !="🔙" ){
    file_put_contents("buy.txt","$text");
    file_put_contents("settings.txt","");
       bot('sendMessage',[ 
   'chat_id'=>$chat_id, 
 'text'=>"
- تم حفظ ايدي الادمن و تم رفعه ادمن في البوت ، 🔰' ",
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
      'keyboard'=>[
[['text'=>"🔙"]],
]])
]);
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"
- عزيزي لقد تم رفعك آدمن في البوت تستطيع التحكم في جميع اوامر البوت ، 🚧 ؛ 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
- ارسل /admin  لعرض الاوامر ، 🚀' ",
]);
}

   if($text == "- تنزيل آدمن ، ⛔️" and $chat_id == $Dev){
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
- حسنآ عزيزي تم تنزيل الآدمن من البوت بنجاح ، 🏆
 ",
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
      'keyboard'=>[
[['text'=>"🔙"]],
]])
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"- تم تنزيلك من الادمن ، 📛 ",
]);
unlink("buy.txt");
}

   if($text == "- عرض الترحيب ، 🧰" and $chat_id == $Dev){
    file_put_contents("settings.txt","Chh");
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"- اهلا بك عزيزي المطور ، 🛠

- الترحيب الذي تم وضعه للبوت ، 🚁
﹎﹎﹎﹎﹎﹎﹎﹎
 
$start ",
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
      'keyboard'=>[
[['text'=>"🔙"]],
]])
]);
}
   if($text == "- عرض الآدمن ، 🚁" and $chat_id == $Dev){
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"- اهلا بك عزيزي المطور ، 🖲
- الآدمن الذي تم رفعه في البوت هو : `$buy` ، 🛠 ",
 'parse_mode'=>"MarkDown",
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
      'keyboard'=>[
[['text'=>"🔙"]],
]])
]);
}
   if($text == "- تعديل الترحيب ، 📌" and $chat_id == $Dev){
    file_put_contents("settings.txt","start");
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
- حسنآ عزيزي قم بأرسال كليشة الترحيب الجديدة ، 📖' ",
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
      'keyboard'=>[
[['text'=>"🔙"]],
]])
]);
}
if($settings == "start" and $text != "🔙"){
    file_put_contents("start.txt","$text");
    file_put_contents("settings.txt","");
       bot('sendMessage',[ 
   'chat_id'=>$chat_id, 
 'text'=>"
- تم حفظ كليشة ترحيب البوت ، 📟' ",
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
      'keyboard'=>[
[['text'=>"🔙"]],
]])
]);
}
if($text == "- رسالة توجيه ، ☝️🏼💚" and $chat_id == $Dev){
bot('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"~ أرسل رسالتك وسيتم توجيهها لـ [ $SAIED3 ] مشترك ، 🐙 ",
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
      'keyboard'=>[
[['text'=>"🔙"]],
]])
]);
file_put_contents("SAIED.txt","SAIED2");
}

if($text == "- عدد البوتات ، 🤖" and $chat_id == $Dev){
bot('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"عدد البوتات المصنوعة هو { $count$bots } ، بوت 🤖 ",
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
      'keyboard'=>[
[['text'=>"🔙"]],
]])
]);
}
if($SAIED18 and $SAIED == "SAIED2" and $SAIED11 == $Dev and $text !='🔙'){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم التوجيه بنجاح 🦕',
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
      'keyboard'=>[
[['text'=>"🔙"]],
]])
]);
for($i=0;$i<count($SAIED2); $i++){
bot('forwardMessage', [
'chat_id'=>$SAIED2[$i],
'from_chat_id'=>$SAIED11,
'message_id'=>$SAIED18->message_id
]);
unlink("SAIED.txt");
}
}
if($text == "- رسالة نصية ، ☝️🏼💛" and $chat_id == $Dev){
bot('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"~ أرسل رسالتك وسيتم إرسالها لـ [ $SAIED3 ] مشترك ، 🐠",
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
      'keyboard'=>[
[['text'=>"🔙"]],
]])
]);
file_put_contents("SAIED.txt","SAIED3");
}
if($SAIED17 and $SAIED == "SAIED3" and $SAIED11 == $Dev and $text !='🔙'){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم النشر بنجاح 🐋',
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
      'keyboard'=>[
[['text'=>"🔙"]],
]])
]);
for($i=0;$i<count($SAIED2); $i++){
bot('sendMessage', [
'chat_id'=>$SAIED2[$i],
'text'=>$SAIED17
]);
unlink("SAIED.txt");
}
}
if($text == "- عدد المشتركين ، 🐳" and $chat_id == $Dev){
bot('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>"- عدد مشتركين البوت  [ $SAIED3 ] مشترك ، 🦑",
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
      'keyboard'=>[
[['text'=>"🔙"]],
]])
]);
unlink("SAIED.txt");
}
if($text == "- تفعيل التنبيه ، 🏓" and $chat_id == $Dev){
bot('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>'- تم تفعيل دخول المشتركين ، 🐎',
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
      'keyboard'=>[
[['text'=>"🔙"]],
]])
]);
file_put_contents("SAIED2.txt","SAIED");
}
if($SAIED17 == "/start" and $SAIED5 == "SAIED" and $SAIED11 != $Dev){
bot("sendmessage",[
"chat_id"=>$Dev,
"text"=>"
- عضو جديد قام بالدخول الى البوت ، 👇🏽💚
- الاسم ، [$SAIED15](tg://user?id=$chat_id) ، 🦖
- المعرف ، [@$SAIED16](tg://user?id=$chat_id) ، 🦉
- الايدي ، [$SAIED11](tg://user?id=$chat_id) ، 🐝 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
~  عدد المشتركين ، { $SAIED3 } ، 🐳 ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($text == "- تعطيل التنبيه ، 🏹" and $chat_id == $Dev){
bot('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>'- تم تعطيل دخول المشتركين ، 🦍 ',
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
      'keyboard'=>[
[['text'=>"🔙"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED2.txt");
}
if($text == "- تفعيل التوجيه ، 🥁" and $chat_id == $Dev){
bot('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>'- تم تفعيل توجيه الرسائل ، 🦇',
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
      'keyboard'=>[
[['text'=>"🔙"]],
]])
]);
file_put_contents("SAIED3.txt","SAIED");
}
if($SAIED18 and $SAIED6 == "SAIED" and $SAIED11 != $Dev){
bot('forwardMessage', [
'chat_id'=>$Dev,
'from_chat_id'=>$SAIED11,
'message_id'=>$SAIED18->message_id
]);
}

if($SAIED18 and $SAIED6 == "SAIED" and $SAIED11 == $Dev){
bot('sendMessage',[
'chat_id'=>$SAIED18->reply_to_message->forward_from->id,
    'text'=>$SAIED17,
    ]);
}
if($text == "- تعطيل التوجيه ، 🎯" and $chat_id == $Dev){
bot('sendmessage',[
    'chat_id'=>$chat_id,
'text'=>'- تم تعطيل توجيه الرسائل ، 🐌',
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
      'keyboard'=>[
[['text'=>"🔙"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED3.txt");
}
if($SAIED17 == "/admin" and $SAIED11 == $admin){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>"

- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🛠
——————————————————
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"SAIED5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"SAIED6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"SAIED7"],['text'=>'- حالة البوت ، ⚙' ,'callback_data'=>"stats"]],
[['text'=>'• تفعيل التواصل ، 🥁' ,'callback_data'=>"SAIED9"],['text'=>'• تعطيل التواصل ، 🏈' ,'callback_data'=>"SAIED10"]],
[['text'=>'• تفعيل التوجيه ، 🎨' ,'callback_data'=>"SAIED11"],['text'=>'• تعطيل التوجيه ، 🎯' ,'callback_data'=>"SAIED12"]],
   ] 
   ])
]);
}
if($SAIED19 == "SAIED" ){
bot('EditMessageText',[
'chat_id'=>$SAIED12,
'message_id'=>$SAIED14,
"text"=>"

- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🛠
——————————————————
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"SAIED5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"SAIED6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"SAIED7"],['text'=>'- حالة البوت ، ⚙' ,'callback_data'=>"stats"]],
[['text'=>'• تفعيل التواصل ، 🥁' ,'callback_data'=>"SAIED9"],['text'=>'• تعطيل التواصل ، 🏈' ,'callback_data'=>"SAIED10"]],
[['text'=>'• تفعيل التوجيه ، 🎨' ,'callback_data'=>"SAIED11"],['text'=>'• تعطيل التوجيه ، 🎯' ,'callback_data'=>"SAIED12"]],
   ] 
   ])
]);
unlink("SAIED.txt");
}
   
    if($data == "stats"){ 
bot('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
'text'=>"
- معلومات البوت ، 🛠

- معرف البوت 📦 : @$userb
- حالة البوت 📋 : $f 
- التوقيت الآن ⏰ :  $time
 - التاريخ 📜 :  $date
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 ','callback_data'=>'SAIED']],    
            ]
        ])
       ]);
    }
if($SAIED19 == "SAIED5"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>"~ أرسل رسالتك وسيتم توجيهها لـ [ $SAIED3 ] مشترك ، 🐙 ",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED2");
}
if($SAIED18 and $SAIED == "SAIED2" and $SAIED11 == $admin){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم التوجيه بنجاح 🦕',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
for($i=0;$i<count($SAIED2); $i++){
bot('forwardMessage', [
'chat_id'=>$SAIED2[$i],
'from_chat_id'=>$SAIED11,
'message_id'=>$SAIED18->message_id
]);
unlink("SAIED.txt");
}
}
if($SAIED19 == "SAIED6"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>"~ أرسل رسالتك وسيتم إرسالها لـ [ $SAIED3 ] مشترك ، 🐠",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED3");
}
if($SAIED17 and $SAIED == "SAIED3" and $SAIED11 == $admin){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم النشر بنجاح 🐋',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
for($i=0;$i<count($SAIED2); $i++){
bot('sendMessage', [
'chat_id'=>$SAIED2[$i],
'text'=>$SAIED17
]);
unlink("SAIED.txt");
}
}
if($SAIED19 == "SAIED7"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>"- عدد مشتركين البوت  [ $SAIED3 ] مشترك ، 🦑",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED9"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تفعيل دخول المشتركين ، 🐎',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED2.txt","SAIED");
}
if($SAIED17 == "/start" and $SAIED5 == "SAIED" and $SAIED11 != $admin and $chat_id != $Dev){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"- عضو جديد قام بالدخول الى البوت ، 🛡
- الاسم ، [$SAIED15](tg://user?id=$chat_id) ، 🦕
- المعرف ، [@$SAIED16](tg://user?id=$chat_id) ، 🐢
- الايدي ، [$SAIED11](tg://user?id=$chat_id) ، 🐝 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
~  عدد المشتركين ، { $SAIED3 } ، 🦑 ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($SAIED19 == "SAIED10"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تعطيل دخول المشتركين ، 🦍 ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED2.txt");
}
if($SAIED19 == "SAIED11"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تفعيل توجيه الرسائل ، 🦇',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED3.txt","SAIED");
}
if($SAIED18 and $SAIED6 == "SAIED" and $SAIED11 != $admin and $chat_id != $Dev){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$SAIED11,
'message_id'=>$SAIED18->message_id
]);
}
if($SAIED18 and $SAIED6 == "SAIED" and $SAIED11 == $admin){
bot('sendMessage',[
'chat_id'=>$SAIED18->reply_to_message->forward_from->id,
    'text'=>$SAIED17,
    ]);
}
if($SAIED19 == "SAIED12"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تعطيل توجيه الرسائل ، 🐌',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED3.txt");
}

$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendmessage',[
'chat_id'=>$chat_id,
    'text'=>"▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $Chh  
◼️ إشترك في القناة ثم أرسل /start ، 📛" ,
]);return false;}

if($text ==  '/start' and !in_array($from_id, $getid) and !strpos($ch1 , '"status":"left"' ) !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
اهلا بك في مصنع بوتات حماية .📡
- عـلـى سـورس سيلا 🦁

- كـل ماعـلـيــك الـضـغـط عـلـى ( صـنع بوت ) 😍

- اكتشف مميزات البوت وحدك 💋
معرف البوت :~ @sourceselabot 🥺
 ",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• صنع بوت ، ⚙",'callback_data'=>'maka1'],['text'=>"• حذف بوت ، 🗑",'callback_data'=>'delete1']],
[['text'=>"• مشاركة البوت ، 🌐",'switch_inline_query'=>"."]],
[['text'=>"طريقة عمل توكن ، ♻",'callback_data'=>'help'],['text'=>"لشراء البوت ، 💸",'callback_data'=>'buy']],
[['text'=>"~ تابع جديدنا ، 📢",'url'=>"https://t.me/sourcesela"]],[['text'=>"سورس ويزرد",'url'=>"https://t.me/wizard_system"]],[['text'=>"سورس ويزرد",'url'=>"https://t.me/wizard_system"]],
]
])]);}
if($data == "home"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
- أهلآ بك يا ، ‏[$Name](tg://user?id=$chat_id2) 

$start
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• صنع بوت ، ⚙",'callback_data'=>'maka1'],['text'=>"• حذف بوت ، 🗑",'callback_data'=>'delete1']],
[['text'=>"• مشاركة البوت ، 🌐",'switch_inline_query'=>"."]],
[['text'=>"طريقة عمل توكن ، ♻",'callback_data'=>'help'],['text'=>"لشراء البوت ، 💸",'callback_data'=>'buy']],
[['text'=>"~ تابع جديدنا ، 📢",'url'=>"https://t.me/sourcesela"]],[['text'=>"سورس ويزرد",'url'=>"https://t.me/wizard_system"]],
]])]);}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$check_tokenn = file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo");
$check = json_decode($check_token);
$get_file = file_get_contents('IE_S9.php');
$get_done = file_get_contents('makeee/ex.txt');
$done = explode("\n", $get_done);
$get_id = file_get_contents('makeee/make.txt');
$getid = explode("\n", $get_id);
$mid = $message->message_id;
$done = explode("\n", $get_done);


if($data == 'maka1' and !in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
file_put_contents('makeee/make.txt', "\n" . $chat_id2 . "\n",FILE_APPEND);    
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- حسنآ عزيزي ، *$Name* 
- الآن قم بأرسال التوكن ، ⚙'
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$home",'callback_data'=>"home"]]
]])]);}

if($data == 'maka1' and in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
file_put_contents('makeee/make.txt', "\n" . $chat_id2 . "\n",FILE_APPEND);    
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- حسنآ عزيزي ، *$Name* 
- الآن قم بأرسال التوكن ، ⚙'
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$home",'callback_data'=>"home"]]
]])]);}


if($text and in_array($from_id, $getid) and $check->ok == "true"){

for($i = $mid - 3; $i < $mid; $i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$i
]);
}

$str = str_replace($from_id, '', $get_id);    

file_put_contents('makeee/make.txt', $str);    

file_put_contents('makeee/ex.txt', $from_id . "\n", FILE_APPEND);
file_put_contents('ex.txt', $from_id . "\n", FILE_APPEND);
    $url = json_decode(file_get_contents("https://api.telegram.org/bot$text/getme"))->result;
$user = $url->username;
$name = $url->first_name;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'- تم آنشاء البوت الخاص بك بنجاح اضغط عليه بالاسفل للدخول اليه ، 👇🏽💚',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$name",'url'=>"t.me/$user"]],
[['text'=>"$home",'callback_data'=>"home"]
],
]
])

]); 

$admin = 996310583;
$UrlBot = json_decode(file_get_contents("https://api.telegram.org/bot$text/getme"))->result;
$UserBot = $UrlBot->username;

bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"~ هناك عضو قام بصنع بوت توآصل ، 🛡'

- الاسم ، [$ABoTaim](tg://user?id=$from_id) ، 🐋
- المعرف ، [@$username](tg://user?id=$from_id) ، 🐳
- الآيدي ، [$from_id](tg://user?id=$from_id) ، 🐝
-  البوت ، [$name](t.me/$UserBot) 
- توگن البوت ، 👇??💚
`$text`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);



mkdir("botss/$from_id");

file_put_contents("botss/$from_id/info.txt",$text . "\n" . $from_id);

file_put_contents("botss/$from_id/bot.php", $get_file);

file_put_contents("botss/$from_id/chat.txt", $from_id . "\n");

file_put_contents("botss/$from_id/welcome.txt", 'اهلا بك في بوت الردود المتميز' . "\n");

file_put_contents("botss/$from_id/ch.txt",'iNezk');

file_put_contents("botss/$from_id/index.php", 'ها خرا جاي تسرق لو شنو ؟؟؟؟؟؟؟؟؟؟؟؟؟؟

' . "\n");

file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://asddff55.ml/botss/$from_id/bot.php");

}


if($text and in_array($from_id, $getid) and $check->ok != "true" and !strpos($ch1 , '"status":"left"') !== false){

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'عذراً ❗️هاذا التوكن غير صالح ♻️',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$home",'callback_data'=>'home']]
]
])
]);
}    


if($data == 'delete1' and in_array($chat_id2,$done)){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'• هل انت متأكد من انك تريد حذف البوت ؟ 🗑
',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'- لا ، ❎', 'callback_data'=>'home'],
['text'=>'- نعم ، ✅','callback_data'=>'yesde1'],
]    
]])
]);    
}

if($data == 'yesde1' and in_array($chat_id2, $done)){


bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- تم حذف بوتك بنجاح ، 🗑'",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"$home",'callback_data'=>"home"]
]
]
])
]);


$str1 = str_replace($chat_id2, '', $get_done);

file_put_contents('makeee/ex.txt', $str1);

$get_token = file_get_contents("botss/$chat_id2/info.txt");

$get_url = file_get_contents("https://api.telegram.org/bot$get_token/getWebhookInfo");

$json = json_decode($get_url);

$url = $json->result->url;

file_get_contents("https://https://api.telegram.org/bot$get_token/deletewebhook?url=$url");

unlink("botss/$chat_id2/bot.php");
unlink("botss/$chat_id2/info.txt");

}


if($data == 'delete1' and !in_array($chat_id2,$done)){

bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- قم بإنشاء بوت أولاً ، ♨️؛ ",
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$home",'callback_data'=>"home"]]
]])]);}
if($data == "buy"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"~ أهلاً بك في قسم شراء بوت مماثل لهذا البوت ، 💰
- يمكنك الحصول على بوت خاص بك وبقناتك ، للشراء قم بمراسلة المطور ، ⚙
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[- اضغط هنا وتابع جديدنا 🌐](https://t.me/sourcesela)",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• المطور ، ⚓️ ؛️️",'url'=>'https://telegram.me/xr_3r']],
[['text'=>"• تواصل المطور ، 📤 ؛",'url'=>'https://telegram.me/Twasl9Bot?start']],
[['text'=>"️$home" , 'callback_data'=>"home"]],
]
])
]);
}


if($data == "help"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"

- أهلاً وسهلاً بك عزيزي ، 👋🏼

• طريقة إنشاء بوت أو ما هو التوكن ؟! 🔰

- طريقة الحصول على توكن خاص بك سهلة جداً ، ♻️ ؛

1) إذهب إلى @BotFather | ثم إضغط على إبدأ بعد ذلك سيتم إرسال رسالة لك تجاهلها وقم بإرسال { /newbot } أي تعني بوت جديد ؛ 🏷

2) سيتم إرسال رسالة لك تعني ( أرسل اسم البوت الذي تريد صنعه ) قم بإرسال الاسم الذي تريده ، 📮 ؛

3) سيتم إرسال رسالة لك تعني ( أرسل اسم المستخدم الذي تريد وضعه للبوت بشرط أن ينتهي بـ كلمة Bot مثلا ABoTaimBot أو يُسمح بـ _Bot مثلاً ABoTaim_Bot ، ✔️

4) سيتم إرسال رسالة لك تعني أنه قد تم صنع بوت وللحصول على التوكن يوجد ضمن الرسالة على شكل نص يقبل النسخ بمجرد الضغط عليه ، 📌 ؛

مثال على التوكن ؛ 🦇
*967431926:AABilhOaY-TER6EJppaYkUt9dwusMQQSfPY*

5) كل ماعليك نسخه وإرساله ليتم صنع بوت ، 🐢 ؛
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[- اضغط هنا وتابع جديدنا ، 🌐'](https://t.me/sourcesela)",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$home",'callback_data'=>"home"]],
]
])
]);
}
$inlinequery = $update->inline_query->query;
$NamE = $update->inline_query->from->first_name;
if($inlinequery == "." ){
    bot('answerInlineQuery',[
    'inline_query_id'=>$update->inline_query->id,    
    'cache_time'=>'300',
    'results' => json_encode([[
    'type'=>'article',
    'id'=>base64_encode(rand(5,555)),
    'title'=>' • اضغط هنا للمشاركة  ، 🌐',
    'thumb_url'=>"https://d.top4top.net/p_12168e2020.jpg",
    'input_message_content'=>[
    'disable_web_page_preview'=>true,
    'message_text'=>"
- بوت صنع بوتات تواصل ،  📢؛
- يمكنك صنع بوت بميزات جديدة ، ⚙ ؛
- اضغط بالأسفل واصنع بوت خاص بك ، 🤞🏼💛 ؛ "],
    'reply_markup'=>['inline_keyboard'=>[
    [['text'=>"- اضغط للدخول ، 🌐",'url'=>"https://t.me/Tw00_Bot?start"]]
    ]]
    ]])
    ]);
    }
$rembo = 996310583;  
$from_id = $message->from->id;

if($text =='- تفعيل الحماية ، ✅' and $from_id ==$rembo){
file_put_contents("index.php", "انسى"); 
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- تم تفعيل الحماية في مجلد البوت ✅", 
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
      'keyboard'=>[
[['text'=>"🔙"]],
]])
]);
}
if($text =='- تعطيل الحماية ، ❎' and $from_id ==$rembo){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- تم تعطيل الحماية في مجلد البوت ✅", 
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
      'keyboard'=>[
[['text'=>"🔙"]],
]])]); 
unlink("index.php"); 
} 
