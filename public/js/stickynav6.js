$(window).on('scroll',function() {
    var height = $(window).scrollTop();

    if(height  > 160) {
        $('#content').removeClass('hidden');
        $('#content').addClass('block');
    }
    else{
        $('#content').removeClass('block');
        $('#content').addClass('hidden');
    }
    // if(height)
});

// services dropdown
$('#more-services').hover(
    function() {
        $('#menu-two').removeClass('hidden').addClass('block'); // Show on hover
    }
);

$('#menu-two').on('mouseleave', function() {
    $('#menu-two').removeClass('block').addClass('hidden'); // Hide when mouse leaves menu-two
});

$('#dropdown').on('mouseleave', function() {
    $('#menu-two').removeClass('block').addClass('hidden'); // Hide when mouse leaves dropdown
});

// types dropdown
$('#more-types').hover(
    function() {
        $('#menu-subjects-two').removeClass('hidden').addClass('block'); // Show on hover
    }
);

$('#menu-subjects-two').on('mouseleave', function() {
    $('#menu-subjects-two').removeClass('block').addClass('hidden'); // Hide when mouse leaves menu-two
});

$('#dropdown-subjects').on('mouseleave', function() {
    $('#menu-subjects-two').removeClass('block').addClass('hidden'); // Hide when mouse leaves dropdown
});


// for sticky navbar services
$('#more-services-sticky').hover(
    function() {
        $('#menu-two-sticky').removeClass('hidden').addClass('block'); // Show on hover
    }
);

$('#more-types-sticky').on('mouseleave', function() {
    $('#menu-subjects-two-sticky').removeClass('block').addClass('hidden'); // Hide when mouse leaves menu-two
});

$('#dropdown-two').on('mouseleave', function() {
    $('#menu-two-sticky').removeClass('block').addClass('hidden'); // Hide when mouse leaves dropdown
});

// for sticky navbar subjects
$('#more-types-sticky').hover(
    function() {
        $('#menu-subjects-two-sticky').removeClass('hidden').addClass('block'); // Show on hover
    }
);

$('#menu-subjects-two-sticky').on('mouseleave', function() {
    $('#menu-subjects-two-sticky').removeClass('block').addClass('hidden'); // Hide when mouse leaves menu-two
});

$('#dropdown-subjects').on('mouseleave', function() {
    $('#menu-subjects-two-sticky').removeClass('block').addClass('hidden'); // Hide when mouse leaves dropdown
});


// more cities
$('#more-cities').hover(
    function() {
        $('#menu-more-cities').removeClass('hidden').addClass('block'); // Show on hover
    }
);

$('#menu-more-cities').on('mouseleave', function() {
    $('#menu-more-cities').removeClass('block').addClass('hidden'); // Hide when mouse leaves menu-two
});

$('#dropdown-cities').on('mouseleave', function() {
    $('#menu-more-cities').removeClass('block').addClass('hidden'); // Hide when mouse leaves dropdown
});


// more cities sticky
$('#more-cities-sticky').hover(
    function() {
        $('#menu-more-cities-sticky').removeClass('hidden').addClass('block'); // Show on hover
    }
);

$('#menu-more-cities-sticky').on('mouseleave', function() {
    $('#menu-more-cities-sticky').removeClass('block').addClass('hidden'); // Hide when mouse leaves menu-two
});

$('#dropdown-cities-sticky').on('mouseleave', function() {
    $('#menu-more-cities-sticky').removeClass('block').addClass('hidden'); // Hide when mouse leaves dropdown
});
