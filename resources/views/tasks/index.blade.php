@extends('home')
@section('content')
<h3>Calendar</h3>
    <div id='calendar'>
    </div>

    <script>
        $(document).ready(function(){
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                events : [
                    @foreach($tasks as $task) {
                        title : "{{ $task->name }}",
                        start : '{{ $task->task_date }}',
                        color : 'black',
                        backgroundColor : ' #58d68d ',
                        textColor: 'white',
                        url : "{{ route('tasks.show', $task->id ) }}"
                    },
                    @endforeach
                ],
                dayClick: function(date, jsEvent, view){
                    window.location.replace("/tasks.create?date="+date.format());
                },
            })
        });
    </script>
@endsection('content')