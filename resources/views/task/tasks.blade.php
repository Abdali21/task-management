<x-master title="Tasks">
   <h2>My Tasks : </h2>
   @foreach ($tasks as $task)
       <x-task-card :task="$task"/>
   @endforeach
</x-master>