@extends('master')
@section('title','cough')
<!--enter css-->
@section('body')
<div class="container">
<br><br>
<h5><b>Cough:</b></h5>
<div class="heading"><br/><h5> Overview:</h5><br/>
</div>
<div class="text" style="font-size:22px;">
Coughing is the body's way of removing foreign material or mucus from the lungs and upper airway passages or of reacting to an irritated airway. Coughs have distinctive traits you can learn to recognize. A cough is only a symptom, not a disease, and often the importance of your cough can be determined only when other symptoms are evaluated.
</div>
<hr>
    <br>
        <div class="heading"><h5>Causes of Cough:
            </h5></div> 

<div class="text" style="font-size:22px;">
The following causes, alone or in combination, are responsible for the majority of cases of chronic cough:
<ul>
    1)&nbsp;Postnasal drip. When your nose or sinuses produce extra mucus, it can drip down the back of your throat and trigger your cough reflex. This condition is also called upper airway cough syndrome (UACS).</li><li> 2)&nbsp;
    Asthma. An asthma-related cough may come and go with the seasons, appear after an upper respiratory tract infection, or become worse when you're exposed to cold air or certain chemicals or fragrances. In one type of asthma (cough-variant asthma), a cough is the main symptom.</li>
    <li>3)&nbsp;
        Gastroesophageal reflux disease (GERD). In this common condition, stomach acid flows back into the tube that connects your stomach and throat (esophagus). The constant irritation can lead to chronic coughing. The coughing, in turn, worsens GERD — a vicious cycle.</li>
    <li>4)&nbsp;
        Infections. A cough can linger long after other symptoms of pneumonia, flu, a cold or other infection of the upper respiratory tract have gone away. A common but under-recognized cause of a chronic cough in adults is pertussis, also known as whooping cough.  </li>
    </ul><hr>
</div>
    <br><br>
    <div class="heading"><h5>
        Diagnosis of Cough</h5>
        </div>
<div style="font-size:22px;">  
        There is no sure way to prevent a cough. To help reduce your risk:
<li>
Wash your hands frequently during the cold and flu season.    </li><li>
Avoid people who have a cold or influenza if possible.
    </li><li>
Don't smoke or use other forms of tobacco. A dry, hacking "smoker's cough" means your lungs are constantly irritated.
    </li><li>
    Avoid exposure to secondhand smoke, both at home and in the workplace.
    </li><li>
Make sure your immunizations are current, such as pertussis to reduce your risk of getting whooping cough. For more information, see the topic Immunizations.<br><br>
    </li><div class="row">
 <div class="col s2;" style="font-size:22px;">
<form  action="medicines" method="get">
    <select name="medi">
    <option value="" disabled selected>Select &nbsp;Medicine</option>

        <option name="Pholcodine" value="Pholcodine">Pholcodine</option>
        
   </select>
     <button class="btn">Go</button>
    
</form>

     </div>
</div>
    
    
   
  
@stop