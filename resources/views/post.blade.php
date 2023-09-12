<x-layout>
    <article>
        <h1>
            {{ $post->title }}
        </h1>

        <p>
            By <a href="users/{{$post->user->name}}">{{$post->user->name}}</a> in <a href="">{{ $post->category->name }}</a>
        </p>

        <div>
            {!! $post->body !!}
        </div>
    </article>
    <br>
    <a href="/">Go Back</a>
</x-layout>
