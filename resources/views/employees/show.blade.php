@extends('layouts.app')

@section('content')
  <h1>Profil de {{ $employee->first_name }} {{ $employee->last_name }}</h1>

  <ul class="list-group mb-3">
    <li class="list-group-item"><strong>Prénom :</strong> {{ $employee->first_name }}</li>
    <li class="list-group-item"><strong>Nom :</strong> {{ $employee->last_name }}</li>
    <li class="list-group-item"><strong>Email :</strong> {{ $employee->email }}</li>
    <li class="list-group-item"><strong>Poste :</strong> {{ $employee->position }}</li>
    <li class="list-group-item"><strong>Créé le :</strong> {{ $employee->created_at->format('d/m/Y H:i') }}</li>
  </ul>

  <a href="{{ route('employees.edit', $employee) }}" class="btn btn-secondary">Modifier</a>
  <a href="{{ route('employees.index') }}" class="btn btn-link">Retour</a>
@endsection
