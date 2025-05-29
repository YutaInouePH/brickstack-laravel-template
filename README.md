# brickstack-laravel-template

## About

Laravelのテンプレートです。

主にフロント側重視でバックエンド側のロジックは必要なし。HTMLの書き出しが可能になる。

## Requirements

- Docker: スムーズに開発を行うためにDockerを使用します。
- PHP 8.3: Dockerが使用できないのであれば、PHP 8.3 での動作が必要です。
- nvm: Node.jsのバージョン管理に使用します。

## Installation

### Dockerの場合:

1. リポジトリをクローンします。

```bash
git clone https://github.com/YutaInoue/brickstack-laravel-template.git
```

2. 環境設定ファイルをコピーします。

```bash
cd brickstack-laravel-template/environments/local
cp example/.env .
cp example/my-php.ini .
```

3. environments/local/.env のファイルを必要に応じて編集します。

```dotenv
APP_NAME=brickstack-laravel-template
APP_ENV=local
COMPOSE_PROJECT_NAME=${APP_NAME}-${APP_ENV}

WEB_PORT=8001
```

4. Docker イメージをビルドし、コンテナを起動します。

```bash
docker compose build
docker compose up -d
```

5. php-fpm コンテナに入って composer install を実行します。

```bash
docker compose exec php-fpm bash
composer install
```

6. .env ファイルを作成します。必要に応じて各種ファイルを編集します。以下、設定の例です。

```dotenv
APP_URL=http://localhost:8001

SESSION_DRIVER=file
```

7. `APP_KEY` を生成します。

```bash
php artisan key:generate
```

8. コンテナから抜け、node_modules をインストールします。

```bash
exit
cd ../../src
nvm use
npm install
```

これで開発環境が整いました。

### Dockerなしの場合:

Coming soon...

### Usage

Coming soon...
