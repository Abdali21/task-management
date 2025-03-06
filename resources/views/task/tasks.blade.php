<x-master title="tasks">
 <h2>My Tasks</h2>
 <table class="">
    <tr>
        <th>
            Task
        </th>
        <th>
            Status
        </th>
        <th>
            Due Date
        </th>
        <th>
            Operation
        </th>
    </tr>
     @foreach ($tasks as $task)
         <tr>
            <td>{{$task->title}}</td>
            <td>{{$task->status}}</td>
            <td>{{$task->due_date ?? "No Date"}}</td>
            <td>
                Edit
            </td>
         </tr>
     @endforeach
 </table>
</x-master>