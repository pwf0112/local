<?php

namespace App\Http\Controllers\Cash;

use App\Models\System;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Data extends Controller
{
    public function handle()
    {
		$dtype = \App\Models\Dtype::select('id', 'code')->get()->pluck('code', 'id')->toArray();

		$lists['sys'] = System::select('id', 'name')->get()->pluck('name', 'id')->toArray();
		$devices = \App\Models\Device::select('id', 'name', 'type')->get()->toArray();
		foreach ($devices as $device) {
			$lists[$dtype[$device['type']]][$device['id']] = $device['name'];
		}

		$default = ['id' => null, 'name' => ''];

        $form = [
            'posi' => '',
            'port' => '',
            'ip' => '',
            'sys' => null
        ];

		foreach ($dtype as $type) {
			$form[$type] = $default;
		}

        $data = [
            'form' => $form,
            'lists' => $lists
        ];

        return $data;
    }
}
