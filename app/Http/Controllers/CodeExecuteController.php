<?php

namespace App\Http\Controllers;

use App\Http\Services\CodeExecutorService;
use Illuminate\Http\Request;

class CodeExecuteController extends Controller
{
    //public function run(Request $request)
{
    $request->validate([
        'code' => 'required|string|max:5000',
        'version' => 'required|in:74,80,81,82'
    ]);

    return (new CodeExecutorService)->execute(
        $request->version,
        $request->code
    );
}
}
