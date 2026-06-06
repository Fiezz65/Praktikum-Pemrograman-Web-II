<?= $this->extend('layout') ?>

<?= $this->section('title') ?>
Login
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="flex-grow flex items-center justify-center p-4 bg-gradient-to-br from-indigo-100 via-white to-cyan-50">
    <div class="w-full max-w-md">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">
                PRAK701
            </h2>
            <p class="mt-2 text-sm text-slate-600">Selamat datang! Silakan masuk.</p>
        </div>

        <div class="bg-white/90 backdrop-blur-sm p-8 rounded-2xl shadow-lg border border-slate-200">
            <?php if (session()->getFlashdata('error')) : ?>
                <div class="mb-5 bg-red-100 border-l-4 border-red-500 text-sm text-red-700 p-4 rounded-lg font-medium">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <form class="space-y-6" action="/login" method="POST" autocomplete="off">
                <div>
                    <label for="username" class="block text-sm font-medium text-slate-700 mb-1">Username</label>
                    <input id="username" name="username" type="text" autocomplete="new-password" placeholder="Masukkan username Anda" class="block w-full rounded-lg border border-slate-300 shadow-sm py-2.5 px-4 placeholder:text-slate-400/70 text-slate-900 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 outline-none transition-all sm:text-sm">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-slate-700 mb-1">Password</label>
                    <div class="relative">
                        <input id="password" name="password" type="password" autocomplete="new-password" placeholder="Masukkan password Anda" class="block w-full rounded-lg border border-slate-300 shadow-sm py-2.5 px-4 pr-10 placeholder:text-slate-400/70 text-slate-900 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 outline-none transition-all sm:text-sm">
                        <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 flex items-center pr-3 text-slate-400 hover:text-slate-600 focus:outline-none rounded-r-lg">
                            <svg id="eyeIconOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            <svg id="eyeIconClosed" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 hidden">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full flex justify-center items-center rounded-lg bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-all">
                        Masuk
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');
    const eyeIconOpen = document.getElementById('eyeIconOpen');
    const eyeIconClosed = document.getElementById('eyeIconClosed');

    togglePassword.addEventListener('click', function () {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        
        eyeIconOpen.classList.toggle('hidden', type !== 'password');
        eyeIconClosed.classList.toggle('hidden', type === 'password');
    });
</script>
<?= $this->endSection() ?>