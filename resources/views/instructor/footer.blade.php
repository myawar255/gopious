
					<!--begin::Content-->
					
					<!--end::Content-->

					
					<!--begin::Footer-->
					
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		
		
		<!--end::Scrolltop-->
		<!--begin::Sticky Toolbar-->
		
		<!--end::Sticky Toolbar-->
		<!--begin::Demo Panel-->

		<!--end::Demo Panel-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#F64E60", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="/assets/plugins/global/plugins.bundle.js"></script>
		<script src="/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="/assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<!--end::Page Vendors-->
		@switch($view)
		    

		    @case('learners')
		        <!--begin::Page Scripts(used by this page)-->
				<script src="/assets/js/instructor/learners.js"></script>
				<!--end::Page Scripts-->
		        @break
			@case('classes')
		        <!--begin::Page Scripts(used by this page)-->
				<script src="/assets/js/instructor/classes.js"></script>
				<!--end::Page Scripts-->
		        @break

		    @case('courses')
		        <!--begin::Page Scripts(used by this page)-->
				<script src="/assets/js/instructor/activities.js"></script>
				<!--end::Page Scripts-->
		        @break
		    @case('polls')
		        <!--begin::Page Scripts(used by this page)-->
				<script src="/assets/js/instructor/polls.js"></script>
				<!--end::Page Scripts-->
		        @break
		    @case('assignments')
		        <!--begin::Page Scripts(used by this page)-->
				<script src="/assets/js/instructor/assignments.js"></script>
				<!--end::Page Scripts-->
		        @break
		    @case('class-assignment-submission')
		        <!--begin::Page Scripts(used by this page)-->
				<script src="/assets/js/instructor/submitted_assignments.js"></script>
				<!--end::Page Scripts-->
		        @break
		    @case('class-quiz-submission')
		        <!--begin::Page Scripts(used by this page)-->
				<script src="/assets/js/instructor/submitted_quizzes.js"></script>
				<!--end::Page Scripts-->
		        @break
		    @case('quizzes')
		        <!--begin::Page Scripts(used by this page)-->
				<script src="/assets/js/instructor/quizzes.js"></script>
				<!--end::Page Scripts-->
		        @break
		    @case('add_class')
				<script src="/assets/js/pages/custom/login/add-class.js"></script>
				<script src="/assets/js/profile.js"></script>
			

		        @break
			
		    @case('instructors')
		        <!--begin::Page Scripts(used by this page)-->
				<script src="/assets/js/pages/instructor-instructors.js"></script>
				<!--end::Page Scripts-->
		        @break

		    @case('class-dashboard')
		        <!--begin::Page Scripts(used by this page)-->
		        <style type="text/css">
					  

					.time-slot{
					  border: 1px solid #0054f9;
					}
					#calendar-wrapper header{
					    text-align: center;;
					}
					.month-changer {
					  position: absolute; left: 0; 
					}
					.month-changer i{
					  cursor: pointer;
					}
					#calendar {
					    display: block;
					}
					#calendar #navigation-wrapper {
					  display: none;
					}
					</style>
					
		        <script src="/assets/js/CalendarPicker.js"></script>
				<script src="/assets/js/instructor/class-dashboard.js"></script>

		        @break
		    @case('dashboard')
		        <!--begin::Page Scripts(used by this page)-->
				<script src="/assets/js/instructor/dashboard.js"></script>

		        @break
		  
		  	@case('add_course')
		        <!--begin::Page Scripts(used by this page)-->
				<script src="/assets/js/pages/custom/wizard/wizard-1.js"></script>
				<!--end::Page Scripts-->
				<script src="/assets/js/pages/custom/education/student/profile.js"></script>
				<script src="/assets/js/add_course.js"></script>

		        @break
		    @case('add_course_without_class')
		        <!--begin::Page Scripts(used by this page)-->
				<script src="/assets/js/pages/custom/wizard/wizard-1.js"></script>
				<!--end::Page Scripts-->
				<script src="/assets/js/pages/custom/education/student/profile.js"></script>
				<script src="/assets/js/add_course.js"></script>

		        @break

		    @case('add_poll')
		        
				<script src="/assets/js/add_poll.js"></script>

		        @break
		    @case('add_poll_without_class')
		        
				<script src="/assets/js/add_poll.js"></script>

		        @break

		    @case('add_assignment')
		        
			
				<script type="text/javascript">
					var quill = null;
					var appendAssignments = ()=>{
						
						document.querySelector("input[name=ass_content]").value = quill.root.innerHTML;
						return true;
					}
					 
					

				jQuery(document).ready(function() {
				   quill = new Quill('#kt_quil_1', {
				            modules: {
				                toolbar: [
				                    [{
				                        header: [1, 2, false]
				                    }],
				                    ['bold', 'italic', 'underline'],
				                    ['image', 'code-block']
				                ]
				            },
				            placeholder: 'Type your text here...',
				            theme: 'snow' // or 'bubble'
				        });
				});
				</script>

		        @break
			
			@case('add_assignment_without_class')
		        
			
				<script type="text/javascript">
					var quill = null;
					var appendAssignments = ()=>{
						
						document.querySelector("input[name=ass_content]").value = quill.root.innerHTML;
						return true;
					}
					 
					

				jQuery(document).ready(function() {
				   quill = new Quill('#kt_quil_1', {
				            modules: {
				                toolbar: [
				                    [{
				                        header: [1, 2, false]
				                    }],
				                    ['bold', 'italic', 'underline'],
				                    ['image', 'code-block']
				                ]
				            },
				            placeholder: 'Type your text here...',
				            theme: 'snow' // or 'bubble'
				        });
				});
				</script>

		        @break
			
			
			@case('build_course')
		        <!--begin::Page Scripts(used by this page)-->
				<!--begin::Page Vendors(used by this page)-->
				<script src="/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js"></script>
				<!--end::Page Vendors-->
				<!--begin::Page Scripts(used by this page)-->
				
				<!--end::Page Scripts-->
				<script src="/assets/js/build_course.js"></script>

		        @break
		    @case('build_quiz')
		        <!--begin::Page Scripts(used by this page)-->
				<!--begin::Page Vendors(used by this page)-->
				<script src="/assets/plugins/custom/draggable/draggable.bundle.js"></script>
				<!--end::Page Vendors-->
				<!--begin::Page Scripts(used by this page)-->
				
				<!--end::Page Scripts-->
				<script src="/assets/js/build_quiz.js"></script>

		        @break
		    @case('profile')
		    	<script src="/assets/js/instructor/profile.js"></script>


		        @break
		
		    @default
		        <!--begin::Page Scripts(used by this page)-->
				<script src="/assets/js/pages/widgets.js"></script>
				<!--end::Page Scripts-->
		@endswitch
		
		


	</body>
	<!--end::Body-->
</html>