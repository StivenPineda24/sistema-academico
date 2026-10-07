<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso con Código - Sistema Académico</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex items-center justify-center relative overflow-hidden">

    <!-- Destellos de fondo minimalistas -->
    <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-blue-600/15 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-1/4 right-1/4 w-72 h-72 bg-indigo-600/15 rounded-full blur-3xl pointer-events-none"></div>

    <!-- Contenedor Principal -->
    <div class="relative z-10 w-full max-w-md mx-4">
        <div class="bg-slate-900/90 backdrop-blur-2xl border border-slate-800 p-8 rounded-3xl shadow-2xl shadow-black/80">
            
            <!-- Encabezado -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-tr from-blue-600 to-indigo-600 rounded-2xl shadow-lg shadow-blue-500/20 mb-4 text-white">
                    <!-- Icono de Identificación / Código Académico -->
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path>
                    </svg>
                </div>
                <h1 class="text-2xl font-bold tracking-tight text-white">Portal Académico</h1>
                <p class="text-xs text-slate-400 mt-1 uppercase tracking-wider font-medium">Autenticación por Código Institucional</p>
            </div>

            <!-- Formulario Laravel -->
            <form action="#" method="POST" class="space-y-5">
                <!-- @csrf -->

                <!-- Campo de Código Académico -->
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-300 mb-2">Código de Estudiante o Docente</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-slate-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        </span>
                        <input type="text" name="codigo" required autofocus
                            class="w-full bg-slate-950/60 border border-slate-800 rounded-xl pl-11 pr-4 py-3 text-white placeholder-slate-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition text-sm tracking-wider font-mono"
                            placeholder="Ej. 202610250">
                    </div>
                </div>

                <!-- Campo de Contraseña -->
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-300 mb-2">Contraseña</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-slate-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        </span>
                        <input type="password" name="password" required 
                            class="w-full bg-slate-950/60 border border-slate-800 rounded-xl pl-11 pr-4 py-3 text-white placeholder-slate-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition text-sm"
                            placeholder="••••••••">
                    </div>
                </div>

                <!-- Opciones -->
                <div class="flex items-center justify-between text-xs pt-1">
                    <label class="flex items-center text-slate-400 cursor-pointer hover:text-slate-300">
                        <input type="checkbox" name="remember" class="rounded bg-slate-950 border-slate-800 text-blue-600 focus:ring-blue-500 mr-2 w-4 h-4">
                        Mantener sesión abierta
                    </label>
                    <a href="#" class="text-blue-400 hover:text-blue-300 transition font-medium">¿Problemas de acceso?</a>
                </div>

                <!-- Botón de Ingreso -->
                <button type="submit" 
                    class="w-full mt-2 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-medium py-3 rounded-xl shadow-lg shadow-blue-600/25 transition duration-300 text-sm tracking-wide">
                    Ingresar al Sistema
                </button>
            </form>

            <!-- Pie de página -->
            <div class="text-center mt-8 text-xs text-slate-600 border-t border-slate-800/80 pt-4">
                <p>Instituto de Educación Superior &bull; Sistema Académico</p>
            </div>

        </div>
    </div>

</body>
</html>