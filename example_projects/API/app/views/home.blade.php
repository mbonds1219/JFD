@extends('layouts.master')
    @section('content')
<div class="grid" ng-controller="HomeController">
      <div class="grid__col6">
            <ul class="list">
                  <li ng-repeat="solution in solutions" class="list-row list-row--has-primary list-row--has-secondary">
                        <div class="list-primary-tile">
                              <i class="icon icon--l icon--grey icon--circled mdi mdi--folder"></i>
                        </div>

                        <div class="list-content-tile list-content-tile--two-lines">
                              <strong><student-info student-id="@{{solution.student_id}}"></student-info></strong>
                              <span><project-info project-id="@{{ solution.project_id }}"></project-info></span>
                        </div>

                        <div class="list-secondary-tile">
                              <i class="icon icon--s icon--grey icon--flat mdi mdi--info"></i>
                        </div>
                  </li>
            </ul>
      </div>

</div>
@stop
@stop
