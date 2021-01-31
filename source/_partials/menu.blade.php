<div class="col-xs-12">
    <nav id="menu">
    	<label for="menu_active" class="menu-mobile">Menu</label>
        <input type="checkbox" id="menu_active" style="display: none;" />
        <ul>
            <li @if($page->getUrl() == '/')class="selected"@endif><a href="/">About me</a></li>
            <li @if(strpos($page->getUrl(), '/portfolio') !== FALSE)class="selected"@endif><a href="/portfolio">Portfolio</a></li>
            <li @if($page->getUrl() == '/hobbies')class="selected"@endif><a href="/hobbies">Hobbies</a></li>
            <li @if($page->getUrl() == '/contact')class="selected"@endif><a href="/contact">Contact</a></li>
        </ul>
    </nav>
</div>