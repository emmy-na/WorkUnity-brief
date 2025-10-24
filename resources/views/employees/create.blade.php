@extends('layouts.app')

@section('content')
  <h1>Ajouter un employé</h1>
  <form action="{{ route('employees.store') }}" method="POST">
    @include('employees._form')
  </form>
@endsection
