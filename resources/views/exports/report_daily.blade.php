<table>
    <thead>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center;">KEPOLISIAN NEGARA REPUBLIK INDONESIA</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center;">KORP LALU LINTAS</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center;">LAPORAN HARIAN {{ \Illuminate\Support\Str::upper(operationPlans()->name) }}</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center;">TANGGAL: {{ operationPlans()->start_date->format("d-m-Y") }} S/D {{ operationPlans()->end_date->format("d-m-Y") }}</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center;">KORLANTAS</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th>NO</th>
            <th>URAIAN</th>
            <th>REKAP HARIAN</th>
            <th>KET</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="background-color: #c6efcd;">I</td>
            <td style="background-color: #c6efcd;">DATA TERKAIT MASALAH PELANGGARAN LALU LINTAS</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">1</td>
            <td style="background-color: #c6efcd;">PELANGGARAN LALU LINTAS</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. TILANG</td>
            <td>{{ $data->dailyInput->pelanggaran_lalu_lintas_tilang }}</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>b. TEGURAN</td>
            <td>{{ $data->dailyInput->pelanggaran_lalu_lintas_teguran }}</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td style="font-weight: bold;">{{ calculation([
                $data->dailyInput->pelanggaran_lalu_lintas_teguran, 
                $data->dailyInput->pelanggaran_lalu_lintas_teguran
            ]) }}</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">2</td>
            <td style="background-color: #c6efcd;">JENIS PELANGGARAN LALU LINTAS</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;">a. SEPEDA MOTOR</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>1) GUN HELM SNI</td>
            <td>{{ $data->dailyInput->pelanggaran_sepeda_motor_gun_helm_sni }}</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>2) MELAWAN ARUS</td>
            <td>{{ $data->dailyInput->pelanggaran_sepeda_motor_melawan_arus }}</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>3) GUN HP SAAT BERKENDARA</td>
            <td>{{ $data->dailyInput->pelanggaran_sepeda_motor_gun_hp_saat_berkendara }}</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>4) BERKENDARA DI BAWAH PENGARUH ALKOHOL</td>
            <td>{{ $data->dailyInput->pelanggaran_sepeda_motor_berkendara_dibawah_pengaruh_alkohol }}</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>5) MELEBIHI BATAS KECEPATAN</td>
            <td>{{ $data->dailyInput->pelanggaran_sepeda_motor_melebihi_batas_kecepatan }}</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>6) BERKENDARA DI BAWAH UMUR</td>
            <td>{{ $data->dailyInput->pelanggaran_sepeda_motor_berkendara_dibawah_umur }}</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>7) LAIN - LAIN</td>
            <td>{{ $data->dailyInput->pelanggaran_sepeda_motor_lain_lain }}</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td style="font-weight: bold;">{{ calculation([
                $data->dailyInput->pelanggaran_sepeda_motor_gun_helm_sni,
                $data->dailyInput->pelanggaran_sepeda_motor_melawan_arus,
                $data->dailyInput->pelanggaran_sepeda_motor_gun_hp_saat_berkendara,
                $data->dailyInput->pelanggaran_sepeda_motor_berkendara_dibawah_pengaruh_alkohol,
                $data->dailyInput->pelanggaran_sepeda_motor_melebihi_batas_kecepatan,
                $data->dailyInput->pelanggaran_sepeda_motor_berkendara_dibawah_umur,
                $data->dailyInput->pelanggaran_sepeda_motor_lain_lain
            ]) }}</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;">b. MOBIL DAN KENDARAAN KHUSUS</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>1) MELAWAN ARUS</td>
            <td>{{ $data->dailyInput->pelanggaran_mobil_melawan_arus }}</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>2) GUN HP SAAT BERKENDARA</td>
            <td>{{ $data->dailyInput->pelanggaran_mobil_gun_hp_saat_berkendara }}</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>3) BERKENDARA DI BAWAH PENGARUH ALKOHOL</td>
            <td>{{ $data->dailyInput->pelanggaran_mobil_berkendara_dibawah_pengaruh_alkohol }}</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>4) MELEBIHI BATAS KECEPATAN</td>
            <td>{{ $data->dailyInput->pelanggaran_mobil_melebihi_batas_kecepatan }}</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>5) BERKENDARA DI BAWAH UMUR</td>
            <td>{{ $data->dailyInput->pelanggaran_mobil_berkendara_dibawah_umur }}</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>6) GUN SAFETY BELT</td>
            <td>{{ $data->dailyInput->pelanggaran_mobil_gun_safety_belt }}</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>7) LAIN - LAIN</td>
            <td>{{ $data->dailyInput->pelanggaran_mobil_lain_lain }}</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td style="font-weight: bold;">{{ calculation([
                $data->dailyInput->pelanggaran_mobil_melawan_arus,
                $data->dailyInput->pelanggaran_mobil_gun_hp_saat_berkendara,
                $data->dailyInput->pelanggaran_mobil_berkendara_dibawah_pengaruh_alkohol,
                $data->dailyInput->pelanggaran_mobil_melebihi_batas_kecepatan,
                $data->dailyInput->pelanggaran_mobil_berkendara_dibawah_umur,
                $data->dailyInput->pelanggaran_mobil_gun_safety_belt,
                $data->dailyInput->pelanggaran_mobil_lain_lain
            ]) }}</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">3</td>
            <td style="background-color: #c6efcd;">BARANGBUKTI YANG DISITA</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. SIM</td>
            <td>{{ $data->dailyInput->barang_bukti_yg_disita_sim }}</td>
            <td>Unit</td>
        </tr>
        <tr>
            <td></td>
            <td>b. STNK</td>
            <td>{{ $data->dailyInput->barang_bukti_yg_disita_stnk }}</td>
            <td>Unit</td>
        </tr>
        <tr>
            <td></td>
            <td>c. KENDARAAN</td>
            <td>{{ $data->dailyInput->barang_bukti_yg_disita_kendaraan }}</td>
            <td>Unit</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td style="font-weight: bold;">{{ calculation([
                $data->dailyInput->barang_bukti_yg_disita_sim,
                $data->dailyInput->barang_bukti_yg_disita_stnk,
                $data->dailyInput->barang_bukti_yg_disita_kendaraan
            ]) }}</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">4</td>
            <td style="background-color: #c6efcd;">KENDARAAN YANG TERLIBAT PELANGGARAN</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. SEPEDA MOTOR</td>
            <td>{{ $data->dailyInput->kendaraan_yang_terlibat_pelanggaran_sepeda_motor }}</td>
            <td>Unit</td>
        </tr>
        <tr>
            <td></td>
            <td>b. MOBIL PENUMPANG</td>
            <td>{{ $data->dailyInput->kendaraan_yang_terlibat_pelanggaran_mobil_penumpang }}</td>
            <td>Unit</td>
        </tr>
        <tr>
            <td></td>
            <td>c. MOBIL BUS</td>
            <td>{{ $data->dailyInput->kendaraan_yang_terlibat_pelanggaran_mobil_bus }}</td>
            <td>Unit</td>
        </tr>
        <tr>
            <td></td>
            <td>d. MOBIL BARANG</td>
            <td>{{ $data->dailyInput->kendaraan_yang_terlibat_pelanggaran_mobil_barang }}</td>
            <td>Unit</td>
        </tr>
        <tr>
            <td></td>
            <td>e. KENDARAAN KHUSUS</td>
            <td>{{ $data->dailyInput->kendaraan_yang_terlibat_pelanggaran_kendaraan_khusus }}</td>
            <td>Unit</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td style="font-weight: bold;">{{ calculation([
                $data->dailyInput->kendaraan_yang_terlibat_pelanggaran_sepeda_motor,
                $data->dailyInput->kendaraan_yang_terlibat_pelanggaran_mobil_penumpang,
                $data->dailyInput->kendaraan_yang_terlibat_pelanggaran_mobil_bus,
                $data->dailyInput->kendaraan_yang_terlibat_pelanggaran_mobil_barang,
                $data->dailyInput->kendaraan_yang_terlibat_pelanggaran_kendaraan_khusus
            ]) }}</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">5</td>
            <td style="background-color: #c6efcd;">PROFESI PELAKU PELANGGARAN</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. PEGAWAI NEGERI SIPIL</td>
            <td>{{ $data->dailyInput->profesi_pelaku_pelanggaran_pns }}</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>b. KARYAWAN / SWASTA</td>
            <td>{{ $data->dailyInput->profesi_pelaku_pelanggaran_karyawan_swasta }}</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>c. PELAJAR / MAHASISWA</td>
            <td>{{ $data->dailyInput->profesi_pelaku_pelanggaran_pelajar_mahasiswa }}</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>d. PENGEMUDI (SUPIR)</td>
            <td>{{ $data->dailyInput->profesi_pelaku_pelanggaran_pengemudi_supir }}</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>e. TNI</td>
            <td>{{ $data->dailyInput->profesi_pelaku_pelanggaran_tni }}</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>f. POLRI</td>
            <td>{{ $data->dailyInput->profesi_pelaku_pelanggaran_polri }}</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>g LAIN-LAIN</td>
            <td>{{ $data->dailyInput->profesi_pelaku_pelanggaran_lain_lain }}</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td style="font-weight: bold;">{{ calculation([
                $data->dailyInput->profesi_pelaku_pelanggaran_pns,
                $data->dailyInput->profesi_pelaku_pelanggaran_karyawan_swasta,
                $data->dailyInput->profesi_pelaku_pelanggaran_pelajar_mahasiswa,
                $data->dailyInput->profesi_pelaku_pelanggaran_pengemudi_supir,
                $data->dailyInput->profesi_pelaku_pelanggaran_tni,
                $data->dailyInput->profesi_pelaku_pelanggaran_polri,
                $data->dailyInput->profesi_pelaku_pelanggaran_lain_lain
            ]) }}</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">6</td>
            <td style="background-color: #c6efcd;">USIA PELAKU PELANGGARAN</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. &lt; 15 TAHUN</td>
            <td>3546</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>b. 16 - 20 TAHUN</td>
            <td>6387</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>c. 21 - 25 TAHUN</td>
            <td>6599</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>d. 26 - 30 TAHUN</td>
            <td>5925</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>e. 31 - 35 TAHUN</td>
            <td>4513</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>f. 36 - 40 TAHUN</td>
            <td>3333</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>g. 41 - 45 TAHUN</td>
            <td>2357</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>h. 46 - 50 TAHUN</td>
            <td>1544</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>I. 51 - 55 TAHUN</td>
            <td>968</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>j. 56 - 60 TAHUN</td>
            <td>472</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>k. > 60 TAHUN</td>
            <td>150</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>35794</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">7</td>
            <td style="background-color: #c6efcd;">SIM PELAKU PELANGGARAN</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. A</td>
            <td>2475</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>b. A UMUM</td>
            <td>218</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>c. B1</td>
            <td>573</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>d. B1 UMUM</td>
            <td>445</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>e. BII</td>
            <td>228</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>f. B II UMUM</td>
            <td>1046</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>g. C</td>
            <td>14486</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>h. D</td>
            <td>8</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>I. SIM INTERNASIONAL</td>
            <td>11</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>j. TANPA SIM</td>
            <td>15980</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>35470</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">8</td>
            <td style="background-color: #c6efcd;">LOKASI PELANGGARAN LALU LINTAS</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;">a. BERDASARKAN KAWASAN</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>1) KAWASAN PEMUKIMAN</td>
            <td>18360</td>
            <td>Lokasi</td>
        </tr>
        <tr>
            <td></td>
            <td>2) KAWASAN PERBELANJAAN</td>
            <td>7754</td>
            <td>Lokasi</td>
        </tr>
        <tr>
            <td></td>
            <td>3) PERKANTORAN</td>
            <td>5205</td>
            <td>Lokasi</td>
        </tr>
        <tr>
            <td></td>
            <td>4) KAWASAN WISATA</td>
            <td>2035</td>
            <td>Lokasi</td>
        </tr>
        <tr>
            <td></td>
            <td>5) KAWASAN INDUTRI</td>
            <td>1819</td>
            <td>Lokasi</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>35173</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;">b. STATUS JALAN</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>1) NASIONAL</td>
            <td>13112</td>
            <td>Lokasi</td>
        </tr>
        <tr>
            <td></td>
            <td>2) PROPINSI</td>
            <td>10126</td>
            <td>Lokasi</td>
        </tr>
        <tr>
            <td></td>
            <td>3) KAB/KOTA</td>
            <td>10924</td>
            <td>Lokasi</td>
        </tr>
        <tr>
            <td></td>
            <td>4) DESA / LINGKUNGAN</td>
            <td>990</td>
            <td>Lokasi</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>35152</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;">c. BERDASARKAN FUNGSI JALAN</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>1) ARTERI</td>
            <td>28143</td>
            <td>Lokasi</td>
        </tr>
        <tr>
            <td></td>
            <td>2) KOLEKTOR</td>
            <td>9318</td>
            <td>Lokasi</td>
        </tr>
        <tr>
            <td></td>
            <td>3) LOKAL</td>
            <td>7927</td>
            <td>Lokasi</td>
        </tr>
        <tr>
            <td></td>
            <td>4) LINGKUNGAN</td>
            <td>876</td>
            <td>Lokasi</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>46264</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">II</td>
            <td style="background-color: #c6efcd;">DATA TERKAIT MASALAH KECELAKAAN LALU LINTAS</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">9</td>
            <td style="background-color: #c6efcd;">KECELAKAAN LALU LINTAS</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. JUMLAH KEJADIAN</td>
            <td>47</td>
            <td>Kasus</td>
        </tr>
        <tr>
            <td></td>
            <td>b. KORBAN MENINGGAL DUNIA</td>
            <td>12</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>c. KORBAN LUKA BERAT</td>
            <td>11</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>d. KORBAN LUKA RINGAN</td>
            <td>51</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>e. KERUGIAN MATERIIL</td>
            <td>59520000</td>
            <td>Rp</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">10</td>
            <td style="background-color: #c6efcd;">BARANGBUKTI YANG DISITA</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. SIM</td>
            <td>19</td>
            <td>Unit</td>
        </tr>
        <tr>
            <td></td>
            <td>b. STNK</td>
            <td>30</td>
            <td>Unit</td>
        </tr>
        <tr>
            <td></td>
            <td>c. KENDARAAN</td>
            <td>74</td>
            <td>Unit</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>123</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">11</td>
            <td style="background-color: #c6efcd;">PROFESI KORBAN KECELAKAAN LALU LINTAS</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. PEGAWAI NEGERI SIPIL</td>
            <td>1</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>b. KARYAWAN / SWASTA</td>
            <td>37</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>c. MAHASISWA / PELAJAR</td>
            <td>19</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>d. PENGEMUDI</td>
            <td>0</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>e. TNI</td>
            <td>0</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>f. POLRI</td>
            <td>0</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>g. LAIN-LAIN</td>
            <td>14</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>71</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">12</td>
            <td style="background-color: #c6efcd;">USIA KORBAN KECELAKAAN LALU LINTAS</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. &lt; 15 TAHUN</td>
            <td>7</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>b. 16 - 20 TAHUN</td>
            <td>24</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>c. 21 - 25 TAHUN</td>
            <td>10</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>d. 26 - 30 TAHUN</td>
            <td>2</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>e. 31 - 35 TAHUN</td>
            <td>3</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>f. 36 - 40 TAHUN</td>
            <td>4</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>g. 41 - 45 TAHUN</td>
            <td>3</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>h. 46 - 50 TAHUN</td>
            <td>4</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>I. 51 - 55 TAHUN</td>
            <td>4</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>j. 56 - 60 TAHUN</td>
            <td>6</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>k. > 60 TAHUN</td>
            <td>14</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>81</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">13</td>
            <td style="background-color: #c6efcd;">SIM KORBAN KECELAKAAN LALU LINTAS</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. A</td>
            <td>0</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>b. A UMUM</td>
            <td>0</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>c. B1</td>
            <td>0</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>d. B1 UMUM</td>
            <td>0</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>e. BII</td>
            <td>0</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>f. BII UMUM</td>
            <td>0</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>g. C</td>
            <td>6</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>h. D</td>
            <td>0</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>I. SIM INTERNASIONAL</td>
            <td>6</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>j. TANPA SIM</td>
            <td>65</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>77</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">14</td>
            <td style="background-color: #c6efcd;">KENDARAAN YANG TERLIBAT KECELAKAAN LALU LINTAS</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. SEPEDA MOTOR</td>
            <td>56</td>
            <td>Unit</td>
        </tr>
        <tr>
            <td></td>
            <td>b. MOBIL PENUMPANG</td>
            <td>10</td>
            <td>Unit</td>
        </tr>
        <tr>
            <td></td>
            <td>c. MOBIL BUS</td>
            <td>1</td>
            <td>Unit</td>
        </tr>
        <tr>
            <td></td>
            <td>d. MOBIL BARANG</td>
            <td>8</td>
            <td>Unit</td>
        </tr>
        <tr>
            <td></td>
            <td>e. KENDARAAN KHUSUS</td>
            <td>0</td>
            <td>Unit</td>
        </tr>
        <tr>
            <td></td>
            <td>f. KENDARAAN TIDAK BERMOTOR</td>
            <td>6</td>
            <td>Unit</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>81</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">15</td>
            <td style="background-color: #c6efcd;">JENIS KECELAKAAN LALU LINTAS</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. TUNGGAL / OUT OF CONTROL</td>
            <td>2</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>b. DEPAN-DEPAN</td>
            <td>9</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>c. DEPAN-BELAKANG</td>
            <td>12</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>d. DEPAN-SAMPING</td>
            <td>11</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>e. BERUNTUN</td>
            <td>2</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>f. TABRAK PEJALAN KAKI</td>
            <td>5</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>g. TABRAK LARI</td>
            <td>4</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>h. TABRAK HEWAN</td>
            <td>0</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>I. SAMPING-SAMPING</td>
            <td>0</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>j. LAINNYA</td>
            <td>0</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>45</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">16</td>
            <td style="background-color: #c6efcd;">PROFESI PELAKU KECELAKAAN LALU LINTAS</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. PEGAWAI NEGERI SIPIL</td>
            <td>0</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>b. KARYAWAN / SWASTA</td>
            <td>25</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>c. MAHASISWA / PELAJAR</td>
            <td>10</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>d. PENGEMUDI</td>
            <td>6</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>e. TNI</td>
            <td>0</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>f. POLRI</td>
            <td>0</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>g. LAIN-LAIN</td>
            <td>3</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>44</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">17</td>
            <td style="background-color: #c6efcd;">USIA PELAKU KECELAKAAN LALU LINTAS</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. &lt; 15 TAHUN</td>
            <td>2</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>b. 16 - 20 TAHUN</td>
            <td>11</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>c. 21 - 25 TAHUN</td>
            <td>9</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>d. 26 - 30 TAHUN</td>
            <td>5</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>e. 31 - 35 TAHUN</td>
            <td>3</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>f. 36 - 40 TAHUN</td>
            <td>3</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>g. 41 - 45 TAHUN</td>
            <td>1</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>h. 46 - 50 TAHUN</td>
            <td>2</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>I. 51 - 55 TAHUN</td>
            <td>3</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>j. 56 - 60 TAHUN</td>
            <td>2</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>k. > 60 TAHUN</td>
            <td>2</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>43</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">18</td>
            <td style="background-color: #c6efcd;">SIM PELAKU KECELAKAAN LALU LINTAS</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. A</td>
            <td>5</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>b. A UMUM</td>
            <td>0</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>c. B1</td>
            <td>1</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>d. B1 UMUM</td>
            <td>4</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>e. BII</td>
            <td>0</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>f. B II UMUM</td>
            <td>0</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>g. C</td>
            <td>9</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>h. D</td>
            <td>0</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>I. SIM INTERNASIONAL</td>
            <td>0</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td>j. TANPA SIM</td>
            <td>24</td>
            <td>Buah</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>43</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">19</td>
            <td style="background-color: #c6efcd;">LOKASI KECELAKAAN LALU LINTAS</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;">a. BERDASARKAN KAWASAN</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>1) KAWASAN PEMUKIMAN</td>
            <td>38</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>2) KAWASAN PERBELANJAAN</td>
            <td>5</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>3) PERKANTORAN</td>
            <td>2</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>4) KAWASAN WISATA</td>
            <td>0</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>5) KAWASAN INDUTRI</td>
            <td>0</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>6) LAIN - LAIN</td>
            <td>1</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>46</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;">b. BERDASARKAN STATUS JALAN</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>1) NASIONAL</td>
            <td>21</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>2) PROPINSI</td>
            <td>14</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>3) KAB/KOTA</td>
            <td>6</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>4) DESA / LINGKUNGAN</td>
            <td>8</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>49</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;">c. BERDASARKAN FUNGSI JALAN</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>1) ARTERI</td>
            <td>25</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>2) KOLEKTOR</td>
            <td>9</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>3) LOKAL</td>
            <td>8</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>4) LINGKUNGAN</td>
            <td>2</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>44</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">20</td>
            <td style="background-color: #c6efcd;">FAKTOR PENYEBAB KECELAKAAN</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>1) MANUSIA</td>
            <td>0</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>a. NGANTUK/LELAH (PSL 283)</td>
            <td>2</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>b. MABUK /PENGARUH ALKOHOL DAN OBAT (PSL 283)</td>
            <td>0</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>c. SAKIT (PSL 283)</td>
            <td>0</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>d. HAND PHONE/ ALAT ELEKTRONIK LAIN (PSL 283)</td>
            <td>0</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>e. MENEROBOS LAMPU MERAH(PSL 287 AY 2)</td>
            <td>0</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>f. MELANGGAR BATAS KECEPATAN (PSL 287 AY 7)</td>
            <td>5</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>g. TIDAK MENJAGA JARAK</td>
            <td>7</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>h. MENDAHULUI/BERBELOK/BERPINDAH JALUR (PSL 294)</td>
            <td>12</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>I. BERPINDAH LAJUR ( PSL 295)</td>
            <td>4</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>j. TIDAK MEMBERIKAN LAMPU ISYARAT BERHENTI/BERBELOK   /BERUBAH ARAH</td>
            <td>1</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>k. TIDAK MENGUTAMAKAN PEJALAN KAKI (PSL 284 JO 106 AY 2)</td>
            <td>10</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>l. LAINNYA</td>
            <td>3</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>2) ALAM</td>
            <td>0</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>3) KELAIKAN KENDARAAN</td>
            <td>0</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>4) JALAN (KONDISI JALAN)</td>
            <td>0</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>5) PRASARANA JALAN</td>
            <td>0</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>a. RAMBU</td>
            <td>0</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>b. MARKA</td>
            <td>0</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>c. APIL</td>
            <td>0</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>d. PERLINTASAN KA TANPA PALANG PINTU</td>
            <td>0</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>44</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">21</td>
            <td style="background-color: #c6efcd;">WAKTU KEJADIAN KECELAKAAN LALU LINTAS</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. 00.00 - 03.00</td>
            <td>5</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>b. 03.00 - 06.00</td>
            <td>4</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>c. 06.00- 09.00</td>
            <td>6</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>d. 09.00 - 12.00</td>
            <td>8</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>e. 12.00 - 15.00</td>
            <td>3</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>f. 15.00 - 18.00</td>
            <td>8</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>g. 18.00 - 21.00</td>
            <td>5</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>h. 21.00 - 24.00</td>
            <td>9</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>48</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">22</td>
            <td style="background-color: #c6efcd;">KECELAKAAN LALU LINTAS MENONJOL</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. JUMLAH KEJADIAN</td>
            <td>1</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>b. KORBAN MENINGGAL DUNIA</td>
            <td>1</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>c. KORBAN LUKA BERAT</td>
            <td>1</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>d. KORBAN LUKA RINGAN</td>
            <td>1</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>e. MATERIIL</td>
            <td>2000000</td>
            <td>Rp</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">23</td>
            <td style="background-color: #c6efcd;">KECELAKAAN LALU LINTAS TUNGGAL / OUT OF CONTROL</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. JUMLAH KEJADIAN</td>
            <td>2</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>b. KORBAN MENINGGAL DUNIA</td>
            <td>0</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>c. KORBAN LUKA BERAT</td>
            <td>1</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>d. KORBAN LUKA RINGAN</td>
            <td>2</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>e. MATERIIL</td>
            <td>1200000</td>
            <td>Rp</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">24</td>
            <td style="background-color: #c6efcd;">TABRAK PEJALAN KAKI</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. JUMLAH KEJADIAN</td>
            <td>7</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>b. KORBAN MENINGGAL DUNIA</td>
            <td>1</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>c. KORBAN LUKA BERAT</td>
            <td>1</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>d. KORBAN LUKA RINGAN</td>
            <td>3</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>e. MATERIIL</td>
            <td>1300000</td>
            <td>Rp</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">25</td>
            <td style="background-color: #c6efcd;">TABRAK LARI</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. JUMLAH KEJADIAN</td>
            <td>4</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>b. KORBAN MENINGGAL DUNIA</td>
            <td>0</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>c. KORBAN LUKA BERAT</td>
            <td>0</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>d. KORBAN LUKA RINGAN</td>
            <td>4</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>e. MATERIIL</td>
            <td>500000</td>
            <td>Rp</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">26</td>
            <td style="background-color: #c6efcd;">TABRAK SEPEDA MOTOR ( R2 )</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. JUMLAH KEJADIAN</td>
            <td>19</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>b. KORBAN MENINGGAL DUNIA</td>
            <td>1</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>c. KORBAN LUKA BERAT</td>
            <td>6</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>d. KORBAN LUKA RINGAN</td>
            <td>22</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>e. MATERIIL</td>
            <td>22900000</td>
            <td>Rp</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">27</td>
            <td >TABRAK RANMOR RODA EMPAT ( R4 )</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. JUMLAH KEJADIAN</td>
            <td>4</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>b. KORBAN MENINGGAL DUNIA</td>
            <td>0</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>c. KORBAN LUKA BERAT</td>
            <td>0</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>d. KORBAN LUKA RINGAN</td>
            <td>5</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>e. MATERIIL</td>
            <td>2800000</td>
            <td>Rp</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">28</td>
            <td style="background-color: #c6efcd;">TABRAK KENDARAAN TIDAK BERMOTOR (SEPEDA,BECAK DAYUNG, DELMAN, DOKAR DLL)</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. JUMLAH KEJADIAN</td>
            <td>2</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>b. KORBAN MENINGGAL DUNIA</td>
            <td>0</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>c. KORBAN LUKA BERAT</td>
            <td>0</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>d. KORBAN LUKA RINGAN</td>
            <td>1</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>e. MATERIIL</td>
            <td>100000</td>
            <td>Rp</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">29</td>
            <td style="background-color: #c6efcd;">KECELAKAAN DI PERLINTASAN KA</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. JUMLAH KEJADIAN</td>
            <td>0</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>b. BERPALANG PINTU</td>
            <td>0</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>c. TIDAK BERPALANG PINTU</td>
            <td>0</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>d. KORBAN LUKA RINGAN</td>
            <td>0</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>e. KORBAN LUKA BERAT</td>
            <td>0</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>f. KORBAN MENINGGAL DUNIA</td>
            <td>0</td>
            <td>Orang</td>
        </tr>
        <tr>
            <td></td>
            <td>g. MATERIIL</td>
            <td>0</td>
            <td>Rp</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">30</td>
            <td style="background-color: #c6efcd;">KECELAKAAN TRANSPORTASI</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. KECELAKAAN KERETA API</td>
            <td>0</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>b. KECELAKAAN LAUT / PERAIRAN</td>
            <td>0</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td>c. KECELAKAAN UDARA</td>
            <td>0</td>
            <td>Perkara</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>0</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">III</td>
            <td style="background-color: #c6efcd;">DATA TERKAIT DIKMAS LANTAS</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">31</td>
            <td style="background-color: #c6efcd;">DIKMAS LANTAS</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;">a. PENLUH</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>1) MELALUI MEDIA CETAK</td>
            <td>221</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>2) MELALUI MEDIA ELEKTRONIK</td>
            <td>1069</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>3) TEMPAT KERAMAIAN</td>
            <td>690</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>4) TEMPAT ISTIRAHAT</td>
            <td>154</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>5) DAERAH RAWAN LAKA &amp; LANGGAR</td>
            <td>1093</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>3227</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;">b. PENYEBARAN / PEMASANGAN</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>1) SPANDUK</td>
            <td>667</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>2) LEAFLET</td>
            <td>5917</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>3) STICKER</td>
            <td>2365</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>4) BILBOARD</td>
            <td>94</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>9043</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;">c. PROGRAM NASIONAL KEAMANAN LALU LINTAS</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>1) POLISI SAHABAT ANAK</td>
            <td>1</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>2) CARA AMAN SEKOLAH</td>
            <td>13</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>3) PATROLI KEAMANAN SEKOLAH</td>
            <td>1</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>4) PRAMUKA SAKA BHAYANGKARA KRIDA LALU LINTAS</td>
            <td>6</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>21</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;">d. PROGRAM NASIONAL KESELAMATAN LALU LINTAS</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>1) POLICE GOES TO CAMPUS</td>
            <td>0</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>2) SAFETY RIDING &amp; DRIVING</td>
            <td>0</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>3) FORUM LALU LINTAS &amp; ANGKUTAN JALAN</td>
            <td>0</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>4) KAMPANYE KESELAMATAN</td>
            <td>54</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>5) SEKOLAH MENGEMUDI</td>
            <td>2</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>6) TAMAN LALU LINTAS</td>
            <td>0</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>7) GLOBAL ROAD SAFETY PARTNERSHIP ACTION</td>
            <td>1</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>57</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;">32</td>
            <td style="background-color: #c6efcd;">DATA TERKAIT GIAT KEPOLISIAN</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;">GIAT LANTAS</td>
            <td style="background-color: #c6efcd;"></td>
            <td style="background-color: #c6efcd;"></td>
        </tr>
        <tr>
            <td></td>
            <td>a. PENGATURAN</td>
            <td>18866</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>b. PENJAGAAN</td>
            <td>6283</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>c. PENGAWALAN</td>
            <td>554</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td>d. PATROLI</td>
            <td>10950</td>
            <td>Kali</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; font-weight: bold;">JUMLAH</td>
            <td>36653</td>
            <td></td>
        </tr>
    </tbody>
</table>
