<div class="bg-slate-100 p-4">
    <div class="flex justify-between">
        <div>
            User
        </div>
    </div>
    <div class="mt-4 text-slate-900">
        {{ $idea->content }}
    </div>
    <div class="mt-4 flex justify-between">
        <div class="flex items-center gap-1 text-rose-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
            </svg>

            <span>{{ $idea->likes }}</span>
        </div>
        <div class="flex items-center gap-1 text-sm text-slate-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>

            <span>{{ $idea->created_at->diffForHumans() }}</span>
        </div>
    </div>
</div>
