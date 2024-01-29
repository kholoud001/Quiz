<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;


class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    static public function index(){
        return view('welcome');
    }


    static public function showQuiz()
    {
         $questions = Quiz::all();

        return view('welcome', compact('questions'));
    }

    public function checkQst(Request $request){

        $answers = $request->input('question');
        //dd($answers);

        $correctAnswers = Quiz::pluck('answer', 'id')->toArray();
        //dd($correctAnswers);
       
        $score = 0;
        foreach ($answers as $questionId => $userAnswer) {
            $userAnswer = (int) $userAnswer;
            //dd($userAnswer);
            if ($userAnswer === $correctAnswers[$questionId]) {
                $score++;
            }
        }

        return response()->json(['score' => $score]);



    }
    


   
}
