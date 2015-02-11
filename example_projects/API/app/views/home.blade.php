@extends('layouts.master')
    @section('content')
    <div class="card mt++">
        <lx-tabs indicator="green-200" active-tab="0" layout="inline">
            <lx-tab heading="Projects">
                <ul class="list" ng-controller="ProjectsController">
                      <li ng-repeat="project in projects" class="list-row list-row--has-primary list-row--has-secondary">
                            <div class="list-primary-tile">
                                  <a href ng-click="clickProject(project)"><i class="icon icon--l icon--grey icon--circled mdi mdi-folder"></i></a>
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


    <lx-dialog class="dialog dialog--l" id="project" onclose="closingDialog()">
    <div class="dialog__header">
        <div class="toolbar bgc-light-blue-500 pl++">
            <span class="toolbar__label tc-white fs-title">
                @{{select.title}}
            </span>

            <div class="toolbar__right">
                <button class="btn btn--l btn--white btn--icon" lx-ripple ng-click="addPerson()">
                    <i class="mdi mdi-plus"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="dialog__content">
        <lx-tabs links-tc="light" links-bgc="light-blue-500" indicator="yellow-500" no-divider="true" layout="inline">
            <lx-tab heading="description">
                <div class="p++">
                    <div>
                        @{{ select.description }}
                    </div>
                </div>
            </lx-tab>

            <lx-tab heading="Solutions">
                <p class="p++">Lorem Ipsum Content 2</p>
            </lx-tab>

            <lx-tab heading="Comments">
                <p class="p++">Lorem Ipsum Content 3</p>
            </lx-tab>
        </lx-tabs>
    </div>

    <div class="dialog__actions">
        <button class="btn btn--m btn--black btn--flat" lx-ripple lx-dialog-close>Cancel</button>
        <button class="btn btn--m btn--black btn--flat" lx-ripple>Lorem Ipsum</button>
    </div>
</lx-dialog>
    @stop
@stop
