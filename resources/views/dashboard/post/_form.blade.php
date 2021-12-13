
@csrf
@include('dashboard.partials.validation-errors')



<div class="form-group">

    <input class="form-control" type="text" name="publication" id="publication" placeholder="Publicación">


</div>

<div class="form-group">

    <textarea class="form-control" name="publication_content" id="publication_content" cols="30" rows="10"> </textarea>


</div>

<div>
    <a href="" class="btn btn-danger">Cancelar</a>

    <button type="submit" class="btn btn-success">Guardar</button>
    

</div>