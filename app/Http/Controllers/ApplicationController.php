<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicationRequest;
use App\Models\Application;
use SergiX44\Nutgram\Nutgram;

class ApplicationController extends Controller
{
    public function appointment()
    {
        return view('appointment.appointment');
    }

    public function application(ApplicationRequest $request)
    {
        $data = $request->validated();
        Application::create($data);
        $message = "FIO : {$data['name']}" ."\n". "Telefon raqam : {$data['phone']}" ."\n". "Xabar: {$data['message']}";
        $this->sendMessage($message);
        return redirect()->back()->with(['success' => 'Saved successfully']);
    }

    public function sendMessage($message)
    {
        $bot = new Nutgram(env('TELEGRAM_TOKEN'));
        $bot->sendMessage($message, ['chat_id' => env('CHANNEL_ID')]);
    }



}
