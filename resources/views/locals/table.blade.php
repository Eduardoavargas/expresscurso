<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="locals-table">
            <thead>
            <tr>
                <th>Cidade</th>
                <th>Local</th>
                <th>Endereco</th>
                <th>Telefone</th>
                <th>Valor</th>
                <th>Data Atendimento</th>
                <th>Observacao</th>
                <th>Divulgador</th>
                <th>Projeto</th>
                <th colspan="3">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($locals as $local)
                <tr>
                    <td>{{ $local->cidade }}</td>
                    <td>{{ $local->local }}</td>
                    <td>{{ $local->endereco }}</td>
                    <td>{{ $local->telefone }}</td>
                    <td>{{ $local->valor }}</td>
                    <td>{{ $local->data_atendimento }}</td>
                    <td>{{ $local->observacao }}</td>
                    <td>{{ $local->divulgador }}</td>
                    <td>{{ $local->projeto }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['locals.destroy', $local->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('locals.show', [$local->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('locals.edit', [$local->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $locals])
        </div>
    </div>
</div>
