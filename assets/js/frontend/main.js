(function($) {

    var app = {
        mymodule:  {
            init: function() {
                console.log('Hello from mymodule!')
            }
        },
        init: function() {
            app.mymodule.init();
        }
    }

    $(document).ready(app.init);

})(jQuery); // Fully reference jQuery after this point.