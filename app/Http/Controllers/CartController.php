<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function index(Request $request)
    {
        $package = $request->input('package');
        $quantity = $request->input('quantity');
        $platform = $request->input('platform');
        if ($package < 1 || $package > 3) {
            return redirect()->route('home');
        }
        if ($quantity < 1) {
            return redirect()->route('home');
        }
        if ($platform === '') {
            return redirect()->route('home');
        }

        $package_name = '';
        $package_price = 0;
        $per_price = 0;
        $old_per_price = 0;

        if ($package == 1) {
            $package_name = 'Gói cơ bản';
            $package_price = 99000;
            $per_price = 99000;
            $old_per_price = 99000;
        }

        if ($package == 2) {
            $package_name = 'Gói nâng cao';
            $package_price = 2999000;
            $per_price = floor(2999000/5);
            $old_per_price = floor(($package_price * 100) / 50);
        }

        if ($package == 3) {
            $package_name = 'Gói chuyên nghiệp';
            $package_price = 3999000;
            $per_price = floor(3999000/8);
            $old_per_price = floor(($package_price * 100) / 77);
        }

        return view('cart', [
            'package' => $package, 'quantity' => $quantity, 'package_name' => $package_name,
            'platform' => $platform, 'package_price' => $this->currency_format($package_price),
            'per_price' => $this->currency_format($per_price),
            'old_price' => $this->currency_format($old_per_price, 'VNĐ')
        ]);
    }

    public function payment(Request $request)
    {
        $package = $request->input('package');
        $quantity = $request->input('quantity');
        $platform = $request->input('platform');
        if ($package < 1 || $package > 3) {
            return redirect()->route('home');
        }
        if ($quantity < 1) {
            return redirect()->route('home');
        }
        if ($platform === '') {
            return redirect()->route('home');
        }

        $package_name = '';
        $package_price = 0;
        $per_price = 0;
        $old_per_price = 0;

        if ($package == 1) {
            $package_name = 'Gói cơ bản';
            $package_price = 99000;
            $per_price = 99000;
            $old_per_price = 99000;
        }

        if ($package == 2) {
            $package_name = 'Gói nâng cao';
            $package_price = 2999000;
            $per_price = floor(2999000/5);
            $old_per_price = floor(($package_price * 100) / 50);
        }

        if ($package == 3) {
            $package_name = 'Gói chuyên nghiệp';
            $package_price = 3999000;
            $per_price = floor(3999000/8);
            $old_per_price = floor(($package_price * 100) / 77);
        }

        return view('payment', [
            'package' => $package, 'quantity' => $quantity, 'package_name' => $package_name,
            'platform' => $platform, 'package_price' => $this->currency_format($package_price),
            'per_price' => $this->currency_format($per_price),
            'old_price' => $this->currency_format($old_per_price, 'VNĐ')
        ]);
    }

    function currency_format($number, $suffix = '') {
        if (!empty($number)) {
            return "{$suffix} " . number_format($number, 0, '.', ',');
        }
    }
}
