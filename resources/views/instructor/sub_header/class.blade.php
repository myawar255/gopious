
									<!--begin::Tab Navs-->
									<!--begin::Tab Content-->
									<div class="tab-content">
										<!--begin::Tab Pane-->
										<div class="tab-pane py-5 p-lg-0 show active" id="kt_header_tab_1">
											<!--begin::Menu-->
											<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
												<!--begin::Nav-->
												<ul class="menu-nav">
													<li class="menu-item menu-item-{{$class??'rel'}}" aria-haspopup="true">
														<a href="{{ route('instructor_classes') }}" class="menu-link">
															<span class="menu-text">Classes</span>
														</a>

													</li>
                                                    	<li class="menu-item" aria-haspopup="true">
													<a href="{{ route('instructor_class_create') }}"><button type="reset" class="btn btn-success mr-2">
													<i class="fas fa-plus"></i>	Create A Class
													</button></a>

													</li>

													@isset ($class_title)
													    <li class="menu-item menu-item-active" aria-haspopup="true">
															<a href="" class="menu-link">
																<span class="menu-text">{{$class_title}}</span>
															</a>
														</li>
													@endisset



												</ul>
												<!--end::Nav-->
											</div>
											<!--end::Menu-->
										</div>
										<!--begin::Tab Pane-->
										<!--begin::Tab Pane-->
										<!--begin::Tab Pane-->
									</div>
									<!--end::Tab Content-->
								</div>
								<!--end::Header Menu Wrapper-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Bottom-->
						<!--end::Bottom-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->

					<!--end::Content-->
