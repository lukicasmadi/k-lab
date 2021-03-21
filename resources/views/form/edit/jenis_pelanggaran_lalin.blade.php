<div class="col-lg-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>JENIS PELANGGARAN LALU LINTAS</h4>
                </div>
            </div>
        </div>

        <div class="widget-content widget-content-area">

            <blockquote class="blockquote">
                <p class="d-inline">a. SEPEDA MOTOR</p>
            </blockquote>

            <div class="form-group mb-4">
                <label><span class="require">*</span>1) GUN HELM SNI</label>
                <input type="number" class="form-control @error('pelanggaran_sepeda_motor_gun_helm_sni') is-invalid @enderror" name="pelanggaran_sepeda_motor_gun_helm_sni" autocomplete="off" value="{{ $data->dailyInput->pelanggaran_sepeda_motor_gun_helm_sni }}">
                @error('pelanggaran_sepeda_motor_gun_helm_sni')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label><span class="require">*</span>2) MELAWAN ARUS</label>
                <input type="number" class="form-control @error('pelanggaran_sepeda_motor_melawan_arus') is-invalid @enderror" name="pelanggaran_sepeda_motor_melawan_arus" autocomplete="off" value="{{ $data->dailyInput->pelanggaran_sepeda_motor_melawan_arus }}">
                @error('pelanggaran_sepeda_motor_melawan_arus')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label><span class="require">*</span>3) GUN HP SAAT BERKENDARA</label>
                <input type="number" class="form-control @error('pelanggaran_sepeda_motor_gun_hp_saat_berkendara') is-invalid @enderror" name="pelanggaran_sepeda_motor_gun_hp_saat_berkendara" autocomplete="off" value="{{ $data->dailyInput->pelanggaran_sepeda_motor_gun_hp_saat_berkendara }}">
                @error('pelanggaran_sepeda_motor_gun_hp_saat_berkendara')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label><span class="require">*</span>4) BERKENDARA DI BAWAH PENGARUH ALKOHOL</label>
                <input type="number" class="form-control @error('pelanggaran_sepeda_motor_berkendara_dibawah_pengaruh_alkohol') is-invalid @enderror" name="pelanggaran_sepeda_motor_berkendara_dibawah_pengaruh_alkohol" autocomplete="off" value="{{ $data->dailyInput->pelanggaran_sepeda_motor_berkendara_dibawah_pengaruh_alkohol }}">
                @error('pelanggaran_sepeda_motor_berkendara_dibawah_pengaruh_alkohol')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label><span class="require">*</span>5) MELEBIHI BATAS KECEPATAN</label>
                <input type="number" class="form-control @error('pelanggaran_sepeda_motor_melebihi_batas_kecepatan') is-invalid @enderror" name="pelanggaran_sepeda_motor_melebihi_batas_kecepatan" autocomplete="off" value="{{ $data->dailyInput->pelanggaran_sepeda_motor_melebihi_batas_kecepatan }}">
                @error('pelanggaran_sepeda_motor_melebihi_batas_kecepatan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label><span class="require">*</span>6) BERKENDARA DI BAWAH UMUR</label>
                <input type="number" class="form-control @error('pelanggaran_sepeda_motor_berkendara_dibawah_umur') is-invalid @enderror" name="pelanggaran_sepeda_motor_berkendara_dibawah_umur" autocomplete="off" value="{{ $data->dailyInput->pelanggaran_sepeda_motor_berkendara_dibawah_umur }}">
                @error('pelanggaran_sepeda_motor_berkendara_dibawah_umur')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label><span class="require">*</span>7) LAIN – LAIN</label>
                <input type="number" class="form-control @error('pelanggaran_sepeda_motor_lain_lain') is-invalid @enderror" name="pelanggaran_sepeda_motor_lain_lain" autocomplete="off" value="{{ $data->dailyInput->pelanggaran_sepeda_motor_lain_lain }}">
                @error('pelanggaran_sepeda_motor_lain_lain')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <blockquote class="blockquote">
                <p class="d-inline">b. MOBIL DAN KENDARAAN KHUSUS</p>
            </blockquote>

            <div class="form-group mb-4">
                <label><span class="require">*</span>1) MELAWAN ARUS</label>
                <input type="number" class="form-control @error('pelanggaran_mobil_melawan_arus') is-invalid @enderror" name="pelanggaran_mobil_melawan_arus" autocomplete="off" value="{{ $data->dailyInput->pelanggaran_mobil_melawan_arus }}">
                @error('pelanggaran_mobil_melawan_arus')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label><span class="require">*</span>2) GUN HP SAAT BERKENDARA</label>
                <input type="number" class="form-control @error('pelanggaran_mobil_gun_hp_saat_berkendara') is-invalid @enderror" name="pelanggaran_mobil_gun_hp_saat_berkendara" autocomplete="off" value="{{ $data->dailyInput->pelanggaran_mobil_gun_hp_saat_berkendara }}">
                @error('pelanggaran_mobil_gun_hp_saat_berkendara')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label><span class="require">*</span>3) BERKENDARA DI BAWAH PENGARUH ALKOHOL</label>
                <input type="number" class="form-control @error('pelanggaran_mobil_berkendara_dibawah_pengaruh_alkohol') is-invalid @enderror" name="pelanggaran_mobil_berkendara_dibawah_pengaruh_alkohol" autocomplete="off" value="{{ $data->dailyInput->pelanggaran_mobil_berkendara_dibawah_pengaruh_alkohol }}">
                @error('pelanggaran_mobil_berkendara_dibawah_pengaruh_alkohol')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label><span class="require">*</span>4) MELEBIHI BATAS KECEPATAN</label>
                <input type="number" class="form-control @error('pelanggaran_mobil_melebihi_batas_kecepatan') is-invalid @enderror" name="pelanggaran_mobil_melebihi_batas_kecepatan" autocomplete="off" value="{{ $data->dailyInput->pelanggaran_mobil_melebihi_batas_kecepatan }}">
                @error('pelanggaran_mobil_melebihi_batas_kecepatan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label><span class="require">*</span>5) BERKENDARA DI BAWAH UMUR</label>
                <input type="number" class="form-control @error('pelanggaran_mobil_berkendara_dibawah_umur') is-invalid @enderror" name="pelanggaran_mobil_berkendara_dibawah_umur" autocomplete="off" value="{{ $data->dailyInput->pelanggaran_mobil_berkendara_dibawah_umur }}">
                @error('pelanggaran_mobil_berkendara_dibawah_umur')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label><span class="require">*</span>6) GUN SAFETY BELT</label>
                <input type="number" class="form-control @error('pelanggaran_mobil_gun_safety_belt') is-invalid @enderror" name="pelanggaran_mobil_gun_safety_belt" autocomplete="off" value="{{ $data->dailyInput->pelanggaran_mobil_gun_safety_belt }}">
                @error('pelanggaran_mobil_gun_safety_belt')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label><span class="require">*</span>7) LAIN - LAIN</label>
                <input type="number" class="form-control @error('pelanggaran_mobil_lain_lain') is-invalid @enderror" name="pelanggaran_mobil_lain_lain" autocomplete="off" value="{{ $data->dailyInput->pelanggaran_mobil_lain_lain }}">
                @error('pelanggaran_mobil_lainlain')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

        </div>
    </div>
</div>