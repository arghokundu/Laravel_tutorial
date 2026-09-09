<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;

class AIController extends Controller
{
    /**
     * Show AI chat page
     */
    public function index()
    {
        return view('ai.chat');
    }

    /**
     * Send question to Gemini
     */
    public function ask(Request $request)
    {
        // Validate user input
        $request->validate([
            'question' => 'required|string|max:20000',
        ]);
        try 
        {
            // Send question to Gemini
            $response = Gemini::generativeModel(model: 'gemini-3.5-flash-lite')->generateContent($request->question);
            
            // Get Gemini answer
            $answer = $response->text();
            // Return answer to Blade
            return view('ai.chat', ['question' => $request->question,'answer' => $answer,]);
        } 
        catch (\Throwable $e) 
        {
            return back()->withInput()->with('error','AI request failed: ' . $e->getMessage());
        }
    }
}