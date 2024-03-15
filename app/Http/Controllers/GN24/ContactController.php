<?php

namespace App\Http\Controllers\GN24;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle store contact
     *
     * @param  Request $req
     * @return RedirectResponse
     */
    function store(ContactFormRequest $req): RedirectResponse
    {
        $data = $req->validated();
        $action = Contact::create([...$data]);
        if (!$action) {
            return redirect(route('gn24.index'))->with([
                "message" => "Đã có lỗi xảy ra, vui lòng thực hiện lại.",
                "type" => "error"
            ]);
        }
        return redirect(route('gn24.index'))->with([
            "message" => "Gửi thành công. Chúng tôi sẽ liên hệ với bạn trong 24 giờ tới. Xin trân trọng cảm ơn.",
            "type" => "success"
        ]);
    }


}
