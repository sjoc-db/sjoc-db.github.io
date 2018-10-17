$(window).on("load",function(){
    setTimeout(function() {
        console.log('isotope running');
        // set up variables
        var categoryFilters = [];
        var categoryFilter;
        var qsRegex;

        // init Isotope
        var $container = $('#characters').isotope({
            itemSelector: '.filter',
            filter: function() {
                var length = categoryFilters.length;
                var $this = $(this);
                // check if all category filter match
                for ( var i=0; i<length; i++ ) {
                    var catFilter = categoryFilters[i];
                    console.log(catFilter);
                    if ( !$this.hasClass(catFilter) ) {
                        return false;
                    }
                }
                // otherwise match
                return qsRegex ? $(this).text().match( qsRegex ) : true;
            }
        });

        var $quicksearch = $('.quicksearch').keyup( debounce( function() {
            qsRegex = new RegExp( $quicksearch.val(), 'gi' );
            $container.isotope();
            }, 200 ) );

            function debounce( fn, threshold ) {
            var timeout;
            return function debounced() {
                if ( timeout ) {
                    clearTimeout( timeout );
                }
                function delayed() {
                    fn();
                    timeout = null;
                }
                timeout = setTimeout( delayed, threshold || 100 );
            }
        }

        // filter with checkboxes
        var $button = $('#filter button');

        $button.click( function() {
            categoryFilters = [];
            var $this = $(this);
            $this.toggleClass("active");
            $button.each( function( i, elem ) {
                if ( $(elem).hasClass("active") ) {
                    categoryFilters.push( $(elem).data("filter") );
                }
            });
            $container.isotope();
        });

        var $typeButton = $(".type")
        $(".type-child").hide();
        $typeButton.click( function() {
            if($typeButton.hasClass("active")){
                $(".type-child").show();
            } else {
                $(".type-child").hide();
                $(".type-child").find(".active").click();
            }
        })

        var $statButton = $(".stat")
        $(".stat-child").hide();
        $statButton.click( function() {
            if($statButton.hasClass("active")){
                $(".stat-child").show();
            } else {
                $(".stat-child").hide();
                $(".stat-child").find(".active").click();
            }
        })

        var $singleHitterButton = $(".single-hitter")
        $(".single-hitter-child").hide();
        $singleHitterButton.click( function() {
            if($singleHitterButton.hasClass("active")){
                $(".single-hitter-child").show();
            } else {
                $(".single-hitter-child").hide();
                $(".single-hitter-child").find(".active").click();
            }
        })

        var $multiHitterButton = $(".multi-hitter")
        $(".multi-hitter-child").hide();
        $multiHitterButton.click( function() {
            if($multiHitterButton.hasClass("active")){
                $(".multi-hitter-child").show();
            } else {
                $(".multi-hitter-child").hide();
                $(".multi-hitter-child").find(".active").click();
            }
        })

        var $healerButton = $(".healer")
        $(".healer-child").hide();
        $healerButton.click( function() {
            if($healerButton.hasClass("active")){
                $(".healer-child").show();
            } else {
                $(".healer-child").hide();
                $(".healer-child").find(".active").click();
            }
        })

        var $eotHealerButton = $(".eot-healer")
        $(".eot-healer-child").hide();
        $eotHealerButton.click( function() {
            if($eotHealerButton.hasClass("active")){
                $(".eot-healer-child").show();
            } else {
                $(".eot-healer-child").hide();
                $(".eot-healer-child").find(".active").click();
            }
        })

        var $debufferButton = $(".debuffer")
        $(".debuffer-child").hide();
        $debufferButton.click( function() {
            if($debufferButton.hasClass("active")){
                $(".debuffer-child").show();
            } else {
                $(".debuffer-child").hide();
                $(".debuffer-child").find(".active").click();
            }
        })

        var $sealerButton = $(".sealer")
        $(".sealer-child").hide();
        $sealerButton.click( function() {
            if($sealerButton.hasClass("active")){
                $(".sealer-child").show();
            } else {
                $(".sealer-child").hide();
                $(".sealer-child").find(".active").click();
            }
        })

        resizeImage();

        $container.isotope();

        function resizeImage(){
            var $firstImageWidth = $('.img:first').css('width');
            $('.img').each(function(){
                var $img = $(this);
                $img.css('width',$firstImageWidth);
                $img.css('height',$firstImageWidth);
            });
            console.log("resize");
        }

        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.getElementById("main").style.width = "calc(100% - 250px)";
            window.dispatchEvent(new Event('resize'));
            resizeImage();
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
            document.getElementById("main").style.width = "100%";
            window.dispatchEvent(new Event('resize'));
            resizeImage();
        }
    }, 1000);
})