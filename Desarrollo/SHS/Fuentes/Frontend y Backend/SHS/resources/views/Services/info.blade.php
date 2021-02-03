@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
<style>
    .fondo{
        background-color: #00aa66;
        color: white;
    } 
    h1, h2{
        font-weight: bold;
        font-style: oblique;
        font-family: 'Pacifico', cursive;
        font-size: 40px;
    }
    h2{
        font-size: 30px;
    }
    .foto{
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 50%;
        margin: auto;
        margin-bottom: 20px;
    }

</style>

    <div class="container fondo">
        <div class="row justify-content-md-center text-center">
            <div class="col-4">
                <h1>¿Quienes somos?</h1>
            </div>
        </div>
        <div class="row justify-content-sm-center text-center">
            <div class="col-8">
                <p>Somos un grupo de estudiantes de la Universidad Nacional Mayor de San Marcos dede la facultad de Ingeniería de Sistemas e informática de la escuela de Ingeniería de Software quienes hemos decido desarrollar esta página web para poder ayudar en estos tiempos de pandemia a las micro, pequeñas, medianas empresas y trabajadores independientes a poder ofrecer sus servicios y generarles un mayor rango de clientes. A su vez también buscamos ayudar a que las personas que deseen adquirir un servicio no se expongan al salir en búsqueda de uno, sino que lo averigüen o lo soliciten por medio de nuestra página web. 
                    <br>  Gracias el equipo SERVICE HOME STORE.</p>   
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row justify-content-center text-center">
            <div class="col-4">
                <h2>Nuestro Equipo</h2>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-4">
                <img src="http://pm1.narvii.com/6276/a79625bc6205d9c17b8c55f19459b781ca09b29b_hq.jpg"class="img-fluid foto" alt="">
                <p>Cortez Rosas, Ingrid Fiorella<br>(Desarrollador Frontend - Diseñadora de Software)</p>
            </div>
            <div class="col-4">
                <img src="https://usercontent2.hubstatic.com/13857413_f1024.jpg"class="img-fluid foto" alt="">
                <p>Tirado Julca, Juan Jose<br>(Jefe de proyecto)</p>
            </div>
            <div class="col-4">
                <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fi.ytimg.com%2Fvi%2FBxvzsNPqtlM%2Fhqdefault.jpg&f=1&nofb=1"class="img-fluid foto" alt="">
                <p>Rojas Miñan, Alexis Luis Clemente<br>(Desarrollador Backend - Jefe de Testing)</p>
            </div>

            <div class="col-4">
                <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Foyster.ignimgs.com%2Fmediawiki%2Fapis.ign.com%2Fpokemon-blue-version%2Fb%2Fb2%2FPsyduck.gif&f=1&nofb=1"class="img-fluid foto" alt="">
                <p>Aquino Limache, Cristian<br>(Desarrollador Frontend)</p>
            </div>
 
            <div class="col-4">
                <img src="https://scontent.flim12-1.fna.fbcdn.net/v/t1.0-9/11403174_377402935798373_3513080029292796233_n.jpg?_nc_cat=105&ccb=2&_nc_sid=174925&_nc_ohc=ZZImO1ecul0AX-eeIc6&_nc_ht=scontent.flim12-1.fna&oh=0ac2a21d02419e7957ad556a79cb09d3&oe=60320FB6"class="img-fluid foto" alt="">
                <p>Quinteros Peralta, Rodrigo Ervin<br>(Desarrollador Full Stack)</p>
            </div>
            <div class="col-4">
                <img src="https://ugc.kn3.net/i/origin/http://vignette4.wikia.nocookie.net/inciclopedia/images/9/9f/Putin_osos.jpg/revision/latest?cb=20140802061023"class="img-fluid foto" alt="">
                <p>Alvarado Pardo, Vladimir Frank Felix<br>(Desarrollador Backend)</p>
            </div>
            <div class="col-4">
                <img src="https://www.smashbros.com/assets_v2/img/fighter/yoshi/main.png"class="img-fluid foto" alt="">
                <p>Maita Medina, Andres<br>(Desarrollador Frontend - Analista)</p>
            </div>
            <div class="col-4">
                <img src="https://i.ytimg.com/vi/ieVr-jiZ57A/maxresdefault.jpg"class="img-fluid foto" alt="">
                <p>Alberto Ramos, Harold Giusseppi<br>(Desarrollador Frontend - DBA)</p>
            </div>
        </div>
    </div>
@endsection 
               