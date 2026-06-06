<?= $this->extend('layout') ?>

<?= $this->section('title') ?>
Dashboard
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="flex flex-col h-full bg-gradient-to-br from-indigo-100 via-white to-cyan-50">
    <header class="bg-white/80 backdrop-blur-sm border-b border-slate-200 sticky top-0 z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0">
                    <h1 class="text-xl font-bold text-slate-800">PRAK701</h1>
                </div>
                <div class="flex items-center gap-4">
                    <span class="text-sm font-medium text-slate-600">
                        Selamat datang, <span class="font-bold text-slate-900"><?= esc(session()->get('username')) ?></span>
                    </span>
                    <a href="/logout" class="inline-flex items-center justify-center rounded-lg text-sm font-semibold py-2 px-4 bg-red-50 text-red-600 hover:bg-red-100 hover:text-red-700 transition-all">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="flex-grow py-10 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
                <div class="flex-1">
                    <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Daftar Buku</h2>
                </div>
                <div>
                    <a href="/books/create" class="inline-flex items-center justify-center rounded-lg bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-all">
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                        </svg>
                        Tambah Buku Baru
                    </a>
                </div>
            </div>

            <?php if (session()->getFlashdata('message')) : ?>
                <div id="flash-message" class="mb-6 bg-green-100 border border-green-200 p-4 rounded-lg shadow-sm transition-opacity duration-300 flex items-center">
                    <svg class="h-6 w-6 text-green-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-sm font-medium text-green-800"><?= session()->getFlashdata('message') ?></p>
                </div>
            <?php endif; ?>

            <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead class="bg-slate-100 border-b border-slate-200">
                            <tr>
                                <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-slate-700">Judul Buku</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-slate-700">Penulis</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-slate-700">Penerbit</th>
                                <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-slate-700">Tahun</th>
                                <th scope="col" class="px-6 py-3.5 text-center text-sm font-semibold text-slate-700">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 bg-white">
                            <?php if (empty($books)): ?>
                                <tr>
                                    <td colspan="5" class="px-6 py-20 text-center">
                                        <svg class="mx-auto h-12 w-12 text-slate-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                        </svg>
                                        <h3 class="mt-4 text-sm font-semibold text-slate-900">Belum Ada Buku</h3>
                                        <p class="mt-1 text-sm text-slate-500">Mulai dengan menambahkan buku pertama Anda.</p>
                                    </td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($books as $book) : ?>
                                    <tr class="hover:bg-slate-50 transition-colors duration-150">
                                        <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm">
                                            <div class="font-semibold text-slate-900"><?= esc($book['judul']) ?></div>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-slate-600"><?= esc($book['penulis']) ?></td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-slate-600">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-xs font-medium bg-slate-100 text-slate-700">
                                                <?= esc($book['penerbit']) ?>
                                            </span>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-slate-600 font-mono text-center"><?= esc($book['tahun_terbit']) ?></td>
                                        <td class="whitespace-nowrap py-4 pl-3 pr-6 text-center text-sm font-medium">
                                            <div class="flex justify-center gap-2">
                                                <a href="/books/edit/<?= $book['id'] ?>" class="inline-flex items-center justify-center rounded text-sm font-semibold py-1.5 px-3 bg-white text-indigo-600 border border-indigo-200 hover:bg-indigo-50 transition-all">Edit</a>
                                                <a href="/books/delete/<?= $book['id'] ?>" class="inline-flex items-center justify-center rounded text-sm font-semibold py-1.5 px-3 bg-white text-red-600 border border-red-200 hover:bg-red-50 transition-all" onclick="return confirm('Anda yakin ingin menghapus buku ini secara permanen?')">Hapus</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const flashMessage = document.getElementById('flash-message');
    if (flashMessage) {
        setTimeout(() => {
            flashMessage.style.opacity = '0';
            setTimeout(() => {
                flashMessage.style.display = 'none';
            }, 300);
        }, 2000);
    }
</script>
<?= $this->endSection() ?>