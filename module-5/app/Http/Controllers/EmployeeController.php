<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    private $user = [];
    protected $id = 1;

    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        if ($request->header('Content-Type') == 'application/json') {
            $name = $request->input('user.name');
            $last_name = $request->input('user.last_name');
            $position = $request->input('user.position');
            $address = $request->input('user.address');
            $email = $request->input('user.email');
            $workData = $request->input('user.workData');
        } else {
            $name = $request->input('name');
            $last_name = $request->input('last_name');
            $position = $request->input('position');
            $address = $request->input('address');
            $email = $request->input('email');
            $workData = $request->input('workData');
            $json_Data = json_decode($request->input('JSON_data'));
        }

        $this->user[$this->id] = [
            'name' => $name,
            'last_name' => $last_name,
            'position' => $position,
            'address' => $address,
            'email' => $email,
            'workData' => $workData
        ];
        $this->id++;
        return $this->user;

    }

    public function update(Request $request, $id)
    {
        if ($request->header('Content-Type') == 'application/json') {
            $this->user[$id]['name'] = $request->input('user.name');
            $this->user[$id]['last_name'] = $request->input('user.last_name');
            $this->user[$id]['position'] = $request->input('user.position');
            $this->user[$id]['address'] = $request->input('user.address');
            $this->user[$id]['email'] = $request->input('user.email');
            $this->user[$id]['workData'] = $request->input('user.workData');
        } else {
            $this->user[$id]['name'] = $request->input('name');
            $this->user[$id]['last_name'] = $request->input('last_name');
            $this->user[$id]['position'] = $request->input('position');
            $this->user[$id]['address'] = $request->input('address');
            $this->user[$id]['email'] = $request->input('email');
            $this->user[$id]['workData'] = $request->input('workData');
        }
    }

    public function getPath(Request $request)
    {
        return $request->path();
    }

    public function getUrl(Request $request)
    {
        return $request->url();
    }
}
