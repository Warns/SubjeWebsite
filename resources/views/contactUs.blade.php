@section('pageTitle', 'İletişim')
@include('master/headerInfo')

<!-- banner-bottom -->
<section class="banner-bottom py-5">
    <div class="container py-md-4">
        <h3 class="tittle-w3layouts two text-center">Bizimle İletişime Geçin</h3>
        <div class="comment-top mt-5 row">
            <div class="col-lg-5 comment-bottom w3pvt_mail_grid-img">
                <img class="img-fluid" src="images/apply2.jpg" alt="">
            </div>
            <div class="col-lg-7 comment-bottom w3pvt_mail_grid_right">
                <form action="#" method="get">
                    <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                    <div class="row">

                        <div class="col-lg-6 form-group">
                            <label>Adınız</label>
                            <input class="form-control" type="text" id="name" name="name" placeholder="" required="">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Soyadınız</label>
                            <input class="form-control" type="text" id="surname" name="surname" placeholder="" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <label>E-Posta Adresiniz</label>
                            <input class="form-control" type="email" id="email" name="Email" placeholder="" required="">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Telefon Numaranız</label>
                            <input class="form-control" type="text" id="phone" name="number" placeholder="" required="">
                        </div>

                    </div>
                    <div class="form-group">
                        <label>Mesajınız</label>
                        <textarea class="form-control" name="Message" placeholder="" required=""></textarea>
                    </div>
                    <button type="submit" class="btn submit mt-3">Gönder</button>
                </form>
            </div>

        </div>

        <ul class="list-unstyled row text-left mt-lg-5 pt-lg-5  pb-lg-3">
            <li class="col-lg-4 adress-info">
                <div class="row">
                    <div class="col-md-3 text-lg-center adress-icon">
                        <span class="fa fa-map-marker"></span>
                    </div>
                    <div class="col-md-9 text-left">
                        <h6>Adres</h6>
                        <p>İKİTELLİ OSB MAH. YTÜ İKİTELLİ TEKNOPARK SK. YTÜ TEKNOPARK NO: 1 İÇ KAPI NO: Z20 BAŞAKŞEHİR/ İSTANBUL </p>
                    </div>
                </div>
            </li>

            <li class="col-lg-4 adress-info">
                <div class="row">
                    <div class="col-md-3 text-lg-center adress-icon">
                        <span class="fa fa-envelope-open-o"></span>
                    </div>
                    <div class="col-md-9 text-left">
                        <h6>E-Posta</h6>
                        <a href="mailto:info@subjebilisim.com">info@subjebilisim.com</a>
                    </div>
                </div>
            </li>
            <li class="col-lg-4 adress-info">
                <div class="row">
                    <div class="col-md-3 text-lg-center adress-icon">
                        <span class="fa fa-mobile"></span>
                    </div>
                    <div class="col-md-9 text-left">
                        <h6>Telefon</h6>
                        <p>0212 671 91 38</p>
                    </div>
                </div>
            </li>
        </ul>
        <div class="map-fo mt-lg-5 mt-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3007.9893508346795!2d28.807356614916422!3d41.06922542362187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa5831f941819%3A0xca340723f0956b21!2sY%C4%B1ld%C4%B1z+Teknik+%C3%9Cniversitesi+%C4%B0kitelli+Teknopark!5e0!3m2!1str!2str!4v1558271322309!5m2!1str!2str" allowfullscreen></iframe>        </div>

    </div>
</section>
<!-- //banner-bottom -->
<script>
    $.ajax({
        type: 'GET',
        url: $form.attr('action'),
        data: {
            name: $form.find('#name').val(),
            surname: $form.find('#surname').val(),
            phone: $form.find('#phone').val(),
            email: $form.find('#email').val(),
            _token: $form.find('#_token').val(),
            message: $form.find('#message').val()
        }})
</script>
@include('master/footer')