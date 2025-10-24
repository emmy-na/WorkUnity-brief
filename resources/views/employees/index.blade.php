@extends('layouts.app')

@section('content')
  <div class="d-flex justify-content-between mb-3">
    <h1>Liste des employés</h1>
    <a href="{{ route('employees.create') }}" class="btn btn-success">Ajouter un employé</a>
  </div>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Poste</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse($employees as $emp)
        <tr>
          <td>{{ $emp->last_name }}</td>
          <td>{{ $emp->first_name }}</td>
          <td>{{ $emp->email }}</td>
          <td>{{ $emp->position }}</td>
          <td>
            <a href="{{ route('employees.show', $emp) }}" class="btn btn-sm btn-outline-primary">Voir</a>
            <a href="{{ route('employees.edit', $emp) }}" class="btn btn-sm btn-outline-secondary">Modifier</a>

            <form action="{{ route('employees.destroy', $emp) }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer cet employé ?')">
              @csrf
              @method('DELETE')
              <button class="btn btn-sm btn-outline-danger">Supprimer</button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="5">Aucun employé trouvé.</td>
        </tr>
      @endforelse
    </tbody>
  </table>

  {{ $employees->links() }}
@endsection
