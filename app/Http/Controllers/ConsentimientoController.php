<?php

namespace App\Http\Controllers;

use App\Models\Consentimiento;
use App\Http\Requests\StoreConsentimientoRequest;
use App\Http\Requests\UpdateConsentimientoRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ConsentimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $telefono = $request->query('telefono');

        if (! $telefono) {
            return response()->json([
                'message' => 'Se requiere el parámetro telefono',
            ], 400);
        }

        return $this->showByTelefono($telefono);
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
     * Display the specified resources by telefono.
     */
    public function showByTelefono(string $telefono): JsonResponse
    {
        $consentimientos = Consentimiento::where('telefono', $telefono)
            ->orderBy('created_at', 'desc')
            ->get();

        if ($consentimientos->isEmpty()) {
            return response()->json([
                'message' => 'Consentimiento no encontrado',
            ], 404);
        }

        return response()->json($consentimientos);
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
