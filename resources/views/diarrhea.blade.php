@extends('master')
@section('title','diarrhea')
<!--enter css-->
@section('body')
<div class="container">
<br><br>
<h5><b>Diarrhea:</b></h5>
<div class="heading"><br/><h5> Overview:</h5><br/>
</div>
<div class="text" style="font-size:22px;">
Diarrhea, also spelled diarrhoea, is the condition of having at least three loose or liquid bowel movements each day. It often lasts for a few days and can result in dehydration due to fluid loss.</div>
<hr>
    <br>
        <div class="heading"><h5>Causes of Diarrhea:
            </h5></div> 

<div class="text" style="font-size:22px;">
A number of diseases and conditions can cause diarrhea, including
<li>
    Viruses. Viruses that can cause diarrhea include Norwalk virus, cytomegalovirus and viral hepatitis. Rotavirus is a common cause of acute childhood diarrhea.</li>
    <li>
Bacteria and parasites. Contaminated food or water can transmit bacteria and parasites to your body. Parasites such as Giardia lamblia and cryptosporidium can cause diarrhea.
    </li><li>
Common bacterial causes of diarrhea include campylobacter, salmonella, shigella and Escherichia coli. When traveling in developing countries, diarrhea caused by bacteria and parasites is often called traveler's diarrhea. Clostridium difficile infection can occur, especially after a course of antibiotics.
    </li>
    <li>
        Medications. Many medications, such as antibiotics, can cause diarrhea. Antibiotics destroy both good and bad bacteria, which can disturb the natural balance of bacteria in your intestines. Other drugs that cause diarrhea are cancer drugs and antacids with magnesium.</li>
    <li>
        Lactose intolerance. Lactose is a sugar found in milk and other dairy products. People who have difficulty digesting lactose have diarrhea after eating dairy products.</li>
<hr>
</div>
    <br><br>
    <div class="heading"><h5>
        Diagnosis of Diarrhea</h5>
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

        <option name="Loperamide" value="Loperamide">Loperamide</option>
        
   </select>
     <button class="btn">Go</button>
    
</form>

     </div>
</div>
    
    
   
  
@stop