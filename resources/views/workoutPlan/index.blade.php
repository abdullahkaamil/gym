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
            <input name="memberid" type="hidden" value="{{$member->id}}">
                        <label for="formGroupday1Input">Select Days for Workout</label>
                        <select name="selectday" class="form-control" >
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        <a type="button" id="add" class="btn btn-info">Add Day</a>
                    <div id="days"></div>
                    <button type="submit" class="btn btn-success pull-right">Save</button>
            </form>
        </div>  
    </div> 

</div> 

<table>
        @foreach($memberplan as  $plan)
    <tbody>
        <tr>           
        <td>{{$plan->member_ID}}</td>
        <td>{{$plan->day}}</td>
        <td>{{$plan->Workout_plan[0]}}</td>
        
    </tr>
    </tbody>
    @endforeach
</table>
 
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
            // if state is bigger then a add 
            //if state is smaller then a delete 
            var div =  '<div class="form-group">'+
                '<label for="formGroupday1Input">Day '+(x+1)+':</label>'+
                '<textarea class="form-control" rows="5" cols="80" name="day['+(x+1)+']"></textarea>'+
                '</div>';
                $('div #days').append(div);
        }
    }
     
</script>    

@stop