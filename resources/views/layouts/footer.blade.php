{{--
    <footer class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <div class="text-center">
          <div>
            <a class="flex-none text-xl font-bold text-black dark:text-white" href="#" aria-label="Brand">HAPPI STUDIO</a>
          </div>
          <!-- End Col -->

          <div class="mt-3">
            <p class="text-gray-500">Self Photo Studio Indramayu</p>
            <p class="text-gray-500">© Kelompok 4. 2023 All rights reserved.</p>
          </div>

          <!-- Social Brands -->
          <div class="mt-3 space-x-2">
            <a href="#" class="fa fa-facebook"></a>
            <a href="https://www.instagram.com/happistudio.idm" class="fa fa-instagram"></a>
            <a href="https://api.whatsapp.com/send/?phone=6285156073050&text&type=phone_number&app_absent=0" class="fa fa-whatsapp"></a>

          </div>
          <!-- End Social Brands -->
        </div>
        <!-- End Grid -->
      </footer>
 --}}


 <footer class="footer p-10 bg-base-200 text-base-content">
  <aside>
    <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
            <a href="/" class="flex items-center">
                <img src="assets/image/logofix.png" class="h-11 me-3" alt="FlowBite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">HAPPI STUDIO</span>
            </a>
        </div>
  </aside>
  <nav>
    <header class="footer-title">Services</header>
    <a class="link link-hover" onclick="reserv.showModal()">Cara Reservasi</a>
    <a class="link link-hover" onclick="metod.showModal()">Jenis Metode Pembayaran</a>
  </nav>

<dialog id="reserv" class="modal">
  <div class="modal-box">
    <h3 class="font-bold text-lg">CARA RESERVASI</h3>
    <p class="py-4">1. login terlebih dahulu, jika belum lakukan registrasi terlebih dahulu<br>
        2. jika sudah login ke menu bagian pricelist<br>
        3. pilih kategori yang ingin ada reservasi<br>
        4. lalu klik booking<br>
        5. isi form booking terlebih dahulu<br>
        6. jika sudah mengisi, anda akan melakukan pembayaran<br>
        7. lalu jika anda sudah melakukan pembayaran,<br>
           anda akan menerima pesan whatsapp yang berisi invoice </p>

    <div class="modal-action">
      <form method="dialog">
        <!-- if there is a button in form, it will close the modal -->
        <button class="btn">Close</button>
      </form>
    </div>
  </div>
</dialog>

<dialog id="metod" class="modal">
    <div class="modal-box">
      <h3 class="font-bold text-lg">CARA RESERVASI</h3>
      <p class="py-4">1. login terlebih dahulu, jika belum lakukan registrasi terlebih dahulu<br>
          2. jika sudah login ke menu bagian pricelist<br>
          3. pilih kategori yang ingin ada reservasi<br>
          4. lalu klik booking<br>
          5. isi form booking terlebih dahulu<br>
          6. jika sudah mengisi, anda akan melakukan pembayaran<br>
          7. lalu jika anda sudah melakukan pembayaran,<br>
             anda akan menerima pesan whatsapp yang berisi invoice </p>

      <div class="modal-action">
        <form method="dialog">
          <!-- if there is a button in form, it will close the modal -->
          <button class="btn">Close</button>
        </form>
      </div>
    </div>
  </dialog>

  <nav>
    <header class="footer-title">Company</header>
    <a class="link link-hover" href="#about">About us</a>
    <a class="link link-hover" href="/pricelist">Pricelist</a>
    <a class="link link-hover" href="https://api.whatsapp.com/send/?phone=6285156073050&text&type=phone_number&app_absent=0" target="_blank">Contact</a>
    <a class="link link-hover" href="https://www.instagram.com/happistudio.idm" target="_blank">Instagram</a>
  </nav>
  <nav>
    <header class="footer-title">Location</header>
    <!--The div element for the map -->
    <div id="map"></div>
  </nav>



</footer>
