<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
 <title>#6012: sfWidgetFormDoctrineJQueryAutocompleter.class.php - symfony - Trac</title><link rel="start" href="/wiki" /><link rel="search" href="/search" /><link rel="help" href="/wiki/TracGuide" /><link rel="stylesheet" href="/chrome/common/css/trac.css" type="text/css" /><link rel="stylesheet" href="/chrome/common/css/code.css" type="text/css" /><link rel="icon" href="/chrome/site/favicon.ico" type="image/x-icon" /><link rel="shortcut icon" href="/chrome/site/favicon.ico" type="image/x-icon" /><link rel="up" href="/ticket/6012" title="Ticket #6012" /><link rel="alternate" href="/attachment/ticket/6012/sfWidgetFormDoctrineJQueryAutocompleter.class.php?format=raw" title="Original Format" type="text/x-php; charset=utf-8" /><style type="text/css"></style>
<link rel="stylesheet" type="text/css" media="all" href="http://www.symfony-project.com/css/trac.css" />
<style type="text/css">
</style>
 <script type="text/javascript" src="/chrome/common/js/trac.js"></script>
</head>
<body>

<table id="topbar" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td width="176" height="37" bgcolor="#000"><a href="http://www.symfony-project.com" style="border-bottom:none;"><img src="http://www.symfony-project.com/images/symfony_logo.gif" width="176" height="37" border="0"></a></td>
    <td width="100%" id="navig" align="right" valign="middle" height="37">
        <ul>
          <li><a href="http://www.symfony-project.org/about">About</a></li>
          <li><a href="http://www.symfony-project.org/installation">Installation</a></li>
          <li><a href="http://www.symfony-project.org/doc">Documentation</a></li>
          <li><a href="http://www.symfony-project.org/plugins/">Plugins</a></li>
          <li><a href="http://www.symfony-project.org/community">Community</a></li>
          <li><a href="http://www.symfony-project.org/blog">Blog</a></li>
          <li class="last"><a href="http://trac.symfony-project.com/timeline">Development</a></li>
        </ul>
    </td>
  </tr>
  <tr><td id="topseparator" colspan="2"></td></tr>
  <tr>
    <td colspan="2">
      <h1>Development</h1>
      
        <h2>#6012: sfWidgetFormDoctrineJQueryAutocompleter.class.php</h2>
      
    </td>
  </tr>

  <tr>
    <td colspan="2" style="background: #fdf2ab">
      <center><p><strong>
You must first <a href="http://www.symfony-project.com/user/new">sign up</a> to be able to contribute.
</strong></p></center>
    </td>
  </tr>

</table>



<div id="banner">

<form id="search" action="/search" method="get">
 <div>
  <label for="proj-search">Search:</label>
  <input type="text" id="proj-search" name="q" size="10" accesskey="f" value="" />
  <input type="submit" value="Search" />
  <input type="hidden" name="wiki" value="on" />
  <input type="hidden" name="changeset" value="on" />
  <input type="hidden" name="ticket" value="on" />
 </div>
</form>



<div id="metanav" class="nav"><ul><li class="first"><a href="/login">Login</a></li><li><a href="/settings">Settings</a></li><li><a accesskey="6" href="/wiki/TracGuide">Help/Guide</a></li><li class="last"><a href="/about">About Trac</a></li></ul></div>
</div>

<div id="mainnav" class="nav"><ul><li class="first"><a accesskey="1" href="/wiki">Wiki</a></li><li><a accesskey="2" href="/timeline">Timeline</a></li><li><a accesskey="3" href="/roadmap">Roadmap</a></li><li><a href="/browser">Browse Source</a></li><li><a href="/report">View Tickets</a></li><li class="last"><a accesskey="4" href="/search">Search</a></li></ul></div>
<div id="main">




<div id="ctxtnav" class="nav"></div>

<div id="content" class="attachment">


 <h1><a href="/ticket/6012">Ticket #6012</a>: sfWidgetFormDoctrineJQueryAutocompleter.class.php</h1>
 <table id="info" summary="Description"><tbody><tr>
   <th scope="col">
    File sfWidgetFormDoctrineJQueryAutocompleter.class.php, 1.9 kB 
    (added by syam,  2 years ago)
   </th></tr><tr>
   <td class="message"><p>
