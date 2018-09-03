@extends('admin.layouts.app_admin')

@section('content')
    <h1 style="text-align: center">Admin Panel</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p class="lead text-center"><span class="label label-primary">Category {{$count_categories}}</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p class="lead text-center"><span class="label label-primary">Resources {{$count_articles}}</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p class="lead text-center"><span class="label label-primary">Members 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p class="lead text-center"><span class="label label-primary">Guests 0</span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a type="button" class="btn btn-primary btn-lg btn-block" href="#">Create Category</a>
                @foreach( $categories as $category)
                    <a class="list-group-item" href="{{route('admin.category.edit' , $category )}}">
                        <h4 class="list-group-item-heading">{{$category->title}}</h4>
                        <p class="list-group-item-text">{{$category->articles()->count()}}</p>
                    </a>
                @endforeach
            </div>
            <div class="col-sm-6">
                @foreach( $articles as $article)
                    <a type="button" class="btn btn-primary btn-lg btn-block" href="{{route('admin.article.edit' , $article )}}">
                        <h4 class="list-group-item-heading">{{$article->title}}</h4>
                        <p class="list-group-item-text">{{$article->categories()->pluck('title')->implode(', ')}}</p>
                    </a>
                @endforeach

            </div>
        </div>
    </div>
@endsection