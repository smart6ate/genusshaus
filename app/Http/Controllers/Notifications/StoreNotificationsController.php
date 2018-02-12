<?php

namespace App\Http\Controllers\Notifications;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNotificationsRequest;
use App\Jobs\SendNotificationsRequest;
use App\Models\Notification;
use Illuminate\Support\Facades\Session;

class StoreNotificationsController extends Controller
{
    public function store(StoreNotificationsRequest $request)
    {
        $notification = Notification::create($request->all());

        SendNotificationsRequest::dispatch($notification);

        Session::put('notify',  array('title' => "Herzlich Dank",'text' => 'Wir melden uns in Kürze bei Ihnen!','type' => 'success'));

        return redirect()->back();
    }
}
