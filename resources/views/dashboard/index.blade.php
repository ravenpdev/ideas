<x-layout.layout>
    <x-form method="POST" action="{{ route('ideas.store', ['from' => 'dashboard']) }}">
        <div>
            <x-textarea id="content" rows="4" placeholder="Idea?" name="content"></x-textarea>
        </div>
        <div class="mt-2 flex justify-end">
            <x-button>Share</x-button>
        </div>
    </x-form>
    <div class="mt-8 flex w-full flex-col gap-4">
        @foreach ($ideas as $idea)
            <x-ideas.idea-card :$idea />
        @endforeach
    </div>
</x-layout.layout>
