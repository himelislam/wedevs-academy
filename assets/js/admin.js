;(function($){

    $('table.wp-list-table.contacts').on('click', 'a.submitdelete', function(e){
        e.preventDefault();

        if(!confirm(weDevsAcademy.confirm)){
            return;
        }
    })

})(jQuery);