<?php

namespace App\Http\Controllers;
use App\Models\type_object;
use Illuminate\Http\Request;

class CartController extends Controller

{
    public function addToCart(Request $request, $id)
    {
        $object = type_object::find($id);

        if (!$object) {
            abort(404); // Обработка случая, если объект не найден
        }

        // Добавьте объект в корзину (например, используя сеансы)
        $cart = $request->session()->get('cart', []);
        $cart[] = $object;
        $request->session()->put('cart', $cart);

        return redirect('personal-booking')->with('success', 'Товар успешно добавлен в корзину!');
    }
    public function showCart(Request $request)
    {
        $cart = $request->session()->get('cart', []);

        return view('personal-booking', ['cart' => $cart]);
    }
    public function removeFromCart(Request $request, $id)
    {
        $cart = $request->session()->get('cart', []);

        // Ищем товар с указанным ID и удаляем его из корзины
        foreach ($cart as $key => $item) {
            if ($item->id == $id) {
                unset($cart[$key]);
                break;
            }
        }

        // Обновляем сессию корзины
        $request->session()->put('cart', $cart);

        return redirect()->route('show.cart')->with('success', 'Товар успешно удален из корзины!');
    }

}
