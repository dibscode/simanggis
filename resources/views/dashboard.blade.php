<h1>Halo, {{ auth()->user()->username }}</h1>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
