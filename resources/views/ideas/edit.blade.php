<x-layout.layout>
    <x-form method="put" action="{{ route('ideas.update', ['idea' => $idea]) }}">
        <x-textarea name="content">{{ old('content', $idea) }}</x-textarea>
        <x-button>Update</x-button>
    </x-form>
</x-layout.layout>
