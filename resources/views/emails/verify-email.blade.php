<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Verify email address</title>
</head>
<body style="margin:0px; background: #f8f8f8; ">
<div width="100%" style="background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;">
    <div style="max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px">
        <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 20px">
            <tbody>
            <tr>
                <td style="vertical-align: top; padding-bottom:30px;" align="center">
                    <a href="javascript:void(0)">
                        <img src="{{ url('/img/logo.png') }}" alt="{{ env('APP_NAME') }}" style="border:none">
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
        <div style="padding: 40px; background: #fff;">
            <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                <tbody>
                <tr>
                    <td>
                        <b>Hello {{$user->name}},</b>
                        <p>Thanks for signing up. Please click the button below to verify your email address.</p>
                        <a href="{{$verificationUrl}}" style="display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #1e88e5; border-radius: 60px; text-decoration:none;"> Verify Email Address </a>
                        <p>If you did not create an account, no further action is required.</p>
                        <p>Regards,</p>
                        <p>Team @ {{ env('APP_NAME') }}</p>

                        <table class="subcopy" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; border-top: 1px solid #EDEFF2; margin-top: 25px; padding-top: 25px;">
                                <tr>
                                    <td style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
                                        <p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787E; line-height: 1.5em; margin-top: 0; text-align: left; font-size: 12px;">
                                            If you’re having trouble clicking the "Verify Email Address" button, copy and paste the URL below
                                            into your web browser: <a href="{{$verificationUrl}}" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #3869D4;">{{$verificationUrl}}</a></p>
                                    </td>
                                </tr>
                            </table>

                    </td>
                </tr>
                </tbody>
            </table>
            
        </div>
        <div style="text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px">
            <p>  &copy; 2019 {{ env('APP_NAME') }}. All rights reserved. <br>
        </div>
    </div>
</div>
</body>
</html>
