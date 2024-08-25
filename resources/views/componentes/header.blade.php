<header class="headerPpal">
    <div>
      <a href="index.php">
        <img class="logo" src="{{ asset('assets/images/Frame.png') }}" alt="Frame" />
        <img class="logoname" src="{{ asset('assets/images/Markly.png') }}" alt="Markley" />
      </a>
    </div>
    <nav>
      <ul>
        <li><a href="{{ route('marklybags.home') }}">Home</a></li>
        <li><a href="{{ route('marklybags.bags') }}">Bags</a></li>
        <li><a href="{{ route('marklybags.accesories') }}">Accesories</a></li>
        <li><a href="{{ route('marklybags.blog') }}">Blog</a></li>
        <li><a href="{{ route('marklybags.contacto') }}">Contact</a></li>
        <li><a href="{{ route('productos.index') }}">Administration</a></li>
      </ul>
    </nav>
    <div class="logoshop">
      <a href="https://www.bolsosmacoly.com/3-bolsos-en-sintetico"> <img src="{{ asset('assets/images/shopping-bag-03.png') }}"
          alt="shopping" name="encabezado" id="encabezado">
      </a>
    </div>
  </header>