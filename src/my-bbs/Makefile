clone:

setup:
	@make build
	@make install
	@make migrate
	@make open


## Sailコンテナの起動
up:
	./vendor/bin/sail up -d


## Sailコンテナのビルド
build:
	./vendor/bin/sail up -d --build

## Sailコンテナの停止
kill:
	./vendor/bin/sail kill

down:
	./vendor/bin/sail down


## Sailコンテナの再起動
reload: down up

## docker-clean: docker remove all containers in stack
clean:
	./vendor/bin/sail rm -fv --all
	./vendor/bin/sail down --rmi local --remove-orphans

## アプリケーションで必要なライブラリをインストール
install:
	./vendor/bin/sail composer install

## DBのマイグレーション
migrate:
	./vendor/bin/sail artisan migrate
fresh:
	./vendor/bin/sail artisan migrate:fresh --seed
seed:
	./vendor/bin/sail artisan db:seed

## laravel1のキャッシュクリア
cache-clear:
	./vendor/bin/sail artisan config:clear
	./vendor/bin/sail artisan cache:clear
	./vendor/bin/sail artisan route:clear
	./vendor/bin/sail artisan view:clear
	./vendor/bin/sail artisan config:cache


## 開発環境のページをブラウザで表示
open:
	open http://localhost/articles


## laravel_web: workspace container bash
app:
	./vendor/bin/sail bash

web:
	./vendor/bin/sail docker-compose exec web bash

db:
	./vendor/bin/sail mysql

