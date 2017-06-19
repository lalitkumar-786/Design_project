@extends('master')
@section('title','general')
@section('css')
<body>
<style>
body{
    background-image: url('images/light-red-NR.jpg');
	width: 100%;
	height: 100%;
	background-repeat: no-repeat;
	background-size: cover;
        
    } 
 .box{
        background-color:cornflowerblue;
        color: black;   
        font-family:sans-serif;
        font-size: 20px;
        margin-left: 4%;
        margin-top: 10%;
        height: 300px;
        float: left;
        width: 400px;
         box-shadow: 0 4px 7px 0 rgba(0,0,0,0.2);
            border-radius: 10px; /* 5px rounded corners */
     transition: 0.3s;
    }
    .box:hover{
          box-shadow: 12px 15px 16px 0 rgba(0,0,0,0.4);
    }
</style>
</body>
@stop
@section('body')
<div class="container">
        <div class="box" align="center">
    <h4>Heart Attack</h4>
    </div>
    <div class="box" align="center">
    <h4>Cancer</h4>
    </div>
    <div class="box" align="center">
    <h4>Heart Attack</h4>
    </div>
    <div class="box" align="center">
    <h3>Heart Attack</h3>
    </div>
</div>
@stop
