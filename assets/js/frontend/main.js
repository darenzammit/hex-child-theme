(function($) {

    var app = {
        init: function() {
            alert('hello');
        }
    }

    $(document).ready(app.init);

})(jQuery); // Fully reference jQuery after this point.