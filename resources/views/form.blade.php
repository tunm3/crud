@extends('layout.master')
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Advanced Forms</h2>
        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Forms</span></li>
                <li><span>Advanced</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
    <div class="row">
        <div class="col-xs-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Select Replacement</h2>
                </header>
                <div class="panel-body">
                    <form class="form-horizontal form-bordered" action="#">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Basic select</label>
                            <div class="col-md-6">
                                <select data-plugin-selectTwo class="form-control populate">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Multi-Value Select</label>
                            <div class="col-md-6">
                                <select multiple data-plugin-selectTwo class="form-control populate">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Placeholders </label>
                            <div class="col-md-6">
                                <select data-plugin-selectTwo class="form-control populate placeholder" data-plugin-options='{ "placeholder": "Select a State", "allowClear": true }'>
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Minimum Input</label>
                            <div class="col-md-6">
                                <select data-plugin-selectTwo class="form-control populate" data-plugin-options='{ "minimumInputLength": 2 }'>
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option><option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Multi-select</h2>
                </header>
                <div class="panel-body">
                    <form class="form-horizontal form-bordered" action="#">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Basic Multi-select</label>
                            <div class="col-md-6">
                                <select class="form-control" multiple="multiple" data-plugin-multiselect id="ms_example0">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes" selected>Tomatoes</option>
                                    <option value="mozarella" selected>Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Basic Multi-select (Only One)</label>
                            <div class="col-md-6">
                                <select class="form-control" data-plugin-multiselect id="ms_example1">
                                    <option value="cheese" selected>Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">With Preselected Options</label>
                            <div class="col-md-6">
                                <select class="form-control" multiple="multiple" data-plugin-multiselect id="ms_example2">
                                    <option value="cheese" selected>Cheese</option>
                                    <option value="tomatoes" selected>Tomatoes</option>
                                    <option value="mozarella" selected>Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Link button</label>
                            <div class="col-md-6">
                                <select class="form-control" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "buttonClass": "btn btn-link" }' id="ms_example3">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">With icon</label>
                            <div class="col-md-6">
                                <div class="input-group btn-group">
														<span class="input-group-addon">
															<i class="fa fa-th-list"></i>
														</span>
                                    <select class="form-control" multiple="multiple" data-plugin-multiselect id="ms_example4">
                                        <option value="cheese">Cheese</option>
                                        <option value="tomatoes">Tomatoes</option>
                                        <option value="mozarella">Mozzarella</option>
                                        <option value="mushrooms">Mushrooms</option>
                                        <option value="pepperoni">Pepperoni</option>
                                        <option value="onions">Onions</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Select All Option</label>
                            <div class="col-md-6">
                                <select class="form-control" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "includeSelectAllOption": true }' id="ms_example5">
                                    <optgroup label="Mathematics">
                                        <option value="analysis">Analysis</option>
                                        <option value="algebra">Linear Algebra</option>
                                        <option value="discrete">Discrete Mathematics</option>
                                        <option value="numerical">Numerical Analysis</option>
                                        <option value="probability">Probability Theory</option>
                                    </optgroup>
                                    <optgroup label="Computer Science">
                                        <option value="programming">Introduction to Programming</option>
                                        <option value="automata">Automata Theory</option>
                                        <option value="complexity">Complexity Theory</option>
                                        <option value="software">Software Engineering</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">With Search</label>
                            <div class="col-md-6">
                                <select class="form-control" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "enableCaseInsensitiveFiltering": true }' id="ms_example6">
                                    <optgroup label="Mathematics">
                                        <option value="analysis">Analysis</option>
                                        <option value="algebra">Linear Algebra</option>
                                        <option value="discrete">Discrete Mathematics</option>
                                        <option value="numerical">Numerical Analysis</option>
                                        <option value="probability">Probability Theory</option>
                                    </optgroup>
                                    <optgroup label="Computer Science">
                                        <option value="programming">Introduction to Programming</option>
                                        <option value="automata">Automata Theory</option>
                                        <option value="complexity">Complexity Theory</option>
                                        <option value="software">Software Engineering</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Toggle All Button</label>
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <select class="form-control" multiple="multiple" data-plugin-multiselect data-multiselect-toggle-all="true" id="ms_example7">
                                        <option value="cheese">Cheese</option>
                                        <option value="tomatoes">Tomatoes</option>
                                        <option value="mozarella">Mozzarella</option>
                                        <option value="mushrooms">Mushrooms</option>
                                        <option value="pepperoni">Pepperoni</option>
                                        <option value="onions">Onions</option>
                                    </select>
                                    <button id="ms_example7-toggle" class="btn btn-primary">Select All</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Tag Autocomplete</h2>
                </header>
                <div class="panel-body">
                    <form class="form-horizontal form-bordered form-bordered">
                        <div class="form-group">
                            <label for="tags-input" class="col-md-3 control-label">Input Tags</label>
                            <div class="col-md-7">
                                <input name="tags" id="tags-input" data-role="tagsinput" data-tag-class="label label-primary" class="form-control" value="Amsterdam,Washington,Sydney,Beijing,Cairo" />
                                <p>
                                    Just add <code>data-role="tagsinput"</code> to your input field to automatically change it to a tags input field.
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tags-input-multiple" class="col-md-3 control-label">True multi value</label>
                            <div class="col-md-7">
                                <select id="tags-input-multiple" multiple data-role="tagsinput" data-tag-class="label label-primary">
                                    <option value="Amsterdam">Amsterdam</option>
                                    <option value="Washington">Washington</option>
                                    <option value="Sydney">Sydney</option>
                                    <option value="Beijing">Beijing</option>
                                    <option value="Cairo">Cairo</option>
                                </select>
                                <p>
                                    Use a <code>&lt;select multiple /&gt;</code> as your input element for a tags input, to gain true multivalue support. Instead of a comma separated string, the values will be set in an array. Existing <code>&lt;option /&gt;</code> elements will automatically be set as tags. This makes it also possible to create tags containing a comma.
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Toggle Switches</h2>
                </header>
                <div class="panel-body">
                    <form class="form-horizontal form-bordered">

                        <div class="form-group">
                            <label class="control-label col-md-3">Large</label>
                            <div class="col-md-9">
                                <div class="switch switch-lg switch-primary">
                                    <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                                </div>
                                <div class="switch switch-lg switch-success">
                                    <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                                </div>
                                <div class="switch switch-lg switch-warning">
                                    <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                                </div>
                                <div class="switch switch-lg switch-danger">
                                    <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                                </div>
                                <div class="switch switch-lg switch-info">
                                    <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                                </div>
                                <div class="switch switch-lg switch-dark">
                                    <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Default</label>
                            <div class="col-md-9">
                                <div class="switch switch-primary">
                                    <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                                </div>
                                <div class="switch switch-success">
                                    <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                                </div>
                                <div class="switch switch-warning">
                                    <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                                </div>
                                <div class="switch switch-danger">
                                    <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                                </div>
                                <div class="switch switch-info">
                                    <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                                </div>
                                <div class="switch switch-dark">
                                    <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Small</label>
                            <div class="col-md-9">
                                <div class="switch switch-sm switch-primary">
                                    <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                                </div>
                                <div class="switch switch-sm switch-success">
                                    <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                                </div>
                                <div class="switch switch-sm switch-warning">
                                    <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                                </div>
                                <div class="switch switch-sm switch-danger">
                                    <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                                </div>
                                <div class="switch switch-sm switch-info">
                                    <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                                </div>
                                <div class="switch switch-sm switch-dark">
                                    <input type="checkbox" name="switch" data-plugin-ios-switch checked="checked" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Slider Range</h2>
                </header>
                <div class="panel-body">
                    <form class="form-horizontal form-bordered">

                        <div class="form-group">
                            <label class="col-md-3 control-label">One Value</label>
                            <div class="col-md-6">
                                <div class="m-md slider-primary" data-plugin-slider data-plugin-options='{ "value": 50, "range": "min", "max": 100 }' data-plugin-slider-output="#listenSlider">
                                    <input id="listenSlider" type="hidden" value="50" />
                                </div>
                                <p class="output">The current <code>value</code> is: <b>50</b></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Range</label>
                            <div class="col-md-6">
                                <div class="m-md slider-primary" data-plugin-slider data-plugin-options='{ "values": [ 25, 75 ], "range": true, "max": 100 }' data-plugin-slider-output="#listenSlider2">
                                    <input id="listenSlider2" type="hidden" value="25, 75" />
                                </div>
                                <p class="output2">The <code>min</code> is: <b class="min">25</b> and the <code>max</code> is: <b class="max">75</b></p>
                            </div>
                        </div>

                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Spinners</h2>
                </header>
                <div class="panel-body">

                    <form class="form-horizontal form-bordered" action="#">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Default Spinner</label>
                            <div class="col-md-6">
                                <div data-plugin-spinner>
                                    <div class="input-group input-small">
                                        <input type="text" class="spinner-input form-control" readonly="readonly">
                                        <div class="spinner-buttons input-group-btn btn-group-vertical">
                                            <button type="button" class="btn spinner-up btn-xs btn-default">
                                                <i class="fa fa-angle-up"></i>
                                            </button>
                                            <button type="button" class="btn spinner-down btn-xs btn-default">
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Disabled</label>
                            <div class="col-md-6">
                                <div data-plugin-spinner data-plugin-options='{ "disabled": true }'>
                                    <div class="input-group input-small">
                                        <input type="text" class="spinner-input form-control" maxlength="3" readonly>
                                        <div class="spinner-buttons input-group-btn btn-group-vertical">
                                            <button type="button" class="btn spinner-up btn-xs">
                                                <i class="fa fa-angle-up"></i>
                                            </button>
                                            <button type="button" class="btn spinner-down btn-xs">
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Horizontal buttons</label>
                            <div class="col-md-6">
                                <div data-plugin-spinner data-plugin-options='{ "value":0, "min": 0, "max": 10 }'>
                                    <div class="input-group" style="width:150px;">
                                        <input type="text" class="spinner-input form-control" maxlength="3" readonly>
                                        <div class="spinner-buttons input-group-btn">
                                            <button type="button" class="btn btn-default spinner-up">
                                                <i class="fa fa-angle-up"></i>
                                            </button>
                                            <button type="button" class="btn btn-default spinner-down">
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    with <code>max</code> value set to 10
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Alternative</label>
                            <div class="col-md-6">
                                <div data-plugin-spinner data-plugin-options='{ "value":0, "step": 5, "min": 0, "max": 200 }'>
                                    <div class="input-group">
                                        <div class="spinner-buttons input-group-btn">
                                            <button type="button" class="btn btn-default spinner-up">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="spinner-input form-control" maxlength="3" readonly>
                                        <div class="spinner-buttons input-group-btn">
                                            <button type="button" class="btn btn-default spinner-down">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    with <code>step</code> set to 5
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Masked Inputs</h2>
                    <p class="panel-subtitle">
                        Input masks allows a user to more easily enter fixed width input where you would like them to enter the data in a certain format (dates,phones, etc).
                    </p>
                </header>
                <div class="panel-body">
                    <form class="form-horizontal form-bordered">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Date</label>
                            <div class="col-md-6">
                                <div class="input-group">
															<span class="input-group-addon">
																<i class="fa fa-calendar"></i>
															</span>
                                    <input id="date" data-plugin-masked-input data-input-mask="99/99/9999" placeholder="__/__/____" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Phone</label>
                            <div class="col-md-6 control-label">
                                <div class="input-group">
															<span class="input-group-addon">
																<i class="fa fa-phone"></i>
															</span>
                                    <input id="phone" data-plugin-masked-input data-input-mask="(999) 999-9999" placeholder="(123) 123-1234" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Product Key</label>
                            <div class="col-md-6 control-label">
                                <div class="input-group">
															<span class="input-group-addon">
																<i class="fa fa-tag"></i>
															</span>
                                    <input id="product-key" data-plugin-masked-input data-input-mask="(aa) 99-999" placeholder="(ab) 12-123" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="fc_inputmask_1">SSN</label>
                            <div class="col-md-6">
                                <div class="input-group">
															<span class="input-group-addon">
																<i class="fa fa-plus"></i>
															</span>
                                    <input id="fc_inputmask_1" data-plugin-masked-input data-input-mask="999-99-9999" placeholder="___-__-____" class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Date Picker</h2>
                </header>
                <div class="panel-body">
                    <form class="form-horizontal form-bordered">

                        <div class="form-group">
                            <label class="col-md-3 control-label">Default Datepicker</label>
                            <div class="col-md-6">
                                <div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
                                    <input type="text" data-plugin-datepicker class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Date range</label>
                            <div class="col-md-6">
                                <div class="input-daterange input-group" data-plugin-datepicker>
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
                                    <input type="text" class="form-control" name="start">
                                    <span class="input-group-addon">to</span>
                                    <input type="text" class="form-control" name="end">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Multiple dates</label>
                            <div class="col-md-6">
                                <div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
                                    <input type="text" data-plugin-datepicker data-plugin-options='{ "multidate": true }' class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Inline</label>
                            <div class="col-md-3">
                                <div data-plugin-datepicker data-plugin-skin="primary">
                                </div>
                            </div>
                     </form>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Time Pickers</h2>
                </header>
                <div class="panel-body">
                    <form class="form-horizontal form-bordered">

                        <div class="form-group">
                            <label class="col-md-3 control-label">Default Time Picker</label>
                            <div class="col-md-6">
                                <div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-clock-o"></i>
														</span>
                                    <input type="text" data-plugin-timepicker class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">24 Hour Mode Time Picker</label>
                            <div class="col-md-6">
                                <div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-clock-o"></i>
														</span>
                                    <input type="text" data-plugin-timepicker class="form-control" data-plugin-options='{ "showMeridian": false }'>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Specify a step for the minute field</label>
                            <div class="col-md-6">
                                <div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-clock-o"></i>
														</span>
                                    <input type="text" data-plugin-timepicker class="form-control" data-plugin-options='{ "minuteStep": 15 }'>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Color Pickers</h2>
                </header>
                <div class="panel-body">

                    <form class="form-horizontal form-bordered" action="#">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Default</label>
                            <div class="col-md-6">
                                <input type="text" data-plugin-colorpicker class="colorpicker-default form-control" value="#8fff00"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">RGBA</label>
                            <div class="col-md-6">
                                <input type="text" data-plugin-colorpicker class="colorpicker-rgba form-control" value="rgb(0,194,255,0.78)" data-color-format="rgba"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Horizontal</label>
                            <div class="col-md-6">
                                <input type="text" data-plugin-colorpicker class="colorpicker-rgba form-control" value="#8fff00" data-horizontal="true"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Component</label>
                            <div class="col-md-6">
                                <div class="input-group color" data-color="rgb(255, 146, 180)" data-color-format="rgb" data-plugin-colorpicker>
                                    <span class="input-group-addon"><i></i></span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Button</label>
                            <div class="col-md-6 col-xs-11">
                                <a href="#" class="btn btn-sm btn-primary" data-plugin-colorpicker data-color-format="hex" data-color="rgb(255, 255, 255)">Select color</a>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">MaxLength Control</h2>
                </header>
                <div class="panel-body">
                    <form class="form-horizontal form-bordered form-bordered" action="#">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="textareaDefault">Input</label>
                            <div class="col-md-6">
                                <input class="form-control" data-plugin-maxlength maxlength="20" />
                                <p>
                                    <code>max-length</code> set to 20.
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="textareaDefault">Textarea</label>
                            <div class="col-md-6">
                                <textarea class="form-control" rows="3" data-plugin-maxlength maxlength="140"></textarea>
                                <p>
                                    <code>max-length</code> set to 140.
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">File Upload Drag'n Drop</h2>
                </header>
                <div class="panel-body">
                    <form action="/upload" class="dropzone dz-square" id="dropzone-example"></form>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">WYSIWYG Editors</h2>
                </header>
                <div class="panel-body">
                    <form class="form-horizontal form-bordered">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Summernote</label>
                            <div class="col-md-9">
                                <div class="summernote" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'>Start typing...</div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Markdown Editor</h2>
                </header>
                <div class="panel-body">
                    <form class="form-horizontal form-bordered">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Bootstrap Markdown</label>
                            <div class="col-md-9">
													<textarea name="content" data-plugin-markdown-editor rows="10">### Hello there
						How are you?

						I have bellow task for you :

						Select from this text...
						Click the bold on THIS WORD and make THESE ONE italic
						Link GOOGLE to google.com
						Test to insert image (and try to tab after write the image description)
						Test Preview
						And ending here... Click "List"

						Enjoy!</textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
    <!-- end: page -->
</section>
@endsection
