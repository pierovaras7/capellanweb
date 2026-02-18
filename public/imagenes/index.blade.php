@extends('web.layouts.app')

@section('contenido')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
    <div class="carousel-inner">
      @foreach ($sliders as $index =>$item)
      @if ($index == 1)
      <div class="carousel-item active ">
       <img src={{ asset('web-capellan/imagenes/banner/'.$item->img_slider) }} class="d-block w-100 " alt="..." style="">
     
     </div>
      @else
      <div class="carousel-item">
       <img src={{ asset('web-capellan/imagenes/banner/'.$item->img_slider) }} class="d-block w-100 " alt="..." style="">
     
     </div>
      @endif
     
     
     @endforeach
    </div>
   <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
    
  </div>





  <div class="row section-programas" style="width:100%; " >

          
    <div class="col-md-5" style="padding: 0px;margin: 0px">
      <div class="content-seccion" >
         <h4 >Programas </h4>

         <p>Tu futuro en Nuestras manos</p>
     
      </div>

   </div>

         
           <div class=" col-md-7  section-prodectos-carreras"  style="padding: 0px;margin: 0px;display: flex;">

              <div class="container-gris">
                 
               <a href="{{ route('programas.diplomados')}}" style="position: relative;">
                <img src="web-capellan/imagenes/img-pagina/carreras6.png"  class="img-section">
                 <div class="contenido-carrera">
                    <h4 style="text-align: center;">Diplomados</h4>
                 </div>
              </a>

                
               
              </div>

              <div class="container-gris">
               
                 <a href="{{ route('programas.especializacion') }}" style="position: relative;">
                <img src="web-capellan/imagenes/productos-img/370x370-img-cursos/Diplomados/diplomados8.png" style="object-fit: cover;object-position: 100% "  class="img-section">
                <div class="contenido-carrera" >
                    <h4 style="text-align: center;">Especialización</h4>
                 </div>
              </a>

              </div>
              <div class="container-gris">
                
                 <a href="{{ route('preparacion') }}" style="position: relative;">
                <img src="web-capellan/imagenes/img-pagina/carreras4.png"  class="img-section">
                <div class="contenido-carrera" >
                    <h4 style="text-align: center;">Preparación</h4>
                 </div>
              </a>
            
              </div>
              <div class="container-gris">
                
                 <a href="" style="position: relative;">
                <img src="web-capellan/imagenes/img-pagina/carreras5.png"  class="img-section">
                <div class="contenido-carrera" >
                    <h4 style="text-align: center;">Actualización</h4>
                 </div>
              </a>
              
              </div>                
           
           </div>
     
     </div>

 <br><br><br><br><br><br><br><br><br>

<div class="section-informacion">
   <div class="container" >

     <div class="contenido-informacion" >
         <div class="row">
               <div class="col-lg-7 col-md-6 col-sm-12 text-informacion-capellan" style="">
                  
                   <h3>Ventajas Competitivas</h3>
                   <br>
                   <p style="font-size: 18px">Aula Virtual las 24 Horas ,E-Mail Educativo y Personal,Videos Interativos,Docentes  Altamente Calificados,Practicas Descargables, Asesoria Educativa Permanente</p>
                   <br>
                   <a href="{{route('institucional')}}">Leer más</a>
               </div>

             <div class="col-lg-5 col-md-6 col-sm-12 " style="display: flex;justify-content: center;"  >
               <img class="contenido-img  " src="web-capellan/imagenes/img-pagina/logo1.png" style="width:350px;height:300px">
             </div>

     </div>
     
     </div>
   
   </div>


</div>

<br>
<br>

 <div class="logo-separacion" >
     <span style="display: flex;flex-direction: row;justify-content: center;">
        
         <i class="fa fa-graduation-cap"></i><h4 style="font-size: 48px;color:  #333;">Especialidades</h4><i class="fa fa-graduation-cap"></i>         
     </span>

