<!DOCTYPE html>
<html lang='ms-MY' data-bs-theme='auto'>

  <head>
    <title>Polisi Perkhidmatan</title>
  </head>

  <body> <?php require_once 'header.php' ?>
    <div class='container'>
      <div class='row text-center my-3'>
        <h1>Polisi Perkhidmatan RoIPMARS</h1>
        <p><?php
        $dtfmt = datefmt_create('ms_MY', IntlDateFormatter::FULL, IntlDateFormatter::FULL, $_SERVER['HTTP_CF_TIMEZONE'], IntlDateFormatter::GREGORIAN, 'EEEE, dd MMMM yyyy, hh:mm:ss BBBB zzzz');
        $file_last_mod = filemtime(__FILE__);
        echo 'Pindaan: ' . datefmt_format($dtfmt, $file_last_mod);
        ?></p>
      </div>
      <div class='row my-3'>
        <div class='col-3'>
          <nav id='navbar-policy' class='h-100 flex-column align-items-stretch px-3 border-end' tabindex='0'>
            <nav class='nav nav-pills flex-column pt-5 sticky-top overflow-y-auto fs-6 fw-light text-wrap z-0'>
              <a class='nav-link mt-3' href='#tos'>Terma &amp; Syarat</a>
              <a class='nav-link' href='#privacy'>Privasi</a>
              <a class='nav-link' href='#return'>Pemulangan dan Bayaran Balik</a>
              <a class='nav-link' href='#scam'>Penipuan</a>
              <a class='nav-link' href='#whistleblowing'>Pemberi Maklumat</a>
              <a class='nav-link' href='#activity'>Aktiviti</a>
              <!-- <a class='nav-link' href='#svcsubs'>Langganan Pelayan</a> -->
            </nav>
          </nav>
        </div>
        <div class='col-9'>
          <div data-bs-spy='scroll' data-bs-target='#navbar-policy' data-bs-offset='0' data-bs-smooth-scroll='true' class='scrollspy-policy' tabindex='0'>
            <div id='tos'>
              <h4>Terma &amp; Syarat</h4>
              <p>Terma dan syarat ini menggariskan peraturan-peraturan untuk penggunaan laman sesawang PERSATUAN PEMINAT RADIO KOMUNIKASI, terletak di roipmars.org.my.</p>
              <p>Dengan mengakses laman sesawang ini, kami menganggap anda menerima dan bersetuju dengan terma dan syarat ini. Jangan terus menggunakan Perkhidmatan &quot;RoIPMARS&quot; jika anda tidak bersetuju untuk menerima semua terma dan syarat yang dinyatakan di halaman ini.</p>
              <p>Istilah berikut digunakan untuk Terma dan Syarat ini, Pernyataan Privasi dan Notis Penafian dan semua Perjanjian:</p>
              <ul>
                <li>&quot;Pengguna&quot;, &quot;Anda&quot;, merujuk kepada anda, orang yang log masuk ke laman sesawang ini dan mematuhi terma dan syarat.</li>
                <li>&quot;Organisasi&quot;, &quot;Kami Sendiri&quot;, &quot;Kami&quot;, merujuk kepada Organisasi kami.</li>
                <li>&quot;Parti&quot;, &quot;Pihak&quot;, atau &quot;Kami&quot;, merujuk kepada kedua-dua pengguna dan diri kita sendiri.</li>
              </ul>
              <p>Semua terma merujuk kepada tawaran, penerimaan dan pertimbangan pembayaran yang diperlukan untuk menjalankan proses bantuan kami kepada pengguna dengan cara yang paling sesuai untuk tujuan nyata memenuhi keperluan pengguna berkenaan dengan penyediaan perkhidmatan yang dinyatakan oleh Organisasi, selaras dengan dan tertakluk kepada, undang-undang semasa Malaysia. Sebarang penggunaan istilah di atas atau perkataan lain dalam bentuk tunggal, jamak, huruf besar dan/atau dia atau mereka, dianggap sebagai boleh ditukar ganti dan oleh itu merujuk kepada yang sama.</p>
              <h5>Kuki</h5>
              <p>Kami menggunakan penggunaan kuki. Dengan mengakses &quot;RoIPMARS&quot;, anda bersetuju untuk menggunakan kuki dalam persetujuan dengan Dasar Privasi Organisasi. </p>
              <p>Kebanyakan laman sesawang interaktif menggunakan kuki untuk membolehkan kami mendapatkan semula butiran pengguna untuk setiap lawatan. Kuki digunakan oleh laman sesawang kami untuk membolehkan kefungsian kawasan tertentu untuk memudahkan orang melawat laman sesawang kami. Beberapa ahli gabungan/rakan kongsi pengiklanan kami juga mungkin menggunakan kuki.</p>
              <h4>Lesen</h4>
              <p>Melainkan dinyatakan sebaliknya, Organisasi dan/atau pemberi lesennya memiliki hak harta intelek untuk semua bahan di &quot;RoIPMARS&quot;. Semua hak harta intelek adalah terpelihara. Anda boleh mengakses ini daripada &quot;RoIPMARS&quot; untuk kegunaan peribadi anda sendiri tertakluk pada sekatan yang ditetapkan dalam terma dan syarat ini.</p>
              <p>Anda tidak boleh:</p>
              <ul>
                <li>Terbitkan semula bahan daripada &quot;RoIPMARS&quot;</li>
                <li>Jual, sewa atau sub-lesen bahan daripada &quot;RoIPMARS&quot;</li>
                <li>Menghasilkan semula, menduplikasi atau menyalin bahan daripada &quot;RoIPMARS&quot;</li>
                <li>Agihkan semula kandungan daripada &quot;RoIPMARS&quot;</li>
              </ul>
              <p>Perjanjian ini hendaklah bermula pada tarikh ini.</p>
              <p>Sebahagian daripada laman sesawang ini menawarkan peluang kepada pengguna untuk menyiarkan dan bertukar-tukar pendapat dan maklumat dalam kawasan tertentu laman sesawang. Organisasi tidak menapis, mengubah, menerbitkan atau menyemak Komen sebelum kehadirannya di laman sesawang. Komen tidak menggambarkan pandangan dan pendapat organisasi, ejen dan/atau ahli gabungannya. Komen mencerminkan pandangan dan pendapat orang yang menyiarkan pandangan dan pendapat mereka. Setakat yang dibenarkan oleh undang-undang yang terpakai, organisasi tidak akan bertanggungjawab ke atas Komen atau untuk sebarang liabiliti, kerosakan atau perbelanjaan yang disebabkan dan/atau dialami akibat daripada sebarang penggunaan dan/atau penyiaran dan/atau penampilan Ulasan di laman sesawang ini.</p>
              <p>Organisasi berhak untuk memantau semua Komen dan mengalih keluar sebarang Komen yang boleh dianggap tidak sesuai, menyinggung perasaan atau menyebabkan pelanggaran Terma dan Syarat ini.</p>
              <p>Anda menjamin dan menyatakan bahawa:</p>
              <ul>
                <li>Anda berhak menyiarkan Komen di laman sesawang kami dan mempunyai semua lesen dan persetujuan yang diperlukan untuk berbuat demikian;</li>
                <li>Komen tersebut tidak menceroboh mana-mana hak harta intelek, termasuk tanpa had hak cipta, paten atau tanda dagangan mana-mana pihak ketiga;</li>
                <li>Komen tersebut tidak mengandungi bahan yang memfitnah, menyinggung perasaan, tidak senonoh atau sebaliknya menyalahi undang-undang yang merupakan pencerobohan privasi;</li>
                <li>Komen tidak akan digunakan untuk meminta atau mempromosikan perniagaan atau adat atau membentangkan aktiviti komersial atau aktiviti yang menyalahi undang-undang.</li>
              </ul>
              <p>Anda dengan ini memberikan organisasi lesen bukan eksklusif untuk menggunakan, mengeluarkan semula, mengubah dan memberi kebenaran kepada orang lain untuk menggunakan, mengeluarkan semula dan mengubah mana-mana Komen anda dalam sebarang dan semua bentuk, format atau media.</p>
              <h4>Pautan ke Kandungan kami</h4>
              <p>Organisasi berikut mungkin memaut ke Laman sesawang kami tanpa kelulusan bertulis terlebih dahulu:</p>
              <ul>
                <li>Agensi kerajaan;</li>
                <li>Enjin carian;</li>
                <li>Organisasi berita;</li>
                <li>Pengedar direktori dalam talian boleh memaut ke Laman sesawang kami dengan cara yang sama seperti mereka memaut ke Laman sesawang perniagaan tersenarai lain; dan</li>
                <li>Perniagaan Bertauliah kecuali organisasi bukan untung, pusat beli-belah amal dan kumpulan pengumpulan dana amal yang mungkin tidak memaut ke laman sesawang kami.</li>
              </ul>
              <p>Organisasi ini mungkin memaut ke halaman utama kami, ke penerbitan atau ke maklumat Laman sesawang lain selagi pautan:</p>
              <ol type='a'>
                <li>tidak dalam apa-apa cara mengelirukan;</li>
                <li>tidak secara palsu membayangkan penajaan, pengendorsan atau kelulusan pihak yang memautkan dan produk dan/atau perkhidmatannya; dan</li>
                <li>sesuai dalam konteks laman pihak yang memautkan.</li>
              </ol>
              <p>Kami mungkin mempertimbangkan dan meluluskan permintaan pautan lain daripada jenis organisasi berikut:</p>
              <ul>
                <li>sumber maklumat pengguna dan/atau perniagaan yang biasa dikenali;</li>
                <li>laman komuniti dot.com;</li>
                <li>persatuan atau kumpulan lain yang mewakili badan amal;</li>
                <li>pengedar direktori dalam talian;</li>
                <li>portal internet;</li>
                <li>firma perakaunan, undang-undang dan perunding; dan</li>
                <li>institusi pendidikan dan persatuan perdagangan.</li>
              </ul>
              <p>Kami akan meluluskan permintaan pautan daripada organisasi ini jika kami memutuskan bahawa:</p>
              <ol type='a'>
                <li>pautan itu tidak akan membuatkan kami memandang tidak baik kepada diri kami sendiri atau kepada organisasi kami yang diiktiraf;</li>
                <li>organisasi tersebut tidak mempunyai sebarang rekod negatif dengan kami;</li>
                <li>faedah kepada kami daripada keterlihatan pautan mengimbangi ketiadaan organisasi; dan</li>
                <li>pautan adalah dalam konteks maklumat sumber am.</li>
              </ol>
              <p>Jika anda adalah salah satu organisasi yang disenaraikan dalam perenggan 2 di atas dan berminat untuk memaut ke laman sesawang kami, anda mesti memaklumkan kami dengan menghantar e-mel kepada dev@roipmars.org.my. Sila sertakan nama anda, nama organisasi anda, maklumat hubungan serta URL laman anda, senarai mana-mana URL yang anda ingin dipautkan ke Laman sesawang kami dan senarai URL di laman kami yang anda ingin pautkan. Tunggu 1-7 hari bekerja untuk maklum balas.</p>
              <p>Organisasi yang diluluskan boleh membuat pautan ke Laman sesawang kami seperti berikut:</p>
              <ul>
                <li>Dengan menggunakan organisasi atau nama jenama kami; atau</li>
                <li>Dengan menggunakan pengesan sumber seragam yang dipautkan kepada; atau</li>
                <li>Dengan menggunakan mana-mana perihalan lain mengenai Laman sesawang kami yang dipautkan dengan yang masuk akal dalam konteks dan format kandungan di laman pihak yang memautkan.</li>
              </ul>
              <p>Tiada penggunaan logo organisasi atau karya seni lain akan dibenarkan untuk dipautkan tanpa perjanjian lesen tanda dagangan.</p>
              <h4>Bingkai</h4>
              <p>Tanpa kelulusan dan kebenaran bertulis terlebih dahulu, anda tidak boleh membuat bingkai di sekeliling Halaman sesawang kami yang mengubah dalam apa jua cara persembahan visual atau penampilan Laman sesawang kami.</p>
              <h4>Liabiliti Kandungan</h4>
              <p>Kami tidak akan bertanggungjawab untuk sebarang kandungan yang muncul di Laman sesawang anda. Anda bersetuju untuk melindungi dan mempertahankan kami daripada semua tuntutan yang meningkat di Laman sesawang anda. Tiada pautan harus dipaparkan pada mana-mana Laman sesawang yang boleh ditafsirkan sebagai fitnah, lucah atau jenayah, atau yang melanggar, sebaliknya melanggar, atau menyokong pelanggaran atau pelanggaran lain, mana-mana hak pihak ketiga.</p>
              <h4>Pemeliharaan Hak</h4>
              <p>Kami berhak meminta anda mengalih keluar semua pautan atau mana-mana pautan tertentu ke Laman sesawang kami. Anda meluluskan untuk segera mengalih keluar semua pautan ke Laman sesawang kami atas permintaan. Kami juga berhak untuk meminda terma dan syarat ini dan polisi pautan pada bila-bila masa. Dengan memaut secara berterusan ke Laman sesawang kami, anda bersetuju untuk terikat dan mematuhi terma dan syarat pemautan ini.</p>
              <h5>Pengalihan keluar pautan daripada laman sesawang kami</h5>
              <p>Jika anda menjumpai sebarang pautan di Laman sesawang kami yang menyinggung atas sebarang sebab, anda bebas untuk menghubungi dan memaklumkan kami pada bila-bila masa. Kami akan mempertimbangkan permintaan untuk mengalih keluar pautan tetapi kami tidak berkewajipan untuk berbuat demikian atau untuk membalas terus kepada anda.</p>
              <p>Kami tidak memastikan bahawa maklumat di laman sesawang ini adalah betul, kami tidak menjamin kesempurnaan atau ketepatannya; kami juga tidak berjanji untuk memastikan laman sesawang kekal tersedia atau bahan di laman sesawang sentiasa dikemas kini.</p>
              <h4>Penafian</h4>
              <p>Setakat yang dibenarkan oleh undang-undang yang terpakai, kami mengecualikan semua representasi, waranti dan syarat yang berkaitan dengan laman sesawang kami dan penggunaan laman sesawang ini. Tiada apa-apa dalam penafian ini akan:</p>
              <ul>
                <li>menghadkan atau mengecualikan liabiliti kami atau anda untuk kematian atau kecederaan peribadi;</li>
                <li>menghadkan atau mengecualikan liabiliti kami atau anda untuk penipuan atau salah nyata penipuan;</li>
                <li>menghadkan mana-mana liabiliti kami atau anda dalam apa jua cara yang tidak dibenarkan di bawah undang-undang yang terpakai; atau</li>
                <li>kecualikan mana-mana liabiliti kami atau anda yang mungkin tidak dikecualikan di bawah undang-undang yang terpakai.</li>
              </ul>
              <p>Penghadan dan larangan liabiliti yang ditetapkan dalam Seksyen ini dan di tempat lain dalam penafian ini:</p>
              <ol type='a'>
                <li>tertakluk kepada perenggan sebelumnya; dan</li>
                <li>mengawal semua liabiliti yang timbul di bawah penafian, termasuk liabiliti yang timbul dalam kontrak dan untuk pelanggaran kewajipan berkanun.</li>
              </ol>
              <p>Selagi laman sesawang dan maklumat serta perkhidmatan di laman sesawang disediakan secara percuma, kami tidak akan bertanggungjawab ke atas sebarang kehilangan atau kerosakan dalam apa jua bentuk.</p>
            </div>
            <hr>
            <div id='privacy'>
              <h4>Dasar Privasi</h4>
              <p>Di &quot;RoIPMARS&quot;, boleh diakses daripada roipmars.org.my dan semua sub-domainnya, salah satu keutamaan utama kami ialah privasi pelawat kami. Dokumen Dasar Privasi ini mengandungi jenis maklumat yang dikumpul dan direkodkan oleh &quot;RoIPMARS&quot; dan cara kami menggunakannya.</p>
              <p>Jika anda mempunyai soalan tambahan atau memerlukan maklumat lanjut tentang Dasar Privasi kami, jangan teragak-agak untuk menghubungi kami.</p>
              <p>Dasar Privasi ini hanya terpakai untuk aktiviti dalam talian kami dan sah untuk pelawat ke laman web kami berkenaan dengan maklumat yang mereka kongsi dan/atau kumpulkan dalam &quot;RoIPMARS&quot;. Dasar ini tidak terpakai kepada sebarang maklumat yang dikumpul di luar talian atau melalui saluran selain laman web ini.</p>
              <h4>Persetujuan</h4>
              <p>Dengan menggunakan laman web kami, anda dengan ini bersetuju dengan Dasar Privasi kami dan bersetuju dengan termanya.</p>
              <h4>Maklumat yang kami kumpul</h4>
              <p>Maklumat peribadi yang diminta, dan sebab mengapa anda diminta memberikannya, akan dijelaskan kepada anda pada ketika kami meminta anda memberikan maklumat peribadi anda.</p>
              <p>Jika anda menghubungi kami secara terus, kami mungkin menerima maklumat tambahan tentang anda seperti nama, alamat e-mel, nombor telefon, kandungan mesej dan/atau lampiran yang mungkin anda hantar kepada kami dan sebarang maklumat lain yang anda boleh pilih untuk berikan.</p>
              <p>Apabila anda mendaftar akaun atau keahlian, kami mungkin meminta maklumat peribadi anda, termasuk seperti nama, alamat, alamat e-mel dan nombor telefon.</p>
              <h5>Cara kami menggunakan maklumat anda</h5>
              <p>Kami menggunakan maklumat yang kami kumpulkan dalam pelbagai cara, termasuk untuk:</p>
              <ul>
                <li>Menyediakan, mengendalikan dan menyelenggara laman web kami</li>
                <li>Perbaiki, peribadikan dan kembangkan laman web kami</li>
                <li>Fahami dan analisis cara anda menggunakan laman web kami</li>
                <li>Membangunkan produk, perkhidmatan, ciri dan fungsi baharu</li>
                <li>Berkomunikasi dengan anda, sama ada secara langsung atau melalui salah satu rakan kongsi kami, termasuk untuk perkhidmatan pelanggan, untuk memberikan anda kemas kini dan maklumat lain yang berkaitan dengan laman web, dan untuk tujuan pemasaran dan promosi</li>
                <li>Hantar e-mel kepada anda</li>
                <li>Cari dan cegah penipuan</li>
              </ul>
              <h4>Fail Log</h4>
              <p>&quot;RoIPMARS&quot; mengikut prosedur standard menggunakan fail log. Fail ini merekodkan pelawat apabila mereka melawat laman web. Semua syarikat pengehosan melakukan ini dan sebahagian daripada analisis perkhidmatan pengehosan. Maklumat yang dikumpul oleh fail log termasuk alamat protokol Internet (IP), jenis pelayar, Pembekal Perkhidmatan Internet (ISP), tarikh dan masa, halaman rujukan/keluar, dan mungkin bilangan klik. Ini tidak dikaitkan dengan sebarang maklumat yang boleh dikenal pasti secara peribadi. Tujuan maklumat adalah untuk menganalisis arah aliran, mentadbir laman, menjejaki pergerakan pengguna di laman web, dan mengumpul maklumat demografi.</p>
              <h4>Kuki dan Suar Web</h4>
              <p>Seperti mana-mana laman web lain, &quot;RoIPMARS&quot; menggunakan 'kuki'. Kuki ini digunakan untuk menyimpan maklumat termasuk keutamaan pelawat, dan halaman di laman web yang diakses atau dilawati oleh pelawat. Maklumat ini digunakan untuk mengoptimumkan pengalaman pengguna dengan menyesuaikan kandungan halaman web kami berdasarkan jenis pelayar pelawat dan/atau maklumat lain.</p>
              <h5>Kuki DART Google DoubleClick</h5>
              <p>Google ialah salah satu vendor pihak ketiga di laman kami. Ia juga menggunakan kuki, dikenali sebagai kuki DART, untuk menyiarkan iklan kepada pelawat laman kami berdasarkan lawatan mereka ke &quot;RoIPMARS&quot; dan laman lain di internet. Walau bagaimanapun, pelawat boleh memilih untuk menolak penggunaan kuki DART dengan melawati iklan Google dan Dasar Privasi rangkaian kandungan di URL berikut <a href='https://policies.google.com/technologies/ads?hl=ms&gl=my' target='_blank' rel='noopener noreferrer'>Google</a></p>
              <h4>Dasar Privasi Rakan Kongsi Pengiklanan</h4>
              <P>Anda boleh merujuk senarai ini untuk mencari Dasar Privasi bagi setiap rakan kongsi pengiklanan &quot;RoIPMARS&quot;.</p>
              <ul>
                <li><a href='https://policies.google.com/technologies/ads?hl=ms&gl=my' target='_blank' rel='noopener noreferrer'>Google</a></li>
              </ul>
              <p>Pelayan iklan pihak ketiga atau rangkaian iklan menggunakan teknologi seperti kuki, JavaScript atau Suar Web yang digunakan dalam iklan dan pautan masing-masing yang dipaparkan di &quot;RoIPMARS&quot;, yang dihantar terus ke pelayar pengguna. Mereka secara automatik menerima alamat IP anda apabila ini berlaku. Teknologi ini digunakan untuk mengukur keberkesanan kempen pengiklanan mereka dan/atau untuk memperibadikan kandungan pengiklanan yang anda lihat di laman web yang anda lawati.</p>
              <p>Ambil perhatian bahawa &quot;RoIPMARS&quot; tidak mempunyai akses kepada atau kawalan ke atas kuki ini yang digunakan oleh pengiklan pihak ketiga.</p>
              <h4>Dasar Privasi Pihak Ketiga</h4>
              <p>Dasar Privasi &quot;RoIPMARS&quot; tidak terpakai kepada pengiklan atau laman web lain. Oleh itu, kami menasihatkan anda untuk merujuk Dasar Privasi masing-masing bagi pelayan iklan pihak ketiga ini untuk mendapatkan maklumat yang lebih terperinci. Ia mungkin termasuk amalan dan arahan mereka tentang cara memilih keluar daripada pilihan tertentu. </p>
              <p>Anda boleh memilih untuk melumpuhkan kuki melalui pilihan pelayar individu anda. Untuk mengetahui maklumat lebih terperinci tentang pengurusan kuki dengan pelayan web tertentu, ia boleh didapati di laman web pelayar masing-masing.</p>
              <h4>Maklumat Kanak-kanak</h4>
              <p>Satu lagi bahagian keutamaan kami ialah menambah perlindungan untuk kanak-kanak semasa menggunakan internet. Kami menggalakkan ibu bapa dan penjaga untuk memerhati, mengambil bahagian dalam dan/atau memantau serta membimbing aktiviti dalam talian mereka.</p>
              <p>&quot;RoIPMARS&quot; tidak secara sengaja mengumpul sebarang Maklumat Pengenalan Peribadi daripada kanak-kanak di bawah umur 18 tahun. Jika anda berpendapat bahawa anak anda memberikan maklumat seperti ini di laman web kami, kami amat menggalakkan anda menghubungi kami dengan segera dan kami akan melakukan usaha yang terbaik untuk mengalih keluar maklumat sedemikian dengan segera daripada rekod kami.</p>
            </div>
            <hr>
            <div id='return'>
              <h4>Dasar Pemulangan dan Bayaran Balik</h4>
              <p>Terima kasih kerana membeli-belah di &quot;RoIPMARS&quot;. Jika, atas sebarang sebab, anda tidak berpuas hati sepenuhnya dengan pembelian / langganan, kami menjemput anda untuk menyemak dasar kami mengenai bayaran balik dan pemulangan. Terma berikut terpakai untuk sebarang produk / perkhidmatan yang anda beli / langgan dengan Kami.</p>
              <h4>Tafsiran</h4>
              <p>Perkataan yang huruf awalnya ditulis dengan huruf besar mempunyai makna yang ditakrifkan di bawah syarat berikut. Takrifan berikut hendaklah mempunyai makna yang sama tanpa mengira sama ada ia muncul dalam bentuk tunggal atau jamak.</p>
              <h5>Takrif</h5>
              <p>Untuk tujuan Polisi Pemulangan dan Bayaran Balik ini:</p>
              <ul>
                <li><strong>Organisasi</strong> (dirujuk sama ada &quot;Organisasi&quot;, &quot;Kami&quot; dalam Perjanjian ini) merujuk kepada PERSATUAN PEMINAT RADIO KOMUNIKASI</li>
                <li><strong>Barang</strong> merujuk kepada produk / khidmat yang ditawarkan untuk dijual pada Perkhidmatan.</li>
                <li><strong>Pesanan</strong> bermaksud permintaan oleh Anda untuk membeli Barang daripada Kami.</li>
                <li><strong>Perkhidmatan</strong> merujuk kepada laman Web dan/atau khidmat.</li>
                <li><strong>laman web</strong> merujuk kepada &quot;RoIPMARS&quot;, boleh diakses daripada roipmars.org.my dan semua sub-domainnya</li>
                <li><strong>Anda</strong> bermaksud individu yang mengakses atau menggunakan Perkhidmatan, atau organisasi, atau entiti undang-undang lain bagi pihak individu tersebut mengakses atau menggunakan Perkhidmatan, mengikut mana yang berkenaan.</li>
              </ul>
              <h4>Hak Pembatalan Pesanan Anda</h4>
              <p>Anda berhak membatalkan Pesanan Anda dalam masa 3 hari tanpa memberikan sebarang sebab untuk berbuat demikian.</p>
              <p>Tarikh akhir untuk membatalkan Pesanan ialah 3 hari dari tarikh Anda menerima Barangan atau pada mana pihak ketiga yang anda lantik, yang bukan pembawa, mengambil milik produk yang dihantar.</p>
              <p>Untuk melaksanakan hak pembatalan Anda, Anda mesti memaklumkan Kami tentang keputusan anda melalui pernyataan yang jelas. Anda boleh memaklumkan kepada kami keputusan anda dengan:</p>
              <ul>
                <li>Melalui e-mel: member@roipmars.org.my</li>
              </ul>
              <p>Kami akan membayar balik kepada Anda tidak lewat daripada 14 hari bekerja dari hari Kami menerima Barang yang dikembalikan. Kami akan menggunakan cara pembayaran yang sama seperti yang Anda gunakan untuk Pesanan dan Anda tidak akan dikenakan sebarang bayaran untuk pembayaran balik tersebut.</p>
              <h4>Syarat untuk Pemulangan</h4>
              <p>Untuk memastikan Barangan layak untuk pemulangan, sila pastikan bahawa:</p>
              <ul>
                <li>Barang telah dibeli dalam 3 hari yang lalu</li>
                <li>Barang berada dalam pembungkusan asal</li>
              </ul>
              <p>Barang berikut tidak boleh dikembalikan:</p>
              <ul>
                <li>Pembekalan Barangan yang dibuat mengikut spesifikasi Anda atau diperibadikan dengan jelas.</li>
                <li>Pembekalan Barangan yang mengikut sifatnya tidak sesuai untuk dipulangkan, merosot dengan cepat atau di mana tarikh luputnya tamat.</li>
                <li>Pembekalan Barangan yang tidak sesuai untuk dipulangkan atas sebab perlindungan kesihatan atau kebersihan dan telah dibuka selepas penghantaran.</li>
                <li>Pembekalan Barangan yang, selepas penghantaran, mengikut sifatnya, tidak dapat dipisahkan dengan barang lain.</li>
              </ul>
              <p>Kami berhak untuk menolak pemulangan mana-mana barangan yang tidak memenuhi syarat pemulangan di atas mengikut budi bicara kami sendiri.</p>
              <p>Hanya Barang berharga biasa boleh dikembalikan. Malangnya, Barangan yang dijual tidak boleh dikembalikan. Pengecualian ini mungkin tidak terpakai kepada Anda jika ia tidak dibenarkan oleh undang-undang yang berkenaan.</p>
              <h5>Pemulangan Barang</h5>
              <p>Anda bertanggungjawab ke atas kos dan risiko memulangkan Barang kepada Kami. Anda hendaklah menghantar Barangan di alamat berikut:</p>
              <p>31, LORONG NALURI SUKMA 8/13, SEKSYEN 8, BANDAR PUNCAK ALAM, 42300 KUALA SELANGOR, SELANGOR DARUL EHSAN, MALAYSIA</p>
              <p>Kami tidak akan bertanggungjawab ke atas Barangan yang rosak atau hilang semasa penghantaran pulangan. Oleh itu, Kami mengesyorkan perkhidmatan mel yang diinsuranskan dan boleh dikesan. Kami tidak akan mengeluarkan bayaran balik tanpa penerimaan sebenar Barang atau bukti penghantaran pulangan yang diterima.</p>
              <h5>Hadiah</h5>
              <p>Jika Barangan ditandakan sebagai hadiah apabila dibeli dan kemudian dihantar terus kepada anda, Anda akan menerima kredit hadiah untuk nilai pemulangan anda. Setelah produk yang dipulangkan diterima, sijil hadiah akan dihantar kepada Anda.</p>
              <p>Jika Barangan tidak ditandakan sebagai hadiah semasa dibeli, atau pemberi hadiah telah menghantar Pesanan kepada diri mereka sendiri untuk memberikannya kepada Anda kemudian, Kami akan menghantar bayaran balik kepada pemberi hadiah.</p>
              <h5>Hubungi Kami</h5>
              <p>Jika anda mempunyai sebarang soalan tentang Polisi Pemulangan dan Bayaran Balik kami, sila hubungi kami:</p>
              <ul>
                <li>Melalui e-mel: member@roipmars.org.my</li>
              </ul>
            </div>
            <hr>
            <div id='scam'>
              <h4>Penipuan</h4>
              <p>PENAFIAN: &quot;RoIPMARS&quot; tidak bertanggungjawab ke atas kandungan apa-apa maklumat dan tidak akan bertanggungjawab ke atas sebarang akibat, kerugian, atau kerosakan dalam apa jua bentuk yang ditanggung atau mungkin ditanggung oleh mana-mana individu atau orang awam disebabkan pergantungan mereka pada atau penggunaan maklumat berkenaan skim penebusan hadiah, cabutan bertuah, peraduan dan pengambilan dalam &quot;RoIPMARS&quot; daripada portal yang tidak dibenarkan, tapak web atau domain e-mel yang tidak disokong oleh &quot;RoIPMARS&quot;.</p>
            </div>
            <hr>
            <div id='whistleblowing'>
              <h4>Pemberi Maklumat</h4>
              <p>Di &quot;RoIPMARS&quot;, kami menjunjung standard tertinggi profesionalisme dan etika dalam semua aktiviti profesional kami. Sebagai sebahagian daripada komitmen kami terhadap tadbir urus yang baik, &quot;RoIPMARS&quot; telah mewujudkan Dasar Pemberitahuan Maklumat yang menyediakan ruang untuk penyiasatan objektif dan penyelesaian kebimbangan yang sah. Kami menggalakkan individu untuk mengemukakan kebimbangan mengenai amalan yang menyalahi undang-undang, tidak beretika atau boleh dipersoalkan dengan jaminan kerahsiaan dan tanpa rasa takut akan tindakan.</p>
              <h4>Apa itu Pemberitahuan Maklumat?</h4>
              <p>Pemberitahuan Maklumat merujuk kepada pendedahan sukarela kelakuan dan amalan yang tidak sesuai, tidak beretika atau menyalahi undang-undang oleh pengurusan atau ahli &quot;RoIPMARS&quot;. Ini termasuk cara ahli, pelanggan dan pelabur dilayan. Perlakuan berikut dianggap tidak wajar dan boleh dilaporkan untuk pemberi maklumat, walaupun senarai itu tidak lengkap:</p>
              <ul>
                <li>Sebarang aktiviti yang menyalahi undang-undang, sama ada jenayah atau pelanggaran undang-undang sivil;</li>
                <li>Pelanggaran dasar dan/atau prosedur;</li>
                <li>Penipuan, kecurian, penyelewengan atau ketidakjujuran;</li>
                <li>Rasuah;</li>
                <li>Buli dan gangguan;</li>
                <li>Tindakan yang mendatangkan bahaya/mudarat fizikal kepada individu atau berisiko merosakkan harta benda/aset;</li>
                <li>Pemalsuan atau pengubahan mana-mana dokumen milik &quot;RoIPMARS&quot;, pelanggan, Institusi Kewangan lain atau ejen Organisasi;</li>
                <li>Pencatutan kerana pengetahuan orang dalam;</li>
                <li>Salah urus atau pengabaian tugas yang teruk;</li>
                <li>Konflik kepentingan;</li>
                <li>Penyalahgunaan kedudukan atau maklumat;</li>
                <li>Sebarang penyelewengan lain yang serupa atau berkaitan;</li>
              </ul>
              <h4>Siapa yang patut menimbulkan kebimbangan?</h4>
              <p>Sesiapa yang terjumpa amalan yang tidak sesuai dalam &quot;RoIPMARS&quot; berhak untuk memberi maklumat. Dasar ini terpakai kepada semua perkara yang melibatkan ahli &quot;RoIPMARS&quot; (termasuk bekas ahli, tanpa mengira status keahlian), pelanggan dan mana-mana pihak berkepentingan atau individu lain yang menyediakan perkhidmatan kepada organisasi, termasuk perunding, vendor, kontraktor bebas, agensi luar dan sesiapa sahaja yang mempunyai hubungan perniagaan dengan &quot;RoIPMARS&quot;.</p>
              <h4>Bagaimana untuk membuat pendedahan?</h4>
              <p>Kami mengambil maklum balas dengan serius, dan kebimbangan anda penting kepada kami. Jika anda ingin mendedahkan sebarang amalan tidak wajar yang berlaku dalam &quot;RoIPMARS&quot;, anda boleh berbuat demikian melalui mana-mana saluran laporan khusus berikut:</p>
              <ul>
                <li>E-mel kepada member@roipmars.org.my</li>
                <li>Hantar melalui pos kepada; <ul type='none'>
                    <li class='fw-bolder'>Pengerusi, Jawatankuasa Rekod & Audit RoIPMARS</li>
                    <li>31, Lorong Naluri Sukma 8/13, Seksyen 8, Bandar Puncak Alam, 42300 Kuala Selangor, Selangor Darul Ehsan, Malaysia</li>
                  </ul>
                </li>
                <li>Saluran tambahan untuk penyerahan pendedahan oleh ahli &quot;RoIPMARS&quot;: <ol type='a'>
                    <li>E-mel kepada dev@roipmars.org.my;</li>
                    <li>E-mel, telefon atau tulis terus kepada Pengerusi Jawatankuasa Rekod & Audit RoIPMARS, Ketua Pegawai Eksekutif Organisasi, Pegawai Organisasi dan/atau Ketua Juruaudit Dalaman Organisasi, berdasarkan jenis, dan/atau kategori pendedahan yang akan dibuat;</li>
                  </ol>
                </li>
              </ul>
              <p>Sebagai alternatif, pemberi maklumat boleh melaporkan terus kepada pihak berkuasa kerajaan atau kawal selia dan agensi penguatkuasaan yang berkaitan di Malaysia, seperti yang ditetapkan oleh Akta Perlindungan Pemberi Maklumat 2010, seperti Bank Negara Malaysia (BNM), Suruhanjaya Pencegahan Rasuah Malaysia (SPRM), Persatuan Bank Malaysia (ABM), Polis, dsb.</p>
              <p>Untuk memudahkan penyiasatan, sila sertakan maklumat berikut semasa membuat pendedahan, jika boleh dan berkenaan:</p>
              <ol type='i'>
                <li>Penerangan ringkas tentang salah laku;</li>
                <li>Tarikh dan lokasi kejadian;</li>
                <li>Identiti pesalah;</li>
                <li>Butiran saksi, (jika ada);</li>
                <li>Bukti sokongan dan/atau dokumen lain yang dianggap berguna untuk memudahkan pemeriksaan dan tindakan;</li>
              </ol>
              <p>Pemberi maklumat adalah digalakkan mendedahkan butiran peribadi mereka bagi membolehkan pihak berkaitan yang menjalankan siasatan untuk mendapatkan maklumat lanjut, termasuk nama dan butiran hubungan.</p>
              <h4>Bagaimanakah &quot;RoIPMARS&quot; Mengendalikan Maklumat Pemberi Maklumat?</h4>
              <p>Selepas meneliti maklumat yang didedahkan, Ketua Juruaudit Dalaman Organisasi akan berunding dengan Pengarah Bukan Eksekutif yang dilantik dan menentukan sama ada penyiasatan adalah wajar atau jika tindakan lain perlu diambil.</p>
              <p>Bergantung pada hasil siasatan, Ketua Juruaudit Dalaman Organisasi akan mengesyorkan tindakan yang sewajarnya kepada Pengurusan, dengan Pengarah Bukan Eksekutif yang dilantik diberi taklimat mengenai perkara itu.</p>
              <h4>Perlindungan Pemberi Maklumat</h4>
              <p>&quot;RoIPMARS&quot; komited untuk mengendalikan semua maklumat yang didedahkan, termasuk identiti pemberi maklumat, dengan kerahsiaan yang ketat. Semua kakitangan yang terlibat dalam kes pemberi maklumat mesti melindungi identiti pemberi maklumat dan saksi daripada pendedahan tanpa kebenaran sebelum, semasa dan selepas penyiasatan.</p>
              <p>Kami juga berjanji untuk melindungi pemberi maklumat daripada gangguan, tindakan, penganiayaan dan pendakwaan yang timbul daripada membuat pendedahan dengan niat baik. Walau bagaimanapun, keadaan mungkin timbul di mana identiti pemberi maklumat perlu didedahkan atas dasar yang perlu diketahui (cth; keperluan untuk memberi keterangan di mahkamah). Dalam kes sedemikian, &quot;RoIPMARS&quot; akan berbincang dan mendapatkan persetujuan daripada pemberi maklumat sebelum meneruskan.</p>
              <p>Perlindungan akan terbatal jika didapati pemberi maklumat turut terlibat dalam kelakuan tidak wajar atau jika pendedahan dibuat dengan niat jahat.</p>
              <h4>Tanggungjawab Pemberi Maklumat</h4>
              <p>Pemberi maklumat mesti membuat pendedahan dengan suci hati dan secara munasabah percaya bahawa maklumat dan dakwaan itu adalah benar. Selain itu, pemberi maklumat tidak seharusnya bertindak untuk kepentingan peribadi, dan jika kes itu melibatkan kepentingan peribadi pengadu, ia mesti dimaklumkan pada awalnya.</p>
              <p>Di &quot;RoIPMARS&quot;, kami mengambil serius kebimbangan anda dan tetap berdedikasi untuk menegakkan etika dan ketelusan tertinggi. Komitmen anda untuk memastikan sebuah organisasi yang bertanggungjawab amat dihargai.</p>
            </div>
            <hr>
            <div id='activity'>
              <h4>Siaraya &amp; Aktiviti RoIPMARS</h4>
              <p>Polisi ini tidak terhad kepada ahli RoIPMARS.</p>
              <h5>Hebahan</h5>
              <p>Sebelum bermulanya mana-mana aktiviti, Pegawai Siaraya RoIPMARS dan jawatankuasanya hendaklah menyediakan semua dokumentasi dalaman dan luaran serta melakukan hebahan agar objektif aktiviti dapat dicapai.</p>
              <h5>Laporan</h5>
              <p>Semua pengendali aktiviti hendaklah menghantar laporan kepada Pegawai Siaraya &amp; Aktiviti dengan kadar segera setelah berakhirnya satu-satu aktiviti. Pegawai Siaraya &amp; Aktiviti dikehendaki menyemak dan megesahkan semua laporan sebelum dilampirkan ke Bahagian Rekod RoIPMARS untuk tindakan lanjut.</p>
              <h5>Sijil dan Kad</h5>
              <p>Terma ini tidak terpakai untuk hebahan &amp; penjana sijil di laman <a href='program' target='_blank' rel='noopener noreferrer'>program</a>.</p>
              <p>Setiap sijil dan kad yang dibuat setelah berakhirnya aktiviti hendaklah:</p>
              <ol>
                <li>menggunakan gambar, logo dan tulisan <font class='fst-italic'>&lpar;font&rpar;</font> yang tidak melanggar mana-mana hak penjenamaan;</li>
                <li>tidak menggunakan sebarang kod tersembunyi &lpar;cth; QR, Bar, dan lain-lain&rpar;;</li>
                <li>menggunakan saiz &amp; skala yang sesuai;</li>
                <li>melalui proses kelulusan dari Pegawai Rekod RoIPMARS;</li>
              </ol>
              <h5>Cenderahati &amp; Hadiah</h5>
              <p>Sebarang cenderahati &amp; hadiah yang disediakan bagi mana-mana aktiviti adalah tanggungjawab sepenuhnya pihak penaja. Kami tidak akan bertanggungjawab keatas mana-mana proses samada penyediaan mahupun penghantaran cenderahati tersebut kepada penerima. Namun yang demikian, segala penggunaan nama dan/atau logo RoIPMARS pada cenderahati tersebut adalah atas budi bicara Pegawai Tertinggi kami.</p>
              <h5>Saguhati Tahunan</h5>
              <p>Kami ada menyediakan saguhati tahunan bagi pengendali &amp; penyokong terbaik sepanjang tahun. Saguhati ini adalah tanda terima kasih kami kepada pengendali yang telah menjalankan tugas sepanjang tahun dengan komited &amp; penyokong yang telah menyokong aktiviti kami dengan penuh dedikasi. Pengiraan tahunan akan dibuat pada minggu pertama tahun berikutnya. Segala syarat kelayakan dan terma tahunan adalah bergantung sepenuhnya kepada laporan aktiviti tahunan dan budi bicara Pegawai Rekod RoIPMARS. Penerima saguhati tahunan akan dihubungi oleh Pegawai Rekod bermula dari 14 Januari dan hendaklah direspon sebelum / selewatnya pada 7 Februari &lpar;tarikh akhir&rpar; bagi melancarkan proses penghantaran dari pihak penaja. Ketiadaan atau kelewatan respon dari penerima akan menyebabkan saguhati ditarik semula selepas tarikh akhir. Saguhati yang telah ditarik semula tidak boleh dituntut oleh mana-mana pihak.</p>
              <canvas id='tlRecordGifts' loading='lazy' alt='tlRecordGifts'></canvas>
            </div>
            <!-- <hr> -->
            <!-- <div id='svcsubs'></div> -->
          </div>
        </div>
      </div>
    </div> <?php require_once 'footer.php' ?>
    <script src='https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js' crossorigin='anonymous'></script>
		<script src='https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/chartjs-plugin-watermark/chartjs-plugin-watermark.min.js' crossorigin='anonymous'></script>
    <script src='/assets/js/policies.js'></script>
  </body>

</html>