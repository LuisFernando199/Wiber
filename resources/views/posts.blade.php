@extends('layouts.layout')

@section('Title', 'Home')
@section('content')

<!-- Content -->
<section class="container-fluid content">
    <!-- Categorías -->
    <div class="row justify-content-center">
        <div class="col-10 col-md-12">
            <nav class="text-center my-5">
                <a href="{{ route('todas') }}" class="mx-3 pb-3 link-category d-block d-md-inline selected-category">Todas las Categorías</a>
                <a href="{{ route('categoria', ['category' => 'coche']) }}" class="mx-3 pb-3 link-category d-block d-md-inline">Coche</a>
                <a href="{{ route('categoria', ['category' => 'van']) }}" class="mx-3 pb-3 link-category d-block d-md-inline">Van</a>
            </nav>
        </div>
    </div>

    <!-- Posts -->
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row">
                <!-- Post -->
                @if(!empty($posts))
                @foreach ($posts as $post)
                <article class="col-lg-4 col-md-6 col-12 justify-content-center mb-5">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset($post->image) }}" alt="{{ $post->title }}">
                        <div class="card-body">
                            <header>
                                <small class="card-txt-category">Categoría: {{ $post->category }}</small>
                                <h1 class="card-title my-2">{{ $post->title }}</h1>
                            </header>
                            <div class="d-card-text">
                                {{ $post->description }}
                            </div>
                            <hr>
                            <footer>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">{{ $post->author }}</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">{{ $post->date }}</span>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>

                @endforeach
                @endif
            </div>
        </div>
    </div>

</section>

@endsection