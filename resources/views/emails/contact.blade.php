<!DOCTYPE html>
<html>

<body>
    <div style="overflow-x:auto;">
        <table style=" border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th
                        style="border: 1px solid #ddd; padding: 8px; padding-top: 12px; padding-bottom: 12px; text-align: left;
  background-color: #FFA726;
  color: white;">
                        Tên Khách hàng</th>
                    <th
                        style="border: 1px solid #ddd; padding: 8px; padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #FFA726;
  color: white;">
                        Email</th>
                    <th
                        style="border: 1px solid #ddd; padding: 8px; padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #FFA726;
  color: white;">
                        Số điện thoại</th>
                    <th
                        style="border: 1px solid #ddd; padding: 8px; padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #FFA726;
  color: white;">
                        Tên công ty</th>
                    <th
                        style="border: 1px solid #ddd; padding: 8px; padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #FFA726;
  color: white;">
                        Lời nhắn</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $data->name }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $data->email }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $data->phone }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $data->message }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
