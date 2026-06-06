<?= $this->extend('layout') ?>

<?= $this->section('title') ?>
Tambah Buku Baru
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="flex-grow flex items-center justify-center p-4 bg-gradient-to-br from-indigo-100 via-white to-cyan-50">
    <div class="w-full max-w-lg">
        <form action="/books/store" method="post">
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg border border-slate-200">
                <div class="px-8 py-6 border-b border-slate-200 flex items-center justify-between">
                    <h2 class="text-xl font-bold text-slate-800">Tambahkan Buku Baru</h2>
                    <a href="/books" title="Batal" class="p-2 rounded-full hover:bg-slate-100 text-slate-400 hover:text-slate-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </a>
                </div>

                <div class="p-8">
                    <?php if (session()->has('errors')) : ?>
                        <div class="mb-5 bg-red-100 border-l-4 border-red-500 p-4 rounded-lg">
                            <p class="text-sm font-semibold text-red-700 mb-2">Input tidak valid:</p>
                            <ul class="list-disc list-inside text-sm text-red-600 space-y-1">
                                <?php foreach (session('errors') as $error) : ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php endif ?>

                    <div class="space-y-4">
                        <div>
                            <label for="judul" class="block text-sm font-medium text-slate-700">Judul Buku</label>
                            <div class="mt-1.5 relative">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" /></svg>
                                </div>
                                <input type="text" name="judul" id="judul" value="<?= old('judul') ?>" placeholder="Masukkan judul buku" class="block w-full rounded-lg border border-slate-300 shadow-sm py-2.5 pl-10 px-4 placeholder:text-slate-400/70 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="penulis" class="block text-sm font-medium text-slate-700">Penulis</label>
                            <div class="mt-1.5 relative">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
                                </div>
                                <input type="text" name="penulis" id="penulis" value="<?= old('penulis') ?>" placeholder="Masukkan nama penulis" class="block w-full rounded-lg border border-slate-300 shadow-sm py-2.5 pl-10 px-4 placeholder:text-slate-400/70 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="penerbit" class="block text-sm font-medium text-slate-700">Penerbit</label>
                            <div class="mt-1.5 relative">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" /></svg>
                                </div>
                                <input type="text" name="penerbit" id="penerbit" value="<?= old('penerbit') ?>" placeholder="Masukkan nama penerbit" class="block w-full rounded-lg border border-slate-300 shadow-sm py-2.5 pl-10 px-4 placeholder:text-slate-400/70 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="tahun_terbit" class="block text-sm font-medium text-slate-700">Tahun Terbit</label>
                            <div class="mt-1.5 relative">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" /></svg>
                                </div>
                                <input type="number" name="tahun_terbit" id="tahun_terbit" value="<?= old('tahun_terbit') ?>" placeholder="Masukkan tahun terbit buku" class="block w-full rounded-lg border border-slate-300 shadow-sm py-2.5 pl-10 px-4 placeholder:text-slate-400/70 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-slate-50/70 px-8 py-4 text-right rounded-b-2xl">
                    <button type="submit" class="rounded-lg bg-indigo-600 px-6 py-2.5 text-sm font-semibold text-white shadow-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-all">
                        Simpan Buku
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>