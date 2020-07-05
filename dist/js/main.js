$(function () {
    var isGoogleMapLoaded = false;

    $(document).ready(function () {
        initAll();
    });

    $(window).resize(function () {
        onResize();
    });

    function onResize() {}

    function initAll() {
        verifyGoogleMapLoad(function () {
            initHomeMap();
        });

        initInputCounterControls();
        initDatepickerControls();
        initRateTripControls();
        initSearchFormControls();
        initSimpleForms();
        initSwapActions();
        registerToMailchimpHandler();
    }

    function initInputCounterControls() {
        var counterController = $('.yg-counter-controller');

        if (counterController.length) {
            counterController.each(function () {

                var ctrl = $(this);

                var decreaseBtn = ctrl.find('.decrease');
                var increaseBtn = ctrl.find('.increase');
                var input = ctrl.find('input');

                decreaseBtn.click(function (e) {
                    e.preventDefault();
                    var value = parseInt(input.val());
                    if (value > 0) {
                        input.val(value - 1);
                    }
                });

                increaseBtn.click(function (e) {
                    e.preventDefault();
                    var value = parseInt(input.val());
                    input.val(value + 1);
                });
            });
        }
    }

    function initDatepickerControls() {
        var input = $('.yg-datepicker-input');

        var format = 'dd/mm/yyyy';

        if (input.length) {
            input.each(function () {
                $(this).datepicker({
                    format: format,
                    language: 'es',
                    todayHighlight: true,
                    orientation: 'bottom',
                    autoclose: true,
                });
            });
        }
    }

    function initHomeMap() {
        var placeMarker = function (event, marker, map) {
            if (marker) {
                marker.setPosition(event.latLng);
            } else {
                marker = new google.maps.Marker({
                    position: event.latLng,
                    map: map,
                    draggable: true,
                });
            }
            marker.setMap(map);
            map.panTo(event.latLng);
        };

        var maps = $('.yg-map');

        if (maps.length) {
            maps.each(function () {
                var mapWrapper = $(this);
                var marker;

                var mapId = mapWrapper.data('map-id');
                var mapElem = document.getElementById(mapId);

                var dataLat = mapWrapper.data('lat');
                var dataLng = mapWrapper.data('lng');

                var position = {
                    lat: dataLat || 20.65988743765361,
                    lng: dataLng || -103.34962499999999,
                };

                var map = new google.maps.Map(mapElem, {
                    center: position,
                    zoom: 12,
                    disableDefaultUI: false,
                    fullscreenControl: true,
                });

                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    draggable: true,
                });

                if (!dataLat && !dataLng) {
                    marker.setMap(null);
                }

                // google.maps.event.addListener(map, 'click', function (e) {
                //     placeMarker(e, marker, map);
                // });
            });
        }
    }

    function initRateTripControls() {
        var inputGroups = $('.yg-rate-trip-input-group');

        if (inputGroups.length) {
            inputGroups.each(function () {
                var inputGroup = $(this);

                var stars = inputGroup.find('.yg-rate-icon-star');

                stars.click(function () {
                    var star = $(this);
                    var rate = $(this).index() + 1;

                    if (star.index() == 0) {
                        if (star.hasClass('filled') && !star.next().hasClass('filled')) {
                            rate -= 1;
                        }
                    }

                    fillStars(stars, rate);
                    fillInput(inputGroup, rate);
                });

                // fill previous
                var previousRate = parseInt(inputGroup.find('.yg-rate-trip-input').val());
                fillStars(stars, previousRate);
            });
        }

        function fillStars(stars, rate) {
            stars.each(function () {
                var star = $(this);
                var starValue = star.index() + 1;

                if (starValue <= rate) {
                    star.addClass('filled');
                } else {
                    star.removeClass('filled');
                }

            });
        }

        function fillInput(inputGroup, rate) {
            var input = inputGroup.find('.yg-rate-trip-input');
            input.val(rate);
        }
    }

    function initSearchFormControls() {
        var searchForms = $('.yg-search-form-controls');

        if (searchForms.length) {
            searchForms.each(function () {
                var searchForm = $(this);

                // walk by radio btn
                var walkByRadio = searchForm.find('.yg-sf-walk-by');
                var walkByControl = false;
                walkByRadio.click(function () {
                    var newStatus = !walkByControl;
                    $(this).prop('checked', newStatus);
                    walkByControl = newStatus;
                });

                // location selection
                var ygLocationInsideInput = searchForm.find('.yg-sf-location-inside');
                var ygLocationOutsideInput = searchForm.find('.yg-sf-location-outside');

                // journey type selection
                var ygJourneyByTimeInput = searchForm.find('.yg-sf-journey-by-time');
                var ygJourneyByTravelInput = searchForm.find('.yg-sf-journey-by-travel');

                // transport type selection
                var ygTransportRoundInput = searchForm.find('.yg-sf-transport-round');
                var ygTransportOneWayInput = searchForm.find('.yg-sf-transport-one-way');


                // location selection events
                ygLocationInsideInput.change(function () {
                    if ($(this).is(':checked')) {
                        showInsideSelectionCheckboxes(searchForm);
                        hideOutsideSelectionCheckboxes(searchForm);
                    } else {
                        showOutsideSelectionCheckboxes(searchForm);
                        hideInsideSelectionCheckboxes(searchForm);
                    }

                    // default option when form is visible
                    if (isFormVisible(searchForm)) {
                        ygJourneyByTimeInput.trigger('click');
                    }
                });

                ygLocationOutsideInput.change(function () {
                    if ($(this).is(':checked')) {
                        hideInsideSelectionCheckboxes(searchForm);
                        showOutsideSelectionCheckboxes(searchForm);
                    } else {
                        showInsideSelectionCheckboxes(searchForm);
                        hideOutsideSelectionCheckboxes(searchForm);
                    }

                    // default option when form is visible
                    if (isFormVisible(searchForm)) {
                        ygTransportRoundInput.trigger('click');
                    }
                });


                // journey by time selection events
                ygJourneyByTimeInput.change(function () {
                    if ($(this).is(':checked')) {
                        uncheckCheckboxes(searchForm, ['journey-by-travel', 'transport-round', 'transport-one-way']);
                        disableInputs(searchForm, ['to', 'return-date', 'return-time']);
                        showSearchFormInputs(searchForm);
                    }
                });

                ygJourneyByTravelInput.change(function () {
                    if ($(this).is(':checked')) {
                        uncheckCheckboxes(searchForm, ['journey-by-time', 'transport-round', 'transport-one-way']);
                        disableInputs(searchForm, ['to', 'duration']);
                        showSearchFormInputs(searchForm);
                    }
                });

                // transport type selection events
                ygTransportRoundInput.change(function () {
                    if ($(this).is(':checked')) {
                        uncheckCheckboxes(searchForm, ['journey-by-time', 'journey-by-travel', 'transport-one-way']);
                        disableInputs(searchForm, ['duration']);
                        showSearchFormInputs(searchForm);
                    }
                });

                ygTransportOneWayInput.change(function () {
                    if ($(this).is(':checked')) {
                        uncheckCheckboxes(searchForm, ['journey-by-time', 'journey-by-travel', 'transport-round']);
                        disableInputs(searchForm, ['to', 'duration']);
                        showSearchFormInputs(searchForm);
                    }
                });

                // passengers popup controller
                var passengersGroup = searchForm.find('.yg-passengers-input-group');
                var passengersInput = passengersGroup.find('input');
                var passengersMask = passengersGroup.find('.yg-passengers-input-mask');
                passengersInput.focus(function () {
                    passengersShowHandler(searchForm);
                });
                passengersInput.blur(function () {
                    console.log(1);
                    passengersHideHandler(searchForm);
                });
                passengersMask.mouseenter(function () {
                    passengersShowHandler(searchForm);
                });
                passengersMask.click(function () {
                    passengersShowHandler(searchForm);
                });
                passengersMask.mouseleave(function () {
                    passengersHideHandler(searchForm);
                });
            });
        }

        function showInsideSelectionCheckboxes(searchForm) {
            searchForm.find('.yg-sf-location-inside-selection').show();
        }

        function showOutsideSelectionCheckboxes(searchForm) {
            searchForm.find('.yg-sf-location-outside-selection').show();
        }

        function hideInsideSelectionCheckboxes(searchForm) {
            searchForm.find('.yg-sf-location-inside-selection').hide();
        }

        function hideOutsideSelectionCheckboxes(searchForm) {
            searchForm.find('.yg-sf-location-outside-selection').hide();
        }

        function showSearchFormInputs(searchForm) {
            searchForm.find('.yg-sf-inputs-wrapper').fadeIn();
        }

        function disableInputs(searchForm, disabledInputSubclasses) {
            enableInputs(searchForm);

            for (var i = 0; i < disabledInputSubclasses.length; i++) {
                var disabledClass = disabledInputSubclasses[i];

                var inputWrapper = searchForm.find(`.yg-sf-input-wrapper.${disabledClass}`);

                if (inputWrapper.length) {
                    inputWrapper.hide();
                }
            }
        }

        function enableInputs(searchForm) {
            searchForm.find(`.yg-sf-input-wrapper`).each(function () {
                var inputWrapper = $(this);
                inputWrapper.show();
            });
        }

        function uncheckCheckboxes(searchForm, checkboxList) {
            for (var i = 0; i < checkboxList.length; i++) {
                var checkboxClassPartial = checkboxList[i];

                var checkbox = searchForm.find(`.yg-sf-${checkboxClassPartial}`);

                if (checkbox) {
                    checkbox.prop('checked', false);
                }
            }
        }

        function isFormVisible(searchForm) {
            var controlCheckboxes = ['journey-by-time', 'journey-by-travel', 'transport-round', 'transport-one-way'];

            for (var i = 0; i < controlCheckboxes.length; i++) {
                var checkboxClassPartial = controlCheckboxes[i];

                var checkbox = searchForm.find(`.yg-sf-${checkboxClassPartial}`);

                if (checkbox && checkbox.prop('checked')) {
                    return true;
                }
            }

            return false;
        }

        var passengersTimeout = null;

        function passengersShowHandler(searchForm) {
            clearTimeout(passengersTimeout);
            showPassengersDisplay(searchForm);
        }

        function passengersHideHandler(searchForm) {
            passengersTimeout = setTimeout(function () {
                hidePassengersDisplay(searchForm);
            }, 250);
        }

        function showPassengersDisplay(searchForm) {
            searchForm.find('.yg-passengers-input-mask').fadeIn();
        }

        function hidePassengersDisplay(searchForm) {
            searchForm.find('.yg-passengers-input-mask').fadeOut();
        }
    }

    function initSimpleForms() {
        var forms = $('.yg-simple-form');

        if (forms.length) {
            forms.each(function () {
                var form = $(this);

                var controls = form.find('.yg-simple-form-control');
                if (controls.length) {
                    controls.each(function () {
                        var control = $(this);

                        var value = control.find('.yg-simple-form-input-value');
                        var input = control.find('.yg-simple-form-input-box');

                        var editBtn = control.find('.yg-simple-form-edit-btn');
                        var cancelBtn = control.find('.yg-simple-form-cancel-btn');
                        var saveBtn = control.find('.yg-simple-form-save-btn');

                        editBtn.click(function (e) {
                            e.preventDefault();
                            value.hide();
                            input.fadeIn();
                        });

                        cancelBtn.click(function (e) {
                            e.preventDefault();
                            input.hide();
                            value.fadeIn();
                        });

                        saveBtn.click(function (e) {
                            e.preventDefault();
                            input.hide();
                            value.fadeIn();
                        });

                    });
                }
            });
        }
    }

    function initSwapActions() {
        var swaps = $(".yg-swap-action");
        if (swaps.length) {
            swaps.each(function () {
                var swap = $(this);
                var trigger = swap.find('.yg-swap-trigger');
                var content = swap.find('.yg-swap-content');

                trigger.click(function () {
                    trigger.hide();
                    content.fadeIn();
                });
            });
        }
    }

    function registerToMailchimpHandler() {
        var form = $('#newsletterForm');
        var requestUrl = 'requests/mailchimpProcess.php';

        if (form.length) {
            form.submit(function (e) {
                e.preventDefault();

                var requestData = {
                    email: form.find('#newsletterEmail').val()
                };

                $.post(requestUrl, requestData, function (res) {
                    console.log(res);
                    if (res.success) {
                        form.find('#newsletterSuccess').fadeIn();
                        form[0].reset();
                    }
                }, 'json');

                return false;
            });
        }
    }

    function verifyGoogleMapLoad(cb) {
        var googleCheckInterval = setInterval(function () {
            if (typeof google === 'object' && typeof google.maps === 'object') {
                clearInterval(googleCheckInterval);
                isGoogleMapLoaded = true;

                if (typeof cb === 'function') {
                    cb();
                }
            }
        }, 250);
    }
});