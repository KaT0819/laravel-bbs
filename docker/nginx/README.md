# nginxの定義関係
http, https共にアクセス可能な状態にしてあります。
SSL証明書についてはmkcertを用いてファイルを生成しています。

## SSL証明書の設置

参考
https://qiita.com/ucan-lab/items/c7f0690227ce7da4a172

``` shell
# mkcertのインストール
brew install mkcert

# ローカル認証局(CA： Certification Authority)の作成
mkcert -install

# chromeで以下を開き、DISABLED => ENABLED に変更する（要ブラウザ再起動）
chrome://flags/#allow-insecure-localhost

# 秘密鍵、公開鍵の作成 ※リポジトリ直下で実行想定
mkcert -cert-file ./docker/nginx/conf.d/localhost.pem -key-file ./docker/nginx/conf.d/localhost-key.pem localhost

```


## nginxコマンド
nginxのコンテナに入り実行

```
# configファイルのテスト
/etc/init.d/nginx configtest

nginx: the configuration file /etc/nginx/nginx.conf syntax is ok
nginx: configuration file /etc/nginx/nginx.conf test is successful


# 再起動
/etc/init.d/nginx reload

[ ok ] Reloading nginx: nginx.


# 起動状態確認
/etc/init.d/nginx status

[ ok ] nginx is running.

```

## restartコマンド
reloadと同様なコマンドとして、restartがありますが、こちらの場合はnginxのコンテナが停止してしまいます。
reloadでもうまく設定が切り替わらないような場合はコンテナ自体を再起動するとうまくいくかもしれません。

```
docker-compose restart web
```
* docker-composeコマンドはリポジトリ直下にディレクトリを移動してから実行します。
