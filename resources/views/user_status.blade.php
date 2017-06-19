<?php
$id=$_SESSION['username'];
$user = \DB::table('medi_taken')->where('email',$id)->get();
$items=count($user);
?>
@extends('master')
@section('title','user_status')
<body>
<style>
    .medicine_box{
        font-family:cursive;
        font-size: 38px;
        background-color:lightgreen;
        margin-top: 14%;
         box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
     transition: 0.3s;
    //height:350px;
    width: 800px;
    border-radius: 5px; /* 5px rounded corners */
    }
     
.medicine_box:hover {
    box-shadow: 12px 15px 16px 0 rgba(0,0,0,0.4);
}
</style>
</body>
@section('body')
<div class="container">
        <center>
            <div class="medicine_box">
                Your status:
                @if($items==0)
                    <div class="text-violet" style="font-size:25px;">No Results found...</div>
                @else
        <table class="centered responsive-table highlight">
        <tr>
            <td><b><u>Medicine</u></b></td>
            <td><b><u>Date&nbsp;&nbsp;Time</u></b></td>
            
        </tr>    
            @foreach($user as $a)
            <tr>
            <td>{{$a->medi_name}}</td>
<td>{{date('j-F-Y',strtotime($a->created_at))}}&nbsp;&nbsp;{{date('H:m:s',strtotime("5 hours,20 minutes"+$a->created_at))}}</td>
            @endforeach
                </table>
            @endif
            </div>
        </center>
</div>

@stop