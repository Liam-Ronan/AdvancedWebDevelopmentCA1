<?php

namespace App\Http\Controllers\Admin;

use App\Models\Developer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $developers = Developer::all();

        if ($user->hasRole('user')) {
            return view('user.developers.index')->with('developers', $developers);
        }

        $user->authorizeRoles('admin');


        return view('admin.developers.index')->with('developers', $developers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        $developers = Developer::all();
        return view('admin.developers.create')->with('developers', $developers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        $formFields = $request->validate([
            'name' => ['required', Rule::unique('developers', 'name')],
            'bio' => 'required',
            'address' => 'required',
            'email' => ['required', 'email']
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        Developer::create($formFields);

        return to_route('admin.developers.index')->with('message', 'Developer Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Developer $developer)
    {
        $user = Auth::user();
        if (!Auth::id()) {
            return abort(403);
        }

        if ($user->hasRole('user')) {
            return view('user.developers.show')->with('developer', $developer);
        }

        $user->authorizeRoles('admin');

        return view('admin.developers.show')->with('developer', $developer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Developer $developer)
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        return view('admin.developers.edit', ['developer' => $developer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Developer $developer)
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        $formFields = $request->validate([
            'name' => 'required',
            'bio' => 'required',
            'address' => 'required',
            'email' => ['required', 'email']
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $developer->update($formFields);

        return to_route('admin.developers.index')->with('message', 'Developer Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Developer $developer)
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        $developer->delete();
        return to_route('admin.developers.index')->with('message', 'Developer deleted successfully');
    }
}
