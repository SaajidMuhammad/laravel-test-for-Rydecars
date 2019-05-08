@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Make your posts here</div>

                <div class="card-body">
                    
                    <form action="{{ url('home') }}" method="POST">
                      {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="post_title" type="text" class="form-control @error('post_title') is-invalid @enderror" placeholder="Post Title" name="post_title" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" placeholder="Description" name="description" required autocomplete="name" autofocus rows="6"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Post Now') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>
<br><hr><br>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View All Posts</div>
   

                    @foreach($posts as $post)
                <div class="card-body" style="padding:10px;border:1px solid lightgray; border-radius:4px;margin:20px; border-left:5px solid black;">
                    <div class="post-box">
                        <article class="post">
                            <h3>{{ $post->post_title }}</h3><hr>
                                <p>
                                 {{ $post->description }}
                                </p>
                        </article><hr>
                        <div class="info">
                               <i> Posted by {{ Auth::user()->name }} on {{ $post->created_at }}</i>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
