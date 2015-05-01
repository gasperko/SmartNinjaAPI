<!DOCTYPE html><html><head><meta charset="utf-8"><title>CMW SmartNinja API</title><link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/slate/bootstrap.min.css"><link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"><link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,700|Inconsolata|Raleway:200"><style>/* Highlight.js Theme Tomorrow Night Eighties */
pre{color:#fff;background:#272b30;border:1px solid rgba(255, 255, 255, 0.2)}
pre code{display:block;padding:.5em;background:#272b30}
.hljs-comment,.hljs-title{color:#999}.hljs-variable,.hljs-attribute,.hljs-tag,.hljs-regexp,.ruby .hljs-constant,.xml .hljs-tag .hljs-title,.xml .hljs-pi,.xml .hljs-doctype,.html .hljs-doctype,.css .hljs-id,.css .hljs-class,.css .hljs-pseudo{color:#f2777a}.hljs-number,.hljs-preprocessor,.hljs-pragma,.hljs-built_in,.hljs-literal,.hljs-params,.hljs-constant{color:#f99157}.ruby .hljs-class .hljs-title,.css .hljs-rules .hljs-attribute{color:#fc6}.hljs-string,.hljs-value,.hljs-inheritance,.hljs-header,.ruby .hljs-symbol,.xml .hljs-cdata{color:#9c9}.css .hljs-hexcolor{color:#6cc}.hljs-function,.python .hljs-decorator,.python .hljs-title,.ruby .hljs-function .hljs-title,.ruby .hljs-title .hljs-keyword,.perl .hljs-sub,.javascript .hljs-title,.coffeescript .hljs-title{color:#69c}.hljs-keyword,.javascript .hljs-function{color:#c9c}.hljs{display:block;background:#2d2d2d;color:#ccc;padding:.5em}.coffeescript .javascript,.javascript .xml,.tex .hljs-formula,.xml .javascript,.xml .vbscript,.xml .css,.xml .hljs-cdata{opacity:.5}</style><style>body,
h4,
h5 {
  font-family: 'Roboto' sans-serif !important;
}
h1,
h2,
h3,
.aglio {
  font-family: 'Raleway' sans-serif !important;
}
h1 a,
h2 a,
h3 a,
h4 a,
h5 a {
  display: none;
}
h1:hover a,
h2:hover a,
h3:hover a,
h4:hover a,
h5:hover a {
  display: inline;
}
code {
  color: #222;
  background-color: #aaa;
  font-family: 'Inconsolata' monospace !important;
}
a[data-target] {
  cursor: pointer;
}
h4 {
  font-size: 100%;
  font-weight: bold;
  text-transform: uppercase;
}
.back-to-top {
  position: fixed;
  z-index: 1;
  bottom: 0px;
  right: 24px;
  padding: 4px 8px;
  color: #aaa;
  background-color: #171b20;
  text-decoration: none !important;
  border-top: 1px solid rgba(0,0,0,0.1);
  border-left: 1px solid rgba(0,0,0,0.1);
  border-right: 1px solid rgba(0,0,0,0.1);
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.panel {
  overflow: hidden;
}
.panel-heading code {
  margin-left: 3px;
  color: #000;
  background-color: rgba(255,255,255,0.7);
  white-space: pre-wrap;
  white-space: -moz-pre-wrap;
  white-space: -pre-wrap;
  white-space: -o-pre-wrap;
  word-wrap: break-word;
}
.panel-heading h3 {
  margin-top: 10px;
  margin-bottom: 10px;
}
a.list-group-item:hover {
  background-color: #f8f8f8;
  border-left: 2px solid #555;
  padding-left: 15px;
}
.indent {
  display: block;
  text-indent: 16px;
}
.list-group-item {
  padding-left: 16px;
}
.list-group-item .toggle .open {
  display: block;
}
.list-group-item .toggle .closed {
  display: none;
}
.list-group-item.collapsed .toggle .open {
  display: none;
}
.list-group-item.collapsed .toggle .closed {
  display: block;
}
a.list-group-item:hover {
  background-color: #4b5159;
  border-left-color: #c8c8c8;
}
a.list-group-item {
  font-size: 13px;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}
a.list-group-item.heading {
  font-size: 15px;
  background-color: #3e444c;
}
a.list-group-item.heading:hover {
  background-color: #4b5159;
}
.list-group-item.collapse {
  display: none;
}
.list-group-item.collapse.in {
  display: block;
}
.list-group-item a span.closed {
  display: none;
}
.list-group-item a span.open {
  display: block;
}
.list-group-item a.collapsed span.closed {
  display: block;
}
.list-group-item a.collapsed span.open {
  display: none;
}
#nav {
  width: inherit;
  margin-top: 38px;
  max-width: 255px;
  top: 0;
  bottom: 0;
  padding-right: 12px;
  padding-bottom: 12px;
  overflow-y: auto;
}
@media (max-width: 1199px) {
  #nav {
    max-width: 212px;
  }
}
</style></head><body><a href="#top" class="text-muted back-to-top"><i class="fa fa-toggle-up"></i>&nbsp;Back to top</a><div class="container"><div class="row"><div class="col-md-3"><nav id="nav" class="hidden-sm hidden-xs affix nav"><div class="list-group"><a data-toggle="" data-target="#avtomobili-menu" href="#avtomobili" class="list-group-item heading collapsed">Avtomobili</a><div id="avtomobili-menu"><a href="#avtomobili-" style="border-top-left-radius: 0; border-top-right-radius: 0" class="list-group-item"><span class="badge alert-info"><i class="fa fa-arrow-down"></i></span>Pridobi seznam avtomobilov</a><a href="#avtomobili-" style="border-top-left-radius: 0; border-top-right-radius: 0" class="list-group-item"><span class="badge alert-info"><i class="fa fa-arrow-down"></i></span>Pridobi podatke o avtomobilu</a></div></div><div class="list-group"><a data-toggle="" data-target="#termini-menu" href="#termini" class="list-group-item heading collapsed">Termini</a><div id="termini-menu"><a href="#termini-" style="border-top-left-radius: 0; border-top-right-radius: 0" class="list-group-item"><span class="badge alert-info"><i class="fa fa-arrow-down"></i></span>Pridobi seznam terminov</a><a href="#termini-" style="border-top-left-radius: 0; border-top-right-radius: 0" class="list-group-item"><span class="badge alert-info"><i class="fa fa-arrow-down"></i></span>Pridobi podatke o terminu</a></div></div><div class="list-group"><a data-toggle="" data-target="#rezervacije-menu" href="#rezervacije" class="list-group-item heading collapsed">Rezervacije</a><div id="rezervacije-menu"><a href="#rezervacije-" style="border-top-left-radius: 0; border-top-right-radius: 0" class="list-group-item"><span class="badge alert-success"><i class="fa fa-plus"></i></span>Ustvari novo rezervacijo</a></div></div></nav></div><div class="col-md-8"><div><header><div class="page-header"><h1 id="top">CMW SmartNinja API</h1></div></header><div class="description"><p>Enostaven API za pridobivanje podatkov o avtomobilih, časovnih terminih in možnost rezervacij. API je namenjen SmartNinja tečajnikom.</p>
</div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="avtomobili">Avtomobili&nbsp;<a href="#avtomobili"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><p>Navodila za pridobivanja podatkov o avtomobilih.</p>
<h4 id="avtomobili-">Resources&nbsp;<a href="#avtomobili-"><i class="fa fa-link"></i></a></h4><section id="avtomobili--get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Pridobi seznam avtomobilov</span></div><div style="float:left"><a href="#avtomobili--get" class="btn btn-xs btn-info">GET</a></div><div style="overflow:hidden"><code>/api/CMW/cars</code></div></div><ul class="list-group"><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#b63ffe0cb94ca075c6d60b7a0e66360e" class="pull-right collapsed"><span class="closed">Show</span><span class="open">Hide</span></a></li><li id="b63ffe0cb94ca075c6d60b7a0e66360e" class="list-group-item panel-collapse collapse"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br></code></pre><h5>Body</h5><pre><code>[
    {
        <span class="hljs-property">id</span>: <span class="hljs-number">1</span>,
        <span class="hljs-property">name</span>: <span class="hljs-string">"Kellen"</span>,
        brand: <span class="hljs-string">"CMW"</span>,
        type: <span class="hljs-string">"Hatchback"</span>,
        color: <span class="hljs-string">"OrangeRed"</span>,
        image: <span class="hljs-string">"http://lorempixel.com/400/200/transport/1"</span>,
        description: <span class="hljs-string">"Accusamus nihil repellat vero omnis voluptates id amet et. Suscipit qui recusandae totam nulla quam ipsam. Cupiditate sed natus debitis voluptas aut. Sit repudiandae esse perspiciatis dignissimos error. Itaque quibusdam tempora velit porro ut velit soluta. Eligendi occaecati debitis et saepe."</span>
    },
    {
        <span class="hljs-property">id</span>: <span class="hljs-number">2</span>,
        <span class="hljs-property">name</span>: <span class="hljs-string">"Rico"</span>,
        brand: <span class="hljs-string">"CMW"</span>,
        type: <span class="hljs-string">"Jeep"</span>,
        color: <span class="hljs-string">"DarkGoldenRod"</span>,
        image: <span class="hljs-string">"http://lorempixel.com/400/200/transport/2"</span>,
        description: <span class="hljs-string">"Ipsum inventore sed libero et. Qui suscipit a deserunt laudantium quibusdam. Nostrum soluta qui ipsam non ipsum. Reiciendis aperiam et fuga doloribus nisi. Cumque est ducimus temporibus modi saepe architecto unde. Dicta eveniet exercitationem aut porro sed magni."</span>
    },
    {
        <span class="hljs-property">id</span>: <span class="hljs-number">3</span>,
        <span class="hljs-property">name</span>: <span class="hljs-string">"Joan"</span>,
        brand: <span class="hljs-string">"CMW"</span>,
        type: <span class="hljs-string">"Hatchback"</span>,
        color: <span class="hljs-string">"Brown"</span>,
        image: <span class="hljs-string">"http://lorempixel.com/400/200/transport/3"</span>,
        description: <span class="hljs-string">"Non voluptates ut optio quos qui illo error nihil. Vero a officia id corporis incidunt saepe. Esse hic eligendi quos culpa ut ab. Sed a nam et sint autem inventore aut."</span>
    }
]
</code></pre></li></ul></section><h4 id="avtomobili-">Resources&nbsp;<a href="#avtomobili-"><i class="fa fa-link"></i></a></h4><section id="avtomobili--get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Pridobi podatke o avtomobilu</span></div><div style="float:left"><a href="#avtomobili--get" class="btn btn-xs btn-info">GET</a></div><div style="overflow:hidden"><code>/api/CMW/cars/{id}</code></div></div><ul class="list-group"><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#3114acd7321a760eaebaaf3e86f2b931" class="pull-right collapsed"><span class="closed">Show</span><span class="open">Hide</span></a></li><li id="3114acd7321a760eaebaaf3e86f2b931" class="list-group-item panel-collapse collapse"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br></code></pre><h5>Body</h5><pre><code>{
    <span class="hljs-attribute">id</span>: <span class="hljs-number">1</span>,
    <span class="hljs-attribute">name</span>: <span class="hljs-string">"Kellen"</span>,
    <span class="hljs-attribute">brand</span>: <span class="hljs-string">"CMW"</span>,
    <span class="hljs-attribute">type</span>: <span class="hljs-string">"Hatchback"</span>,
    <span class="hljs-attribute">color</span>: <span class="hljs-string">"OrangeRed"</span>,
    <span class="hljs-attribute">image</span>: <span class="hljs-string">"http://lorempixel.com/400/200/transport/1"</span>,
    <span class="hljs-attribute">description</span>: <span class="hljs-string">"Accusamus nihil repellat vero omnis voluptates id amet et. Suscipit qui recusandae totam nulla quam ipsam. Cupiditate sed natus debitis voluptas aut. Sit repudiandae esse perspiciatis dignissimos error. Itaque quibusdam tempora velit porro ut velit soluta. Eligendi occaecati debitis et saepe."</span>
}
</code></pre></li></ul></section></div></div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="termini">Termini&nbsp;<a href="#termini"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><p>Navodila za pridobivanja podatkov o terminih.</p>
<h4 id="termini-">Resources&nbsp;<a href="#termini-"><i class="fa fa-link"></i></a></h4><section id="termini--get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Pridobi seznam terminov</span></div><div style="float:left"><a href="#termini--get" class="btn btn-xs btn-info">GET</a></div><div style="overflow:hidden"><code>/api/CMW/timeslots</code></div></div><ul class="list-group"><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#47ab6550e17c3f420705068964d1a696" class="pull-right collapsed"><span class="closed">Show</span><span class="open">Hide</span></a></li><li id="47ab6550e17c3f420705068964d1a696" class="list-group-item panel-collapse collapse"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br></code></pre><h5>Body</h5><pre><code>[
    {
        <span class="hljs-property">id</span>: <span class="hljs-number">1</span>,
        carId: <span class="hljs-number">6</span>,
        duration: <span class="hljs-number">15</span>,
        <span class="hljs-type">date</span>: <span class="hljs-string">"04.05.15"</span>,
        <span class="hljs-property">time</span>: <span class="hljs-string">"04:00"</span>,
        location: <span class="hljs-string">"999 Ruecker Union Suite 186 Ernabury, WA 84631"</span>,
        reserved: <span class="hljs-constant">false</span>,
        contactEmail: <span class="hljs-string">"Joan.Doyle@Lynch.net"</span>
    },
    {
        <span class="hljs-property">id</span>: <span class="hljs-number">2</span>,
        carId: <span class="hljs-number">8</span>,
        duration: <span class="hljs-number">60</span>,
        <span class="hljs-type">date</span>: <span class="hljs-string">"03.05.15"</span>,
        <span class="hljs-property">time</span>: <span class="hljs-string">"13:00"</span>,
        location: <span class="hljs-string">"4436 Streich Views Fadelville, OK 19956-1054"</span>,
        reserved: <span class="hljs-constant">false</span>,
        contactEmail: <span class="hljs-string">"Pouros.Serena@Streich.net"</span>
    },
    {
        <span class="hljs-property">id</span>: <span class="hljs-number">3</span>,
        carId: <span class="hljs-number">9</span>,
        duration: <span class="hljs-number">60</span>,
        <span class="hljs-type">date</span>: <span class="hljs-string">"02.05.15"</span>,
        <span class="hljs-property">time</span>: <span class="hljs-string">"03:00"</span>,
        location: <span class="hljs-string">"11856 Ullrich Lake Vernerstad, MN 31068-7134"</span>,
        reserved: <span class="hljs-constant">false</span>,
        contactEmail: <span class="hljs-string">"Ephraim21@Cummings.com"</span>
    }
]
</code></pre></li></ul></section><h4 id="termini-">Resources&nbsp;<a href="#termini-"><i class="fa fa-link"></i></a></h4><section id="termini--get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Pridobi podatke o terminu</span></div><div style="float:left"><a href="#termini--get" class="btn btn-xs btn-info">GET</a></div><div style="overflow:hidden"><code>/api/CMW/timeslots/{id}</code></div></div><ul class="list-group"><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#bf7b7ebb72b2d0ed6134f39b625d4f87" class="pull-right collapsed"><span class="closed">Show</span><span class="open">Hide</span></a></li><li id="bf7b7ebb72b2d0ed6134f39b625d4f87" class="list-group-item panel-collapse collapse"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br></code></pre><h5>Body</h5><pre><code>{
    <span class="hljs-attribute">id</span>: <span class="hljs-number">1</span>,
    <span class="hljs-attribute">carId</span>: <span class="hljs-number">6</span>,
    <span class="hljs-attribute">duration</span>: <span class="hljs-number">15</span>,
    <span class="hljs-attribute">date</span>: <span class="hljs-string">"04.05.15"</span>,
    <span class="hljs-attribute">time</span>: <span class="hljs-string">"04:00"</span>,
    <span class="hljs-attribute">location</span>: <span class="hljs-string">"999 Ruecker Union Suite 186 Ernabury, WA 84631"</span>,
    <span class="hljs-attribute">reserved</span>: false,
    <span class="hljs-attribute">contactEmail</span>: <span class="hljs-string">"Joan.Doyle@Lynch.net"</span>
}
</code></pre></li></ul></section></div></div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="rezervacije">Rezervacije&nbsp;<a href="#rezervacije"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><h4 id="rezervacije-">Resources&nbsp;<a href="#rezervacije-"><i class="fa fa-link"></i></a></h4><p>Pri rezervaciji termina morate podati id od termine ter veljaven (uporabnikov) email.</p>
<section id="rezervacije--post" class="panel panel-success"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Ustvari novo rezervacijo</span></div><div style="float:left"><a href="#rezervacije--post" class="btn btn-xs btn-success">POST</a></div><div style="overflow:hidden"><code>/api/CMW/reservartions</code></div></div><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>JSON message</code></strong><a data-toggle="collapse" data-target="#7d4d156b039f71bd55cc70bc6bc92204" class="pull-right collapsed"><span class="closed">Show</span><span class="open">Hide</span></a></li><li id="7d4d156b039f71bd55cc70bc6bc92204" class="list-group-item panel-collapse collapse"><h5>Body</h5><pre><code>{
"<span class="hljs-attribute">timeslotId</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
"<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"john@example.com"</span>
</span>}

