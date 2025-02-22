<?php
require_once './controller/mahasiswaController.php';

?>

<table class="my-8 w-full text-left text-sm rounded-lg overflow-hidden mx-auto border-2 border-[#afbbca]">
    <thead class="cursor-default bg-[#0242a6] text-white">
        <tr>
            <th class="pl-4 py-2 text-center">No</th>
            <th class="px-4 py-2 text-center">Deskripsi Pelanggaran</th>
            <th class="px-4 py-2 text-center">Tingkat Pelanggaran</th>
            <th class="px-4 py-2 text-center">Kegiatan Tebusan</th>
            <th class="px-4 py-2 text-center">Tanggal Tebusan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        if (count($violations) > 0) {
            foreach ($violations as $violation) {
                echo "<tr>
                    <td class='pl-4 py-2 text-center border-b border-[#e4e8ed]'>" . $no++ . "</td>
                    <td class='px-4 py-2 text-center border-b border-[#e4e8ed]'>{$violation['deskripsi_pelanggaran']}</td>
                    <td class='px-4 py-2 text-center border-b border-[#e4e8ed]'>{$violation['tingkat_pelanggaran']}</td>
                    <td class='px-4 py-2 text-center border-b border-[#e4e8ed]'>{$violation['kegiatan_tebusan']}</td>
                    <td class='px-4 py-2 text-center border-b border-[#e4e8ed]'>{$violation['tanggal_tebusan']}</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='5' class='px-4 py-2 text-center border-b border-[#e4e8ed]'>Tidak ada pelanggaran dilakukan.</td></tr>";
        }
        ?>
    </tbody>
</table>