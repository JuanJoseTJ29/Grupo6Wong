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
        <div class="row justify-content-md-center ">
            <div class="col-4">
                <h1>¿Quienes somos?</h1>
            </div>
        </div>
        <div class="row justify-content-sm-center ">
            <div class="col-8">
                <p>Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. Magni maxime dolorum hic 
                iste sit dicta mollitia vero ab tenetur 
                deserunt, aliquam blanditiis quaerat 
                facere aspernatur iure optio ratione 
                necessitatibus unde?</p>   
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row justify-content-md-center">
            <div class="col-4">
                <h2>Nuestro Equipo</h2>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-4">
                <img src="https://usercontent2.hubstatic.com/13857413_f1024.jpg"class="img-fluid foto" alt="">
                <p>Juan Jose</p>
            </div>
            <div class="col-4">
                <img src="http://pm1.narvii.com/6276/a79625bc6205d9c17b8c55f19459b781ca09b29b_hq.jpg"class="img-fluid foto" alt="">
                <p>Fiorella</p>
            </div>
            <div class="col-4">
                <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Foyster.ignimgs.com%2Fmediawiki%2Fapis.ign.com%2Fpokemon-blue-version%2Fb%2Fb2%2FPsyduck.gif&f=1&nofb=1"class="img-fluid foto" alt="">
                <p>Cristian</p>
            </div>
            <div class="col-4">
                <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fi.ytimg.com%2Fvi%2FBxvzsNPqtlM%2Fhqdefault.jpg&f=1&nofb=1"class="img-fluid foto" alt="">
                <p>Alexis</p>
            </div>
            <div class="col-4">
                <img src="https://scontent.flim12-1.fna.fbcdn.net/v/t1.0-9/11403174_377402935798373_3513080029292796233_n.jpg?_nc_cat=105&ccb=2&_nc_sid=174925&_nc_ohc=ZZImO1ecul0AX-eeIc6&_nc_ht=scontent.flim12-1.fna&oh=0ac2a21d02419e7957ad556a79cb09d3&oe=60320FB6"class="img-fluid foto" alt="">
                <p>Rodrigo</p>
            </div>
            <div class="col-4">
                <img src="https://ugc.kn3.net/i/origin/http://vignette4.wikia.nocookie.net/inciclopedia/images/9/9f/Putin_osos.jpg/revision/latest?cb=20140802061023"class="img-fluid foto" alt="">
                <p>Vladimir</p>
            </div>
            <div class="col-4">
                <img src="https://cdn1.img.sputniknews.com/img/106009/45/1060094574_0:257:1000:798_1000x541_80_0_0_a1cfa9e91c9ae59e6cddd9416b5081e8.jpg"class="img-fluid foto" alt="">
                <p>Andres</p>
            </div>
            <div class="col-4">
                <img src="https://i.ytimg.com/vi/ieVr-jiZ57A/maxresdefault.jpg"class="img-fluid foto" alt="">
                <p>Guiseppi</p>
            </div>
        </div>

    </div>


@endsection 
               

