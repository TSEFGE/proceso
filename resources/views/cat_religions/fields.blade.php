<!-- Religion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('religion', 'Religión:') !!}
    {!! Form::text('religion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('catReligions.index') !!}" class="btn btn-default">Cancelar</a>
</div>
