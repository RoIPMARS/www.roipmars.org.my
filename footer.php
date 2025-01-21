<!DOCTYPE html>
<html data-bs-theme='auto'>

<head>
</head>

<body>
  <div class='d-flex justify-content-start position-fixed bottom-0 start-0'>
    <button id='scrollToTop' class='btn'><i class='bi-chevron-double-up fs-1'></i></button>
    <button id='checkserverstatus' class='btn d-none d-md-block' data-bs-toggle='modal' data-bs-target='#serverstats'><i class='bi-server fs-1'></i></button>
  </div>
  <footer class='footer pt-1 page-footer font-small bg-body-tertiary text-center'>
    <div class='container'>
      <div class='row mt-2'>
        <div class='col-xl-7 mx-auto my-1 text-xl-start'>
          <h5 class='text-uppercase mb-2 fw-bold'>Sumbangan</h5>
          <p class='mb-2'>Sumbangan anda membantu Penyelidikan &amp; Pembangunan serta Perkhidmatan kami tersedia untuk anda sepanjang masa di mana sahaja.</p>
          <table class='table table-sm table-bordered text-center align-middle my-0'>
            <tbody>
              <tr>
                <th>Nama</th>
                <td>PERSATUAN PEMINAT RADIO KOMUNIKASI &lpar;RoIP&rpar;</td>
              </tr>
              <tr>
                <th>Akaun</th>
                <td>1214 0000 4377 12 &lpar;BANK MUAMALAT MALAYSIA BERHAD&rpar;</td>
              </tr>
              <tr>
                <td colspan='2'>Kami juga menerima: <btn class='btn btn-sm btn-outline-secondary' type='button' onClick='donateRoIPMARS()'>kaedah elektronik &lpar;e-money&rpar;</btn>
                </td>
              </tr>
            </tbody>
          </table>
          <p class='my-0 text-center'>&mdash; DARI ANDA KEMBALI KEPADA ANDA &mdash;</p>
          <img class='w-50 mx-auto d-block' src='https://status.mhrtech.my/api/status-page/roipmars/badge?style=flat-square&label=RoIPMARS%20Network%20Services' loading='lazy' alt='roipmars-server overall status'>
        </div>
        <div class='col-xl-5 mx-auto my-1'>
          <h5 class='text-uppercase mb-2 fw-bold text-xl-end'>Hubungi Kami</h5>
          <div class='d-grid gap-1 d-xl-flex justify-content-xl-end mb-2'>
            <a type='button' class='btn btn-primary rounded-5 me-xl-2' href='contact'><i class='bi-envelope-at'></i> member@roipmars.org.my</a>
            <button type='button' class='btn btn-primary rounded-5' data-bs-toggle='modal' data-bs-target='.bd-subnewsletter-modal-xl'><i class='bi-envelope-paper'></i> Langgan surat berita kami</button>
          </div>
          <div class='modal fade bd-subnewsletter-modal-xl' tabindex='-1' role='dialog' aria-labelledby='subnewsletterModalLabel' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered' role='document'>
              <div class='modal-content'>
                <div class='modal-body'>
                  <div class='ratio ratio-1x1'>
                    <embed loading='lazy' src='https://1306b3f7.sibforms.com/serve/MUIEAIR2UxOW8JezeVtN05wHT8tqVrcROKOSDLHHB5BNy1LHST-CbEPqTvRhQe5_CrrvOOmbedVNkoHAJxlEwQ8tbScw_7eHtjByIUNLUHOsQBo7rmMribZ9ZpPLC89V-9lSyMybFpSBE8ClRHD6itpcxnb_bpZk-06g7sjz4NaQn2gIAlL_0HNtA_BA7UvZT5jIptMIZetcXcSB'></embed>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class='d-xl-flex justify-content-xl-end'>
            <img class='img-fluid rounded-3 bg-body-tertiary' loading='lazy' src='https://www.hamqsl.com/solar101sc.php?muf=drwn&nwra=global&heline=eve&bgcolor=black&back=black&heline=eve' alt='solar data'>
          </div>
        </div>
      </div>
    </div>
    <?php require_once 'footermin.php' ?>
  </footer>
  <script src='/assets/js/donate.js'></script>
  <script src='/assets/js/stt.js'></script>
  <script src='/assets/js/server-status.js'></script>
</body>

</html>