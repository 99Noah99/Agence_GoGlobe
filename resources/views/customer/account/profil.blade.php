@extends('layouts.customer_dashbord')
@section('contenu_account')

<div class="col-lg-8">
    <div class="dashboard_common_table">
        <h3>My Profile</h3>
        <div class="profile_update_form">
            <form action="!#" id="profile_form_area">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="f-name">First name</label>
                            <input type="text" class="form-control" id="f-name" placeholder="Your Name" value="Sherlyn">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="l-name">Last name</label>
                            <input type="text" class="form-control" id="l-name" value="chopra">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="mail-address">Email address</label>
                            <input type="text" class="form-control" id="mail-address" value="sherlyn@domain.com">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="mobil-number">Mobile number</label>
                            <input type="text" class="form-control" id="mobil-number" value="+00 123 456 789">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="u-name">User name</label>
                            <input type="text" class="form-control" id="u-name" value="sherlyn">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group change_password_field">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" value="cdkdkdd">
                            <p>Change password</p>
                        </div>
                    </div>
                    <div class="change_password_input_boxed">
                        <h3>Change password</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Old Password">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="New Password">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@stop