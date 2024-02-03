<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <div class="navbar bg-[#65B741]">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl" style="color: black;">SunFun</a>
        </div>
        <div class="flex-none">
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                    <div class="indicator">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="badge badge-sm indicator-item">8</span>
                    </div>
                </div>
                <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-100 shadow">
                    <div class="card-body">
                        <span class="font-bold text-lg">8 Items</span>
                        <span class="text-info">Subtotal: $999</span>
                        <div class="card-actions">
                            <button class="btn btn-primary btn-block">View cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img alt="Tailwind CSS Navbar component" src="img/logo.png" />
                    </div>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li>
                        <a class="justify-between">
                            Profile
                            <span class="badge">New</span>
                        </a>
                    </li>
                    <li><a>Settings</a></li>
                    <li><a>Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- navbar -->
    <!-- hero -->
    <div class="grid grid-cols-2 bg-lime-400">
        <div class="text-5xl p-9" style="font-family: salsa;">
            <h1>Sunfun</h1>
            <p class="text-2xl">Food and Fruit</p>
            <div class="pt-40 text-8xl">
                <p>Fruit Haven</p>
                <p class="text-4xl">Blossoming Freshness Awaits You!</p>
            </div>
            <div class="pt-10">
                <p class="text-lg font-bold pb-10" style="font-family: Arial;">Rasakan Kelezatan Segar di Fruit Haven! Pilihan Buah Terbaik Untuk Anda.</p>
                <button class="btn btn-xs sm:btn-sm md:btn-md lg:btn-lg bg-yellow-300 text-slate-600 hover:bg-yellow-5 border-none">Buy now</button>
            </div>
        </div>
        <div class="flex justify-end">
            <div class="w-[70%] h-screen bg-slate-900">
                <img src="img/tes.jpg" alt="gambar" class="object-cover w-full h-full">
            </div>
        </div>
    </div>
    <!-- hero -->
    <!-- isi -->
    <div class="grid grid-cols-2 bg-yellow-100 pt-10">
        <div class="text-5xl p-9" style="font-family: salsa;">
            <div class="pt-40 text-8xl">
                <p class="pb-10"><span class="text-green-500 text-ellipsis">Sehat</span> tak perlu mahal</p>
                <p class="text-4xl">Kesegaran Setiap Gigitan</p>
            </div>
            <div class="pt-10">
                <p class="text-lg font-bold pb-10" style="font-family: Arial;">Buah disini memiliki tingkat <span style="color: green;">kesegaran</span> yang tidak dimiliki dari toko lain. Dan kami sangat mementingkan <span style="color: green;">kepuasan</span> konsumen terhadap produk kami</p>
            </div>
        </div>

        <div class="flex justify-center">
            <div class="w-[70%] h-screen bg-yellow-100">
                <img src="img/aple.jpg" alt="gambar" class="object-cover w-full h-full rounded-l-[30%] rounded-r-[30%] rounded-t-full rounded-b-full">
            </div>
        </div>

    </div>

    <div class="grid grid-cols-2 bg-yellow-100 pt-10">
        <div class="text-5xl p-9" style="font-family: salsa;">

            <div class="pt-40 text-8xl">
                <p class="pb-11"><span class="text-green-500 text-ellipsis">Sehat</span> tak perlu mahal</p>
            </div>

            <div class="justify-center">
                <div class="w-[80%] h-screen bg-blue-300">
                    <img src="img/aple.jpg" alt="gambar" class="object-cover w-full h-30% rounded-l-[30%] rounded-r-[30%] rounded-t-full rounded-b-full">
                </div>
            </div>

            <div class="flex justify-end bg-slate-600">
                <p class="text-lg font-bold pb-10" style="font-family: Arial;">Buah disini memiliki tingkat <span style="color: green;">kesegaran</span> yang tidak dimiliki dari toko lain. Dan kami sangat mementingkan <span style="color: green;">kepuasan</span> konsumen terhadap produk kami</p>
            </div>
        </div>
    </div>
    <!-- isi -->

</body>

</html>