<?php

namespace App\Http\Controllers;

use App\Models\Consentimiento;
use App\Http\Requests\StoreConsentimientoRequest;
use App\Http\Requests\UpdateConsentimientoRequest;
use Illuminate\Http\JsonResponse;

class ConsentimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConsentimientoRequest $request)
    {
        $consentimiento = Consentimiento::create($request->validated());

        return response()->json($consentimiento, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Consentimiento $consentimiento)
    {
        return response()->json($consentimiento);
    }

    /**
     * Display the specified resource by cedula.
     */
    public function showByCedula(string $cedula): JsonResponse
    {
        $consentimiento = Consentimiento::where('cedula', $cedula)->first();

        if (! $consentimiento) {
            return response()->json([
                'message' => 'Consentimiento no encontrado',
            ], 404);
        }

        return response()->json($consentimiento);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Consentimiento $consentimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConsentimientoRequest $request, Consentimiento $consentimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consentimiento $consentimiento)
    {
        //
    }
}
