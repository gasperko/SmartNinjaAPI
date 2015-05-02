<!DOCTYPE html><html><head><meta charset="utf-8"><title>Eshop SmartNinja API</title><link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/slate/bootstrap.min.css"><link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"><link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,700|Inconsolata|Raleway:200"><style>/* Highlight.js Theme Tomorrow Night Eighties */
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
</style></head><body><a href="#top" class="text-muted back-to-top"><i class="fa fa-toggle-up"></i>&nbsp;Back to top</a><div class="container"><div class="row"><div class="col-md-3"><nav id="nav" class="hidden-sm hidden-xs affix nav"><div class="list-group"><a data-toggle="" data-target="#kategorije-menu" href="#kategorije" class="list-group-item heading collapsed">Kategorije</a><div id="kategorije-menu"><a href="#kategorije-" style="border-top-left-radius: 0; border-top-right-radius: 0" class="list-group-item"><span class="badge alert-info"><i class="fa fa-arrow-down"></i></span>Pridobi seznam kategorij</a><a href="#kategorije-" style="border-top-left-radius: 0; border-top-right-radius: 0" class="list-group-item"><span class="badge alert-info"><i class="fa fa-arrow-down"></i></span>Pridobi seznam izdelkov znotraj ene kategorije</a></div></div><div class="list-group"><a data-toggle="" data-target="#izdelki-menu" href="#izdelki" class="list-group-item heading collapsed">Izdelki</a><div id="izdelki-menu"><a href="#izdelki-" style="border-top-left-radius: 0; border-top-right-radius: 0" class="list-group-item"><span class="badge alert-info"><i class="fa fa-arrow-down"></i></span>Pridobi seznam izdelkov</a><a href="#izdelki-" style="border-top-left-radius: 0; border-top-right-radius: 0" class="list-group-item"><span class="badge alert-info"><i class="fa fa-arrow-down"></i></span>Pridobi podatke o izdelku</a></div></div><div class="list-group"><a data-toggle="" data-target="#nakupi-menu" href="#nakupi" class="list-group-item heading collapsed">Nakupi</a><div id="nakupi-menu"><a href="#nakupi-" style="border-top-left-radius: 0; border-top-right-radius: 0" class="list-group-item"><span class="badge alert-success"><i class="fa fa-plus"></i></span>Ustvari nov nakup</a></div></div></nav></div><div class="col-md-8"><div><header><div class="page-header"><h1 id="top">Eshop SmartNinja API</h1></div></header><div class="description"><p>Enostaven API za pridobivanje podatkov o plišastih živali. API je namenjen SmartNinja tečajnikom.</p>
</div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="kategorije">Kategorije&nbsp;<a href="#kategorije"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><p>Navodila za pridobivanja podatkov o kategorijah.</p>
<h4 id="kategorije-">Resources&nbsp;<a href="#kategorije-"><i class="fa fa-link"></i></a></h4><section id="kategorije--get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Pridobi seznam kategorij</span></div><div style="float:left"><a href="#kategorije--get" class="btn btn-xs btn-info">GET</a></div><div style="overflow:hidden"><code>/api/eshop/categories</code></div></div><ul class="list-group"><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#b4abfb003463f38ac2e8a207bc4ee4b9" class="pull-right collapsed"><span class="closed">Show</span><span class="open">Hide</span></a></li><li id="b4abfb003463f38ac2e8a207bc4ee4b9" class="list-group-item panel-collapse collapse"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br></code></pre><h5>Body</h5><pre><code><span class="hljs-collection">[
    <span class="hljs-collection">{
        id: <span class="hljs-number">1</span>,
        category: <span class="hljs-string">"Male plišaste živali"</span>
    }</span>,
    <span class="hljs-collection">{
        id: <span class="hljs-number">2</span>,
        category: <span class="hljs-string">"Velike plišaste živali"</span>
    }</span>,
    <span class="hljs-collection">{
        id: <span class="hljs-number">3</span>,
        category: <span class="hljs-string">"Plišasti obeski"</span>
    }</span>,
    <span class="hljs-collection">{
        id: <span class="hljs-number">4</span>,
        category: <span class="hljs-string">"Knjige in slikanice"</span>
    }</span>
]</span> 
</code></pre></li></ul></section><h4 id="kategorije-">Resources&nbsp;<a href="#kategorije-"><i class="fa fa-link"></i></a></h4><section id="kategorije--get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Pridobi seznam izdelkov znotraj ene kategorije</span></div><div style="float:left"><a href="#kategorije--get" class="btn btn-xs btn-info">GET</a></div><div style="overflow:hidden"><code>/api/eshop/categories/{id}/products{?query, onlyStocked}</code></div></div><div class="panel-body"><ul>
<li><p>query (string, optional) - filter po imenih izdelkov</p></li>
<li><p>onlyStocked (boolean, optional) - filter po izdelkih, ki so na zalogi</p>
<ul>
<li>default: false</li>
</ul></li>
</ul>
</div><ul class="list-group"><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#65d60d540e1f3977ebd4c5a469bd8bb7" class="pull-right collapsed"><span class="closed">Show</span><span class="open">Hide</span></a></li><li id="65d60d540e1f3977ebd4c5a469bd8bb7" class="list-group-item panel-collapse collapse"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br></code></pre><h5>Body</h5><pre><code>[
    {
        id: <span class="hljs-number">1</span>,
        categoryId: <span class="hljs-number">3</span>,
        name: <span class="hljs-string">"Monty"</span>,
        <span class="hljs-built_in">color</span>: <span class="hljs-string">"aqua"</span>,
        tagline: <span class="hljs-string">"Accusamus nihil repellat vero omnis voluptates id amet et et."</span>,
        description: <span class="hljs-string">"Recusandae totam nulla quam ipsam voluptatem. Sed natus debitis voluptas aut laudantium sit. Esse perspiciatis dignissimos error et itaque quibusdam tempora velit. Ut velit soluta explicabo eligendi occaecati debitis et. Eum sint dolorem delectus enim ipsum inventore sed. Et velit qui suscipit a deserunt laudantium. Enim nostrum soluta qui ipsam non ipsum velit."</span>,
        brand: <span class="hljs-string">"Barton, Flatley and Muller"</span>,
        price: <span class="hljs-number">49.99</span>,
        stock: <span class="hljs-number">2</span>,
        availableOn: <span class="hljs-keyword">null</span>,
        <span class="hljs-built_in">image</span>: <span class="hljs-string">"http://lorempixel.com/300/300/people/1"</span>,
        onSale: <span class="hljs-keyword">false</span>
    },
    {
        id: <span class="hljs-number">2</span>,
        categoryId: <span class="hljs-number">3</span>,
        name: <span class="hljs-string">"Jackeline"</span>,
        <span class="hljs-built_in">color</span>: <span class="hljs-string">"yellow"</span>,
        tagline: <span class="hljs-string">"Saepe architecto unde non dicta eveniet."</span>,
        description: <span class="hljs-string">"Porro sed magni cupiditate sit. Voluptas sint non voluptates. Optio quos qui illo error. Laborum vero a officia id corporis. Saepe provident esse hic eligendi. Culpa ut ab voluptas sed a. Et sint autem inventore aut officia aut."</span>,
        brand: <span class="hljs-string">"Kling Ltd"</span>,
        price: <span class="hljs-number">19.99</span>,
        stock: <span class="hljs-number">0</span>,
        availableOn: <span class="hljs-string">"16.05.2015"</span>,
        <span class="hljs-built_in">image</span>: <span class="hljs-string">"http://lorempixel.com/300/300/transport/2"</span>,
        onSale: <span class="hljs-keyword">true</span>
    },
    {
        id: <span class="hljs-number">5</span>,
        categoryId: <span class="hljs-number">3</span>,
        name: <span class="hljs-string">"Kamryn"</span>,
        <span class="hljs-built_in">color</span>: <span class="hljs-string">"blue"</span>,
        tagline: <span class="hljs-string">"Laudantium perferendis eveniet quam vero fuga."</span>,
        description: <span class="hljs-string">"Temporibus maxime sint suscipit laudantium quod magni. Voluptas fuga non autem non non explicabo et neque. Ex quaerat ut aut at consequatur non rerum in. Voluptas molestiae fuga quod cum non qui. Cupiditate incidunt id sunt dolorem. Voluptatem perferendis molestiae est. Iure possimus ab in hic. Odio sed vitae maiores ex beatae reprehenderit exercitationem corrupti."</span>,
        brand: <span class="hljs-string">"Hudson Ltd"</span>,
        price: <span class="hljs-number">19.99</span>,
        stock: <span class="hljs-number">3</span>,
        availableOn: <span class="hljs-keyword">null</span>,
        <span class="hljs-built_in">image</span>: <span class="hljs-string">"http://lorempixel.com/300/300/technics/5"</span>,
        onSale: <span class="hljs-keyword">false</span>
    }
]
</code></pre></li></ul></section></div></div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="izdelki">Izdelki&nbsp;<a href="#izdelki"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><p>Navodila za pridobivanja podatkov o izdelkih.</p>
<h4 id="izdelki-">Resources&nbsp;<a href="#izdelki-"><i class="fa fa-link"></i></a></h4><section id="izdelki--get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Pridobi seznam izdelkov</span></div><div style="float:left"><a href="#izdelki--get" class="btn btn-xs btn-info">GET</a></div><div style="overflow:hidden"><code>/api/eshop/products{?query, onlyStocked}</code></div></div><div class="panel-body"><ul>
<li><p>query (string, optional) - filter po imenih izdelkov</p></li>
<li><p>onlyStocked (boolean, optional) - filter po izdelkih, ki so na zalogi</p>
<ul>
<li>default: false</li>
</ul></li>
</ul>
</div><ul class="list-group"><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#311d80bf71469433c8f39f8c0a97d47c" class="pull-right collapsed"><span class="closed">Show</span><span class="open">Hide</span></a></li><li id="311d80bf71469433c8f39f8c0a97d47c" class="list-group-item panel-collapse collapse"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br></code></pre><h5>Body</h5><pre><code>[
    {
        id: <span class="hljs-number">1</span>,
        categoryId: <span class="hljs-number">3</span>,
        name: <span class="hljs-string">"Monty"</span>,
        <span class="hljs-built_in">color</span>: <span class="hljs-string">"aqua"</span>,
        tagline: <span class="hljs-string">"Accusamus nihil repellat vero omnis voluptates id amet et et."</span>,
        description: <span class="hljs-string">"Recusandae totam nulla quam ipsam voluptatem. Sed natus debitis voluptas aut laudantium sit. Esse perspiciatis dignissimos error et itaque quibusdam tempora velit. Ut velit soluta explicabo eligendi occaecati debitis et. Eum sint dolorem delectus enim ipsum inventore sed. Et velit qui suscipit a deserunt laudantium. Enim nostrum soluta qui ipsam non ipsum velit."</span>,
        brand: <span class="hljs-string">"Barton, Flatley and Muller"</span>,
        price: <span class="hljs-number">49.99</span>,
        stock: <span class="hljs-number">2</span>,
        <span class="hljs-built_in">image</span>: <span class="hljs-string">"http://lorempixel.com/300/300/people/1"</span>,
        onSale: <span class="hljs-keyword">false</span>,
        availableOn: <span class="hljs-keyword">null</span>
    },
    {
        id: <span class="hljs-number">2</span>,
        categoryId: <span class="hljs-number">3</span>,
        name: <span class="hljs-string">"Jackeline"</span>,
        <span class="hljs-built_in">color</span>: <span class="hljs-string">"yellow"</span>,
        tagline: <span class="hljs-string">"Saepe architecto unde non dicta eveniet."</span>,
        description: <span class="hljs-string">"Porro sed magni cupiditate sit. Voluptas sint non voluptates. Optio quos qui illo error. Laborum vero a officia id corporis. Saepe provident esse hic eligendi. Culpa ut ab voluptas sed a. Et sint autem inventore aut officia aut."</span>,
        brand: <span class="hljs-string">"Kling Ltd"</span>,
        price: <span class="hljs-number">19.99</span>,
        stock: <span class="hljs-number">0</span>,
        <span class="hljs-built_in">image</span>: <span class="hljs-string">"http://lorempixel.com/300/300/transport/2"</span>,
        onSale: <span class="hljs-keyword">true</span>,
        availableOn: <span class="hljs-string">"2015-05-16"</span>
    },
    {
        id: <span class="hljs-number">3</span>,
        categoryId: <span class="hljs-number">1</span>,
        name: <span class="hljs-string">"Lina"</span>,
        <span class="hljs-built_in">color</span>: <span class="hljs-string">"blue"</span>,
        tagline: <span class="hljs-string">"Nisi molestiae quidem ut sunt et quidem est accusamus."</span>,
        description: <span class="hljs-string">"Fuga est placeat rerum ut et. Ex eveniet facere sunt quia. Aut nam et eum architecto fugit repellendus illo veritatis. Ex esse veritatis voluptate vel possimus. Aut incidunt sunt cumque asperiores incidunt iure sequi. Culpa rem aut rerum exercitationem est rem. Voluptas fuga totam reiciendis. Architecto fugiat nemo omnis consequatur recusandae qui cupiditate. Quod veritatis vel optio provident. Incidunt magnam molestias et quibusdam et ab quo voluptatum. Ipsum voluptatibus est accusantium eveniet."</span>,
        brand: <span class="hljs-string">"Kub, Roob and Brakus"</span>,
        price: <span class="hljs-number">9.99</span>,
        stock: <span class="hljs-number">2</span>,
        <span class="hljs-built_in">image</span>: <span class="hljs-string">"http://lorempixel.com/300/300/animals/3"</span>,
        onSale: <span class="hljs-keyword">false</span>,
        availableOn: <span class="hljs-keyword">null</span>
    }
]
</code></pre></li></ul></section><h4 id="izdelki-">Resources&nbsp;<a href="#izdelki-"><i class="fa fa-link"></i></a></h4><section id="izdelki--get" class="panel panel-info"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Pridobi podatke o izdelku</span></div><div style="float:left"><a href="#izdelki--get" class="btn btn-xs btn-info">GET</a></div><div style="overflow:hidden"><code>/api/eshop/products/{id}</code></div></div><ul class="list-group"><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#c9430756f4b7d0544adc397f394d9953" class="pull-right collapsed"><span class="closed">Show</span><span class="open">Hide</span></a></li><li id="c9430756f4b7d0544adc397f394d9953" class="list-group-item panel-collapse collapse"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br></code></pre><h5>Body</h5><pre><code>{
    <span class="hljs-attribute">id</span>: <span class="hljs-number">1</span>,
    <span class="hljs-attribute">categoryId</span>: <span class="hljs-number">3</span>,
    <span class="hljs-attribute">name</span>: <span class="hljs-string">"Monty"</span>,
    <span class="hljs-attribute">color</span>: <span class="hljs-string">"aqua"</span>,
    <span class="hljs-attribute">tagline</span>: <span class="hljs-string">"Accusamus nihil repellat vero omnis voluptates id amet et et."</span>,
    <span class="hljs-attribute">description</span>: <span class="hljs-string">"Recusandae totam nulla quam ipsam voluptatem. Sed natus debitis voluptas aut laudantium sit. Esse perspiciatis dignissimos error et itaque quibusdam tempora velit. Ut velit soluta explicabo eligendi occaecati debitis et. Eum sint dolorem delectus enim ipsum inventore sed. Et velit qui suscipit a deserunt laudantium. Enim nostrum soluta qui ipsam non ipsum velit."</span>,
    <span class="hljs-attribute">brand</span>: <span class="hljs-string">"Barton, Flatley and Muller"</span>,
    <span class="hljs-attribute">price</span>: <span class="hljs-number">49.99</span>,
    <span class="hljs-attribute">stock</span>: <span class="hljs-number">2</span>,
    <span class="hljs-attribute">image</span>: <span class="hljs-string">"http://lorempixel.com/300/300/people/1"</span>,
    <span class="hljs-attribute">onSale</span>: false,
    <span class="hljs-attribute">availableOn</span>: null
}
</code></pre></li></ul></section></div></div></div><div><div class="panel panel-default"><div class="panel-heading"><h3 id="nakupi">Nakupi&nbsp;<a href="#nakupi"><i class="fa fa-link"></i></a></h3></div><div class="panel-body"><h4 id="nakupi-">Resources&nbsp;<a href="#nakupi-"><i class="fa fa-link"></i></a></h4><p>Pri nakupu morate podati podatke o uporabniku kot podatke o košarici.</p>
<section id="nakupi--post" class="panel panel-success"><div class="panel-heading"><div style="float:right"><span style="text-transform: lowercase">Ustvari nov nakup</span></div><div style="float:left"><a href="#nakupi--post" class="btn btn-xs btn-success">POST</a></div><div style="overflow:hidden"><code>/api/eshop/orders</code></div></div><ul class="list-group"><li class="list-group-item"><strong>Request&nbsp;&nbsp;<code>JSON message</code></strong><a data-toggle="collapse" data-target="#c60fb41f3cf039e764583c61396ca571" class="pull-right collapsed"><span class="closed">Show</span><span class="open">Hide</span></a></li><li id="c60fb41f3cf039e764583c61396ca571" class="list-group-item panel-collapse collapse"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">firstName</span>" : <span class="hljs-value"><span class="hljs-string">"John"</span></span>,
    "<span class="hljs-attribute">lastName</span>" : <span class="hljs-value"><span class="hljs-string">"Example"</span></span>,
    "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"john@example.com"</span></span>,
    "<span class="hljs-attribute">address</span>": <span class="hljs-value"><span class="hljs-string">"One way 123"</span></span>,
    "<span class="hljs-attribute">country</span>" : <span class="hljs-value"><span class="hljs-string">"Freelandia"</span></span>,
    "<span class="hljs-attribute">city</span>" : <span class="hljs-value"><span class="hljs-string">"York"</span></span>,
    "<span class="hljs-attribute">zip</span>" : <span class="hljs-value"><span class="hljs-number">43533</span></span>,
    "<span class="hljs-attribute">products</span>":
    <span class="hljs-value">[
        {
            "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>, 
            "<span class="hljs-attribute">quantity</span>": <span class="hljs-value"><span class="hljs-number">1</span>
        </span>}
    ]
 </span>}
