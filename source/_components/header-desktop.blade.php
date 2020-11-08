<header class="h-screen w-screen md:block hidden relative" style="background-image: url(assets/images/bg-header-portfolio.png); background-position: right; background-repeat: no-repeat; background-size: cover">
    {{-- Language Switch --}}
    <x-switch-lang />
    <div class="h-screen text-cool-gray-200 flex flex-col space-y-10 justify-center ml-24">
        <div class="header-title flex flex-col">
            <h2 class="text-5xl font-bold w-8/12 text-wrap leading-none" x-text="lang.header.name"></h2>
            <h3 class="text-3xl font-semibold" x-text="lang.header.job"></h3>
        </div>
        <div class="header-text w-1/2 text-wrap">
            <p class="text-lg font-semibold" x-text="lang.header.description"></p>
        </div>
        <div class="social-icons flex space-x-3">
            <a href="#" class="group rounded-full bg-gray-50 w-8 h-8 flex justify-center items-center hover:bg-gray-700 transition-colors duration-300">
                <div class="text-black group-hover:text-gray-400">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 18 18" fill="none"><path d="M6.382 15h-.06a8.152 8.152 0 01-3.487-.818 1.035 1.035 0 01-.585-1.08 1.057 1.057 0 01.87-.885 4.972 4.972 0 001.905-.667 7.117 7.117 0 01-2.633-6.803 1.058 1.058 0 01.75-.862 1.012 1.012 0 011.073.308 5.317 5.317 0 003.66 2.062A3.375 3.375 0 018.932 3.93a3.352 3.352 0 014.778.142.525.525 0 00.585.075 1.043 1.043 0 011.455 1.2 4.993 4.993 0 01-.96 1.95A8.093 8.093 0 016.382 15zm0-1.5h.06a6.592 6.592 0 006.818-6.442.99.99 0 01.277-.638c.183-.232.34-.483.465-.75a1.92 1.92 0 01-1.432-.638 1.836 1.836 0 00-1.32-.532 1.875 1.875 0 00-1.343.518 1.897 1.897 0 00-.54 1.814l.195.856-.877.06a6.225 6.225 0 01-4.905-1.8 5.34 5.34 0 002.797 4.845l.713.405-.473.675a4.216 4.216 0 01-2.01 1.44 6.25 6.25 0 001.568.187h.007z" /></svg> 
                </div>
            </a>
            <a href="#" class="group rounded-full bg-gray-50 w-8 h-8 flex justify-center items-center hover:bg-gray-700 transition-colors duration-300">
                <div class="text-black group-hover:text-gray-400">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0v24h24v-24h-24zm8 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.397-2.586 7-2.777 7 2.476v6.759z"/></svg>
                </div>
            </a>
            <a href="#" class="group rounded-full bg-gray-50 w-8 h-8 flex justify-center items-center hover:bg-gray-700 transition-colors duration-300">
                <div class="text-black group-hover:text-gray-400">
                    <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                </div>
            </a>
        </div>
        <div class="links flex space-x-3 items-center font-semibold">
            <a href="#" class="hover:text-cool-gray-400" x-text="lang.header.nav.experience">
                Experiences
            </a>
            <span class="w-2 h-2 bg-white opacity-75 rounded-full"></span>
            <a href="#" class="hover:text-cool-gray-400" x-text="lang.header.nav.projects">
                Projects
            </a>
            <span class="w-2 h-2 bg-white opacity-75 rounded-full"></span>
            <a href="#" class="hover:text-cool-gray-400" x-text="lang.header.nav.contact"> 
                Contact Me
            </a>
        </div>
    </div>
</header>