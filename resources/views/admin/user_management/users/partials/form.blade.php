<label for="">Name</label>
<input type="text" class="form-control" name="name" value="{{$user->name or ""}}" placeholder="Name" required>
<label for="">Email</label>
<input type="email" class="form-control" name="email" value="{{$user->email or ""}}" placeholder="Email" required>
<label for="">Password</label>
<input type="password" class="form-control" name="password" value="{{$user->password or ""}}" placeholder="Password" required>
<label for="">Confirm Password</label>
<input type="password" class="form-control" name="password_confirmation" required>

<input class="btn btn-primary" type="submit" value="Save">