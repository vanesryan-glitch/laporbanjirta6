<div class="card">
    <div class="card-header">
        <h3>{{ $laporan->lokasi }}</h3>

        {{-- Menentukan status berdasarkan tinggi genangan --}}
        @if ($laporan->tinggi_genangan < 30)
            <span class="badge waspada">Waspada</span>
        @elseif ($laporan->tinggi_genangan <= 70)
            <span class="badge siaga">Siaga</span>
        @else
            <span class="badge awas">Awas</span>
        @endif
    </div>

    <p>Pelapor: {{ $laporan->nama_pelapor }}</p>
    <p>Tinggi genangan: {{ $laporan->tinggi_genangan }} cm</p>
    <p>Tanggal kejadian: {{ $laporan->tanggal_kejadian }}</p>
</div>