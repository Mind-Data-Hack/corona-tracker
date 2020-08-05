<!DOCTYPE html>
<html>
<head>
	<title>Corona Tracker</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
.button {
  border-radius: 4px;
  background-color: #117a8b;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 20px;
  width: 100%;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}	
</style>

<body>
    <center><a href="corona_live_updates.php"><button class="button"><span>Corona Live Updates</span></button></a></center>  

    
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img style="margin-top: 20%;" src="images/corona.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">What Is Corona</h1><br>
      <p class="w3-large">Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.

Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.

The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. 

The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).

At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments. WHO will continue to provide updated information as soon as clinical findings become available.
    </div>
  </div>
  </div>

<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Symptoms</h3><br>
  <i class="fa fa-stethoscope w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <h5> Most infected people will develop mild to moderate illness and recover without hospitalization.</h5>
  <h6 style="text-align: left;"><i class="fa fa-angle-double-right"></i>fever</h6>
  <h6 style="text-align: left;"><i class="fa fa-angle-double-right"></i>dry cough.</h6>
  <h6 style="text-align: left;"><i class="fa fa-angle-double-right"></i>tiredness</h6>
  <h6 style="text-align: left;"><i class="fa fa-angle-double-right"></i>aches and pains.</h6>
  <h6 style="text-align: left;"><i class="fa fa-angle-double-right"></i>sore throat.</h6>
  <h6 style="text-align: left;"><i class="fa fa-angle-double-right"></i>diarrhoea.</h6>
  <h6 style="text-align: left;"><i class="fa fa-angle-double-right"></i>conjunctivitis</h6>
  <h6 style="text-align: left;"><i class="fa fa-angle-double-right"></i>headache.</h6>
  <h6 style="text-align: left;"><i class="fa fa-angle-double-right"></i>loss of taste or smell.</h6><br>
  <center><a href="https://www.who.int/health-topics/coronavirus#tab=tab_1"><button class="button"><span>Read More About Symptoms</span></button></a></center> 
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Prevention</h3><br>
  <i class="fa fa-medkit w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  	<h5>To prevent infection and to slow transmission of COVID-19, do the following:</h5>
  	<h6 style="text-align: left;"><i class="fa fa-angle-double-right"></i>Wash your hands regularly with soap and water, or clean them with alcohol-based hand rub.</h6>
  	<h6  style="text-align: left;"><i class="fa fa-angle-double-right"></i>Maintain at least 1 metre distance between you and people coughing or sneezing.</h6>
  	<h6  style="text-align: left;"><i class="fa fa-angle-double-right"></i>Avoid touching your face.</h6>
  	<h6  style="text-align: left;"><i class="fa fa-angle-double-right"></i>Cover your mouth and nose when coughing or sneezing.</h6>
  	<h6 style="text-align: left;"><i class="fa fa-angle-double-right"></i>Stay home if you feel unwell.</h6>
  	<h6 style="text-align: left;"><i class="fa fa-angle-double-right"></i>Refrain from smoking and other activities that weaken the lungs.</h6>
  	<h6 style="text-align: left;"><i class="fa fa-angle-double-right"></i>Practice physical distancing by avoiding unnecessary travel and staying away from large groups of people.</h6>
    <center><a href="https://www.who.int/health-topics/coronavirus#tab=tab_1"><button class="button"><span>Read More About Prevention</span></button></a></center> 
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>How Corona Spread</h3><br>
  <i class="fa fa-globe w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
   <h5>Case Study On How Virus Is Spreading Too Much Fast:</h5>
   <h6><i class="fa fa-angle-double-right"></i>The virus that causes COVID-19 is thought to spread mainly from person to person, mainly through respiratory droplets produced when an infected person coughs, sneezes, or talks. These droplets can land in the mouths or noses of people who are nearby or possibly be inhaled into the lungs. Spread is more likely when people are in close contact with one another (within about 6 feet).
COVID-19 seems to be spreading easily and sustainably in the community (“community spread”) in many affected geographic areas. Community spread means people have been infected with the virus in an area, including some who are not sure how or where they became infected.health department determines community spread based on local conditions..​</h6>
<center><a href="https://www.who.int/health-topics/coronavirus#tab=tab_1"><button class="button"><span>Read More About Prevention</span></button></a></center> 
  </div>
</div>
</div>


</body>

</html>