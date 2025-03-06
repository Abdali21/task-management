<x-master title="login">
    <div class="flex items-center justify-center h-screen">
    <form method="POST" action="{{route("login.login")}}" class="bg-gray-100 p-8 w-96 rounded-md ">
        @csrf
        <h2 class="text-center text-2xl font-semibold mb-4">Login</h2>

        <div class="flex flex-col justify-center space-y-1 mb-4">
            <label class="font-semibold" for="email">Email :</label>
            <input name="email" type="email" placeholder="Example@gmail.com"
            class="w-full p-2 border border-gray-300  rounded-md ">
            @error('email')
                <span class="text-red-600">
                    {{$message}}
                </span>
            @enderror
        </div>

        <div class="flex flex-col justify-center space-y-1 mb-4">
            <label for="password" class="font-semibold ">Password :</label>
            <input name="password" type="password" placeholder="Enter your password"
            class="w-full p-2 border border-gray-400  rounded-md">
        </div>

        <div class="flex flex-col justify-center space-y-2 ">
            <button class="px-4 py-2 w-full bg-green-500 hover:bg-green-600 cursor-pointer  text-gray-100" type="submit">
                Login
            </button>
            <button type="submit" class="px-4 py-2 cursor-pointer w-full bg-blue-500 hover:bg-blue-600  text-gray-100">
               <a href="{{route("profiles.create")}}">
                Register
               </a>
            </button>
        </div>
    </form>
</div>
</x-master>