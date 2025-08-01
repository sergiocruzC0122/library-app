<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
  </head>
  <body class="bg-slate-100 text-slate-300 antialiased selection:bg-blue-600 selection:text-white">
    <div class="flex min-h-screen w-screen">

      <!-- SIDEBAR -->
      <aside class="w-64 bg-gray-900 text-slate-300 fixed h-screen overflow-y-auto z-10">
        <div class="my-4 px-6">
          <h1 class="text-lg md:text-2xl font-bold text-white">Biblio<span class="text-blue-500">TK</span>.</h1>
          <p class="text-slate-500 text-sm">Un clic. Un libro. Mil mundos.</p>
        </div>
        <div class="px-6 py-10">
          <p class="text-slate-500">Bienvenido,</p>
          <a href="#" class="inline-flex space-x-2 items-center">
            <img class="rounded-full w-8 h-8" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzKVthIfiYthRncPbOBr4bA1SFIdExbup_hg&s" alt="">
            <span class="text-sm md:text-base font-bold">Usuario</span>
          </a>
        </div>
        <nav class="px-6">
            <div id="nav" class="w-full px-6">
                <a href="#" class="w-full px-2 inline-flex space-x-2 items-center border-b border-slate-700 py-3 bg-blue-800 hover:bg-white/5 transition ease-linear duration-150">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                        </svg>

                    </div>
                    <div class="flex flex-col">
                        <span class="text-lg font-bold leading-5 text-white">Dashboard</span>
                        <span class="text-sm text-white/50 hidden md:block">Data Overview</span>
                    </div>
                </a>
                <a href="#" class="w-full px-2 inline-flex space-x-2 items-center border-b border-slate-700 py-3 hover:bg-white/5 transition ease-linear duration-150">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-lg text-slate-300 font-bold leading-5">Database</span>
                        <span class="text-sm text-slate-500 hidden md:block">Database Manager</span>
                    </div>
                </a>
                <a href="#" class="w-full px-2 inline-flex space-x-2 items-center border-b border-slate-700 py-3 hover:bg-white/5 transition ease-linear duration-150">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-lg text-slate-300 font-bold leading-5">Extensions</span>
                        <span class="text-sm text-slate-500 hidden md:block">Manage Extensions</span>
                    </div>
                </a>
                <a href="#" class="w-full px-2 inline-flex space-x-2 items-center py-3 hover:bg-white/5 transition ease-linear duration-150">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-.513m14.095-5.13l1.41-.513M5.106 17.785l1.15-.964m11.49-9.642l1.149-.964M7.501 19.795l.75-1.3m7.5-12.99l.75-1.3m-6.063 16.658l.26-1.477m2.605-14.772l.26-1.477m0 17.726l-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205L12 12m6.894 5.785l-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864l-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-lg text-slate-300 font-bold leading-5">Settings</span>
                        <span class="text-sm text-slate-500 hidden md:block">Edit App Settings</span>
                    </div>
                </a>
           </div>
        </nav>
      </aside>

      <!-- CONTENIDO PRINCIPAL -->
      <div class="flex flex-col flex-grow ml-64 min-h-screen">

        <!-- HEADER -->
        <header class="bg-white shadow p-4 text-black">
          <h2 class="text-xl font-bold">Panel principal</h2>
        </header>

        <!-- MAIN CONTENT -->
        <main class="flex-grow p-6">
          <p>Aquí va tu contenido principal...</p>
        </main>

        <!-- FOOTER -->
        <footer class="bg-white text-slate-600 px-6 py-4 text-center">
          &copy; 2025 BiblioTK. Todos los derechos reservados.
        </footer>

      </div>
    </div>
  </body>
</html>
