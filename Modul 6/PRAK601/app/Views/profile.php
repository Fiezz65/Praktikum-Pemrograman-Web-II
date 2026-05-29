<section class="mx-auto flex min-h-[calc(100vh-5rem)] max-w-6xl items-center px-4 py-8 sm:px-6 lg:px-8">
    <div class="grid w-full gap-6 lg:grid-cols-[260px_1fr]">
        <div class="rounded-3xl bg-white p-6 text-center shadow-sm ring-1 ring-slate-200 sm:p-8">
            <div class="mx-auto flex h-40 w-40 items-center justify-center rounded-3xl bg-slate-100">
                <img src="/assets/img/IMG_20240818_171525.jpg" alt="Hafiz Perdana" class="h-full w-full rounded-2xl object-cover" />
            </div>
            <h1 class="mt-5 text-2xl font-bold text-slate-900"><?= esc($praktikan['nama']) ?></h1>
            <p class="mt-2 text-sm text-slate-500"><?= esc($praktikan['nim']) ?></p>
        </div>

        <div class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-slate-200 sm:p-8 lg:p-10">
            <h2 class="text-3xl font-bold tracking-tight text-slate-900">Profil</h2>

            <div class="mt-6 grid gap-4 sm:grid-cols-2">
                <div class="rounded-2xl bg-slate-50 p-4">
                    <p class="text-sm text-slate-500">Nama</p>
                    <p class="mt-1 font-semibold text-slate-900"><?= esc($praktikan['nama']) ?></p>
                </div>
                <div class="rounded-2xl bg-slate-50 p-4">
                    <p class="text-sm text-slate-500">NIM</p>
                    <p class="mt-1 font-semibold text-slate-900"><?= esc($praktikan['nim']) ?></p>
                </div>
                <div class="rounded-2xl bg-slate-50 p-4">
                    <p class="text-sm text-slate-500">Prodi</p>
                    <p class="mt-1 font-semibold text-slate-900"><?= esc($praktikan['prodi']) ?></p>
                </div>
                <div class="rounded-2xl bg-slate-50 p-4">
                    <p class="text-sm text-slate-500">Asal</p>
                    <p class="mt-1 font-semibold text-slate-900"><?= esc($praktikan['asal']) ?></p>
                </div>
            </div>

            <div class="mt-6 grid gap-4 sm:grid-cols-2">
                <div class="rounded-2xl bg-slate-900 p-4 text-white">
                    <p class="text-sm text-slate-300">Hobi</p>
                    <p class="mt-2 leading-6"><?= esc(implode(', ', $praktikan['hobi'])) ?></p>
                </div>
                <div class="rounded-2xl bg-blue-900 p-4 text-white">
                    <p class="text-sm text-blue-200">Skill</p>
                    <p class="mt-2 leading-6"><?= esc(implode(', ', $praktikan['skill'])) ?></p>
                </div>
            </div>
        </div>
    </div>
</section>