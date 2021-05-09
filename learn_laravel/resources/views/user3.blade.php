<h1>Login Form</h1>

<!-- show manual error -->
<!-- {{$errors}} -->

<!-- loop error with li -->
<!-- @if($errors->any())
@foreach($errors->all() as $err) 
<li>{{$err}}</li>
@endforeach
@endif -->


<form action="user3" method="POST">
    @csrf
    <input type="text" name="username" placeholder="enter username" />
    <br>
    <span style="color: red">
        @error("username")
        {{$message}}
        @enderror
    </span>
    <br>
    <input type="password" name="password" placeholder="enter password" />
    <br>
    <span style="color: red">
        @error("password")
        {{$message}}
        @enderror
    </span>
    <br>
    <button type="submit">Login</button>
</form>