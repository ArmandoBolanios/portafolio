<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contacto</h2>
            <p>Si tienes alguna duda, no dudes en enviarme un e-mail.</p>
        </div>

        <div class="row" data-aos="fade-in">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Ubicación:</h4>
                        <p>Tlapa de Comonfort, Guerrero, México 41300.</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>armando_isic@outlook.com</p>
                    </div>                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d486860.8623958306!2d-99.31907533075828!3d17.57419773291694!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1644695096921!5m2!1ses-419!2smx" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Tu Nombre</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Tu Correo Electrónico</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Asunto</label>
                        <input type="text" class="form-control" name="subject" id="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Mensaje</label>
                        <textarea class="form-control" name="message" rows="10" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Tu mensaje ha sido enviado. ¡Muchas gracias!</div>
                    </div>
                    <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->