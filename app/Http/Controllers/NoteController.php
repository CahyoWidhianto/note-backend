<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NoteController extends Controller
{
    public function index()
    {
        $this->checkToken();
        $token = session('token');
        $endPoint = env('APP_API_URL') . '/notes';
        $response = Http::withHeaders(['pbe-token' => $token])->post($endPoint);
        $notes = json_decode($response->body(), false);
        $data = [
            'notes' => $notes,
        ];
        return view('notes.list', $data);
    }

    public function create()
    {
        $this->checkToken();
        $token = session('token');
        $title = \request('title');
        $note = \request('note');
        $endPoint = env('APP_API_URL') . '/notes';
        $body = [
            'title' => $title,
            'note' => $note
        ];
        $response = Http::withHeaders(['pbe-token' => $token])
        ->withBody($body)
        ->post($endPoint);
    }
}
