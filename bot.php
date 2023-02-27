<?php

require_once('config.php');

$content = file_get_contents("php://input");

$update = json_decode($content, true);

$chat_id = $update["message"]['chat']['id'];

$text = $update["message"]['text'];

$message_id = $update["message"]['message_id'];

if ($text == "/start") {

    $matn = "به ربات من خوش آمدید ❤️";

    

    $inline_keyboard = array(

        array('💳 خرید سرویس 💳'),

        array('📂 سرویس های من 📂', '👤 حساب کاربری 👤'),

        array('💰 افزایش موجودی 💰'),

        array('📚 آموزش اتصال 📚', '💵 تعرفه ها 💵'),

        array('📞 پشتیبانی 📞')

    );

    

    $mykeyboard = array(

        'resize_keyboard' => true,

        'keyboard' => $inline_keyboard

    );

    

    MessageRequestJson("sendmessage", array('chat_id' => $chat_id, 'text' => $matn, 'reply_markup' => $mykeyboard));

    

}

else if ($text == '💳 خرید سرویس 💳') {

    $matn = "لطفا اپراتور خودتونو انتخاب کنید🙂";

    

    $key = array(

        array('ایرانسل','همراه اول'));

        

        $mykeyboard = array(

            'resize_keyboard' => true,

            'keyboard' => $key

            );

            

        MessageRequestJson("sendmessage", array('chat_id' => $chat_id, 'text' => $matn, 'reply_markup' => $mykeyboard));

}

        

        

        

 else if ($text == 'پنل') {

    if ($chat_id != $ADMIN_ID) {

        $matn = "دوست عزیز شما ادمین این ربات نیستید⚠️";

    } else {

        $matn = "سلام ادمین عزیز🙃 \n به پنل مدیریت خوش آمدید ❤️\n میخواید چه کاری براتون انجام بدم؟🤔";

        MessageRequestJson("sendmessage", array('chat_id' => $chat_id, 'text' => $matn));

    }

}

?>
