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

### sailコマンドを短くするための記述
sailの各種コマンドを実行する際には、下記のように記述する必要がある。

./vendor/bin/sail コマンド

少々長いため、aliasを指定しておくことで、「./vendor/bin/sail」の部分を「sail」だけで実行可能になる。
``` shell
echo "alias sail=\"vendor/bin/sail\"" >> ~/.zshrc
source .zshrc

sail version
```


### バックグラウンドでのsailコンテナの起動
``` shell
sail up -d
```

### バックグラウンドでのsailコンテナの停止
``` shell
sail down
```

### パッケージの追加
``` shell
# インストール
sail composer require [パッケージ名]
# インストール開発環境のみのパッケージ
sail composer require --dev [パッケージ名]

# laravel-ide-helperの追加
sail composer require --dev barryvdh/laravel-ide-helper
# ファサードのPHPDocを生成
sail artisan ide-helper:generate

# SAILでSSL
sail up -d
sail composer require ryoluo/sail-ssl --dev
sail artisan sail-ssl:install
sail down
sail up

# sail artisan sail-ssl:publish

# laravel-ide-helperの追加
sail composer require laravelcollective/html

```


### laravel cache clear
``` shell
sail artisan cache:clear
sail artisan config:clear
sail artisan route:clear
sail artisan view:clear
```
