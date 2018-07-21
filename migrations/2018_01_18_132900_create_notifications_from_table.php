<?php

/*
 * This file is part of Flarum.
 *
 * (c) Toby Zerner <toby.zerner@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Flarum\Database\Migration;
use Illuminate\Database\Schema\Blueprint;

return Migration::createTable(
    'notifications_from',
    function (Blueprint $table) {
        $table->integer('id')->unsigned();
        $table->integer('from_user_id')->unsigned();

        $table->foreign('id')->references('id')->on('notifications')->onDelete('cascade');
        $table->foreign('from_user_id')->references('id')->on('users')->onDelete('cascade');
    }
);