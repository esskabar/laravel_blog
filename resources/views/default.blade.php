@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>
           Загрузка изображения вариант №1
        </h1>
        {{--Uploaded Files to server project--}}
        {{--<form action="{{route('image.upload')}}" method="post" enctype="multipart/form-data">--}}
            {{--{{csrf_field()}}--}}
            {{--<div class="form-group">--}}
                {{--<input type="file" name="image">--}}
                {{--<button class="btn btn-default" type="submit">Загрузка</button>--}}
            {{--</div>--}}
        {{--</form>--}}
        {{--@isset($path)--}}
            {{--<img class="img-fluid" src="{{asset('/storage/' . $path)}}" alt="">--}}
        {{--@endisset--}}
        <image-upload></image-upload>
    </div>
@endsection