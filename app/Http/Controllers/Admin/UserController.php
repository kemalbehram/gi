<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Auth\CreateRequest;
use App\Http\Requests\Auth\UpdateRequest;
use App\UseCases\Auth\RegisterService;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Middleware\LocaleMiddleware;


class UserController extends Controller
{
    private $register;
    private $url;

    public function __construct(RegisterService $register){
        $this->middleware('can:user-creat');
        $this->register = $register;
        $this->url = LocaleMiddleware::getLocale();
    }

    public function index(Request $request)
    {
        $query = User::orderByDesc('id');
        if(!empty($value = $request->get('id'))){
            $query->where('id',$value);
        }
        if(!empty($value = $request->get('name'))){
            $query->where('name','like','%' .$value. '%');
        }
        if(!empty($value = $request->get('email'))){
            $query->where('email','like','%' .$value. '%');
        }
        if(!empty($value = $request->get('status'))){
            $query->where('status',$value);
        }
        $users = $query->paginate(20);
        $statuses = [
            User::STATUS_ACTIVE => 'active',
            User::STATUS_WAIT => 'wait',
        ];
        if($this->url == 'ru'){
            return view('ru.admin.users.index',  compact('users','statuses'));
        }else{
            return view('uk.admin.users.index',  compact('users','statuses'));
        }
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(CreateRequest $request)
    {
        $user = User::create($request->only(['name', 'email']) + [
            'password' => bcrypt(\Illuminate\Support\Str::random()),
            'status' => User::STATUS_ACTIVE,
            ]);
        return redirect()->route('admin.users.show', $user);
    }

    public function show(User $user)
    {
        return view('uk.admin.users.profile', compact('user'));
    }

    public function edit(User $user)
    {

        $roles = [
            User::ROLE_USER => 'user',
            User::ROLE_OWNER => 'owner',
            User::ROLE_OWNER_REGION => 'owner_region',
            User::ROLE_MANAGER => 'manager',
            User::ROLE_MANAGER_REGION => 'manager_region',
            User::ROLE_TECHNOLOGIST => 'technologist',
            User::ROLE_TECHNOLOGIST_REGION => 'technologist_region',
            User::ROLE_LABORATORY => 'laboratory'
        ];
        return view('admin.users.edit', compact('user','roles'));
    }

    public function update(UpdateRequest $request, User $user): \Illuminate\Http\RedirectResponse
    {
        $user->update($request->only(['name','email','status','role']));
        return redirect()->route('admin.users.show', $user);
    }

    public function destroy(User $user): \Illuminate\Http\RedirectResponse
    {
        $user->delete();
        return redirect()->route('admin.users.index');
    }
    public function verify(User $user): \Illuminate\Http\RedirectResponse
    {
        $this->register->verify($user->id);
        return redirect()->route('admin.users.show', $user);
    }
}
