@extends('layouts.master')
@section('content')

<div class="form-style-10">
<h1>Sign Up Now!<span>Sign up and tell us what you think of the site!</span></h1>
<form>
    <div class="section"><span>1</span>Orange</div>
    <div class="inner-wrap">
        <label>Your Full Name <input type="text" name="field1" /></label>
        <label>Address <textarea name="field2"></textarea></label>
    </div>

    <div class="section"><span>2</span>Oredoo</div>
    <div class="inner-wrap">
        <label>Email Address <input type="email" name="field3" /></label>
        <label>Phone Number <input type="text" name="field4" /></label>
    </div>

    <div class="section"><span>3</span>Telecome</div>
        <div class="inner-wrap">
        <label>Password <input type="password" name="field5" /></label>
        <label>Confirm Password <input type="password" name="field6" /></label>
    </div>
    <div class="button-section">
     <input type="submit" name="Sign Up" />
     <span class="privacy-policy">
     <input type="checkbox" name="field7">You agree to our Terms and Policy. 
     </span>
    </div>
</form>
</div>

@stop