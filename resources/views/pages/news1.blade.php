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
        <h2 class="m-5 text-center">Teknologi Informasi Umum</h2>
    </div>
    <div>
        <iframe  class="img-fluid m-5 rounded mx-auto d-block img-responsive" width="300" height="200" src="https://www.youtube.com/embed/7bBCtUHrooc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p style="padding-left: 7%;">Renaldi Nurmazid - 6 Desember 2022</p>
    </div>
    <div style="margin:2%;padding-left:5%;padding-right:2%">
            <p class="text-justify">
                Laptop dan Handphone merupakan hardware atau alat elektronik biasa yang berjalan dengan adanya sistem operasi,ada berbagai macam sistem operasi contoh nya sistem operasi dalam laptop ada windows,linux,dan mac os lalu untuk sistem operasi di hp ada android dan ios.Diatas sistem operasi kita juga dapat menginstall program lain contohnya,Instagram,tiktok,whastsapp dan lain-lain,program tersebut sering di sebut dengan software,dari semua program dan sistem diatas itu dibuat oleh programmer dan orang yang menggunakan program atau sistem tersebut sering disebut dengan brainware.
                <p>
                    Hardware dapat terhubung ke internet melalui wifi(AP) dan oprator yang dipakai pada handphone kita,contohnya jika melalui wifi yaitu dengan cara hardware dan wifi terhubung melalui jaringan wireless,wifi dan modem terhubung melalui jaringan kabel,modem tersebut merupakan titipan dari ISP(Internet Service Provider) yaitu perusahaan yang menyediakan internet,itulah cara terhubung ke internet melalui wifi.Selanjutnya terhubung pada internet dengan operator yaitu dengan cara operator terhubung dengan BTS yang masing-masing terhubung dengan backbond fiberoptic ke operator.
                    <p>Jika kita menjalankan software atau aplikasi yang mengharuskan kita untuk login memasukan username dan password,maka data tersebut akan diproses dengan cara data tersebut akan mengalir ke ISP atau operator menuju perusahaan game melalui internet.Data tersebut akan dicek terlebih dahulu oleh server gateway,yang fungsinya untuk keamanan dan pengaturan lalulintas data,dan jika data tersebut benar akan diteruskan pada server aplikasi. Untuk pembuatan sebuah aplikasi biasanya dimulai dengan proses desain dan perencanaan,project management sebagai pengatur resource dan timeline project.Lalu ada proses analisa dan modelling yang melibatkan diagram seperti dfd,usecase dan proses dokumentasi dalam bentuk srs,sdd dan lain-lain.Lalu ada proses implementasi yang didalam nya ada programmer coding,database administrator,dan ui/ux designer yang semuanya saling terikat dan berhubungan,selanjutnya proses deployment aplikasi yang didalamnya ada network analyst sebagai perancang server gateway,dan devops sebagai deployment aplikasi ke server aplikasi. Pengguna aplikasi tidak semua merk dan sistem oprasinya sama,maka dari itu agar dapat terhubung antara sistem operasi a dengan sistem operasi b harus dalam aturan protocol yang sama,protocol yang umum dipakai dalam internet yaitu tcp atau ip berupa angka atai ip address.</p>
                </p>
                <ul>
                    <p>Pertanyaan:</p>
                    <li>Apa itu yang dimaksud server gateway?</li>
                    <li>Mengapa data masuk harus melalui server gateway terlebih dahulu?</li>
                    <li>Apa itu project manager dan tugasnya?</li>
                    <li>Bagaimana tahapan deployment aplikasi?</li>
                    <li>Apa fungsi dari Github?</li>


                </ul>
            <p>
    </div>
    <button type="button" class="btn btn-dark m-5"><a style="text-decoration: none;color:white" href="/header">Back to Home</a></button>
    @include('pages/footer')
</body>
</html>