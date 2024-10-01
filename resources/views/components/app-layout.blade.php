<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Disaster Check-In</title>
    @vite('resources/css/app.css')
    {{ $head ?? null }}
</head>
<body class="bg-slate-100 font-sans antialiased m-6 lg:m-8">

<div class="mx-auto max-w-xl bg-white py-6 lg:p-8 p-6 flex-1 shadow-sm border border-slate-300 rounded-md">
    <header>
        <x-logo/>
    </header>
    <main class="max-w-lg min-w-full">
        {{ $slot }}
    </main>
</div>

<footer class="mt-8 max-w-xl mx-auto flex justify-center">
    <ul class="text-slate-600 flex gap-4 text-sm">
        <li>
            <a href="https://twitter.com/intent/tweet?text=Text%20this%20number%20if%20you%20are%20safe%20%28828%29%20888-0440"
               class="flex gap-1.5 hover:opacity-70">
               <div class="flex gap-2">
                    <img src="{{ asset('/icons/twitter.svg') }}" alt="Spread the word on Twitter" width="24" />
                    Spread the word
               </div>
            </a>
        </li>
        <li>
            <a href="https://app.cartamaps.com/share/21920abf-7a5a-4691-a03a-56a6c52198ac"
               class="flex gap-1.5 hover:opacity-70">
               <div class="flex gap-2">
                    <img src="{{ asset('/icons/road-icon.svg') }}" alt="Check road closures" width="24" />
                    Check Road Closures
               </div>
            </a>
        </li>
    </ul>
</footer>
</body>
</html>
