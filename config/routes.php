<?php
/**
 * Routes configuration.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * It's loaded within the context of `Application::routes()` method which
 * receives a `RouteBuilder` instance `$routes` as method argument.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

/*
 * This file is loaded in the context of the `Application` class.
 * So you can use `$this` to reference the application class instance
 * if required.
 */
return function (RouteBuilder $routes): void {
    /*
     * The default class to use for all routes
     */
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder): void {
        /*
         * 【変更】最初のページ（/）にアクセスしたとき、新しく作った 'top' (top.php) を開くようにしました。
         * 元の環境チェック画面（home.php）に戻したい場合は、末尾の 'top' を 'home' に書き換えてください。
         */
        $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'top']);

        /*
         * 【追加】「登録」ボタンを押したときの遷移先（/add）にアクセスしたとき、'add' (add.php) を開くように設定しました。
         */
        $builder->connect('/add', ['controller' => 'Pages', 'action' => 'display', 'add']);
        $builder->connect('/list', ['controller' => 'Pages', 'action' => 'display', 'index_list']);
        $builder->connect('/output', ['controller' => 'Pages', 'action' => 'display', 'output']);

        /*
         * ...and connect the rest of 'Pages' controller's URLs.
         */
        $builder->connect('/pages/*', 'Pages::display');

        /*
         * Connect catchall routes for all controllers.
         */
        $builder->fallbacks();
    });
};
