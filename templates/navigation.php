<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><?php echo $BRAND_NAME; ?></a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav">
        <li<?php if ($PAGENAME === 'home') { echo ' class="active"'; } ?>><a href="/">Home</a></li>
        <li<?php if ($PAGENAME === 'home') { echo ' class="active"'; } ?>><a href="/">Chain Surveying</a></li>
        <li<?php if ($PAGENAME === 'home') { echo ' class="active"'; } ?>><a href="/">Plane Syrverying</a></li>
        <li<?php if ($PAGENAME === 'home') { echo ' class="active"'; } ?>><a href="/">Auto Leveling</a></li>
        <li<?php if ($PAGENAME === 'home') { echo ' class="active"'; } ?>><a href="/">Theodalite Surveying</a></li>
        <li<?php if ($PAGENAME === 'home') { echo ' class="active"'; } ?>><a href="/">About</a></li>
      </ul>
    </div>
  </div>
</nav>
