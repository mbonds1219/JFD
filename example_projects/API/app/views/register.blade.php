@extends('layouts.master')
    @section('content')
    <div ng-controller="RegisterController">
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
                    <lx-text-field label="First name" theme="dark">
                        <input type="text" ng-model="textFields.firstName">
                    </lx-text-field>
                </div>

                <div class="grid__col4">
                    <lx-text-field label="Last name" theme="dark">
                        <input type="text" ng-model="textFields.lastName">
                    </lx-text-field>
                </div>
            </div>

            <div class="grid">
                <div class="grid__col4">
                    <lx-text-field label="Email"
                        valid="textFields.firstEmail === textFields.secondEmail"
                        error="textFields.firstEmail !== textFields.secondEmail"
                        theme="dark">
                        <input type="email" ng-model="textFields.firstEmail">
                    </lx-text-field>
                </div>

                <div class="grid__col4">
                    <lx-text-field label="Repeat previous email"
                    valid="textFields.firstEmail === textFields.secondEmail && textFields.firstEmail !== ''"
                    error="textFields.firstEmail !== textFields.secondEmail"
                    theme="dark">
                        <input type="email" ng-model="textFields.secondEmail">
                    </lx-text-field>
                </div>
            </div>
        <div class="grid mt++">
            <div class="grid__col4">
                <lx-text-field label="Password"
                valid="textFields.password === textFields.secondPassword"
                error="textFields.password !== textFields.secondPassword"
                theme="dark">
                    <input type="password" ng-model="textFields.password">
                </lx-text-field>
            </div>
            <div class="grid__col4">
                <lx-text-field label="Password"
                valid="textFields.password === textFields.secondPassword"
                error="textFields.password !== textFields.secondPassword"
                theme="dark">
                    <input type="password" ng-model="textFields.secondPassword">
                </lx-text-field>
            </div>
        </div>
        <div id="progress"></div>
            <div class="grid mt++">
                <div class="grid__col4">
                    <lx-text-field label="Username"
                    theme="dark">
                        <input type="text" ng-model="textFields.username">
                    </lx-text-field>
                </div>
                <div class="pull-right">
                    <button ng-click="register(textFields)" class="btn btn--m btn--green btn--raised" lx-ripple>Register</button>
                </div>
            </div>
        </div>
    </div>
</div>

    @stop
@stop