</div>
<br>
<br>
<div class="section2-diplomados " style="padding:20px" >
    <div class="section-diplomados-content  owl-carousel owl-theme owl-loaded"  >


       <div >
            <div  class="card card-image  hover-zoom" style="background-image: url(web-capellan/imagenes/productos-img/370x370-img-cursos/Especialidades/especialidad1.png);background-size: cover;background-position:center 0px;">

                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 " >
                    <div>
                        
                      <h3 class="card-title pt-2 text-white text-sombra test " style="margin-bottom:20px"><strong>Curriculo y Evalución de los Aprendizajes</strong></h3>
                      <br>
                      <a class="btn btn-capellan" href="{{ route('especializacion1') }}"><i class="fas fa-clone left"></i> Ver más</a>
                    </div>
                </div>

            </div>
      </div>
       <div>
            <div  class="card card-image  hover-zoom" style="background-image: url(web-capellan/imagenes/productos-img/370x370-img-cursos/Especialidades/especialidad2.png);background-size: cover;background-position: center 0px;">

                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 ">
                    <div>
                        
                      <h3 class="card-title pt-2 text-white text-sombra test " style="margin-bottom:20px"><strong>Gestión y Dirección de Instituciones Educativas</strong></h3>
                      <br>
                      <a class="btn btn-capellan" href="{{ route('especializacion2') }}"><i class="fas fa-clone left"></i> Ver más</a>
                    </div>
                </div>

            </div>
      </div>
      
      <div>
        <div  class="card card-image  hover-zoom" style="background-image: url(web-capellan/imagenes/productos-img/370x370-img-cursos/Especialidades/especialidad6.png);background-size: cover;background-position: center;">

          <!-- Content -->
          <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 ">
              <div style="margin: auto;">
                  
                <h3 class="card-title pt-2 text-white text-sombra test " style="margin-bottom:20px"><strong>Didáctica del idioma Inglés</strong></h3>
                <br>
                <a class="btn btn-capellan" href="{{ route('especializacion6') }}"><i class="fas fa-clone left"></i> Ver más</a>
              </div>
          </div>
        </div>

    </div>
      
    <div>

      <div  class="card card-image  hover-zoom" style="background-image: url(web-capellan/imagenes/productos-img/370x370-img-cursos/Especialidades/especialidad7.png);background-size: cover;background-position: center;">

        <!-- Content -->
        <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 ">
            <div style="margin: auto;">
                
              <h3 class="card-title pt-2 text-white text-sombra test " style="margin-bottom:20px"><strong>Didáctica de la Matemática en Educación Primaria</strong></h3>
              <br>
              <a class="btn btn-capellan" href="{{ route('especializacion7') }}"><i class="fas fa-clone left"></i> Ver más</a>
            </div>
        </div>
      </div>

       </div>


       <div>
          <div  class="card card-image  hover-zoom" style="background-image: url(web-capellan/imagenes/productos-img/370x370-img-cursos/Especialidades/especialidad3.png);background-size: cover;background-position: center;">

              <!-- Content -->
              <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 ">
                  <div>
                      
                    <h3 class="card-title pt-2 text-white text-sombra test " style="margin-bottom:20px"><strong> Diseño y Elaboración de Proyectos</strong></h3>
                    <br>
                    <a class="btn btn-capellan" href="{{ route('especializacion3') }}"><i class="fas fa-clone left"></i> Ver más</a>
                  </div>
              </div>

          </div>
      </div>


      
       <div>
          <div  class="card card-image  hover-zoom" style="background-image: url(web-capellan/imagenes/productos-img/370x370-img-cursos/Especialidades/especialidad4.png);background-size: cover;background-position: center;">

              <!-- Content -->
              <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 ">
                  <div style="margin: auto;">
                      
                    <h3 class="card-title pt-2 text-white text-sombra test " style="margin-bottom:20px"><strong>Educación Inicial</strong></h3>
                    <br>
                    <a class="btn btn-capellan" href="{{ route('especializacion4') }}"><i class="fas fa-clone left"></i> Ver más</a>
                  </div>
              </div>

          </div>
      </div>
      


      <div>
        <div  class="card card-image  hover-zoom" style="background-image: url(web-capellan/imagenes/productos-img/370x370-img-cursos/Especialidades/especialidad5.png);background-size: cover;background-position: center;">

            <!-- Content -->
            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 ">
                <div style="margin: auto;">
                    
                  <h3 class="card-title pt-2 text-white text-sombra test " style="margin-bottom:20px"><strong>Educación física</strong></h3>
                  <br>
                  <a class="btn btn-capellan" href="{{ route('especializacion5') }}"><i class="fas fa-clone left"></i> Ver más</a>
                </div>
            </div>

      </div>
      



        



        
  </div>
      
    </div>
