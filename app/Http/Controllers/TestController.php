<?php

namespace App\Http\Controllers;

use App\TestModel;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $model = new TestModel();
        echo '<pre>';
        var_dump($model->test());
        echo '<pre>';
        die();
    }
}
