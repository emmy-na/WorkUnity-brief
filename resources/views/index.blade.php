<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gestion des Employés</title>
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
            <h1 class="text-2xl font-bold tracking-tight text-black">Gestion RH</h1>
            <p class="text-amber-100 text-sm">Système de gestion des employés</p>
          </div>
        </div>
        
        <div class="flex items-center space-x-6">
          
          <a href="#" class="text-black hover:text-amber-100 transition-colors font-medium flex items-center space-x-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
            </svg>
            <span>Tableau de bord</span>
          </a>
          <a href="#" class="text-black hover:text-amber-100 transition-colors font-medium flex items-center space-x-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
            </svg>
            <span>Rapports</span>
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
        <a href="#" class="text-amber-700 hover:text-amber-800 font-medium">Accueil</a>
        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
        <span class="text-gray-600 font-medium">Employés</span>
      </div>
    </div>
  </div>

  
  <div class="container mx-auto px-6 py-8 max-w-7xl">

    
    <div class="mb-8 animate-slide-down">
      <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
        
        <div class="bg-gradient-to-r from-amber-50 to-orange-50 px-8 py-6 border-b border-amber-100">
          <div class="flex items-center justify-between">
            
            <div class="flex-1">
              <h2 class="text-4xl font-extrabold gradient-text mb-2">Liste des Employés</h2>
              <p class="text-gray-600 text-lg">Gérez et consultez tous vos collaborateurs</p>

             
              <div class="flex items-center space-x-6 mt-4">
              
                <div class="flex items-center space-x-2">
                  <div class="bg-blue-100 p-2 rounded-lg">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                  </div>
                  <div>
                    <p class="text-2xl font-bold text-gray-800">{{ $employees->total() }}</p>
                    <p class="text-xs text-gray-500 uppercase tracking-wide">Total Employés</p>
                  </div>
                </div>
               
                <div class="flex items-center space-x-2">
                  <div class="bg-green-100 p-2 rounded-lg">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                  </div>
                  <div>
                    <p class="text-2xl font-bold text-gray-800">{{ $employees->count() }}</p>
                    <p class="text-xs text-gray-500 uppercase tracking-wide">Cette page</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div>
              <a href="{{ route('employees.create') }}"
                 class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-bold rounded-2xl shadow-xl hover:shadow-2xl backdrop-blur-sm bg-opacity-90 transform hover:scale-105 transition-all duration-300">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Ajouter Employé
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    @if(session('success'))
      <div class="mb-6 animate-slide-down">
        <div class="bg-gradient-to-r from-green-500 to-emerald-500 rounded-xl shadow-lg overflow-hidden">
          <div class="px-6 py-4 flex items-center space-x-4">
            <div class="flex-shrink-0 bg-white bg-opacity-30 backdrop-blur-sm p-3 rounded-full">
              <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
            </div>
            <div class="flex-1">
              <p class="text-white font-semibold text-lg">{{ session('success') }}</p>
            </div>
            
            <button onclick="this.parentElement.parentElement.parentElement.remove()" class="text-red hover:bg-white hover:bg-opacity-20 p-2 rounded-lg transition-all">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
              </svg>
            </button>
          </div>
        </div>
      </div>
    @endif

    
    <div class="bg-white rounded-2xl shadow-2xl border border-gray-200 overflow-hidden">
      <div class="overflow-x-auto">
        <table class="w-full">
          
          <thead>
            <tr class="bg-gradient-to-r from-gray-400 to-blue-400">
              <th class="px-6 py-5 text-left text-xs font-bold text-amber-400 uppercase tracking-wider border-r border-gray-700">#</th>
              <th class="px-6 py-5 text-left text-xs font-bold text-amber-400 uppercase tracking-wider border-r border-gray-700">Nom</th>
              <th class="px-6 py-5 text-left text-xs font-bold text-amber-400 uppercase tracking-wider border-r border-gray-700">Prénom</th>
              <th class="px-6 py-5 text-left text-xs font-bold text-amber-400 uppercase tracking-wider border-r border-gray-700">Email</th>
              <th class="px-6 py-5 text-left text-xs font-bold text-amber-400 uppercase tracking-wider border-r border-gray-700">Poste</th>
              <th class="px-6 py-5 text-center text-xs font-bold text-amber-400 uppercase tracking-wider">Actions</th>
            </tr>
          </thead>
          
          <tbody class="divide-y divide-gray-500">
            @forelse ($employees as $i => $emp)
              <tr class="odd:bg-white even:bg-amber-50 hover:bg-amber-100 transition-colors duration-200 group">
                <td class="px-6 py-5 whitespace-nowrap border-r border-gray-100">
                  <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-gray-200 to-gray-400 text-black font-bold shadow-md">
                    {{ $employees->firstItem() + $i }}
                  </span>
                </td>
                <td class="px-6 py-5 whitespace-nowrap border-r border-gray-100">
                  <span class="text-base font-bold text-gray-900 group-hover:text-amber-800 transition-colors">{{ $emp->last_name }}</span>
                </td>
                <td class="px-6 py-5 whitespace-nowrap border-r border-gray-100">
                  <span class="text-base font-semibold text-gray-800">{{ $emp->first_name }}</span>
                </td>
                
                <td class="px-6 py-5 whitespace-nowrap border-r border-gray-100">
                  <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span class="text-sm text-gray-600">{{ $emp->email }}</span>
                  </div>
                </td>
               
                <td class="px-6 py-5 whitespace-nowrap border-r border-gray-100">
                  <div class="flex items-center justify-center px-4 py-2 font-bold rounded-full bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-md">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    {{ $emp->position }}
                  </div>
                </td>
                
                <td class="px-6 py-5 whitespace-nowrap">
                  <div class="flex items-center justify-center gap-3">
                    
                    <a href="{{ route('employees.show', $emp) }}"
                       class="group relative inline-flex items-center px-4 py-2.5 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white text-sm font-bold rounded-lg shadow-md hover:shadow-xl transition-all duration-200"
                       title="Voir les détails">
                      <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                      </svg> Voir
                    </a>
                   
                    <a href="{{ route('employees.edit', $emp) }}"
                       class="inline-flex items-center px-4 py-2.5 bg-gradient-to-r from-red-500 to-rose-600 hover:from-pink-600 hover:to-rose-700 text-white font-bold rounded-lg shadow-lg hover:shadow-xl transform hover:scale-110 transition-all duration-200">
                      <svg class="w-5 h-5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                      </svg> Modifier
                    </a>
                    
                    <form action="{{ route('employees.destroy', $emp) }}" method="POST" class="inline-block" onsubmit="return confirm('⚠️ Êtes-vous absolument sûr de vouloir supprimer cet employé ?\n\nCette action est irréversible.')">
                      @csrf
                      @method('DELETE')
                      <button type="submit"
                              class="group relative inline-flex items-center px-4 py-2.5 bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white text-sm font-bold rounded-lg shadow-md hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200"
                              title="Supprimer">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                        </svg> Supprimer
                      </button>
                    </form>
                  </div>
                </td>
              </tr>
            @empty
             
              <tr>
                <td colspan="6" class="px-6 py-16 text-center">
                  <div class="flex flex-col items-center justify-center">
                    <div class="bg-gradient-to-br from-gray-100 to-gray-200 p-8 rounded-full mb-6 shadow-inner">
                      <svg class="w-24 h-24 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                      </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-700 mb-2">Aucun employé trouvé</h3>
                    <p class="text-gray-500 text-lg mb-6">Commencez par ajouter votre premier collaborateur</p>
                    
                    <a href="{{ route('employees.create') }}"
                       class="inline-flex items-center px-6 py-3.5 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                      <span class="flex items-center justify-center w-8 h-8 bg-white/20 rounded-full mr-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                      </span>
                      <span class="text-lg">Ajouter Employé</span>
                    </a>
                  </div>
                </td>
              </tr>
            @endforelse
          </tbody>
        </table>
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
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
              <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
            </svg>
          </a>
          <a href="#" class="text-gray-400 hover:text-amber-400 transition-colors">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
              <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
            </svg>
          </a>
          <a href="#" class="text-gray-400 hover:text-amber-400 transition-colors">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
              <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
            </svg>
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
