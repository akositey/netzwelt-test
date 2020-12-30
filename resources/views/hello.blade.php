<h1>Hello {{$username}}</h1>

<form action="/logout" method="post">
  @csrf
  <button>Log out</button>
</form>
