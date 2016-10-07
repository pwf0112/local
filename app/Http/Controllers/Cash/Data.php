<?php

namespace App\Http\Controllers\Cash;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Data extends Controller
{
    public function handle()
    {
        $demo = [
            ['id' => 1, 'name' => 'SYS_01'],
            ['id' => 2, 'name' => 'SYS_02'],
            ['id' => 3, 'name' => 'SYS_03'],
            ['id' => 4, 'name' => 'SYS_04'],
        ];

        $lists = [
            'mac' => $demo,
            'pri' => $demo,
            'pos' => $demo,
            'bil' => $demo,
            'sys' => $demo
        ];

        $form = [
            'posi' => '',
            'port' => '',
            'ip' => '',
            'sys' => null,
            'mac' => ['id' => 1, 'code' => 'mac101'],
            'pri' => ['id' => 4, 'code' => '@pri_4'],
            'bil' => ['id' => 2, 'code' => 'bil201'],
            'pos' => ['id' => 3, 'code' => 'pos403'],
        ];

        $data = [
            'form' => $form,
            'lists' => $lists
        ];

        return $data;
    }
}
