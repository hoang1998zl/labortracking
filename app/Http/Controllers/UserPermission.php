<?php

namespace App\Http\Controllers;

use App\Models\PaymentsHistory;
use App\Models\UserPermissions;
use Illuminate\Http\Request;

class UserPermission extends Controller
{
  public function index()
  {
    $users = UserPermissions::where('boss_account_id', auth()->user()->id)
      ->where('status', 1)
      ->get();

    return view('profile.accountsongquyen', compact('users'));
  }

  public function edit($id)
  {
    $selected_user = UserPermissions::find($id);
    return view('profile.accountsongquyen.edit', compact('selected_user'));
  }

  public function update(Request $request)
  {
    $user = UserPermissions::find($request->id);
    $user->update([
      'email' => $request->email,
      'password' => $request->password,
      'permission_cauhinh' => $request->permission_cauhinh == true ? 1 : 0,
      'permission_hoso' => $request->permission_hoso == true ? 1 : 0,
      'permission_bangluong' => $request->permission_bangluong == true ? 1 : 0,
      'permission_duyetapp' => $request->permission_duyetapp == true ? 1 : 0,
      'permission_chamcong' => $request->permission_chamcong == true ? 1 : 0,
      'permission_tamung' => $request->permission_tamung == true ? 1 : 0,
      'permission_macroluong' => $request->permission_macroluong == true ? 1 : 0,
      'permission_daotao' => $request->permission_daotao == true ? 1 : 0,
      'permission_congno' => $request->permission_congno == true ? 1 : 0,
      'permission_thuongphat' => $request->permission_thuongphat == true ? 1 : 0,
      'permission_baohiem' => $request->permission_baohiem == true ? 1 : 0,
      'permission_suckhoe' => $request->permission_suckhoe == true ? 1 : 0,
      'permission_kyquy' => $request->permission_kyquy == true ? 1 : 0,
      'permission_congviec' => $request->permission_congviec == true ? 1 : 0,
      'permission_babuoc' => $request->permission_babuoc == true ? 1 : 0,
    ]);
    return redirect()->route('profile.accountsongquyen');
  }
  public function destroy($id)
  {
    $user = UserPermissions::find($id);
    $user->update([
      'status' => 0
    ]);
    return redirect()->back();
  }
  public function store(Request $request)
  {
    $user = new UserPermissions();
    $user->email = $request->email;
    $user->password = $request->password;
    $user->boss_account_id = auth()->user()->id;
    $user->status = 1;
    $user->permission_cauhinh = $request->permission_cauhinh == true ? 1 : 0;
    $user->permission_hoso = $request->permission_hoso == true ? 1 : 0;
    $user->permission_bangluong = $request->permission_bangluong == true ? 1 : 0;
    $user->permission_duyetapp = $request->permission_duyetapp == true ? 1 : 0;
    $user->permission_chamcong = $request->permission_chamcong == true ? 1 : 0;
    $user->permission_tamung = $request->permission_tamung == true ? 1 : 0;
    $user->permission_macroluong = $request->permission_macroluong == true ? 1 : 0;
    $user->permission_daotao = $request->permission_daotao == true ? 1 : 0;
    $user->permission_congno = $request->permission_congno == true ? 1 : 0;
    $user->permission_thuongphat = $request->permission_thuongphat == true ? 1 : 0;
    $user->permission_baohiem = $request->permission_baohiem == true ? 1 : 0;
    $user->permission_suckhoe = $request->permission_suckhoe == true ? 1 : 0;
    $user->permission_kyquy = $request->permission_kyquy == true ? 1 : 0;
    $user->permission_congviec = $request->permission_congviec == true ? 1 : 0;
    $user->permission_babuoc = $request->permission_babuoc == true ? 1 : 0;
    $user->save();
    return redirect()->back();
  }
}
