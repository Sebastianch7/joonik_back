<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class LocationController extends Controller
{
    /**
     * Retorna una lista de sedes.
     */
    public function index(): JsonResponse
    {
        $locations = [
            [
                'code' => 1,
                'name' => 'Sede Central',
                'image' => 'https://via.placeholder.com/150',
                'creationDate' => '2023-01-01',
            ],
            [
                'code' => 2,
                'name' => 'Sede Norte',
                'image' => 'https://via.placeholder.com/150',
                'creationDate' => '2023-05-01',
            ],
            [
                'code' => 4,
                'name' => 'Sede Norte',
                'image' => 'https://via.placeholder.com/150',
                'creationDate' => '2023-05-01',
            ],
            [
                'code' => 5,
                'name' => 'Sede Norte',
                'image' => 'https://via.placeholder.com/150',
                'creationDate' => '2023-05-01',
            ],
        ];

        return response()->json($locations);
    }
}
