                            <table class="table tbl_np table-bordered table-hover">
                                <tbody>
                                    <tr>
                                        <td width="10%"></td>
                                        <td width="10%"></td>
                                        <td width="10%"></td>
                                        <td width="10%"></td>
                                        <td width="10%"></td>
                                        <td width="10%"></td>
                                        <td width="10%"></td>
                                        <td width="10%"></td>
                                        <td width="10%"></td>
                                        <td width="10%"></td>
                                    </tr>
                                    <tr>
                                        <th colspan="10">
                                            TRANSFER PASIEN ANTAR RUANG
                                        </th>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                        TANGGAL / WAKTU TRANSFER
                                        </td>
                                        <td colspan="3">
                                            <input type="date" name="tgl_transfer_p" id="tgl_transfer_p" value="<?= date('Y-m-d');?>" style="width:50%; height:27px;" readonly>
                                            <input type="time" name="wkt_transfer_p" id="wkt_transfer_p" value="<?= date('H:i:s');?>" style="width:47%; height:27px;" readonly>
                                            <input type="hidden" name="no_rm" value="<?= $no_rm;?>">
                                        </td>
                                        <td colspan="2">
                                            TUJUAN TRANSFER
                                        </td>
                                        <td colspan="3">
                                            <select name="Tujuan_Transfer" style="width:100%; height:27px;">
                                                <option value="rawat_inap">INSTALASI RAWAT INAP</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">DIAGNOSA UTAMA </td>
                                        <td colspan="3">
                                            <input type="text" name="diagnosa_utama_cd" id="diagnosa_utama_cd" style="width: 25%; height: 27px;">
                                            <input type="text" name="diagnosa_utama_nm" id="diagnosa_utama_nm" style="width: 60%; height: 27px;">
                                            <button name="shw_diagnosa" id="shw_diagnosa" style="height:27px;"><i class="fa fa-fw fa-search"></i></button>
                                        </td>
                                        <td colspan="2">DIAGNOSA #4 </td>
                                        <td colspan="3">
                                            <input type="text" name="diagnosa_s4_cd" id="diagnosa_s4_cd" style="width: 25%; height: 27px;">
                                            <input type="text" name="diagnosa_s4_nm" id="diagnosa_s4_nm" style="width: 60%; height: 27px;">
                                            <button name="shw_diagnosa" id="shw_diagnosa" style="height:27px;"><i class="fa fa-fw fa-search"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">DIAGNOSA #1 </td>
                                        <td colspan="3">
                                            <input type="text" name="diagnosa_s1_cd" id="diagnosa_s1_cd" style="width: 25%; height: 27px;">
                                            <input type="text" name="diagnosa_s1_nm" id="diagnosa_s1_nm" style="width: 60%; height: 27px;">
                                            <button name="shw_diagnosa" id="shw_diagnosa" style="height:27px;"><i class="fa fa-fw fa-search"></i></button>
                                        </td>
                                        <td colspan="2">DIAGNOSA #5 
                                        </td>
                                        <td colspan="3">
                                            <input type="text" name="diagnosa_s5_cd" id="diagnosa_s5_cd" style="width: 25%; height: 27px;">
                                            <input type="text" name="diagnosa_s5_nm" id="diagnosa_s5_nm" style="width: 60%; height: 27px;">
                                            <button name="shw_diagnosa" id="shw_diagnosa" style="height:27px;"><i class="fa fa-fw fa-search"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">DIAGNOSA #2 
                                        </td>
                                        <td colspan="3">
                                            <input type="text" name="diagnosa_s2_cd" id="diagnosa_s2_cd" style="width: 25%; height: 27px;">
                                            <input type="text" name="diagnosa_s2_nm" id="diagnosa_s2_nm" style="width: 60%; height: 27px;">
                                            <button name="shw_diagnosa" id="shw_diagnosa" style="height:27px;"><i class="fa fa-fw fa-search"></i></button>
                                        </td>
                                        <td colspan="2">DIAGNOSA #6 
                                        </td>
                                        <td colspan="3">
                                            <input type="text" name="diagnosa_s6_cd" id="diagnosa_s6_cd" style="width: 25%; height: 27px;">
                                            <input type="text" name="diagnosa_s6_nm" id="diagnosa_s6_nm" style="width: 60%; height: 27px;">
                                            <button name="shw_diagnosa" id="shw_diagnosa" style="height:27px;"><i class="fa fa-fw fa-search"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">DIAGNOSA #3 </td>
                                        <td colspan="3">
                                            <input type="text" name="diagnosa_s3_cd" id="diagnosa_s3_cd" style="width: 25%; height: 27px;">
                                            <input type="text" name="diagnosa_s3_nm" id="diagnosa_s3_nm" style="width: 60%; height: 27px;">
                                            <button name="shw_diagnosa" id="shw_diagnosa" style="height:27px;"><i class="fa fa-fw fa-search"></i></button>
                                        </td>
                                        <td colspan="2">
                                            
                                        </td>
                                        <td colspan="3">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="10">ALASAN TRANSFER </th>
                                    </tr>
                                    <tr>
                                        <td colspan="2">1. KONDISI PASIEN </td>
                                        <td colspan="3">
                                            <label style="font-weight: normal;"><input type="radio" name="kondisi_pasien" value="membaik">MEMBAIK</label>
                                            <label style="font-weight: normal;"><input type="radio" name="kondisi_pasien" value="stabil">STABIL</label>
                                            <label style="font-weight: normal;"><input type="radio" name="kondisi_pasien" value="tidak_berubah">TIDAK ADA PERUBAHAN</label>			
                                        </td>
                                        <td colspan="5">
                                            4. LAIN - LAIN 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">2. FASILITAS </td>
                                        <td colspan="3">
                                            <label style="font-weight: normal;"><input type="radio" name="kon_fasilitas" id="kon_fasilitas" value="Kurang Memadai">KURANG MEMADAI</label>
                                            <label style="font-weight: normal;"><input type="radio" name="kon_fasilitas" id="kon_fasilitas" value="Butuh Yang Lebih Baik">BUTUH YANG LEBIH BAIK</label>			</td>
                                        <td colspan="5" rowspan="3">
                                            <textarea name="ket_alasan_lain" id="ket_alasan_lain" rows="3" style="width: 100%;" placeholder="KETERANGAN"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">3. TENAGA</td>
                                        <td colspan="3">
                                            <label style="font-weight: normal;"><input type="radio" name="kon_tenaga" value="Butuh Tenaga Ahli">BUTUH TENAGA AHLI</label>
                                            <label style="font-weight: normal;"><input type="radio" name="kon_tenaga" value="Jumlah Tenaga Kurang">JUMLAH TENAGA KURANG</label>			</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            METODE TRANSFER
                                        </td>
                                        <td colspan="8">
                                            <label style="font-weight: normal;margin-right:10px;"><input type="radio" name="method_trans" value="Kursi Roda">KURSI RODA</label>
                                            <label style="font-weight: normal;margin-right:10px;"><input type="radio" name="method_trans" value="Tempat Tidur">TEMPAT TIDUR</label>
                                            <label style="font-weight: normal;margin-right:10px;"><input type="radio" name="method_trans" value="Brankar">BRANKAR</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="10">PERSETUJUAN KELUARGA PASIEN </th>
                                    </tr>
                                    <tr>
                                        <td colspan="5">APAKAH KELUARGA / PASIEN MENGETAHUI / DAN MENYETUJUI ALASAN PEMINDAHAN : </td>
                                        <td colspan="5">
                                            <label style="font-weight: normal;"><input type="radio" name="persetujuan_kel" value="Disetujui">DISETUJUI</label>
                                            <label style="font-weight: normal;"><input type="radio" name="persetujuan_kel" value="Tidak Disetujui">TIDAK DI SETUJUI</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" rowspan="3">BILA PEMBERI PERSETUJUAN ADALAH KELUARGA PASIEN, LENGKAPI FORM BERIKUT : </td>
                                        <td colspan="2">NAMA LENGKAP </td>
                                        <td colspan="3">
                                            <input type="text" name="namal_k" id="namal_k" style="width: 100%; height: 27px;" placeholder="NAMA LENGKAP">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">HUBUNGAN DENGAN PASIEN </td>
                                        <td colspan="3">
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="hub_d_pasien" value="Ayah">AYAH</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="hub_d_pasien" value="Ibu">IBU</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="hub_d_pasien" value="Suami">SUAMI</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="hub_d_pasien" value="Istri">ISTRI</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="hub_d_pasien" value="Kakak">KAKAK</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="hub_d_pasien" value="Adik">ADIK</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="hub_d_pasien" value="Anak">ANAK</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="hub_d_pasien" value="Lainnya">LAINNYA</label>	
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">KETERANGAN</td>
                                        <td colspan="3">
                                            <input type="text" name="ket_kekerabatan" id="ket_kekerabatan" placeholder="KETERANGAN" style="width: 100%; height: 27px;">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <th colspan="10">PERALATAN YANG MENYERTAI SAAT PASIEN PINDAH </th>
                                        </tr>
                                        <tr>
                                        <td colspan="2">O2 PORTABLE </td>
                                        <td colspan="3">
                                            <input type="number" name="o2_portable_v" id="o2_portable_v" style="width: 60%; height: 27px; margin-right: 10px;">x/Menit
                                        </td>
                                        <td colspan="5">
                                            <label style="font-weight:normal; margin-right:10px;"><input type="checkbox" name="alat_pindah[]" id="alat_pindah" value="Suction">SUCTION</label>
                                            <label style="font-weight:normal; margin-right:10px;"><input type="checkbox" name="alat_pindah[]" id="alat_pindah" value="Ventilator">VENTILATOR</label>
                                            <label style="font-weight:normal; margin-right:10px;"><input type="checkbox" name="alat_pindah[]" id="alat_pindah" value="NGT">NGT</label>
                                            <label style="font-weight:normal; margin-right:10px;"><input type="checkbox" name="alat_pindah[]" id="alat_pindah" value="Syringe Pump">SYRINGE PUMP</label>
                                            <label style="font-weight:normal; margin-right:10px;"><input type="checkbox" name="alat_pindah[]" id="alat_pindah" value="Infus">INFUS</label>
                                            <label style="font-weight:normal; margin-right:10px;"><input type="checkbox" name="alat_pindah[]" id="alat_pindah" value="Kateter Urine">KATETER URINE</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="10">
                                            KEADAAN PASIEN SAAT TRANSFER
                                        </th>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            KEADAAN UMUM
                                        </td>
                                        <td colspan="3">
                                            <input type="text" name="kesadaran_u_p" id="kesadaran_u_p" style="width: 100%; height: 27px;">
                                        </td>
                                        <td colspan="2">
                                            KESADARAN
                                        </td>
                                        <td colspan="3">
                                            <input type="text" name="kesadaran_p" id="kesadaran_p" style="width: 80%; height: 27px;">
                                            GSC
                                        </td>
                                    </tr>                                
                                    <tr>
                                        <td colspan="2">PENDARAHAN</td>
                                        <td colspan="8">
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="pendarahan_p" value="TidaK Ada">TIDAK ADA</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="pendarahan_p" value="Terkontrol">TERKONTROL</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="pendarahan_p" value="Tidak Terkontrol">TIDAK TERKONTROL</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="10">TANDA - TANDA VITAL </th>
                                    </tr>
                                    <tr>			
                                        <td colspan="2">
                                            TD DIASTOLIK 
                                        </td>
                                        <td colspan="3">
                                            <input type="number" name="td_diastolik" id="td_diastolik" style="width: 80%; height: 27px;">
                                            mmHg 
                                        </td>
                                        <td colspan="2">
                                            PERNAPASAN
                                        </td>
                                        <td colspan="3">
                                            <input type="number" name="pernapasan_p" id="pernapasan_p" style="width: 80%; height: 27px;">
                                            x/i 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">TD SISTOLIK </td>
                                        <td colspan="3">
                                            <input type="number" name="td_sistolik" id="td_sistolik" style="width: 80%; height: 27px;">
                                        mmHg 
                                        </td>
                                        <td colspan="2">NADI</td>
                                        <td colspan="3">
                                            <input type="number" name="nadi_p" id="nadi_p" style="width: 80%; height: 27px;">
                                        x/i 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">WARNA KULIT </td>
                                        <td colspan="3">
                                            <input type="text" name="warna_kulit" id="warna_kulit" style="width: 100%; height: 27px;">
                                        </td>
                                        <td colspan="2">SUHU</td>
                                        <td colspan="3">
                                            <input type="number" name="suhu_p" id="suhu_p" style="width: 80%; height: 27px;">
                                        °C </td>
                                    </tr>	  
                                    <tr>
                                        <th colspan="10">
                                            INFORMASI MEDIS
                                        </th>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <label style="font-weight: normal;"><input type="checkbox" name="info_medis[]" value="Disabilitas">DISABILITAS</label>
                                        </td>
                                        <td colspan="2">
                                            <label style="font-weight: normal;"><input type="checkbox" name="info_medis[]" value="Amputasi">AMPUTASI</label>
                                        </td>
                                        <td colspan="2">
                                            <label style="font-weight: normal;"><input type="checkbox" name="info_medis[]" value="Kontraktur">KONTRAKTUR</label>
                                        </td>
                                        <td colspan="2">
                                            <label style="font-weight: normal;"><input type="checkbox" name="info_medis[]" value="Dekubitus">DEKUBITUS</label>
                                        </td>
                                        <td colspan="2">
                                            <label style="font-weight: normal;"><input type="checkbox" name="info_medis[]" value="Gangguan Mental">GANGGUAN MENTAL</label>
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td colspan="2">
                                            <label style="font-weight: normal;"><input type="checkbox" name="info_medis[]" value="Inkontinensia Saliva">INKONTINENSIA SALIVA</label>
                                        </td>
                                        <td colspan="2">
                                            <label style="font-weight: normal;"><input type="checkbox" name="info_medis[]" value="Inkontinensia Alvi">INKONTINENSIA ALVI</label>
                                        </td>
                                        <td colspan="2">
                                            <label style="font-weight: normal;"><input type="checkbox" name="info_medis[]" value="Gangguan Bicara">GANGGUAN BICARA</label>
                                        </td>
                                        <td colspan="2">
                                            <label style="font-weight: normal;"><input type="checkbox" name="info_medis[]" value="Gangguan Pendengaran">GANGGUAN PENDENGARAN</label>
                                        </td>
                                        <td colspan="2">
                                            <label style="font-weight: normal;"><input type="checkbox" name="info_medis[]" value="Gangguan Penglihatan">GANGGUAN PENGLIHATAN</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <label style="font-weight: normal;"><input type="checkbox" name="info_medis[]" value="Inkontinensia Sensasi">INKONTINENSIA SENSASI</label>
                                        </td>
                                        <td colspan="2">
                                            <label style="font-weight: normal;"><input type="checkbox" name="info_medis[]" value="Gangguan Sensasi">GANGGUAN SENSASI</label>
                                        </td>
                                        <td colspan="2">
                                            <label style="font-weight: normal;"><input type="checkbox" name="info_medis[]" value="Inkontinensia Urine">INKONTINENSIA URINE</label>
                                        </td>
                                        <td colspan="2">
                                        </td>
                                        <td colspan="2">
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td colspan="5" rowspan="2">PEMERIKSAAN FISIS <em>(Status generalis termasuk yang signifikan)</em></td>
                                        <td colspan="5">
                                            <textarea rows="3" name="pemeriksaan_fisisg" id="pemeriksaan_fisisg" placeholder="PEMERIKSAAN FISIS ... " style="width: 100%; resize: vertical;"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <textarea rows="3" name="pemeriksaan_fisisg1" id="pemeriksaan_fisisg1" placeholder="PEMERIKSAAN FISIS ... " style="width: 100%; resize: vertical;"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" rowspan="2">PEMERIKSAAN FISIS <em>(Status lokalis termasuk yang signifikan)</em></td>
                                        <td colspan="5">
                                            <textarea rows="3" name="pemeriksaan_fisisl" id="pemeriksaan_fisisl" placeholder="PEMERIKSAAN FISIS ... " style="width: 100%; resize: vertical;"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <textarea rows="3" name="pemeriksaan_fisisl1" id="pemeriksaan_fisisl1" placeholder="PEMERIKSAAN FISIS ... " style="width: 100%; resize: vertical;"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            NAMA PETUGAS PENDAMPING SAAT TRANSFER PASIEN
                                        </td>
                                        <td colspan="5">
                                            <select name="nama_petugas" id="nama_petugas" style="width: 50%; height: 27px;">
                                                <option value="">NAMA PETUGAS PENDAMPING</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="10">POTENSI UNTUK DILAKUKAN REHABILITASI</th>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="potensi_rehab" id="potensi_rehab" value="Baik">BAIK</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="potensi_rehab" id="potensi_rehab" value="Sedang">SEDANG</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="potensi_rehab" id="potensi_rehab" value="Buruk">BURUK</label>
                                        </td>
                                        <td colspan="5">
                                            <textarea rows="3" name="ket_potensi_rehab" id="ket_potensi_rehab" placeholder="KETERANGAN POTENSI REHABILITASI" style="width: 100%; resize: vertical;"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="3" rowspan="2">
                                                AKTIVITAS DI TEMPAT TIDUR
                                        </th>
                                        <td colspan="3">BERGULING</td>
                                        <td colspan="4">
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="act_berguling" id="act_berguling" value="Mandiri">MANDIRI</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="act_berguling" id="act_berguling" value="Butuh Bantuan">BUTUH BANTUAN</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="act_berguling" id="act_berguling" value="Tidak Dapat Dilakukan">TIDAK DAPAT DILAKUKAN</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">DUDUK</td>
                                        <td colspan="4">
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="act_duduk" id="act_duduk" value="Mandiri">MANDIRI</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="act_duduk" id="act_duduk" value="Butuh Bantuan">BUTUH BANTUAN</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="act_duduk" id="act_duduk" value="Tidak Dapat Dilakukan">TIDAK DAPAT DILAKUKAN</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="3" rowspan="7">HIGIENE PRIBADI</th>
                                        <td colspan="3">WAJAH</td>
                                        <td colspan="4">
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_wajah" id="sts_wajah" value="Mandiri">MANDIRI</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_wajah" id="sts_wajah" value="Butuh Bantuan">BUTUH BANTUAN</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_wajah" id="sts_wajah" value="Tidak Dapat Dilakukan">TIDAK DAPAT DILAKUKAN</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">RAMBUT</td>
                                        <td colspan="4">
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_rambut" id="sts_rambut" value="Mandiri">MANDIRI</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_rambut" id="sts_rambut" value="Butuh Bantuan">BUTUH BANTUAN</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_rambut" id="sts_rambut" value="Tidak Dapat Dilakukan">TIDAK DAPAT DILAKUKAN</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">TANGAN</td>
                                        <td colspan="4">
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_tangan" id="sts_tangan" value="Mandiri">MANDIRI</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_tangan" id="sts_tangan" value="Butuh Bantuan">BUTUH BANTUAN</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_tangan" id="sts_tangan" value="Tidak Dapat Dilakukan">TIDAK DAPAT DILAKUKAN</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">BATANG TUBUH &amp; PERINEUM </td>
                                        <td colspan="4">
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_btgtubuh" id="sts_btgtubuh" value="Mandiri">MANDIRI</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_btgtubuh" id="sts_btgtubuh" value="Butuh Bantuan">BUTUH BANTUAN</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_btgtubuh" id="sts_btgtubuh" value="Tidak Dapat Dilakukan">TIDAK DAPAT DILAKUKAN</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">EKSTRIMITAS BAWAH </td>
                                        <td colspan="4">
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_eksbwh" id="sts_eksbwh" value="Mandiri">MANDIRI</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_eksbwh" id="sts_eksbwh" value="Butuh Bantuan">BUTUH BANTUAN</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_eksbwh" id="sts_eksbwh" value="Tidak Dapat Dilakukan">TIDAK DAPAT DILAKUKAN</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">TRAKTUS DIGESTIVUS </td>
                                        <td colspan="4">
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_trdig" id="sts_trdig" value="Mandiri">MANDIRI</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_trdig" id="sts_trdig" value="Butuh Bantuan">BUTUH BANTUAN</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_trdig" id="sts_trdig" value="Tidak Dapat Dilakukan">TIDAK DAPAT DILAKUKAN</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">TRAKTUS URINARIUS </td>
                                        <td colspan="4">
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_trurin" id="sts_trurin" value="Mandiri">MANDIRI</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_trurin" id="sts_trurin" value="Butuh Bantuan">BUTUH BANTUAN</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_trurin" id="sts_trurin" value="Tidak Dapat Dilakukan">TIDAK DAPAT DILAKUKAN</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="3" rowspan="3">BERPAKAIAN</th>
                                        <td colspan="3">EKSTRIMITAS ATAS </td>
                                        <td colspan="4">
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_peksatas" id="sts_peksatas" value="Mandiri">MANDIRI</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_peksatas" id="sts_peksatas" value="Butuh Bantuan">BUTUH BANTUAN</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_peksatas" id="sts_peksatas" value="Tidak Dapat Dilakukan">TIDAK DAPAT DILAKUKAN</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">BATANG TUBUH </td>
                                        <td colspan="4">
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_pbtgtbh" id="sts_pbtgtbh" value="Mandiri">MANDIRI</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_pbtgtbh" id="sts_pbtgtbh" value="Butuh Bantuan">BUTUH BANTUAN</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_pbtgtbh" id="sts_pbtgtbh" value="Tidak Dapat Dilakukan">TIDAK DAPAT DILAKUKAN</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">EKSTRIMITAS BAWAH </td>
                                        <td colspan="4">
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_peksbwh" id="sts_peksbwh" value="Mandiri">MANDIRI</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_peksbwh" id="sts_peksbwh" value="Butuh Bantuan">BUTUH BANTUAN</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_peksbwh" id="sts_peksbwh" value="Tidak Dapat Dilakukan">TIDAK DAPAT DILAKUKAN</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="6">MAKAN</th>
                                        <td colspan="4">
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_makan" id="sts_makan" value="Mandiri">MANDIRI</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_makan" id="sts_makan" value="Butuh Bantuan">BUTUH BANTUAN</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_makan" id="sts_makan" value="Tidak Dapat Dilakukan">TIDAK DAPAT DILAKUKAN</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="3" rowspan="2">
                                            PERGERAKAN
                                        </th>
                                        <td colspan="3">
                                            <input type="text" name="pergerakan1" id="pergerakan1" placeholder="MASUKAN PERGERAKAN PASIEN" style="width: 100%; height: 27px;">
                                        </td>
                                        <td colspan="4">
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_gerak1" id="sts_gerak1" value="Mandiri">MANDIRI</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_gerak1" id="sts_gerak1" value="Butuh Bantuan">BUTUH BANTUAN</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_gerak1" id="sts_gerak1" value="Tidak Dapat Dilakukan">TIDAK DAPAT DILAKUKAN</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <input type="text" name="pergerakan2" id="pergerakan2" placeholder="MASUKAN PERGERAKAN PASIEN" style="width: 100%; height: 27px;">
                                        </td>
                                        <td colspan="4">
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_gerak2" id="sts_gerak2" value="Mandiri">MANDIRI</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_gerak2" id="sts_gerak2" value="Butuh Bantuan">BUTUH BANTUAN</label>
                                            <label style="font-weight: normal; margin-right: 10px;"><input type="radio" name="sts_gerak2" id="sts_gerak2" value="Tidak Dapat Dilakukan">TIDAK DAPAT DILAKUKAN</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="5">PEMERIKSAAN  PENUNJANG DIAGNOSTIK YANG SUDAH DILAKUKAN (EKG, LAB DLL) </th>
                                        <th colspan="5">INTERVENSI/TINDAKAN  YANG SUDAH DILAKUKAN :</th>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <textarea rows="3" name="tunjang_diagnostik" id="tunjang_diagnostik" placeholder="MASUKAN PENUNJANG DIAGNOSTIK" style="width: 100%; resize: vertical;"></textarea>
                                        </td>
                                        <td colspan="5">
                                            <textarea rows="3" name="tindakan_sdh" id="tindakan_sdh" placeholder="MASUKAN TINDAKAN YANG SUDAH DILAKUKAN" style="width: 100%; resize: vertical;"></textarea>	
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <textarea rows="3" name="tunjang_diagnostik1" id="tunjang_diagnostik1" placeholder="MASUKAN PENUNJANG DIAGNOSTIK" style="width: 100%; resize: vertical;"></textarea>
                                        </td>
                                        <td colspan="5">
                                            <textarea rows="3" name="tindakan_sdh1" id="tindakan_sdh1" placeholder="MASUKAN TINDAKAN YANG SUDAH DILAKUKAN" style="width: 100%; resize: vertical;"></textarea>	
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <textarea rows="3" name="tunjang_diagnostik2" id="tunjang_diagnostik2" placeholder="MASUKAN PENUNJANG DIAGNOSTIK" style="width: 100%; resize: vertical;"></textarea>
                                        </td>
                                        <td colspan="5">
                                            <textarea rows="3" name="tindakan_sdh2" id="tindakan_sdh2" placeholder="MASUKAN TINDAKAN YANG SUDAH DILAKUKAN" style="width: 100%; resize: vertical;"></textarea>	
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="5">DIET : </th>
                                        <th colspan="5"><p>RENCANA PERAWATAN SELANJUTNYA :</p></th>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <textarea rows="3" name="diet" id="diet" placeholder="MASUKAN DIET" style="width: 100%; resize: vertical;"></textarea>	
                                        </td>
                                        <td colspan="5">
                                            <textarea rows="3" name="rencana_perawatan" id="rencana_perawatan" placeholder="MASUKAN RENCANA PERAWATAN" style="width: 100%; resize: vertical;"></textarea>	
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <textarea rows="3" name="diet1" id="diet1" placeholder="MASUKAN DIET" style="width: 100%; resize: vertical;"></textarea>	
                                        </td>
                                        <td colspan="5">
                                            <textarea rows="3" name="rencana_perawatan1" id="rencana_perawatan1" placeholder="MASUKAN RENCANA PERAWATAN" style="width: 100%; resize: vertical;"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <textarea rows="3" name="diet2" id="diet2" placeholder="MASUKAN DIET" style="width: 100%; resize: vertical;"></textarea>	
                                        </td>
                                        <td colspan="5">
                                            <textarea rows="3" name="rencana_perawatan2" id="rencana_perawatan2" placeholder="MASUKAN RENCANA PERAWATAN" style="width: 100%; resize: vertical;"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="10">TERAPI PINDAH</th>
                                    </tr>
                                    <tr>
                                        <th>NOMOR</th>
                                        <th colspan="2">NAMA OBAT</th>
                                        <th>DOSIS</th>
                                        <th>WAKTU PENGGUNAAN</th>
                                        <th>NOMOR</th>
                                        <th colspan="2">NAMA OBAT</th>
                                        <th>DOSIS</th>
                                        <th>WAKTU PENGGUNAAN</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td colspan="2">
                                            <input type="text" name="nama_obat" style="width:100%; height:27px;">
                                        </td>
                                        <td>
                                            <input type="text" name="dosis" style="width:100%; height:27px;">
                                        </td>
                                        <td>
                                            <input type="text" name="waktu_penggunaan" style="width:100%; height:27px; ">
                                        </td>
                                        <td>
                                            6
                                        </td>
                                        <td colspan="2">
                                            <input type="text" name="nama_obat6" style="width:100%; height:27px;   ">
                                        </td>
                                        <td>
                                            <input type="text" name="dosis6" style="width:100%; height:27px;   ">
                                        </td>
                                        <td>
                                            <input type="text" name="waktu_penggunaan6" style="width:100%; height:27px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        <td colspan="2">
                                            <input type="text" name="nama_obat2" style="width:100%; height:27px;   ">
                                        </td>
                                        <td>
                                            <input type="text" name="dosis2" style="width:100%; height:27px;   ">
                                        </td>
                                        <td>
                                            <input type="text" name="waktu_penggunaan2" style="width:100%; height:27px;">
                                        </td>
                                        <td>
                                            7
                                        </td>
                                        <td colspan="2">
                                            <input type="text" name="nama_obat7" style="width:100%; height:27px;   ">
                                        </td>
                                        <td>
                                            <input type="text" name="dosis7" style="width:100%; height:27px;   ">
                                        </td>
                                        <td>
                                            <input type="text" name="waktu_penggunaan7" style="width:100%; height:27px;">
                                        </td>
                                    </tr>
                                            <tr>
                                        <td>
                                            3
                                        </td>
                                        <td colspan="2">
                                            <input type="text" name="nama_obat3" style="width:100%; height:27px;   ">
                                        </td>
                                        <td>
                                            <input type="text" name="dosis3" style="width:100%; height:27px;   ">
                                        </td>
                                        <td>
                                            <input type="text" name="waktu_penggunaan3" style="width:100%; height:27px;">
                                        </td>
                                        <td>
                                            8
                                        </td>
                                        <td colspan="2">
                                            <input type="text" name="nama_obat8" style="width:100%; height:27px;   ">
                                        </td>
                                        <td>
                                            <input type="text" name="dosis8" style="width:100%; height:27px;   ">
                                        </td>
                                        <td>
                                            <input type="text" name="waktu_penggunaan8" style="width:100%; height:27px;">
                                        </td>
                                    </tr>
                                            <tr>
                                        <td>
                                            4
                                        </td>
                                        <td colspan="2">
                                            <input type="text" name="nama_obat4" style="width:100%; height:27px;   ">
                                        </td>
                                        <td>
                                            <input type="text" name="dosis4" style="width:100%; height:27px;   ">
                                        </td>
                                        <td>
                                            <input type="text" name="waktu_penggunaan4" style="width:100%; height:27px;">
                                        </td>
                                        <td>
                                            9
                                        </td>
                                        <td colspan="2">
                                            <input type="text" name="nama_obat9" style="width:100%; height:27px;   ">
                                        </td>
                                        <td>
                                            <input type="text" name="dosis9" style="width:100%; height:27px;   ">
                                        </td>
                                        <td>
                                            <input type="text" name="waktu_penggunaan9" style="width:100%; height:27px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            5
                                        </td>
                                        <td colspan="2">
                                            <input type="text" name="nama_obat5" style="width:100%; height:27px;   ">
                                        </td>
                                        <td>
                                            <input type="text" name="dosis5" style="width:100%; height:27px;   ">
                                        </td>
                                        <td>
                                            <input type="text" name="waktu_penggunaan5" style="width:100%; height:27px;">
                                        </td>
                                        <td>
                                            10
                                        </td>
                                        <td colspan="2">
                                            <input type="text" name="nama_obat10" style="width:100%; height:27px;  ">
                                        </td>
                                        <td>
                                            <input type="text" name="dosis10" style="width:100%; height:27px;  ">
                                        </td>
                                        <td>
                                            <input type="text" name="waktu_penggunaan10" style="width:100%; height:27px;   ">
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td colspan="10" align="right">
                                            <input type="submit" class="btn btn-block btn-primary" value="SIMPAN" style="width:20%; margin-top:10px; margin-bottom:10px; display:inline">
                                            <input type="reset" class="btn btn-block btn-default" value="RESET FORM" style="width:20%; margin-top:10px; margin-bottom:10px; display:inline">
                                        </td>
                                    </tr>                               
                                </tbody>
                            </table>
