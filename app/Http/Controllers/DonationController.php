<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DonationEntry;

class DonationController extends Controller
{
    public function updateDonation(Request $request, $id)
    {
        $donation = DonationEntry::find($id);
        $donation->amount = $request->input('amount');
        $donation->save();

        return redirect()->route('donation-history');
    }
    public function deleteDonation($id)
    {
        $donation = DonationEntry::find($id);
        $donation->delete();
    
        return redirect()->route('donation-history');
    }
    
    public function showDonationHistory()
    {
        $donations = DonationEntry::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        $donationAmount = $donations->sum('amount');

        return view('donation-history', compact('donations', 'donationAmount'));
    }

    public function donate(Request $request)
    {
        $organization = $request->input('organization');
        $amount = $request->input('amount');
    
        // Создаем новую запись о пожертвовании
        DonationEntry::create([
            'user_id' => auth()->id(),
            'organization' => $organization,
            'amount' => $amount,
        ]);
    
        // Обновляем общую сумму пожертвований пользователя
        $user = User::find(auth()->id());
        $user->amount += $amount;
        $user->save();
    
        return redirect()->route('donation-history');
    }
}
