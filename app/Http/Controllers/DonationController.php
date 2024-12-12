<?php


namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    // Store donation in the database
    public function store(Request $request)
    {
        $request->validate([
            'donation_type' => 'required|in:Cash,Food,Clothes',
            'donation_address' => 'required|string|max:255',
            'amount' => 'nullable|numeric|min:0',
            'food_type' => 'nullable|string|max:100',
            'payment_type' => 'nullable|in:Cash,Online',
        ]);

        $donation = Donation::create([
            'user_id' => Auth::id(),
            'donation_type' => $request->donation_type,
            'donation_address' => $request->donation_address,
            'amount' => $request->amount,
            'food_type' => $request->food_type,
            'payment_type' => $request->payment_type,
        ]);

        return response()->json(['message' => 'Donation successful!', 'donation' => $donation]);
    }
}
