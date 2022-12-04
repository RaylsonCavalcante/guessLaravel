<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Guess;

class GuessController extends Controller
{
    public function index() {

        $guesses = Guess::all();

        $nameImg = ["portugal", "suica", "brazil", "coreia", "argentina", "australia"];

        $cont = 1;
        
        return view('home', ['guesses' => $guesses, 'nameImg' => $nameImg, 'cont' => $cont]);
    }

    public function guess($id) {

        if ($id == 1) {
            $nameImg = ["portugal", "suica"];
        }elseif($id == 2){
            $nameImg = ["brazil", "coreia"];
        }else{
            $nameImg = ["argentina", "australia"];
        }

        return view('events.guess', ['id' => $id, 'nameImg' => $nameImg]);
    }

    public function store(Request $request, $id){

        $guess = new Guess;

        $guess->name = $request->name;
        $guess->guess = $request->guess1.' x '.$request->guess2;
        $guess->game = $id;

        $guess->save();

        return redirect('/');
    }

    public function destroy($id){

        Guess::findOrFail($id)->delete();

        return redirect('/');
    }
}
