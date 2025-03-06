<x-master title="login">
    <form method="POST" action="{{route("login.login")}}">
        @csrf
        <div class="flex flex-col justify-center space-y-2">
            <label for="email">email</label>
            <input name="email" type="email" placeholder="example@gmail.com">
            @error('email')
                {{$message}}
            @enderror
        </div>
        <div class="flex flex-col justify-center space-y-2">
            <label for="password">Password</label>
            <input name="password" type="password" placeholder="enter your password">
        </div>
        <button type="submit">
            login
        </button>
    </form>
</x-master>