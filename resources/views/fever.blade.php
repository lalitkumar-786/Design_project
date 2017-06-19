@extends('master')
@section('title','disease')
<body>
<style>
    .link .ul .li:hover{
        color: blue;
    }    
    
</style>
</body>
@section('body')
<div class="container">
<br><br>
<h5><b>Fever:</b></h5>
<div class="heading"><br/><h5> Overview:</h5><br/>
</div>
<div class="text" style="font-size:22px;">
A fever -- also known as a high fever or a high temperature -- is not by itself an illness. It's usually a symptom of an underlying condition, most often an infection.
</div>
<hr>
    <br>
        <div class="heading"><h5>Causes of Fever:
            </h5></div> 

<div class="text" style="font-size:22px;">
            A part of the brain called the hypothalamus controls body temperature entirely, which usually varies throughout the day from the normal temperature of 98.6 F.
   <hr>
</div>
    <br><br>
    <div class="heading"><h5>
        Diagnosis of Fever</h5>
        </div>
<div class="text" style="font-size:22px;">    
Treatments vary depending on the cause of the fever. For example, antibiotics would be used for a bacterial infection such as strep throat.
            The most common treatments for fever include over-the-counter drugs such as:
    </div>
    <br><br>
<div class="row">
 <div class="col s2;" style="font-size:22px;">
<form  action="medicines" method="get">
    <select name="medi">
    <option value="" disabled selected>Select &nbsp;Medicine</option>
        <option value="Paracetamol"><b>Paracetamol</b></option>
   </select>
     <button class="btn">Go</button>
    
</form>
    </div>
</div>
    
   
  
@stop