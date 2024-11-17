<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class HireController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'services' => 'nullable|array'
        ]);

        // Mengumpulkan layanan yang dipilih
        $selectedServices = $request->services ?? [];
        $servicesString = !empty($selectedServices) ? implode(', ', $selectedServices) : 'Tidak ada layanan dipilih';

        try {
            // Membuat todo baru
            $todo = Todo::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'task' => "Permintaan layanan untuk: " . $servicesString
            ]);

            return redirect()->back()->with('success', 'Permintaan Anda telah berhasil dikirim!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
