<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use App\Models\Post;
use App\Models\Visit;
use App\Models\Comment;
use App\Models\Friendship;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view ('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
{
    // Edad
    $time = strtotime($user->birthdate);
    $now = time();
    $age = floor(($now - $time) / (60 * 60 * 24 * 365.25));
    $months = $age * 12;

    // Últimas imágenes
    $lastImages = $user->images()
        ->latest()
        ->take(3)
        ->get();

    // Foto de perfil
    $profilePicture = $user->profile_picture
        ? asset('profile_pictures/' . $user->profile_picture)
        : asset('profile_pictures/perro-perfil.jpg');

    return view('users.show', compact(
        'user',
        'age',
        'months',
        'lastImages',
        'profilePicture'
    ));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'surname' => 'max:50',
            'username' => 'required|string|max:30|alpha_dash|unique:users,username,' . $user->id,
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'nullable|string|confirmed',
            'profile_picture' => 'nullable|image|max:2048',
             // Redes sociales: solo permiten el formato "@nombre"
            'instagram' => 'nullable|regex:/^@[A-Za-z0-9._]+$/|max:50',
            'tiktok'    => 'nullable|regex:/^@[A-Za-z0-9._]+$/|max:50',
            'twitter'   => 'nullable|regex:/^@[A-Za-z0-9._]+$/|max:50',
            'facebook'  => 'nullable|regex:/^@[A-Za-z0-9._]+$/|max:50',
            'owner'     => 'nullable|string|max:50',
        ],
        [
            'name.required' => 'El nombre es obligatorio.',
            'name.max' => 'El nombre no puede tener más de 50 carácteres.',
            'surname.max' => 'El apellido no puede tener más de 50 carácteres.',
            'username.required' => 'El nombre de usuario es obligatorio.',
            'username.unique'   => 'Este nombre de usuario ya está en uso.',
            'username.alpha_dash' => 'El nombre de usuario solo puede contener letras, números, guiones y guiones bajos.',
            'username.max' => 'El nombre de usuario no puede tener más de 30 caracteres.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico debe ser válido.',
            'email.unique' => 'Este correo electrónico ya está registrado.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
            'profile_picture.image' => 'El archivo debe ser una imagen.',
            'profile_picture.max' => 'La imagen no puede ser mayor a 2MB.',
            'instagram.regex' => 'El usuario de Instagram debe empezar por @ y contener solo letras, números, . o _',
            'tiktok.regex'    => 'El usuario de TikTok debe empezar por @ y contener solo letras, números, . o _',
            'twitter.regex'   => 'El usuario de Twitter debe empezar por @ y contener solo letras, números, . o _',
            'facebook.regex'  => 'El usuario de Facebook debe empezar por @ y contener solo letras, números, . o _',
            'owner.max' => 'El nombre del dueño no puede tener más de 50 carácteres.',
        ]);

        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->instagram = $request->instagram;
        $user->facebook = $request->facebook;
        $user->tiktok = $request->tiktok;
        $user->twitter = $request->twitter;
        $user->owner = $request->input('owner');

        if ($request->has('password') && $request->has('password_confirmation') && $request->input('password') != '') {
            $password = $request->input('password');
            $password_confirmation = $request->input('password_confirmation');

            if ($password === $password_confirmation) {
                $user->password = Hash::make($password);
            }
        }

        if ($request->hasFile('profile_picture')) {
            if ($user->profile_picture && $user->profile_picture !== 'perro-perfil.jpg') {
                // Ruta absoluta a la imagen en /public/profile_pictures/
                $oldPath = public_path('profile_pictures/' . $user->profile_picture);

            if (file_exists($oldPath)) {
                unlink($oldPath);
            }
        }
            // Guardar la nueva imagen
            $profilePicture = $request->file('profile_picture');
            $filename = time() . '_' . $profilePicture->getClientOriginalName(); // Evita nombres duplicados
            $profilePicture->move(public_path('profile_pictures'), $filename);

            // Asignar el nuevo nombre al usuario
            $user->profile_picture = $filename;
        }

        $user->save();

        return redirect()->route('users.show', $user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
