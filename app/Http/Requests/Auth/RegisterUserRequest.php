<?php

namespace App\Http\Requests\Auth;


use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
            'email' => ['required', 'string', 'min:7', 'email', 'max:255', 'unique:' . User::class],
            'phone' => ['required', 'min:10', 'max:12', 'regex:/(((\+|)84)|0)(1|2|3|4|5|6|7|8|9)+([0-9]{8}|[0-9]{9})\b/'],
            'password' => ['required', 'min:8', 'max:255', Password::defaults(), 'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/'],
            'company_name' => ['required', 'string', 'min:2', 'max:255'],
            'company_code' => ['required', 'string', 'min:2', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            'email.string' => 'Email không hợp lệ!',
            'email.required' => 'Bắt buộc phải nhập email!',
            'email.email' => 'Email không hợp lệ!',
            'email.min' => 'Email không hợp lệ!',
            'email.max' => 'Email không quá 255 ký tự.',
            'email.unique' => 'Email này đã có người sử dụng.',
            'phone.required' => 'Bắt buộc phải nhập số điện thoại.',
            'phone.string' => 'Số điện thoại không hợp lệ!',
            'phone.min' => 'Số điện thoại ít nhất 10 ký tự!',
            'phone.max' => 'Số điện thoại không quá 12 ký tự.',
            'phone.regex' => 'Số điện thoại không hợp lệ.',
            'password.required' => 'Bắt buộc phải nhập mật khẩu.',
            'password.string' => 'Mật khẩu không hợp lệ!',
            'password.min' => 'Mật khẩu ít nhất 8 ký tự!',
            'password.max' => 'Mật khẩu không quá 255 ký tự.',
            'password.regex' => 'Mật khẩu phải dài ít nhất 8 ký tự, bao gồm chữ viết hoa, chữ thường, số và ký tự.',
            'company_name.required' => 'Bắt buộc phải nhập tên công ty.',
            'company_name.string' => 'Tên công ty phải là ký tự.',
            'company_name.min' => 'Mật khẩu ít nhất 8 ký tự!',
            'company_name.max' => 'Mật khẩu không quá 255 ký tự.',
            'company_code.required' => 'Bắt buộc phải nhập mã công ty.',
            'company_code.string' => 'Mã công ty phải là ký tự.',
            'company_code.min' => 'Mật khẩu ít nhất 8 ký tự!',
            'company_code.max' => 'Mật khẩu không quá 255 ký tự.',
        ];
    }
}