</div>
<br>
<br>
<br>

 <div class="logo-separacion" >
     <span style="display: flex;flex-direction: row;justify-content: center;">
        
         <i class="fa fa-graduation-cap"></i><h4 style="font-size: 48px;color: #333;margin-right: 20px;margin-left: 20px;">Diplomados</h4><i class="fa fa-graduation-cap"></i>         
     </span>

</div>
<br>

<div class="container" style="margin-bottom:120px;width: 80%;margin: auto">
<section class="item-carrera  owl-carousel owl-theme owl-loaded" style="">
    
  <div class="card" style="height: 420px">
    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
      <a href="{{ route('diplomado5') }}"> <img  style="max-width: 100%;height: 235px;object-fit: cover;object-position: 0px -10px" src="web-capellan/imagenes/productos-img/370x370-img-cursos/Diplomados/diplomados7.png" class="img-fluid" /></a>
      <a href="{{ route('diplomado5') }}">
        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
      </a>
    </div>

    <div class="card-body">
      <h5 class="card-title font-weight-bold" style="text-align:center;text-transform: uppercase"><a>Gestión Escolar con Liderazgo Pedagógico</a></h5>
  
      <p class="card-text"  style="text-align: justify">
      
      </p> 
    </div>
     <div class="rounded-bottom mdb-color lighten-3 text-center pt-3 " style="background: #e0751d;color:white">
          <ul class="list-unstyled list-inline font-small" >
            <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1" ></i></li>
            <li class="list-inline-item pr-2" ><a href="#" class="white-text" style="color:white;"><i class="far fa-comments pr-1"></i>12</a></li>
            <li class="list-inline-item pr-2"><a href="#" class="white-text" style="color:white;"><i class="fab fa-facebook-f pr-1">
                </i>21</a></li>
            <li class="list-inline-item"><a href="#" class="white-text" style="color:white;"><i class="fab fa-twitter pr-1"> </i>5</a></li>
          </ul>
      </div>
  </div>

  


  <div class="card" style="height: 420px">
    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
      <a href="{{ route('diplomado3') }}"> <img  style="max-width: 100%;height: 235px;object-fit: cover;object-position: 0px 0px" src="web-capellan/imagenes/productos-img/370x370-img-cursos/Diplomados/diplomados5.png" class="img-fluid" /></a>
      <a href="{{ route('diplomado3') }}">
        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
      </a>
    </div>

    <div class="card-body">
      <h5 class="card-title font-weight-bold" style="text-align:center;text-transform: uppercase"><a>Competencias Digitales</a></h5>
  
      <p class="card-text"  style="text-align: justify">
      
      </p> 
    </div>
     <div class="rounded-bottom mdb-color lighten-3 text-center pt-3 " style="background: #e0751d;color:white">
          <ul class="list-unstyled list-inline font-small" >
            <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1" ></i></li>
            <li class="list-inline-item pr-2" ><a href="#" class="white-text" style="color:white;"><i class="far fa-comments pr-1"></i>12</a></li>
            <li class="list-inline-item pr-2"><a href="#" class="white-text" style="color:white;"><i class="fab fa-facebook-f pr-1">
                </i>21</a></li>
            <li class="list-inline-item"><a href="#" class="white-text" style="color:white;"><i class="fab fa-twitter pr-1"> </i>5</a></li>
          </ul>
      </div>
  </div>




  <div class="card" style="height: 420px">
    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
     <a href="{{ route('diplomado7') }}"> <img  style="max-width: 100%;height: 235px;object-fit: cover;object-position: 0px 0px" src="web-capellan/imagenes/productos-img/370x370-img-cursos/Diplomados/diplomados3.png" class="img-fluid" /></a>
      <a href="{{ route('diplomado7') }}">
        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
      </a>
    </div>

    <div class="card-body">
      <h5 class="card-title font-weight-bold" style="text-align:center;text-transform: uppercase"><a>Acompañamiento Pedagógico</a></h5>
  
      <p class="card-text"  style="text-align: justify">
      
      </p> 
    </div>
     <div class="rounded-bottom mdb-color lighten-3 text-center pt-3 " style="background: #e0751d;color:white">
          <ul class="list-unstyled list-inline font-small" >
            <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1" ></i></li>
            <li class="list-inline-item pr-2" ><a href="#" class="white-text" style="color:white;"><i class="far fa-comments pr-1"></i>12</a></li>
            <li class="list-inline-item pr-2"><a href="#" class="white-text" style="color:white;"><i class="fab fa-facebook-f pr-1">
                </i>21</a></li>
            <li class="list-inline-item"><a href="#" class="white-text" style="color:white;"><i class="fab fa-twitter pr-1"> </i>5</a></li>
          </ul>
      </div>
  </div>

  <div class="card" style="height: 420px"  >
    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
     <a href="{{ route('diplomado1') }}"> <img style="max-width: 100%;height: 235px;object-fit: cover;object-position: 0px -25px" src="web-capellan/imagenes/productos-img/370x370-img-cursos/Diplomados/diplomados2.png" class="img-fluid" /></a>
      <a href="{{ route('diplomado1') }}">
        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
      </a>
    </div>

    <div class="card-body">
      <h5 class="card-title font-weight-bold" style="text-align:center;text-transform: uppercase"><a>Enfoque por Competencias en Educación Básica Regular</a></h5>
  
      <p class="card-text"  style="text-align: justify">
       
      </p> 
    </div>
     <div class="rounded-bottom mdb-color lighten-3 text-center pt-3 " style="background: #e0751d;color:white">
          <ul class="list-unstyled list-inline font-small" >
            <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1" ></i></li>
            <li class="list-inline-item pr-2" ><a href="#" class="white-text" style="color:white;"><i class="far fa-comments pr-1"></i>12</a></li>
            <li class="list-inline-item pr-2"><a href="#" class="white-text" style="color:white;"><i class="fab fa-facebook-f pr-1">
                </i>21</a></li>
            <li class="list-inline-item"><a href="#" class="white-text" style="color:white;"><i class="fab fa-twitter pr-1"> </i>5</a></li>
          </ul>
      </div>
  </div>


  <div class="card"  style="height: 420px" >
    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
      <a href="{{ route('diplomado2') }}"><img  style="max-width: 100%;height: 235px;object-fit: cover;object-position: 0px 0px" src="web-capellan/imagenes/productos-img/370x370-img-cursos/Diplomados/diplomados1.png" class="img-fluid" /></a>
      <a href="{{ route('diplomado2') }}">
        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
      </a>
    </div>

    <div class="card-body">
      <h5 class="card-title font-weight-bold" style="text-align:center;text-transform: uppercase"><a>Angragógia : Formación de Adultos - EBA </a></h5>
  
      <p class="card-text" style="text-align: justify">
      </p> 
    </div>
     <div class="rounded-bottom mdb-color lighten-3 text-center pt-3 " style="background: #e0751d;color:white">
          <ul class="list-unstyled list-inline font-small" >
            <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1" ></i></li>
            <li class="list-inline-item pr-2" ><a href="#" class="white-text" style="color:white;"><i class="far fa-comments pr-1"></i>12</a></li>
            <li class="list-inline-item pr-2"><a href="#" class="white-text" style="color:white;"><i class="fab fa-facebook-f pr-1">
                </i>21</a></li>
            <li class="list-inline-item"><a href="#" class="white-text" style="color:white;"><i class="fab fa-twitter pr-1"> </i>5</a></li>
          </ul>
      </div>
  </div>


  <div class="card"  style="height: 420px" >
    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
      <a href="{{ route('diplomado6') }}"><img  style="max-width: 100%;height: 235px;object-fit: cover;object-position: 0px 0px" src="web-capellan/imagenes/productos-img/370x370-img-cursos/Diplomados/diplomados8.png" class="img-fluid" /></a>
      <a href="{{ route('diplomado6') }}">
        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
      </a>
    </div>

    <div class="card-body">
      <h5 class="card-title font-weight-bold" style="text-align:center;text-transform: uppercase"><a>Investigación Educativa </a></h5>
  
      <p class="card-text" style="text-align: justify">
      </p> 
    </div>
     <div class="rounded-bottom mdb-color lighten-3 text-center pt-3 " style="background: #e0751d;color:white">
          <ul class="list-unstyled list-inline font-small" >
            <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1" ></i></li>
            <li class="list-inline-item pr-2" ><a href="#" class="white-text" style="color:white;"><i class="far fa-comments pr-1"></i>12</a></li>
            <li class="list-inline-item pr-2"><a href="#" class="white-text" style="color:white;"><i class="fab fa-facebook-f pr-1">
                </i>21</a></li>
            <li class="list-inline-item"><a href="#" class="white-text" style="color:white;"><i class="fab fa-twitter pr-1"> </i>5</a></li>
          </ul>
      </div>
  </div>



  <div class="card"  style="height: 420px" >
    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
      <a href="{{ route('diplomado4') }}"><img  style="max-width: 100%;height: 235px;object-fit: cover;object-position: 0px 0px" src="web-capellan/imagenes/productos-img/370x370-img-cursos/Diplomados/diplomados6.png" class="img-fluid" /></a>
      <a href="{{ route('diplomado4') }}">
        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
      </a>
    </div>

    <div class="card-body">
      <h5 class="card-title font-weight-bold" style="text-align:center;text-transform: uppercase"><a>Educación Especial con mención en Audición y Lenguaje</a></h5>
  
      <p class="card-text" style="text-align: justify">
      </p> 
    </div>
     <div class="rounded-bottom mdb-color lighten-3 text-center pt-3 " style="background: #e0751d;color:white">
          <ul class="list-unstyled list-inline font-small" >
            <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1" ></i></li>
            <li class="list-inline-item pr-2" ><a href="#" class="white-text" style="color:white;"><i class="far fa-comments pr-1"></i>12</a></li>
            <li class="list-inline-item pr-2"><a href="#" class="white-text" style="color:white;"><i class="fab fa-facebook-f pr-1">
                </i>21</a></li>
            <li class="list-inline-item"><a href="#" class="white-text" style="color:white;"><i class="fab fa-twitter pr-1"> </i>5</a></li>
          </ul>
      </div>
  </div>



 


  
