<?php

namespace App\Http\Controllers;

use App\input;
use App\log;
use App\setting;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function dashboard() {

        if(input::all()->count() <= 0){
            $input = new input();
            $input->iid = 4;
            $input->name = 'Input 1';
            $input->consumption = 10;
            $input->save();

            $input = new input();
            $input->iid = 5;
            $input->name = 'Input 2';
            $input->consumption = 20;
            $input->save();

        }

        $logs = log::orderBy('created_at','desc')->paginate(10);
        $rate = setting::all()->last()->rate;

        $inputs = input::all();

        $users = User::all();
        return view('dashboard',[
            'rate' => $rate,
            'inputs' => $inputs,
            'users' => $users,
            'logs' => $logs
        ]);
    }

    public function inputs() {
        $inputs = input::all();
        return view('inputs.manage',[
            'inputs' => $inputs
        ]);
    }

    public function toggleInput($iid) {
        $input = input::find($iid);

        if($input->status == 'on'){
            $input->status = 'off';
            $input->save();


            $log = new log();
            $log->status = 'off';
            $log->uid = auth()->user()->uid;
            $log->iid = $input->iid;
            $log->save();

            session()->flash('success','Device Turned Off');
        }

        else {
            $input->status = 'on';
            $input->save();

            $log = new log();
            $log->status = 'on';
            $log->uid = auth()->user()->uid;
            $log->iid = $input->iid;
            $log->save();

            session()->flash('success','Device Turned On');
        }

        return redirect()->back();

    }

    public function postUpdateInput(Request $request) {
        $iid = $request->input('iid');
        $input = input::find($iid);
        $input->name = $request->input('name');
        $input->consumption = $request->input('consumption');
        $input->save();

        session()->flash('success','Input Updated');
        return redirect()->back();
    }

    public function inputDetails(input $input) {

        $logs = log::orderBy('created_at','desc')->where('iid',$input->iid)->paginate(20);
        return view('inputs.details',[
            'input' => $input,
            'logs' => $logs
        ]);
    }

    public function profile() {
        return view('profile');
    }

    public function settings() {

        $rate = setting::all()->last()->rate;
        return view('settings.manage',[
            'rate' => $rate
        ]);

    }

    public function postUpdateProfile(Request $request) {
        $user = User::find(auth()->user()->uid);
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->save();

        session()->flash('success','Profile Updated.');
        return redirect()->back();
    }

    public function postChangePassword(Request $request) {
        $oldPassword = $request->input('oldPassword');
        $password = $request->input('password');
        $passwordConfirmation = $request->input('password_confirmation');

        $user = User::find(auth()->user()->uid);

        if($password != $passwordConfirmation) {
            session()->flash('error','New passwords dont matchn');
            return redirect()->back();
        }

        if(password_verify($oldPassword,$user->password)){
            $user->password = bcrypt($password);
            $user->save();
            session()->flash('success','Password Changed.');
            return redirect()->back();
        } else {
            session()->flash('error',"Current password is wrong");
            return redirect()->back();
        }
    }

    public function postSettings(Request $request) {

        $setting = new setting();
        $setting->rate = $request->input('rate');
        $setting->save();

        session()->flash('success','Rate Updated.');
        return redirect()->back();
    }

    public function logout() {
        auth()->logout();
        return redirect('/');
    }
}
