<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index():View
    {
        $user = User::paginate(5);
        $users = User::all();
        return view('admin.user.index')->with('users' , $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create():View
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreUserRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreUserRequest $request)
    {
        try{
            $users = User::create($request->validated());
            if($users)
            {
                return redirect()->route('user.index');
            }
            else{
                return back();
            }
         }catch (Exception $ex) {
             return back()->withError($ex->getMessage());
        }
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
     * @param  User $user
     * @return View
     */
    public function edit(User $user): View
    {
        return view('admin.user.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateUserRequest $request
     * @param  User $user
     * @return RedirectResponse
     */
    public function update(UpdateUserRequest $request, User $user):RedirectResponse
    {
        try {
            $user = $user->update($request->validated());
            if ($user) {
                return redirect()->route('user.index');
            }
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  User $user
     * @return RedirectResponse
     */
    public function destroy(User $user):RedirectResponse
    {
        try {
            $is_deleted = $user->delete();
            if ($is_deleted) {
                return redirect()->route('user.index')->withSuccess(__('Page deleted successfully'));
            } else {
                return back()->withError(__('Something wrong'));
            }
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage(__('Something wrong')));
            
        }
    }
}
