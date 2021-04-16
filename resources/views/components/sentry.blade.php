<script
  src="https://browser.sentry-cdn.com/6.2.5/bundle.min.js"
  integrity="sha384-+0tgGyP4idWu9/NA6Jbmnj3SApxIg65/GR1zo3qSieRNyzmmDQ/5a1Yu6mfmUw+v"
  crossorigin="anonymous"
></script>
<script>
    Sentry.init({ 
        dsn: "{{ $dsn }}",
        debug: {{ json_encode($debug) }},
        environment: "{{ $environment }}"
    });
</script>