@extends('admin.layouts.app_admin')

@section('content')
<div class="container">

    @component('admin.components.breadcrumb')
        @slot('title') Categories list @endslot
        @slot('parent') Main @endslot
        @slot('active') Categories @endslot
    @endcomponent

    <hr>

    <a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right">
        <i class="fa fa-plus-square-o"></i> Create category
    </a>
    <table class="table table-striped">
        <thead>
            <th>Title</th>
            <th>Publshed</th>
            <th class="text-right">Action</th>

        </thead>
        <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{$category->title}}</td>
                    <td>{{$category->published}}</td>
                    <td class="text-right">
                        <form onsubmit="if(confirm('Delete')){return true }else{ return false}" class="" action="{{route('admin.category.destroy' , $category )}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{csrf_field()}}
                            <a href="{{route('admin.category.edit' , $category)}}" class="btn btn-default"><i class="fa fa-edit"></i></a>
                            <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>Data Empty</h2></td>
                </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">{{$categories->links()}}</ul>
                </td>
            </tr>
        </tfoot>
    </table>
</div>



@endsection
