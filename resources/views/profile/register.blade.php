<x-master title="login">
    <form method="POST" action="{{route("profiles.store")}}">
        @csrf
        <label>Name</label>
        <input type="text" name="name" placeholder="enter your name">
        <label>email</label>
        <input type="mail" name="email" placeholder="example@gmail.com" >
        <label>Password</label>
        <input type="password" name="password" placeholder="enter your password">
        <label>Password confirmation</label>
        <input type="password" name="password_confirmation" placeholder="enter your password">
        <button type="submit">
            Register
        </button>
    </form>
</x-master>