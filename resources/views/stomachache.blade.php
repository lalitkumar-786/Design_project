@extends('master')
@section('title','stomachache')
<!--enter css-->
@section('body')
<div class="container">
<br><br>
<h5><b>Stomach Ache:</b></h5>
<div class="heading"><br/><h5> Overview:</h5><br/>
</div>
<div class="text" style="font-size:22px;">
Nonulcer stomach pain is a term used to describe signs and symptoms of indigestion that have no obvious cause. Nonulcer stomach pain is also called functional dyspepsia (dis-PEP-see-uh) or nonulcer dyspepsia.

Nonulcer stomach pain is common and can be long lasting. Nonulcer stomach pain can cause signs and symptoms that resemble those of an ulcer, such as pain or discomfort in your upper abdomen, often accompanied by bloating, belching and nausea.</div>
<hr>
    <br>
<div class="heading"><h5>Causes of Stomach Ache:
</h5></div> 

<div class="text" style="font-size:22px;">
Some common causes of a stomach ache include:
    <li>trapped wind (flatulence)</li>
    <li>
pain or discomfort after eating (indigestion)
    </li><li>constipation</li>
</div>
    <br><br>
    <div class="heading"><h5>
        <hr>
        Diagnosis of Stomach Ache</h5>
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

        <option name="Panadol" value="Panadol">Panadol</option>
        
   </select>
     <button class="btn">Go</button>
    
</form>

     </div>
</div>
    
    
   
  
@stop