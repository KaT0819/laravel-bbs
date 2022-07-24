# laravel-bbs

## 環境構築
### dockerのインストール

### dockerコンテナ起動
``` shell
make init
```

### .envファイルの修正
DB_XXXXを以下のように修正

``` env
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=mybbs
DB_USERNAME=user
DB_PASSWORD=password
```

### phpのコンテナへ入る
``` shell
make bash

# コンテナ内の/var/www（ソースのsrc/my-bbsの内容が同期されているディレクトリ）の直下に移動した状態なのでここでartisanコマンドが使えます。
php artisan -V

Laravel Framework 8.83.22
```


## create laravel project
composer create-project laravel/laravel:^8.0 my-bbs



## Controller作成
``` shell
php artisan make:controller Admin/NewsController
```


## laravel cache clear
``` shell
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

