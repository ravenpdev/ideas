<x-layout.layout>
    <div class="flex flex-col gap-4">
        @foreach ($ideas as $idea)
            <x-idea-item :$idea />
        @endforeach
    </div>
</x-layout.layout>
