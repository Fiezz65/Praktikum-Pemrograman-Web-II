<section class="mx-auto flex min-h-[calc(100vh-5rem)] max-w-6xl items-center px-4 py-8 sm:px-6 lg:px-8">
    <div class="grid w-full gap-6 lg:grid-cols-2">
        <div class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-slate-200 sm:p-8 lg:p-10">
            <h1 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                Halo, saya <?= esc($praktikan['nama']) ?>
            </h1>
            <p class="mt-4 text-sm leading-6 text-slate-600 sm:text-base">
                Saya mahasiswa Teknologi Informasi di Universitas Lambung Mangkurat.
            </p>

            <div class="mt-6 grid gap-3 text-sm sm:grid-cols-2">
                <div class="rounded-2xl bg-slate-50 p-4">
                    <p class="text-slate-500">NIM</p>
                    <p class="mt-1 font-semibold text-slate-900"><?= esc($praktikan['nim']) ?></p>
                </div>
                <div class="rounded-2xl bg-slate-50 p-4">
                    <p class="text-slate-500">Prodi</p>
                    <p class="mt-1 font-semibold text-slate-900"><?= esc($praktikan['prodi']) ?></p>
                </div>
            </div>

            <div class="mt-6 flex flex-wrap gap-3 text-sm">
                <a href="/profile" class="rounded-full bg-slate-900 px-5 py-3 font-medium text-white hover:bg-slate-700">Lihat Profil</a>
            </div>
        </div>

        <div class="rounded-3xl bg-slate-900 p-6 text-white shadow-sm sm:p-8 lg:p-10">
            <div class="flex h-full flex-col justify-between gap-6">
                <div>
                    <h2 class="text-2xl font-semibold sm:text-3xl">Data singkat</h2>
                </div>

                <div class="overflow-hidden rounded-2xl bg-white/10 p-5">
                    <img src="/assets/img/IMG_20240818_171525.jpg" alt="Hafiz Perdana" class="mx-auto w-36 max-w-full rounded-2xl object-cover sm:w-44" />
                </div>

                <div class="grid gap-3 text-sm sm:grid-cols-2">
                    <div class="rounded-2xl bg-white/10 p-4">
                        <p class="text-slate-300">Asal</p>
                        <p class="mt-1 font-medium"><?= esc($praktikan['asal']) ?></p>
                    </div>
                    <div class="rounded-2xl bg-white/10 p-4">
                        <p class="text-slate-300">Hobi</p>
                        <p class="mt-1 font-medium">Anime, Game, Novel, Musik</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>