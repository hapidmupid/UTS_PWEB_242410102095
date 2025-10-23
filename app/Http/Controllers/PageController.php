<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function login()
    {

        if (Session::has('username')) {
            return redirect()->route('dashboard');
        }
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username && $password) {

            Session::put('username', $username);
            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Username dan password wajib diisi!');
    }

    public function dashboard()
    {

        if (!Session::has('username')) {
            return redirect()->route('login');
        }

        $username = Session::get('username');
        $products = [
            [
                'name' => 'Donat Coklat',
                'price' => 12000,
                'image' => 'https://i.pinimg.com/564x/fc/56/09/fc5609a9fc544c4c9c2315800a58fdca.jpg'
            ],
            [
                'name' => 'Donat Permen Karet',
                'price' => 15000,
                'image' => 'https://img.pikbest.com/origin/09/29/15/61rpIkbEsTMdv.png!sw800'
            ],
            [
                'name' => 'Donat Stroberi',
                'price' => 13000,
                'image' => 'https://i.pinimg.com/736x/46/9c/e8/469ce8a2059097b0981d7bcef8d320ca.jpg'
            ],
            [
                'name' => 'Donat Matcha',
                'price' => 16000,
                'image' => 'https://i.pinimg.com/736x/04/c2/cf/04c2cf9f4a788118d86623f4ceda93a2.jpg'
            ]
        ];

        return view('dashboard', compact('username', 'products'));
    }

    public function pengelolaan()
    {
        if (!Session::has('username')) {
            return redirect()->route('login');
        }

        $products = [
            ['nama' => 'Donat Coklat', 'harga' => 12000, 'stok' => 20],
            ['nama' => 'Donat Keju', 'harga' => 15000, 'stok' => 15],
            ['nama' => 'Donat Stroberi', 'harga' => 13000, 'stok' => 10],
            ['nama' => 'Donat Matcha', 'harga' => 16000, 'stok' => 5],
        ];

        return view('pengelolaan', compact('products'));
    }

    public function profile()
    {
        if (!Session::has('username')) {
            return redirect()->route('login');
        }

        $username = Session::get('username');
        return view('profile', compact('username'));
    }

    public function logout()
    {
        Session::forget('username');
        return redirect()->route('login');
    }
}
