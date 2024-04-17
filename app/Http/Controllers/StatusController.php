<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * GET: all
     */
    public function index(): string
    {
        return Status::all()->toJson();
    }

    /**
     * POST: status
     */
    public function store(Request $request)
    {
        $validated = $request->validate(['title' => 'required|max:100']);

        return Status::create($validated);
    }

    /**
     * GET: by id
     */
    public function show(string $id)
    {
        return Status::findOrFail($id)->toJson();
    }

    /**
     * PUT/PATCH ?
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate(['title' => 'required|max:100']);

        $status = Status::findOrFail($id);
        $status->update($validated);
        return $status;
    }

    /**
     * DELETE:
     */
    public function destroy(string $id): bool|string
    {
        Status::findOrFail($id)->delete();
        return json_encode(['status' => 'ok']);
    }
}
