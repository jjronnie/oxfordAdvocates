<x-guest-layout>

    <section class="min-h-screen flex items-center justify-center bg-white px-6 py-12 overflow-hidden">
        <div class="relative w-full max-w-4xl text-center">

            <!-- Decorative Glow -->
            <div class="absolute inset-0 flex justify-center -top-12 pointer-events-none">
                <div class="w-[550px] h-[220px] bg-cyan-200/40 blur-3xl rounded-full"></div>
            </div>

            <!-- Clouds -->
            <div class="absolute left-1/2 -translate-x-1/2 top-20 w-full flex justify-center pointer-events-none">
                <div class="absolute -left-10 w-44 h-16 bg-white rounded-full shadow-lg opacity-90"></div>
                <div class="absolute left-16 top-4 w-56 h-20 bg-white rounded-full shadow-lg opacity-90"></div>
                <div class="absolute right-20 top-2 w-48 h-16 bg-white rounded-full shadow-lg opacity-90"></div>
                <div class="absolute right-0 top-8 w-40 h-14 bg-white rounded-full shadow-lg opacity-90"></div>
            </div>

            <!-- 404 -->
            <h1
                class="relative text-[8rem] sm:text-[10rem] md:text-[13rem] lg:text-[16rem] font-extrabold tracking-tight leading-none bg-gradient-to-b from-teal-600 via-teal-300 to-transparent bg-clip-text text-transparent select-none">
                404
            </h1>

            <!-- Content -->
            <div class="-mt-10 sm:-mt-14 relative z-10">
                <h2 class="text-2xl sm:text-4xl font-semibold text-gray-900">
                    Sorry, that page could not be found
                </h2>

                <p class="mt-4 max-w-xl mx-auto text-gray-500 text-sm sm:text-base">
                    The page you are looking for may have been moved, deleted,
                    or the URL might be incorrect.
                </p>

                <a href="/"
                    class="inline-flex mt-8 items-center justify-center rounded-lg bg-black px-6 py-3 text-sm font-medium text-white transition hover:bg-gray-800 active:scale-95 shadow-lg">
                    Go Back Home
                </a>
            </div>

        </div>
    </section>
</x-guest-layout>
