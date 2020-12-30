@error('username')
    <h3>username is required</h3>
@enderror
@error('password')
    <h3>password is required</h3>
@enderror

<form action="/login" method="POST">
  @csrf
  <label for="username">username</label>
  <input type="text" name="username" required>
  <label for="password">password</label>
  <input type="password" name="password" required>
  <button type="submit">Sign In</button>
</form>
