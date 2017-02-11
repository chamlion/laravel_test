<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Status;
use App\User;
use Auth;

class StatusesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'only' => ['store', 'destroy']
        ]);
    }

     public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:10000',
			'title'=>'required|max:20'
        ]);
        
        Auth::user()->statuses()->create([
			'title'=>$request->title,
			'content' => $request->content
        ]);
        return redirect('/');
    }

    public function destroy($id)
    {
        $status = Status::findOrFail($id);
        $this->authorize('destroy', $status);
        $status->delete();
        session()->flash('success', '这条碎碎念已被成功删除！');
        return redirect()->back();
    }
	public function show( $id)
	{   $status = Status::findOrFail($id);
	    $user = User::findOrFail($status->user_id);
		return view('users.show_blog', compact('user', 'status'));
	}
	
	
	
	
	
}