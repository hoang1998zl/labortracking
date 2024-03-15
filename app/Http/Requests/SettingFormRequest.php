<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class SettingFormRequest extends FormRequest
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
            'email' => ['required', 'string', 'min:7', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'phone' => ['required', 'min:10', 'max:12', 'regex:/(((\+|)84)|0)(1|2|3|4|5|6|7|8|9)+([0-9]{8}|[0-9]{9})\b/'],
            'password' => ['sometimes', 'required', 'min:8', 'max:255', Password::defaults(), 'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/'],
            'company_name' => ['required', 'string', 'min:2', 'max:255'],
            'company_code' => ['required', 'string', 'min:2', 'max:255'],
            'departments.*' => ['required', 'min:2', 'max:255'],
            // 'department_distribute.*' => ['required', 'string', 'min:2', 'max:255'],
            // 'distributors.*' => ['required', 'string', 'min:2', 'max:255'],
            // 'default_structure' => ['required', 'string', 'min:2', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            'email.string' => 'Email không hợp lệ.',
            'email.required' => 'Bắt buộc phải nhập email!',
            'email.email' => 'Email không hợp lệ.',
            'email.min' => 'Email không hợp lệ.',
            'email.max' => 'Email không quá 255 ký tự.',
            'phone.required' => 'Bắt buộc phải nhập số điện thoại.',
            'phone.string' => 'Số điện thoại không hợp lệ.',
            'phone.min' => 'Số điện thoại ít nhất 10 ký tự.',
            'phone.max' => 'Số điện thoại không quá 12 ký tự.',
            'phone.regex' => 'Số điện thoại không hợp lệ.',
            'password.required' => 'Bắt buộc phải nhập mật khẩu.',
            'password.string' => 'Mật khẩu không hợp lệ.',
            'password.min' => 'Mật khẩu ít nhất 8 ký tự.',
            'password.max' => 'Mật khẩu không quá 255 ký tự.',
            'password.regex' => 'Mật khẩu phải dài ít nhất 8 ký tự, bao gồm chữ viết hoa, chữ thường, số và ký tự.',
            'company_name.required' => 'Bắt buộc phải nhập tên công ty.',
            'company_name.string' => 'Tên công ty phải là ký tự.',
            'company_name.min' => 'Mật khẩu ít nhất 8 ký tự.',
            'company_name.max' => 'Mật khẩu không quá 255 ký tự.',
            'company_code.required' => 'Bắt buộc phải nhập mã công ty.',
            'company_code.string' => 'Mã công ty phải là ký tự.',
            'company_code.min' => 'Mật khẩu ít nhất 8 ký tự.',
            'company_code.max' => 'Mật khẩu không quá 255 ký tự.',
            'departments.*.required' => 'Bắt buộc phải nhập tên phòng ban.',
            'departments.*.min' => 'Tên phòng ban ít nhất 2 ký tự.',
            'departments.*.max' => 'Tên phòng ban không quá 100 ký tự.',
            // 'distributors.*.required' => 'Bắt buộc phải nhập người phân phối thư mục.',
            // 'distributors.*.min' => 'Tên Người phân phối thư mục ít nhất 2 ký tự.',
            // 'distributors.*.max' => 'Tên Người phân phối thư mục không quá 100 ký tự.',
            // 'distributors.*.string' => 'Người phân phối thư mục phải là ký tự chuỗi.',
            // 'department_distribute.*.required' => 'Quý khách vui lòng chọn cách thức phân phối thư mục cho tất cả phòng ban.',
            // 'department_distribute.*.min' => 'Cách thức phân phối thư mục ít nhất 2 ký tự.',
            // 'department_distribute.*.max' => 'Cách thức phân phối thư mục không quá 255 ký tự.',
            // 'department_distribute.*.string' => 'Cách thức phân phối thư mục phải là ký tự chuỗi.',
            // 'default_structure.required' => 'Quý khách vui lòng nhập cấu trúc hiển thị thư mục.',
            // 'default_structure.min' => 'Cấu trúc hiển thị ít nhất 2 ký tự.',
            // 'default_structure.max' => 'Cấu trúc hiển thị không quá 100 ký tự.',
            // 'default_structure.string' => 'Cấu trúc hiển thị phải là ký tự chuỗi.',
        ];
    }
}
