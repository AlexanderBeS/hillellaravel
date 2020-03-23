<ul>
    @foreach($posts as $post)
    <li>
        <a href="{{ route('posts.show', ['post' => $post->id]) }}"  > {{ $post->title }} </a>
        <br>
        <a href="{{ route('posts.edit', ['post' => $post->id]) }}"  > Edit </a>
        <br>
        <form method="post" action="{{route('posts.destroy', ['post' => $post->id])}}" >
            @method('delete')
            @csrf
            <button type="submit">X</button>
        </form>

    </li>
        <br>
    @endforeach
    <a href="{{ route('posts.create') }}">Create new post</a>
</ul>