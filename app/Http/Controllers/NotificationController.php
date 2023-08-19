<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
       
    public function index()
    {
        $notifications = Notification::all();
        return view('notification.index',compact('notifications'));
    }

    
    public function create()
    {
        return View('notification.create');
    }

    
    public function store(Request $request)
    {
        Notification::create($request->all());
        return redirect()->route('notification.index');
    }

   
    public function show(notification $notification)
    {
        
    }


    public function edit($id)
    {
        $notification = Notification::find($id);
        return view('notification.edit',compact('notification'));
    }

    
    public function update(Request $request, $id)
    {
        $notification = Notification::find($id);   
        $notification->title = $request->title;
        $notification->body = $request->body;
        $notification->read_at = $request->read_at;
        $notification->user_id = $request->user_id ;
        $notification->save();
    
        return redirect()->route('notification.index');
    }

    public function destroy($id)
    {
        Notification::where('id',$id)->delete();
        return redirect()->route('notification.index');
    }
}
