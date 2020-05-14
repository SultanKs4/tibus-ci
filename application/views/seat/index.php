<main class="col-md-12">
    <div class="col-md-11 col-lg-9 col-xl-8 mx-auto window">
        <fieldset class="animated fadeIn">
            <div id="seats">
                <div class="row no-gutters">
                    <div class="col-lg-8 col-xl-6 col-sm-8 col-md-7">
                        <div id="seat-map">
                            <div class="front-indicator">
                                <img src="<?= base_url(); ?>assets2/images/driver.png" alt="Driver" height="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-6 col-sm-4 col-md-5">
                        <div class="booking-details">
                            <h2 class="header">Booking Details
                                <span class="number_plate badge badge-primary fs-12"></span></h2>
                            <h3> Selected Seats <span id="counter">0</span>:</h3>
                            <ul id="selected-seats">
                            </ul>
                            <p>Total: <b><span id="total">0</span> Kes</b></p>
                            <br>
                        </div>
                        <!-- <div id="legend" class=""></div> -->
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</main>