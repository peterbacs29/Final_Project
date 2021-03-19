@extends('layout.master')
@section('title')
    Add event
@endsection

@section('content')
        <form action="{{route('tasks.store')}}" method="post">
            @csrf
            @method('post')
            <div class="mt-5 pb-3 container" id="div_add_1">
                <label class="card-title pt-5 fw-bold fs-5" id="add_event_h5">Add Event </label>
                    <br><br>
                        <label class="col-sm-3 col-form-label fw-bold" style="margin-left:150px;">Event Name</label>
                        <input class="col-sm-3" type="text"  name="task_input_eventName" required placeholder="Enter event name"> 

                        <br><br><br>

                        <label class="col-sm-3 col-form-label fw-bold" style="margin-left:150px;">Date</label>
                        <input class="col-sm-3" type="date" name="date" required>

                        <br><br><br>

                        <label class="col-sm-3 col-form-label fw-bold" style="margin-left:150px;">Incharge</label>
                        <input class="col-sm-3" type="text" name="task_input_inchargeName" required placeholder="Enter incharge name">

                        <br><br><br>

                        <label class="col-sm-3 col-form-label fw-bold" style="margin-left:150px;">Venue</label>
                        <input class="col-sm-3" type="text" name="task_input_venue" required placeholder="Enter venue">

                        <br><br>

                        <input type="submit" value="Add" class="mb-3 btn btn-info" style="margin-right:30px; margin-left:130px;">
                        <a class="mb-3 btn btn-secondary" href="{{route('tasks.index')}}">Back</a>
                        
            </div>
        </form>
@endsection
