# php.ini
デフォルトからの変更点

``` ini

;html_errors = On
↓ 有効化
html_errors = On

;extension=pdo_mysql
↓ 有効化
extension=pdo_mysql

date.timezone =
↓ 日本を指定
date.timezone = "Asia/Tokyo"

mbstring.language =
↓ 日本語を指定
mbstring.language = Japanese

mbstring.internal_encoding =
↓ 非推奨なのでコメントアウト
;mbstring.internal_encoding =
```
