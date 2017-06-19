@extends('master')
@section('title','cold')
<!--enter css-->
@section('body')
<div class="container">
<br><br>
<h5><b>Cold:</b></h5>
<div class="heading"><br/><h5> Overview:</h5><br/>
</div>
<div class="text" style="font-size:22px;">
It's an illness caused by a tiny, living thing called a virus. More than 200 types lead to your misery, but the most common one is the rhinovirus, which is thought to be responsible for at least 50% of colds. Other viruses that can cause colds include coronavirus, respiratory syncytial virus, influenza and parainfluenza.</div>
<hr>
    <br>
        <div class="heading"><h5>Causes of Cold:
            </h5></div> 

<div class="text" style="font-size:22px;">
The following causes, alone or in combination, are responsible for the majority of cases of chronic cough:
<li>
    You can catch it from another person who is infected with the virus. This can happen by direct physical contact with someone who has a cold, or by touching a surface contaminated with their germs -- like a computer keyboard, doorknob or spoon --- and then touching your nose or mouth. You can also catch it from infected droplets in the air released by a sneeze or a cough.
    </li>
    <li>
        A cold begins when a virus attaches to the lining of your nose or throat. Your immune system -- the body's defense against germs -- sends out white blood cells  to attack this invader. Unless you've had a run-in with that exact strain of the virus before, the initial attack fails and your body sends in reinforcements. Your nose and throat get inflamed and make a lot of mucus. With so much of your energy directed at fighting the cold virus, you're left feeling tired and miserable.</li>
<hr>
</div>
    <br><br>
    <div class="heading"><h5>
        Diagnosis of Cold</h5>
        </div>
<div style="font-size:22px;">  
    <li>
   Your best protection from the common cold and flu is frequent hand washing. Amazingly, about 80% of contagious diseases are transmitted by touch. The simple friction that occurs when you rub skin against skin while using warm water and soap followed by thorough rinsing and drying can get rid of most potentially harmful germs.
    </li>
    <li>
While germs are often transferred to others through household objects -- telephones, doorknobs, toothbrushes, and faucet handles -- the biggest transportation center for germs is your hands. That's why frequent hand washing gets rid of the illness-causing germs and helps to prevent the spread of some diseases -- especially if a family member, friend, or classmate has a cold or flu virus.
    
    </li>
    <br><br>
    <div class="row">
 <div class="col s2;" style="font-size:22px;">
<form  action="medicines" method="get">
    <select name="medi">
    <option value="" disabled selected>Select &nbsp;Medicine</option>

        <option name="Ibuprofen" value="Ibuprofen">Ibuprofen</option>
        
   </select>
     <button class="btn">Go</button>
    
</form>

     </div>
</div>
    
    
   
  
@stop