<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\volunteers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class volunteersController extends Controller
{
    public function formVolunteer ($id){
        $article = Article::findOrFail($id);
        return view('form_volunteers', compact('article'));
    }
    public function addVolunteer (Request $request){
        $volunteer = volunteers::create([
            'fname'=> $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
            'state' => $request->state,
            'postal' => $request->postal,
            'article_title' => $request->article,
        ]);
        $users = Auth::user();
        return view('welcomeuser', compact('users'));
    }
    public function destroy($id)
    {
        $volunters = volunteers::findOrFail($id);

        $volunters->delete();

        return redirect()->route('dashboard.volunteers')->with('success', 'Volunteer berhasil dihapus.');
    }
}
