@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dentista') }}</div>

                <div class="card-body">
                <form method="POST" action="{{route('dentista.insert')}}">
						@csrf
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="name">Nome</label>
								<input type="name" class="form-control" name="name" id="name" placeholder="Nome" required>
							</div>
							<div class="form-group col-md-6">
								<label for="email">Email</label>
								<input type="email" class="form-control"  name="email" id="email" placeholder="Email" required>
							</div>
							<div class="form-group col-md-6">
								<label for="cro">Cro</label>
								<input type="cro" class="form-control" name="cro" id="cro" placeholder="Cro" required>
							</div>
							<div class="form-group col-md-6">
								<label for="crouf">Cro UF</label>
								<input type="text" class="form-control" name="cro_uf" id="cro_uf" placeholder="Cro UF" required>
							</div>
						</div>
						<br>
						<button id= "button" type = "subimit" class="btn btn-success">Adicionar</button>					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
