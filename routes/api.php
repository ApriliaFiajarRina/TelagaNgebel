<?php

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

Route::post('/tickets', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:15',
        'package' => 'required|integer',
        'date' => 'required|date',
    ]);

    try {
        Ticket::create($validated);

        return response()->json(['success' => true, 'message' => 'Tiket berhasil dipesan!']);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Terjadi kesalahan saat menyimpan tiket.',
            'error' => $e->getMessage(),
        ], 500);
    }
});

Route::post('/tickets', [TicketController::class, 'store']);