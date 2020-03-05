<?php
/**
 * Template Name: Volunteer
 *

 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="ag-volunteer-container">
    <div class="ag-hero ag-hero-events">
        <div class="ag-dark-overlay">
            <h1>Volunteer</h1>
        </div>
    </div>
    <div class="ag-row ag-volunteer-intro">
        <span>Thanks to our volunteers, sponsors and donors!</span>
        <span>This project would not be possible without the generous assistance from our wonderful volunteers, sponsors and donors.</span>
        <span>On behalf of the Omaha National Cemetery Support Committee, we thank each and every one of you who contributed to the success of this committee. Your generosity is greatly appreciated</span>
    </div>
    <div class="ag-row ag-volunteer-button-container">
        <h3>If you’ve received your VA volunteer badge, click below to select volunteer dates & times.</h3>
        <button class="ag-volunteer-button">VIEW VOLUNTEER EVENTS</button>
    </div>
    <div class="ag-row ag-volunteer-outro">
        <h3>Steps to Become a Volunteer at the Omaha National Cemetery</h3>
            <p>Step 1: Contact Kari Bealer at phone number (402) 995-3284 or email kari.bealer@va.gov to setup an appointment to complete a volunteer application and fingerprinting.
This will initiate a background check. Appointments will be at the Veteran Affairs Medical Center (VAMC) on 4101 Woolworth Ave., Omaha, NE 68105.</p>
            <p>Step 2: When the background check is completed, you will be notified to return to the VAMC to get a badge. Please do not forget to bring the required 2 forms of ID with
you to finish the badge process.</p>
            <p>Step 3: After you are badged please contact Sharon at (402) 991-1836 or tsbissen@cox.net to setup a volunteer training time. Once that process is complete, go online to
https://www.trackitforward.com/site/omaha-national-cemetery-support-committee to select dates and times to volunteer.</p>
            <p><strong>**NOTE:</strong> Any Omaha National Cemetery (ONC) VA Volunteer who wishes to be eligible to drive a VA golf cart on the ONC grounds must read and sign, in person at the ONC office, a Volunteers
Requirements for Driving Golf Carts memo. The previous requirement to have a VA DOT physical has been rescinded.</p>
        <div class="ag-contact-form">
            <?php echo do_shortcode('[contact-form-7 id="73" title="Contact form 1"]'); ?>
        </div>
    </div>
</div>
<?php
get_footer(); ?>