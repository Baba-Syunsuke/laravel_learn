


<x-layout>
    <x-slot name="title">
        A New Post -MyBBS
    </x-slot>

        <div class="back-link">
            &laquo;<a href={{ route('posts.index') }}>Back</a>
        </div>
        <form method="post" action="{{ route('posts.store') }}">
            @csrf
            <div class="form-group">
                <label>
                    Title
                    <input type="text" name="title" value ={{ old('title') }}>
                </label>
                @error('title')
                    <div class="error"> {{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>
                    Body
                    <textarea type="text" name="body">{{ old('body') }}</textarea>
                </label>
                @error('body')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-button">
                <button>Add</button>
            </div>
        </form>

</x-layout>
