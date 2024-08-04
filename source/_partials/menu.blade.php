    <nav id="menu" class="mt-2 mb-5 my-sm-5 d-block d-sm-flex align-items-baseline justify-content-between">
        <a class="font-monospace fs-4 fw-bold" href="/">~/thomas</a>
        <div class="text-sm-end">
            <ul id="menu-links" class="list-unstyled d-flex justify-content-around d-sm-block" style="font-size: 0.9rem;">
            <li class="@if(strpos($page->getUrl(), '/portfolio') !== FALSE) fw-bold @endif d-block d-sm-inline-block">
                <a href="/portfolio" class="ms-sm-3 d-block d-sm-inline-block py-3 px-sm-3">Portfolio</a>
            </li>
            <li class="d-block d-sm-inline-block">
                <a href="/Thomas_de_Luca_CV.pdf" class="ms-sm-3 d-block d-sm-inline-block py-3 px-sm-3">Resumé</a>
            </li>
            <li class="@if($page->getUrl() == '/contact') fw-bold @endif d-block d-sm-inline-block">
                <a href="/contact" class="ms-sm-3 d-block d-sm-inline-block py-3 px-sm-3">Contact</a>
            </li>
        </ul></div>
    </nav>