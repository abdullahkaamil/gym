@extends('app')

@section('content')

<div class="rightside bg-grey-100">
    <div class="page-head bg-grey-100">
    <h1 class="page-title">Workout Plan </h1>
    </div>
        <div class="container-fluid">
                <div class="row">
        <div class="panel-body bg-white">
        <form action="" method="post">
                <div class="form-group">
                    <label for="formGroupday1Input">Day1:</label>
                    <textarea class="form-control" rows="5" cols="80" name="cmd"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="formGroupday2Input">Day2:</label>
                    <textarea class="form-control" rows="5" cols="80" name="cmd"></textarea>
                </div>

                <div class="form-group">
                    <label for="formGroupday3Input">Day3:</label>
                    <textarea class="form-control" rows="5" cols="80" name="cmd"></textarea>
                </div>
            </form>
        </div>  
    </div> 
</div>  
</div>

@endsection