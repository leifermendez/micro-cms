<link rel="stylesheet" type="text/css" href="{{ asset('css/cookies.css') }}" />
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/headroom.min.js') }}"></script>
<script src="{{ asset('js/js.cookie.min.js') }}"></script>
<script src="{{ asset('js/imagesloaded.min.js') }}"></script>
<script src="{{ asset('js/bricks.min.js') }}"></script>
<script src="{{ asset('js/main.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/stripe.js') }}"></script>


<script src="{{ asset('js/cookies.js') }}"></script>
<script>
    window.addEventListener("load", function(){
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "#252e39"
                },
                "button": {
                    "background": "#14a7d0"
                }
            },
            'revokable':true,
            onStatusChange: function(status) {
                console.log(this.hasConsented() ?
                    enableGoogleAnalytics() : 'disable cookies');
            },
            "type": "opt-out",
            "position": "bottom-left",
            "content": {
                "message": "Esta página web usa cookies.\n" +
                "Las cookies de este sitio web se usan para personalizar el contenido, ofrecer funciones de redes sociales y analizar el tráfico. Usted acepta nuestras cookies si continúa usando esta página web.",
                "dismiss": "Acepto",
                "link": "Política de Cookies",
                "deny": "No acepto",
                "href": "https://awslatinoamerica.com/blog/12"
            }
        })});
</script>