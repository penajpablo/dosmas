/**
 * Remove activate button and replace with activation in progress button.
 *
 * @package Startkit
 */

/* global startkit_plugin_helper */
/* global console */

jQuery( document ).ready(
    function ( $ ) {
        $.pluginInstall = {
            'init': function () {
                this.handleInstall();
                this.handleActivate();
			},

            'handleInstall': function () {
                var self = this;
                $( 'body' ).on( 'click', '.startkit-install-plugin', function (e) {
                    e.preventDefault();
                    var button = $( this );
                    var slug = button.attr( 'data-slug' );
                    var url = button.attr( 'href' );
                    var redirect = $( button ).attr( 'data-redirect' );
                    button.text( wp.updates.l10n.installing );
                    button.addClass('updating-message');
                    wp.updates.installPlugin(
                        {
                            slug: slug,
                            success: function(){
                                button.text(startkit_plugin_helper.activating + '...');
                                self.activatePlugin(url, redirect);
							}
						}
					);
                });
            },

            'activatePlugin': function (url, redirect) {
                if (typeof url === 'undefined' || !url) {
                    return;
                }
                jQuery.ajax(
                    {
                        async: true,
                        type: 'GET',
                        url: url,
                        success: function () {
                            // Reload the page.
                            if (typeof(redirect) !== 'undefined' && redirect !== '') {
                                window.location.replace(redirect);
                            } else {
                                location.reload();
                            }
                        },
                        error: function (jqXHR, exception) {
                            var msg = '';
                            if (jqXHR.status === 0) {
                                msg = __('Not connect.\n Verify Network.','startkit');
                            } else if (jqXHR.status === 404) {
                                msg = __('Requested page not found. [404]','startkit');
                            } else if (jqXHR.status === 500) {
                                msg = __('Internal Server Error [500].','startkit');
                            } else if (exception === 'parsererror') {
                                msg = __('Requested JSON parse failed.','startkit');
                            } else if (exception === 'timeout') {
                                msg = __('Time out error.','startkit');
                            } else if (exception === 'abort') {
                                msg = __('Ajax request aborted.','startkit');
                            } else {
                                msg = 'Uncaught Error.\n' + jqXHR.responseText;
                            }
                            console.log(msg);
                        },
                    }
                );
            },

            'handleActivate': function () {
                var self = this;
                $( 'body' ).on( 'click', '.activate-now', function (e) {
                    e.preventDefault();
                    var button = $( this );
                    var url = button.attr( 'href' );
                    var redirect = button.attr( 'data-redirect' );
                    button.addClass('updating-message');
                    button.text(startkit_plugin_helper.activating + '...');
                    self.activatePlugin(url,redirect);
                });
            },
        };
        $.pluginInstall.init();
	}
);