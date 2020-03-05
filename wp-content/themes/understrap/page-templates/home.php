<?php
/**
 * Template Name: Home Page Template
 *
 * Template for displaying the home page.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
?>
<div class="ag-home-container">
    <div class="ag-hero">
        <?php echo do_shortcode('[smartslider3 slider=2]'); ?>
    </div>
    <div class="ag-row ag-intro-container">
        <h5>The purpose of the Omaha National Cemetery Support Committee is twofold:</h5>
        <div class="ag-2-col">
            <div class="ag-left-col">
            <p>1.) To support the attainment of national shrine status for the Omaha National Cemetery through beautification endeavors on cemetery grounds. National Shrine status is awarded to a national cemetery that achieves the highest level of performance in 21 categories of operation, maintenance and service to veterans and their families.</p>
            </div>
            <div class="ag-right-col">
            2.) To improve awareness of the mission of the Veterans Administration National Cemeteries by assisting in planning and conducting major ceremonies or special events at the cemetery, honoring those who served or are serving in the U.S. Armed Forces, or those interred in the cemetery.</p>
            </div>
        </div> 
    </div>
    <div class="ag-row ag-home-cta-container">
        <div class="ag-home-cta-item">
            <img src="/wp-content//uploads/2020/03/Volunteer-01.png"/>
            <h3>Volunteer</h3>
            <p>Learn how you can help volunteer with the ONCSC.<p>
            <a href="/volunteer">Learn More</a>
        </div>
        <div class="ag-home-cta-item">
            <img src="/wp-content/uploads/2020/03/Calendar-01.png"/>
            <h3>Calendar</h3>
            <p>View upcoming events and meetings with ONCSC.<p>
            <a href="/events/">Learn More</a>
        </div>
        <div class="ag-home-cta-item">
            <img src="/wp-content/uploads/2020/03/Links-01.png"/>
            <h3>Helpful Links</h3>
            <p>National Cemetery and Omaha National Cemetery related links. <p>
            <a href='/other-links/'>Learn More</a>
        </div>
    </div>
    <div class="ag-row ag-home-directions">
        <p>Omaha National Cemetery</p>
        <p>14250 Schram Road | Omaha, NE 68138</p>
        <p>From Interstate 80 - Exit 440 onto South 144th Street/AKA Hwy 50. Continue 2.1 miles to Schram</p>
        <p>Road and turn left/east. The current administrative trailer is the first trailer you come to on your left.</p>
        <strong>Note: Select "View Larger Map" for Google map</strong>
    </div>
    <div class="ag-row ag-home-googlemaps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3005.0862985868457!2d-96.13721368427852!3d41.132642019710936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8793f5ec06c37855%3A0xdd4ad6a2e824bf7e!2sOmaha%20National%20Cemetery!5e0!3m2!1sen!2sus!4v1581292151047!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="true"></iframe>
    </div>
</div>
<?php
get_footer(); ?>