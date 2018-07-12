<label for=" ">Status</label>

<select class="form-control" name="published">
    @if(isset($category->id))
        <option value="0" @if($category->published == 0) selected="" @endif>Not Publish</option>
        <option value="1" @if($category->published == 1) selected="" @endif>Publish</option>
        @else
        <option value="0">Not Publish</option>
        <option value="1">Publish</option>
    @endif
</select>

<label for="">Title</label>
<input type="text" class="form-control" name="title" value="{{$category->title or ""}}" placeholder="Title category" required>


<label for="">Slug</label>
<input type="text" class="form-control" name="slug" value="{{$category->slug or ""}}" placeholder="Auto generate" readonly="">

<label for="">Parent category</label>
<select class="form-control" name="parent_id">
    <option value="0"> -- Without Parent Category -- </option>
    @include('admin.categories.partials.categories' , ['categories' => $categories])
</select>

<hr>

<input class="btn btn-primary" type="submit" value="Save">