<x-layout>
    <div class="flex flex-col gap-8">
        @foreach ($ideas as $idea)
            <div class="bg-slate-200 p-4 w-full lg:max-w-md">
                <div>
                    {{ $idea->content }}
                </div>
                <div>
                    {{ $idea->likes }}
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
