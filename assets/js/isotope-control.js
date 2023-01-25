//Isotope
      // init Isotope
      var $grid = jQuery('#portfolio-list').isotope({
        // options
        filter: '*',
        resizable: false,
        });
        $grid.imagesLoaded().progress( function(){
            $grid.isotope('layout');
        });
        // filter items on button click
        jQuery('.filter-button-group').on( 'click', 'button', function() {
        var filterValue = jQuery(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });
  
  
  

      
      
  
        