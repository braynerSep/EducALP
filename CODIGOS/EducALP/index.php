
 <link rel="stylesheet" href="css/estilos4.css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
<style>
 

.our-team {
  padding: 30px 0 40px;
  margin-bottom: 30px;
  background-color: #f7f5ec;
  text-align: center;
  overflow: hidden;
  position: relative;
    top: 40px;
}

.our-team .picture {
  display: inline-block;
  height: 130px;
  width: 130px;
  margin-bottom: 50px;
  z-index: 1;
  position: relative;
}

.our-team .picture::before {
  content: "";
  width: 100%;
  height: 0;
  border-radius: 50%;
  background-color: #1369ce;
  position: absolute;
  bottom: 135%;
  right: 0;
  left: 0;
  opacity: 0.9;
  transform: scale(3);
  transition: all 0.3s linear 0s;
}

.our-team:hover .picture::before {
  height: 100%;
}

.our-team .picture::after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background-color: #1369ce;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
}

.our-team .picture img {
  width: 100%;
  height: auto;
  border-radius: 50%;
  transform: scale(1);
  transition: all 0.9s ease 0s;
}

.our-team:hover .picture img {
  box-shadow: 0 0 0 14px #f7f5ec;
  transform: scale(0.7);
}

.our-team .title {
  display: block;
  font-size: 15px;
  color: #4e5052;
  text-transform: capitalize;
}

.our-team .social {
  width: 100%;
  padding: 0;
  margin: 0;
  background-color: #1369ce;
  position: absolute;
  bottom: -100px;
  left: 0;
  transition: all 0.5s ease 0s;
}

.our-team:hover .social {
  bottom: 0;
}

.our-team .social li {
  display: inline-block;
}

.our-team .social li a {
  display: block;
  padding: 10px;
  font-size: 17px;
  color: white;
  transition: all 0.3s ease 0s;
  text-decoration: none;
}

.our-team .social li a:hover {
  color: #1369ce;
  background-color: #f7f5ec;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
	overflow: hidden;
	background-color: #26B1D0;
	
}

li {
	float: right;

}

li a {
	display: block;
	color: white;
	text-align: center;
	padding: 50px 30px;
	text-decoration: none;

	

}

li a:hover {
	background-color: white;
}

     body {
                background: #26B1D0;
                font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
                font-size: 14px;
                color: #000;
                background: #404449;
                margin: 50px;
                padding: 0;
                width: 100%;
                height: 50%;
         margin: auto
         
         
         
      

              }
              
            
              a {
                color: white;
              }
    .how-section1{
    margin-top:-15%;
    padding: 10%;
}
.how-section1 h4{
    color: #ffa500;
    font-weight: bold;
    font-size: 30px;
}
.how-section1 .subheading{
    color: #3931af;
    font-size: 20px;
}
.how-section1 .row
{
    margin-top: 10%;
}
.how-img 
{
    text-align: center;
}
.how-img img{
    width: 40%;
}
   
   /*HYPER LINK*/
a:hover{
	
}
a, a:focus , a:hover{ 
  text-decoration: none;
  color: inherit;
}
 a:hover, .btn{
	outline:none!important;
}

/*ROUNDED CORNER*/
*{
  -webkit-border-radius: 0 !important;
     -moz-border-radius: 0 !important;
          border-radius: 0 !important;
}
/*CATEGORIES BADGE*/
.badge {
	font-weight: 600;
	font-size: 13px;
	color: white;
	background-color: #289dcc;
}
/*FEATURED*/
.mg-2, .mg-4{
	margin-left:-20px;
}
.linkfeat{
	background: rgba(76,76,76,0);
	background: -moz-linear-gradient(top, rgba(76,76,76,0) 0%, rgba(48,48,48,0) 49%, rgba(19,19,19,1) 100%);
	background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(76,76,76,0)), color-stop(49%, rgba(48,48,48,0)), color-stop(100%, rgba(19,19,19,1)));
	background: -webkit-linear-gradient(top, rgba(76,76,76,0) 0%, rgba(48,48,48,0) 49%, rgba(19,19,19,1) 100%);
	background: -o-linear-gradient(top, rgba(76,76,76,0) 0%, rgba(48,48,48,0) 49%, rgba(19,19,19,1) 100%);
	background: -ms-linear-gradient(top, rgba(76,76,76,0) 0%, rgba(48,48,48,0) 49%, rgba(19,19,19,1) 100%);
	background: linear-gradient(to bottom, rgba(76,76,76,0) 0%, rgba(48,48,48,0) 49%, rgba(19,19,19,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4c4c4c', endColorstr='#131313', GradientType=0 );
}
        
    }
