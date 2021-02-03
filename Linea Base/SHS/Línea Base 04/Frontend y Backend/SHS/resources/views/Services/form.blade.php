<<<<<<< HEAD
<div class="container">
<div class="form-group">

<label for="titulo" class="control-label">{{'Titulo'}}</label>

<input type="text" class="form-control {{$errors->has('titulo')?'is-invalid':''}}" name="titulo" id="titulo"
value="{{isset($servicio->titulo)?$servicio->titulo:old('titulo')}}">
{!! $errors->first('Titulo','<div class="invalid-feedback">:message</div>')!!}
</div>
=======
<!-- Title -->
<div class="form-group">
    <label for="title" class="control-label">{{'Título'}}</label>
    <input
        type="text"
        class="form-control {{$errors->has('title')?'is-invalid':''}}"
        name="title"
        id="title"
        value="{{isset($service->title)?$service->title:old('title')}}">
        {!! $errors->first('title','<div class="alert alert-danger alert-dismissible">:message</div>')!!}
</div>


<!-- Description -->
<div class="form-group">
    <label for="description" class="control-label">{{'Descripción'}}</label>
    <textarea
        class="form-control"
        name="description"
        id="description"
        rows="3">{{ isset($service->description)?$service->description:old('description') }}</textarea>
</div>

>>>>>>> 73a96d05f0a3f0214a971b70bebc870aa69eac9d

<!-- Price -->
<div class="form-group">
<<<<<<< HEAD
<label for="descripcion"  class="control-label">{{'Descripcion'}}</label>
<input type="text" class="form-control {{$errors->has('descripcion')?'is-invalid':''}}" name="descripcion" id="descripcion" 
value="{{isset($servicio->descripcion)?$servicio->descripcion:old('descripcion')}}">
{!! $errors->first('Descripcion','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group">
<label for="precio" class="control-label">{{'Precio'}}</label>
<input type="text" class="form-control {{$errors->has('precio')?'is-invalid':''}}" name="precio" id="precio" 
value="{{isset($servicio->precio)?$servicio->precio:old('precio')}}">
{!! $errors->first('Precio','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group">
<label for="foto" class="control-label">{{'Foto'}}</label>
@if(isset($servicio->foto))
<br/>

<img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$servicio->foto}}" alt="" width="150">
<br/>
@endif
<input class="form-control {{$errors->has('foto')?'is-invalid':''}}" type="file" name="foto" id="foto" value="">
{!! $errors->first('Foto','<div class="invalid-feedback">:message</div>')!!}
</div>

<input type="submit" class="btn btn-success" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}">
<a class="btn btn-primary" href="{{url('servicios')}}">Regresar</a> 
=======
    <label for="price" class="control-label">{{'Precio'}}</label>
    <input
        type="double"
        class="form-control {{$errors->has('price')?'is-invalid':''}}"
        name="price"
        id="price"
        value="{{isset($service->price)?$service->price:old('price')}}">
        {!! $errors->first('price','<div class="invalid-feedback">:message</div>')!!}
</div>


<!-- Picture -->
<div class="form-group justify-content-around">
    <label for="picture_path" class="control-label">{{'Imagen'}}</label>
    <div class="input-group">
        <div class="custom-file">
            <input
                type="file"
                class="custom-file-input"
                name="picture_path"
                id="picture_path">
        </div>
        <label class="custom-file-label" for="picture_path"></label>
    </div>
</div>
>>>>>>> 73a96d05f0a3f0214a971b70bebc870aa69eac9d
