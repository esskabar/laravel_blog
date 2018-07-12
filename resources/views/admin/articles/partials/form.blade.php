<label for=" ">Status</label>

<select class="form-control" name="published">
    @if(isset($article->id))
        <option value="0" @if($article->published == 0) selected="" @endif>Not Publish</option>
        <option value="1" @if($article->published == 1) selected="" @endif>Publish</option>
    @else
        <option value="0">Not Publish</option>
        <option value="1">Publish</option>
    @endif
</select>

<label for="">Title News</label>
<input type="text" class="form-control" name="title" value="{{$article->title or ""}}" placeholder="Title News" required>


<label for="">Slug (Unique value)</label>
<input type="text" class="form-control" name="slug" value="{{$article->slug or ""}}" placeholder="Auto generate" readonly="">

<label for="">Parent category</label>
<select class="form-control" name="categories[]" multiple="">
    <option value="0"> -- Without Parent Category -- </option>
    @include('admin.articles.partials.categories' , ['categories' => $categories])
</select>

<label for="">Short Description</label>
<textarea class="form-control" id="description_short" name="description_short">{{$article->description_short or ""}}</textarea>


<label for="">Full Description</label>
<textarea class="form-control" id="description" name="description">{{$article->description or ""}}</textarea>

<label for="">Meta title</label>
<input type="text" class="form-control" placeholder="Meta title" id="description" name="meta_title" value="{{$article->meta_title or ""}} "required>
<label for="">Meta description</label>
<input type="text" class="form-control" placeholder="Meta description" id="description" name="meta_description" value="{{$article->meta_description or ""}} "required>
<label for="">Keywords</label>
<input type="text" class="form-control" placeholder="Keywords, by coma" id="description" name="meta_keyword" value="{{$article->meta_keyword or ""}} "required>



<hr>

<input class="btn btn-primary" type="submit" value="Save">