# はじめに

本当に攻撃性のあるコードか簡単に確認できるように作成したもの。

# 起動まで

- Dockerfileがいるところまで言って以下コマンドでimage作成。タグ名が『samle123』となります。
```
$ docker build -t samle123 .
```

- 次に以下コマンドで起動
```
$ docker run -dit --name my-samle123 -p 8089:80 samle123
```

# 表示
以下『192.168.99.100』の箇所は環境によって違うかと思います。windowsとかならlocalhostでも行けそう。

http://192.168.99.100:8089/sample1.php

# 注意
php変えるだけでは表示同じなため、php変更時は以下コマンド打ってください。
```
$ docker stop my-samle123
$ docker rm my-samle123
$ docker rmi samle123
$ docker build -t samle123 .
$ docker run -dit --name my-samle123 -p 8089:80 samle123
```

# 攻撃になるようなスクリプト以下

```
//スクリプト実行パターン ※name1 ※name2
<script>alert('aa')</script>


//タグを変えられるパターン ※name1 ※name2 ※name3 ※name4
<p style="background-color: red;">aaaa</p><script>alert('aa')</script>


//これ送信してボタン押すとjs発火 ※name3(ボタン) ※name4(イメージリンク)
1 onclick=alert('aa');

//これ送信してimagのリンク押すとアラートでて攻撃のものとなる ※name4(イメージリンク)
javascript:alert('aa')

```

# その他
sample1が脆弱性ある方として作成しています。

# 実際攻撃のイメージ動画
[https://user-images.githubusercontent.com/20424289/184545517-4939838a-1509-416c-83dd-ff2d1ab735d7.mov](https://github.com/sachiko-kame/XSSPHPSample/issues/1)

# 参考
dockerファイルイメージについて
https://hub.docker.com/_/php


dockerファイルコマンド[build]
https://docs.docker.jp/engine/reference/builder.html


悪意あるスクリプト参考
https://www.tohoho-web.com/ex/xss.html

ipaのリンクも
https://www.ipa.go.jp/files/000017316.pdf

