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
make app

# コンテナ内の/var/www（ソースのsrc/my-bbsの内容が同期されているディレクトリ）の直下に移動した状態なのでここでartisanコマンドが使えます。
php artisan -V

Laravel Framework 8.83.22
```

### データベースの作成
``` shell
# データベースのコンテナへ入る
make db

# mysqlへ接続
mysql -u root -p

# パスワードを入力（パスワードはroot）

# データベースの作成
create database mybbs;

Query OK, 1 row affected (0.01 sec)

# 作成したデータベースの確認
show databases;

+--------------------+
| Database           |
+--------------------+
| information_schema |
| database           |
| mybbs              |
| mysql              |
| performance_schema |
| sys                |
+--------------------+
6 rows in set (0.05 sec)

# ユーザを作成
CREATE USER 'user'@'%' IDENTIFIED BY 'password';
# ※ユーザ名：user、アクセス元のIP：localhost、パスワード：password

Query OK, 0 rows affected (0.03 sec)


# 権限の設定
GRANT ALL PRIVILEGES ON mybbs.* TO 'user'@'%';

Query OK, 0 rows affected, 1 warning (0.01 sec)

# 権限の有効化
FLUSH PRIVILEGES;

Query OK, 0 rows affected (0.01 sec)

# MySQLの接続を切断する
exit
```articles

### データベースのマイグレーション
``` shell
# phpのコンテナへ入る
make app

php artisan migrate
```

## Laravel各種コマンド
## Model, Controller作成
``` shell
php artisan make:model Article -m -c -r
```

- オプションの意味
  - -m・・・マイグレーションファイルも併せて作成
  - -c・・・コントローラも併せて作成
  - -r・・・生成されたコントローラーにCRUDのメソッドを合わせて作成される

- -rで作成されるメソッド
  - index（一覧表示）
  - create（登録フォームの表示）
  - sotre（登録処理）
  - show（詳細表示）
  - edit（編集フォーム表示）
  - update（更新処理）
  - destroy（削除処理）



## その他コマンド

### create laravel project
Laravelプロジェクトを作成する際のコマンド
本リポジトリをクローンした場合は実行不要
``` shell
composer create-project laravel/laravel:^8.0 my-bbs
```
### laravel cache clear
``` shell
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

### laravel-ide-helperの追加
``` shell
# コンテナに入る
make app
# インストール
composer require --dev barryvdh/laravel-ide-helper
# ファサードのPHPDocを生成
php artisan ide-helper:generate
```

### laravel collectiveの追加
bladeのFormファサードを利用するため、下記のコマンドでLaravel Collectiveをインストールします。

``` shell
# コンテナに入る
make app

# インストール
composer require laravelcollective/html
```