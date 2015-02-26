@extends("layout.layout")

@section("content")
    <br/>
            <header>
                <div class="clearfix">
                    <div class="place-left">
                        <div class="span2">
                            <img src="images/icon.png"/>
                        </div>
                    </div>
                </div>
            </header>
                <hr />
            <h1>
                <a href="{{URL::to("login")}}"><i class="icon-arrow-left-3 fg-darker smaller"></i></a>
                Mendaftar akun<small class="on-right"></small>
            </h1>
            <label>Daftarkan sekolah mu untuk bergabung di SAS Application. Lengkapi dan isi form pendaftaran di bawah ini : </label>
            <div class="grid">
                <div class="row">
                    <div class="span6">
                        <label style="font-size: 10pt;">Nama Sekolah / Institusi</label>
                        <div class="input-control text">
                            <input type="text"/>
                        </div>
                        <label style="font-size: 10pt;">Email Sekolah</label>
                        <div class="input-control text">
                            <input type="text"/>
                        </div>
                        <label style="font-size: 10pt;">Nomer telepon sekolah</label>
                        <div class="input-control text size3">
                            <input type="text"/>
                        </div>

                        <label style="font-size: 10pt;">User ID</label>
                        <div class="input-control text">
                            <input type="text"/>
                        </div>
                        <label style="font-size: 10pt;">Kata sandi</label>
                        <div class="input-control password">
                            <input type="password"/>
                            <button class="btn-reveal" tabindex="-1"></button>
                        </div> 
                        <label style="font-size: 10pt;">Alamat Sekolah</label>
                        <div class="input-control textarea">
                            <textarea></textarea>
                        </div>
                        <div class="input-control checkbox">
                            <label>
                                <input type="checkbox" />
                                <span class="check"></span>
                                Dengan mengklik saya menyetujui seluruh kebijakan yang ada
                            </label><br />
                        </div>
                        <div class="input-control submit">
                            <input type="submit" value="Buat Akun" class="button large info"/>
                        </div>
                    </div>
                </div>
            </div>
@stop