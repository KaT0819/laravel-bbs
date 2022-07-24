clone:

setup: net build install
	cp .env.example .env
	docker-compose exec app php artisan key:generate


## dockerコンテナの起動
up:
	docker-compose up -d

## dockerコンテナのビルド
build:
	docker-compose up -d --build

## dockerコンテナの停止
kill:
	docker-compose kill

## dockerコンテナの再起動
reload: kill up

## docker-clean: docker remove all containers in stack
clean:
	docker-compose rm -fv --all
	docker-compose down --rmi local --remove-orphans

## dockerネットワークの作成
net:
	docker network create my-network

## アプリケーションで必要なライブラリをインストール
install:
	docker-compose exec app composer install

## DBのマイグレーション
migrate:
	docker-compose exec app php artisan migrate

## laravel1のキャッシュクリア
cache-clear:
	docker-compose exec app php artisan config:clear
	docker-compose exec app php artisan cache:clear
	docker-compose exec app php artisan route:clear
	docker-compose exec app php artisan view:clear
	docker-compose exec app php artisan config:cache

## laravelアプリケーションの起動
serv:
	docker-compose exec app php artisan serv

check:
	wget http://localhost:8000/index.html

## laravel_web: workspace container bash
bash:
	docker-compose exec app bash

## mysql: workspace container bash
db-bash:
	docker-compose exec db bash

heroku-deploy:
	# サブディレクトリをプッシュ
	git subtree push --prefix src/my-bbs/ heroku master
