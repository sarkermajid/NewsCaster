@extends('website.master')

@section('body')

<style>

    .box {
        position: relative;
        width: 380px;
        height: 420px;
        text-align: center;
        border-radius: 8px;
        background: #1c1c1c;
        overflow: hidden;
    }

    .box::before{
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 380px;
        height: 420px;
        background: linear-gradient(0deg, transparent,
        #45f4ff, #45f4ff);
        transform-origin: bottom right;
        animation: animate 6s linear infinite;
    }

    .box::after{
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 380px;
        height: 420px;
        background: linear-gradient(0deg, transparent,
        #45f4ff, #45f4ff);
        transform-origin: bottom right;
        animation: animate 6s linear infinite;
        animation-delay: -3s;
    }

    @keyframes animate {
        0%{
            transform: rotate(0deg);
        }
        100%{
            transform: rotate(360deg);
        }
    }

    .form {
        position: absolute;
        inset: 2px;
        border-radius: 8px;
        background: #28292d;
        z-index: 10;
        padding: 50px 40px;
        display: flex;
        flex-direction: column;
        text-align: center;

    }
    .form h2 {
        color: #45f3ff;
        font-weight: 500;
        text-align: center;
        letter-spacing: 0,1em;

    }

    .inputBox{
        position: relative;
        width: 300px;
        margin-top: 35px;

    }
    .inputBox input {
        position: relative;
        width: 100%;
        padding: 10px 9px 10px;
        background: transparent;
        border: none;
        outline: none;
        color: #23242a;
        font-size: 1em;
        letter-spacing: 0.05em;
        z-index: 10;
    }

    .inputBox span{
        position: absolute;
        left: 0;
        padding: 10px 10px 10px;
        font-size: 1em;
        color: #8f8f8f;
        pointer-events: none;
        letter-spacing: 0.05em;
        transition: 0.5s;
    }

    .inputBox input:valid ~ span,
    .inputBox input:focus ~ span  {
        color: #45f3ff;
        transform: translateX(0px) translateY(-34px);
        font-size: 0.75em;

    }

    .inputBox i {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 2px;
        background: #45f3ff;
        border-radius: 4px;
        transition: 0.5s;
        pointer-events: none;
        z-index: 9;
    }

    .inputBox input:valid ~ i,
    .inputBox input:focus ~ i {
        height: 44px;

    }

    .links {
        display: flex;
        justify-content: space-between;

    }

    .links a {
        margin: 10px 0;
        font-size: 00.75em;
        color: #8f8f8f;
        text-decoration: none;
    }

    .links a:hover,
    .links a:nth-child(2)
     {
        color: #45f3ff;

    }
    input[type='submit'] {
        border: none;
        outline: none;
        background: #45f3ff;
        padding: 11px 25px;
        width: 100px;
        margin-top: 10px;
        border-radius: 4px;
        font-weight: 600;
        cursor: pointer;
    }

    input[type='submit']:active {
        opacity: 0.8;
    }
    </style>


<div class="box">
    <div class="form">
        <h2>Login</h2>
        <div class="inputBox">
            <input type="text" required="required">
            <span>Username</span>
            <i></i>
        </div>
        <div class="inputBox">
            <input type="password" required="required">
            <span>Password</span>
            <i></i>
        </div>
        <div class="links">
            <a href="https://akhs1.com/">Forgot password?</a>
            <a href="https://akhs1.com/">Sign Up</a>
        </div>
        <a href="https://akhs1.com/"><input type="submit" value="Login"></a>
    </div>
</div>
@endsection