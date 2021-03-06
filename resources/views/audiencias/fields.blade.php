<!-- Idtipoaudiencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idTipoAudiencia', 'Idtipoaudiencia:') !!}
    {!! Form::select('idTipoAudiencia', $catAudiencia, null, ['class' => 'form-control']) !!}
</div>

<!-- Idjuez Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idJuez', 'Idjuez:') !!}
    {!! Form::select('idJuez', $catJuez, null, ['class' => 'form-control']) !!}
</div>

<!-- Idfiscal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idFiscal', 'Idfiscal:') !!}
    {!! Form::select('idFiscal', $catFiscal, null, ['class' => 'form-control']) !!}
</div>

<!-- Resolucion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('resolucion', 'Resolucion:') !!}
    {!! Form::textarea('resolucion', null, ['class' => 'form-control']) !!}
</div>

<!-- Idetapa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idEtapa', 'Idetapa:') !!}
    {!! Form::select('idEtapa', $catEtapa, null, ['class' => 'form-control']) !!}
</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
</div>

<!-- Idproceso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idProceso', 'Idproceso:') !!}
    {!! Form::select('idProceso', $catProceso, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('audiencias.index') !!}" class="btn btn-default">Cancel</a>
</div>
