clone:

setup:
	@make build
	@make install
	docker-compose exec app cp .env.example .env
	docker-compose exec app php artisan key:generate
	@make open


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

## アプリケーションで必要なライブラリをインストール
install:
	docker-compose exec app composer install

## DBのマイグレーション
migrate:
	docker-compose exec app php artisan migrate
fresh:
	docker compose exec app php artisan migrate:fresh --seed
seed:
	docker compose exec app php artisan db:seed

## laravel1のキャッシュクリア
cache-clear:
	docker-compose exec app php artisan config:clear
	docker-compose exec app php artisan cache:clear
	docker-compose exec app php artisan route:clear
	docker-compose exec app php artisan view:clear
	docker-compose exec app php artisan config:cache


open:
	open http://localhost

## laravel_web: workspace container bash
app:
	docker-compose exec app bash

web:
	docker-compose exec web bash

db:
	docker-compose exec db bash

heroku-deploy:
	# サブディレクトリをプッシュ
	git subtree push --prefix src/my-bbs/ heroku master
