@extends('layouts.admin')

@section('title', 'Detail Pesan')
@section('header', 'Detail Pesan')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <a href="{{ route('messages.index') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-slate-500 hover:text-blue-600 transition-colors">
        <i class='bx bx-arrow-back text-lg'></i> Kembali ke Daftar Pesan
    </a>
    <form action="{{ route('messages.destroy', $message->id) }}" method="POST" onsubmit="return confirm('Hapus pesan ini?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="inline-flex items-center gap-2 px-4 py-2 bg-red-50 text-red-600 hover:bg-red-100 rounded-xl text-sm font-bold transition-colors">
            <i class='bx bx-trash text-lg'></i> Hapus Pesan
        </button>
    </form>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
    <div class="p-6 md:p-8 border-b border-slate-100 bg-slate-50">
        <div class="flex items-start justify-between gap-4">
            <div>
                <h3 class="text-2xl font-bold text-slate-800 mb-2">{{ ucfirst($message->subject) }}</h3>
                <div class="flex items-center gap-4 text-sm text-slate-500">
                    <span class="flex items-center gap-1.5"><i class='bx bx-user'></i> {{ $message->name }}</span>
                    <span class="w-1 h-1 rounded-full bg-slate-300"></span>
                    <span class="flex items-center gap-1.5"><i class='bx bx-phone'></i> {{ $message->phone }}</span>
                </div>
            </div>
            <div class="text-right shrink-0">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest block mb-1">Diterima Pada</span>
                <span class="text-sm font-medium text-slate-700">{{ $message->created_at->format('d M Y, H:i') }}</span>
            </div>
        </div>
    </div>
    
    <div class="p-6 md:p-8">
        <div class="prose prose-slate max-w-none">
            <h4 class="text-sm font-bold text-slate-800 uppercase tracking-wider mb-4 border-b border-slate-100 pb-2">Isi Pesan:</h4>
            <div class="bg-slate-50 p-6 rounded-xl border border-slate-100 text-slate-700 leading-relaxed whitespace-pre-wrap">{{ $message->message }}</div>
        </div>
        
        <div class="mt-8 pt-6 border-t border-slate-100 flex gap-3">
            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $message->phone) }}" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl text-sm font-bold transition-colors shadow-sm hover:opacity-90 text-white" style="background-color: #25D366;">
                <i class='bx bxl-whatsapp text-xl'></i> Balas via WhatsApp
            </a>
            <a href="tel:{{ preg_replace('/[^0-9]/', '', $message->phone) }}" class="inline-flex items-center gap-2 px-6 py-3 bg-white border border-slate-200 hover:border-slate-300 hover:bg-slate-50 text-slate-700 rounded-xl text-sm font-bold transition-colors shadow-sm">
                <i class='bx bx-phone-call text-xl'></i> Telepon
            </a>
        </div>
    </div>
</div>
@endsection
