@extends("layout.layout")

@section("content")
    <br/>
            <header>
                <div class="clearfix">
                    <div class="place-left">
                        <div class="span2">
                            <img src="images/ico.png"/>
                        </div>
                    </div>
                </div>
            </header>
                <hr />
            <h1>
                <a href="{{ URL::to("login") }}"><i class="icon-arrow-left-3 fg-darker smaller"></i></a>
                Lupa kata sandi<small class="on-right"></small>
            </h1>
            <label>Kami akan membantu anda untuk mereset kata sandi anda</label>
            <div class="grid">
                <div class="row">
                    <div class="span6">
                        <label style="font-size: 10pt;">Masukan email anda</label>
                        <div class="input-control text">
                            <input type="text"/>
                        </div>
                        <div class="input-control submit">
                            <input type="submit" value="Reset" class="button large info"/>
                            <input type="submit" value="Batal" class="button large"/>
                        </div>
                    </div>
                </div>
            </div>
@stop