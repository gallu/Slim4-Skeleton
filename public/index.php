<?php
declare(strict_types=1);

// 基準になるディレクトリ(最後の / はない形式で)
define('BASEPATH', realpath(__DIR__ . '/..'));

// オートローダ
require(BASEPATH . '/vendor/autoload.php');

// 初期処理(testでも同じ手順で読み込みをするので、重複しないようにまとめる)
require(BASEPATH . '/src/init.php');

// 全体に設定するmiddlewareの設定
require(BASEPATH . '/src/middleware.php');

// ルーティングの設定
require(BASEPATH . '/src/routes.php');

// sessionの設定
require(BASEPATH . '/src/session.php');

// Run app
$app->run();

