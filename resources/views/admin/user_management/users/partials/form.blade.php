@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<label for="">Name</label>
<input type="text" class="form-control" name="name" value="@if(old('name')){{old('name')}}@else{{$user->name or ""}}@endif" placeholder="Name" required>
<label for="">Email</label>
<input type="email" class="form-control" name="email" value="@if(old('email')){{old('email')}}@else{{$user->email or ""}}@endif" placeholder="Email" required>
<label for="">Password</label>
<input type="password" class="form-control" name="password">
<label for="">Confirm Password</label>
<input type="password" class="form-control" name="password_confirmation">

<input class="btn btn-primary" type="submit" value="Save">