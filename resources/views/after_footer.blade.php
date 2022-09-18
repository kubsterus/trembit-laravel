<script src="{{asset('js/jquery-3.3.1.min.js?5363')}}"></script>
<script src="{{asset('js/siema.min.js')}}"></script>
<script>
    const riemas = document.querySelectorAll('.riema');
    Siema.prototype.addArrows = function () {

        // make buttons & append them inside Siema's container
        this.prevArrow = document.createElement('button');
        this.nextArrow = document.createElement('button');
        //this.prevArrow.textContent = 'previous slide';
        //this.nextArrow.textContent = '>';
        this.selector.appendChild(this.prevArrow);
        this.selector.appendChild(this.nextArrow);

        // event handlers on buttons
        this.prevArrow.addEventListener('click', () => this.prev());
        this.nextArrow.addEventListener('click', () => this.next());
    };

    // this is fairly new way of looping through DOM Elements
    // More about ithere: https://pawelgrzybek.com/loop-through-a-collection-of-dom-elements/
    // For better compatibility I suggest using for loop

    const windowWidth = window.innerWidth
    let ecop2 = 1
    if (windowWidth >= 768) {
        ecop2 = 3
    }
    if (windowWidth >= 1568) {
        ecop2 = 4
    }
    for (const riema of riemas) {
        const instance = new Siema({
            selector: riema,
            perPage: ecop2,
            loop: true
        });

        instance.addArrows();
    };
    const niemas = document.querySelectorAll('.niema');
    Siema.prototype.addArrows = function () {

        // make buttons & append them inside Siema's container
        this.prevArrow = document.createElement('button');
        this.nextArrow = document.createElement('button');
        //this.prevArrow.textContent = 'previous slide';
        //this.nextArrow.textContent = '>';
        this.selector.appendChild(this.prevArrow);
        this.selector.appendChild(this.nextArrow);

        // event handlers on buttons
        this.prevArrow.addEventListener('click', () => this.prev());
        this.nextArrow.addEventListener('click', () => this.next());
    };

    // this is fairly new way of looping through DOM Elements
    // More about ithere: https://pawelgrzybek.com/loop-through-a-collection-of-dom-elements/
    // For better compatibility I suggest using for loop

    let ecop = 1
    if (windowWidth >= 768) {
        ecop = 3
    }
	if (windowWidth >= 768) {
		for (const niema of niemas) {
			const instance = new Siema({
				selector: niema,
				perPage: ecop,
				loop: true
			});

			instance.addArrows();
		};
    } else {
    }
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
    $( ".drop-x" ).click(function() {
        $( ".drop-m" ).toggleClass( "active" );
    });
    $( ".drop-r" ).click(function() {
        $( ".drop-els1" ).toggleClass( "active" );
    });
    $( ".drop-r2" ).click(function() {
        $( ".drop-els2" ).toggleClass( "active" );
    });
    $(".drop-r3").click(function () {
        $(".drop-els3").toggleClass("active");
    });
    $( ".drop-x3" ).click(function() {
        $( ".drop-m3" ).toggleClass( "active" );
    });
    $( ".drop-x2" ).click(function() {
        $( ".drop-m2" ).toggleClass( "active" );
    });
    $( ".block-in" ).click(function() {
        $( ".block-in" ).removeClass( "active" );
        $( this ).toggleClass( "active" );
    });
    $( ".block-n-0" ).click(function() {
        $( ".block-in-s" ).removeClass( "active" );
        $( ".block-in-0").toggleClass( "active" );
        $('html, body').animate({
            scrollTop: $("#case").offset().top * 0.86
        }, 1000);
    });
    $( ".block-n-1" ).click(function() {
        $( ".block-in-s" ).removeClass( "active" );
        $( ".block-in-1").toggleClass( "active" );
        $('html, body').animate({
            scrollTop: $("#case").offset().top * 0.86
        }, 1000);
    });
    $( ".block-n-2" ).click(function() {
        $( ".block-in-s" ).removeClass( "active" );
        $( ".block-in-2").toggleClass( "active" );
        $('html, body').animate({
            scrollTop: $("#case").offset().top * 0.86
        }, 1000);
    });
    $( ".block-n-3" ).click(function() {
        $( ".block-in-s" ).removeClass( "active" );
        $( ".block-in-3").toggleClass( "active" );
        $('html, body').animate({
            scrollTop: $("#case").offset().top * 0.86
        }, 1000);
    });
    $( ".block-in2" ).click(function() {
        $( ".block-in2" ).removeClass( "active" );
        $( this ).toggleClass( "active" );
    });
    $( ".block-n2-0" ).click(function() {
        $( ".block-in2-s" ).removeClass( "active" );
        $( ".block-in2-0").toggleClass( "active" );
        $('html, body').animate({
            scrollTop: $("#our-platform").offset().top * 0.95
        }, 1000);
    });
    $( ".block-n2-1" ).click(function() {
        $( ".block-in2-s" ).removeClass( "active" );
        $( ".block-in2-1").toggleClass( "active" );
        $('html, body').animate({
            scrollTop: $("#our-platform").offset().top * 0.95
        }, 1000);
    });
    $( ".block-n2-2" ).click(function() {
        $( ".block-in2-s" ).removeClass( "active" );
        $( ".block-in2-2").toggleClass( "active" );
        $('html, body').animate({
            scrollTop: $("#our-platform").offset().top * 0.95
        }, 1000);
    });
    $('.industries__item-body').click(function(e){
        e.stopPropagation();
        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $(this).next().slideUp();
        }
        else{
            $(this).addClass('active');
            $(this).next().slideDown();
        }
    });
</script>
<script>
    document.querySelector('.header-burger').addEventListener('click', function () {
        this.classList.toggle('active')
        document.querySelector('.body-wrp').classList.toggle('no_overflow')
        document.getElementById('nav').classList.toggle('show')
    })
    document.getElementById('btn-submit').addEventListener('submit', function (e) {
        if(!isValid) {
            document.querySelector('.submit-success').classList.add('active')
        } else {
            document.querySelector('.submit-error').classList.add('active')
        }
    })
</script>
<script src="{{asset('js/main.js')}}"></script>
