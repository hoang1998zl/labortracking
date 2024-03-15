<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:2|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'required|min:10|max:15',
            'message' => 'required',
            'position' => 'nullable',
            'company' => 'nullable',
            'scale' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Bắt buộc phải nhập tên!',
            'name.max' => 'Tên không quá 100 ký tự.',
            'name.min' => 'Tên ít nhất 2 ký tự.',
            'email.required' => 'Bắt buộc phải nhập email!',
            'email.email' => 'Email không hợp lệ!',
            'phone.required' => 'Bắt buộc phải nhập số điện thoại.',
            'phone.min' => 'Số điện thoại ít nhất 10 số.',
            'phone.max' => 'Số điện thoại không quá 15 số.',
            'message.required' => 'Hãy cho chúng tôi biết lời nhắn của bạn.',
        ];
    }
}
