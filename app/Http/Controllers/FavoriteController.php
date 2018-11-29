<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorite;
use Auth;

class FavoriteController extends Controller
{
    public function Index() {
        $favorite = Auth::user()->favorite;
        return view('favorites', ['favorite'=>$favorite]);
    }

    public function AddToFavorite($book_id, Request $request) {
        $book = self::checkFavorite($book_id, $request);
        if(!$book){
            $fv = new Favorite();
            $fv->book_id = $request->book_id;
            $fv->user_id = Auth::user()->id;

            $fv->save();
        } else {
            return redirect()->back()->with('warning', 'Эта книга уже добавлена в избранные');    
        }

        return redirect()->back()->with('success', 'Книга добавлена в избранные');  
    }

    public function checkFavorite($book, $user) {
        $fv = Favorite::where('book_id', (int)$book)->where('user_id', $user->user()->id)->first();
        if($fv != null) return true;
        return false;
    }

    public function DeleteFavorite($book_id, Request $request) {
        $fv = Favorite::where('book_id', (int)$book_id)->where('user_id', $request->user()->id);
        $fv->delete();
        return redirect()->back()->with('success', 'Книга удалена из избранного');
    }
}
