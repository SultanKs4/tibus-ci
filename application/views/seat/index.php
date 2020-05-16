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
                            <form method="post" action="pembayaran" id="book-form">
                                <input type="hidden" name="harga" value="<?= 3000 ?>">
                                <input type="hidden" name="no_duduk" id="no_duduk" value="">
                                <input type="hidden" name="id_duduk" id="id_duduk" value="">
                                <h2 class="header">Booking Details
                                    <span class="number_plate badge badge-primary fs-12"></span></h2>
                                <h3> Selected Seats <span id="counter">0</span>:</h3>
                                <ul id="selected-seats">
                                </ul>
                                <p>Total: <b>Rp <span id="total">0</span></b></p>
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <!-- <div id="legend" class=""></div> -->
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</main>