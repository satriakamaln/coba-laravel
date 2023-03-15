@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    {!! $post->body !!}
    
</article>
<a href="/posts">Back to posts</a>
@endsection

{{-- Post::create([
    'title'=> 'Judul Ke tiga',
    'slug'=> 'judul-ke-tiga',
    'excerpt' => 'Lorem ipsum ke tiga',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ad quis ab doloribus nulla in eaque dolores facilis 
    sint id, deserunt dolore voluptatibus impedit quos facere voluptatum provident. Architecto laudantium reprehenderit 
    placeat et harum corrupti sapiente, mollitia repudiandae vero praesentium porro dignissimos sit dolore iste accusantium
    eaque inventore deleniti aspernatur maiores!</p><p>Minus quod culpa eligendi odio deserunt, libero id totam iste asperiores 
    fuga quas unde ea saepe laudantium enim optio quibusdam dolor velit officia voluptas eveniet, sint voluptates ab 
    ducimus! Repudiandae sunt adipisci, a quas illo qui veritatis voluptas repellat hic cumque ea pariatur, maiores numquam 
    animi modi non nobis?Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p><p> Cumque, adipisci numquam doloremque, 
    dolor saepe voluptatibus architecto enim molestias blanditiis delectus natus, provident dignissimos. Vitae nesciunt 
    quos facilis corrupti nam minima sit alias libero harum. Atque, vel laudantium expedita sit nostrum nobis magni autem 
    quidem, totam animi ducimus eos aperiam fugit?</p>'
]) --}}