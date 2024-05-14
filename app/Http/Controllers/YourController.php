<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class YourController extends Controller
{
    public function showDonationHistory()
    {
        $userId = Auth::id();
        $donationAmount = Donation::where('user_id', $userId)->sum('amount');
        return view('donation_history', ['donationAmount' => $donationAmount]);
    }
    public function donate(Request $request)
    {
        $user = Auth::user();
        $amount = $request->input('amount');
        $user->amount += $amount;
        $user->save();
        
        return redirect()->route('donation-history');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('main');
    }
    public function showUsers()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    public function register(Request $request)
    {
        
        // Проверка входных данных
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Создание нового пользователя
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        
        // Попытка сохранения пользователя
        if ($user->save()) {
            // Пользователь успешно зарегистрирован
            return redirect()->route('main')->with('success', 'Вы успешно зарегистрировались!');
        } else {
            // Ошибка при сохранении пользователя
            return redirect()->back()->withErrors(['error' => 'Произошла ошибка при регистрации. Пожалуйста, попробуйте еще раз.']);
        }
    }
}
