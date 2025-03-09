<x-master title="Home">
    <div class="h-full flex items-center justify-center bg-gray-100">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-900">
                Welcome, {{ Auth::user()->name }}! 👋
            </h1>
            <p class="text-gray-600 mt-2">
                Manage your tasks efficiently and stay productive.
            </p>
            <a href="{{ route('tasks.index') }}" 
               class="mt-4 inline-block bg-blue-600 text-white px-6 py-2 rounded-lg text-lg hover:bg-blue-700">
                View Tasks
            </a>
        </div>
    </div>
</x-master>
