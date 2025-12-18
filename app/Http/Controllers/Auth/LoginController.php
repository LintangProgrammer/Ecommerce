<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Redirect setelah login berhasil.
     *
     * Property ini menentukan kemana user diarahkan
     * setelah berhasil login jika tidak ada logic khusus.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    /**
     * Override method redirectTo untuk custom redirect.
     *
     * Method ini akan dipanggil otomatis oleh Laravel jika ada,
     * menggantikan property $redirectTo di atas.
     *
     * Gunanya untuk logika redirect dinamis (misal beda role).
     *
     * @return string URL tujuan redirect
     */
    protected function redirectTo(): string
    {
         $user = auth()->user();
        if ($user->role === 'admin') {
            return route('admin.dashboard');
        }
        return route('home');
    }

    /**
     * Override untuk custom validation rules.
     *
     * Method ini mengatur aturan validasi input dari form login.
     * Jika validasi gagal, user dikembalikan ke form dengan pesan error.
     *
     * @param \Illuminate\Http\Request $request
     */
    protected function validateLogin($request): void
    {
        $request->validate([
            $this->username() => 'required|string|email',
            'password' => 'required|string|min:6',
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email'    => 'Format email tidak valid (harus ada @).',
            'password.required' => 'Password wajib diisi.',
            'password.min'   => 'Password minimal 6 karakter.',
        ]);
    }
}