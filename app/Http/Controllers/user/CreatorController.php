<?php

namespace App\Http\Controllers\user;

use App\Models\Creator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CreatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $user->authorizeRoles('user');

        $creators = Creator::all();

        return view('user.creators.index')->with('creators', $creators);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Creator $creator)
    {
        $user = Auth::user();
        $user->authorizeRoles('user');

        if (!Auth::id()) {
            return abort(403);
        }

        return view('user.creators.show')->with('creator', $creator);
    }
}
