@extends('layouts.app')

@section('content')
    @component('components.banner', ['title' => 'Our Blog'])
    @endcomponent
    @component('components.section', [
        'bgColor' => 'light',
        'fontColor' => 'dark',
        'title' => [
            'color' => 'green',
            'text' => 'Our Blog'
        ],
        'subtitle' => 'Find out the latest news from our blog !'
    ])
        <div class="row">
            @foreach ($posts as $post)
                @component('components.post', $post)
                {{ $post['body'] }}
                @endcomponent
            @endforeach
        </div>
    @endcomponent
@endsection