The Doctrine version of the ORM sfWidgetPropelJQueryAutoCompleter class
</p>
</td>
  </tr>
 </tbody></table>
 <div id="preview">
   <table class="code"><thead><tr><th class="lineno">Line</th><th class="content">&nbsp;</th></tr></thead><tbody><tr><th id="L1"><a href="#L1">1</a></th>
<td><span class="code-lang">&lt;?php</span></td>
</tr><tr><th id="L2"><a href="#L2">2</a></th>
<td></td>
</tr><tr><th id="L3"><a href="#L3">3</a></th>
<td><span class="code-comment">/*</span></td>
</tr><tr><th id="L4"><a href="#L4">4</a></th>
<td><span class="code-comment">&nbsp;* This file is part of the symfony package.</span></td>
</tr><tr><th id="L5"><a href="#L5">5</a></th>
<td><span class="code-comment">&nbsp;* (c) Fabien Potencier &lt;fabien.potencier@symfony-project.com&gt;</span></td>
</tr><tr><th id="L6"><a href="#L6">6</a></th>
<td><span class="code-comment">&nbsp;* </span></td>
</tr><tr><th id="L7"><a href="#L7">7</a></th>
<td><span class="code-comment">&nbsp;* For the full copyright and license information, please view the LICENSE</span></td>
</tr><tr><th id="L8"><a href="#L8">8</a></th>
<td><span class="code-comment">&nbsp;* file that was distributed with this source code.</span></td>
</tr><tr><th id="L9"><a href="#L9">9</a></th>
<td><span class="code-comment">&nbsp;*/</span></td>
</tr><tr><th id="L10"><a href="#L10">10</a></th>
<td><span class="code-comment"></span></td>
</tr><tr><th id="L11"><a href="#L11">11</a></th>
<td><span class="code-comment">/**</span></td>
</tr><tr><th id="L12"><a href="#L12">12</a></th>
<td><span class="code-comment">&nbsp;* sfWidgetFormoctrineJQueryAutocompleter represents an autocompleter input widget rendered by JQuery</span></td>
</tr><tr><th id="L13"><a href="#L13">13</a></th>
<td><span class="code-comment">&nbsp;* optimized for foreign key lookup.</span></td>
</tr><tr><th id="L14"><a href="#L14">14</a></th>
<td><span class="code-comment">&nbsp;*</span></td>
</tr><tr><th id="L15"><a href="#L15">15</a></th>
<td><span class="code-comment">&nbsp;* @package&nbsp; &nbsp; symfony</span></td>
</tr><tr><th id="L16"><a href="#L16">16</a></th>
<td><span class="code-comment">&nbsp;* @subpackage widget</span></td>
</tr><tr><th id="L17"><a href="#L17">17</a></th>
<td><span class="code-comment">&nbsp;* @author&nbsp; &nbsp; &nbsp;Fabien Potencier &lt;fabien.potencier@symfony-project.com&gt;</span></td>
</tr><tr><th id="L18"><a href="#L18">18</a></th>
<td><span class="code-comment">&nbsp;* @version&nbsp; &nbsp; SVN: $Id: sfWidgetFormPropelJQueryAutocompleter.class.php 12130 2008-10-10 14:51:07Z fabien $</span></td>
</tr><tr><th id="L19"><a href="#L19">19</a></th>
<td><span class="code-comment">&nbsp;*/</span></td>
</tr><tr><th id="L20"><a href="#L20">20</a></th>
<td><span class="code-keyword">class </span><span class="code-lang">sfWidgetFormDoctrineJQueryAutocompleter </span><span class="code-keyword">extends </span><span class="code-lang">sfWidgetFormJQueryAutocompleter</span></td>
</tr><tr><th id="L21"><a href="#L21">21</a></th>
<td><span class="code-keyword">{</span></td>
</tr><tr><th id="L22"><a href="#L22">22</a></th>
<td><span class="code-keyword">&nbsp; </span><span class="code-comment">/**</span></td>
</tr><tr><th id="L23"><a href="#L23">23</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; * @see sfWidget</span></td>
</tr><tr><th id="L24"><a href="#L24">24</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; */</span></td>
</tr><tr><th id="L25"><a href="#L25">25</a></th>
<td><span class="code-keyword">&nbsp; </span><span class="code-keyword">public function </span><span class="code-lang">__construct</span><span class="code-keyword">(</span><span class="code-lang">$options </span><span class="code-keyword">= array(), </span><span class="code-lang">$attributes </span><span class="code-keyword">= array())</span></td>
</tr><tr><th id="L26"><a href="#L26">26</a></th>
<td><span class="code-keyword">&nbsp; {</span></td>
</tr><tr><th id="L27"><a href="#L27">27</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; &nbsp;</span><span class="code-lang">$options</span><span class="code-keyword">[</span><span class="code-string">'value_callback'</span><span class="code-keyword">] = array(</span><span class="code-lang">$this</span><span class="code-keyword">, </span><span class="code-string">'toString'</span><span class="code-keyword">);</span></td>
</tr><tr><th id="L28"><a href="#L28">28</a></th>
<td><span class="code-keyword"></span></td>
</tr><tr><th id="L29"><a href="#L29">29</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; &nbsp;</span><span class="code-lang">parent</span><span class="code-keyword">::</span><span class="code-lang">__construct</span><span class="code-keyword">(</span><span class="code-lang">$options</span><span class="code-keyword">, </span><span class="code-lang">$attributes</span><span class="code-keyword">);</span></td>
</tr><tr><th id="L30"><a href="#L30">30</a></th>
<td><span class="code-keyword">&nbsp; }</span></td>
</tr><tr><th id="L31"><a href="#L31">31</a></th>
<td><span class="code-keyword"></span></td>
</tr><tr><th id="L32"><a href="#L32">32</a></th>
<td><span class="code-keyword">&nbsp; </span><span class="code-comment">/**</span></td>
</tr><tr><th id="L33"><a href="#L33">33</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; * Configures the current widget.</span></td>
</tr><tr><th id="L34"><a href="#L34">34</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; *</span></td>
</tr><tr><th id="L35"><a href="#L35">35</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; * @param array $options&nbsp; &nbsp; &nbsp;An array of options</span></td>
</tr><tr><th id="L36"><a href="#L36">36</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; * @param array $attributes&nbsp; An array of default HTML attributes</span></td>
</tr><tr><th id="L37"><a href="#L37">37</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; *</span></td>
</tr><tr><th id="L38"><a href="#L38">38</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; * @see sfWidgetFormJQueryAutocompleter</span></td>
</tr><tr><th id="L39"><a href="#L39">39</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; */</span></td>
</tr><tr><th id="L40"><a href="#L40">40</a></th>
<td><span class="code-keyword">&nbsp; </span><span class="code-keyword">protected function </span><span class="code-lang">configure</span><span class="code-keyword">(</span><span class="code-lang">$options </span><span class="code-keyword">= array(), </span><span class="code-lang">$attributes </span><span class="code-keyword">= array())</span></td>
</tr><tr><th id="L41"><a href="#L41">41</a></th>
<td><span class="code-keyword">&nbsp; {</span></td>
</tr><tr><th id="L42"><a href="#L42">42</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; &nbsp;</span><span class="code-lang">$this</span><span class="code-keyword">-&gt;</span><span class="code-lang">addRequiredOption</span><span class="code-keyword">(</span><span class="code-string">'model'</span><span class="code-keyword">);</span></td>
</tr><tr><th id="L43"><a href="#L43">43</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; &nbsp;</span><span class="code-lang">$this</span><span class="code-keyword">-&gt;</span><span class="code-lang">addOption</span><span class="code-keyword">(</span><span class="code-string">'method'</span><span class="code-keyword">, </span><span class="code-string">'__toString'</span><span class="code-keyword">);</span></td>
</tr><tr><th id="L44"><a href="#L44">44</a></th>
<td><span class="code-keyword"></span></td>
</tr><tr><th id="L45"><a href="#L45">45</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; &nbsp;</span><span class="code-lang">parent</span><span class="code-keyword">::</span><span class="code-lang">configure</span><span class="code-keyword">(</span><span class="code-lang">$options</span><span class="code-keyword">, </span><span class="code-lang">$attributes</span><span class="code-keyword">);</span></td>
</tr><tr><th id="L46"><a href="#L46">46</a></th>
<td><span class="code-keyword">&nbsp; }</span></td>
</tr><tr><th id="L47"><a href="#L47">47</a></th>
<td><span class="code-keyword"></span></td>
</tr><tr><th id="L48"><a href="#L48">48</a></th>
<td><span class="code-keyword">&nbsp; </span><span class="code-comment">/**</span></td>
</tr><tr><th id="L49"><a href="#L49">49</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; * Returns the text representation of a foreign key.</span></td>
</tr><tr><th id="L50"><a href="#L50">50</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; *</span></td>
</tr><tr><th id="L51"><a href="#L51">51</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; * @param string $value The primary key</span></td>
</tr><tr><th id="L52"><a href="#L52">52</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; */</span></td>
</tr><tr><th id="L53"><a href="#L53">53</a></th>
<td><span class="code-keyword">&nbsp; </span><span class="code-keyword">protected function </span><span class="code-lang">toString</span><span class="code-keyword">(</span><span class="code-lang">$value</span><span class="code-keyword">)</span></td>
</tr><tr><th id="L54"><a href="#L54">54</a></th>
<td><span class="code-keyword">&nbsp; {</span></td>
</tr><tr><th id="L55"><a href="#L55">55</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; &nbsp;if(!</span><span class="code-lang">$value</span><span class="code-keyword">) return </span><span class="code-lang">null</span><span class="code-keyword">;</span></td>
</tr><tr><th id="L56"><a href="#L56">56</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; &nbsp;</span></td>
</tr><tr><th id="L57"><a href="#L57">57</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; &nbsp;</span><span class="code-lang">$object </span><span class="code-keyword">= </span><span class="code-lang">Doctrine</span><span class="code-keyword">::</span><span class="code-lang">getTable</span><span class="code-keyword">(</span><span class="code-lang">$this</span><span class="code-keyword">-&gt;</span><span class="code-lang">getOption</span><span class="code-keyword">(</span><span class="code-string">'model'</span><span class="code-keyword">))-&gt;</span><span class="code-lang">find</span><span class="code-keyword">(</span><span class="code-lang">$value</span><span class="code-keyword">);</span></td>
</tr><tr><th id="L58"><a href="#L58">58</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; &nbsp;</span><span class="code-lang">$method </span><span class="code-keyword">= </span><span class="code-lang">$this</span><span class="code-keyword">-&gt;</span><span class="code-lang">getOption</span><span class="code-keyword">(</span><span class="code-string">'method'</span><span class="code-keyword">);</span></td>
</tr><tr><th id="L59"><a href="#L59">59</a></th>
<td><span class="code-keyword"></span></td>
</tr><tr><th id="L60"><a href="#L60">60</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; &nbsp;if (!</span><span class="code-lang">method_exists</span><span class="code-keyword">(</span><span class="code-lang">$this</span><span class="code-keyword">-&gt;</span><span class="code-lang">getOption</span><span class="code-keyword">(</span><span class="code-string">'model'</span><span class="code-keyword">), </span><span class="code-lang">$method</span><span class="code-keyword">))</span></td>
</tr><tr><th id="L61"><a href="#L61">61</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; &nbsp;{</span></td>
</tr><tr><th id="L62"><a href="#L62">62</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; &nbsp; &nbsp;throw new </span><span class="code-lang">RuntimeException</span><span class="code-keyword">(</span><span class="code-lang">sprintf</span><span class="code-keyword">(</span><span class="code-string">'Class "%s" must implement a "%s" method to be rendered in a "%s" widget'</span><span class="code-keyword">, </span><span class="code-lang">$this</span><span class="code-keyword">-&gt;</span><span class="code-lang">getOption</span><span class="code-keyword">(</span><span class="code-string">'model'</span><span class="code-keyword">), </span><span class="code-lang">$method</span><span class="code-keyword">, </span><span class="code-lang">__CLASS__</span><span class="code-keyword">));</span></td>
</tr><tr><th id="L63"><a href="#L63">63</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; &nbsp;}</span></td>
</tr><tr><th id="L64"><a href="#L64">64</a></th>
<td><span class="code-keyword"></span></td>
</tr><tr><th id="L65"><a href="#L65">65</a></th>
<td><span class="code-keyword">&nbsp;&nbsp; &nbsp;return !</span><span class="code-lang">is_null</span><span class="code-keyword">(</span><span class="code-lang">$object</span><span class="code-keyword">) ? </span><span class="code-lang">$object</span><span class="code-keyword">-&gt;</span><span class="code-lang">$method</span><span class="code-keyword">() : </span><span class="code-string">''</span><span class="code-keyword">;</span></td>
</tr><tr><th id="L66"><a href="#L66">66</a></th>
<td><span class="code-keyword">&nbsp; }</span></td>
</tr><tr><th id="L67"><a href="#L67">67</a></th>
<td><span class="code-keyword">}</span></td>
</tr><tr><th id="L68"><a href="#L68">68</a></th>
<td></td>
</tr></tbody></table>
 </div>
 


