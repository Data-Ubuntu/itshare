<!-- Dot metrix -->
<script type='text/javascript'>
    (function(doc, dm) {
        if (!dm.VERSION) {
            window.dotmetrix = dm;

            dm._queue = [];
            dm.init = function(api_token, b, c) {
            dm.API_TOKEN = api_token;
            function f(dm, fname) { dm[fname] = function() { dm._queue.push([fname].concat([].slice.call(arguments, 0))); } }
                var functions = 'track identify set'.split(' ');
                for (var i = 0; i < functions.length; i++) f(dm, functions[i]);
            };

            s = doc.createElement("script"); s.type = "text/javascript"; s.async = !0; s.src = "https://api.dot-metrix.com/dot-metrix.p.js"; e = doc.getElementsByTagName("script")[0]; e.parentNode.insertBefore(s, e);
        }
    
    })(document, window.dotmetrix || {});
    
    dotmetrix.init('3fH9sRLyKoEcottpVzdn');
</script>
<!-- /Dot metrix -->