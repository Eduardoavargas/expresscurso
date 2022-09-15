<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="divulgadors-table">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Status</th>
                <th colspan="3">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($divulgadors as $divulgador)
                <tr>
                    <td>{{ $divulgador->nome }}</td>
                    <td>{{ $divulgador->status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['divulgadors.destroy', $divulgador->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('divulgadors.show', [$divulgador->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('divulgadors.edit', [$divulgador->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $divulgadors])
        </div>
    </div>
</div>
