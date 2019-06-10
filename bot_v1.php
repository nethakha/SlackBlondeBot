<?php

if(isset($_POST) && !empty($_POST['user_name'])) {
    $token              = ''; //ここにSlack Webhook APIのトークン
    $channel            = null;
    $text               = null;
    $as_user            = 'false';
    $attachments        = null;
    $icon_emoji         = ':blonde_woman:'; // Slackに絵文字として登録しておく
    $icon_url           = null;
    $link_names         = null;
    $mrkdwn             = null;
    $parse              = null;
    $reply_bloadcast    = null;
    $thread_ts          = null;
    $unfurl_links       = null;
    $unfurl_media       = 'true';
    $username           = 'ブロンド女性';
    if($_POST['user_name'] != 'slackbot') {
        switch($_POST['text']) {
        case 'blonde_all':
            $text = 'post_all';
            break;

        case mb_strpos($_POST['text'], 'オーキド') !== false:
            if ( rand(1,10) <= 5 ) {
                $text = 'そりゃそうじゃ。';
            } else {
                $text = '沙羅双樹';
            }
            $username = 'オーキド博士';
            $icon_emoji = ':okido_hakase:';
            break;

        case $_SERVER["REQUEST_METHOD"] == "POST" and rand(1,20) <= 1:
            $text = 'それはエゴ、じゃな。';
            $username = 'オーキド博士';
            $icon_emoji = ':okido_hakase:';
            break;

        case 'も':
            $text = 'え？';
            break;

        case mb_strpos($_POST['text'], 'なんでもなんで〜団') !== false:
            $text = 'テツアンドトモですか？';
            break;

        case 'blonde --version':
        case 'blonde -v':
            $text = 'Bronde CLI Version 0.2.2';
            break;

        case mb_strpos($_POST['text'], 'gopher') !== false:
            $text = ':gopher:';
            break;

        case mb_strpos($_POST['text'], '鶏のマネ') !== false:
            $text = 'ギュゴクォェックコェッ！';
            break;

        case mb_strpos($_POST['text'], '後回し') !== false:
            $text = 'グェーッ！！！';
            $username = 'アトマワシ';
            $icon_emoji = ':atomawasi:';
            break;

        case mb_strpos($_POST['text'], 'ほっほーい') !== false:
            $text = '野原しんのすけさんですか？';
            break;

        case mb_strpos($_POST['text'], 'むりぽ') !== false;
            $text = 'muri.lang.MuriPointerException at MuriPointerExceptionMuri.main(MuriPointerExceptionMuri.muri:1)';
            break;

        case '公開鍵教えて':
            $text = 'ecdsa-sha2-nistp256 AAAAE2VjZHNhLXNoYTItbmlzdHAyNTYAAAAIbmlzdHAyNTYAAABBBJMhOmVqPG36/1JahaygoQLAb903SvONfs5vSKy8LNZstWWB+MGj2QkvEPPka7ZmyVcC1q3GakVIpgqnYvnxS5s=';
            break;

        case 'ンギ':
            $text = 'ンギー！';
            $username = 'ンギ';
            $icon_emoji = ':hakase:';
            break;

        case mb_strpos($_POST['text'], '失礼' ) !== false:
            $text = 'そうかな？';
            break;

        case mb_strpos($_POST['text'], 'んな' ) !== false:
            $text = 'んなぁ〜';
            $username = 'ナナチ';
            $icon_emoji = ':nanachi:';
            break;

        case mb_strpos($_POST['text'], '久々にワロタ') !== false:
            $text = '「ワロタ」に修飾語を少々まぶすな！！！';
            break;

        case mb_strpos($_POST['text'], '山' ) !== false:
            $text = '「山」といえば　やま男・ゆき男・おもしろ男　ですよね！';
            break;

        case mb_strpos($_POST['text'], 'エッチ〜') !== false:
            $text = '呼ばれてますよ、博士？';
            break;

        case mb_strpos($_POST['text'], 'ｗ') !== false || mb_strpos($_POST['text'], 'w') !== false:
            $text = '笑うな。';
            break;

        case mb_strpos($_POST['text'], 'ブロンド') !== false && mb_strpos($_POST['text'], '言ってや') !== false:
            $text = '黙れ。';
            break;

        case mb_strpos($_POST['text'], 'youtube') !== false:
        case mb_strpos($_POST['text'], 'Youtube') !== false:
        case mb_strpos($_POST['text'], 'ようつべ') !== false:
            $randis = rand(1,3);
            if($randis == 1) {
                $text = 'バーチャルYoutuberのキズナアイです！';
                $username = 'アスペクト比がおかしなキズナアイ';
                $icon_emoji = ':aspect_kizuna_ai:';
            } else if($randis == 2) {
                $text = 'ハロー！キメラアイだよ！';
                $username = 'キメラアイ';
                $icon_emoji = ':kimera_ai:';
            } else if($randis == 3) {
                $text = 'どうせ・・・・・・';
                $username = 'ミライクライ';
                $icon_emoji = ':miraikurai:';
            }
            break;

        case 'さかなクン':
            $text = '提案だギョ！この娘を開放するかわりに稚魚を放流するんだギョ！';
            $username = 'さかなクン';
            $icon_emoji = ':sakana_kun:';
            break;

        case ':hakase:':
            $text = 'オーキド博士に聞いてみよう！';
            break;

        case 'じゃよガチャ':
            $text = '3連そうじゃよガチャ？';
            break;

        default:
            $text = null;
            break;
        }
    } else if($_POST['user_name'] == 'slackbot') {
        switch($_POST['text']) {


        case '提案だギョ！この娘を開放するかわりに稚魚を放流するんだギョ！':
            $text = '助けて〜！';
            break;

        case '助けて〜！':
            $text = '大人しくするんだギョ！！！';
            $username = 'さかなクン';
            $icon_emoji = ':sakana_san:';
            break;

        case mb_strpos($_POST['text'], 'オーキド') !== false:
            if ( rand(1,10) <= 5 ) {
                $text = 'そりゃそうじゃ。';
            } else {
                $text = '沙羅双樹';
            }
            $username = 'オーキド博士';
            $icon_emoji = ':okido_hakase:';
            break;

        case '3連そうじゃよガチャ？' :
            $text = '2連そうじゃよガチャ？';
            break;

        case '2連そうじゃよガチャ？' :
            $text = '1連そうじゃよガチャ？';
            break;

        case '博士じゃよ～' :
            $text = 'お前が博士だと、冗談を抜かすな。藻掻く程に血は貴様の喉を飛び出ようと狂気の渦を巻くぞ。';
            break;

        case 'そうじゃよ～' :
            $randis = rand(1,5);
            if($randis == 1) $text = 'そうかもな・・・・・・';
            if($randis == 2) $text = 'なんなんだ・・・・・・';
            if($randis == 3) $text = 'ちがうだろ・・・・・・';
            if($randis == 4) $text = 'イライラさせるなよ・・・・・・';
            if($randis == 5) $text = '言葉を吐くなら覚悟を決めろ。いくぞ。';
            break;

        case 'ごめんなさい' :
            if(rand(1,2) == 1) {
                $text = 'ころすぞ';
            }
            break;

        default :
            $text = null;
            break;
        }
    }

    if($text) {
        $payload = ['text' => $text, 'as_user' => $as_user, 'icon_emoji' => $icon_emoji, 'username' => $username, 'unfurl_media' => $unfurl_media];
        echo json_encode($payload);
    }
}


?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    </body>
</html>















