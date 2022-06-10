{{-- Página de error 404 --}}
<main class="h-[55vh] w-full flex flex-col justify-center items-center bg-fondo">
    <h1 class="text-9xl font-extrabold text-titulo tracking-widest">404</h1>
    <div class="bg-backgroundfooter text-fondo px-2 text-sm rounded rotate-12 absolute">
        Page Not Found
    </div>
    <button class="mt-5">
        <a href="/"
            class="relative inline-block text-sm font-medium text-fondo group active:text-principal focus:outline-none focus:ring">
            <span class="relative block px-6 py-2 bg-backgroundfooter border rounded-lg">
                <router-link>Inicio</router-link>
            </span>
        </a>
    </button>
</main>
