<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\DB;
use Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends AppBaseController
{
    /** @var  UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $users = $this->userRepository->all();  
        $rol_user = Session::get('rolName');
//        dd($rol_user);  
        return view('users.index')
            ->with(['users' => $users,'rol_user'=>$rol_user]);
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        //dd($request->all());
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $input['status'] = '1';
        $user = $this->userRepository->create($input);
        $user->assignRole($request->rol);

        //return response()->json();
        //Flash::success('User saved successfully.');
        Session::flash('mensaje', 'Usuario se guardo exitosamente!'); 

        return redirect(route('users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->find($id);
        $position_rol = null;

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }
        $rol = implode(" ", $user->getRoleNames()->toArray());
        switch ($rol) {
            case 'super_caci':
                $position_rol ='0';
                break;
            case 'caciluz':
                $position_rol ='1';
                break;
            case 'cacieva':
                $position_rol ='2';
                break;
            case 'cacibertha':
                $position_rol ='3';
                break;
            case 'cacicarolina':
                $position_rol ='4';
                break;
            case 'cacicarmen':
                $position_rol ='5';
                break;
        }
        return view('users.edit')->with(['user' => $user, 'pos_rol' => $position_rol]);
    }

    /**
     * Update the specified User in storage.
     *
     * @param int $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id,UpdateUserRequest $request)
    {
        //dd($request->rol);
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }
        if($request['password']){
            $request['password'] = Hash::make($request['password']);
        } else{
            unset($request['password']);
        }

        $user = $this->userRepository->update($request->all(), $id);
        $user->roles()->detach();
        $user->assignRole($request->rol);

        //return response()->json();
        //Flash::success('User updated successfully.');
        Session::flash('mensaje', 'Usuario se actualizo exitosamente!'); 

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('Usuario no se encontro');

            return redirect(route('users.index'));
        }

        //$this->userRepository->delete($id);
        //$this->userRepository->update(['status' => '-1'],$id);
        DB::table('users')
                ->where('id', $id)
                ->update(['status' => '-1']);

        //Flash::success('User deleted successfully.');
        Session::flash('mensaje', 'Usuario se elimino exitosamente!'); 

        return redirect(route('users.index'));
    }
    public function reactive($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('Usuario no se encontro');

            return redirect(route('users.index'));
        }
        DB::table('users')
                ->where('id', $id)
                ->update(['status' => '1']);
        
        Session::flash('mensaje', 'Usuario se reactivo exitosamente!'); 

        return redirect(route('users.index'));
    }
}
