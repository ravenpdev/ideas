<x-layout.layout>
    <x-form method="POST" action="{{ route('ideas.store', ['from' => 'dashboard']) }}">
        <div>
            <x-textarea id="content" rows="4" placeholder="Idea?" name="content"></x-textarea>
        </div>
        <div class="mt-2 flex justify-end">
            <!-- <button class="bg-sky-500 p-1.5 px-3 text-sm text-sky-50 hover:bg-sky-600">Share</button> -->
            <x-button>Share</x-button>
        </div>
    </x-form>
    <div class="flex w-full flex-col gap-4">
        @foreach ($ideas as $idea)
            <x-idea-item :$idea />
        @endforeach
    </div>
</x-layout.layout>
