<?php

namespace App\Http\Controllers;

use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CalcController extends Controller
{
    public function processOperation(Request $request)
    {
        //dd($request);

        try {
            $this->validate($request,
                [
                    'number1' => 'required',
                    'number2' => 'required',
                ]
            );
        } catch (ValidationException $e) {
            echo $e->getMessage();
            return;
        }

        $params = $request->all();
        $number1 = $params['number1'];
        $number2 = $params['number2'];
        $operation = $params['operation'];

        /*$number1 = $request->get('number1', 0);
        $number2 = $request->get('number2', 1);
        $operation = $request->get('operation', 'sum');*/

        $result = 0;
        switch ($operation) {
            case 'sum':
                $result = $number1 + $number2;
                break;
        }

        Session::put('result', $result);

        return redirect(route('calc_form'));

    }

    public function index()
    {
        $result = Session::get('result');
        return view('calculate', compact('result'));
    }
}

