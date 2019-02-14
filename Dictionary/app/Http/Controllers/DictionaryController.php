<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public function checkWord(Request $request)
    {
        $word = $request->word;
        $array = array('black' => 'Đen',
            'white' => 'Trắng',
            'yellow' => 'Vàng',
            'pink' => 'Hồng'
        );
        $select = $request->select;
        switch ($select) {
            case 'vie':
                foreach ($array as $key => $value) {
                    if ($word == $key) {
                        $result = $value;
                        break;
                    } else {
                        $result = 'Không có trong từ điển';
                    }
                }
                return view('result', compact('result', 'word'));
            case 'eng':
                foreach ($array as $key => $value) {
                    if ($word == $value) {
                        $result = $key;
                        break;
                    } else {
                        $result = 'Không có trong từ điển';
                    }
                }
                return view('result', compact('result', 'word'));
        }
    }
}
