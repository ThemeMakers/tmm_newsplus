<?php
$parse_uri = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
$wp_load = $parse_uri[0] . 'wp-load.php';
require_once($wp_load);
$settings = TmMS_Settings::get_settings();
//must be!!
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#edf9ff" style="padding:0; margin:0; background:#edf9ff">
	<tr>
		<td align="center" valign="top">
			<table width="614" border="0" cellspacing="0" cellpadding="5" bgcolor="#d6edf9">
				<tr>
					<td>
						<table width="614" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
							<tr>
								<td>
									<table width="590" border="0" cellspacing="17" cellpadding="0">
										<tr>
											<td>
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
													<tr>
														<td style="font-family: Arial; font-size:10px; line-height:12px; text-align:center; color:#888888;">
															<div class="content_area" id="edit_area_mail_header">
																<?php echo $settings['mail_header'] ?>
															</div>
														</td>
													</tr>
													<tr>
														<td bgcolor="#7bbcde" >
															<table width="100%" border="0" cellspacing="0" cellpadding="10">
																<tr>
																	<td style="color:#fff; font-size:11px; font-weight:bold; font-family:Arial; text-transform:uppercase; font-style:italic;" align="right">
																		<span class="content_area" id="edit_area_0"><?php echo date("F j, Y") ?></span>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													<tr>
														<td style="font-size:0; line-height:0;">
															<div class="content_area" id="edit_area_01">
																<a href="<?php echo site_url() ?>"><img src="<?php echo THEMEMAKERS_MAIL_SUBSCRIBER_LINK ?>templates/_default/images/logo.gif" border="0" alt="" /></a>
															</div>
														</td>
													</tr>

													<tr>
														<td>
															<table width="100%" border="0" cellspacing="0" cellpadding="0">
																<tr>
																	<td valign="top">
																		<table width="100%" border="0" cellspacing="0" cellpadding="0">

																			<tr>
																				<td style="font-family: Arial; font-size:14px; line-height:19px; text-align:left; color:#666;">
																					<div class="content_area" id="edit_area_1">
																						<br />
																						<div style="font-family: Georgia; font-size:26px; line-height:30px; color:#3399cc; font-weight:normal; text-align:left; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
																						<p>
																							<img src="<?php echo THEMEMAKERS_MAIL_SUBSCRIBER_LINK ?>templates/_default/images/image.jpg" align="left" hspace="10" vspace="5" alt="" />
																							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras bibendum magna id velit fringilla eu vulputate dui euismod. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
																						<p>Mauris suscipit mauris nec ipsum vehicula vel pulvinar arcu elementum. Duis fermentum scelerisque cursus. Mauris egestas ante sed mauris venenatis nec congue sem pulvinar. </p>
																						<a href="<?php echo site_url() ?>" style="color:#2f81ac; text-decoration:underline;"><strong>Read more</strong></a>
																						<br /><br />
																						<img src="<?php echo THEMEMAKERS_MAIL_SUBSCRIBER_LINK ?>templates/_default/images/hr-big.gif" height="11" width="580" alt="" />
																					</div>
																				</td>
																			</tr>

																			<tr>
																				<td style="font-family: Arial; font-size:14px; line-height:19px; text-align:left; color:#666;">
																					<div class="content_area" id="edit_area_2">
																						<br />
																						<div style="font-family: Georgia; font-size:26px; line-height:30px; color:#3399cc; font-weight:normal; text-align:left; ">Maecenas vulputate faucibusmagna tempus </div>
																						<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer dictum tortor eget orci commodo fermentum. </p>
																						<p>Mauris suscipit mauris nec ipsum vehicula vel pulvinar arcu elementum. Duis fermentum scelerisque cursus. Mauris egestas ante sed mauris venenatis nec congue sem pulvinar. </p>

																						<a href="<?php echo site_url() ?>" style="color:#2f81ac; text-decoration:underline;"><strong>Read more</strong></a>
																						<br /><br />
																						<img src="<?php echo THEMEMAKERS_MAIL_SUBSCRIBER_LINK ?>templates/_default/images/hr-big.gif" height="11" width="580" alt="" />
																					</div>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<div class="content_area" id="edit_area_3">
																						<br />
																						<div style="font-family: Georgia; font-size:26px; line-height:30px; color:#3399cc; font-weight:normal; text-align:left; ">More Articles</div>
																						<table width="100%" border="0" cellspacing="0" cellpadding="0">
																							<tr>
																								<td style="font-family: Arial; font-size:14px; line-height:19px; text-align:left; color:#666666;" valign="top">

																									<p>
																										<a href="<?php echo site_url() ?>" style="color:#582b00; text-decoration:underline;">Vestibulum ante ipsum primis iInteger</a>
																										<br /><a href="<?php echo site_url() ?>" style="color:#582b00; text-decoration:underline;">Mauris suscipit mauris nec ipsum</a>
																										<br /><a href="<?php echo site_url() ?>" style="color:#582b00; text-decoration:underline;">Ehicula vel pulvinar arcu elementum</a>
																										<br /><a href="<?php echo site_url() ?>" style="color:#582b00; text-decoration:underline;">Duis fermentum scelerisque cursus</a>
																									</p>

																								</td>
																								<td style="font-family: Arial; font-size:14px; line-height:19px; text-align:left; color:#666666;" valign="top">
																									<p>
																										<a href="<?php echo site_url() ?>" style="color:#582b00; text-decoration:underline;">Vestibulum ante ipsum primis iInteger</a>
																										<br /><a href="<?php echo site_url() ?>" style="color:#582b00; text-decoration:underline;">Mauris suscipit mauris nec ipsum</a>
																										<br /><a href="<?php echo site_url() ?>" style="color:#582b00; text-decoration:underline;">Ehicula vel pulvinar arcu elementum</a>
																										<br /><a href="<?php echo site_url() ?>" style="color:#582b00; text-decoration:underline;">Duis fermentum scelerisque cursus</a>
																									</p>
																								</td>
																							</tr>
																						</table>
																					</div>
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</table>
														</td>
													</tr>

												</table>
											</td>
										</tr>

									</table>
								</td>
							</tr>
							<tr>
								<td style="font-family: Arial; font-size:10px; line-height:12px; text-align:center; color:#888888;" valign="middle">
									<div class="content_area" id="edit_area_mail_footer">
										<?php echo $settings['mail_footer'] ?>
									</div>
								</td>
							</tr>
						</table>
					</td>
				</tr>

			</table>
		</td>
	</tr>

</table>
