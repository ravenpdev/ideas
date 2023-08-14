<x-layout>
    <div class="flex flex-col gap-4 w-full px-4 lg:border-x lg:border-slate-900">
        @foreach ($ideas as $idea)
            <x-idea-item :$idea />
        @endforeach
    </div>
</x-layout>
