<?php
require_once './controller/dosenController.php';
?>

<div class="mx-auto mt-8 px-6 w-[90%] border-2 border-[#afbbca] flex flex-col rounded-xl">
    <h4 class="mt-5 cursor-default text-xl font-bold text-[#414f63]">Informasi Pribadi</h4>
    <div class="mb-8 cursor-default grid grid-cols-2 gap-6 mt-6">
        <div>
            <h4 class="font-bold text-[#414f63]">Nama Lengkap</h4>
            <h5 class="text-[#647993]"><?php echo $data['nama_dosen']; ?></h5>
        </div>
        <div>
            <h4 class="font-bold text-[#414f63]">Jabatan</h4>
            <h5 class="text-[#647993]"><?php echo $data['jabatan_dosen']; ?></h5>
        </div>
        <div>
            <h4 class="font-bold text-[#414f63]">NIP</h4>
            <h5 class="text-[#647993]"><?php echo $data['nidn']; ?></h5>
        </div>
        <div>
            <h4 class="font-bold text-[#414f63]">Email</h4>
            <h5 class="text-[#647993]"><?php echo $data['email']; ?></h5>
        </div>
        <div>
            <h4 class="font-bold text-[#414f63]">Status</h4>
            <span class="flex items-center gap-2"><?php echo $data['status_dosen']; ?></span>
        </div>
    </div>
</div>