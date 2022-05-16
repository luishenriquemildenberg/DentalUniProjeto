@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('listadentista') }}</div>
                <div class="card-body">
                <table id="table" class="table table-hover">
                    <thead>
                    <tr>
                        <th class="th-sm">Name</th>
                        <th class="th-sm">Email</th>
                        <th class="th-sm">Cro</th>
                        <th class="th-sm">Cro UF</th>
                        <th class="th-sm">Editar</th>
                        <th class="th-sm">Exclui</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($listadentista as $dentistas)
                                <tr>
                                    <td>{{ $dentistas->name }}</td>
                                    <td>{{ $dentistas->email }}</td>
                                    <td>{{ $dentistas->cro }}</td>
                                    <td>{{ $dentistas->cro_uf }}</td>
                                    <td><a href="" class="btn btn-outline-success btn-sm"><i class="far fa-edit"></i></a></td>
                                    <td><a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-trash-alt"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
$(document).ready(function () {
  $('#table').DataTable({
	"paging": true
  });
  $('.dataTables_length').addClass('bs-select');
});
</script>
