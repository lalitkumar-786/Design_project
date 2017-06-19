<?php
$flag=0;
$city=$subject[0];
$spe=$subject[1];
if($spe=="v_specialization")
$doctor = \DB::table('doctor')->where('doc_city',$city)->get();
else if($city=="v_city")
    $doctor=\DB::table('doctor')->where('doc_specialization',$spe)->get();
else 
    $doctor=\DB::table('doctor')->where('doc_city',$city)->where('doc_specialization',$spe)->get();
$items=count($doctor);
?>
@extends('master')
@section('title','disease')
@section('css')
<body>
<style>
    sidenav {
        background-color: midnightblue;
        font-family: sans-serif;
        width: 150px;
        float: left;
        color: aliceblue;
        align-content: center;
        text-align: center;
    }
body{
	background-image: url('images/light-red-NR.jpg');
	width: 100%;
	height: 100%;
    position: relative;
	background-repeat: no-repeat;
	background-size: cover;
        font-family: "Lato", sans-serif;
}
.card {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    margin-left: 5%;
    margin-bottom: 3%;
    transition: 0.3s;
    height:350px;
    width: 250px;
    position: relative;
    float: left;
}
/* On mouse-over, add a deeper shadow */
.card:hover {
    box-shadow: 0 15px 16px 0 rgba(0,0,0,0.4);
}

/* Add some padding inside the card container */
.container {
    position: relative;
} 
.card {
    box-shadow: 0 8px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 5px; /* 5px rounded corners */
    position: relative;
}

/* Add rounded corners to the top left and the top right corner of the image */
img {
    position: relative;
    border-radius: 5px 5px 0 0;
}
/* The side navigation menu */

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</body>



@stop
@section('body')
<!--<div class="row">
    <div class="col s1 offset-s0">
        <sidenav>
    lalit
</sidenav>

    </div>

</div>-->
<div class="container" style="margin-top:7%;">
 
    
   <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
       <form action="filter" method="get">  
           <input type="hidden" name="_token" value="{{csrf_token()}}">
          
       <a href="#">City:</a>
           <div style="font-size:35px;color: #818181;margin-left:13%;margin-right:13%;">
            <select name='city'>
              <option value="v_city"  selected>Select city</option>
              <option value="Delhi" >Delhi</option>
              <option value="Jabalpur" >Jabalpur</option>
              <option value="Jaipur" >Jaipur</option>
              <option value="Hyderabad">Hyderabad</option>
              <option value="Mumbai" >Mumbai</option>
              <option value="bhopal" >Bhopal</option>
            </select>
           </div>
           <a href="#">Specialization:</a>
           <div style="font-size:35px;color: #818181;margin-left:13%;margin-right:13%;">
            <select name='specialization'>
              <option value="v_specialization"  selected>Select </option>
              <option value="cardiologist" >Cardiologist</option>
              <option value="neurologist" >Neurologist</option>
              <option value="gynecologist" >Gynecologist</option>
              <option value="ent" >ENT</option>
              <option value="dermatologist" >Dermatologist</option>
              <option value="oncologist" >Oncologist</option>
            </select>
           </div>
           <div style="margin-left:30%;color:gray;">
           <button class="btn">Go</button>
           </div>
       </form> 
       
</div>

<div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Filter</span>
</div>
 
    
    
    
    
    
    
    
    
    <hr>
    <h5><u>Available Doctors:</u></h5>
    
    @if($items==0)
    <div class="green-text" style="font-size:30px;"><i><center>No Results found !</center></i></div>
    @endif
     @foreach($doctor as $user)
    <div class="card">
    <img src="images/{{$user->doc_photo}}" alt="Avatar" style="width:100%;height:50%;">
        <p style="margin-left:5%;"><b><u>Name</u></b><b>&nbsp;:&nbsp; Dr .{{$user->doc_name}}</b></p> 
    <p style="margin-left:5%;"><b><u>Specialization</u></b>&nbsp;:&nbsp;{{$user->doc_specialization}}</p>
    <p style="margin-left:5%;"> <b><u>Address</u></b>&nbsp;:&nbsp;{{$user->doc_add}}</p>
     <p style="margin-left:5%;"><b><u>Phone no.</u></b>&nbsp;:&nbsp;{{$user->doc_phno}}</p>
  
    </div>
    @endforeach    
    

</div>
<script>/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}
</script>
@stop