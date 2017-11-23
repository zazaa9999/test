<?php
curl -X POST \
-H 'Content-Type:application/json' \
-H 'Authorization: Bearer {XAWCotmUZKAUYUCDq+5fWv9+x3Tfq5OqAnh2ZwJs87MPxJifNJDbXaytleeGdZxS66ifQOL38Lm+szCINlTmiCYEpQNHC48849i486FGDQqamIipYskbifuHWptKYUXeNN6PI439E01d0hOq4BAKGQdB04t89/1O/w1cDnyilFU=}' \
-d '{
    "replyToken":"nHuyWiB7yP5Zw52FIkcQobQuGDXCTA",
    "messages":[
        {
            "type":"text",
            "text":"Hello, user"
        },
        {
            "type":"text",
            "text":"May I help you?"
        }
    ]
}' https://api.line.me/v2/bot/message/reply
?>
