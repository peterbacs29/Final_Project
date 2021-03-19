@extends('layout.master')
@section('title')
    Edit task
@endsection

@section('content')
    <div class="container">
        <div class="col-md-8 offset-md-2">  

            <form action="{{route('tasks.update', $task->id)}}" method="post">
                @csrf
                @method('put')
                <div class="mt-5 pb-3 container" id="div_add_1">
                <label class="card-title pt-5 fw-bold fs-5" id="edit_event_h5">Edit Event</label>
                    <br><br>
                        <label class="col-sm-3 col-form-label fw-bold" style="margin-left:150px;">Event Name</label>
                        <input class="col-sm-3" value="{{$task->task_column}}" type="text"  name="task_input_eventName" required > 

                        <br><br><br>

                        <label class="col-sm-3 col-form-label fw-bold" style="margin-left:150px;">Date</label>
                        <input class="col-sm-3" value="{{$task->date}}"type="date" name="date">

                        <br><br><br>

                        <label class="col-sm-3 col-form-label fw-bold" style="margin-left:150px;">Incharge</label>
                        <input class="col-sm-3" value="{{$task->incharge}}" type="text" name="task_input_inchargeName" required placeholder="Enter incharge name">

                        <br><br><br>

                        <label class="col-sm-3 col-form-label fw-bold" style="margin-left:150px;">Venue</label>
                        <input class="col-sm-3" value="{{$task->venue}}" type="text" name="task_input_venue" required placeholder="Enter venue">

                        <br><br>

                        <input type="submit" value="Edit" class="mb-3 btn btn-info" style="margin-right:30px; margin-left:130px;">
                        <a class="mb-3 btn btn-secondary" href="{{route('tasks.index')}}">Back</a>
            </form>
        </div>
    </div>
@endsection