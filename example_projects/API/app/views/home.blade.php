@extends('layouts.master')
    @section('content')
    <div class="card mt++">
        <lx-tabs indicator="green-200" active-tab="0" layout="inline">
            <lx-tab heading="Projects">
                <ul class="list" ng-controller="ProjectsController">
                      <li ng-repeat="project in projects" class="list-row list-row--has-primary list-row--has-secondary">
                            <div class="list-primary-tile">
                                  <i class="icon icon--l icon--grey icon--circled mdi mdi-folder"></i>
                            </div>

                            <div class="list-content-tile list-content-tile--two-lines">
                                  <strong>@{{project.title}}</strong>
                            </div>

                            <div class="list-secondary-tile">
                                  <i class="icon icon--s icon--grey icon--flat mdi mdi-information"></i>
                            </div>
                      </li>
                </ul>
            </lx-tab>

            <lx-tab heading="Weeks" ng-click="stateActive('weeks')" ui-sref-active="active" ui-sref="weeks">
                <div ui-view></div>
            </lx-tab>

            <lx-tab heading="Students" ng-click="stateActive('students')" ui-sref-active="active" ui-sref="students">
                <div ui-view></div>
            </lx-tab>
        </lx-tabs>
    </div>
    @stop
@stop
