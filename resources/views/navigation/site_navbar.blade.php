<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/">
      <span style="font-weight: 400; color: #a4aaae;">CoolNewThing</span>
    </a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <!-- it's a whole lot cooler if you remove this bit, and make a menu named 'Top Navigation.'
             Then you can work with it in the Voyager screens, instead of in code. -->

        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
          </li>
        <ul>

        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
              <a class="nav-link" href="/contact">Contact Us</a>
          </li>
        <ul>

        <!-- this is the bit that does the magic for the menu -->
        {!! menu('Top Navigation', 'navigation.navbar_menu') !!}
    </div>
  </div>
</nav>