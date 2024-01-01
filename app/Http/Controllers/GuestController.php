<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function searchGuest(Request $request)
    {
        $request->validate([
            'guest_name' => 'required|string|max:100',
        ]);

        $guests = Guest::where('name', 'LIKE', '%' . $request->guest_name . '%' )
                    ->where('is_attending', '0')
                    ->get();

        return view('confirm', ['guests' => $guests]);
    }


    public function confirmAttendance($guestId)
    {
        $guest = Guest::findOrFail($guestId);
        $guest->setIsAttending(1);
        $guest->save();
    
        return view('thanks');
    }

    public function dennyAttendance($guestId)
    {
        $guest = Guest::findOrFail($guestId);
        $guest->setIsAttending(2);
        $guest->save();
    
        return view('shit');
    }
}