</section>
</div>


<div style="margin-top: 180px">
<img  src="web-capellan/imagenes/img1.png" style="object-fit: cover;width: 100%;">
</div>

<div class="logo-separacion" style="margin-bottom: 50px;" >
     <span style="display: flex;flex-direction: row;justify-content: center;">
        
         <i class="fa fa-graduation-cap"></i><h4 style="font-size: 48px;color: #333;margin-right: 20px;margin-left: 20px;">Testimonios</h4><i class="fa fa-graduation-cap"></i>         
     </span>

</div>

<div class="testimonios">
       <div class="container-testimonios  owl-carousel owl-theme owl-loaded ">

             <div class="item-testimonios " >
                  <div class="item-imagen-testimonios">
                      <img class="imagen-testimonios" src="web-capellan/imagenes/testimonios/testimonios11.png">
                  </div>
                  <div class="contenido-testimonios">
                          <img src="web-capellan/imagenes/ico-comilla1.svg" class="comilla1-testimonios">
                          <p class="parrafo-testimonios">
                            
                              La Dra Nos cuenta su trayectoria como docente y su experiencia trabajando con Elías Capellán.
                              La docente asímismo nos recuerda que nunca debemos dejar de prepararnos, 
                              para que nosotros cada día podamos ser mejores como profesionales.
                          </p>
                          <div class="contenedor-comillas-testimonios">

                             <img src="web-capellan/imagenes/ico-comilla2.svg" class="comilla2-testimonios">
                             
                          </div>
                         <div class="titulos-testimonios">
                          <h4> Mg.Nélida Orbegoso Valverde</h4>
                          <h5 style="color: #80080b"><em>Especialista en Teología Espiritual</em></h5>
                        
                          <a href="https://www.youtube.com/watch?v=TKRSTjvHW-U" target="blank"><em>ver video</em></a>


                            
                         </div>
                  </div>
             </div>

             <div class="item-testimonios " >
                  <div class="item-imagen-testimonios">
                      <img class="imagen-testimonios" src="web-capellan/imagenes/testimonios/testimonios2.png">
                  </div>
                  <div class="contenido-testimonios">
                          <img src="web-capellan/imagenes/ico-comilla1.svg" class="comilla1-testimonios">
                          <p class="parrafo-testimonios">
                             
                            El Mg, es un empedernido de la pedagogía y cuenta con una amplia trayectoria tanto en la docencia como en la capacitación docente.
                            No duda en enfatizarnos la importancia de la constante actualización académica, para brindar a los estudiantes los conocimientos
                            más recientes del mundo profesional
                          </p>
                          <div class="contenedor-comillas-testimonios">

                             <img src="web-capellan/imagenes/ico-comilla2.svg" class="comilla2-testimonios">
                             
                          </div>
                         <div class="titulos-testimonios">
                        
                            <h4> Mg. Julio Cesar Cueva Torres</h4>
                            <h5 style="color: #80080b"><em>Especialista en Educación Primaria</em></h5>
                            <a href="https://www.youtube.com/watch?v=GNW9ZKqPiyA" target="blank"><em>ver video</em></a>
                            
                         </div>
                  </div>
             </div>

             <div class="item-testimonios " >
                  <div class="item-imagen-testimonios">
                      <img class="imagen-testimonios" src="web-capellan/imagenes/testimonios/testimonios3.png">
                  </div>
                  <div class="contenido-testimonios">
                          <img src="web-capellan/imagenes/ico-comilla1.svg" class="comilla1-testimonios">
                          <p class="parrafo-testimonios">
                             
                          La Dra muestra un total compromiso al señalar la importancia de una educación que se adapte a todos los intereses,
                           necesidades, ritmos y estilos de aprendizaje.
                          </p>
                          <div class="contenedor-comillas-testimonios">

                             <img src="web-capellan/imagenes/ico-comilla2.svg" class="comilla2-testimonios">
                             
                          </div>
                         <div class="titulos-testimonios">
                            <h4> Dra. Lourdes Quevedo Sánchez </h4>
                            <h5 style="color: #80080b"><em>Especialista en Lenguaje de Señas e intérprete oficial de la Asociación de Sordos de La Libertad</em></h5>
                             <a href="https://www.youtube.com/watch?v=Ge5zEGc1s2k&pbjreload=102" target="blank"><em>ver video</em></a>
                            
                            
                         </div>
                  </div>
             </div>

            <div class="item-testimonios " >
              <div class="item-imagen-testimonios">
                  <img class="imagen-testimonios" src="web-capellan/imagenes/testimonios/testimonios4.png">
              </div>
              <div class="contenido-testimonios">
                      <img src="web-capellan/imagenes/ico-comilla1.svg" class="comilla1-testimonios">
                      <p class="parrafo-testimonios">
                         
                        La Dra nos señala la importancia de los principios bajo los que un docente debe actuar con el objetivo de contribuir a la 
                        formación profesional de los estudiantes. De igual manera, 
                        resalta que la calidad educativa de un estudiante no solo se muestra a través de sus títulos, sino también a través de su actuar.
                      </p>
                      <div class="contenedor-comillas-testimonios">

                         <img src="web-capellan/imagenes/ico-comilla2.svg" class="comilla2-testimonios">
                         
                      </div>
                     <div class="titulos-testimonios">
                        <h4>Dra. Sonia Quezada García</h4>
                        <h5 style="color: #80080b"><em> Especialista en Educación </em></h5>
                         <a href="https://www.youtube.com/watch?v=k0mMCyydpig" target="blank"><em>ver video</em></a>
                        
                        
                     </div>
              </div>
           </div>

           <div class="item-testimonios " >
            <div class="item-imagen-testimonios">
                <img class="imagen-testimonios" src="web-capellan/imagenes/testimonios/testimonios5.png">
            </div>
            <div class="contenido-testimonios">
                    <img src="web-capellan/imagenes/ico-comilla1.svg" class="comilla1-testimonios">
                    <p class="parrafo-testimonios">
                       
                      El Mg a través de sus 30 años de trayectoria como docente, 
                      nos deja claro que la educación es el factor más importante para garantizar el desarrollo de nuestra sociedad y de nuestro país.
                    </p>
                    <div class="contenedor-comillas-testimonios">

                       <img src="web-capellan/imagenes/ico-comilla2.svg" class="comilla2-testimonios">
                       
                    </div>
                   <div class="titulos-testimonios">
                      <h4>El Mg. Carlos Larios Miñano</h4>
                      <h5 style="color: #80080b"><em>Especialista en Historia, Geografía y Economía</em></h5>
                       <a href="https://www.youtube.com/watch?v=4FVgPoxrqzc" target="blank"><em>ver video</em></a>
                      
                      
                   </div>
            </div>
       </div>



       <div class="item-testimonios " >
        <div class="item-imagen-testimonios">
            <img class="imagen-testimonios" src="web-capellan/imagenes/testimonios/testimonios6.png">
        </div>
        <div class="contenido-testimonios">
                <img src="web-capellan/imagenes/ico-comilla1.svg" class="comilla1-testimonios">
                <p class="parrafo-testimonios">
                   
                  La Mg cuenta con una gran trayectoria
                  como coordinadora académica en capacitación de proyectos de enseñanza a través de las TICs y en docencia dentro de los diferentes niveles de educación. Asimismo, nos enfatiza que uno como docente tiene la responsabilidad de seguirse preparando, 
                  no solamente por motivos profesionales, sino también para contribuir a la formación integral de sus alumnos.
                </p>
                <div class="contenedor-comillas-testimonios">

                   <img src="web-capellan/imagenes/ico-comilla2.svg" class="comilla2-testimonios">
                   
                </div>
               <div class="titulos-testimonios">
                  <h4> La Mg. Rosani Zavaleta Aguilar</h4>
                  <h5 style="color: #80080b"><em>Especialista en Ciencias de la Educación</em></h5>
                   <a href="https://www.youtube.com/watch?v=eW4FfAaFkuQ" target="blank"><em>ver video</em></a>
                  
                  
               </div>
              </div>
        </div>


        <div class="item-testimonios " >
          <div class="item-imagen-testimonios">
              <img class="imagen-testimonios" src="web-capellan/imagenes/testimonios/testimonios7.png">
          </div>
          <div class="contenido-testimonios">
                  <img src="web-capellan/imagenes/ico-comilla1.svg" class="comilla1-testimonios">
                  <p class="parrafo-testimonios">
                     
                     Especialista en Docencia e Investigación, nos resalta la importancia de
                     mejorar nuestras competencias, habilidades y prácticas pedagógicas,
                     para no quedarnos atrás debido a la constante actualización de conocimientos en el mundo profesional.
                  </p>
                  <div class="contenedor-comillas-testimonios">
  
                     <img src="web-capellan/imagenes/ico-comilla2.svg" class="comilla2-testimonios">
                     
                  </div>
                 <div class="titulos-testimonios">
                    <h4> El Dr. Nolberto Leyva Aguilar </h4>
                    <h5 style="color: #80080b"><em>Especialista en Lenguaje de Señas e intérprete oficial de la Asociación de Sordos de La Libertad</em></h5>
                     <a href="https://www.youtube.com/watch?v=xEqVNk9_VqU" target="blank"><em>ver video</em></a>
                    
                    
                 </div>
                </div>
          </div>


          
        <div class="item-testimonios " >
          <div class="item-imagen-testimonios">
              <img class="imagen-testimonios" src="web-capellan/imagenes/testimonios/testimonios8.png">
          </div>
          <div class="contenido-testimonios">
                  <img src="web-capellan/imagenes/ico-comilla1.svg" class="comilla1-testimonios">
                  <p class="parrafo-testimonios">
                     
                    La Mg  destaca la importancia de no dejar lo aprendido en las aulas como algo en el momento,
                     sino aprender a cómo llevarlo y aplicarlo de la mejor manera en la vida cotidiana.
                  </p>
                  <div class="contenedor-comillas-testimonios">
  
                     <img src="web-capellan/imagenes/ico-comilla2.svg" class="comilla2-testimonios">
                     
                  </div>
                 <div class="titulos-testimonios">
                    <h4> La Mg. Emperatriz Benites Villegas </h4>
                    <h5 style="color: #80080b"><em>Psicóloga y como Docente</em></h5>
                     <a href="https://www.youtube.com/watch?v=oyyKYDUQkzM" target="blank"><em>ver video</em></a>
                    
                    
                 </div>
                </div>
          </div>
        
          <div class="item-testimonios " >
            <div class="item-imagen-testimonios">
                <img class="imagen-testimonios" src="web-capellan/imagenes/testimonios/testimonios9.png">
            </div>
            <div class="contenido-testimonios">
                    <img src="web-capellan/imagenes/ico-comilla1.svg" class="comilla1-testimonios">
                    <p class="parrafo-testimonios">
                       
                      La Dra cuenta con una amplia trayectoria de más de 30 años en el rubro de la educación. De este modo, nos precisa que es importante que un docente
                       sepa transmitir las ganas de superación a sus estudiantes para motivarlos a conseguir sus objetivos.
                    </p>
                    <div class="contenedor-comillas-testimonios">
    
                       <img src="web-capellan/imagenes/ico-comilla2.svg" class="comilla2-testimonios">
                       
                    </div>
                   <div class="titulos-testimonios">
                      <h4> La Dra. Teresita Merino Salazar</h4>
                      <h5 style="color: #80080b"><em>Especialista en docencia e investigación</em></h5>
                       <a href="https://www.youtube.com/watch?v=9Hl2D08y1j0" target="blank"><em>ver video</em></a>
                      
                      
                   </div>
                  </div>
            </div>


            <div class="item-testimonios " >
              <div class="item-imagen-testimonios">
                  <img class="imagen-testimonios" src="web-capellan/imagenes/testimonios/testimonios10.png">
              </div>
              <div class="contenido-testimonios">
                      <img src="web-capellan/imagenes/ico-comilla1.svg" class="comilla1-testimonios">
                      <p class="parrafo-testimonios">
                         
                        El Dr  es hijo de docentes, quienes le han transmitido la vocación 
                        por esta profesión y la importancia del afecto y el cariño con el que se debe impartir la enseñanza a los estudiantes.
                      </p>
                      <div class="contenedor-comillas-testimonios">
      
                         <img src="web-capellan/imagenes/ico-comilla2.svg" class="comilla2-testimonios">
                         
                      </div>
                     <div class="titulos-testimonios">
                        <h4>El Dr. Emilio Soriano Paredes</h4>
                        <h5 style="color: #80080b"><em>Especialista en Ciencias de la Educación</em></h5>
                         <a href="https://www.youtube.com/watch?v=CZf-3-KBWtQ" target="blank"><em>ver video</em></a>
                        
                        
                     </div>
                    </div>
              </div>



       </div>
    </div>
  


  