</style>
    


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<body background="https://png.pngtree.com/thumb_back/fw800/back_pic/04/15/68/315823008ec140b.JPG">

<ul>

    <img src="img/log.png" width="220px" height="120px" >


  <li><a href="registro.php">Registrarse</a></li>
  <li><a href="iniciosesion.php">Ingresar</a></li>
    
    
  
</ul>

        
        
    
    
    </ul>
    <!--Carousel Wrapper-->
  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
<h3 class="text-center"> </h3>
<hr>
<div class="row">
	<div class="col-sm-12 col-md-6 col-lg-6  py-0 pl-3 pr-1 featcard">
	   <div id="featured" class="carousel slide carousel-fade" data-ride="carousel">
 		 <div class="carousel-inner">
<div class="carousel-item active">			  <div class="card bg-dark text-white">
		        <img class="card-img img-fluid" src="img/ni%C3%B1o.jpg" alt="">
		        <div class="card-img-overlay d-flex linkfeat">
		          <a href="http://makro.id/review-gsp-amerika-ingin-perdagangan-saling-menguntungkan" class="align-self-end">
		        	<span class="badge">Videojuegos</span> 
		            <h4 class="card-title">Los videojuegos aumentan la capacidad intelectual de los jovenes</h4>
		            <p class="textfeat" style="display: none;">Estudios demuestran que muchos de los jovenes que se pasan
                        jugando videojuegos en sus cuartos son mas propensos a tomar buenas decisiones
                        fuente: Miami me lo confirm{o}

Menurut Donovan,</p>
		          </a>
		        </div>
		      </div>
	  		</div>
	  	<div class="carousel-item">			  <div class="card bg-dark text-white">
		        <img class="card-img img-fluid" src="img/ni%C3%B1o.jpg" alt="">
		        <div class="card-img-overlay d-flex linkfeat">
		          <a href="http://makro.id/dpr-setujui-penambahan-anggaran-bp-batam-rp565-miliar" class="align-self-end">
		        	<span class="badge">Economia</span> 
		            <h4 class="card-title">Como memorizar de una manera facil </h4>
		            <p class="textfeat" style="display: none;">Estudios demuestran que muchos de los jovenes que se pasan
                        jugando videojuegos en sus cuartos son mas propensos a tomar buenas decisiones
                        fuente: Miami me lo confirm{o}

Anggota Komisi</p>
		          </a>
		        </div>
		      </div>
	  		</div>
	  	<div class="carousel-item">			  <div class="card bg-dark text-white">
		        <img class="card-img img-fluid" src="img/red.jpg" alt="">
		        <div class="card-img-overlay d-flex linkfeat">
		          <a href="http://makro.id/btn-targetkan-seribu-nasabah-valas-di-batam" class="align-self-end">
		        	<span class="badge">Educacion</span> 
		            <h4 class="card-title">Noricia Anual</h4>
		            <p class="textfeat" style="display: none;">Estudios demuestran que muchos de los jovenes que se pasan
                        jugando videojuegos en sus cuartos son mas propensos a tomar buenas decisiones
                        fuente: Miami me lo confirm{o}</p>
		          </a>
		        </div>
		      </div>
	  		</div>
	  	<div class="carousel-item">			  <div class="card bg-dark text-white">
		        <img class="card-img img-fluid" src="img/red.jpg" alt="">
		        <div class="card-img-overlay d-flex linkfeat">
		          <a href="http://makro.id/sistem-oss-resmi-diluncurkan" class="align-self-end">
		        	<span class="badge">Industria</span> 
		            <h4 class="card-title">La industria Tigonoby es la mejor</h4>
		            <p class="textfeat" style="display: none;">makro.id - Menteri Koordinator Bidang Perekonomian Darmin Nasution bersama dengan para menteri dan kepala lembaga terkait meresmikan penerapan Sistem Online Single Submission (OSS). 

