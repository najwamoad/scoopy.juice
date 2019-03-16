@extends('AdminAndManger.Employeemaster')

@section('Econtent')
<div class="col-md-3">
<aside class="f_widget gallery_widget">
 <div class="f_w_title">
 <h4>Reservation of tables</h4>
 </div>
 
 <table width="80%"  border="1" align="center">
 <th> mobile_customer: </th><th> start_date: </th><th> end_date: </th><th> number_people: </th>
@if(count($k))
 @foreach($k as $s)
 <tr>
      
 <td width="30%" align="center" bgcolor="#3cb371"><h6>  <a href="#">.. </a> {{$s->mobile_customer}}</h6></td>
  
 <td width="30%" align="center" bgcolor="#3cb371"><h6><a href="#">.. </a>{{$s->start_date}}</h6> </td>
  
 <td width="30%" align="center" bgcolor="#3cb371"><h6><a href="#">.. </a>{{$s->end_date}}</h6></td>
 
 <td width="30%" align="center" bgcolor="#3cb371"><h6><a href="#">.. </a>{{$s->number_people}}</h6></td>
 </tr>
 @endforeach 
 @endif

 
    </table>
     
    </aside>
      </div>
 
 
  
@stop