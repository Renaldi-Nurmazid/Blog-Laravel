@include('pages/index')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("style/css/bootstrap.min.css") }}">
    <script src="{{ asset("style/js/bootstrap.min.js") }}"></script>
</head>
<body>
        <div>
            <h2 class="m-5 text-center">Langkah-langkah Merakit PC</h2>
        </div>
        <div>
            <iframe class="img-fluid m-5 rounded mx-auto d-block img-responsive" width="300" height="200" src="https://www.youtube.com/embed/CoHGwzxUtfo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div style="margin:2%;padding-left:5%;padding-right:2%">
            <p class="text-justify">
                PC atau personal computer adalah komputer yang digunakan untuk pemakaian pribadi. Misalnya untuk perseorangan, rumah, toko, kantor dan seterusnya yang masih erat kaitannya dengan kebutuhan secara personal. Jadi, istilah PC digunakan untuk menyebut mengenai komputer yang digunakan secara pribadi. Baik untuk kebutuhan lingkungan rumah, maupun lingkup yang lainnya yang masih mengacu pada kebutuhan personal.
            </p>
            <p>Berikut alat dan bahan yang dibutuhkan untuk merakit sebuah pc.
                Alat-alat:
            </p>
            <ol style="1">
                <li>Obeng</li>
                <li>Gelang anti statis</li>
                <li>Tempat Menyimpan baut-baut</li>
                <li>Kabel statis</li>

            </ol>
            <p>Bahan-Bahan: </p>
            <ol>
                <li>Casing</li><p>Fungsi utama dari casing pc yaitu untuk melindungi komponen yang ada dalam komputer. Casing pc juga bisa disebut sebagai rumah dari hardware komputer, hard disk, DVD rom serta perangkat komputer yang lainnya.</p>
                <li>Motherboard</li><p>Motherboard atau mainboard adalah tempat berupa papan yang di atasnya terdapat komponen-komponen dan chip controller yang berfungsi sebagai penghubung antarkomponen hardware. Semua hardware seperti prosesor, VGA, RAM, dan sebagainya akan dihubungkan melalui motherboard.</p>
                <li>Batrai CMOS (Complementary Metal Oxide Semi-conductor)</li><p>Fungsi benda ini adalah memberi pengaturan vital agar tidak terjadi perubahan pada komputer sehingga ketika kamu mengeset waktu, tanggal, dan yang lainnya, semuanya tersimpan walaupun komputer kamu dimatikan. Komponen ini juga memiliki fungsi sebagai RAM yang berkapasitas kecil yang mana hanya memiliki kapasitas 64 byte.</p>
                <li>Processor</li><p>Bahasa awamnya, prosesor adalah otak atau inti dari komputer. Untuk itu, komponen ini bakal menentukan bagaimana kinerja dan performa PC. Usahakan tidak membeli prosesor bekas karena jika kondisinya kurang bagus bisa memperlambat kinerja komputer. Hal yang paling parah adalah komputer tidak akan menyala atau terjadi black screen.</p>
                <li>RAM</li><p>RAM atau Random Access Memory adalah perangkat keras yang bertugas untuk menyimpan memori dalam jangka waktu sementara. Jika komputer dimatikan, maka data akan hilang karena RAM tidak menyimpan data secara permanen.</p>
                <li>SSD</li><p>Perangkat ini memiliki fungsi untuk menyimpan data seperti file dan program secara permanen. Data tersebut tidak bakal hilang meskipun komputer dimatikan, kecuali harddisk terserang virus yang mematikan.</p>
                <li>Hatsink</li><p>Fungsi heatsink sendiri adalah untuk mengendalikan temperatur pada setiap komponen komputer dan laptop yang mempunyai kinerja berat dan menghasilkan banyak energi panas. Tugas utama heatsink yaitu:
                    <ul>
                        <li>Untuk menjaga temperatur komponen CPU dan juga VGA, karena kedua komponen tersebut sangatlah penting untuk dijaga temperaturnya</li>
                        <li>Untuk memastikan bahwa program-program yang ter-instal di komputer ataupun laptop dapat bekerja dengan baik dan sesaui dengan kapasitas optimal dari komponen tersebut.</li>
                        <li>Adapun fungsi lain dari heatsink selain mendinginkan komponen penting yang ada pada komputer dan laptop, adalah membuat operasional perangkat supaya tetap bisa dijalankan.</li>
                    </ul>
                </p>
                <li>VGA</li><p>VGA adalah kependekan dari Video Graphic Adapter. Komponen ini berfungsi mengolah data grafis agar bisa ditampilkan di layar monitor.
                    Biasanya, VGA berguna untuk memainkan game atau memproses desain grafis. Jika membeli komponen ini dalam keadaan bekas, bisa berakibat muncul artefak saat membuka beberapa program, bahkan buruknya lagi no display alias tidak bisa menampilkan gambar sama sekali.
                    </p>
                <li>PSU(Power Supply)</li><p>Jika prosesor diibaratkan otaknya komputer, maka power supply adalah jantungnya komputer. Perangkat berbentuk kotak yang ada di chasing ini memiliki tugas mengalirkan suplai daya untuk menggerakkan komponen-komponen lainnya. Power supply yang bobrok dapat mengakibatkan stuck pada BIOS hingga komputer yang sama sekali tidak bisa menyala</p>
                <li>Termal Paste</li><p>Fungsi utama thermal paste sebenarnya tidak secara langsung untuk mendinginkan,tetapi untuk melancarkan rambatan panas yang dihasilkan oleh komponen menuju heatsink agar mudah dilepaskan ke udara(heat dissipation) sehingga komponen tidak akan cepat panas.</p>    
            </ol>
            <h3>Langkah-langkah Merakit Sebuah Pc:</h3>
            <ol>
                <li>Siapkan sebuah motherboard yang akan digunakan.</li>
                <li>Lalu,masukan processor ke dalam socket LGA hingga cocok dan terpasang dengan sempurna.</li>
                <li>Masukkan RAM pada slot RAM hingga terkunci yang ditandai dengan bunyi click.</li>
                <li>Pasangkan dudukan hatsink sebagai dudukan utama atau pondasi heatsink.</li>
                <li>Sebelum memasangkan heatsink,pastikan heatsink dalam keadaan bersih.</li>
                <li>Beri thermal paste di atas processor sebelum memasangkan heatsink.</li>
                <li>Lalu,pasangkan heatsink di atas processor lalu kunci heatsink hingga berbunyi click dan itu artinya telah terkunci.</li>
                <li>Untuk pemasangan pada casing,langkah pertama buka terlebih dahulu penutup casing,dan pasangkan gelang anti statis.</li>
                <li>Pasang slot I/O shield ke cpu.</li>
                <li>Pasang landasan motherboard dan simpan motherboard di dalam casing dan langsung pasangkan bautnya.</li>
                <li>Selanjutnya,buka shield VGA dan pasangkan VGA ke motherboard hingga terpasang dengan benar sampai berbunyi click dan tutup Kembali shield VGA.</li>
                <li>Pasang SSD pada slot penyimpanan yang ada pada casing,lalu pasangkan kabel ke SSD dan hubungkan pada motherboard.</li>
                <li>Pasangkan power supply pada slotnya dan kencangkan dengan baut yang telah tersedia. </li>
                <li>Terakhir,rapihkan kabel-kabel yang tersisa dengan kabel tist dan pasangkan kembali tutup motherboard.</li>
                    </li>
            </ol>
        </div>
        <button type="button" class="btn btn-dark m-5"><a style="text-decoration: none;color:white" href="/header">Back to Home</a></button>    
        @include('pages/footer')
</body>
</html>    
