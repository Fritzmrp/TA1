<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GreatController extends Controller
{
    public function respond(Request $request)
    {
        $userInput = $request->input('message');
        $response = $this->getResponse($userInput);
        return response()->json(['response' => $response]);
    }
    

    private function getResponse($input)
    {
        $currentTime = Carbon::now()->format('H');
        $greetings = DB::table('greetings')->get();

        // Match greeting keywords
        foreach ($greetings as $greeting) {
            if (stripos($input, $greeting->keyword) !== false) {
                if ($currentTime < 12) {
                    return $greeting->response . ' pagi! Selamat datang di chatbot FAQ layanan SPMB IT Del. Ada yang bisa saya bantu?';
                } elseif ($currentTime < 18) {
                    return $greeting->response . ' siang! Selamat datang di chatbot FAQ layanan SPMB IT Del. Ada yang bisa saya bantu?';
                } else {
                    return $greeting->response . ' malam! Selamat datang di chatbot FAQ layanan SPMB IT Del. Ada yang bisa saya bantu?';
                }
            }
        }

        // Default response for unrecognized inputs
        return "Sorry, I don't understand. Can you please clarify your question?";
    }
}
