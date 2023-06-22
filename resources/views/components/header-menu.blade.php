
<a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

<nav class="header__nav-wrap">

    <h2 class="header__nav-heading h6">Site Navigation</h2>

    <ul class="header__nav">
        <x-nav-item route="home"/>
        <x-categories-dropdown class="has-children"/>
        <x-post-types-dropdown class="has-children"/>
        <x-nav-item route="about"/>
        <x-nav-item route="contact"/>
        <li><a href="style-guide.html" title="">Styles</a></li>
    </ul> <!-- end header__nav -->

    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

</nav> <!-- end header__nav-wrap -->