</code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>200</code></strong><a data-toggle="collapse" data-target="#37ff06fe03376a99433c71d8c7f12d82" class="pull-right collapsed"><span class="closed">Show</span><span class="open">Hide</span></a></li><li id="37ff06fe03376a99433c71d8c7f12d82" class="list-group-item panel-collapse collapse"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">status</span>" : <span class="hljs-value"><span class="hljs-string">"success"</span>
</span>}
</code></pre></li><li class="list-group-item"><strong>Response&nbsp;&nbsp;<code>400</code></strong><a data-toggle="collapse" data-target="#677809b6e0d67aa1a5e5dc4d167df121" class="pull-right collapsed"><span class="closed">Show</span><span class="open">Hide</span></a></li><li id="677809b6e0d67aa1a5e5dc4d167df121" class="list-group-item panel-collapse collapse"><h5>Body</h5><pre><code>{
    "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
        {
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"email"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"A valid email is required."</span>
        </span>},
        {
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"products"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"You need at least one product."</span>
        </span>},
        {
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"firstName"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"A valid first name is required."</span>
        </span>},
        {
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"lastName"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"A valid last name is required."</span>
        </span>},
        {
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"address"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"A valid address is required."</span>
        </span>},
        {
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"country"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"A valid country is required."</span>
        </span>},
        {
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"city"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"A valid city is required."</span>
        </span>},
        {
            "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"zip"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"A valid zip is required."</span>
        </span>}
    ]
</span>}</code></pre></li></ul></section></div></div></div></div></div></div><p style="text-align: center;" class="text-muted">Generated by&nbsp;<a href="https://github.com/danielgtaylor/aglio" class="aglio">aglio</a>&nbsp;on 02 May 2015</p><div id="localFile" style="display: none; position: absolute; top: 0; left: 0; width: 100%; color: white; background: red; font-size: 150%; text-align: center; padding: 1em;">This page may not display correctly when opened as a local file. Instead, view it from a web server.

</div></body><script src="//code.jquery.com/jquery-1.11.0.min.js"></script><script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script><script>(function() {
  if (location.protocol === 'file:') {
    document.getElementById('localFile').style.display = 'block';
  }

}).call(this);
</script><script>(function() {
  $('table').addClass('table');

}).call(this);
</script></html>