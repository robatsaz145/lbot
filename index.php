<?php
$telegram_ip_ranges = [
['lower' => '149.154.160.0', 'upper' => '149.154.175.255'],
['lower' => '91.108.4.0',    'upper' => '91.108.7.255'],
];
$ip_dec = (float) sprintf("%u", ip2long($_SERVER['REMOTE_ADDR']));
$ok=false;
foreach ($telegram_ip_ranges as $telegram_ip_range) if (!$ok) {
if(!$ok){
$lower_dec = (float) sprintf("%u", ip2long($telegram_ip_range['lower']));
$upper_dec = (float) sprintf("%u", ip2long($telegram_ip_range['upper']));
if($ip_dec >= $lower_dec and $ip_dec <= $upper_dec){
$ok=true;
}}}
if(!$ok){
exit(header("location: https://SpeedMizban.ir"));
}
define('API_KEY','5403438565:AAHR_p64fYVKcpHdUgKSC5mVKAKn8K_FMKE'); // توکن ربات
$admin = "5254163873"; // ایدی عددی مالک
$userbot = "Ffrdjfdjdkbot"; // یوزرنیم ربات بدون @
include("jdf.php");
//===[Function]===//
function Tel($method,$Bot=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$Bot);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}
//===[CODE]===//
$update = json_decode(file_get_contents('php://input'));
$chat_id = $update->message->chat->id;
$text = $update->message->text;
$tc = $update->message->chat->type;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$first = $update->message->from->first_name;
$chatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$message_id2 = $update->callback_query->message->message_id;
$token = API_KEY;
$date = jdate("Y/m/d");
$time = jdate("H:i:s");
//===[Folder]===//
if(!file_exists("ArmQbdMwdLQ")){mkdir("ArmQbdMwdLQ");}
//===[Get]===//
$arzb = file_get_contents("arzb.txt");
$coinz = file_get_contents("coinz.txt");
$gps = file_get_contents("gp.txt");
$channel = file_get_contents("channel.txt");
$gv = file_get_contents("gv.txt");
$span = file_get_contents("sp.txt");
$pic = file_get_contents("pic.txt");
$capi = file_get_contents("capi.txt");
$channel3 = file_get_contents("channel3.txt");
$insta2 = file_get_contents("insta2.txt");
$insta1 = file_get_contents("insta1.txt");
$channel4 = file_get_contents("channel4.txt");
$userpho = file_get_contents("ArmQbdMwdLQ/$from_id/userpho.txt");
$jsjdke = file_get_contents("ArmQbdMwdLQ/$from_id/jsjdke.txt");
$Bot = json_decode(file_get_contents("ArmQbdMwdLQ/$from_id/$from_id.json"),true);
$step = $Bot["step"];
$coin = $Bot["coin"];
$inv = $Bot["inv"];
$bard = $Bot["bard"];
//===[ADMIN]===//
if(!file_exists("Abol.Admin")){file_put_contents("Abol.Admin","$admin,");}
$AdminS = file_get_contents("Abol.Admin");
$AdminS = explode(",",$AdminS);
//===[JOIN]===//
$joqw = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=@$channel&user_id=$from_id"))->result->status;
$joqwe = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=@$gps&user_id=$from_id"))->result->status;
$joqw3 = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=@$channel3&user_id=$from_id"))->result->status;
$joqw4 = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=@$channel4&user_id=$from_id"))->result->status;
//===[Start]===//
if(strpos($data, "~") !== false){
$coin = explode("~", $data)[2];
$from = explode("~", $data)[1];
Tel('editmessagetext', [
'chat_id' => $chatid,
'message_id' => $message_id2,
'text'=>"✅ تایید شد

برداشت $coin کاربر $from",
]); 
Tel('sendMessage', [
'chat_id' => $from,
'text' => "✅ برداشت شما به مبلغ $coin تسویه شد",
]);
}
elseif(strpos($data, "djckkdkkcld_") !== false){
$dhjfjjdjd = explode("_", $data);
$datas1["step"] = "dnkwmmxm-$dhjfjjdjd[1]";
$outjson = json_encode($datas1,true);
file_put_contents("ArmQbdMwdLQ/$chatid/$chatid.json",$outjson);
Tel('sendMessage', [
'chat_id' => $chatid,
'text' => "متن پیام خود را ارسال کنید",
]);
}
elseif(strpos($step, "dnkwmmxm-") !== false){
$svcjjdjkk = explode("-", $step);
$idfa = $svcjjdjkk[1];
$datas["step"] = "free";
$outjson = json_encode($datas,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ارسال شد",
]); 
Tel('sendMessage',[
'chat_id'=>$idfa,
'text'=>"$text",
]); 
exit;
}
if($tc == 'private'){
if(strpos($text == "/start") !== false){
$id=str_replace("/start ","",$text);
$amar=file_get_contents("ArmQbdMwdLQ/ArmQbdMwdLQi.txt");
$exp=explode("\n",$amar);
if(!in_array($from_id,$exp) and $from_id != $id){
mkdir("ArmQbdMwdLQ/$from_id");
file_put_contents("ArmQbdMwdLQ/$chat_id/jsjdke.txt",$id);
Tel('sendMessage',[
'chat_id'=>$id,
'text'=>"یک نفر با لینک شما وارد ربات شد پس از کار کردن با ربات سکه خودکار واریز میشود",
]);
}}
 if (!file_exists("ArmQbdMwdLQ/$from_id/$from_id.json")) {
mkdir("ArmQbdMwdLQ/$from_id");
$myfile2 = fopen("ArmQbdMwdLQ/ArmQbdMwdLQi.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$from_id\n");
fclose($myfile2);
$Bot["step"] = "free";
$Bot["coin"] = "0";
$Bot["inv"] = "0";
$Bot["bard"] = "0";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"سلام $first به ربات ایردراپ $arzb خوش آمدید 💐",
'reply_markup'=>json_encode([
'keyboard'=>[

[['text' => "$arzb 📥"],['text' => "💰خرید توکن $arzb"]],
[['text' => "📆 تاریخچه برداشت"],['text' => "⚙ جزئیات حساب"],['text' => "⚖ قوانین و مقررات"]],
[['text' => "👨‍💻 پشتیبانی"],['text' => "👥 زیرمجموعه گیری"]],
],
"resize_keyboard"=>true,
])
]);
exit;
}
if($text == "/start"){
$Bot["step"] = "none";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"سلام $first به ربات ایردراپ $arzb خوش آمدید 💐",
'reply_markup'=>json_encode([
'keyboard'=>[

[['text' => "$arzb 📥"],['text' => "💰خرید توکن $arzb"]],
[['text' => "📆 تاریخچه برداشت"],['text' => "⚙ جزئیات حساب"],['text' => "⚖ قوانین و مقررات"]],
[['text' => "👨‍💻 پشتیبانی"],['text' => "👥 زیرمجموعه گیری"]],
],
"resize_keyboard"=>true,
])
]);
exit;
}
if($joqw == 'left' or $joqwe == 'left' or $joqw4 == 'left' or $joqw3 == 'left' ){
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"شما برای استفاده از ربات ابتدا باید عضو کانال زیر باشید و سپس دوباره استارت کنید👇🏻",
'reply_markup' => json_encode([
'inline_keyboard' => [
[["text" => "ورود به کانال", 'url' => "https://t.me/$channel"]],
[["text" => "ورود به کانال", 'url' => "https://t.me/$gps"]],
[["text" => "ورود به کانال", 'url' => "https://t.me/$channel3"]],
[["text" => "ورود به کانال", 'url' => "https://t.me/$channel4"]],
[["text" => "فالو کردن اینستا", 'url' => "https://Instagram.com/$insta1"]],
[["text" => "فالو کردن اینستا", 'url' => "https://Instagram.com/$insta2"]],
]
])
]);
exit;
}
if($step == "nmskskwkkdkc" and isset($update->message->contact)){
  if($update->message->contact->user_id == $from_id){
$phone =$update->message->contact->phone_number;
if(strpos($phone,'98') === 0 || strpos($phone,'+98') === 0){
$phone = '0'.strrev(substr(strrev($phone),0,10));
Tel('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✅ شماره تلفن شما با موفقیت ثبت و تایید شد.",
'reply_markup'=>json_encode([
'keyboard'=>[

[['text' => "$arzb 📥"],['text' => "💰خرید توکن $arzb"]],
[['text' => "📆 تاریخچه برداشت"],['text' => "⚙ جزئیات حساب"],['text' => "⚖ قوانین و مقررات"]],
[['text' => "👨‍💻 پشتیبانی"],['text' => "👥 زیرمجموعه گیری"]],
],
"resize_keyboard"=>true,
])
]);
file_put_contents("ArmQbdMwdLQ/$from_id/userpho.txt",'OK');
$Bot["step"] = "free";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
exit;
}else{
Tel('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"کشور شما مجاز نیست فقط ایران مجاز است",
]);
exit;
}
}else{
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📱 لطفا شماره موبایل خود را تایید نمایید.

👈جهت جلوگیری از خرید با کارت های دزدی نیاز است شماره خود را تایید نمائید و سپس اقدام به خرید کنید.

✔️شماره شما نزد ما محفوظ است و هیچ شخصی به آن دسترسی نخواهد داشت.
",
'reply_markup' => json_encode([ 
'resize_keyboard'=>true, 
'keyboard' => [ 
[['text'=>"⏳تایید شماره⏳",'request_contact'=>true]],
], 
]) 
]);
exit;
}
}
/*if($userpho != true){
$Bot["step"] = "nmskskwkkdkc";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
شما برای استفاده از این ربات باید شماره #ایرانی خود را تایید کنید ❗️

شماره شما نزد ما محفوظ خواهد ماند ✅
 اینکار فقط برای  ورود شماره های ایرانی  وجلوگیری از  ورود شماره مجازی واکانت های فیک است🤖
",
'reply_markup' => json_encode([ 
'resize_keyboard'=>true, 
'keyboard' => [ 
[['text'=>"اشتراک شماره☎️",'request_contact'=>true]],
], 
]) 
]); 
exit;
}*/
if($jsjdke == true){
$Bot12 = json_decode(file_get_contents("ArmQbdMwdLQ/$jsjdke/$jsjdke.json"),true);
$invv = $Bot12["inv"];
$coinn = $Bot12["coin"];
$xhjdnxc = $invv + 1;
$xnnend = $coinn + $coinz;
$Bot12["inv"] = $xhjdnxc;
$Bot12["coin"] = $xnnend;
$outjson = json_encode($Bot12,true);
file_put_contents("ArmQbdMwdLQ/$jsjdke/$jsjdke.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$jsjdke,
'text'=>"🌟 زيرمجموعه شما تایید شد و $coinz به حساب شما واریز شد",
]);
unlink("ArmQbdMwdLQ/$from_id/jsjdke.txt");
}
if($text == "🔙 بازگشت"){
$Bot["step"] = "none";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🔙 به منوی اصلی بازگشتید",
'reply_markup'=>json_encode([
'keyboard'=>[

[['text' => "$arzb 📥"],['text' => "💰خرید توکن $arzb"]],
[['text' => "📆 تاریخچه برداشت"],['text' => "⚙ جزئیات حساب"],['text' => "⚖ قوانین و مقررات"]],
[['text' => "👨‍💻 پشتیبانی"],['text' => "👥 زیرمجموعه گیری"]],
],
"resize_keyboard"=>true,
])
]); 
exit;
}
if($text == "💰خرید توکن $arzb"){
$Bot["step"] = "fjdi8e2883ur";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"این بخش فعلا خاموشه",
'reply_markup' => json_encode([ 
'keyboard' => [ 
[['text'=>"🔙 بازگشت"]],
], 
"resize_keyboard"=>true,
]) 
]);
exit;
}
if($step == "fjdi8e2883ur"){
$jwkker = $text/file_get_contents("Price.txt");
$rand = rand(11111,99999);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ درخواست خرید شما با موفقيت ثبت شد

⚙ مقدار $jwkker ترون واریز کنید
TEEhjY2J3R9A3rapfebHAhWbkXCCcd4KEm

 🔢 کد پیگیری : $rand

کد پیگیری شما تا 5 دقیقه دیگر معتبر است
",
'reply_markup'=>json_encode([
'keyboard'=>[

[['text' => "$arzb 📥"],['text' => "💰خرید توکن $arzb"]],
[['text' => "📆 تاریخچه برداشت"],['text' => "⚙ جزئیات حساب"],['text' => "⚖ قوانین و مقررات"]],
[['text' => "👨‍💻 پشتیبانی"],['text' => "👥 زیرمجموعه گیری"]],
],
"resize_keyboard"=>true,
])
]); 
Tel('sendMessage',[
'chat_id'=>$admin,
'text'=>"👈🏻 درخواست شارژ $coin

 🔢 کد پیگیری : $rand

ترون$jwkker

🆔 ایدی عددی : `$from_id`

[🗣 پیوی¹]($username)
[🗣 پیوی²](tg://openmessage?user_id=$from_id)",
'parse_mode'=>"MarkDown",
]); 
$Bot["step"] = "none";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
}
if($text == "$arzb 📥"){
$jjwe = file_get_contents("bardash.txt");
if($coin < $jjwe - 1){
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"برای برداشت شما باید حداقل $jjwe $arzb داشته باشید.

به قسمت زیرمجموعه گیری بروید و بنر خود را دریافت کنید
در عوض دعوت کردن هر فرد به ربات $coinz $arzb دریافت میکنید",
]);
exit;
}else{
$Bot["step"] = "djdjidwi8298e8fud";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📶 آدرس کیف پول خود را ارسال کنید",
'reply_markup' => json_encode([ 
'keyboard' => [ 
[['text'=>"🔙 بازگشت"]],
], 
"resize_keyboard"=>true,
]) 
]);
exit;
}
}
if($step == "djdjidwi8298e8fud"){
$jkwker = $bard + 1;
$Bot["bard"] = "$jkwker";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ درخواست برداشت شما با موفقيت ثبت شد",
'reply_markup'=>json_encode([
'keyboard'=>[

[['text' => "$arzb 📥"],['text' => "💰خرید توکن $arzb"]],
[['text' => "📆 تاریخچه برداشت"],['text' => "⚙ جزئیات حساب"],['text' => "⚖ قوانین و مقررات"]],
[['text' => "👨‍💻 پشتیبانی"],['text' => "👥 زیرمجموعه گیری"]],
],
"resize_keyboard"=>true,
])
]); 
Tel('sendMessage',[
'chat_id'=>$admin,
'text'=>"👈🏻 درخواست برداشت $coin

🔢 کیف پول طرف : $text

🆔 ایدی عددی : `$from_id`

[🗣 پیوی¹]($username)
[🗣 پیوی²](tg://openmessage?user_id=$from_id)",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"پرداخت شد",'callback_data'=>"Jisi1irW~$from_id~$coin"]],
]
        ])
]); 
$Bot["step"] = "none";
$Bot["coin"] = "0";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
$myfile2 = fopen("ArmQbdMwdLQ/$chat_id/ab.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "👈🏻 درخواست برداشت : $coin $arzb

🔢 کیف پول دریافتی : $text

$date - $time
");
fclose($myfile2);
}
if($text == "⚙ جزئیات حساب"){
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🔸اطلاعات حساب کاربری شما :",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"🆔",'callback_data'=>'join'],['text'=>"$from_id",'callback_data'=>'join']],
[['text'=>"$arzb",'callback_data'=>'join'],['text'=>"$coin",'callback_data'=>'join']],
[['text'=>"👥",'callback_data'=>'join'],['text'=>"$inv",'callback_data'=>'join']],
]
        ])
]); 
}
if($text == "👥 زیرمجموعه گیری"){
Tel('sendphoto',[
    'photo'=>"$pic",
    'chat_id'=>$chat_id,
    'caption'=>"$capi

https://t.me/$userbot?start=$from_id",
]); 
}
if($text == "⚖ قوانین و مقررات"){
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$gv",
]); 
}
elseif($text == "📆 تاریخچه برداشت"){
	$ab = file_get_contents("ArmQbdMwdLQ/$chat_id/ab.txt");
	if($ab == true){
		Tel('sendMessage',[
 'chat_id'=>$chat_id,
'text'=>"
📆 لیست برداشت های شما :

$ab",
]); 
}else{
	Tel('sendMessage',[
 'chat_id'=>$chat_id,
'text'=>"شما تاکنون برداشتی نداشته اید.",
]); 
}}
if($text == "👨‍💻 پشتیبانی"){
$Bot["step"] = "djekkwe88d8eb";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📝 متن پیام خود را ارسال کنید",
'reply_markup' => json_encode([ 
'keyboard' => [ 
[['text'=>"🔙 بازگشت"]],
], 
"resize_keyboard"=>true,
]) 
]); 
}
if($step == "djekkwe88d8eb"){
$Bot["step"] = "none";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ ارسال شد",
'reply_markup'=>json_encode([
'keyboard'=>[

[['text' => "$arzb 📥"],['text' => "💰خرید توکن $arzb"]],
[['text' => "📆 تاریخچه برداشت"],['text' => "⚙ جزئیات حساب"],['text' => "⚖ قوانین و مقررات"]],
[['text' => "👨‍💻 پشتیبانی"],['text' => "👥 زیرمجموعه گیری"]],
],
"resize_keyboard"=>true,
])
]); 
Tel('ForwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$from_id,
'message_id'=>$message_id
]);
Tel('sendMessage',[
'chat_id'=>$admin,
'text'=>"🆔 ایدی عددی : `$from_id`

[🗣 پیوی¹]($username)

[🗣 پیوی²](tg://openmessage?user_id=$from_id)",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text' => "پاسخ", 'callback_data' => "djckkdkkcld_$from_id"]],
],
])
]);
}
//====[ADMIN]====//
if(in_array($chat_id,$AdminS)){
if($text == "/admin" or $text == "🔙 | بازگشت به منو"){
$Bot["step"] = "none";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"خوش آمدید🌹",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"?? | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]); 
exit;
}
if($text == "〽️ متن اسپانسر"){
$Bot["step"] = "fmldoeo9392kdor";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⚜ متن مورد نظر را ارسال کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔙 | بازگشت به منو"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($step == "fmldoeo9392kdor"){ 
$Bot["step"] = "free";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
file_put_contents("sp.txt",$text);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ تنظیم شد",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"🔍 | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]); 
}
if($text == "⚖ | متن قوانین"){
$Bot["step"] = "djdi8d87eu3j3kd";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⚜ متن مورد نظر را ارسال کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔙 | بازگشت به منو"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($step == "djdi8d87eu3j3kd"){ 
$Bot["step"] = "free";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
file_put_contents("gv.txt",$text);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ تنظیم شد",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"🔍 | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($text == "📈 | آمار ربات"){
$alluser = file_get_contents("ArmQbdMwdLQ/ArmQbdMwdLQi.txt");
$alaki = explode("\n",$alluser);
$allusers = count($alaki);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📈 وضعیت ربات به شرح زیر میباشد :",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"$allusers",'callback_data'=>'join'],['text'=>'آمار ربات 📊','callback_data'=>'join']],
[['text'=>"=•=•=•=•=•=•=•=•=•=•=•=•=•=•=•=•=•=",'callback_data'=>'join']],
[['text'=>"$date",'callback_data'=>'join'],['text'=>'تاریخ 📆','callback_data'=>'join']],
[['text'=>"$time",'callback_data'=>'join'],['text'=>'زمان ⏰','callback_data'=>'join']],
]
        ])
      ]);
}
if($text == "🆔 | جوین اجباری دوم"){
$Bot["step"] = "fjdkieie88edene7d";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🆔 ایدی گروه/چنل خود را بدون @ ارسال کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔙 | بازگشت به منو"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($step == "fjdkieie88edene7d"){ 
$Bot["step"] = "free";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
file_put_contents("gp.txt",$text);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ تنظیم شد",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"🔍 | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]); 
}
if($text == "📸 | پیج اول"){
$Bot["step"] = "xjeu2ieu";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📸 ایدی پیج خود را بدون @ ارسال کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔙 | بازگشت به منو"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($step == "xjeu2ieu"){ 
$Bot["step"] = "free";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
file_put_contents("insta1.txt",$text);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ تنظیم شد",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"🔍 | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]); 
}
if($text == "📸 | پیج دوم"){
$Bot["step"] = "xudu7eueud";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📸 ایدی پیج خود را بدون @ ارسال کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔙 | بازگشت به منو"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($step == "xudu7eueud"){ 
$Bot["step"] = "free";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
file_put_contents("insta2.txt",$text);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ تنظیم شد",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"🔍 | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]); 
}
if($text == "🆔 | جوین اجباری سوم"){
$Bot["step"] = "deoieieis";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🆔 ایدی گروه/چنل خود را بدون @ ارسال کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔙 | بازگشت به منو"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($step == "deoieieis"){ 
$Bot["step"] = "free";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
file_put_contents("channel3.txt",$text);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ تنظیم شد",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"🔍 | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]); 
}
if($text == "🆔 | جوین اجباری چهارم"){
$Bot["step"] = "dje7727eudd";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🆔 ایدی گروه/چنل خود را بدون @ ارسال کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔙 | بازگشت به منو"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($step == "dje7727eudd"){ 
$Bot["step"] = "free";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
file_put_contents("channel4.txt",$text);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ تنظیم شد",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"🔍 | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]); 
}
if($text == "💠 | پیام به کاربر"){
$Bot["step"] = "djekoeo28837eiiei";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"💠 به شکلی زیر ارسال کنید

ایدی عددی طرف
متن",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔙 | بازگشت به منو"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($step == "djekoeo28837eiiei"){ 
$Bot["step"] = "free";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
$jjwkekdr = explode("\n",$text);
Tel('sendMessage',[
'chat_id'=>$jjwkekdr[0],
'text'=>"$jjwkekdr[1]",
]); 
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ ارسال شد",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"🔍 | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]); 
}
if($text == "✅ | پاداش زیرمجموعه گیری"){
$Bot["step"] = "djdkoeo39398eeh";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ پاداش مورد نظر را ارسال کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔙 | بازگشت به منو"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($step == "djdkoeo39398eeh"){ 
$Bot["step"] = "free";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
file_put_contents("coinz.txt",$text);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ تنظیم شد",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"🔍 | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]);
}
if($text == "⭕️ | نام ارز ربات"){
$Bot["step"] = "ro29929d8eeje";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⭕️ | نام ارز ربات را ارسال کنيد",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔙 | بازگشت به منو"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($step == "ro29929d8eeje"){ 
$Bot["step"] = "free";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
file_put_contents("arzb.txt",$text);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ تنظیم شد",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"🔍 | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]);
}
if($text == "⬇️ | حداقل برداشت"){
$Bot["step"] = "fje73737ru";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⬇️ | حداقل برداشت را وارد کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔙 | بازگشت به منو"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($step == "fje73737ru"){ 
$Bot["step"] = "free";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
file_put_contents("bardash.txt",$text);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ تنظیم شد",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"🔍 | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]);
}
if($text == "💳 | قیمت لحظه ای"){
$Bot["step"] = "djd7e773us";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"💳 | قیمت  را وارد کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔙 | بازگشت به منو"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($step == "djd7e773us"){ 
$Bot["step"] = "free";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
file_put_contents("Price.txt",$text);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ تنظیم شد",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"🔍 | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]);
}
if($text == "🆔 | جوین اجباری اول"){
$Bot["step"] = "dksoosos9s9w827e";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🆔 ایدی گروه/چنل خود را بدون @ ارسال کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔙 | بازگشت به منو"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($step == "dksoosos9s9w827e"){ 
$Bot["step"] = "free";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
file_put_contents("channel.txt",$text);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ افزوده شد",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"🔍 | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]);
}
if($text == "👥 | متن زیرمجموعه"){
$Bot["step"] = "dkod9e928rif38if";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👥 متن زيرمجموعه گیری را ارسال کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔙 | بازگشت به منو"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($step == "dkod9e928rif38if"){ 
$Bot["step"] = "free";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
file_put_contents("capi.txt",$text);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ تنظیم شد",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"🔍 | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]);
}
elseif($text == "➖ | حذف ادمین"){
if ($chat_id == $admin) {
$Bot["step"] = "dje7227ueud";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🔰 آیدی عددی فرد مورد نظر را جهت ادمین شدن در ربات ارسال کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"بازگشت"]],
],
"resize_keyboard"=>true,
])
]); 
}else{
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"این بخش برای ادمین اصلی طراحی شده است",]); }}elseif($step == "dje7227ueud"){
$Bot["step"] = "none";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
$AbQs = file_get_contents("Abol.Admin", "a");
$adm = str_replace("$text,", "", $AbQs);
file_put_contents("Abol.Admin", $adm);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📌 با موفقیت حذف شد",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"🔍 | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]);
}
elseif($text == "➕ | افزودن ادمین"){
if ($chat_id == $admin) {
$Bot["step"] = "dj3727ue";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🔰 آیدی عددی فرد مورد نظر را جهت ادمین شدن در ربات ارسال کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"بازگشت"]],
],
"resize_keyboard"=>true,
])
]); 
}else{
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"این بخش برای ادمین اصلی طراحی شده است",
]); 
}}
elseif($step == "dj3727ue"){
$Bot["step"] = "none";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
$AbQs = fopen("Abol.Admin", "a") or die("Unable to open file!");
fwrite($AbQs, "$text,");
fclose($AbQs);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📌 با موفقیت افزوده شد",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"🔍 | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]);
}
elseif($text == "✅ | افزایش موجودی"){	
$Bot["step"] = "dkdo8e827uduf";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🆔 | ایدی عددی فرد مورد نظر را ارسال کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔙 | بازگشت به منو"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($step == "dkdo8e827uduf" and $text != "🔙 | بازگشت به منو"){ 
$Bot["step"] = "fdi7e7euidic";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
file_put_contents("ArmQbdMwdLQ/id.txt",$text);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🔰 | مقدار سکه مورد نظر را ارسال کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔙 | بازگشت به منو"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($step == "fdi7e7euidic" and $text != "🔙 | بازگشت به منو"){ 
$Bot["step"] = "free";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
$id = file_get_contents("ArmQbdMwdLQ/id.txt");
$Bot = json_decode(file_get_contents("ArmQbdMwdLQ/$id/$id.json"),true);
$Bot["money"] = $Bot["money"] + $text;
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$id/$id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$id,
'text'=>"✅ |  حساب شما به مقدار $text سکه شارژ شد"
]); 
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📌 | با موفقیت انجام شد",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"🔍 | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($text == "❌ | کسر موجودی"){	
$Bot["step"] = "djdi828rufijf";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🆔 | ایدی عددی فرد مورد نظر را ارسال کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔙 | بازگشت به منو"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($step == "djdi828rufijf" and $text != "🔙 | بازگشت به منو"){ 
$Bot["step"] = "fjeu827rufuf";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
file_put_contents("ArmQbdMwdLQ/id.txt",$text);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🔰 | مقدار سکه مورد نظر را ارسال کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔙 | بازگشت به منو"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($step == "fjeu827rufuf" and $text != "🔙 | بازگشت به منو"){ 
$Bot["step"] = "free";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
$id = file_get_contents("ArmQbdMwdLQ/id.txt");
$Bot = json_decode(file_get_contents("ArmQbdMwdLQ/$id/$id.json"),true);
$Bot["money"] = $Bot["money"] - $text;
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$id/$id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📌 | با موفقیت انجام شد",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"🔍 | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($text == "✅ | بن"){	
$Bot["step"] = "djci39f939f9en";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🆔 | ایدی عددی فرد مورد نظر را ارسال کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔙 | بازگشت به منو"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($step == "djci39f939f9en" and $text != "🔙 | بازگشت به منو"){ 
$Bot["step"] = "free";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
$Bot = json_decode(file_get_contents("ArmQbdMwdLQ/$text/$text.json"),true);
$Bot["step"] = "Ban";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$text/$text.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📌 | فرد با موفقیت بن شد",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"🔍 | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($text == "🔍 | اطلاعات کاربر"){	
$Bot["step"] = "dji38e7du";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🆔 | ایدی عددی فرد مورد نظر را ارسال کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔙 | بازگشت به منو"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($step == "dji38e7du" and $text != "🔙 | بازگشت به منو"){ 
$Bot["step"] = "free";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
$Bot = json_decode(file_get_contents("ArmQbdMwdLQ/$text/$text.json"),true);
$step = $Bot["step"];
$coin = $Bot["coin"];
$inv = $Bot["inv"];
$bard = $Bot["bard"];
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🔸اطلاعات حساب کاربری $text :

💰موجودی : $coin $arzb
👥تعداد زیرمجموعه : $inv
💸سابقه برداشتی ها : $bard",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"🔍 | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($text == "❌ | آن بن"){	
$Bot["step"] = "djdkkepdpp20f";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🆔 | ایدی عددی فرد مورد نظر را ارسال کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔙 | بازگشت به منو"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($step == "djdkkepdpp20f" and $text != "🔙 | بازگشت به منو"){ 
$Bot["step"] = "free";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
$Bot = json_decode(file_get_contents("ArmQbdMwdLQ/$text/$text.json"),true);
$Bot["step"] = "none";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$text/$text.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📌 | فرد با موفقیت آن بن شد",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"🔍 | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]); 
}
if($text == "🖼 | عکس زیرمجموعه"){
$Bot["step"] = "jfod93838r8iei3";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🖼 عکس مورد نظر را ارسال‌ کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔙 | بازگشت به منو"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($step == "jfod93838r8iei3"){ 
	$filephoto = $update->message->photo;
	$photo = $filephoto[count($filephoto)-1]->file_id;
	if(isset($photo)){
$Bot["step"] = "free";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
file_put_contents("pic.txt",$photo);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ تنظیم شد",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"🔍 | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]);
}else{
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❗️فقط عکس ارسال کنید بدون چیز اضافی",
]); 
}}
if($text == "✍ | پیام همگانی"){	
$Bot["step"] = "dnjekdjjdje";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✍ متن پیام خود را ارسال کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔙 | بازگشت به منو"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($step == "dnjekdjjdje"){
$Bot["step"] = "free";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
$all_member = fopen( "ArmQbdMwdLQ/ArmQbdMwdLQi.txt", 'r');
while( !feof( $all_member)) {
$user = fgets( $all_member);
Tel('sendMessage',[
'chat_id'=>$user,
'text'=>$text,
]);
}
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ ارسال شد",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"🔍 | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]); 
}
if($text == "👥 | فوروارد همگانی"){
$Bot["step"] = "xjdjie88273yvbx";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🔄 پیام را فوروارد کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🔙 | بازگشت به منو"]],
],
"resize_keyboard"=>true,
])
]); 
}
elseif($step == "xjdjie88273yvbx"){
$Bot["step"] = "free";
$outjson = json_encode($Bot,true);
file_put_contents("ArmQbdMwdLQ/$from_id/$from_id.json",$outjson);
$all_member = fopen( "ArmQbdMwdLQ/ArmQbdMwdLQi.txt", 'r');
while( !feof( $all_member)) {
$user = fgets( $all_member);
Tel('ForwardMessage',[
'chat_id'=>$user,
'from_chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}    
Tel('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ ارسال شد",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"📈 | آمار ربات"]],
[['text'=>"✍ | پیام همگانی"],['text'=>"👥 | فوروارد همگانی"]],
[['text'=>"❌ | آن بن"],['text'=>"✅ | بن"]],
[['text'=>"❌ | کسر موجودی"],['text'=>"✅ | افزایش موجودی"]],
[['text'=>"✅ | پاداش زیرمجموعه گیری"],['text'=>"⭕️ | نام ارز ربات"]],
[['text'=>"🆔 | جوین اجباری اول"],['text'=>"🆔 | جوین اجباری دوم"]],
[['text'=>"🆔 | جوین اجباری چهارم"],['text'=>"🆔 | جوین اجباری سوم"]],
[['text'=>"📸 | پیج دوم"],['text'=>"📸 | پیج اول"]],
[['text'=>"👥 | متن زیرمجموعه"],['text'=>"🖼 | عکس زیرمجموعه"]],
[['text'=>"⚖ | متن قوانین"],['text'=>"💠 | پیام به کاربر"]],
[['text'=>"⬇️ | حداقل برداشت"],['text'=>"🔍 | اطلاعات کاربر"]],
[['text'=>"➕ | افزودن ادمین"],['text'=>"➖ | حذف ادمین"]],
[['text'=>"🔙 بازگشت"],['text'=>"💳 | قیمت لحظه ای"]],
],
"resize_keyboard"=>true,
])
]); 
}
}
}
if(file_exists(error_log))unlink(error_log);
?>