$(window).on('load', function() {
    const kitchenSink = window.location.origin + '/kitchen-sink.php';
    const message = `%cBootstrap Kitchen Sink available at: ${kitchenSink}`;
    console.log(message, 'background-color:#222; color: yellow; padding:15px;');
});
