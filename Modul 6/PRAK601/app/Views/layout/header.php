<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= isset($title) ? $title . ' - PRAK601' : 'PRAK601' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-slate-100 text-slate-800 flex flex-col">
<header class="border-b border-slate-200 bg-white/90 backdrop-blur">
    <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
        <a href="/" class="text-lg font-semibold text-slate-900">PRAK601</a>
        <nav class="flex items-center gap-4 text-sm font-medium text-slate-600">
            <a href="/" class="hover:text-slate-900">Beranda</a>
            <a href="/profile" class="hover:text-slate-900">Profil</a>
        </nav>
    </div>
</header>
<main class="flex-1">