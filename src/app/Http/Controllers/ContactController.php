<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\User;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $lastName = $request->input('last_name');
        $firstName = $request->input('first_name');
        $name = $lastName . 　 . $firstName;
        return view('confirm', ['name'=> $name]);

        $area_code = $request->input('area_code');
        $local_code = $request->input('local_code');
        $subscriber_number = $request->input('subscriber_number');
        $tel = $area_code . $local_code . $subscriber_number;
        return view('confirm', ['tel' => $tel]);

        $contact = $request->only(['name', 'gender', 'email', 'tel', 'address', 'building', 'content', 'detail']);
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $lastName = $request->input('last_name');
        $firstName = $request->input('first_name');
        $name = $last_name . 　 . $first_name;
        $name = $request['name'];

        $area_code = $request->input('area_code');
        $local_code = $request->input('local_code');
        $subscriber_number = $request->input('subscriber_number');
        $tel = $area_code . $local_code . $subscriber_number;
        $tel = $request['tel'];

        $contact = $request->only(['name', 'gender', 'email', 'tel', 'address', 'building', 'content', 'detail']);
        Contact::create($contact);
        return view('thanks');

    }

    public function create(ContactRequest $request)
    {
        $form = $request->all();
        User::create($form);
        return view('login');
    }

    public function login(ContactRequest $request)
    {
        return view('admin');
    }



    public function admin()
    {
        return view('admin');
    }

    public function modal()
    {
        return view('modal');
    }

    public function see()
    {
        return view('thanks');
    }

}
