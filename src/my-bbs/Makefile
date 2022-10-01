clone:

setup:
	@make build
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

## Sailコンテナの再起動
reload: kill up

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

## laravel_web: workspace container bash
app:
	./vendor/bin/sail bash

web:
	./vendor/bin/sail docker-compose exec web bash

db:
	./vendor/bin/sail mysql
