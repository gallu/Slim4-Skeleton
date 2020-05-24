<?php
declare(strict_types=1);
namespace App\Middleware;

//
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Psr7\Response; // これは「実際にレスポンスを自力で作って返す」時に使う

use Psr\Http\Server\MiddlewareInterface;
use SlimLittleTools\Libs\Container;

//
class MiddlewareSample implements MiddlewareInterface
{
    /*
     */
    //
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        // 前処理
        // XXX

        /*
        // 呼び出しに至らない場合
        $response = new Response();
        $response = $response
                   ->withHeader('Location', Container::getContainer()->get('router')->getRouteParser()->urlFor('name'))
                   ->withStatus(302);
        return $response;
         */

        // 呼び出し
        $response = $handler->handle($request);

        // 後処理
        // XXX

        return $response;
    }
}

