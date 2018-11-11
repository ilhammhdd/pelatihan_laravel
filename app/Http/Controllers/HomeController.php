<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeBalu()
    {
        csrf_token();
        $query = explode('&', $_SERVER['QUERY_STRING']);
        $params = array();

        foreach ($query as $param) {
            list($name, $value) = explode('=', $param);
            $params[urldecode($name)][] = urldecode($value);
        }

        return "ini home baru " . $params["nama"][0] . " dan " . $params["nama"][1] . " berumur " . $params["umur"][0];
    }

    public function update(Request $request)
    {
        return "alamat update " . $request->input("alamat");
    }
}
