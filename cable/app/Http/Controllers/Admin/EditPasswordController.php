<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use DB;
use Carbon\Carbon;

class EditPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $expiry = DB::table('passwords')->where(['user_id' => $user->id, 'is_active' => 1])->first();
        $user['password_expiry'] = $expiry->password_expired_at;

        return view('admin.users.edit-password')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'old_password' => ['required'],
            'password' => ['required_with:password_confirmation', 'string', 'min:4', 'max:20', 'confirmed', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'],
        ]);

        $user = User::find($id);

        if (Hash::check($request->old_password, $user->password)) {
            $old_password = DB::table('passwords')
                ->where('password', $request->password)
                ->where('user_id', $user->id)
                ->first();

            if ($old_password) {
                return redirect()->back()->with('error', "You cannot update old password as new password");
            } else {
                DB::table('passwords')->where('user_id', $user->id)->update(['is_active' => 0]);
            }

            $user->update([
                'password' => bcrypt($request->password),
            ]);


            $create_old_password = [
                'user_id' => $user->id,
                'password' => $request->password,
                'password_updated_at' => Carbon::now(),
                'password_expired_at' => Carbon::now()->addDays(30),
                'is_active' => 1
            ];

            DB::table('passwords')->insert($create_old_password);

            $users = User::count();
            $expiry = DB::table('passwords')->where(['user_id' => $user->id, 'is_active' => 1])->first();
            $user['password_expiry'] = $expiry->password_expired_at;
            Auth::attempt(['email' => $user->email, 'password' => $request->password, 'role_id' => 1]);
            return view('home',['users' => $users, 'user' => $user, 'message' => 'Your Password has been updated']);

        } else {
            return redirect('admin/edit-password/')->with('error', "Old password doesnot match");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
