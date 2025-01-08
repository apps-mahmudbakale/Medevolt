<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return view('questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $question = Question::create($request->only('audience', 'question'));

        foreach($request->options as $option){
            $options = Option::create([
                'question_id' => $question->id,
                'option' => $option
            ]);

            if($option == $request->correct_option){
               $update = DB::table('options')
               ->where('option', $option)
               ->where('question_id', $question->id)
                ->limit(1)
                ->update(['correct' => true]);
            }
        }

        return redirect()->route('admin.questions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        $options = $question->options;
        $correct = Option::where('question_id', $question->id)->where('correct', true)->first();
        return view('questions.edit', compact('question', 'options', 'correct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $question->update($request->only('audience', 'question'));

        $question->options()->delete();

        // $question->options()->saveMany($request->options);

        foreach($request->options as $option){
            $options = Option::updateOrCreate([
                'question_id' => $question->id,
                'option' => $option
            ]);

            if($option == $request->correct_option){
               $update = DB::table('options')
               ->where('option', $option)
               ->where('question_id', $question->id)
                ->limit(1)
                ->update(['correct' => true]);
            }
        }
        return redirect()->route('admin.questions.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('admin.questions.index');
    }
}
