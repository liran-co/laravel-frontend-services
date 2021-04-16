<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId            : '{{ $appId }}',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v10.0'
        });
    };
</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>