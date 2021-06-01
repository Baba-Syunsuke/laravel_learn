
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>MyBBS</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>My BBS</h1>
        <ul>
            @forelse ($posts as $index => $post)

                <li>
                    <a href ="/posts/{{ $loop->index }}">
                        {{ $post }}
                    </a>
            @empty
                <li>No posts yet!</li>
            @endforelse
        </ul>
    </div>
</body>
</html>
