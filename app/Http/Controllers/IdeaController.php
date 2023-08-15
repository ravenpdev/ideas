<?php

namespace App\Http\Controllers;

use App\Http\Requests\IdeaStoreRequest;
use App\Http\Requests\IdeaUpdateRequest;
use App\Models\Idea;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IdeaController extends Controller
{
    public function index(): View
    {
        $ideas = Idea::latest()->get();

        return view('ideas.index', ['ideas' => $ideas]);
    }

    public function create(): View
    {
        return view('ideas.create');
    }

    public function show(Request $request, Idea $idea): View
    {
        return view('ideas.show', ['idea' => $idea] );
    }

    public function store(IdeaStoreRequest $request, string $from): RedirectResponse
    {
        $validated = $request->validated();

        Idea::create($validated);

        if ($from == 'dashboard') {
            return to_route('dashboard.index');
        }

        return to_route('ideas.index');
    }

    public function edit(Request $request, Idea $idea): View
    {
        return view('ideas.edit', ['idea' => $idea]);
    }

    public function update(IdeaUpdateRequest $request, Idea $idea): RedirectResponse
    {
        // $idea->content = $request->safe()->only(['content'])
        $idea->update($request->safe()->only(['content']));

        return to_route('ideas.show', ['idea' => $idea]);
    }

    public function destroy(Request $request, Idea $idea): RedirectResponse
    {
        $idea->delete();

        return to_route('ideas.index');
    }
}
