<nav class="navbar">
    <div class="container">
        <div class="navbar-brand">

            <a target="_blank" href="https://www.facebook.com/genusshausbasel/" class="navbar-item is-hidden-desktop">
                <i class="fab fa-facebook-f fa-lg"></i>
            </a>

      {{--      <a target="_blank" href="#" class="navbar-item is-hidden-desktop">
                <i class="fab fa-instagram fa-lg"></i>
            </a>

            <a target="_blank" href="#" class="navbar-item is-hidden-desktop">
                <i class="fab fa-linkedin-in fa-lg"></i>
            </a>
--}}

            <span class="navbar-burger burger" data-target="navMenubd-example">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navMenubd-example" class="navbar-menu has-text-centered">

            <a target="_blank" href="https://www.facebook.com/genusshausbasel/" class="navbar-item is-hidden-touch">
                <i class="fab fa-facebook-f fa-lg"></i>
            </a>

       {{--     <a target="_blank" href="#" class="navbar-item is-hidden-touch">
                <i class="fab fa-instagram fa-lg"></i>
            </a>

            <a target="_blank" href="#" class="navbar-item is-hidden-touch">
                <i class="fab fa-linkedin-in fa-lg"></i>
            </a>--}}

            <div class="navbar-end">


                <a href="{{ route('contact.index') }}" class="navbar-item">
                   Kostenlos Teilnehmen
                </a>

                <span class="navbar-item">
              <a href="https://api.genusshaus.com" class="button is-inverted is-rounded">
                <span>Anmelden</span>
              </a>

            </span>
            </div>
        </div>
    </div>
</nav>