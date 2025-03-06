<x-master title="register">
    <div class="h-screen flex justify-center items-center">
        <form method="POST" action="{{route("profiles.store")}}" class="w-96 p-6 bg-gray-100">
            @csrf
            <h2 class="text-2xl text-center font-semibold mb-4">Register</h2>
            <div class="flex flex-col space-y-1  mb-4">
                <label class="font-semibold">Name :</label>
                <input type="text" name="name" placeholder="Enter your name" 
                class="p-2 border border-gray-300 rounded-md"
                >
                @error('name')
                   <span class="text-red-400 mt-1">
                    {{$message}}
                   </span>
                @enderror
            </div>

            <div class="flex flex-col space-y-1  mb-4">
                <label class="font-semibold">Email :</label>
                <input type="mail" name="email" placeholder="example@gmail.com"
                 class="p-2 border border-gray-300 rounded-md"
                >
                @error('email')
                <span class="text-red-400 mt-1">
                 {{$message}}
                </span>
             @enderror
            </div>

            <div class="flex flex-col space-y-1  mb-4">
                <label class="font-semibold">Password : </label>
                <input type="password" name="password" placeholder="enter your password"
                 class="p-2 border border-gray-300 rounded-md"
                >
                @error('password')
                <span class="text-red-400 mt-1">
                 {{$message}}
                </span>
             @enderror
            </div>

            <div class="flex flex-col space-y-1 mb-4">
                <label class="font-semibold">Password Confirmation :</label>
                <input type="password" name="password_confirmation" placeholder="enter your password"
                 class="p-2 border border-gray-300 rounded-md"
                >
            </div>

            <button class="w-full py-2 text-gray-100 bg-blue-500 hover:bg-blue-600 rounded-md cursor-pointer" type="submit">
                Register
            </button>
        </form>
    </div>
</x-master>