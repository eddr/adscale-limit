Adscale official WooCommerce plugin creates an ajax call on every page load, to get cart data. The AJA call is run every time, no matter if the cart is empty or hasn't changed at all and thus, many multiple unneccesarry AJAX calls are run and server resources are used.

This plugin checks if the woocommerce_cart_hash changed and if not, prevents the XHR from running.

At this point, the plugin has no options, nor does it return the previous cart contents for the XHR, only blocks the new XHR calls.

Please check : https://adscale.com/integrations/woocommerce/ 
