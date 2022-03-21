<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BiodataFormController extends Controller
{
    public function input(){
        return view('input');
    }

    public function proceed(Request $request){
        $messagesError = [
            'required' => ':attribute must be filled!!',
            'min' => ':attribute must be filled minimum :min character!!!',
            'max' => ':attribute must be filled maximum :max character!!!',
            'numeric' => ':attribute must be filled with number only!!!',
            'alpha_dash' => ':attribute must be filled with alphanumeric only'
        ];
        $this->validate($request,[
            'name' => 'required',
            'placeofbirth' => 'required',
            'gpa' => 'required|numeric|between:2.50,99.99',
            'dateofbirth' => 'required|alpha_dash',
            'age' => 'required|numeric',
            'picture' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ],$messagesError); 
        $imageName = $request->picture->getClientOriginalName();
        $request->picture->move(public_path(), $imageName);
        $request->session()->flash('successMsg','Saved succesfully!'); 
        return view('proceed')->with('data', $request)
                              ->with('successMsg', 'Data has been successfully submitted!')
                              ->with('imageName', $imageName);
    }
}
