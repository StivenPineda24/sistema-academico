<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso al Sistema Académico</title>
    <!-- Tailwind CSS CDN para un diseño moderno, limpio y responsivo -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen flex items-center justify-center relative overflow-hidden">

    <!-- Elementos decorativos de fondo -->
    <div class="absolute -top-40 -left-40 w-96 h-96 bg-blue-600/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-indigo-600/20 rounded-full blur-3xl pointer-events-none"></div>

    <!-- Contenedor Principal del Login -->
    <div class="relative z-10 w-full max-w-md mx-4">
        <div class="bg-slate-800/80 backdrop-blur-xl border border-slate-700/60 p-8 rounded-3xl shadow-2xl shadow-black/50">
            
            <!-- Encabezado / Logo -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-14 h-14 bg-gradient-to-tr from-blue-600 to-indigo-500 rounded-2xl shadow-lg shadow-blue-500/30 mb-4 text-white">
                    <!-- Icono SVG de Sistema Académico / Educación -->
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                    </svg>
                </div>
                <h1 class="text-2xl font-bold tracking-tight text-white">Portal Académico</h1>
                <p class="text-sm text-slate-400 mt-1">Ingresa tus datos institucionales</p>
            </div>

            <!-- Formulario con soporte para Laravel Blade (@csrf) -->
            <form action="#" method="POST" class="space-y-5">
                <!-- @csrf -->

                <!-- Usuario / Correo -->
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-300 mb-2">Usuario o Código</label>
                    <input type="text" name="email" required 
                        class="w-full bg-slate-900/50 border border-slate-700 rounded-xl px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition text-sm"
                        placeholder="Ej. 20260123 o usuario">
                </div>

                <!-- Contraseña -->
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-300 mb-2">Contraseña</label>
                    <input type="password" name="password" required 
                        class="w-full bg-slate-900/50 border border-slate-700 rounded-xl px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition text-sm"
                        placeholder="••••••••">
                </div>

                <!-- Opciones adicionales -->
                <div class="flex items-center justify-between text-xs pt-1">
                    <label class="flex items-center text-slate-400 cursor-pointer hover:text-slate-300">
                        <input type="checkbox" name="remember" class="rounded bg-slate-900 border-slate-700 text-blue-600 focus:ring-blue-500 mr-2 w-4 h-4">
                        Recordar sesión
                    </label>
                    <a href="#" class="text-blue-400 hover:text-blue-300 transition font-medium">¿Olvidaste tu contraseña?</a>
                </div>

                <!-- Botón de Envío -->
                <button type="submit" 
                    class="w-full mt-2 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-medium py-3 rounded-xl shadow-lg shadow-blue-600/30 transition duration-300 text-sm">
                    Acceder al Sistema
                </button>
            </form>

            <!-- Pie del componente -->
            <div class="text-center mt-8 text-xs text-slate-500 border-t border-slate-700/50 pt-4">
                <p>Sistema Académico &copy; 2026</p>
            </div>

        </div>
    </div>

</body>
</html>