<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Détails de l’employé</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-50 text-gray-800 min-h-screen flex flex-col items-center justify-center p-6">

 
  <div class="w-full max-w-md bg-white rounded-lg border border-gray-200 shadow-lg p-8">

    
    <h1 class="text-3xl font-bold mb-6 text-gray-900 border-b-2 border-amber-600 pb-2">
      Détails de l’employé
    </h1>

    
    <div class="space-y-4 mb-6">
     
      <div class="flex items-center bg-gray-50 rounded-md p-3">
        <strong class="font-semibold text-gray-700 w-24">Prénom :</strong>
        <span class="text-lg text-gray-900 ml-3">{{ $employee->first_name }}</span>
      </div>
     
      <div class="flex items-center bg-gray-50 rounded-md p-3">
        <strong class="font-semibold text-gray-700 w-24">Nom :</strong>
        <span class="text-lg text-gray-900 ml-3">{{ $employee->last_name }}</span>
      </div>
     
      <div class="flex items-center bg-gray-50 rounded-md p-3">
        <strong class="font-semibold text-gray-700 w-24">Email :</strong>
        <span class="text-lg text-gray-900 ml-3">{{ $employee->email }}</span>
      </div>
     
      <div class="flex items-center bg-gray-50 rounded-md p-3">
        <strong class="font-semibold text-gray-700 w-24">Poste :</strong>
        <span class="text-lg text-gray-900 ml-3">{{ $employee->position ?? 'Non spécifié' }}</span>
      </div>
    </div>

    
    <div class="flex space-x-3">
     
      <a href="{{ route('employees.index') }}" 
         class="flex-1 py-3 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-md text-center font-semibold shadow-md transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-amber-600">
        Retour à la liste
      </a>
      
      <a href="{{ route('employees.edit', $employee) }}" 
         class="flex-1 py-3 bg-red-200 hover:bg-red-400 text-black rounded-md text-center font-semibold shadow-md transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-amber-600">
        Modifier
      </a>
    </div>
  </div>

 
  <footer class="mt-10 mb-4 text-sm text-gray-400 text-center px-4">
    &copy; {{ date('Y') }} Mon Application Employés
  </footer>

</body>
</html>
