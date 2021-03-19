@extends('layout.master')
@section('title')
    Specific Task
@endsection

@section('content')
<div class="mt-5 pb-3 container" id="div_add_1">
                <label class="card-title pt-5 fw-bold fs-5" id="add_event_h5">Event Details </label>
                    <br><br>
                    
                        <label class="col-sm-3 col-form-label fw-bold" style="margin-left:150px;"><h3>Event Name: {{$task->task_column}}</h3></label>

                        <br><br><br>

                        <label class="col-sm-3 col-form-label fw-bold" style="margin-left:150px;"><h3>Schedule: {{$task->date}}</h3></label>

                        <br><br><br>

                        <label class="col-sm-3 col-form-label fw-bold" style="margin-left:150px;"><h3>Venue: {{$task->venue}}</h3></label>
  
                        <br><br><br>

                        <label class="col-sm-3 col-form-label fw-bold" style="margin-left:150px;"><h3>In charge: {{$task->incharge}}</h3></label>

                        <br><br>
                        <a class="mb-3 btn btn-secondary" href="{{route('tasks.index')}}">Back</a>
                        
</div>


@endsection