</div>
<script type="text/javascript">searchHighlight()</script>
<div id="altlinks"><h3>Download in other formats:</h3><ul><li class="first last"><a href="/attachment/ticket/6012/sfWidgetFormDoctrineJQueryAutocompleter.class.php?format=raw">Original Format</a></li></ul></div>

</div>

<div id="footer">
 <hr />
 <a id="tracpowered" href="http://trac.edgewall.com/"><img src="/chrome/common/trac_logo_mini.png" height="30" width="107"
   alt="Trac Powered"/></a>
 <p class="left">
  Powered by <a href="/about"><strong>Trac
</strong></a><br />
  By <a href="http://www.edgewall.com/">Edgewall Software</a>.
 </p>
 <p class="right">
  
 </p>
</div>

<div style="padding-bottom: 30px"></div>

<link rel="stylesheet" type="text/css" media="all" href="http://www.sensiolabs.com/network/sensiolabs.css" />
<div class="sensiolabs">
  <div class="id_content">
    <div class="clearfix">
      <div class="column column_01">
        <h2><img src="http://www.sensiolabs.com/network/network.gif" alt="The Sensio Labs Network" /></h2>
        <div class="introduction">

          Since 1998, Sensio Labs has been promoting the Open-Source software
          movement by providing quality web application development, training,
          consulting.<br /> Sensio Labs also supports several large
          Open-Source projects.

        </div>
      </div>
      <div class="column column_02">
        <div class="box">
          <h3>Open-Source Products</h3>
          <ul>
            <li><a href="http://www.symfony-project.org/">Symfony - MVC framework</a></li>
            <li><a href="http://components.symfony-project.org/">Symfony Components</a></li>
            <li><a href="http://www.doctrine-project.org/">Doctrine - ORM</a></li>
            <li><a href="http://www.swiftmailer.org/">Swift Mailer - Mailing library</a></li>
            <li><a href="http://www.twig-project.org/">Twig - Template library</a></li>
            <li><a href="http://www.pirum-project.org/">Pirum - PEAR channel server</a></li>
          </ul>
        </div>
      </div>
      <div class="column column_03">
        <div class="box">
        <h3>Services</h3>
          <ul>
            <li><a href="http://trainings.sensiolabs.com/">Trainings - Be Trained by experts</a></li>
            <li><a href="http://guru.sensiolabs.com/">Guru - Get a guru for a day</a></li>
            <li><a href="http://partners.sensiolabs.com/">Partners - Specialists around the world</a></li>
            <li><a href="http://books.sensiolabs.com/">Books - Read Open-Source books</a></li>
            <li><a href="http://www.symfony-live.com/">Conferences - The Symfony Live Conference</a></li>
          </ul>
          <p class="more"><a href="http://www.sensiolabs.com/">&gt; More</a></p>
        </div>
      </div>
    </div>
    <div class="logo"><a href="http://www.sensiolabs.com/"><img src="http://www.sensiolabs.com/network/sensiolabs.gif" alt="Sensio Labs" /></a></div>
  </div>
</div>


<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-89393-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>


 </body>
</html>

