<td colspan=3 ng-show="person.isshowdetails">
  	<div class="col-md-4 col-sm-4 col-xs-12 profile_details" ng-repeat="p in personDetails">
		<div class="well profile_view">
		  	<div class="col-sm-12">
				<h4 class="brief"><i ng-bind="\'sample\'"></i></h4>
				<div class="left col-xs-12">
				  	<h2 ng-bind="p.contactno"></h2>
		  			<ul class="list-unstyled">
						<li><i class="fa fa-building"></i> Address: <small ng-bind="p.address"></small></li>
						<li><i class="fa fa-user"></i> Representative: <small ng-bind="p.representative + '('+ p.respresentative_relationship+')'"></small></li>
						<li><i class="fa fa-phone"></i> Contact in case of emergency: <p><small ng-bind="p.emergency_person + '('+ p.respresentative_relationship+')' + '('+ p.emergency_person_contactno+')'"></small></p></li>
				  	</ul>
				</div>
				<div class="right col-xs-5 text-center">
					<img src="/assets/images/img.jpg" alt="" class="img-circle img-responsive">
				</div>
		  	</div>
		  <div class="col-xs-12 bottom text-center">
			<div class="col-xs-12 col-sm-6 emphasis">
			  <p class="ratings">
				<a>4.0</a>
				<a href="#"><span class="fa fa-star"></span></a>
				<a href="#"><span class="fa fa-star"></span></a>
				<a href="#"><span class="fa fa-star"></span></a>
				<a href="#"><span class="fa fa-star"></span></a>
				<a href="#"><span class="fa fa-star-o"></span></a>
			  </p>
			</div>
			<div class="col-xs-12 col-sm-6 emphasis">
			  <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
				</i> <i class="fa fa-comments-o"></i> </button>
			  <button type="button" class="btn btn-primary btn-xs">
				<i class="fa fa-user"> </i> View Profile
			  </button>
			</div>
		  </div>
		</div>
  	</div>
  	<div class="col-md-8">
		<div class="panel panel-info">
		  <div class="panel-heading">
			<h5 class="panel-title">Class Schedule<small> This is from Enrollment form</small></h5>
			<div class="clearfix"></div>
		  </div>
		  <div class="panel-content">
			<table class="table table-striped">
			  	<thead>
					<tr>
					  	<th>#</th>
					  	<th>Schedule code</th>
					  	<th>Subject</th>
					  	<th>Time</th>
					  	<th>Classroom</th>
					  	<th>Teacher</th>
					</tr>
			  	</thead>
			  <tbody ng-switch="classSchedDetails.length">
				<tr ng-switch-when="0"><td colspan="6">No record(s) found.</td></tr>
				<tr ng-switch-when-default ng-repeat="classsched in classSchedDetails[0].classsched">
				  	<th scope="row" ng-bind="$index +1"></th>
				  	<td ng-bind="classsched.schedcode"></td>
				  	<td ng-bind="classsched.subjectname"></td>
				  	<td ng-bind="classsched.time"></td>
				  	<td ng-bind="classsched.classroom"></td>
				  	<td ng-bind="classsched.teacher"></td>
				</tr>
			  </tbody>
			</table>
		  </div>
		</div>
  	</div>
</td>