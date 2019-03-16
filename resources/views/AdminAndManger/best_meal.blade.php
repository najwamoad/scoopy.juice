@extends('AdminAndManger.Employeemaster')

@section('Econtent')
<div class="row">
                <form action="/addbestmeal" method="post">
                {{ csrf_field() }}
                    <div class="col-md-3">
                        <div class="input-append date form_datetime">
                            <input size="16" name="food_id" id="food_id" value="{{old('food_id')}}" type="text" value="" readonly placeholder="food_id">
                            <span class="add-on"><i class="icon-th"></i></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-append date form_time">
                            <input size="16" name="food_name" id="food_name"  type="text"readonly placeholder="food_name">
                            <span class="add-on"><i class="icon-th"></i></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class=" ">
                            <input name="imag" id="imag"  type="text"  placeholder="imag">
                        </div>
                    </div>
                    @if ($errors->any())
          <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
       </div>
          @endif
@stop