</code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#7dd2fd48720724db5257010b0f9d8a1b" class="pull-right collapsed"><span class="closed">Show</span><span class="open">Hide</span></a></li><li id="7dd2fd48720724db5257010b0f9d8a1b" class="list-group-item panel-collapse collapse"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">status</span>" : <span class="hljs-value"><span class="hljs-string">"success"</span>
</span>}
</code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>400</code></strong><a data-toggle="collapse" data-target="#0e8daccad77702bc20ac467af4afb60f" class="pull-right collapsed"><span class="closed">Show</span><span class="open">Hide</span></a></li><li id="0e8daccad77702bc20ac467af4afb60f" class="list-group-item panel-collapse collapse"><h5>Body</h5><pre><code>{    
    "<span class="hljs-attribute">errors</span>": 
    <span class="hljs-value">[
        {
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"email"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"A valid email is required."</span>
        </span>},
        {
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"timeslotId"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"A valid timeslotId is required."</span>
        </span>}
    ]
</span>}</code></pre></li></ul></section></div></div></div></div></div></div><p style="text-align: center;" class="text-muted">Generated by&nbsp;<a href="https://github.com/danielgtaylor/aglio" class="aglio">aglio</a>&nbsp;on 01 May 2015</p><div id="localFile" style="display: none; position: absolute; top: 0; left: 0; width: 100%; color: white; background: red; font-size: 150%; text-align: center; padding: 1em;">This page may not display correctly when opened as a local file. Instead, view it from a web server.

</div></body><script src="//code.jquery.com/jquery-1.11.0.min.js"></script><script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script><script>(function() {
  if (location.protocol === 'file:') {
    document.getElementById('localFile').style.display = 'block';
  }

}).call(this);
</script><script>(function() {
  $('table').addClass('table');

}).call(this);
</script></html>