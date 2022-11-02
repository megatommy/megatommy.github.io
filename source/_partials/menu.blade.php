    <nav id="menu" class="my-3">
    	<label for="menu_active" class="menu-mobile d-block d-md-none p-3 text-center">Menu</label>
        <input type="checkbox" id="menu_active" class="d-none" />
        <ul class="list-unstyled">
            <li class="@if($page->getUrl() == '/') fw-bold @endif d-block d-md-inline-block">
                <a href="/" class="me-md-3 d-block d-md-inline-block text-center p-3">About me</a>
            </li>
            <li class="@if(strpos($page->getUrl(), '/portfolio') !== FALSE) fw-bold @endif d-block d-md-inline-block">
                <a href="/portfolio" class="me-md-3 d-block d-md-inline-block text-center p-3">Portfolio</a>
            </li>
            <li class="d-block d-md-inline-block">
                <a href="/Thomas_de_Luca_CV.pdf" class="d-block d-md-inline-block text-center p-3">Resumé</a>
            </li>
            <li class="@if($page->getUrl() == '/contact') fw-bold @endif d-block d-md-inline-block">
                <a href="/contact" class="me-md-3 d-block d-md-inline-block text-center p-3">Contact</a>
            </li>
        </ul>
    </nav>