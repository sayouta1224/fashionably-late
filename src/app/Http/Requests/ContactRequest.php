<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'gender' => 'required',
            'area_code' => ['required', 'numeric', 'max:5'],
            'local_code' => ['required', 'numeric', 'max:5'],
            'subscriber_number' => ['required', 'numeric', 'max:5'],
            'address' => 'required',
            'content' => 'required_if:content,選択してください',
            'detail' => ['required', 'max:120']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'お名前を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスは「ユーザー名@ドメイン」形式で入力してください',
            'password.required' => 'パスワードを入力してください',
            'last_name.required' => '姓を入力してください',
            'first_name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'area_code.required' => '電話番号を入力してください',
            'area_code.numeric' => '電話番号は5桁までの数字で入力してください',
            'area_code.max:5' => '電話番号は5桁までの数字で入力してください',
            'local_code.required' => '電話番号を入力してください',
            'local_code.numeric' => '電話番号は5桁までの数字で入力してください',
            'local_code.max:5' => '電話番号は5桁までの数字で入力してください',
            'subscriber_number.required' => '電話番号を入力してください',
            'subscriber_number.numeric' => '電話番号は5桁までの数字で入力してください',
            'subscriber_number.max:5' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'content.required_if:content,選択してください' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max:120' => 'お問い合わせ内容は120文字以内で入力してください'
        ];
    }
}
