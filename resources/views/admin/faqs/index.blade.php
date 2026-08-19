@extends('layouts.admin')

@section('header', 'Manajemen FAQ')

@section('content')
<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="px-6 py-4 border-b border-slate-200 bg-slate-50 flex items-center justify-between">
        <h3 class="font-bold text-slate-800 text-lg">Daftar Pertanyaan (FAQ)</h3>
        <a href="{{ route('faqs.create') }}" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-semibold transition-colors flex items-center gap-2 text-sm">
            <i class='bx bx-plus text-lg'></i> Tambah FAQ
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm whitespace-nowrap">
            <thead class="bg-white text-slate-500 font-semibold border-b border-slate-200">
                <tr>
                    <th class="py-4 px-6 w-16 text-center">No</th>
                    <th class="py-4 px-6">Pertanyaan</th>
                    <th class="py-4 px-6 text-center">Status</th>
                    <th class="py-4 px-6 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($faqs as $faq)
                <tr class="hover:bg-slate-50 transition-colors group">
                    <td class="py-4 px-6 text-center text-slate-500">{{ $loop->iteration + $faqs->firstItem() - 1 }}</td>
                    <td class="py-4 px-6 text-slate-800 font-medium max-w-xs truncate" title="{{ $faq->question }}">{{ $faq->question }}</td>
                    <td class="py-4 px-6 text-center">
                        @if($faq->is_active)
                            <span class="px-3 py-1 bg-green-100 text-green-700 text-xs rounded-full font-bold">Publish</span>
                        @else
                            <span class="px-3 py-1 bg-slate-100 text-slate-600 text-xs rounded-full font-bold">Draft</span>
                        @endif
                    </td>
                    <td class="py-4 px-6 text-right">
                        <div class="flex items-center justify-end gap-2">
                            <a href="{{ route('faqs.edit', $faq->id) }}" class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors tooltip" title="Edit">
                                <i class='bx bx-edit-alt text-xl'></i>
                            </a>
                            <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus FAQ ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors tooltip" title="Hapus">
                                    <i class='bx bx-trash text-xl'></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="py-8 text-center text-slate-500 flex flex-col items-center justify-center">
                        <i class='bx bx-folder-open text-4xl mb-2 text-slate-300'></i>
                        <p>Belum ada data FAQ.</p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($faqs->hasPages())
    <div class="px-6 py-4 border-t border-slate-200">
        {{ $faqs->links() }}
    </div>
    @endif
</div>
@endsection
