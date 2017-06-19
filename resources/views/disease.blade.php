<?php session_start();
  if(!(isset($_SESSION['username'])))
  {
    return redirect('login');
  }
?>
@extends('master')
@section('title','disease')
<!--enter css-->
@section('body')
<div class="container">
    
    <center>
        <div class="heading" style="margin-top:7%">
    <h5>Explore your disease.!
        </h5></div>
        <form class="form" action='clicksymptoms' method="get">
        <div class="row" style="margin-top:2%;">
        <div class="input-field col s3 offset-s3">
            <select name='disease'>
              <option value="" disabled selected >Explore your Disease</option>
              <option value="fever" name='fever'>Fever</option>
              <option value="cough" name='cough'>Cough</option>
              <option value="cold" name='cold'>Cold </option>
            <option value="diarrhea" name='diarrhea'>Diarrhea</option>
              <option value="headache" name='headache'>Head ache</option>
              <option value="stomachache" name='stomachache'>Stomach ache</option>
            </select>
        </div>
        <div class="input-field col s3 offset-s1">
          <input id="last_name" type="text" class="validate" required name="age">
          <label for="last_name">AGE</label>
        </div>
      </div>
        <div class="row">
            <button class="btn">Go!</button>
   </div>
        </form>
    </center>
        </div>

  
@stop