Layanan Perizinan Berusaha Terintegrasi Secara Elektronik (PBTSE), yang</p>
		          </a>
		        </div>
		      </div>
	  		</div>
	  	<div class="carousel-item">			  <div class="card bg-dark text-white">
		        <img class="card-img img-fluid" src="img/red.jpg" alt="">
		        <div class="card-img-overlay d-flex linkfeat">
		          <a href="http://makro.id/grab-gandeng-samsung-telkomsel-dan-erafone" class="align-self-end">
		        	<span class="badge">Sociedad</span> 
		            <h4 class="card-title">Grab Gandeng Samsung, Telkomsel, dan Erafone</h4>
		            <p class="textfeat" style="display: none;">:: Luncurkan Program Ponsel Cerdas untuk Pengemudi

Batam - Grab menjalin kemitraan strategis dengan tiga perusahaan terkemuka di Indonesia yaitu Telkomsel, Samsung, dan Erafone terkait program kepemilikan ponsel cerdas khusus untuk</p>
		          </a>
		        </div>
		      </div>
	  		</div>
	  	<div class="carousel-item">			  <div class="card bg-dark text-white">
		        <img class="card-img img-fluid" src="img/edu.jpg" alt="">
		        <div class="card-img-overlay d-flex linkfeat">
		          <a href="http://makro.id/paket-kebijakan-ekonomi-mempermudah-izin-investasi" class="align-self-end">
		        	<span class="badge">Finansial</span> 
		            <h4 class="card-title">Paket Kebijakan Ekonomi Mempermudah Izin Investasi</h4>
		            <p class="textfeat" style="display: none;">makro.id– Paket kebijakan ekonomi dinilai dapat memberikan kemudahan dalam pengurusan perizinan berinvestasi dan memberikan efek yang cukup signifikan kepada investor.

Ketua Umum Himpunan Kawasan Industri (HKI) Sanny Iskandar menyatakan saat ini</p>
		          </a>
		        </div>
		      </div>
	  		</div>
	  		  	</div>
	  </div>
	</div>
	<div class="col-6 py-0 px-1 d-none d-lg-block">
		<div class="row">
			<div class="col-6 pb-2 mg-1	">
				<div class="card bg-dark text-white">
		        <img class="card-img img-fluid" src="img/edu.jpg" alt="">
		        <div class="card-img-overlay d-flex">
		          <a href="http://makro.id/bi-atur-standarisasi-qr-code" class="align-self-end">
		        	<span class="badge">Sociedad</span> 
		            <h6 class="card-title">Vivimos en una sociedad</h6>
		          </a>
		        </div>
		      	</div>
			</div>
						<div class="col-6 pb-2 mg-2	">
				<div class="card bg-dark text-white">
		        <img class="card-img img-fluid" src="img/red.jpg" alt="">
		        <div class="card-img-overlay d-flex">
		          <a href="http://makro.id/ptsp-bp-batam-masuk-10-terbaik-di-indonesia" class="align-self-end">
		        	<span class="badge">Educacion</span> 
		            <h6 class="card-title">Aprende de una manera mas rapida</h6>
		          </a>
		        </div>
		      	</div>
			</div>
						<div class="col-6 pb-2 mg-3	">
				<div class="card bg-dark text-white">
		        <img class="card-img img-fluid" src="img/shop.jpg" alt="">
		        <div class="card-img-overlay d-flex">
		          <a href="http://makro.id/review-gsp-amerika-ingin-perdagangan-saling-menguntungkan" class="align-self-end">
		        	<span class="badge">Tecnologia</span> 
		            <h6 class="card-title">La gran empresa Tigonoby crece en los mercados financieros</h6>
		          </a>
		        </div>
		      	</div>
			</div>
						<div class="col-6 pb-2 mg-4	">
				<div class="card bg-dark text-white">
		        <img class="card-img img-fluid" src="img/sociall.jpg" alt="">
		        <div class="card-img-overlay d-flex">
		          <a href="http://makro.id/dpr-setujui-penambahan-anggaran-bp-batam-rp565-miliar" class="align-self-end">
		        	<span class="badge">Llamado</span> 
		            <h6 class="card-title">Proxima semana entrega de notas</h6>
		          </a>
		        </div>
		      	</div>
			</div>
					</div>
	</div>
