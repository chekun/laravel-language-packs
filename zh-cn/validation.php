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

    "accepted"         => "必须接受 :attribute",
    "active_url"       => ":attribute 必须是合法的URL地址",
    "after"            => ":attribute 必须是在 :date 之后的日期",
    "alpha"            => ":attribute 只能包含英文字母",
    "alpha_dash"       => ":attribute 只能包含英文字母,数字和减号",
    "alpha_num"        => ":attribute 只能包含英文字母和数字",
    "before"           => ":attribute 必须是在 :date. 之前的日期",
    "between"          => array(
        "numeric" => ":attribute 必须在:min - :max之间",
        "file"    => ":attribute 大小必须在:min kb - :max kb 之间",
        "string"  => ":attribute 长度必须在:min - :max 之间",
    ),
    "confirmed"        => ":attribute 必须一致",
    "date"             => ":attribute 必须是合法的日期",
    "date_format"      => ":attribute 必须符合格式 :format",
    "different"        => ":attribute 必须和 :other 不同",
    "digits"           => ":attribute 位数必须是 :digits",
    "digits_between"   => ":attribute 位数必须在 :min 到 :max 之间",
    "email"            => ":attribute 必须是合法的Email格式",
    "exists"           => ":attribute 不存在",
    "image"            => ":attribute 必须是图片",
    "in"               => ":attribute 不合法",
    "integer"          => ":attribute 必须是整数",
    "ip"               => ":attribute 必须是合法的IP地址",
    "max"              => array(
        "numeric" => ":attribute 不能大于 :max",
        "file"    => ":attribute 文件大小不能大于 :max kb",
        "string"  => ":attribute 长度不能大于 :max",
    ),
    "mimes"            => ":attribute 文件格式必须是 :values 其中之一",
    "min"              => array(
        "numeric" => ":attribute 不能小于 :min",
        "file"    => ":attribute 文件大小不能小于 :min kb",
        "string"  => ":attribute 长度不能大于 :min",
    ),
    "not_in"           => ":attribute 不合法",
    "numeric"          => ":attribute 必须是数字",
    "regex"            => ":attribute 不合法",
    "required"         => ":attribute 必须填写",
    "required_if"      => ":other 为 :value 的时候必须填写 :attribute",
    "required_with"    => ":values 填写了的时候也必须填写 :attribute",
    "required_without" => ":values 不填写的时候必须填写 :attribute",
    "same"             => ":attribute 必须和 :other 相同",
    "size"             => array(
        "numeric" => ":attribute 位数必须是 :size",
        "file"    => ":attribute 大小必须是 :size kb",
        "string"  => ":attribute 长度必须为 :size characters",
    ),
    "unique"           => ":attribute 已经存在了",
    "url"              => ":attribute 格式不正确",

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
