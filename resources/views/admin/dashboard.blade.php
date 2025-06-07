@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <nav class="flex text-sm text-gray-600" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6"></path></svg>
                    Dashboard
                </a>
            </li>
        </ol>
    </nav>
    
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800 py-4">Selamat Datang di Dashboard</h1>
    </div>
    
    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-blue-600 text-white rounded-lg p-6 shadow flex flex-col items-center">
            <div class="text-3xl font-bold">{{ $totalSekolah }}</div>
            <div class="mt-2">Data Sekolah</div>
        </div>
        <div class="bg-green-500 text-white rounded-lg p-6 shadow flex flex-col items-center">
            <div class="text-3xl font-bold">{{ $totalGuru }}</div>
            <div class="mt-2">Total Guru</div>
        </div>
        <div class="bg-yellow-400 text-white rounded-lg p-6 shadow flex flex-col items-center">
            <div class="text-3xl font-bold">{{ $totalSiswa }}</div>
            <div class="mt-2">Total Siswa</div>
        </div>
        <div class="bg-purple-500 text-white rounded-lg p-6 shadow flex flex-col items-center">
            <div class="text-3xl font-bold">{{ $totalDistribusi }}</div>
            <div class="mt-2">Total Distribusi</div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <div class="flex justify-between items-center mb-4">
            <div>
                <h3 class="text-lg font-semibold mb-1">Statistik Makan Gratis</h3>
                <p class="text-base text-gray-500">Siswa sudah & belum makan</p>
            </div>
            <div>
                <select id="statistikFilter" class="border rounded px-2 py-1 text-sm">
                    <option value="hari">Hari Ini</option>
                    <option value="minggu">Minggu Ini</option>
                    <option value="bulan">Bulan Ini</option>
                </select>
            </div>
        </div>
        <div class="flex items-center justify-between mb-2">
            <div>
                <span class="text-2xl font-bold text-blue-700">{{ $siswaSudahMakan }}</span>
                <span class="ml-2 text-sm text-gray-500">Sudah makan</span>
            </div>
            <div>
                <span class="text-2xl font-bold text-red-600">{{ $siswaBelumMakan ?? 0 }}</span>
                <span class="ml-2 text-sm text-gray-500">Belum makan</span>
            </div>
        </div>
        <canvas id="statistikChart" height="100"></canvas>
    </div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Data dari controller
    const dataStatistik = {
        hari: {
            labels: ["Hari Ini"],
            sudah: [{{ $siswaSudahMakan }}],
            belum: [{{ $siswaBelumMakan ?? 0 }}]
        },
        minggu: {
            labels: {!! json_encode($labelsMinggu ?? ['Sen','Sel','Rab','Kam','Jum','Sab','Min']) !!},
            sudah: {!! json_encode($dataMingguSudah ?? [0,0,0,0,0,0,0]) !!},
            belum: {!! json_encode($dataMingguBelum ?? [0,0,0,0,0,0,0]) !!}
        },
        bulan: {
            labels: {!! json_encode($labelsBulan ?? ['1','2','3','4','5','6','7']) !!},
            sudah: {!! json_encode($dataBulanSudah ?? [0,0,0,0,0,0,0]) !!},
            belum: {!! json_encode($dataBulanBelum ?? [0,0,0,0,0,0,0]) !!}
        }
    };

    let ctx = document.getElementById('statistikChart').getContext('2d');
    let statistikChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: dataStatistik.hari.labels,
            datasets: [
                {
                    label: 'Sudah Makan',
                    data: dataStatistik.hari.sudah,
                    borderColor: '#1C64F2',
                    backgroundColor: 'rgba(28,100,242,0.15)',
                    fill: true,
                    tension: 0.4,
                    pointRadius: 4,
                    pointBackgroundColor: '#1C64F2'
                },
                {
                    label: 'Belum Makan',
                    data: dataStatistik.hari.belum,
                    borderColor: '#EF4444',
                    backgroundColor: 'rgba(239,68,68,0.12)',
                    fill: true,
                    tension: 0.4,
                    pointRadius: 4,
                    pointBackgroundColor: '#EF4444'
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    labels: {
                        color: '#374151',
                        font: { size: 14 }
                    }
                },
                tooltip: {
                    enabled: true,
                    mode: 'index',
                    intersect: false
                }
            },
            scales: {
                x: {
                    grid: { display: false },
                    ticks: { color: '#6B7280', font: { size: 12 } }
                },
                y: {
                    grid: { display: false },
                    beginAtZero: true,
                    ticks: { color: '#6B7280', font: { size: 12 } }
                }
            }
        }
    });

    document.getElementById('statistikFilter').addEventListener('change', function() {
        const val = this.value;
        statistikChart.data.labels = dataStatistik[val].labels;
        statistikChart.data.datasets[0].data = dataStatistik[val].sudah;
        statistikChart.data.datasets[1].data = dataStatistik[val].belum;
        statistikChart.update();
    });
</script>
@endpush