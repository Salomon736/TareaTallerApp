
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('titulo') }}</label>
    <div>
        {{ Form::text('titulo', $album->titulo, ['class' => 'form-control' .
        ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
        {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">album <b>titulo</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Nombre del Artista') }}</label>
    <div>
    {{ Form::select('artista_id', $artista , $album->artista_id, ['class' => 'form-control' . ($errors->has('artista_id') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('artista_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">album <b>artista_id</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Enviar</button>
            </div>
        </div>
    </div>
