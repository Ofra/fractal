<?php
	include 'header.php';
?>
	<section id="nosotros0">
		
		<section id="nosotros2">
			<h1>EQUIPO</h1>
			<section class="equip">
				<section class="accordion1">
				    <article>
						<div class="titulo-coach">
				     		<h3>PARTNER DIRECTOR</h3>
				     		<div class="triangulo7"></div>
				     	</div>
				      <div class="block" id="block1">
				        <img>
				        	
				        </img>
				        <h4>Eréndira Nava</h4><br />
				        <p id="tag0">Partner Director</p><br />
				        <p id="tag1">Móvil: 55 2713 7767</p><br />
				        <p id="tag2">erendira.nava@fractalht.com</p><br />
				        <a href="#"class="icon-profile"><label>VER CURRICULUM</label></a>
				        <div class="triangulo2"></div>
				      </div>
				    </article>
			    </section>
			</section>



			<section class="equip">
			<section class="accordion">
			    <article>
					<div class="titulo-coach">
			     		<h3>COACHER</h3>
			     		<div class="triangulo1"></div>
			     	</div>
			      <div class="block" id="block1">
			        <img>
			        	
			        </img>
			        <h4>Eréndira Nava</h4><br />
			        <p id="tag0">Partner Director</p><br />
			        <p id="tag1">Móvil: 55 2713 7767</p><br />
			        <p id="tag2">erendira.nava@fractalht.com</p><br />
			        <a href="#"class="icon-profile"><label>VER CURRICULUM</label></a>
			        <div class="triangulo2"></div>
			      </div>
			    </article>
			   

			   <article>
					<div class="titulo-coach">
			     		<h3>COACHER</h3>
			     		<div class="triangulo1"></div>
			     	</div>
			      <div class="block" >
			        <img>
			        	
			        </img>
			        <h4>Name Coacher</h4><br />
			        <p id="tag0">Coacher</p><br />
			        <p id="tag1">Móvil: ## #### ####</p><br />
			        <p id="tag2">mail_coacher@fractalht.com</p><br />
			        <a href="#"class="icon-profile"><label>VER CURRICULUM</label></a>
			        <div class="triangulo2"></div>
			      </div>
			    </article>

			    <article>
					<div class="titulo-coach">
			     		<h3>COACHER</h3>
			     		<div class="triangulo1"></div>
			     	</div>
			      <div class="block">
			        <img>
			        	
			        </img>
			        <h4>Name Coacher</h4><br />
			        <p id="tag0">Coacher</p><br />
			        <p id="tag1">Móvil: ## #### ####</p><br />
			        <p id="tag2">mail_coacher@fractalht.com</p><br />
			        <a href="#"class="icon-profile"><label>VER CURRICULUM</label></a>
			        <div class="triangulo2"></div>
			      </div>
			    </article>

			    <article>
					<div class="titulo-coach">
			     		<h3>COACHER</h3>
			     		<div class="triangulo1"></div>
			     	</div>
			      <div class="block">
			        <img>
			        	
			        </img>
			        <h4>Name Coacher</h4><br />
			        <p id="tag0">Coacher</p><br />
			        <p id="tag1">Móvil: ## #### ####</p><br />
			        <p id="tag2">mail_coacher@fractalht.com</p><br />
			        <a href="#"class="icon-profile"><label>VER CURRICULUM</label></a>
			        <div class="triangulo2"></div>
			      </div>
			    </article>

				<article>
					<div class="titulo-coach">
			     		<h3>COACHER</h3>
			     		<div class="triangulo1"></div>
			     	</div>
			      <div class="block">
			        <img>
			        	
			        </img>
			        <h4>Name Coacher</h4><br />
			        <p id="tag0">Coacher</p><br />
			        <p id="tag1">Móvil: ## #### ####</p><br />
			        <p id="tag2">mail_coacher@fractalht.com</p><br />
			        <a href="#"class="icon-profile"><label>VER CURRICULUM</label></a>
			        <div class="triangulo2"></div>
			      </div>
			    </article>
			    
			   
			  </section>
			
			</section>

		</section>
	</section>
<?php
	include 'footer.php';	
?>	
<script>
  
  $(function(){
   $('.block').hide();
   $('#block1').slideDown();
  	var hijo_block = $('#block1').siblings().children('.triangulo1');
	$(hijo_block).css('border-bottom','20px solid #e3e3e3');  	

   $('.accordion .titulo-coach').on('click',function(){
     if($(this).next().is(':visible')){
       $(this).next().slideUp();
       var hijo = $(this).children(".triangulo1");
       $(hijo).css('border-bottom','20px solid white');
       $('.triangulo1').css('border-bottom','20px solid white');
     }	
     if($(this).next().is(':hidden')){
       $('.accordion .titulo-coach').next().slideUp();
       $(this).next().slideDown();
       var hijo = $(this).children(".triangulo1");
        $('.triangulo1').css('border-bottom','20px solid white');
       $(hijo).css('border-bottom','20px solid #e3e3e3');
    }
   });
 });

</script>

