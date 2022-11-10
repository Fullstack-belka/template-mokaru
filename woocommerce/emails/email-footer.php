<?php
/**
 * Email Footer
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-footer.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;
?>
															</div>

															<div>
																<table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
																	<tr>																	
																		<td class="padline">
																			<div align="center" class="alignment">
																				<table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
																				<tbody><tr>
																					<td class="divider_inner" style="font-size: 1px; line-height: 1px; border-top: 1px solid #BBBBBB;"><span> </span></td>
																					</tr>
																					</tbody>
																				</table>
																			</div>
																		</td>
																	</tr>
																</table>
																
															</div>

															<div>
																<!-- Footer -->
																<table border="0" cellpadding="10" cellspacing="0" width="600" id="template_footer">
																	<tr>
																		<td valign="top">
																			<table border="0" cellpadding="10" cellspacing="0" width="100%">
																				<tr>
																					<td colspan="2" valign="middle" id="credit">
																						<?php echo wp_kses_post( wpautop( wptexturize( apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) ) ) ) ); ?>
																					</td>
																				</tr>
																			</table>
																		</td>
																	</tr>
																</table>
																<!-- End Footer -->
															</div>
															
														</td>
													
													</tr>
												
												</table>

												
												<!-- End Content -->
											</td>
											
										</tr>
									</table>
									<!-- End Body -->
								</td>
							</tr>
						</table>
					</td>
				</tr>
			
			</table>
		</div>
	</body>
</html>
