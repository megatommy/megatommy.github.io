    <nav id="menu" class="mt-2 mb-5 my-md-5 d-flex align-items-baseline justify-content-between">
        <a class="font-monospace fs-4 fw-bold" href="/">~/thomas</a>
        <div class="text-end">
    	<a href="" class="menu-mobile d-block d-md-none py-3 px-md-3" onclick="document.getElementById('menu-links').classList.toggle('d-block'); return false;">Menu</a>
            <ul id="menu-links" class="list-unstyled" style="font-size: 0.9rem;">
            <li class="@if(strpos($page->getUrl(), '/portfolio') !== FALSE) fw-bold @endif d-block d-md-inline-block">
                <a href="/portfolio" class="ms-md-3 d-block d-md-inline-block py-3 px-md-3">Portfolio</a>
            </li>
            <li class="d-block d-md-inline-block">
                <a href="/Thomas_de_Luca_CV.pdf" class="ms-md-3 d-block d-md-inline-block py-3 px-md-3">Resumé</a>
            </li>
            <li class="@if($page->getUrl() == '/contact') fw-bold @endif d-block d-md-inline-block">
                <a href="/contact" class="ms-md-3 d-block d-md-inline-block py-3 px-md-3">Contact</a>
            </li>
        </ul></div>
    </nav>