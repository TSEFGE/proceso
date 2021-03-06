<table class="table table-responsive" id="catTipoAmparos-table">
    <thead>
        <th>Tipo Amparo</th>
        <th colspan="3">Acción</th>
    </thead>
    <tbody>
    @foreach($catTipoAmparos as $catTipoAmparo)
        <tr>
            <td>{!! $catTipoAmparo->tipoAmparo !!}</td>
            <td>
                {!! Form::open(['route' => ['catTipoAmparos.destroy', $catTipoAmparo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('catTipoAmparos.show', [$catTipoAmparo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('catTipoAmparos.edit', [$catTipoAmparo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Desea eliminar el Registro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>