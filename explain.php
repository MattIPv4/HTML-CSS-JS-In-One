<?php $a = htmlspecialchars(file_get_contents('index.html')); ?>
<link rel="stylesheet" href="https://highlightjs.org/static/demo/styles/default.css">
<script src="https://highlightjs.org/static/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
html
<pre><code class="html"><?php echo $a; ?></code></pre>
css
<pre><code class="css"><?php echo $a; ?></code></pre>
javascript
<pre><code class="javascript"><?php echo $a; ?></code></pre>
