<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
// use App\Http\Requests\ContactRequest;
use Validator;

class ContactController extends Controller
{
    // お問い合わせ内容の処理
    public function index()
    {
        return view('index');
    }

    // 内容確認の処理
    public function confirm(Request $request)
    {
        $contact = $request->only(['last-name', 'first-name', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
        return view('confirm', compact('contact'));
    }

    // 送信ボタンの処理
    public function store(Request $request)
    {
        $contact = $request->only(['last-name', 'first-name', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
        Contact::create($contact);
        return view('thanks');
    }

    // バリデーションの処理
    // public function postValidates(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'last-name' => ['required', 'string', 'max:255'],
    //         'first-name' => ['required', 'string', 'max:255'],
    //         'gender' => ['required'],
    //         'email' => ['required', 'string', 'email', 'max:255'],
    //         'postcode' => ['required', 'integer', 'regex:/^[0-8]{3}-[0-8]{4}$/'],
    //         'address' => ['required', 'string'],
    //         'building_name' => ['nullable'],
    //         'opinion' => ['required', 'string', 'max:120'],
    //     ]);
    // }
}
