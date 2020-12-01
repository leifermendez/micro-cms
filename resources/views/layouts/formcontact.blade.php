<form class="form-full-width" id="contact-form-id">
    <div class="form-row">
        <label for="form-subject">Nombre</label>
        <input id="form-subject" required type="text" name="name">
    </div>
    <div class="form-row">
        <label for="form-subject">Teléfono</label>
        <input id="form-subject" required type="text" name="phone">
    </div>
    <div class="form-row">
        <label for="form-subject">Web</label>
        <input id="form-subject" type="text" name="web">
    </div>
    <div class="form-row">
        <label for="form-subject">Email</label>
        <input id="form-subject" required type="email" name="email">
    </div>
    <div class="form-row">
        <label for="form-message">Mensaje</label>
        <textarea id="form-message" required name="message" cols="10" rows="10"></textarea>
    </div>
    <div class="form-row checkbox-style-block">
        <div class="checkbox-style"><i class="fa fa-check"></i>
            <input id="form-newsletter" required
                   type="checkbox"
                   name="newsletter"></div>
        <label for="form-newsletter">Acepto y confirmo tus <a href="{{url('/blog/13')}}" target="_blank">politicas de privacidad</a></label>
    </div>
    <div class="form-row">
        <button class="button-secondary" type="submit"><i class="fa fa-envelope icon-left"></i>Enviar
            mensaje
        </button>
    </div>
</form>