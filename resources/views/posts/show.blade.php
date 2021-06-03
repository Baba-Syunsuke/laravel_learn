
<x-layout>
    <x-slot name="title">
        {{ $post }}-MyBBS
    </x-slot>
    <h1>{{ $post }}</h1>
        <div class="back-link">
            &laquo;<a href={{ route('posts.index') }}>Back</a>
        </div>
</x-layout>
