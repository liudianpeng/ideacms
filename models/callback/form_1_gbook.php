<?php

function callback_form_1_gbook($data) {

        mail::set(App::$config);
        mail::sendmail('976510651@qq.com','您有新留言','系统收到了新的客户留言');

}
