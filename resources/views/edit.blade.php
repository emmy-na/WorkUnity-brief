<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Modifier employé</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <style>
    @keyframes slideDown {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-slide-down {
      animation: slideDown 0.5s ease-out;
    }
    .gradient-text {
      background: linear-gradient(135deg, #b45309 0%, #f59e0b 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
  </style>
</head>
<body class="bg-gradient-to-br from-slate-50 via-amber-50 to-slate-100 min-h-screen">

 
  <header class="bg-gradient-to-r from-amber-800 via-amber-700 to-amber-600 shadow-2xl">
    <nav class="container mx-auto px-6 py-4">
      <div class="flex items-center justify-between">
        <div class="flex items-center space-x-4">
          <div class="bg-white bg-opacity-20 backdrop-blur-sm p-3 rounded-xl">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
          </div>
          <div>
            <h1 class="text-2xl font-bold text-black tracking-tight">Gestion RH</h1>
            <p class="text-amber-100 text-sm">Système de gestion des employés</p>
          </div>
        </div>
        <div class="flex items-center space-x-6">
          <a href="{{ route('employees.index') }}" class="text-black hover:text-amber-100 transition-colors font-medium flex items-center space-x-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            <span>Retour à la liste</span>
          </a>
          <div class="bg-white bg-opacity-20 backdrop-blur-sm p-2 rounded-full">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
            </svg>
          </div>
        </div>
      </div>
    </nav>
  </header>

 
  <div class="bg-white border-b border-gray-200">
    <div class="container mx-auto px-6 py-3">
      <div class="flex items-center space-x-2 text-sm">
        <a href="{{ route('employees.index') }}" class="text-amber-700 hover:text-amber-800 font-medium">Liste des employés</a>
        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
        <span class="text-gray-600 font-medium">Modifier employé</span>
      </div>
    </div>
  </div>

  
  <div class="max-w-3xl mx-auto px-6 py-8">

  
    <div class="mb-8 animate-slide-down">
      <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
        <div class="bg-gradient-to-r from-amber-50 to-orange-50 px-8 py-6 border-b border-amber-100">
          <div class="flex items-center space-x-4">
            <div class="bg-gradient-to-br from-amber-500 to-orange-600 p-4 rounded-xl shadow-lg">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
              </svg>
            </div>
            <div>
              <h2 class="text-3xl font-extrabold gradient-text">Modifier l'employé</h2>
              <p class="text-gray-600 text-lg mt-1">Mettez à jour les informations de l'employé</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="bg-white rounded-2xl shadow-2xl overflow-hidden border border-gray-200">
      <form action="{{ route('employees.update', $employee) }}" method="POST" class="p-8 space-y-6">
        @csrf
        @method('PUT')

       
        <div class="space-y-2">
          <label class="flex items-center text-sm font-bold text-gray-700 uppercase tracking-wide">
            <svg class="w-5 h-5 mr-2 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
            </svg>
            Prénom
          </label>
          <input type="text" name="first_name" value="{{ old('first_name', $employee->first_name) }}" placeholder="Entrez le prénom" required
            class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-amber-500 focus:ring-4 focus:ring-amber-200 transition-all duration-200 text-gray-800 font-medium" />
          @error('first_name')
          <div class="flex items-center space-x-2 text-red-600 text-sm font-semibold bg-red-50 px-3 py-2 rounded-lg">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
            </svg>
            <span>{{ $message }}</span>
          </div>
          @enderror
        </div>

        
        <div class="space-y-2">
          <label class="flex items-center text-sm font-bold text-gray-700 uppercase tracking-wide">
            <svg class="w-5 h-5 mr-2 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
            </svg>
            Nom
          </label>
          <input type="text" name="last_name" value="{{ old('last_name', $employee->last_name) }}" placeholder="Entrez le nom" required
            class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-amber-500 focus:ring-4 focus:ring-amber-200 transition-all duration-200 text-gray-800 font-medium" />
          @error('last_name')
          <div class="flex items-center space-x-2 text-red-600 text-sm font-semibold bg-red-50 px-3 py-2 rounded-lg">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
            </svg>
            <span>{{ $message }}</span>
          </div>
          @enderror
        </div>

        
        <div class="space-y-2">
          <label class="flex items-center text-sm font-bold text-gray-700 uppercase tracking-wide">
            <svg class="w-5 h-5 mr-2 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            Email
          </label>
          <input type="email" name="email" value="{{ old('email', $employee->email) }}" placeholder="exemple@email.com" required
            class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-amber-500 focus:ring-4 focus:ring-amber-200 transition-all duration-200 text-gray-800 font-medium" />
          @error('email')
          <div class="flex items-center space-x-2 text-red-600 text-sm font-semibold bg-red-50 px-3 py-2 rounded-lg">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
            </svg>
            <span>{{ $message }}</span>
          </div>
          @enderror
        </div>

        
        <div class="space-y-2">
          <label class="flex items-center text-sm font-bold text-gray-700 uppercase tracking-wide">
            <svg class="w-5 h-5 mr-2 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            Poste
          </label>
          <input type="text" name="position" value="{{ old('position', $employee->position) }}" placeholder="Ex: Développeur, Manager, etc."
            class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:border-amber-500 focus:ring-4 focus:ring-amber-200 transition-all duration-200 text-gray-800 font-medium" />
          @error('position')
          <div class="flex items-center space-x-2 text-red-600 text-sm font-semibold bg-red-50 px-3 py-2 rounded-lg">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
            </svg>
            <span>{{ $message }}</span>
          </div>
          @enderror
        </div>

        
        <div class="flex items-center gap-4 pt-4 border-t-2 border-gray-100">
          <button type="submit"
            class="flex-1 inline-flex items-center justify-center px-6 py-4 bg-gradient-to-r from-green-600 to-red-600 hover:from-green-700 hover:to-emerald-700 text-white font-bold text-lg rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
            </svg>
            <span>Enregistrer les modifications</span>
          </button>
          <a href="{{ route('employees.index') }}"
            class="inline-flex items-center px-6 py-4 bg-white hover:bg-gray-50 text-gray-700 font-bold text-lg rounded-xl border-2 border-gray-300 hover:border-gray-400 shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-300">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            Annuler
          </a>
        </div>
      </form>
    </div>

    
    <div class="mt-6 bg-blue-50 border-l-4 border-blue-500 rounded-lg p-4 shadow-md">
      <div class="flex items-start space-x-3">
        <svg class="w-6 h-6 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
        </svg>
        <div>
          <h3 class="font-bold text-blue-900 mb-1">Information importante</h3>
          <p class="text-blue-800 text-sm">Assurez-vous que toutes les informations sont correctes avant d'enregistrer. Les modifications seront appliquées immédiatement.</p>
        </div>
      </div>
    </div>

  </div>

  
  <footer class="mt-16 bg-gradient-to-r from-gray-800 via-gray-900 to-gray-800 border-t-4 border-amber-500">
    <div class="container mx-auto px-6 py-8">
      <div class="flex items-center justify-between">
        <div>
          <p class="text-gray-300 font-semibold text-lg">Mon Application Employés</p>
          <p class="text-gray-500 text-sm mt-1">Gestion moderne et efficace de vos ressources humaines</p>
        </div>
        <div class="flex items-center space-x-6">
          <a href="#" class="text-gray-400 hover:text-amber-400 transition-colors">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </a>
          <a href="#" class="text-gray-400 hover:text-amber-400 transition-colors">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
          </a>
          <a href="#" class="text-gray-400 hover:text-amber-400 transition-colors">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          </a>
        </div>
      </div>
      <div class="border-t border-gray-700 mt-6 pt-6 text-center">
        <p class="text-gray-400 text-sm">
          &copy; {{ date('Y') }} Mon Application Employés - Tous droits réservés | 
          <a href="#" class="text-amber-400 hover:text-amber-300 transition-colors">Politique de confidentialité</a> | 
          <a href="#" class="text-amber-400 hover:text-amber-300 transition-colors">Conditions d'utilisation</a>
        </p>
      </div>
    </div>
  </footer>

</body>
</html>
