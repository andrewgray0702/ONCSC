<?php
/**
 * View: Top Bar - Date Picker
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/day/top-bar/datepicker.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @version 5.0.0
 *
 * @var string $now                    The current date and time in the `Y-m-d H:i:s` format.
 * @var object $date_formats           Object containing the date formats.
 * @var bool   $show_datepicker_submit Boolean on whether to show the datepicker submit button.
 */
use Tribe__Date_Utils as Dates;

$default_date        = $now;
$selected_date_value = $this->get( [ 'bar', 'date' ], $default_date );
if ( empty( $selected_date_value ) ) {
	$selected_date_value = $default_date;
}

$selected_datetime = strtotime( $selected_date_value );
$selected_date_label = date_i18n( tribe_get_date_format( true ), $selected_datetime );

$datepicker_date = Dates::build_date_object( $selected_date_value )->format( $date_formats->compact );
?>
<?php if ( $show_datepicker_submit ) : ?>
	<form
		class="tribe-events-c-top-bar__datepicker-form"
		method="get"
		data-js="tribe-events-view-form"
	>
		<?php wp_nonce_field( 'wp_rest', 'tribe-events-views[_wpnonce]' ); ?>
		<input type="hidden" name="tribe-events-views[url]" value="<?php echo esc_url( $this->get( 'url' ) ); ?>" />
<?php endif; ?>

	<div class="tribe-events-c-top-bar__datepicker">
		<button
			class="tribe-common-h3 tribe-common-h--alt tribe-events-c-top-bar__datepicker-button"
			data-js="tribe-events-top-bar-datepicker-button"
			type="button"
		>
			<time
				datetime="<?php echo esc_attr( date( 'Y-m-d', $selected_datetime ) ); ?>"
				class="tribe-events-c-top-bar__datepicker-time"
			>
				<span class="tribe-events-c-top-bar__datepicker-mobile">
					<?php echo esc_html( $datepicker_date ); ?>
				</span>
				<span class="tribe-events-c-top-bar__datepicker-desktop tribe-common-a11y-hidden">
					<?php echo esc_html( $selected_date_label ); ?>
				</span>
			</time>
		</button>
		<label
			class="tribe-events-c-top-bar__datepicker-label tribe-common-a11y-visual-hide"
			for="tribe-events-top-bar-date"
		>
			<?php esc_html_e( 'Select date.', 'the-events-calendar' ); ?>
		</label>
		<input
			type="text"
			class="tribe-events-c-top-bar__datepicker-input tribe-common-a11y-visual-hide"
			data-js="tribe-events-top-bar-date"
			id="tribe-events-top-bar-date"
			name="tribe-events-views[tribe-bar-date]"
			value="<?php echo esc_attr( $datepicker_date ); ?>"
			tabindex="-1"
			autocomplete="off"
			readonly="readonly"
		/>
		<div class="tribe-events-c-top-bar__datepicker-container" data-js="tribe-events-top-bar-datepicker-container"></div>
	</div>

<?php if ( $show_datepicker_submit ) : ?>
		<?php $this->template( 'components/top-bar/datepicker/submit' ); ?>
	</form>
<?php endif; ?>
