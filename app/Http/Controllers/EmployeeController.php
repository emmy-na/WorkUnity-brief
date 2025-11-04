<?php
namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::orderBy('last_name')->paginate(15);
        return view('index', compact('employees'));
    }

    public function create()
    {
        // Pas besoin de passer un modèle existant ici, mais tu peux si tu veux
        return view('create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'email'      => 'required|email|unique:employees,email',
            'position'   => 'nullable|string|max:150',
        ]);

        Employee::create($data);

        // Redirect vers la liste avec le nom correct de route
        return redirect()->route('employees.index')->with('success', 'Employé ajouté.');
    }

    public function show(Employee $employee)
    {
        return view('show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        return view('edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $data = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'email'      => 'required|email|unique:employees,email,' . $employee->id,
            'position'   => 'nullable|string|max:150',
        ]);

        $employee->update($data);

        return redirect()->route('employees.index')->with('success', 'Employé modifié.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employé supprimé.');
    }
}
