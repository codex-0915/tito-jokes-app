<?php

namespace App\Http\Controllers;

use App\Models\Joke;
use App\Resources\Views\Pages;
use Illuminate\Http\Request;

class JokeController extends Controller
{
    // Show all jokes (in the homepage)
    public function index() {
        return view('pages.welcome', [
            'jokes' => Joke::all()
        ]);
    }

    // Show single joke
    public function show($id) {
        return view('pages.joke', [
            'joke' => Joke::find($id)
        ]);
    }

    // Add joke
    public function addJoke() {
        return view('pages.addJoke');
    }

    // Processing of the submitted joke
    public function submit(Request $request) {

        $formFields = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
    
        // // Logic for processing the form submission
        // $title = $request->input('title');
        // $content = $request->input('content');
    
        Joke::create($formFields);

        return redirect('/');
    }

    // Deleting a joke
    public function destroy($id) {
        $joke = Joke::findOrFail($id);
        $joke->delete();

        return redirect('/');
    }
}
