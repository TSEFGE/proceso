<!-- Tiporelacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoRelacion', 'Tiporelacion:') !!}
    {!! Form::text('tipoRelacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('catTipoRelacions.index') !!}" class="btn btn-default">Cancel</a>
</div>