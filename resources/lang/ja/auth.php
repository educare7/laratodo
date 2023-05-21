<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'register' => [
        'title' => '新規登録',
        'form' => [
            'name' => '名前',
            'email' => 'メールアドレス',
            'password' => 'パスワード',
            'confirm_password' => 'パスワード(確認用)',
        ],
        'button' => '登録',
        'success' => 'ユーザーを登録しました。',
    ],

    'login' => [
        'title' => 'ログイン',
        'form' => [
            'name' => '名前',
            'email' => 'メールアドレス',
            'password' => 'パスワード',
            'confirm_password' => 'パスワード(確認用)',
            'remember_me' => 'ログイン状態を保存する',
            'forgot_your_password' => 'パスワードを忘れた場合はこちら',
        ],
        'button' => 'ログイン',
        'success' => 'ログインしました。',
    ],
    
    'failed' => '認証情報が登録されていません。',
    'password' => '入力されたパスワードが正しくありません。',
    'throttle' => 'ログイン試行回数が規定回数を超過しました。:seconds秒後に再度お試しください。',    




    'reset_password' => 'パスワードをリセットする',
    'email_address' => 'メールアドレス',
    'password' => 'パスワード',
    'confirm_password' => 'パスワードの確認',
    'reset_password_button' => 'パスワードをリセット',
];
?>