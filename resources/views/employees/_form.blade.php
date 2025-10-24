@csrf

<div class="mb-3">
  <label class="form-label">Prénom</label>
  <input type="text" name="first_name" value="{{ old('first_name', $employee->first_name ?? '') }}" class="form-control">
  @error('first_name') <div class="text-danger small">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
  <label class="form-label">Nom</label>
  <input type="text" name="last_name" value="{{ old('last_name', $employee->last_name ?? '') }}" class="form-control">
  @error('last_name') <div class="text-danger small">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
  <label class="form-label">Email</label>
  <input type="email" name="email" value="{{ old('email', $employee->email ?? '') }}" class="form-control">
  @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
  <label class="form-label">Poste</label>
  <input type="text" name="position" value="{{ old('position', $employee->position ?? '') }}" class="form-control">
  @error('position') <div class="text-danger small">{{ $message }}</div> @enderror
</div>

<button 
    type="submit"
    class="px-4 py-2 text-white bg-gray-800 rounded hover:bg-amber-700 transition"
>
    Enregistrer
</button>

<a 
    href="{{ route('employees.index') }}"
    class="ml-3 text-amber-800 hover:underline"
>
    Annuler
</a>