</div>
</h5>
</div>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
  <div class="row">
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="img/diccionario.png">
        </div>
        <div class="team-content">
          <h3 class="name">Plan de Estudio</h3>
          <h4 class="title">Iniciar un plan</h4>
        </div>
        <ul class="social">
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
        </ul>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="img/cerebro.png">
        </div>
        <div class="team-content">
          <h3 class="name">Potencia tu Cerebro</h3>
          <h4 class="title">Prueba tus conocimientos</h4>
        </div>
        <ul class="social">
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
        </ul>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="img/amigos.png">
        </div>
        <div class="team-content">
          <h3 class="name">Amigos</h3>
          <h4 class="title">Encuentra a tus amigos</h4>
        </div>
        <ul class="social">
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
        </ul>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="img/ganador.png">
        </div>
        <div class="team-content">
          <h3 class="name">Estrellas</h3>
          <h4 class="title">Mejores Usuarios de la Red</h4>
        </div>
        <ul class="social">
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
        </ul>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="img/bombilla.png">
        </div>
        <div class="team-content">
          <h3 class="name">Lluvia Victoriosa</h3>
          <h4 class="title">Comparte y participa en lluvia de Ideas</h4>
        </div>
        <ul class="social">
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
        </ul>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="img/portatil.png">
        </div>
        <div class="team-content">
          <h3 class="name">Misiones</h3>
          <h4 class="title">¡Participa en los retos para obtener beneficios!</h4>
        </div>
        <ul class="social">
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
        </ul>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="img/sobre.png">
        </div>
        <div class="team-content">
          <h3 class="name">Mensaje </h3>
          <h4 class="title">Informanos un problema o mandanos tus  sugrencias</h4>
        </div>
        <ul class="social">
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
        </ul>
      </div>
        
    </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="img/busqueda.png">
        </div>
        <div class="team-content">
          <h3 class="name">Soporte</h3>
          <h4 class="title">Acerca de</h4>
        </div>
        <ul class="social">
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!-- NADA

<div class="how-section1">
                    <div class="row">
                        <div class="col-md-6 how-img">
                            <img src="https://image.ibb.co/dDW27U/Work_Section2_freelance_img1.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Find rewarding projects</h4>
                                        <h4 class="subheading">GetLance is a great place to find more clients, and to run and grow your own freelance business.</h4>
                        <p class="text-muted">Freedom to work on ideal projects. On GetLance, you run your own business and choose your own clients and projects. Just complete your profile and we’ll highlight ideal jobs. Also search projects, and respond to client invitations.
                                            Wide variety and high pay. Clients are now posting jobs in hundreds of skill categories, paying top price for great work.
                                            More and more success. The greater the success you have on projects, the more likely you are to get hired by clients that use GetLance.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Get hired quickly</h4>
                                        <h4 class="subheading">GetLance makes it easy to connect with clients and begin doing great work.</h4>
                                        <p class="text-muted">Streamlined hiring. GetLance’s sophisticated algorithms highlight projects you’re a great fit for.
                                            Top Rated and Rising Talent programs. Enjoy higher visibility with the added status of prestigious programs.
                                            Do substantial work with top clients. GetLance pricing encourages freelancers to use GetLance for repeat relationships with their clients.</p>
                        </div>
                        <div class="col-md-6 how-img">
                            <img src="https://image.ibb.co/cHgKnU/Work_Section2_freelance_img2.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 how-img">
                             <img src="https://image.ibb.co/ctSLu9/Work_Section2_freelance_img3.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Work efficiently, effectively.</h4>
                                        <h4 class="subheading">With GetLance, you have the freedom and flexibility to control when, where, and how you work. Each project includes an online workspace shared by you and your client, allowing you to:</h4>
                                        <p class="text-muted">Send and receive files. Deliver digital assets in a secure environment.
                                            Share feedback in real time. Use GetLance Messages to communicate via text, chat, or video.
                                            Use our mobile app. Many features can be accessed on your mobile phone when on the go.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Get paid on time</h4>
                                        <h4 class="subheading">All projects include GetLance Payment Protection — helping ensure that you get paid for all work successfully completed through the freelancing website.</h4>
                                        <p class="text-muted">All invoices and payments happen through GetLance. Count on a simple and streamlined process.
                                            Hourly and fixed-price projects. For hourly work, submit timesheets through GetLance. For fixed-price jobs, set milestones and funds are released via GetLance escrow features.
                                            Multiple payment options. Choose a payment method that works best for you, from direct deposit or PayPal to wire transfer and more.</p>
                        </div>
                        <div class="col-md-6 how-img">
                            <img src="https://image.ibb.co/gQ9iE9/Work_Section2_freelance_img4.png" class="rounded-circle img-fluid" alt=""/>
                        </div>
                    </div>
                </div>
    </body>

    -->
