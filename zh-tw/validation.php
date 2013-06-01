<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    "accepted"         => "必須接受 :attribute",
    "active_url"       => ":attribute 必須是合法的URL地址",
    "after"            => ":attribute 必須是在 :date 之後的日期",
    "alpha"            => ":attribute 只能包含英文字母",
    "alpha_dash"       => ":attribute 只能包含英文字母,數字和減號",
    "alpha_num"        => ":attribute 只能包含英文字母和數字",
    "before"           => ":attribute 必須是在 :date. 之前的日期",
    "between"          => array(
        "numeric" => ":attribute 必須在:min - :max之間",
        "file"    => ":attribute 大小必須在:min kb - :max kb 之間",
        "string"  => ":attribute 長度必須在:min - :max 之間",
    ),
    "confirmed"        => ":attribute 必須一致",
    "date"             => ":attribute 必須是合法的日期",
    "date_format"      => ":attribute 必須符合格式 :format",
    "different"        => ":attribute 必須和 :other 不同",
    "digits"           => ":attribute 位數必須是 :digits",
    "digits_between"   => ":attribute 位數必須在 :min 到 :max 之間",
    "email"            => ":attribute 必須是合法的Email格式",
    "exists"           => ":attribute 不存在",
    "image"            => ":attribute 必須是圖片",
    "in"               => ":attribute 不合法",
    "integer"          => ":attribute 必須是整數",
    "ip"               => ":attribute 必須是合法的IP地址",
    "max"              => array(
        "numeric" => ":attribute 不能大於 :max",
        "file"    => ":attribute 文件大小不能大於 :max kb",
        "string"  => ":attribute 長度不能大於 :max",
    ),
    "mimes"            => ":attribute 文件格式必須是 :values 其中之一",
    "min"              => array(
        "numeric" => ":attribute 不能小於 :min",
        "file"    => ":attribute 文件大小不能小於 :min kb",
        "string"  => ":attribute 長度不能大於 :min",
    ),
    "not_in"           => ":attribute 不合法",
    "numeric"          => ":attribute 必須是數字",
    "regex"            => ":attribute 不合法",
    "required"         => ":attribute 必須填寫",
    "required_if"      => ":other 為 :value 的時候必須填寫 :attribute",
    "required_with"    => ":values 填寫了的時候也必須填寫 :attribute",
    "required_without" => ":values 不填寫的時候必須填寫 :attribute",
    "same"             => ":attribute 必須和 :other 相同",
    "size"             => array(
        "numeric" => ":attribute 位數必須是 :size",
        "file"    => ":attribute 大小必須是 :size kb",
        "string"  => ":attribute 長度必須為 :size characters",
    ),
    "unique"           => ":attribute 已經存在了",
    "url"              => ":attribute 格式不正確",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => array(),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => array(),

);
