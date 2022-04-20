<!-- ------------------------PHẦN MAIN------------------------- -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58401.038135190785!2d105.90407374515006!3d10.251887675683237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310a82cd5bf1a7a5%3A0x5b1bc07ba40ecd86!2zVHAuIFbEqW5oIExvbmcsIFbEqW5oIExvbmcsIFZp4buHdCBOYW0!5e1!3m2!1svi!2s!4v1640343119543!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-item">
                    <form action="../../../webdongho/admin/modules/lienhe/xuly.php" method="POST">
                        <span class="contact-item-content">Liên Hệ Với Chúng Tôi</span>
                        <div class="row contact-list contact-list">
                            <div class="col-lg-3">
                                <label for="fname">Họ và Tên :</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" id="fname" name="fullname" placeholder="Vd: Nguyễn Văn A">
                            </div>
                        </div>

                        <div class="row contact-list">
                            <div class="col-lg-3">
                                <label for="email">Email :</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="email" id="email" name="email" placeholder="Vd: email123@gmail.com">
                            </div>
                        </div>

                        <div class="row contact-list">
                            <div class="col-lg-3">
                                <label for="">Số Điện Thoại: </label>

                            </div>
                            <div class="col-lg-9">
                                <input type="numer" name="number" placeholder="Vd: 039.5245.117">
                            </div>
                        </div>
                        
                        <div class="row contact-list">
                            <div class="col-lg-3">
                                <label for="subject">Nội Dung :</label>
                            </div>
                            <div class="col-lg-9">
                                <textarea id="subject" name="subject" placeholder="Nội dung..." style="height:100px"></textarea>
                            </div>
                        </div>
                        <br>
                        <input type="submit" value="Gửi" class="btn btn-primary contact-submit" name="gui">
                    </form>
                    </div>
            </div>
        </div>
    </div>