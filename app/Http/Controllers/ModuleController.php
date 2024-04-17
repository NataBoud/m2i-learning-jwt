<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * GET: all
     */
    public function index(): string
    {
        return Module::all()->toJson();
    }

    /**
     * POST: module
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:100',
            'start' => 'required|date',
            'end' => 'nullable|date',
            'status_id' => 'nullable|integer'
        ]);

        return Module::create($validated);
    }

    /**
     * GET: by id
     */
    public function show(string $id)
    {
        return Module::findOrFail($id)->toJson();
    }

    /**
     * PUT/PATCH ?
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:100',
            'start' => 'required|date',
            'end' => 'nullable',
            'status_id' => 'nullable'
        ]);

        $module = Module::findOrFail($id);
        $module->update($validated);
        return $module;
    }

    /**
     * DELETE:
     */
    public function destroy(string $id)
    {
        Module::findOrFail($id)->delete();
        return json_encode(['status' => 'ok']);
    }
}
