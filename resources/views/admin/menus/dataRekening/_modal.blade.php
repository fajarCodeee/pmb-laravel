{{-- MODAL TAMBAH --}}
<div class="modal fade" id="modal-create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title">Buat Data Administrasi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-light">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputJenisAdministrasi">Jenis Administrasi</label>
                            <select name="inputJenisAdministrasi" class="form-control" id="inputJenisAdministrasi">
                                <option selected value=""> -- Pilih Jenis Administrasi --</option>
                                <option value="Pendaftaran">Pendaftaran</option>
                                <option value="Registrasi">Registrasi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputNamaBank">Nama Bank</label>
                            <select name="inputNamaBank" class="form-control" id="inputNamaBank">
                                <option selected value=""> -- Pilih Nama Bank --</option>
                                <option value="BANK BRI">BANK BRI</option>
                                <option value="BANK EKSPOR INDONESIA">BANK EKSPOR INDONESIA</option>
                                <option value="BANK MANDIRI">BANK MANDIRI</option>
                                <option value="BANK BNI">BANK BNI</option>
                                <option value="BANK DANAMON">BANK DANAMON</option>
                                <option value="PERMATA BANK">PERMATA BANK</option>
                                <option value="BANK BCA">BANK BCA</option>
                                <option value="BANK BII">BANK BII</option>
                                <option value="BANK PANIN">BANK PANIN</option>
                                <option value="BANK ARTA NIAGA KENCANA">BANK ARTA NIAGA KENCANA</option>
                                <option value="BANK NIAGA">BANK NIAGA</option>
                                <option value="BANK BUANA IND">BANK BUANA IND</option>
                                <option value="BANK LIPPO">BANK LIPPO</option>
                                <option value="BANK NISP">BANK NISP</option>
                                <option value="AMERICAN EXPRESS BANK LTD">AMERICAN EXPRESS BANK LTD</option>
                                <option value="CITIBANK N.A.">CITIBANK N.A.</option>
                                <option value="JP. MORGAN CHASE BANK, N.A.">JP. MORGAN CHASE BANK, N.A.</option>
                                <option value="BANK OF AMERICA, N.A">BANK OF AMERICA, N.A</option>
                                <option value="ING INDONESIA BANK">ING INDONESIA BANK</option>
                                <option value="BANK MULTICOR TBK.">BANK MULTICOR TBK.</option>
                                <option value="BANK ARTHA GRAHA">BANK ARTHA GRAHA</option>
                                <option value="BANK CREDIT AGRICOLE INDOSUEZ">BANK CREDIT AGRICOLE INDOSUEZ</option>
                                <option value="THE BANGKOK BANK COMP. LTD">THE BANGKOK BANK COMP. LTD</option>
                                <option value="THE HONGKONG & SHANGHAI B.C.">THE HONGKONG & SHANGHAI B.C.</option>
                                <option value="THE BANK OF TOKYO MITSUBISHI UFJ LTD">THE BANK OF TOKYO MITSUBISHI UFJ
                                    LTD</option>
                                <option value="BANK SUMITOMO MITSUI INDONESIA">BANK SUMITOMO MITSUI INDONESIA</option>
                                <option value="BANK DBS INDONESIA">BANK DBS INDONESIA</option>
                                <option value="BANK RESONA PERDANIA">BANK RESONA PERDANIA</option>
                                <option value="BANK MIZUHO INDONESIA">BANK MIZUHO INDONESIA</option>
                                <option value="STANDARD CHARTERED BANK">STANDARD CHARTERED BANK</option>
                                <option value="BANK ABN AMRO">BANK ABN AMRO</option>
                                <option value="BANK KEPPEL TATLEE BUANA">BANK KEPPEL TATLEE BUANA</option>
                                <option value="BANK CAPITAL INDONESIA, TBK.">BANK CAPITAL INDONESIA, TBK.</option>
                                <option value="BANK BNP PARIBAS INDONESIA">BANK BNP PARIBAS INDONESIA</option>
                                <option value="BANK UOB INDONESIA">BANK UOB INDONESIA</option>
                                <option value="KOREA EXCHANGE BANK DANAMON">KOREA EXCHANGE BANK DANAMON</option>
                                <option value="RABOBANK INTERNASIONAL INDONESIA">RABOBANK INTERNASIONAL INDONESIA
                                </option>
                                <option value="ANZ PANIN BANK">ANZ PANIN BANK</option>
                                <option value="DEUTSCHE BANK AG.">DEUTSCHE BANK AG.</option>
                                <option value="BANK WOORI INDONESIA">BANK WOORI INDONESIA</option>
                                <option value="BANK OF CHINA LIMITED">BANK OF CHINA LIMITED</option>
                                <option value="BANK BUMI ARTA">BANK BUMI ARTA</option>
                                <option value="BANK EKONOMI">BANK EKONOMI</option>
                                <option value="BANK ANTARDAERAH">BANK ANTARDAERAH</option>
                                <option value="BANK HAGA">BANK HAGA</option>
                                <option value="BANK IFI">BANK IFI</option>
                                <option value="BANK CENTURY, TBK.">BANK CENTURY, TBK.</option>
                                <option value="BANK MAYAPADA">BANK MAYAPADA</option>
                                <option value="BANK JABAR">BANK JABAR</option>
                                <option value="BANK DKI">BANK DKI</option>
                                <option value="BPD DIY">BPD DIY</option>
                                <option value="BANK JATENG">BANK JATENG</option>
                                <option value="BANK JATIM">BANK JATIM</option>
                                <option value="BPD JAMBI">BPD JAMBI</option>
                                <option value="BPD ACEH">BPD ACEH</option>
                                <option value="BANK SUMUT">BANK SUMUT</option>
                                <option value="BANK NAGARI">BANK NAGARI</option>
                                <option value="BANK RIAU">BANK RIAU</option>
                                <option value="BANK SUMSEL">BANK SUMSEL</option>
                                <option value="BANK LAMPUNG">BANK LAMPUNG</option>
                                <option value="BPD KALSEL">BPD KALSEL</option>
                                <option value="BPD KALIMANTAN BARAT">BPD KALIMANTAN BARAT</option>
                                <option value="BPD KALTIM">BPD KALTIM</option>
                                <option value="BPD KALTENG">BPD KALTENG</option>
                                <option value="BPD SULSEL">BPD SULSEL</option>
                                <option value="BANK SULUT">BANK SULUT</option>
                                <option value="BPD NTB">BPD NTB</option>
                                <option value="BPD BALI">BPD BALI</option>
                                <option value="BANK NTT">BANK NTT</option>
                                <option value="BANK MALUKU">BANK MALUKU</option>
                                <option value="BPD PAPUA">BPD PAPUA</option>
                                <option value="BANK BENGKULU">BANK BENGKULU</option>
                                <option value="BPD SULAWESI TENGAH">BPD SULAWESI TENGAH</option>
                                <option value="BANK SULTRA">BANK SULTRA</option>
                                <option value="BANK NUSANTARA PARAHYANGAN">BANK NUSANTARA PARAHYANGAN</option>
                                <option value="BANK SWADESI">BANK SWADESI</option>
                                <option value="BANK MUAMALAT">BANK MUAMALAT</option>
                                <option value="BANK MESTIKA">BANK MESTIKA</option>
                                <option value="BANK METRO EXPRESS">BANK METRO EXPRESS</option>
                                <option value="BANK SHINTA INDONESIA">BANK SHINTA INDONESIA</option>
                                <option value="BANK MASPION">BANK MASPION</option>
                                <option value="BANK HAGAKITA">BANK HAGAKITA</option>
                                <option value="BANK GANESHA">BANK GANESHA</option>
                                <option value="BANK WINDU KENTJANA">BANK WINDU KENTJANA</option>
                                <option value="HALIM INDONESIA BANK">HALIM INDONESIA BANK</option>
                                <option value="BANK HARMONI INTERNATIONAL">BANK HARMONI INTERNATIONAL</option>
                                <option value="BANK KESAWAN">BANK KESAWAN</option>
                                <option value="BANK TABUNGAN NEGARA (PERSERO)">BANK TABUNGAN NEGARA (PERSERO)</option>
                                <option value="BANK HIMPUNAN SAUDARA 1906, TBK .">BANK HIMPUNAN SAUDARA 1906, TBK .
                                </option>
                                <option value="BANK TABUNGAN PENSIUNAN NASIONAL">BANK TABUNGAN PENSIUNAN NASIONAL
                                </option>
                                <option value="BANK SWAGUNA">BANK SWAGUNA</option>
                                <option value="BANK JASA ARTA">BANK JASA ARTA</option>
                                <option value="BANK MEGA">BANK MEGA</option>
                                <option value="BANK JASA JAKARTA">BANK JASA JAKARTA</option>
                                <option value="BANK BUKOPIN">BANK BUKOPIN</option>
                                <option value="BANK SYARIAH MANDIRI">BANK SYARIAH MANDIRI</option>
                                <option value="BANK BISNIS INTERNASIONAL">BANK BISNIS INTERNASIONAL</option>
                                <option value="BANK SRI PARTHA">BANK SRI PARTHA</option>
                                <option value="BANK JASA JAKARTA">BANK JASA JAKARTA</option>
                                <option value="BANK BINTANG MANUNGGAL">BANK BINTANG MANUNGGAL</option>
                                <option value="BANK BUMIPUTERA">BANK BUMIPUTERA</option>
                                <option value="BANK YUDHA BHAKTI">BANK YUDHA BHAKTI</option>
                                <option value="BANK MITRANIAGA">BANK MITRANIAGA</option>
                                <option value="BANK AGRO NIAGA">BANK AGRO NIAGA</option>
                                <option value="BANK INDOMONEX">BANK INDOMONEX</option>
                                <option value="BANK ROYAL INDONESIA">BANK ROYAL INDONESIA</option>
                                <option value="BANK ALFINDO">BANK ALFINDO</option>
                                <option value="BANK SYARIAH MEGA">BANK SYARIAH MEGA</option>
                                <option value="BANK INA PERDANA">BANK INA PERDANA</option>
                                <option value="BANK HARFA">BANK HARFA</option>
                                <option value="PRIMA MASTER BANK">PRIMA MASTER BANK</option>
                                <option value="BANK PERSYARIKATAN INDONESIA">BANK PERSYARIKATAN INDONESIA</option>
                                <option value="BANK AKITA">BANK AKITA</option>
                                <option value="LIMAN INTERNATIONAL BANK">LIMAN INTERNATIONAL BANK</option>
                                <option value="ANGLOMAS INTERNASIONAL BANK">ANGLOMAS INTERNASIONAL BANK</option>
                                <option value="BANK DIPO INTERNATIONAL">BANK DIPO INTERNATIONAL</option>
                                <option value="BANK KESEJAHTERAAN EKONOMI">BANK KESEJAHTERAAN EKONOMI</option>
                                <option value="BANK UIB">BANK UIB</option>
                                <option value="BANK ARTOS IND">BANK ARTOS IND</option>
                                <option value="BANK PURBA DANARTA">BANK PURBA DANARTA</option>
                                <option value="BANK MULTI ARTA SENTOSA">BANK MULTI ARTA SENTOSA</option>
                                <option value="BANK MAYORA">BANK MAYORA</option>
                                <option value="BANK INDEX SELINDO">BANK INDEX SELINDO</option>
                                <option value="BANK VICTORIA INTERNATIONAL">BANK VICTORIA INTERNATIONAL</option>
                                <option value="BANK EKSEKUTIF">BANK EKSEKUTIF</option>
                                <option value="CENTRATAMA NASIONAL BANK">CENTRATAMA NASIONAL BANK</option>
                                <option value="BANK FAMA INTERNASIONAL">BANK FAMA INTERNASIONAL</option>
                                <option value="BANK SINAR HARAPAN BALI">BANK SINAR HARAPAN BALI</option>
                                <option value="BANK HARDA">BANK HARDA</option>
                                <option value="BANK FINCONESIA">BANK FINCONESIA</option>
                                <option value="BANK MERINCORP">BANK MERINCORP</option>
                                <option value="BANK MAYBANK INDOCORP">BANK MAYBANK INDOCORP</option>
                                <option value="BANK OCBC – INDONESIA">BANK OCBC – INDONESIA</option>
                                <option value="BANK CHINA TRUST INDONESIA">BANK CHINA TRUST INDONESIA</option>
                                <option value="BANK COMMONWEALTH">BANK COMMONWEALTH</option>
                                <option value="BANK BJB SYARIAH">BANK BJB SYARIAH</option>
                                <option value="BPR KS (KARYAJATNIKA SEDAYA)">BPR KS (KARYAJATNIKA SEDAYA)</option>
                                <option value="INDOSAT DOMPETKU">INDOSAT DOMPETKU</option>
                                <option value="TELKOMSEL TCASH">TELKOMSEL TCASH</option>
                                <option value="LINKAJA">LINKAJA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputNomerRekening">Nomer Rekening</label>
                            <input type="text" name="inputNomerRekening" id="inputNomerRekening"
                                class="form-control" placeholder="Nomer Rekening">
                        </div>
                        <div class="form-group">
                            <label for="inputNamaPemilik">Atas Nama</label>
                            <input type="text" name="inputNamaPemilik" id="inputNamaPemilik" class="form-control"
                                placeholder="Atas Nama">
                        </div>
                        <div class="form-group">
                            <label for="inputJumlahAdministrasi">Nominal Administrasi</label>
                            <input type="text" name="inputJumlahAdministrasi" id="inputJumlahAdministrasi"
                                class="form-control" placeholder="Cth: 200.000">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" id="btn-save-rek">Save</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
{{-- MODAL EDIT --}}
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title">Data Administrasi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card-body">
                        <input type="hidden" id="id">
                        <div class="form-group">
                            <label for="inputJenisAdministrasi">Jenis Administrasi</label>
                            <select name="inputJenisAdministrasi" class="form-control"
                                id="inputJenisAdministrasi-edit">
                                <option selected value=""> -- Pilih Jenis Administrasi --</option>
                                <option value="Pendaftaran">Pendaftaran</option>
                                <option value="Registrasi">Registrasi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputNamaBank">Nama Bank</label>
                            <select name="inputNamaBank" class="form-control" id="inputNamaBank-edit">
                                <option selected value=""> -- Pilih Nama Bank --</option>
                                <option value="BANK BRI">BANK BRI</option>
                                <option value="BANK EKSPOR INDONESIA">BANK EKSPOR INDONESIA</option>
                                <option value="BANK MANDIRI">BANK MANDIRI</option>
                                <option value="BANK BNI">BANK BNI</option>
                                <option value="BANK DANAMON">BANK DANAMON</option>
                                <option value="PERMATA BANK">PERMATA BANK</option>
                                <option value="BANK BCA">BANK BCA</option>
                                <option value="BANK BII">BANK BII</option>
                                <option value="BANK PANIN">BANK PANIN</option>
                                <option value="BANK ARTA NIAGA KENCANA">BANK ARTA NIAGA KENCANA</option>
                                <option value="BANK NIAGA">BANK NIAGA</option>
                                <option value="BANK BUANA IND">BANK BUANA IND</option>
                                <option value="BANK LIPPO">BANK LIPPO</option>
                                <option value="BANK NISP">BANK NISP</option>
                                <option value="AMERICAN EXPRESS BANK LTD">AMERICAN EXPRESS BANK LTD</option>
                                <option value="CITIBANK N.A.">CITIBANK N.A.</option>
                                <option value="JP. MORGAN CHASE BANK, N.A.">JP. MORGAN CHASE BANK, N.A.</option>
                                <option value="BANK OF AMERICA, N.A">BANK OF AMERICA, N.A</option>
                                <option value="ING INDONESIA BANK">ING INDONESIA BANK</option>
                                <option value="BANK MULTICOR TBK.">BANK MULTICOR TBK.</option>
                                <option value="BANK ARTHA GRAHA">BANK ARTHA GRAHA</option>
                                <option value="BANK CREDIT AGRICOLE INDOSUEZ">BANK CREDIT AGRICOLE INDOSUEZ</option>
                                <option value="THE BANGKOK BANK COMP. LTD">THE BANGKOK BANK COMP. LTD</option>
                                <option value="THE HONGKONG & SHANGHAI B.C.">THE HONGKONG & SHANGHAI B.C.</option>
                                <option value="THE BANK OF TOKYO MITSUBISHI UFJ LTD">THE BANK OF TOKYO MITSUBISHI UFJ
                                    LTD</option>
                                <option value="BANK SUMITOMO MITSUI INDONESIA">BANK SUMITOMO MITSUI INDONESIA</option>
                                <option value="BANK DBS INDONESIA">BANK DBS INDONESIA</option>
                                <option value="BANK RESONA PERDANIA">BANK RESONA PERDANIA</option>
                                <option value="BANK MIZUHO INDONESIA">BANK MIZUHO INDONESIA</option>
                                <option value="STANDARD CHARTERED BANK">STANDARD CHARTERED BANK</option>
                                <option value="BANK ABN AMRO">BANK ABN AMRO</option>
                                <option value="BANK KEPPEL TATLEE BUANA">BANK KEPPEL TATLEE BUANA</option>
                                <option value="BANK CAPITAL INDONESIA, TBK.">BANK CAPITAL INDONESIA, TBK.</option>
                                <option value="BANK BNP PARIBAS INDONESIA">BANK BNP PARIBAS INDONESIA</option>
                                <option value="BANK UOB INDONESIA">BANK UOB INDONESIA</option>
                                <option value="KOREA EXCHANGE BANK DANAMON">KOREA EXCHANGE BANK DANAMON</option>
                                <option value="RABOBANK INTERNASIONAL INDONESIA">RABOBANK INTERNASIONAL INDONESIA
                                </option>
                                <option value="ANZ PANIN BANK">ANZ PANIN BANK</option>
                                <option value="DEUTSCHE BANK AG.">DEUTSCHE BANK AG.</option>
                                <option value="BANK WOORI INDONESIA">BANK WOORI INDONESIA</option>
                                <option value="BANK OF CHINA LIMITED">BANK OF CHINA LIMITED</option>
                                <option value="BANK BUMI ARTA">BANK BUMI ARTA</option>
                                <option value="BANK EKONOMI">BANK EKONOMI</option>
                                <option value="BANK ANTARDAERAH">BANK ANTARDAERAH</option>
                                <option value="BANK HAGA">BANK HAGA</option>
                                <option value="BANK IFI">BANK IFI</option>
                                <option value="BANK CENTURY, TBK.">BANK CENTURY, TBK.</option>
                                <option value="BANK MAYAPADA">BANK MAYAPADA</option>
                                <option value="BANK JABAR">BANK JABAR</option>
                                <option value="BANK DKI">BANK DKI</option>
                                <option value="BPD DIY">BPD DIY</option>
                                <option value="BANK JATENG">BANK JATENG</option>
                                <option value="BANK JATIM">BANK JATIM</option>
                                <option value="BPD JAMBI">BPD JAMBI</option>
                                <option value="BPD ACEH">BPD ACEH</option>
                                <option value="BANK SUMUT">BANK SUMUT</option>
                                <option value="BANK NAGARI">BANK NAGARI</option>
                                <option value="BANK RIAU">BANK RIAU</option>
                                <option value="BANK SUMSEL">BANK SUMSEL</option>
                                <option value="BANK LAMPUNG">BANK LAMPUNG</option>
                                <option value="BPD KALSEL">BPD KALSEL</option>
                                <option value="BPD KALIMANTAN BARAT">BPD KALIMANTAN BARAT</option>
                                <option value="BPD KALTIM">BPD KALTIM</option>
                                <option value="BPD KALTENG">BPD KALTENG</option>
                                <option value="BPD SULSEL">BPD SULSEL</option>
                                <option value="BANK SULUT">BANK SULUT</option>
                                <option value="BPD NTB">BPD NTB</option>
                                <option value="BPD BALI">BPD BALI</option>
                                <option value="BANK NTT">BANK NTT</option>
                                <option value="BANK MALUKU">BANK MALUKU</option>
                                <option value="BPD PAPUA">BPD PAPUA</option>
                                <option value="BANK BENGKULU">BANK BENGKULU</option>
                                <option value="BPD SULAWESI TENGAH">BPD SULAWESI TENGAH</option>
                                <option value="BANK SULTRA">BANK SULTRA</option>
                                <option value="BANK NUSANTARA PARAHYANGAN">BANK NUSANTARA PARAHYANGAN</option>
                                <option value="BANK SWADESI">BANK SWADESI</option>
                                <option value="BANK MUAMALAT">BANK MUAMALAT</option>
                                <option value="BANK MESTIKA">BANK MESTIKA</option>
                                <option value="BANK METRO EXPRESS">BANK METRO EXPRESS</option>
                                <option value="BANK SHINTA INDONESIA">BANK SHINTA INDONESIA</option>
                                <option value="BANK MASPION">BANK MASPION</option>
                                <option value="BANK HAGAKITA">BANK HAGAKITA</option>
                                <option value="BANK GANESHA">BANK GANESHA</option>
                                <option value="BANK WINDU KENTJANA">BANK WINDU KENTJANA</option>
                                <option value="HALIM INDONESIA BANK">HALIM INDONESIA BANK</option>
                                <option value="BANK HARMONI INTERNATIONAL">BANK HARMONI INTERNATIONAL</option>
                                <option value="BANK KESAWAN">BANK KESAWAN</option>
                                <option value="BANK TABUNGAN NEGARA (PERSERO)">BANK TABUNGAN NEGARA (PERSERO)</option>
                                <option value="BANK HIMPUNAN SAUDARA 1906, TBK .">BANK HIMPUNAN SAUDARA 1906, TBK .
                                </option>
                                <option value="BANK TABUNGAN PENSIUNAN NASIONAL">BANK TABUNGAN PENSIUNAN NASIONAL
                                </option>
                                <option value="BANK SWAGUNA">BANK SWAGUNA</option>
                                <option value="BANK JASA ARTA">BANK JASA ARTA</option>
                                <option value="BANK MEGA">BANK MEGA</option>
                                <option value="BANK JASA JAKARTA">BANK JASA JAKARTA</option>
                                <option value="BANK BUKOPIN">BANK BUKOPIN</option>
                                <option value="BANK SYARIAH MANDIRI">BANK SYARIAH MANDIRI</option>
                                <option value="BANK BISNIS INTERNASIONAL">BANK BISNIS INTERNASIONAL</option>
                                <option value="BANK SRI PARTHA">BANK SRI PARTHA</option>
                                <option value="BANK JASA JAKARTA">BANK JASA JAKARTA</option>
                                <option value="BANK BINTANG MANUNGGAL">BANK BINTANG MANUNGGAL</option>
                                <option value="BANK BUMIPUTERA">BANK BUMIPUTERA</option>
                                <option value="BANK YUDHA BHAKTI">BANK YUDHA BHAKTI</option>
                                <option value="BANK MITRANIAGA">BANK MITRANIAGA</option>
                                <option value="BANK AGRO NIAGA">BANK AGRO NIAGA</option>
                                <option value="BANK INDOMONEX">BANK INDOMONEX</option>
                                <option value="BANK ROYAL INDONESIA">BANK ROYAL INDONESIA</option>
                                <option value="BANK ALFINDO">BANK ALFINDO</option>
                                <option value="BANK SYARIAH MEGA">BANK SYARIAH MEGA</option>
                                <option value="BANK INA PERDANA">BANK INA PERDANA</option>
                                <option value="BANK HARFA">BANK HARFA</option>
                                <option value="PRIMA MASTER BANK">PRIMA MASTER BANK</option>
                                <option value="BANK PERSYARIKATAN INDONESIA">BANK PERSYARIKATAN INDONESIA</option>
                                <option value="BANK AKITA">BANK AKITA</option>
                                <option value="LIMAN INTERNATIONAL BANK">LIMAN INTERNATIONAL BANK</option>
                                <option value="ANGLOMAS INTERNASIONAL BANK">ANGLOMAS INTERNASIONAL BANK</option>
                                <option value="BANK DIPO INTERNATIONAL">BANK DIPO INTERNATIONAL</option>
                                <option value="BANK KESEJAHTERAAN EKONOMI">BANK KESEJAHTERAAN EKONOMI</option>
                                <option value="BANK UIB">BANK UIB</option>
                                <option value="BANK ARTOS IND">BANK ARTOS IND</option>
                                <option value="BANK PURBA DANARTA">BANK PURBA DANARTA</option>
                                <option value="BANK MULTI ARTA SENTOSA">BANK MULTI ARTA SENTOSA</option>
                                <option value="BANK MAYORA">BANK MAYORA</option>
                                <option value="BANK INDEX SELINDO">BANK INDEX SELINDO</option>
                                <option value="BANK VICTORIA INTERNATIONAL">BANK VICTORIA INTERNATIONAL</option>
                                <option value="BANK EKSEKUTIF">BANK EKSEKUTIF</option>
                                <option value="CENTRATAMA NASIONAL BANK">CENTRATAMA NASIONAL BANK</option>
                                <option value="BANK FAMA INTERNASIONAL">BANK FAMA INTERNASIONAL</option>
                                <option value="BANK SINAR HARAPAN BALI">BANK SINAR HARAPAN BALI</option>
                                <option value="BANK HARDA">BANK HARDA</option>
                                <option value="BANK FINCONESIA">BANK FINCONESIA</option>
                                <option value="BANK MERINCORP">BANK MERINCORP</option>
                                <option value="BANK MAYBANK INDOCORP">BANK MAYBANK INDOCORP</option>
                                <option value="BANK OCBC – INDONESIA">BANK OCBC – INDONESIA</option>
                                <option value="BANK CHINA TRUST INDONESIA">BANK CHINA TRUST INDONESIA</option>
                                <option value="BANK COMMONWEALTH">BANK COMMONWEALTH</option>
                                <option value="BANK BJB SYARIAH">BANK BJB SYARIAH</option>
                                <option value="BPR KS (KARYAJATNIKA SEDAYA)">BPR KS (KARYAJATNIKA SEDAYA)</option>
                                <option value="INDOSAT DOMPETKU">INDOSAT DOMPETKU</option>
                                <option value="TELKOMSEL TCASH">TELKOMSEL TCASH</option>
                                <option value="LINKAJA">LINKAJA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputNomerRekening">Nomer Rekening</label>
                            <input type="text" name="inputNomerRekening" id="inputNomerRekening-edit"
                                class="form-control" placeholder="Nomer Rekening">
                        </div>
                        <div class="form-group">
                            <label for="inputNamaPemilik">Atas Nama</label>
                            <input type="text" name="inputNamaPemilik" id="inputNamaPemilik-edit"
                                class="form-control" placeholder="Atas Nama">
                        </div>
                        <div class="form-group">
                            <label for="inputJumlahAdministrasi">Nominal Administrasi</label>
                            <input type="text" name="inputJumlahAdministrasi" id="inputJumlahAdministrasi-edit"
                                class="form-control" placeholder="Cth: 200.000">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btn-save-edit">Save Changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
