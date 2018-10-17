@extends('home')
@section('content')

<script>
    $('.date').datepicker({
        autoclose: true,
        dateFormat: "yy-mm-dd"
    });
</script>
<?php
    $fecha = $_GET['date'];
?>
<div class="form-group" align="center"> 
    <form action="{{ route('tasks.store') }}" method="post">
        {{ csrf_field() }}
        Task name:
        <br />
        <input type="text" name="name" />
        <br /><br />
        Task description:
        <br />
        <textarea name="description"></textarea>
        <br /><br />
        Start time:
        <br />
        <input class="text-center" type="datetime" id="task_date" name="task_date" class="date" value=<?php echo $fecha?> readonly/>
        <br /><br />
        <a class="btn btn-primary" href="/tasks"/>Back</a>
        <input class="btn btn-success" type="submit" value="Save" />
    </form>
</div>
@endsection('content')