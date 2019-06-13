@extends('app')

@section('content')

<div class="rightside bg-grey-100">
    <div class="page-head bg-grey-100">
    <h1 class="page-title">Workout Plan </h1>
    </div>
        <div class="container-fluid">
                <div class="row">
        <div class="panel-body bg-white">
        <form action="{{ route('Workouts')}}" method="post">
                <div>
                        <label for="formGroupday1Input">Select Days for Workout</label>
                        <select name="day" id="" class="form-control" >
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
            </form>
            <a type="button" id="add" class="btn btn-info">Add Day</a>
        </div>  
    </div> 
</div>  
</div>





@endsection

@section('footer_script_init')
<script type="text/javascript">
state = 0;
    $('#add').on('click',function(){
        var c = $('select').val();
        a = c - state ;
        addRow(a);
    });

    function addRow(i)
    {
        for(x = 0; x < i; x++){
            var div =  '<div class="form-group">'+
                '<label for="formGroupday1Input">Day '+(x+1)+':</label>'+
                '<textarea class="form-control" rows="5" cols="80" name="day'+(x+1)+'"></textarea>'+
                '</div>';
                $('form').append(div);
        }
    }

</script>    

@stop