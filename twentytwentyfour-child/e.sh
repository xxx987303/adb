#! /bin/bash

cat nhs_display_product_form.php | sed \
				       -e 's/$modal_id/$args[modal_id]/g' \
				       -e 's/$modal_url/$args[modal_url]/g' \
				       -e 's/$modal_button/$args[modal_button]/g' \
				       -e 's/$modal_heading_tag/$args[modal_heading_tag]/g' \
				       -e 's/$modal_heading/$args[modal_heading]/g' \
				       -e 's/$modal_close_character/$args[modal_close_character]/g' \
				       -e 's/$modal_close_outside/$args[modal_close_outside]/g'

