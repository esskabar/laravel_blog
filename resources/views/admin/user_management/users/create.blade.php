@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        @component('admin.components.breadcrumb')

        @slot('title') Create User @endslot
        @slot('parent') Main @endslot
        @slot('active') User @endslot

        @endcomponent

        <hr>

        <form class="form-horizontal" action="{{route('admin.user_management.user.store')}}" method="post">
            {{csrf_field()}}
            @include('admin.user_management.users.partials.form')
        </form>
    </div>

@endsection