<br>
<br>
     <div class="logo-separacion" style="margin-top: 100px;" >
     <span style="display: flex;flex-direction: row;justify-content: center;">
        
         <i class="fa fa-graduation-cap"></i><h4 style="font-size: 48px;color: #333;margin-right: 20px;margin-left: 20px;">Noticias</h4><i class="fa fa-graduation-cap"></i>         
     </span>
  </div>

 <div class="container">
     <section  class=" noti noticias owl-carousel owl-theme owl-loaded ">
               <!-- Card Wider -->

               @foreach ($publicaciones as $item)
               <div class="card card-cascade wider" style="height: 450px">

                <!-- Card image --> 
                <div class="view view-cascade overlay">
                  <img class="card-img-top" src="{{ asset('/web-capellan/imagenes/noticia/'.$item->img_portada) }}"  alt="Card image cap">
                  <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
        
                <!-- Card content -->
                  <div class="card-body card-body-cascade text-center ">
                  <em style="color:#80080b" > admin | {{ $item->fecha }}</em>
                  <br><br>
                 
                  <!-- Title -->
                  <h5 class="card-title" style="width: 100%;font-family: 'Lexend Deca', sans-serif">{{ $item->titulo }}</h5>
                
                </div>
        
                <!-- Card footer -->
                <div class="card-footer text-muted text-center noticia-footer" style="background: #80080b;text-align: center;margin-top: 100px;">
                    <a class="btn-noticias" type="button" href="{{route('detalle.publicacion', $item->id)}}" class="btn-floating btn-small btn-fb" style="color:white !important;font-weight: 700;letter-spacing: 1px;font-size: 18px;font-family: 'Lexend Deca', sans-serif">Leer más</a>
                 
                </div>
        
              </div>
               
               @endforeach
 
      <!-- Card Wider -->




    
<!-- Card Regular -->
  </section>
 </div>
<br>
<br>
<br>
<br>
<section class="bg-theme-color-2" >
        <div class="container" style="padding:20px" >
          <div class="row ">
          
              <div class="col-md-10">
                <h3 class="text-white font-weight-600 mt-1"> Registrate y accede a nuestro contenido y publicación más reciente!</h3>
              </div>
              <div class="col-md-2"> 
                <a href="{{ route('inscripcion') }}" class="btn btn-flat btn-theme-colored btn-lg " style="color:white" href="#"> Registrarse <i class="fa fa-angle-double-right font-16 ml-10" style="margin-left: ;" aria-hidden="true"></i></a>  
              </div>
            
          </div>
        
          
        </div>
</section>




@endsection
@section('scripts')


@endsection