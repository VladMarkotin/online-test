<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserTestModel;
use App\Models\TestModel;
use App\Models\QuestionModel;
use Auth;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $testIds = UserTestModel::select('test_id')->where('user_id', Auth::id())->get()->toArray();
        $testIds = array_column($testIds, 'test_id');
        $tests = TestModel::whereIn('id', $testIds)->get();//->toArray();
        
        return view('tests.index')->with(compact('tests'));
    }

    public function show($id)
    {
        //$id = $request->route()->named('show');
        //dd($id);
        $tasks = QuestionModel::where('test_id', $id)->get();//->toArray();
        //$tasks = array_column($tasks, 'options');
        //dd($tasks);
        return view('tests.test')->with(compact('tasks'));
    }
}
