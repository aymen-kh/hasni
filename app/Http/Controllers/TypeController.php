<?php

// app/Http/Controllers/TypeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    /**
     * Fetch types based on the provided category ID.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getTypesByCategory(Request $request)
    {
        $categoryId = $request->query('category_id');
        $types = Type::where('category_id', $categoryId)->get(['id', 'name']);
        return response()->json(['types' => $types]);
    }

    /**
     * Fetch types based on the provided item ID.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getTypesByItem(Request $request)
    {
        $itemId = $request->query('item_id');
        
        if (!$itemId) {
            return response()->json(['error' => 'Item ID is required.'], 400);
        }

        $types = Type::where('item_id', $itemId)->get();

        return response()->json(['types' => $types]);
    }

    // Other methods for handling CRUD operations for types
}
