@extends('master')
@section('title','headache')
<!--enter css-->
@section('body')
<div class="container">
<br><br>
<h5><b>Head Ache:</b></h5>
<div class="heading"><br/><h5> Overview:</h5><br/>
</div>
<div class="text" style="font-size:22px;">
Tension headaches, the most common type, feel like a constant ache or pressure around the head, especially at the temples or back of the head and neck. Not as severe as migraines, they are not usually accompanied by nausea and vomiting, and they rarely stop someone from continuing their regular activities.</div>
<hr>
    <br>
<div class="heading"><h5>Causes of Headache:
</h5></div> 

<div class="text" style="font-size:22px;">
A primary headache is caused by overactivity of or problems with pain-sensitive structures in your head. A primary headache isn't a symptom of an underlying disease.
<br >
Chemical activity in your brain, the nerves or blood vessels surrounding your skull, or the muscles of your head and neck (or some combination of these factors) can play a role in primary headaches. Some people may also carry genes that make them more likely to develop such headaches.<hr>
</div>
    <br><br>
    <div class="heading"><h5>
        Diagnosis of Headache</h5>
        </div>
<div style="font-size:22px;">  
    <li>
   Antihistamine medication; topical, nasal cortisone related sprays; or desensitization injections
    </li>
    <li>
 Use of steroids; ergotamine; calcium channel blockers; and lithium
    
    </li>
    <br><br>
    <div class="row">
 <div class="col s2;" style="font-size:22px;">
<form  action="medicines" method="get">
    <select name="medi">
    <option value="" disabled selected>Select &nbsp;Medicine</option>

        <option name="Aspirin" value="Aspirin">Aspirin</option>
        
   </select>
     <button class="btn">Go</button>
    
</form>

     </div>
</div>
    
    
   
  
@stop