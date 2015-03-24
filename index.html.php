<!DOCTYPE html> 
<html lang="en">
<head>
		<title>Ráðstefna</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="style.css" type="text/css" />
    
</head>
<body>

<?php
      include "dbcon.php";
      
      include "loadVidburdur.php"
   ?>



	<form action="pontun1.php" method="post">
		 <h2>Upplýsingar um notandann</h2>

         <!-- create four text boxes for user input -->
         <div><label>Nafnið:</label> 
            <input type = "text" name = "nafn"></div>
         
         <div><label>Netfang:</label>
            <input type = "text" name = "email"></div>
         <div><label>Símanúmer:</label>
            <input type = "text" name = "simi"></div>

        

         <!--Hérna er verið að búa til checkbox og name="alegg[]" sem þýðir að þetta er array 
         notum array því við erum að velja um fleira en eitt álegg valueið sem fer á milli er 
         skinka - ananas - pepperoni - aukaostur-->
         <fieldset>
            <legend>Hvað er í boði?</legend>
            <?php foreach ($vidburdur as $key) :?>
               <div>
               <input type="checkbox" name="vidburdur[]" value="<?php echo $key['id']; ?>"
               >
               <?php
               echo($key['id']);
               echo " ";
               echo($key['nafn']);
               echo " ";
               echo($key['dagur']);
               echo " ";
               echo ($key['timi']);
               ?>
          </label>
          </div>
          <?php endforeach;?>
           </fieldset>


         <!-- Búum héra til hnappinn -->
         <p><input type = "submit" name = "submit" value = "Skrá"></p>
	</form>


<ul class="acc" id="acc">
  <li>
    
        <ul class="acc" id="nested">
          <li>
            <h3>1 Kynning Föstudagur 9:00</h3>
            <div class="acc-section">
              <div class="acc-content">
                Kynning um hvað það verður farið yfir á ráðstefnunni
              </div>
            </div>
          </li>
          <li>
            <h3> 2 Tölvur Föstudagur 15:00</h3>
            <div class="acc-section">
              <div class="acc-content">
                Talað um nýjar tölvur og forrit
              </div>
            </div>
          </li>
          <li>
            <h3>3 Bílar Föstudagur 18:00</h3>
            <div class="acc-section">
              <div class="acc-content">
                Talað um tölvukerfið í nýjum bílnum
              </div>
            </div>
          </li>
          <li>
            <h3>4 Kynning Laugardagur 9:00</h3>
            <div class="acc-section">
              <div class="acc-content">
                Kynning um hvað verður farið yfir á ráðstefnunni um daginn
              </div>
            </div>
          </li>
          <li>
            <h3> 5 Rafbílar Laugardagur 18:00</h3>
            <div class="acc-section">
              <div class="acc-content">
                talað um tölvukerfi í rafbílum, hvernig það virkar allt
              </div>
            </div>
          </li>
          <li>
            <h3>6 Símar Laugardagur 21:00</h3>
            <div class="acc-section">
              <div class="acc-content">
                Kynnt nýja síma.
              </div>
            </div>
          </li>
        
  </li>
</ul>
<script type="text/javascript" src="script.js"></script>
</body>
</html>