<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TestController extends Controller
{
    public function show(Request $request)
    {

        $i = $request->session()->get('ahuet');
        echo $i;
        $request->session()->put('ahuet', $i + 1);
        //$temporary = session('ahuet');
        print_r($request->session()->all());
        //echo $temporary;

        $arr = ['qwe', 'asd', 'zxc'];
        $time = new \DateTime('2018-10-13');
        $date = $time->format('w');
        return view('test.show', ['date' => $date, 'arr' => $arr]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function form(Request $request)
    {

        if ($request->has('name') and $request->has('age')) {
            // проверим отправку формы
            $request->flash();
        }


        return view('test.form');


        if ($request->isMethod('get')) {
            return view('test.form'); // представление с формой
        }

        // Выполнится после отправки формы:
        if ($request->isMethod('post')) {
            return view('test.result', [
                'sum' => $request->input('num1') + $request->input('num2'),
                'method' => $request->method(),
                'all' => $request->all()
            ]);
        }
    }

    public function result(Request $request)
    {
        // Здесь выведем данные формы
        return $request->old('name') . ' ' . $request->old('age');
    }

    public function sum($num1, $num2)
    {
        return 'Result: ' . ($num1 + $num2);
    }

//    public function result(Request $request)
//    {
//        return view('test.result', [
//            'sum' => $request->input('num1') + $request->input('num2'),
//            'method' => $request->method()
//        ]);
//    }

    /**
     * @param Request $request
     * @param null $param
     */
    public function method(Request $request, $param = null)
    {
        print_r($request->session()->get('ahuet'));
        if ($request->is('test/method*')) {
            echo "!!!";

        }
        $url = $request->fullUrlWithQuery(['bar' => 'baz']);
        print_r($url);
        echo "<br>";
        print_r($request->path());
        echo "<br>";
        print_r($request->url());
        echo "<br>";
        print_r($request->fullUrl());

        echo "!";
        die;
    }


    public function show1(Request $request)
    {
        $error = '';
        if ($request->method() === 'POST') {
            //$num = $request->input('num');

            return redirect()->route('huyak')->withInput();
            if ($num > 0 && $num <= 10) {
                return redirect('test/show2');
            } else {
                $error = 'некорректное число ' . $num;

                return redirect('test/show2')->withInput();
            }
        }

        return view('test/show1', ['error' => $error]);
    }

    public function show2(Request $request)
    {
        print_r(old());
        print_r($request->input('num'));
        print_r($request->all());

        return 'show2';
    }

    public function lizatPizdu(Request $request)
    {
        $result = $request->cookie('time');
        if ($result) {
            $result = time() - $result;
        }

        return response()->view('test/lizat-pizdu', ['result' => $result])->cookie('time', time());
    }


}
