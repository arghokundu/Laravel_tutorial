// ==========================================
    // PAGE LOADING
    // ==========================================

    window.addEventListener('load', function() {
        $('#loadingScreen').fadeOut(400);
    });


    // ==========================================
    // LINK CLICK
    // ==========================================

    $(document).on('click', 'a', function() {

        let href = $(this).attr('href');

        // Ignore empty links
        if (!href || href === '#' || href === 'javascript:void(0);') {
            return;
        }

        // Ignore new tab
        if ($(this).attr('target') === '_blank') {
            return;
        }

        // Show loader
        $('#loadingScreen').show();

    });


    // ==========================================
    // FORM SUBMIT
    // ==========================================

    $(document).on('submit', 'form', function() {

        $('#loadingScreen').show();

    });


    // ==========================================
    // BUTTON CLICK
    // ==========================================

    $(document).on('click', 'button', function() {

        // Don't show twice for submit buttons
        if ($(this).attr('type') !== 'submit') {

            $('#loadingScreen').show();

        }

    });