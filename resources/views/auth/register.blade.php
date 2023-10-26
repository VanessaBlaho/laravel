<h1>Register</h1>

<form action="{{ route('register') }}" method="post">
 
    @csrf
    <label for="name">Name</label><br>
    <input type="text" name="name" value="{{ old('name') }}">
    <br>
    <label for="email">E-mail</label><br>
    <input type="email" name="email" value="{{ old('email') }}">
    <br>
    <label for="password">password</label><br>
    <input type="password" name="password" value="">
 <br>
    <label for="re-enter">re-enter password</label><br>
    <input type="password" name="password_confirmation" value="">
 <br>
    <button>Register</button>
 
</form>