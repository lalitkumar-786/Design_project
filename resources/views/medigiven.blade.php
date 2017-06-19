<?php
    $disease=$qw;
?>
@extends('master')
@section('title','disease')
<body>
<style>
    .medicine_box{
        font-family:sans-serif;
        font-size: 30px;
        background-color: aquamarine;
        margin-top: 14%;
         box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
     transition: 0.3s;
    height:350px;
    width: 600px;
    border-radius: 5px; /* 5px rounded corners */
    }
     
.medicine_box:hover {
    box-shadow: 12px 15px 16px 0 rgba(0,0,0,0.4);
}
</style>
</body>
@section('body')
<div class="container">
    <div class="row">
        <center>
        <div class="medicine_box">
            <b><u>Your medicine:</u></b>
            <br>
            <br>
            <b>Name</b>:&nbsp;{{$disease}}
            <br>
            <b>Serial number:</b>
            <?php
            if($disease=='Paracetamol'){
                echo "1111";
            }
            else if($disease=='Pholcodine')
            {
                echo "3333";
            }
            else if($disease=='Ibuprofen'){
                echo "4444";
            }
            else if($disease=='Loperamide'){
                echo "5555";
            }
            else if($disease=='Aspirin'){
                echo "2222";
            }
            else if($disease=='Panadol'){
                echo "6666";
            }
            ?>
            </div>
        </center>
    </div>

</div>

@stop