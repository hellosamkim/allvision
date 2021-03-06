<?php
/**
 * The Theme Pagination first page item class.
 *
 * @uses Theme_Pagination_Item_Direction_Backward_Page
 */
class Theme_Pagination_Item_First_Page extends Theme_Pagination_Item_Direction_Backward_Page {

	/**
	 * The HTML of the direction item.
	 *
	 * @return string $html The direction item HTML.
	 */
	public function get_direction_html() {
		$pagination = $this->get_collection()->get_pagination();
		return $pagination->get_first_html();
	}

	/**
	 * The number of the page to link to.
	 *
	 * @return int $page The number of the page to link to.
	 */
	public function get_direction_page_number() {
		return 0;
	}

}