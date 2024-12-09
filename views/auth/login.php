<?php
$judul = "Masuk | Tata Tertib Polinema";
$deskripsi = "Selamat datang di Tata Tertib Polinema, platform pembelajaran yang menyediakan berbagai materi informatif untuk Anak Berkebutuhan Khusus.";
$halaman_khusus = true;

include "common/components/layouts/dpa.php";
?>

<main class="h-[135vh] w-full grid place-items-center bg-[#0242a6]">
    <section class="mx-auto flex h-4/5 w-4/5 bg-[#eceff2] rounded-3xl overflow-hidden px-14 py-8 gap-10">
        <div class="relative w-2/5 hidden lg:inline">
            <img src="images/login.png" alt="Selamat datang di Polinema!"
                class="h-full w-full rounded-3xl object-cover" />
            <span class="absolute inset-0 opacity-40 bg-[#0242a6] rounded-3xl"></span>
        </div>
        <div class="h-full w-full flex flex-col items-center justify-center bg-white rounded-3xl p-8 lg:w-3/5">
            <h1 class="text-3xl font-bold text-[#0242a6]">Login</h1>
            <form action="/technorules/controller/auth_controller.php" method="post" class="w-4/5">
                <div class="flex flex-col gap-3 mt-10">
                    <label for="username" class="font-semibold text-lg text-[#0242a6]">
                        Nama Pengguna (NIM/NIP)
                    </label>
                    <input id="username" name="username" type="text" placeholder="Masukkan NIM/NIP"
                        class="bg-[#ececec] text-sm px-4 py-3 rounded-lg" required />
                </div>
                <div class="flex flex-col gap-3 mt-2">
                    <label for="password" class="font-semibold text-lg text-[#0242a6]">
                        Kata Sandi
                    </label>
                    <input id="password" name="password" type="password" placeholder="Masukkan Kata Sandi"
                        class="bg-[#ececec] text-sm px-4 py-3 rounded-lg" required />
                </div>
                <div class="mt-2 flex">
                    <input type="checkbox" name="checkbox" id="checkbox" />
                    <label for="checkbox" class="text-sm ml-2">Tampilkan Kata Sandi</label>
                </div>
                <button type="submit"
                    class="mt-7 w-full bg-[#0242a6] text-white font-semibold text-sm px-4 py-3 rounded-lg transition-all duration-300 ease-in-out hover:bg-[#173f80]"
                    onclick="this.disabled=true; this.textContent='Loading...'; this.form.submit();">
                    Login
                </button>
            </form>
            <span class="mt-7 text-sm">
                Belum punya akun?
                <a href="register" class="text-[#0242a6]">Daftar disini</a>
            </span>
        </div>
    </section>
</main>