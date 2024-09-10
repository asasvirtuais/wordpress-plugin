<?php namespace AsasVirtuaisWP;

class GallerySlider extends \Elementor\Widget_Base {

	public function get_name() {
		return 'Gallery Slider';
	}

	public function get_title() {
		return esc_html__( 'Gallery Slider', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-slides';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'gallery', 'events', 'slider' ];
	}

	protected function render() {
		?>

		<script type="text/javascript"
			src="https://asasvirtuais.dev/public/bundles/gallery-slider.js"
			style="width: 100%; height: calc(100dvh - 140px);">
		</script>

		<?php
	}
}
