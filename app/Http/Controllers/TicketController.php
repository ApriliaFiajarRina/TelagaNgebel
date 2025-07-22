<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'package' => 'required|string',
            'date' => 'required|date',
        ]);


        try {
            Ticket::create($validatedData);

            return redirect()->back()->with('success', 'Tiket berhasil dipesan!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Gagal memesan tiket. Silakan coba lagi.');
        }
    }
}
