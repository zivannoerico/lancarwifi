@extends('layouts.admin')

@section('header', 'Manajemen Paket Internet')

@section('content')

<div class="mb-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
    <div>
        <h2 class="text-2xl font-bold text-slate-800">Daftar Paket</h2>
        <p class="text-slate-500 text-sm mt-1">Kelola semua pilihan paket internet yang ditawarkan ke pelanggan.</p>
    </div>
    <a href="{{ route('packages.create') }}" class="inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-blue-600 text-white font-semibold rounded-xl hover:bg-blue-700 hover:shadow-lg hover:shadow-blue-600/20 transition-all">
        <i class='bx bx-plus text-xl'></i> Tambah Paket
    </a>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50/80 border-b border-slate-100">
                    <th class="py-4 px-6 font-semibold text-slate-600 text-sm">Nama Paket</th>
                    <th class="py-4 px-6 font-semibold text-slate-600 text-sm">Kecepatan</th>
                    <th class="py-4 px-6 font-semibold text-slate-600 text-sm">Harga</th>
                    <th class="py-4 px-6 font-semibold text-slate-600 text-sm">Status</th>
                    <th class="py-4 px-6 font-semibold text-slate-600 text-sm text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($packages as $pkg)
                <tr class="hover:bg-slate-50/50 transition-colors group">
                    <td class="py-4 px-6">
                        <div class="font-bold text-slate-800">{{ $pkg->name }}</div>
                        <div class="text-xs text-slate-500 mt-0.5 truncate max-w-[200px]" title="{{ $pkg->features }}">{{ $pkg->features ?: 'Tidak ada fitur tercatat' }}</div>
                    </td>
                    <td class="py-4 px-6">
                        <div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-blue-50 text-blue-700 font-semibold text-sm">
                            <i class='bx bx-tachometer'></i> {{ $pkg->speed }} Mbps
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <div class="font-semibold text-slate-700">Rp {{ number_format($pkg->price, 0, ',', '.') }}</div>
                        <div class="text-xs text-slate-400">/ {{ $pkg->duration }}</div>
                    </td>
                    <td class="py-4 px-6">
                        @if($pkg->is_active)
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Aktif
                            </span>
                        @else
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-slate-100 text-slate-600 text-xs font-semibold">
                                <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span> Nonaktif
                            </span>
                        @endif
                    </td>
                    <td class="py-4 px-6 text-right">
                        <div class="flex items-center justify-end gap-2">
                            <a href="{{ route('packages.edit', $pkg->id) }}" class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors tooltip" title="Edit">
                                <i class='bx bx-edit-alt text-xl'></i>
                            </a>
                            <form action="{{ route('packages.destroy', $pkg->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus paket ini? Tindakan ini tidak dapat dibatalkan.');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2 text-red-500 hover:bg-red-50 rounded-lg transition-colors tooltip" title="Hapus">
                                    <i class='bx bx-trash text-xl'></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="py-12 text-center">
                        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-slate-100 text-slate-400 mb-4">
                            <i class='bx bx-package text-3xl'></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-700">Belum Ada Paket</h3>
                        <p class="text-slate-500 mt-1 max-w-sm mx-auto">Anda belum menambahkan paket internet apapun. Silakan klik tombol "Tambah Paket" untuk memulai.</p>
                        <a href="{{ route('packages.create') }}" class="inline-block mt-4 text-blue-600 font-semibold hover:underline">Tambah Paket Sekarang &rarr;</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($packages->hasPages())
    <div class="px-6 py-4 border-t border-slate-100 bg-slate-50/50">
        {{ $packages->links() }}
    </div>
    @endif
</div>

@endsection
