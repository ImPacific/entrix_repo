<?php
		include('../templates/header.php');
?>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '290966731093805',
      xfbml      : true,
      version    : 'v2.1'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<div id="fb-root"></div>
	<section class="main-content-center">
	
		<div class="facebook-notif">
			<!--<ul>-->
				<h2> What is entrix? </h2>
				<p>
				Every year, the society ‘Electrolitz’, a souvenir of SRCOEM electronics department, conducts a 7 days technical workshop named ENTRIX 
				in which the students are given hands on experience of technology which is the need of electronics field.
				A total of around 200 students, including the other college students, participate in this workshop. This year workshop dates are from 22nd 
				Jan to 29th  Jan 2014. In this workshop, we provide everyday Lunch, T-Shirts, Take away kits, DVDs, manuals etc. The purpose of this workshop
				is to give a brief idea of electronics field that helps the students to stand in the technical competitions.
				The workshop comprise of different topics such as BASIC ELECTRONICS, MATLAB, ORCAD, ATMEGA MICROCONTROLLER, and SEMINAR ON ROBOTIC & ADS TOOL.
				</p>
				<p>
				In this workshop Basic Electronic section gives the idea about bread boarding, circuit fabrications and soldering the components. It also 
				includes the applications of transistors, SCR, timer IC, counters and oscillators.
				ORCAD is a PCB designing software and is comprised of Capture CIS, Layout Plus and Gerb tool.
				MATLAB section teaches the simulation of of control system, image processing and involves the general programming of MATLAB.
				MICROCONTROLLER section teaches controlling the hardware through software on ATMEGA 16 kit. It includes its basic architecture, its interfacing
				with LEDs, LCDs, RTC, ADC, SSD, Stepper, keypad, DC motors. This helps the student to improve the technical knowledge as well 
				as the interaction with the seniors.
				The idea of ENTRIX came from the minds of Mr. Ketan Paithankar and Mr. Akshay Kere. 
				The students are provided with an Entrix manual, a DVD, various other components, and a T-Shirt.
				</p>
			
				<li>If you'd like to submit to this year's commiitee, head to <a href="register.php"> submit </a></li>
				<li>Also, If interested join our <a href="https://www.facebook.com/groups/electrolitz/?ref=ts&fref=ts" target="_blank">facebook</a> group. </li>
				<li>Looking for Electrolitz? <a href="http://www.electrolitz.in">Go here!!!</a></li>
			 </ul>	
		</div>
		
		<div class="contents">
			<h2> Contents </h2>
			<ul>
				<li>Basic Electronics</li>
				<li>Matlab</li>
				<li>Embedded Systems</li>
				<li>AVR programming</li>
				<li>Image Processing</li>
				<li>Microprocessor Basics</li>
				<li>Orcad</li>
				<li>VHDL</li>
			</ul>
		</div>
		<div
		class="fb-like"
		data-share="true"
		data-width="450"
		data-show-faces="true">
		</div>
	</section>
	
<?php 
	include('../templates/footer.php');
?>