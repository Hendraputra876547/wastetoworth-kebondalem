<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Waste to Worth | Transformasi Sampah Menjadi Sumber Daya</title>
    <meta name="description" content="Edukasi pengabdian masyarakat: pilah sampah, bank sampah, dan circular economy.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { primary: '#16A34A', earth: '#8B5A2B', accent: '#FBBF24', surface: '#F9FAFB', ink: '#1F2937' },
                    fontFamily: { heading: ['Montserrat', 'sans-serif'], body: ['Roboto', 'sans-serif'] }
                }
            }
        }
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>

    <style>
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        @keyframes floaty { 0%,100% { transform: translateY(0) } 50% { transform: translateY(-14px) } }
        .floaty { animation: floaty 5s ease-in-out infinite; }
        @media (prefers-reduced-motion: reduce) { .floaty { animation: none; } }
        :focus-visible { outline: 3px solid #FBBF24; outline-offset: 2px; }
    </style>
</head>

<body class="bg-surface text-ink font-body antialiased" x-data="{ open: false }">

    {{-- ============ HEADER ============ --}}
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur border-b border-gray-200">
        <div class="mx-auto max-w-6xl flex items-center justify-between px-4 py-2">
            <a href="#beranda" class="flex items-center gap-2 sm:gap-4" aria-label="Waste to Worth">
                <img src="{{ asset('images/Logo-UNAIR (2).png') }}" alt="Logo Universitas Airlangga" class="h-9 sm:h-12 w-auto">
                <img src="{{ asset('images/Logo SDGs UNAIR Colour Wheel with UNAIR Branding.png') }}" alt="Logo SDGs UNAIR" class="h-9 sm:h-12 w-auto">
                <img src="{{ asset('images/Kampus-Berdampak-UNAIR.png') }}" alt="Logo Kampus Berdampak UNAIR" class="h-8 sm:h-11 w-auto">
            </a>

            <button @click="open = !open" class="p-2 rounded-lg text-ink hover:bg-primary/10 transition"
                    :aria-expanded="open" aria-label="Buka menu">
                <svg x-show="!open" class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
                <svg x-show="open" x-cloak class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" d="M6 6l12 12M18 6L6 18"/></svg>
            </button>
        </div>

        {{-- Menu (mobile & desktop dropdown) --}}
        <nav x-show="open" x-cloak @click.outside="open = false"
             x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
             class="absolute inset-x-0 top-full bg-white border-b border-gray-200 shadow-lg">
            <ul class="mx-auto max-w-6xl px-4 py-3 grid sm:grid-cols-2 gap-1 font-heading font-semibold text-sm">
                @foreach ([
                    ['#konsep', '1. Konsep Circular Economy'],
                    ['#jenis', '2. Jenis & Dampak Sampah'],
                    ['#lembaga', '3. Lembaga Pengelola'],
                    ['#ekowisata', '4. Ekowisata Sampah'],
                    ['#memilah', '5. Langkah Memilah'],
                    ['#mengolah', '6. Langkah Mengolah'],
                    ['#digital', '7. Digitalisasi Bank Sampah'],
                ] as [$href, $label])
                    <li><a href="{{ $href }}" @click="open = false" class="block rounded-lg px-3 py-3 hover:bg-primary hover:text-white transition">{{ $label }}</a></li>
                @endforeach
            </ul>
        </nav>
    </header>

    {{-- ============ HERO ============ --}}
    <section id="beranda" class="relative overflow-hidden bg-gradient-to-b from-green-50 to-surface">
        <div class="absolute -top-20 -right-20 h-72 w-72 rounded-full bg-accent/30 blur-3xl"></div>
        <div class="absolute -bottom-24 -left-16 h-72 w-72 rounded-full bg-primary/20 blur-3xl"></div>

        <div class="relative mx-auto max-w-6xl px-4 py-14 sm:py-20 lg:py-28 grid lg:grid-cols-2 gap-10 items-center">
            <div>
                <p data-aos="fade-down" class="inline-block rounded-full bg-primary/10 text-primary font-heading font-semibold text-xs sm:text-sm px-4 py-1.5 mb-5">
                    Pengabdian Masyarakat · Universitas Airlangga
                </p>
                <h1 data-aos="fade-up" class="font-heading font-extrabold text-2xl sm:text-4xl lg:text-5xl leading-tight text-ink">
                    <span class="text-primary">WASTE TO WORTH:</span> TRANSFORMASI SAMPAH MENJADI SUMBER DAYA DAN PRODUK BERNILAI MELALUI CIRCULAR ECONOMY
                </h1>
                <p data-aos="fade-up" data-aos-delay="150" class="mt-5 text-lg text-gray-600 max-w-xl">
                    Ayo pilah sampahmu dan bank sampah, ubah sampah jadi berkah ✨
                </p>
                <div data-aos="fade-up" data-aos-delay="300" class="mt-8 flex flex-wrap gap-3">
                    <a href="#konsep" class="rounded-full bg-primary px-7 py-3.5 font-heading font-bold text-white shadow-md hover:scale-105 hover:shadow-lg hover:bg-green-700 transition-all duration-300">Mulai Belajar</a>
                    <a href="#digital" class="rounded-full border-2 border-earth px-7 py-3.5 font-heading font-bold text-earth hover:scale-105 hover:bg-earth hover:text-white transition-all duration-300">Lihat Bank Sampah</a>
                </div>
            </div>

            <div data-aos="zoom-in" data-aos-delay="200" class="relative">
                <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?auto=format&fit=crop&w=900&q=70"
                     alt="Memilah sampah untuk didaur ulang" class="floaty rounded-3xl shadow-2xl aspect-[4/3] w-full object-cover border-4 border-white">
                <div class="absolute -bottom-4 -left-2 sm:-left-6 rounded-2xl bg-accent px-4 py-3 shadow-lg font-heading font-bold text-sm text-ink">♻️ Reduce · Reuse · Recycle</div>
            </div>
        </div>
    </section>

    {{-- ============ MATERI 1 & 2 : GRID CARDS ============ --}}
    <section id="konsep" class="mx-auto max-w-6xl px-4 py-14 sm:py-20 scroll-mt-16">
        <div class="max-w-2xl" data-aos="fade-up">
            <h2 class="font-heading font-bold text-2xl sm:text-4xl">Dasar yang perlu kamu tahu</h2>
            <p class="mt-3 text-gray-600">Dua materi inti sebelum mulai beraksi: cara kerja ekonomi sirkular dan kenali sampah di sekitarmu.</p>
        </div>

        {{-- Materi 1 --}}
        <h3 class="mt-10 font-heading font-bold text-lg text-primary" data-aos="fade-right">Materi 1 · Konsep Circular Economy</h3>
        <div class="mt-4 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ([
                ['🔄', 'Ekonomi Linear vs Sirkular', 'Linear: ambil, buat, buang. Sirkular: bahan terus dipakai kembali agar tidak jadi limbah.'],
                ['🌱', 'Prinsip 3R', 'Reduce mengurangi, Reuse memakai ulang, Recycle mendaur ulang menjadi bahan baru.'],
                ['💰', 'Sampah Punya Nilai', 'Plastik, kertas, logam, dan sisa makanan dapat berubah menjadi uang dan produk.'],
                ['🌍', 'Dampak untuk Bumi', 'Mengurangi timbunan TPA, emisi metana, dan pencemaran air serta tanah.'],
            ] as $i => [$icon, $title, $text])
                <article data-aos="fade-up" data-aos-delay="{{ $i * 100 }}"
                         class="rounded-2xl bg-white p-6 border border-gray-100 shadow-sm hover:scale-105 hover:shadow-lg transition-all duration-300">
                    <div class="grid h-14 w-14 place-items-center rounded-xl bg-primary/10 text-3xl">{{ $icon }}</div>
                    <h4 class="mt-4 font-heading font-bold text-base">{{ $title }}</h4>
                    <p class="mt-2 text-sm text-gray-600">{{ $text }}</p>
                </article>
            @endforeach
        </div>

        {{-- Materi 2 --}}
        <h3 id="jenis" class="mt-14 font-heading font-bold text-lg text-earth scroll-mt-20" data-aos="fade-right">Materi 2 · Jenis & Dampak Sampah</h3>
        <div class="mt-4 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ([
                ['🍂', 'Organik', 'Sisa makanan, daun, ranting. Bisa jadi kompos dan pakan maggot.', 'border-primary'],
                ['🧴', 'Anorganik', 'Plastik, kaca, logam, kertas. Dapat didaur ulang bila terpilah.', 'border-accent'],
                ['🔋', 'B3 (Berbahaya)', 'Baterai, lampu, obat kedaluwarsa. Serahkan ke tempat khusus.', 'border-red-500'],
                ['🗑️', 'Residu', 'Popok, puntung, kemasan kotor. Sulit diolah, kurangi sejak awal.', 'border-earth'],
            ] as $i => [$icon, $title, $text, $border])
                <article data-aos="zoom-in" data-aos-delay="{{ $i * 100 }}"
                         class="rounded-2xl bg-white p-6 border-t-4 {{ $border }} shadow-sm hover:scale-105 hover:shadow-lg transition-all duration-300">
                    <div class="text-4xl">{{ $icon }}</div>
                    <h4 class="mt-3 font-heading font-bold text-base">{{ $title }}</h4>
                    <p class="mt-2 text-sm text-gray-600">{{ $text }}</p>
                </article>
            @endforeach
        </div>
    </section>

    {{-- ============ MATERI 3 & 4 : ALTERNATING ============ --}}
    <section class="bg-white py-14 sm:py-20">
        <div class="mx-auto max-w-6xl px-4 space-y-16 sm:space-y-24">

            {{-- Materi 3: image left, text right --}}
            <div id="lembaga" class="grid md:grid-cols-2 gap-8 md:gap-12 items-center scroll-mt-20">
                <img data-aos="fade-right" src="https://images.unsplash.com/photo-1604187351574-c75ca79f5807?auto=format&fit=crop&w=900&q=70"
                     alt="Petugas pengelola sampah komunitas" class="rounded-3xl shadow-xl aspect-[4/3] w-full object-cover hover:scale-105 transition-all duration-300">
                <div data-aos="fade-left">
                    <span class="font-heading font-bold text-sm text-primary">Materi 3</span>
                    <h2 class="mt-1 font-heading font-bold text-2xl sm:text-3xl">Lembaga Pengelola Sampah</h2>
                    <p class="mt-3 text-gray-600">Pengelolaan sampah adalah kerja bersama. Kenali siapa yang berperan dari rumah hingga pemrosesan akhir.</p>
                    <ul class="mt-5 space-y-3 text-sm">
                        <li class="flex gap-3"><span class="text-primary font-bold">✓</span><span><b>Bank Sampah:</b> menabung sampah terpilah dan mendapat nilai ekonomi.</span></li>
                        <li class="flex gap-3"><span class="text-primary font-bold">✓</span><span><b>TPS3R:</b> tempat pengolahan sampah dengan prinsip reduce, reuse, recycle.</span></li>
                        <li class="flex gap-3"><span class="text-primary font-bold">✓</span><span><b>Dinas Lingkungan Hidup & Pemerintah Desa/Kelurahan:</b> regulasi, pengangkutan, dan pembinaan.</span></li>
                    </ul>
                </div>
            </div>

            {{-- Materi 4: text left, image right --}}
            <div id="ekowisata" class="grid md:grid-cols-2 gap-8 md:gap-12 items-center scroll-mt-20">
                <div data-aos="fade-right" class="order-2 md:order-1">
                    <span class="font-heading font-bold text-sm text-earth">Materi 4</span>
                    <h2 class="mt-1 font-heading font-bold text-2xl sm:text-3xl">Ekowisata Berbasis Sampah</h2>
                    <p class="mt-3 text-gray-600">Kampung yang sukses mengelola sampah dapat menjadi destinasi edukasi yang menggerakkan ekonomi warga.</p>
                    <ul class="mt-5 space-y-3 text-sm">
                        <li class="flex gap-3"><span class="text-earth font-bold">✓</span><span><b>Wisata edukasi:</b> pengunjung belajar memilah, mengompos, dan membuat kerajinan.</span></li>
                        <li class="flex gap-3"><span class="text-earth font-bold">✓</span><span><b>Produk warga:</b> tas, pot, dan dekorasi dari sampah anorganik.</span></li>
                        <li class="flex gap-3"><span class="text-earth font-bold">✓</span><span><b>Taman & urban farming:</b> memanfaatkan kompos untuk ruang hijau kampung.</span></li>
                    </ul>
                </div>
                <img data-aos="fade-left" src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?auto=format&fit=crop&w=900&q=70"
                     alt="Taman hijau ekowisata kampung" class="order-1 md:order-2 rounded-3xl shadow-xl aspect-[4/3] w-full object-cover hover:scale-105 transition-all duration-300">
            </div>
        </div>
    </section>

    {{-- ============ MATERI 5 & 6 : SWIPEABLE ============ --}}
    <section class="py-14 sm:py-20 overflow-hidden">
        <div class="mx-auto max-w-6xl px-4">

            {{-- Materi 5 --}}
            <div id="memilah" class="scroll-mt-20" data-aos="fade-up">
                <span class="font-heading font-bold text-sm text-primary">Materi 5</span>
                <h2 class="font-heading font-bold text-2xl sm:text-3xl">Langkah Memilah Sampah</h2>
                <p class="mt-2 text-gray-600 text-sm">Geser kartu untuk melihat tiap langkah <span class="sm:hidden">→</span></p>
            </div>
            <div class="mt-6 -mx-4 px-4 flex gap-4 overflow-x-auto snap-x snap-mandatory no-scrollbar pb-4">
                @foreach ([
                    ['Siapkan 3 wadah', 'Pisahkan wadah untuk organik, anorganik, dan B3 di rumah.'],
                    ['Pisahkan saat membuang', 'Langsung masukkan sampah ke wadah yang tepat, jangan dicampur.'],
                    ['Bersihkan anorganik', 'Bilas botol dan kemasan, lalu keringkan agar bernilai jual.'],
                    ['Lipat & kumpulkan', 'Pipihkan botol dan kardus supaya hemat tempat.'],
                    ['Setor ke bank sampah', 'Bawa sampah anorganik terpilah sesuai jadwal setoran.'],
                ] as $i => [$title, $text])
                    <article data-aos="fade-left" data-aos-delay="{{ $i * 80 }}"
                             class="snap-start shrink-0 w-[78%] sm:w-72 rounded-2xl bg-white p-6 border border-gray-100 shadow-sm hover:scale-105 hover:shadow-lg transition-all duration-300">
                        <div class="grid h-10 w-10 place-items-center rounded-full bg-primary text-white font-heading font-bold">{{ $i + 1 }}</div>
                        <h3 class="mt-4 font-heading font-bold">{{ $title }}</h3>
                        <p class="mt-2 text-sm text-gray-600">{{ $text }}</p>
                    </article>
                @endforeach
            </div>

            {{-- Materi 6 --}}
            <div id="mengolah" class="mt-14 scroll-mt-20" data-aos="fade-up">
                <span class="font-heading font-bold text-sm text-earth">Materi 6</span>
                <h2 class="font-heading font-bold text-2xl sm:text-3xl">Langkah Mengolah Sampah</h2>
                <p class="mt-2 text-gray-600 text-sm">Dari sampah terpilah menjadi produk bernilai <span class="sm:hidden">→</span></p>
            </div>
            <div class="mt-6 -mx-4 px-4 flex gap-4 overflow-x-auto snap-x snap-mandatory no-scrollbar pb-4">
                @foreach ([
                    ['🌿', 'Kompos', 'Cacah sisa organik, campur dengan bahan cokelat, aduk rutin hingga matang.'],
                    ['🪱', 'Maggot BSF', 'Sisa makanan diurai larva untuk pakan ternak dan ikan.'],
                    ['🧪', 'Eco-enzyme', 'Fermentasi kulit buah, gula, dan air selama 3 bulan.'],
                    ['🎨', 'Kerajinan', 'Ubah plastik dan kardus menjadi pot, tas, dan hiasan.'],
                    ['🏭', 'Daur ulang', 'Plastik, kertas, dan logam dikirim ke pengepul atau pabrik.'],
                ] as $i => [$icon, $title, $text])
                    <article data-aos="fade-left" data-aos-delay="{{ $i * 80 }}"
                             class="snap-start shrink-0 w-[78%] sm:w-72 rounded-2xl bg-white p-6 border-b-4 border-earth shadow-sm hover:scale-105 hover:shadow-lg transition-all duration-300">
                        <div class="text-4xl">{{ $icon }}</div>
                        <h3 class="mt-3 font-heading font-bold">{{ $title }}</h3>
                        <p class="mt-2 text-sm text-gray-600">{{ $text }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============ MATERI 7 : DIGITALISASI ============ --}}
    <section id="digital" class="scroll-mt-16 bg-gradient-to-br from-primary to-green-800 text-white py-14 sm:py-20">
        <div class="mx-auto max-w-6xl px-4 grid md:grid-cols-2 gap-10 items-center">
            <div data-aos="fade-right">
                <span class="font-heading font-bold text-sm text-accent">Materi 7</span>
                <h2 class="mt-1 font-heading font-extrabold text-2xl sm:text-4xl leading-tight">Digitalisasi Bank Sampah dengan QR Code</h2>
                <p class="mt-4 text-green-50 max-w-lg">Setiap nasabah punya QR unik. Petugas memindai, menimbang, dan saldo tabungan sampah tercatat otomatis, transparan, dan bisa dipantau dari ponsel.</p>

                <ol class="mt-6 space-y-4">
                    @foreach ([
                        ['Daftar & dapatkan QR', 'Nasabah mendaftar dan menerima kartu atau kode QR pribadi.'],
                        ['Setor & pindai', 'Petugas memindai QR, menimbang sampah, dan memilih kategori.'],
                        ['Saldo masuk otomatis', 'Nilai setoran langsung tercatat pada akun bank sampah.'],
                        ['Pantau & tukar', 'Lihat riwayat setoran, lalu tukar saldo dengan uang atau kebutuhan.'],
                    ] as $i => [$title, $text])
                        <li data-aos="fade-up" data-aos-delay="{{ $i * 100 }}" class="flex gap-4">
                            <span class="grid h-9 w-9 shrink-0 place-items-center rounded-full bg-accent font-heading font-bold text-ink">{{ $i + 1 }}</span>
                            <p><b class="font-heading">{{ $title }}.</b> <span class="text-green-50 text-sm">{{ $text }}</span></p>
                        </li>
                    @endforeach
                </ol>
            </div>

            <div data-aos="zoom-in" class="mx-auto w-full max-w-xs">
                <div class="rounded-3xl bg-white p-6 text-ink shadow-2xl hover:scale-105 transition-all duration-300">
                    <p class="font-heading font-bold text-center text-primary">Kartu Nasabah Bank Sampah</p>
                    <svg viewBox="0 0 100 100" class="mx-auto mt-4 h-44 w-44" role="img" aria-label="Contoh kode QR">
                        <rect width="100" height="100" fill="#fff"/>
                        <g fill="#1F2937">
                            <path d="M5 5h28v28H5zM67 5h28v28H67zM5 67h28v28H5z"/>
                        </g>
                        <g fill="#fff"><path d="M11 11h16v16H11zM73 11h16v16H73zM11 73h16v16H11z"/></g>
                        <g fill="#16A34A"><path d="M16 16h6v6h-6zM78 16h6v6h-6zM16 78h6v6h-6z"/></g>
                        <g fill="#1F2937">
                            <path d="M40 8h6v6h-6zM52 8h6v12h-6zM40 22h12v6H40zM8 40h6v6H8zM20 40h12v6H20zM40 40h6v12h-6zM52 46h14v6H52zM72 40h6v6h-6zM84 40h10v6H84zM8 52h12v6H8zM28 52h6v12h-6zM40 58h12v6H40zM58 58h6v12h-6zM70 52h6v14h-6zM82 58h12v6H82zM40 72h6v10h-6zM52 76h12v6H52zM72 72h6v6h-6zM84 76h10v12H84zM52 88h20v6H52z"/>
                        </g>
                    </svg>
                    <p class="mt-3 text-center text-xs text-gray-500">Pindai untuk mencatat setoran</p>
                    <div class="mt-4 flex items-center justify-between rounded-xl bg-green-50 px-4 py-3">
                        <span class="text-xs text-gray-600">Saldo tabungan</span>
                        <span class="font-heading font-bold text-primary">Rp 48.500</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============ FOOTER ============ --}}
    <footer class="bg-ink text-gray-300 py-10">
        <div class="mx-auto max-w-6xl px-4 flex flex-col sm:flex-row items-center justify-between gap-4 text-sm text-center sm:text-left">
            <div class="flex items-center gap-3 rounded-xl bg-white px-3 py-2">
                <img src="{{ asset('images/Logo-UNAIR (2).png') }}" alt="" class="h-8 w-auto">
                <img src="{{ asset('images/Logo SDGs UNAIR Colour Wheel with UNAIR Branding.png') }}" alt="" class="h-8 w-auto">
                <img src="{{ asset('images/Kampus-Berdampak-UNAIR.png') }}" alt="" class="h-7 w-auto">
            </div>
            <p>© {{ date('Y') }} Waste to Worth · Pengabdian Masyarakat, Universitas Airlangga</p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init({ duration: 700, easing: 'ease-out-cubic', once: true, offset: 60,
                       disable: window.matchMedia('(prefers-reduced-motion: reduce)').matches });
        });
    </script>
    <style>[x-cloak]{display:none !important}</style>
</body>
</html>
