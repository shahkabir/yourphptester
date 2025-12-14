<?php

namespace App\Http\Controllers;

use App\Http\Services\CodeExecutorService;
use Illuminate\Http\Request;

class CodeExecuteController extends Controller
{

    public function run(Request $request)
    {
        //print_r($request->all());
        //die();

        $request->validate([
            'code' => 'required|string|max:5000',
            'php_version' => 'nullable' //'required|in:74,80,81,82'
        ]);

        //Sanitize code input if necessary
        

        //Call Service
        $service = new CodeExecutorService();

        $result = $service->execute(
            $request->php_version,
            $request->code
        );
        
        //dd($result);

        $data = $result->getData(true);

        return view('main', [
            'php_version' => $request->php_version,
            'code'        => $request->code,
            'output'      => $data['output'] ?? '',
            'execution_time' => $data['execution_time'] ?? 0
        ]);

        //return $result;

        // return view('main', [
        //     'output' => $result->output ?? ''
        // ]);

        // return redirect()
        // ->route('home')
        // ->withInput() // keeps previous input
        // ->with('output', $result->output ?? '');
    }
}
