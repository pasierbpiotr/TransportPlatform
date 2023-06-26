<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class UserController extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "users";
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'type_id',
        'login',
        'password',
        'unhashed'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function viewUserPage() {
        $users = User::paginate(10);
        return view('admin.view-users', ['users'=>$users]);
    }

    public function editUser(string $id) {
        $user = User::findOrFail($id);
        return view('admin.edit-user', ['user'=>$user]);
    }

    public function updateUser(Request $request, string $id) {
        if($id == 1) {
            return redirect()->route('view_users')->with('error','Admin is not editable');
        }
        else {
            $user = User::findOrFail($id);
            $input = $request->all();

            if (isset($input['password'])) {
                $unhashed = $input['password'];
                $input['password'] = Hash::make($unhashed);
                $input['unhashed'] = $unhashed;
            }
            $user->fill($input)->save();
            return redirect()->route('view_users')->with('update', 'User edited.');
        }
    }
}
