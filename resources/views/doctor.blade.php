<?php session_start();
  if(!(isset($_SESSION['username'])))
  {
    return redirect('login');
  }
?>
@extends('master')
@section('title','doctor')
@section('css')
<style>
body{
	background-image: url('images/light-red-NR.jpg');
	width: 100%;
	height: 100%;
	background-repeat: no-repeat;
	background-size: cover;
    
}
</style>

<body>
<style>
    .lalit{
        
        color:aqua;
        font-family: cursive;
    }
    .col-md-3 .thumbnail{
	height:200px;
	width:380px;
}
    


.col-md-3.thumbnail .i1:hover{
	opacity:0.4;
}


</style>
</body>
@stop
@section('body')

<h2 align='center'>   Specialists</h2>
<div class="container">
    <form action="specialist" method="get">
    <div class="row">
    <div class="col s5 offest-s4" style="margin-top:13%;margin-left:32%" >
        <input type="search" placeholder="Search city here..." name="specialist" required>
     </div>
    </div>
    <div style="margin-left:44%;">
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        </button>
    </div>
    </form>
    
    
    
<center>    
<p  align='center' style="margin-top:12%;"><h5>Not sure about the terms in specialists?Check below ..</h5>
    </center>

    <form action="specialist_terms" method="get">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
    <!--editing-->
     <div class="row">
        <div class="col s4 ">
          <div class="card">
            <div class="card-image">
              <img src="/images/AHS_Physician.jpg">
             
            </div>
            <div class="card-action" style="margin-left:17%;">
            <button class="btn" name="specialist_t" value="physician">Physician</button>
            </div>
          </div>
        </div>
        <div class="col s4">
          <div class="card">
            <div class="card-image">
              <img src="/images/cardiologist.jpg">
              
            </div>
            <div class="card-action" style="margin-left:15%">
            <button class="btn" name="specialist_t" value="cardiologist">Cardiologist</button>
            </div>
          </div>
        </div>
        <div class="col s4">
          <div class="card">
            <div class="card-image">
              <img src="/images/urologist2.jpg">
              
            </div>
            <div class="card-action" style="margin-left:17%;">
                <button class="btn" name="specialist_t" value="Urologist">Urologist</button>
            </div>
          </div>
        </div>
        
        
      </div>
    
    
    
    
    
    
    
    
    
    <div class="row">
        <div class="col s4 ">
          <div class="card">
            <div class="card-image">
              <img src="/images/neurologist1.jpg">
              
            </div>
            <div class="card-action" style="margin-left:15%;">
                <button class="btn" name="specialist_t" value="neurologist">Neurologist</button>
            </div>
          </div>
        </div>
        <div class="col s4">
          <div class="card">
            <div class="card-image">
              <img src="/images//kids.jpg">
              
            </div>
            <div class="card-action" style="margin-left:14%;">
             <button class="btn" name="specialist_t" value="kids_specialist">Kids specialist</button>
            </div>
          </div>
        </div>
        <div class="col s4">
          <div class="card">
            <div class="card-image">
              <img src="/images/allergist.jpg">
              
            </div>
            <div class="card-action" style="margin-left:17%;">
                <button class="btn" name="specialist_t" value="allergist">allergist</button>
            
            </div>
          </div>
        </div>
        
        
      </div>
    <div class="row">
        <div class="col s4 ">
          <div class="card">
            <div class="card-image">
              <img src="/images/ent.jpg">
              
            </div>
            <div class="card-action" style="margin-left:25%;">
                <button class="btn" name="specialist_t" value="ENT">E.N.T.</button>
              </div>
          </div>
        </div>
        <div class="col s4">
          <div class="card">
            <div class="card-image">
              <img src="/images/dietician.jpg">
              
            </div>
            <div class="card-action" style="margin-left:19%;">
                <button class="btn" name="specialist_t" value="dietician">Dietician</button>
            </div>
          </div>
        </div>
        <div class="col s4">
          <div class="card">
            <div class="card-image">
              <img src="/images//Dentist.jpg">
              
            </div>
            <div class="card-action" style="margin-left:19%;">
                <button class="btn" name="specialist_t" value="dentist">Dentist</button>
             </div>
          </div>
        </div>
      </div>
    </form>
<!--<div class="row">

  <div class="col-md-3">
    <div class="

<div class="col-md-3">

<div class="thumbnail">
      <a h
	</div>
	
	<div class="col-md-3">
	<div class="thumbnail">
	   <a href="#"><img class="i1" src="./css/images/urologist2.jpg"></a>
    </div>
  
  
  <div class="thumbnail">
	  <a href="#"> <img class="i1" src="./css/images/psychiatrist.jpg"></a>
    </div>
	
	<div class="thumbnail">
	   <a href="#"><img class="i1" src="./css/images/ent.jpg"></a>
    </div>
	</div>

	</div>
    
    
    -->
    
    </div>


  
@stop
