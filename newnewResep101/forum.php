<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-AU">
<head>
<title>Resep101</title>
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/gila-screen.css" media="screen" title="Gila (screen)" />
<link rel="stylesheet" type="text/css" href="css/gila-print.css" media="print" />
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link rel="shortcut icon" href="images/logo.jpeg" type="image/x-icon">
</head>
<body>

<!-- ##### Header ##### -->
<div id="header">
  <div class="line-top"></div>
  <div class="main">
    <div class="row-top">
      <h1><a href="home.php"><img src="images/logo.jpeg" width="190" height="75"></a></h1>
      <nav>
        <ul class="sf-menu">
          <li><a href="home.php">Home</a></li>
          <li><a href="recipe.php">Recipe </a> </li>
          <li class="active"><a href="forum.php">Forum</a></li>
          <li><a href="contact.php">Contacts</a> </li>
          <li><a href="logout.php">Logout</a> </li>
        </ul>
      </nav>
      <div class="clear"></div>
    </div>
  </div>
</div>

<div id="main-copy">
  <h1 id="introduction" style="border-top: none; padding-top: 0;">Introduction</h1>
  <p>This is version two of Gila, a revision of the <a href="#">original design</a> I submitted
    to <a href="#"><acronym title="Open Source Web Design">OSWD</acronym></a> in February 2003. Following is a summary of the major differences between this version and the
    original.</p>
  <p>Gila was inspired by the homepage of <a href="#">ActiveState</a>, an
    open-source application development company. The name <span class="titleTip" title="Gila monster: a species of lizard">Gila</span> is a play on the
    word <span class="titleTip" title="Komodo dragon: another species of lizard">Komodo</span>,
    the name of one of ActiveState&rsquo;s products which is based on <a href="#">the Mozilla project</a>.</p>
  <p>This template is marked up in <acronym title="eXtensible HyperText Markup Language">XHTML</acronym> 1.0 Strict and styled
    with <acronym title="Cascading Style Sheets">CSS</acronym>, allowing for greater compatibility
    and transformability. The design does not use any tables (unlike <a href="#">the design&rsquo;s
    inspiration</a>) resulting in greater design flexibility and cleaner code.</p>
  <p>I hope you find this revision to your liking. You are free to use this design for
    any purpose you wish &mdash; personal, commercial or otherwise &mdash; without any
    obligation. If you publish a web site that&rsquo;s based on this template, please <a href="#">email me</a> your
    site&rsquo;s <acronym title="Uniform Resource Identifier">URI</acronym>.</p>
  <h1 id="cross-browser">Improved Cross-browser Compatibility</h1>
  <p>I did not test version one of Gila in Opera before submitting it to OSWD. As a result, the
    original does not render properly in that browser. In contrast, this version of Gila has been
    fully tested in <a href="#">Opera</a> (7.01), Gecko
    (<a href="#">Mozilla</a> 1.3) and Internet Explorer (6.0) for consistent
    rendering.</p>
  <p>This means that people using <span class="titleTip" title="eg: Mozilla 1+, Opera 7+, Netscape 6+, Internet Explorer 6+">standards-compliant browsers</span> will see the same format and layout of your page.</p>
  <h1 id="stylesheets">Modified Stylesheets</h1>
  <dl>
    <dt>More comprehensive screen stylesheet</dt>
    <dd>The improved cross-browser consistency is a result of Gila&rsquo;s more comprehensive screen
      stylesheet. Major style parameters are explicitly defined in the stylesheet, resulting in
      less dependence on browser-determined defaults and thus fewer rendering idiosyncrasies.</dd>
    <dt>Removal of colour scheme stylesheet</dt>
    <dd>I&rsquo;ve removed the separate colour scheme stylesheet found in the original version,
      instead incorporating the colour definitions in the single screen stylesheet.</dd>
    <dt>Addition of a print media stylesheet</dt>
    <dd>Gila now has a print media stylesheet that styles the page in a format appropriate for
      black and white printing. To see the effect of this stylesheet, select <span class="smallCaps">print preview</span> from the <span class="smallCaps">file</span> menu, or direct this page to a printer (NB: print only this frame if you are viewing this
      template in a multi-frame document).</dd>
  </dl>
  <h1 id="accessibility">Improved Accessibility</h1>
  <p>This version of Gila has improved accessibility features for people with impaired vision.
    The template tentatively conforms to the <a href="http://www.w3.org/TR/WCAG10"> <acronym>WCAG</acronym> double A rating</a> and <a href="http://www.access-board.gov/508.htm">&sect;&nbsp;508</a> guidelines for web content
    accessibility. The relative simplicity of the template&rsquo;s underlying markup ensures that
    your page can be easily transformed for rendering in aural, tactile (braille) and other
    non-visual user agents.</p>
  <p>Additionally, the majority of document metrics (widths, lengths and spacings) are font-size
    relative. This means that a user can increase the default font size of your page (using their
    browser) without compromising it&rsquo;s layout.</p>
</div>

</body>
</html>
