@extends('layouts.admin')

@section('title', 'Pesan Masuk')
@section('header', 'Pesan Masuk')

@section('content')
<div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
    <div class="p-6 border-b border-slate-100 flex items-center justify-between">
        <h3 class="text-lg font-bold text-slate-800">Daftar Pesan Masuk</h3>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider">
                    <th class="px-6 py-4 font-bold">Nama / Kontak</th>
                    <th class="px-6 py-4 font-bold">Topik</th>
                    <th class="px-6 py-4 font-bold">Status</th>
                    <th class="px-6 py-4 font-bold">Tanggal</th>
                    <th class="px-6 py-4 font-bold text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-sm">
                @forelse($messages as $message)
                <tr class="hover:bg-slate-50 transition-colors {{ $message->is_read ? 'bg-white' : 'bg-blue-50/30' }}">
                    <td class="px-6 py-4">
                        <div class="font-bold text-slate-800">{{ $message->name }}</div>
                        <div class="text-slate-500 text-xs mt-0.5">{{ $message->phone }}</div>
                    </td>
                    <td class="px-6 py-4 font-medium text-slate-700">
                        {{ ucfirst($message->subject) }}
                    </td>
                    <td class="px-6 py-4">
                        @if($message->is_read)
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-xs font-semibold bg-slate-100 text-slate-600">
                                <i class='bx bx-check-double text-sm'></i> Dibaca
                            </span>
                        @else
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-xs font-semibold bg-blue-100 text-blue-700">
                                <i class='bx bx-envelope text-sm'></i> Baru
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-slate-500">
                        {{ $message->created_at->format('d M Y, H:i') }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex items-center justify-end gap-2">
                            <a href="{{ route('messages.show', $message->id) }}" class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors" title="Lihat Pesan">
                                <i class='bx bx-show text-xl'></i>
                            </a>
                            <form action="{{ route('messages.destroy', $message->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors" title="Hapus">
                                    <i class='bx bx-trash text-xl'></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-10 text-center text-slate-500">
                        <div class="flex flex-col items-center justify-center">
                            <i class='bx bx-inbox text-4xl mb-3 text-slate-300'></i>
                            <p>Belum ada pesan masuk.</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
