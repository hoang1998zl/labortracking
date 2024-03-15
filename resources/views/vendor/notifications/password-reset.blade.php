<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .a {
            margin-left: auto;
            margin-right: auto;
            padding-bottom: 50px
        }

        .b {
            font-size: 22px;
            line-height: 22px;
            font-weight: 700;
            text-align: center;
            color: rgb(88, 88, 88)
        }

        .c {
            padding: 30px 40px 30px 40px;
            background-color: white
        }

        .i {
            margin-left: auto;
            margin-right: auto;
            text-align: center
        }

        @media all and (max-width:650px) {
            .a {
                width: 95%;
            }

            .i {
                width: 50%;
            }
        }

        @media all and (min-width:700px) {
            .a {
                width: 60%;
            }

            .i {
                width: 30%;
            }
        }
    </style>
</head>

<body>

    <div style="box-sizing: border-box; background-color: rgb(221, 245, 247)">
        <div class="i">
            <img style="width: 20%;" src="{{config("app.url")."/gn24-v2/img/logo.png"}}" alt="WeOS">
        </div>
        <div class="a">
            <div style="display: flex; width: 100%;">
                <div style="height: 8px; width: 100%; background-color: rgb(79, 121, 247)"></div>
                <div style="height: 8px; width: 100%; background-color: rgb(255, 106, 0)"></div>
                <div style="height: 8px; width: 100%; background-color: rgb(0, 160, 0)"></div>
            </div>
            <div class="c">
                <p class="b">Thông báo tạo mới mật khẩu</p>
                <p>Xin chào Quý khách!</p>
                <p>Chúng tôi vừa nhận được yêu cầu cấp lại mật khẩu của Quý khách. Vui lòng nhấn nút bên dưới để thực
                    hiện việc cấp lại mật khẩu:</p>
                <a href="{{ $actionUrl }}">{{ $actionUrl }}</a>
                <p style="font-style: italic;">Đường dẫn này có hiệu lực trong vòng 60 phút kể từ khi
                    đăng ký.</p>
                <p>Nếu Quý khách không phải là người yêu cầu cấp lại mật khẩu, hãy bỏ qua email này. Xin chân thành cảm
                    ơn!</p>
                <p>Nếu cần hỗ trợ, Quý khách hãy liên hệ hòm thư chăm sóc khách hàng: <span
                        style=" color: rgb(59 130 246);">info@weos.vn</span></p>
                <p>Chúng tôi xin chân thành cảm ơn và chúc Quý khách một ngày tốt lành.</p>
                <p>Trân trọng,</p>
                <p style="font-weight: 700">Đội ngũ phát triển WeOS<sup>®</sup>.</p>
            </div>
        </div>
    </div>
</body>

</html>
