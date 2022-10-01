# laravel-bbs

## 環境構築
### Sailによる構築

### dockerコンテナ起動
``` shell
make init
```

### データベースのマイグレーション
``` shell
./vendor/bin/sail artisan migrate
```

## Laravel各種コマンド
## Model, Controller作成
``` shell
./vendor/bin/sail artisan make:model Article -m -c -r
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
curl -s "https://laravel.build/my-bbs" | bash

cd my-bbs
# 起動
./vendor/bin/sail up
```

### バックグラウンドでのsailコンテナの起動
``` shell
./vendor/bin/sail up -d
```

### バックグラウンドでのsailコンテナの停止
``` shell
./vendor/bin/sail down
```

### パッケージの追加
``` shell
# インストール
./vendor/bin/sail composer require [パッケージ名]
# インストール開発環境のみのパッケージ
./vendor/bin/sail composer require --dev [パッケージ名]

# laravel-ide-helperの追加
./vendor/bin/sail composer require --dev barryvdh/laravel-ide-helper
# ファサードのPHPDocを生成
./vendor/bin/sail artisan ide-helper:generate

# SAILでSSL
./vendor/bin/sail composer require ryoluo/sail-ssl --dev
./vendor/bin/sail artisan sail-ssl:install
./vendor/bin/sail down
./vendor/bin/sail up

# laravel-ide-helperの追加
./vendor/bin/sail composer require laravelcollective/html

```


### laravel cache clear
``` shell
./vendor/bin/sail artisan cache:clear
./vendor/bin/sail artisan config:clear
./vendor/bin/sail artisan route:clear
./vendor/bin/sail artisan view:clear
```
