@extends('layouts.master')
    @section('content')
<div ng-controller="LoginController">
    <div class="bgc-grey-800 mt++ p+ pt0 grid__col8">
        <div class="grid">
            <div class="grid__col4">
                <lx-text-field label="JavaScript for Designers" disabled="true" theme="dark">
                    <input ng-model="title" type="text" ng-disabled="true">
                </lx-text-field>
            </div>
        </div>

        <div class="grid">
            <div class="grid__col4">
                <lx-text-field label="Username" theme="dark">
                    <input type="text" ng-model="textFields.username">
                </lx-text-field>
            </div>

            <div class="grid__col4">
                <lx-text-field label="Password" theme="dark">
                    <input type="password" ng-model="textFields.password">
                </lx-text-field>
            </div>
        </div>
        <div id="progress"></div>
        <div class="grid">
            <div class="pull-right">
                <button ng-click="login(textFields)" class="btn btn--m btn--green btn--raised" lx-ripple>Login</button>
            </div>
        </div>
    </div>
</div>

    @stop
@stop
