<x-layout.layout>
    <div class="flex flex-col gap-4">
        @foreach ($ideas as $idea)
            <x-ideas.idea-card :$idea />
        @endforeach
    </div>
</x-layout.layout>
