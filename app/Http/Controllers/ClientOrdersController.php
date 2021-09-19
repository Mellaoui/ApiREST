<?php

namespace App\Http\Controllers;

use App\Models\ClientOrder;
use Illuminate\Http\Request;

class ClientOrdersController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $attributes = $this->validateData($request);
        $checkboxes = ['create_app', 'seo', 'mvp'];

        foreach ($checkboxes as $checkbox) {
            if ($request->has($checkbox)) {
                $attributes[$checkbox] = 'true';
            } else {
                $attributes[$checkbox] = 'false';
            }
        }
        ClientOrder::create($attributes);

        return redirect()->route('main-page');
    }

    public function show()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update(Request $request, ClientOrder $client_order)
    {
        //
    }

    public function destroy(ClientOrder $client_order)
    {
        //
    }

    protected function validateData($request)
    {
        return $request->validate([
            'company' => 'required',
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'create_app' => 'sometimes',
            'seo' => 'sometimes',
            'mvp' => 'sometimes',
        ]);
    }
}
