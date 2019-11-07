<?php

namespace App\Http\Controllers;

use App\Jobs\ServiceJob;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function job()
    {
        $i = 0;
        while($i < 100){
            dispatch(new ServiceJob());
            $i++;
        }

        return [
            'msg' => 'Cupom criado!'
        ];
    }
}
