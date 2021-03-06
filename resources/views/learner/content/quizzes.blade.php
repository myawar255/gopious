					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Entry-->
						<div class="container">
							<!--begin::Education-->
							<div class="card card-custom gutter-b">
													<!--begin::Header-->
													<div class="card-header border-0 pt-5">
														<h3 class="card-title align-items-start flex-column">
															<span class="card-label font-weight-bolder text-dark">View Quizzes</span>
															<span class="text-muted mt-3 font-weight-bold font-size-sm">{{count($quizzes)}} Quiz(zes)
															</span>
														</h3>

													</div>
													<!--end::Header-->
													<!--begin::Body-->
													<div class="card-body pt-2 pb-0 mt-n3">
														<div class="tab-content mt-5" id="myTabTables10">
															<!--begin::Tap pane-->
															<div class="tab-pane fade  show active" id="kt_tab_pane_10_1" role="tabpanel" aria-labelledby="kt_tab_pane_10_1">
																<!--begin::Table-->
																<div class="table-responsive">
																	<table class="table table-borderless table-vertical-center">
																		<!--begin::Thead-->
																		<thead >
																			<tr >

																				{{-- <th class="p-0 w-50px text-muted">
																					<div class="symbol symbol-25 symbol-light-info mr-2">
																						<span class="symbol-label">
																							<span class="svg-icon text svg-icon-2x svg-icon-info">
																								<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Color-profile.svg-->

																								<!--end::Svg Icon-->
																							</span>
																						</span>
																					</div>
																				</th> --}}
																				<th class="p-0 text-muted">Quiz Title</th>
																				<th class="p-0 text-muted">Class Name</th>
																				<th class="p-0 text-muted">Duration</th>
																				<th class="p-0 text-muted">Start Date</th>
																				<th class="p-0 text-muted">End Date</th>
																				<th class="p-0 text-muted">Status</th>
																				<th class="p-0 text-muted">ACTIONS</th>



																			</tr>
																		</thead>
																		<!--end::Thead-->
																		<!--begin::Tbody-->
																		<tbody>
																			@foreach ($quizzes as $quiz)
																				<tr style="border-bottom: silver solid 1px; ">
																					{{-- <td class="m-0 p-0 text-muted">
																						<div class="symbol symbol-25 symbol-light-info mr-2">
																							<span class="symbol-label">
																								<span class="svg-icon text svg-icon-2x svg-icon-info">
																									<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Color-profile.svg-->

																									<!--end::Svg Icon-->
																								</span>
																							</span>
																						</div>
																					</td> --}}
																					<td class="pl-0">
																						<a  class=" text-dark text-hover-primary mb-1 font-size-lg">{{$quiz->quiz_title}} Quiz
																						</a>

																					</td>
                                                                                    <td class="pl-0">
																						<span class="font-weight ">
																							{{$quiz->cat_title}}
																						</span>
																					</td>
                                                                                    <td class="text-left text-dark">
																						<span class="font-size-lg">{{$quiz->duration}} minutes</span>


																					</td>

																					<td class="text-left text-dark">
																						<div class="font-size-lg">{{$quiz->start_date}}</div>

																					</td>
																					<td class="text-left text-dark">
																						<div class="font-size-lg">{{$quiz->end_date}}</div>


																					</td>
																					@php
																						$status=$quiz->getSubmissionStatus(auth('learner')->id(),$quiz->quiz_id);
																						$result=$quiz->getResult(auth('learner')->id(),$quiz->quiz_id);
																						// dd($result);
																					@endphp
                                                                                    <td class="pl-0">
																						<span class="font-weight-bolder label label-xl label-light-{{ $status=="Submitted" ? 'success':'danger' }} label-inline px-3 py-5 min-w-45px mb-2">
																							{{ $status }}
																						</span>
																					</td>



																					<td class=" pr-0">
																						<a href="{{ route('learner_class_quiz', [$quiz->course->category->cat_id, $quiz->quiz_id]) }}" class="btn btn-primary font-weight-bolder font-size-sm py-3 px-10" >Start</a>
																						<a style="cursor: pointer;"><i class="flaticon-eye" data-toggle="modal" data-target="#leanerModal{{ $quiz->quiz_id }}"></i></a>
																					</td>
																				</tr>

                                                                                <div class="modal fade" id="leanerModal{{ $quiz->quiz_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                    <div class="modal-dialog">
                                                                                      <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                          <h5 class="modal-title" id="exampleModalLabel"> {{$quiz->quiz_title}} Quiz</h5>
                                                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                          </button>
                                                                                        </div>
                                                                                        <div class="modal-body">

                                                                                            <div class="card-header border-0 pt-5">
                                                                                                <h4 class="card-title align-items-start flex-column">
                                                                                                <span class="card-label font-weight-bolder text-dark">Status</span>
                                                                                                <br>
                                                                                                {{-- @dd($requirement) --}}
                                                                                                <span
                                                                                                class="text-muted mt-3 font-weight-bold font-size-sm">{{$status}}
                                                                                                </span>
                                                                                                </h4>

                                                                                                </div>

                                                                                            <div class="card-header border-0 pt-5">
                                                                                                <h4 class="card-title align-items-start flex-column">
                                                                                                <span class="card-label font-weight-bolder text-dark">Score</span>
                                                                                                <br>
                                                                                                {{-- @dd($requirement) --}}
                                                                                                <span
                                                                                                class="text-muted mt-3 font-weight-bold font-size-sm">
																								<label style="border-radius:0;" class="w-100 label label-lg label-light-success">{{ $result['correct_option'] }}% ({{ $result['unattented_option'] }} unattented) </label>
                                                                                                </span>
                                                                                                </h4>

                                                                                                </div>

                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                          <button type="button" class="btn btn-primary">Save changes</button>
                                                                                        </div>
                                                                                      </div>
                                                                                    </div>
                                                                                </div>

																			@endforeach


																		</tbody>
																		<!--end::Tbody-->
																	</table>
																</div>
																<!--end::Table-->

															</div>
															<!--end::Tap pane-->
															<!--begin::Tap pane-->

															<!--end::Tap pane-->
														</div>
													</div>
													<!--end::Body-->
												</div>
							<!--end::Education-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->

