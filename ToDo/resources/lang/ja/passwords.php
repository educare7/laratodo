<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Password Reminder Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match reasons
    | that are given by the password broker for a password update attempt
    | has failed, such as for an invalid token or invalid new password.
    |
    */

    'reset'     => 'パスワードをリセットしました。',
    'sent'      => 'パスワードリマインダーを送信しました。',
    'throttled' => '時間を置いて再度お試しください。',
    'token'     => 'このパスワードリセットトークンは無効です。',
    'user'      => 'このメールアドレスに一致するユーザーを見つけることが出来ませんでした。',

    'reset' => [
        'title' => 'パスワードリセット',
        'form' => [
            'email' => 'メールアドレス',
            'password' => 'パスワード',
            'confirm_password' => 'パスワード確認',
        ],
        'button' => 'パスワードリセット',
    ],

    'reset_password' => 'パスワードをリセットする',
    'email_address' => 'メールアドレス',
    'password' => 'パスワード',
    'confirm_password' => 'パスワードの確認',
    'reset_password_button' => 'パスワードをリセット',
    'reset_password_link' => '再発行リンクを送る',
    'forgot_your_password' => 'パスワードを忘れた場合はこちら',
    'before_confirm_password' => '続行する前にパスワードを確認してください',
];
