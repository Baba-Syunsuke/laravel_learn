<x-layout>
    <x-slot name="title">
        MyBBS
    </x-slot>
    <h1>My BBS</h1>
    <ul>
        @forelse ($posts as $post)

            <li>
                <a href ="{{ route('posts.show',$post) }}">
                    {{ $post->title }}
                </a>
        @empty
            <li>No posts yet!</li>
        @endforelse
    </ul>

</x-layout>
