<div class="page-title">
  <div class="title_left">
    <h3>People Finder</h3>
  </div>

  <div class="title_right">
    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for...">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">Go!</button>
        </span>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Create Person 
          <small>This <strong>People Create</strong> feature should include student, faculty members and all employee's related to Student Management</small>
        </h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Name</th>
              <th>Level/Section</th>
              <th>Representative</th>
            </tr>
          </thead>
          <tbody ng-repeat="person in pf.personData">
            <tr ng-click="pf.showPersonDetail(person)" >
              <td>
                <img class="img-rounded img-responsive pull-left" src="/assets/images/img.jpg" alt="" width="50" height="50">
                <div class="col-md-6">
                  <p  style="margin-bottom: 0px;" ng-bind="person.name"></p>
                  <small  style="margin-bottom: 0px;" ng-bind="person.level +'-'+ person.section + ' ('+ person.course +')'"></small>
                </div>
              </td>
              <td ng-bind="person.level + '-' + person.section"></td>
              <td ng-bind="person.representative"></td>
            </tr>
            <tr style="background-color: #f7f7f7;" showdetail person="person" showdetails="person.isshowdetails"></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>