<?php
include_once ("z_db.php");
// Inialize session
session_start();
error_reporting(0);
include 'action/check-login.php';
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
    print "
			<script language='javascript'>
				window.location = '../signin.php';
			</script>
		  ";        
}
?>
<!DOCTYPE html>
<!-- saved from url=(0050)investors.php -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Top Investors | Cryptologictrade</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./investors_files/bootstrap.min.css" rel="stylesheet">
    <link href="./investors_files/font-awesome.min.css" rel="stylesheet">
    <link href="./investors_files/themify-icons.css" rel="stylesheet">
    <!-- PLUGINS STYLES-->
    <link href="./investors_files/jquery-jvectormap-2.0.3.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- THEME STYLES-->
    <link href="./investors_files/main.css" rel="stylesheet">
    <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- PAGE LEVEL STYLES-->
    <!-- SWEET ALERT -->
    <script async="" src="./investors_files/app.js.download" charset="UTF-8" crossorigin="*"></script><script async="" src="./investors_files/default" charset="UTF-8" crossorigin="*"></script><script src="./investors_files/sweetalert2@9"></script><style>.swal2-popup.swal2-toast{flex-direction:row;align-items:center;width:auto;padding:.625em;overflow-y:hidden;background:#fff;box-shadow:0 0 .625em #d9d9d9}.swal2-popup.swal2-toast .swal2-header{flex-direction:row;padding:0}.swal2-popup.swal2-toast .swal2-title{flex-grow:1;justify-content:flex-start;margin:0 .6em;font-size:1em}.swal2-popup.swal2-toast .swal2-footer{margin:.5em 0 0;padding:.5em 0 0;font-size:.8em}.swal2-popup.swal2-toast .swal2-close{position:static;width:.8em;height:.8em;line-height:.8}.swal2-popup.swal2-toast .swal2-content{justify-content:flex-start;padding:0;font-size:1em}.swal2-popup.swal2-toast .swal2-icon{width:2em;min-width:2em;height:2em;margin:0}.swal2-popup.swal2-toast .swal2-icon .swal2-icon-content{display:flex;align-items:center;font-size:1.8em;font-weight:700}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-popup.swal2-toast .swal2-icon .swal2-icon-content{font-size:.25em}}.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line]{top:.875em;width:1.375em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:.3125em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:.3125em}.swal2-popup.swal2-toast .swal2-actions{flex-basis:auto!important;width:auto;height:auto;margin:0 .3125em}.swal2-popup.swal2-toast .swal2-styled{margin:0 .3125em;padding:.3125em .625em;font-size:1em}.swal2-popup.swal2-toast .swal2-styled:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(50,100,150,.4)}.swal2-popup.swal2-toast .swal2-success{border-color:#a5dc86}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line]{position:absolute;width:1.6em;height:3em;transform:rotate(45deg);border-radius:50%}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.8em;left:-.5em;transform:rotate(-45deg);transform-origin:2em 2em;border-radius:4em 0 0 4em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.25em;left:.9375em;transform-origin:0 1.5em;border-radius:0 4em 4em 0}.swal2-popup.swal2-toast .swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-success .swal2-success-fix{top:0;left:.4375em;width:.4375em;height:2.6875em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line]{height:.3125em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip]{top:1.125em;left:.1875em;width:.75em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long]{top:.9375em;right:.1875em;width:1.375em}.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip{-webkit-animation:swal2-toast-animate-success-line-tip .75s;animation:swal2-toast-animate-success-line-tip .75s}.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long{-webkit-animation:swal2-toast-animate-success-line-long .75s;animation:swal2-toast-animate-success-line-long .75s}.swal2-popup.swal2-toast.swal2-show{-webkit-animation:swal2-toast-show .5s;animation:swal2-toast-show .5s}.swal2-popup.swal2-toast.swal2-hide{-webkit-animation:swal2-toast-hide .1s forwards;animation:swal2-toast-hide .1s forwards}.swal2-container{display:flex;position:fixed;z-index:1060;top:0;right:0;bottom:0;left:0;flex-direction:row;align-items:center;justify-content:center;padding:.625em;overflow-x:hidden;transition:background-color .1s;-webkit-overflow-scrolling:touch}.swal2-container.swal2-backdrop-show,.swal2-container.swal2-noanimation{background:rgba(0,0,0,.4)}.swal2-container.swal2-backdrop-hide{background:0 0!important}.swal2-container.swal2-top{align-items:flex-start}.swal2-container.swal2-top-left,.swal2-container.swal2-top-start{align-items:flex-start;justify-content:flex-start}.swal2-container.swal2-top-end,.swal2-container.swal2-top-right{align-items:flex-start;justify-content:flex-end}.swal2-container.swal2-center{align-items:center}.swal2-container.swal2-center-left,.swal2-container.swal2-center-start{align-items:center;justify-content:flex-start}.swal2-container.swal2-center-end,.swal2-container.swal2-center-right{align-items:center;justify-content:flex-end}.swal2-container.swal2-bottom{align-items:flex-end}.swal2-container.swal2-bottom-left,.swal2-container.swal2-bottom-start{align-items:flex-end;justify-content:flex-start}.swal2-container.swal2-bottom-end,.swal2-container.swal2-bottom-right{align-items:flex-end;justify-content:flex-end}.swal2-container.swal2-bottom-end>:first-child,.swal2-container.swal2-bottom-left>:first-child,.swal2-container.swal2-bottom-right>:first-child,.swal2-container.swal2-bottom-start>:first-child,.swal2-container.swal2-bottom>:first-child{margin-top:auto}.swal2-container.swal2-grow-fullscreen>.swal2-modal{display:flex!important;flex:1;align-self:stretch;justify-content:center}.swal2-container.swal2-grow-row>.swal2-modal{display:flex!important;flex:1;align-content:center;justify-content:center}.swal2-container.swal2-grow-column{flex:1;flex-direction:column}.swal2-container.swal2-grow-column.swal2-bottom,.swal2-container.swal2-grow-column.swal2-center,.swal2-container.swal2-grow-column.swal2-top{align-items:center}.swal2-container.swal2-grow-column.swal2-bottom-left,.swal2-container.swal2-grow-column.swal2-bottom-start,.swal2-container.swal2-grow-column.swal2-center-left,.swal2-container.swal2-grow-column.swal2-center-start,.swal2-container.swal2-grow-column.swal2-top-left,.swal2-container.swal2-grow-column.swal2-top-start{align-items:flex-start}.swal2-container.swal2-grow-column.swal2-bottom-end,.swal2-container.swal2-grow-column.swal2-bottom-right,.swal2-container.swal2-grow-column.swal2-center-end,.swal2-container.swal2-grow-column.swal2-center-right,.swal2-container.swal2-grow-column.swal2-top-end,.swal2-container.swal2-grow-column.swal2-top-right{align-items:flex-end}.swal2-container.swal2-grow-column>.swal2-modal{display:flex!important;flex:1;align-content:center;justify-content:center}.swal2-container.swal2-no-transition{transition:none!important}.swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal{margin:auto}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-container .swal2-modal{margin:0!important}}.swal2-popup{display:none;position:relative;box-sizing:border-box;flex-direction:column;justify-content:center;width:32em;max-width:100%;padding:1.25em;border:none;border-radius:.3125em;background:#fff;font-family:inherit;font-size:1rem}.swal2-popup:focus{outline:0}.swal2-popup.swal2-loading{overflow-y:hidden}.swal2-header{display:flex;flex-direction:column;align-items:center;padding:0 1.8em}.swal2-title{position:relative;max-width:100%;margin:0 0 .4em;padding:0;color:#595959;font-size:1.875em;font-weight:600;text-align:center;text-transform:none;word-wrap:break-word}.swal2-actions{display:flex;z-index:1;flex-wrap:wrap;align-items:center;justify-content:center;width:100%;margin:1.25em auto 0}.swal2-actions:not(.swal2-loading) .swal2-styled[disabled]{opacity:.4}.swal2-actions:not(.swal2-loading) .swal2-styled:hover{background-image:linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,.1))}.swal2-actions:not(.swal2-loading) .swal2-styled:active{background-image:linear-gradient(rgba(0,0,0,.2),rgba(0,0,0,.2))}.swal2-actions.swal2-loading .swal2-styled.swal2-confirm{box-sizing:border-box;width:2.5em;height:2.5em;margin:.46875em;padding:0;-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;border:.25em solid transparent;border-radius:100%;border-color:transparent;background-color:transparent!important;color:transparent!important;cursor:default;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.swal2-actions.swal2-loading .swal2-styled.swal2-cancel{margin-right:30px;margin-left:30px}.swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after{content:"";display:inline-block;width:15px;height:15px;margin-left:5px;-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;border:3px solid #999;border-radius:50%;border-right-color:transparent;box-shadow:1px 1px 1px #fff}.swal2-styled{margin:.3125em;padding:.625em 2em;box-shadow:none;font-weight:500}.swal2-styled:not([disabled]){cursor:pointer}.swal2-styled.swal2-confirm{border:0;border-radius:.25em;background:initial;background-color:#3085d6;color:#fff;font-size:1.0625em}.swal2-styled.swal2-cancel{border:0;border-radius:.25em;background:initial;background-color:#aaa;color:#fff;font-size:1.0625em}.swal2-styled:focus{outline:0;box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(50,100,150,.4)}.swal2-styled::-moz-focus-inner{border:0}.swal2-footer{justify-content:center;margin:1.25em 0 0;padding:1em 0 0;border-top:1px solid #eee;color:#545454;font-size:1em}.swal2-timer-progress-bar-container{position:absolute;right:0;bottom:0;left:0;height:.25em;overflow:hidden;border-bottom-right-radius:.3125em;border-bottom-left-radius:.3125em}.swal2-timer-progress-bar{width:100%;height:.25em;background:rgba(0,0,0,.2)}.swal2-image{max-width:100%;margin:1.25em auto}.swal2-close{position:absolute;z-index:2;top:0;right:0;align-items:center;justify-content:center;width:1.2em;height:1.2em;padding:0;overflow:hidden;transition:color .1s ease-out;border:none;border-radius:0;background:0 0;color:#ccc;font-family:serif;font-size:2.5em;line-height:1.2;cursor:pointer}.swal2-close:hover{transform:none;background:0 0;color:#f27474}.swal2-close::-moz-focus-inner{border:0}.swal2-content{z-index:1;justify-content:center;margin:0;padding:0 1.6em;color:#545454;font-size:1.125em;font-weight:400;line-height:normal;text-align:center;word-wrap:break-word}.swal2-checkbox,.swal2-file,.swal2-input,.swal2-radio,.swal2-select,.swal2-textarea{margin:1em auto}.swal2-file,.swal2-input,.swal2-textarea{box-sizing:border-box;width:100%;transition:border-color .3s,box-shadow .3s;border:1px solid #d9d9d9;border-radius:.1875em;background:inherit;box-shadow:inset 0 1px 1px rgba(0,0,0,.06);color:inherit;font-size:1.125em}.swal2-file.swal2-inputerror,.swal2-input.swal2-inputerror,.swal2-textarea.swal2-inputerror{border-color:#f27474!important;box-shadow:0 0 2px #f27474!important}.swal2-file:focus,.swal2-input:focus,.swal2-textarea:focus{border:1px solid #b4dbed;outline:0;box-shadow:0 0 3px #c4e6f5}.swal2-file::-moz-placeholder,.swal2-input::-moz-placeholder,.swal2-textarea::-moz-placeholder{color:#ccc}.swal2-file:-ms-input-placeholder,.swal2-input:-ms-input-placeholder,.swal2-textarea:-ms-input-placeholder{color:#ccc}.swal2-file::-ms-input-placeholder,.swal2-input::-ms-input-placeholder,.swal2-textarea::-ms-input-placeholder{color:#ccc}.swal2-file::placeholder,.swal2-input::placeholder,.swal2-textarea::placeholder{color:#ccc}.swal2-range{margin:1em auto;background:#fff}.swal2-range input{width:80%}.swal2-range output{width:20%;color:inherit;font-weight:600;text-align:center}.swal2-range input,.swal2-range output{height:2.625em;padding:0;font-size:1.125em;line-height:2.625em}.swal2-input{height:2.625em;padding:0 .75em}.swal2-input[type=number]{max-width:10em}.swal2-file{background:inherit;font-size:1.125em}.swal2-textarea{height:6.75em;padding:.75em}.swal2-select{min-width:50%;max-width:100%;padding:.375em .625em;background:inherit;color:inherit;font-size:1.125em}.swal2-checkbox,.swal2-radio{align-items:center;justify-content:center;background:#fff;color:inherit}.swal2-checkbox label,.swal2-radio label{margin:0 .6em;font-size:1.125em}.swal2-checkbox input,.swal2-radio input{margin:0 .4em}.swal2-validation-message{display:none;align-items:center;justify-content:center;padding:.625em;overflow:hidden;background:#f0f0f0;color:#666;font-size:1em;font-weight:300}.swal2-validation-message::before{content:"!";display:inline-block;width:1.5em;min-width:1.5em;height:1.5em;margin:0 .625em;border-radius:50%;background-color:#f27474;color:#fff;font-weight:600;line-height:1.5em;text-align:center}.swal2-icon{position:relative;box-sizing:content-box;justify-content:center;width:5em;height:5em;margin:1.25em auto 1.875em;border:.25em solid transparent;border-radius:50%;font-family:inherit;line-height:5em;cursor:default;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.swal2-icon .swal2-icon-content{display:flex;align-items:center;font-size:3.75em}.swal2-icon.swal2-error{border-color:#f27474;color:#f27474}.swal2-icon.swal2-error .swal2-x-mark{position:relative;flex-grow:1}.swal2-icon.swal2-error [class^=swal2-x-mark-line]{display:block;position:absolute;top:2.3125em;width:2.9375em;height:.3125em;border-radius:.125em;background-color:#f27474}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:1.0625em;transform:rotate(45deg)}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:1em;transform:rotate(-45deg)}.swal2-icon.swal2-error.swal2-icon-show{-webkit-animation:swal2-animate-error-icon .5s;animation:swal2-animate-error-icon .5s}.swal2-icon.swal2-error.swal2-icon-show .swal2-x-mark{-webkit-animation:swal2-animate-error-x-mark .5s;animation:swal2-animate-error-x-mark .5s}.swal2-icon.swal2-warning{border-color:#facea8;color:#f8bb86}.swal2-icon.swal2-info{border-color:#9de0f6;color:#3fc3ee}.swal2-icon.swal2-question{border-color:#c9dae1;color:#87adbd}.swal2-icon.swal2-success{border-color:#a5dc86;color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-circular-line]{position:absolute;width:3.75em;height:7.5em;transform:rotate(45deg);border-radius:50%}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.4375em;left:-2.0635em;transform:rotate(-45deg);transform-origin:3.75em 3.75em;border-radius:7.5em 0 0 7.5em}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.6875em;left:1.875em;transform:rotate(-45deg);transform-origin:0 3.75em;border-radius:0 7.5em 7.5em 0}.swal2-icon.swal2-success .swal2-success-ring{position:absolute;z-index:2;top:-.25em;left:-.25em;box-sizing:content-box;width:100%;height:100%;border:.25em solid rgba(165,220,134,.3);border-radius:50%}.swal2-icon.swal2-success .swal2-success-fix{position:absolute;z-index:1;top:.5em;left:1.625em;width:.4375em;height:5.625em;transform:rotate(-45deg)}.swal2-icon.swal2-success [class^=swal2-success-line]{display:block;position:absolute;z-index:2;height:.3125em;border-radius:.125em;background-color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-line][class$=tip]{top:2.875em;left:.8125em;width:1.5625em;transform:rotate(45deg)}.swal2-icon.swal2-success [class^=swal2-success-line][class$=long]{top:2.375em;right:.5em;width:2.9375em;transform:rotate(-45deg)}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-tip{-webkit-animation:swal2-animate-success-line-tip .75s;animation:swal2-animate-success-line-tip .75s}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-long{-webkit-animation:swal2-animate-success-line-long .75s;animation:swal2-animate-success-line-long .75s}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-circular-line-right{-webkit-animation:swal2-rotate-success-circular-line 4.25s ease-in;animation:swal2-rotate-success-circular-line 4.25s ease-in}.swal2-progress-steps{align-items:center;margin:0 0 1.25em;padding:0;background:inherit;font-weight:600}.swal2-progress-steps li{display:inline-block;position:relative}.swal2-progress-steps .swal2-progress-step{z-index:20;width:2em;height:2em;border-radius:2em;background:#3085d6;color:#fff;line-height:2em;text-align:center}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step{background:#3085d6}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step{background:#add8e6;color:#fff}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line{background:#add8e6}.swal2-progress-steps .swal2-progress-step-line{z-index:10;width:2.5em;height:.4em;margin:0 -1px;background:#3085d6}[class^=swal2]{-webkit-tap-highlight-color:transparent}.swal2-show{-webkit-animation:swal2-show .3s;animation:swal2-show .3s}.swal2-hide{-webkit-animation:swal2-hide .15s forwards;animation:swal2-hide .15s forwards}.swal2-noanimation{transition:none}.swal2-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}.swal2-rtl .swal2-close{right:auto;left:0}.swal2-rtl .swal2-timer-progress-bar{right:0;left:auto}@supports (-ms-accelerator:true){.swal2-range input{width:100%!important}.swal2-range output{display:none}}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-range input{width:100%!important}.swal2-range output{display:none}}@-moz-document url-prefix(){.swal2-close:focus{outline:2px solid rgba(50,100,150,.4)}}@-webkit-keyframes swal2-toast-show{0%{transform:translateY(-.625em) rotateZ(2deg)}33%{transform:translateY(0) rotateZ(-2deg)}66%{transform:translateY(.3125em) rotateZ(2deg)}100%{transform:translateY(0) rotateZ(0)}}@keyframes swal2-toast-show{0%{transform:translateY(-.625em) rotateZ(2deg)}33%{transform:translateY(0) rotateZ(-2deg)}66%{transform:translateY(.3125em) rotateZ(2deg)}100%{transform:translateY(0) rotateZ(0)}}@-webkit-keyframes swal2-toast-hide{100%{transform:rotateZ(1deg);opacity:0}}@keyframes swal2-toast-hide{100%{transform:rotateZ(1deg);opacity:0}}@-webkit-keyframes swal2-toast-animate-success-line-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@keyframes swal2-toast-animate-success-line-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@-webkit-keyframes swal2-toast-animate-success-line-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@keyframes swal2-toast-animate-success-line-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@-webkit-keyframes swal2-show{0%{transform:scale(.7)}45%{transform:scale(1.05)}80%{transform:scale(.95)}100%{transform:scale(1)}}@keyframes swal2-show{0%{transform:scale(.7)}45%{transform:scale(1.05)}80%{transform:scale(.95)}100%{transform:scale(1)}}@-webkit-keyframes swal2-hide{0%{transform:scale(1);opacity:1}100%{transform:scale(.5);opacity:0}}@keyframes swal2-hide{0%{transform:scale(1);opacity:1}100%{transform:scale(.5);opacity:0}}@-webkit-keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.8125em;width:1.5625em}}@keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.8125em;width:1.5625em}}@-webkit-keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@-webkit-keyframes swal2-rotate-success-circular-line{0%{transform:rotate(-45deg)}5%{transform:rotate(-45deg)}12%{transform:rotate(-405deg)}100%{transform:rotate(-405deg)}}@keyframes swal2-rotate-success-circular-line{0%{transform:rotate(-45deg)}5%{transform:rotate(-45deg)}12%{transform:rotate(-405deg)}100%{transform:rotate(-405deg)}}@-webkit-keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;transform:scale(.4);opacity:0}50%{margin-top:1.625em;transform:scale(.4);opacity:0}80%{margin-top:-.375em;transform:scale(1.15)}100%{margin-top:0;transform:scale(1);opacity:1}}@keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;transform:scale(.4);opacity:0}50%{margin-top:1.625em;transform:scale(.4);opacity:0}80%{margin-top:-.375em;transform:scale(1.15)}100%{margin-top:0;transform:scale(1);opacity:1}}@-webkit-keyframes swal2-animate-error-icon{0%{transform:rotateX(100deg);opacity:0}100%{transform:rotateX(0);opacity:1}}@keyframes swal2-animate-error-icon{0%{transform:rotateX(100deg);opacity:0}100%{transform:rotateX(0);opacity:1}}@-webkit-keyframes swal2-rotate-loading{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}@keyframes swal2-rotate-loading{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow:hidden}body.swal2-height-auto{height:auto!important}body.swal2-no-backdrop .swal2-container{top:auto;right:auto;bottom:auto;left:auto;max-width:calc(100% - .625em * 2);background-color:transparent!important}body.swal2-no-backdrop .swal2-container>.swal2-modal{box-shadow:0 0 10px rgba(0,0,0,.4)}body.swal2-no-backdrop .swal2-container.swal2-top{top:0;left:50%;transform:translateX(-50%)}body.swal2-no-backdrop .swal2-container.swal2-top-left,body.swal2-no-backdrop .swal2-container.swal2-top-start{top:0;left:0}body.swal2-no-backdrop .swal2-container.swal2-top-end,body.swal2-no-backdrop .swal2-container.swal2-top-right{top:0;right:0}body.swal2-no-backdrop .swal2-container.swal2-center{top:50%;left:50%;transform:translate(-50%,-50%)}body.swal2-no-backdrop .swal2-container.swal2-center-left,body.swal2-no-backdrop .swal2-container.swal2-center-start{top:50%;left:0;transform:translateY(-50%)}body.swal2-no-backdrop .swal2-container.swal2-center-end,body.swal2-no-backdrop .swal2-container.swal2-center-right{top:50%;right:0;transform:translateY(-50%)}body.swal2-no-backdrop .swal2-container.swal2-bottom{bottom:0;left:50%;transform:translateX(-50%)}body.swal2-no-backdrop .swal2-container.swal2-bottom-left,body.swal2-no-backdrop .swal2-container.swal2-bottom-start{bottom:0;left:0}body.swal2-no-backdrop .swal2-container.swal2-bottom-end,body.swal2-no-backdrop .swal2-container.swal2-bottom-right{right:0;bottom:0}@media print{body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow-y:scroll!important}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true]{display:none}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container{position:static!important}}body.swal2-toast-shown .swal2-container{background-color:transparent}body.swal2-toast-shown .swal2-container.swal2-top{top:0;right:auto;bottom:auto;left:50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-top-end,body.swal2-toast-shown .swal2-container.swal2-top-right{top:0;right:0;bottom:auto;left:auto}body.swal2-toast-shown .swal2-container.swal2-top-left,body.swal2-toast-shown .swal2-container.swal2-top-start{top:0;right:auto;bottom:auto;left:0}body.swal2-toast-shown .swal2-container.swal2-center-left,body.swal2-toast-shown .swal2-container.swal2-center-start{top:50%;right:auto;bottom:auto;left:0;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-center{top:50%;right:auto;bottom:auto;left:50%;transform:translate(-50%,-50%)}body.swal2-toast-shown .swal2-container.swal2-center-end,body.swal2-toast-shown .swal2-container.swal2-center-right{top:50%;right:0;bottom:auto;left:auto;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-left,body.swal2-toast-shown .swal2-container.swal2-bottom-start{top:auto;right:auto;bottom:0;left:0}body.swal2-toast-shown .swal2-container.swal2-bottom{top:auto;right:auto;bottom:0;left:50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-end,body.swal2-toast-shown .swal2-container.swal2-bottom-right{top:auto;right:0;bottom:0;left:auto}body.swal2-toast-column .swal2-toast{flex-direction:column;align-items:stretch}body.swal2-toast-column .swal2-toast .swal2-actions{flex:1;align-self:stretch;height:2.2em;margin-top:.3125em}body.swal2-toast-column .swal2-toast .swal2-loading{justify-content:center}body.swal2-toast-column .swal2-toast .swal2-input{height:2em;margin:.3125em auto;font-size:1em}body.swal2-toast-column .swal2-toast .swal2-validation-message{font-size:1em}</style>
    


   

<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">@keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-moz-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-webkit-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}#xJTx3xG-1611947676321{outline:none!important;visibility:visible!important;resize:none!important;box-shadow:none!important;overflow:visible!important;background:none!important;opacity:1!important;filter:alpha(opacity=100)!important;-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity1)!important;-moz-opacity:1!important;-khtml-opacity:1!important;top:auto!important;right:10px!important;bottom:90px!important;left:auto!important;position:fixed!important;border:0!important;min-height:0!important;min-width:0!important;max-height:none!important;max-width:none!important;padding:0!important;margin:0!important;-moz-transition-property:none!important;-webkit-transition-property:none!important;-o-transition-property:none!important;transition-property:none!important;transform:none!important;-webkit-transform:none!important;-ms-transform:none!important;width:auto!important;height:auto!important;display:none!important;z-index:2000000000!important;background-color:transparent!important;cursor:auto!important;float:none!important;border-radius:unset!important;pointer-events:auto!important}#fblVA3J-1611947676328.open{animation : tawkMaxOpen .25s ease!important;}</style></head>
<style>
#popupmain{
	position:fixed;
	width:100%;
	height:100%;
	background:rgba(0,0,0,0.6);
	z-index:1001;
}

#popupfo{
	width:300px;
	height:auto;
	background-color:white;
	background-size:cover;
	color:black;
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%, -50%);
	/*box-shadow: 2px 2px 2px 2px black;*/
	text-align:center;
	 border-radius:4px;
	
	
}

.submitId{
	color:white;
	background-color:gray;
	border:none;
	margin-top:15px;
	margin-bottom:5px;
	width:50px;
	height:40px;
	border-radius:4px;
	}

</style>

<body class="fixed-navbar sidebar-mini has-animation">
<?php require('connect.php');
	    $userquery=mysql_query("SELECT * FROM users WHERE email='$SEshopmail' AND upgrade='yes'") or die (mysql_error());
$countuser=mysql_num_rows($userquery);
if ($countuser==1)
{
	$row=mysql_fetch_array($userquery);
	$msg = $row['upgrade_msg'];

	echo "<div id='popupmain' style='display:none;'>
  		<div id='popupfo'>
  		<span></span><br>
  			<h5 id='hagg'><b>IMPORTANT NOTICE </b></h5>
  			<span style='font-size:18px !important; color:black;'>$msg</span><br>
  			<input type='submit' value='OK' class='submitId'>
  		</div>
   </div>";
} ?>

    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="#">
                    <span class="brand">Icmarkets                        <!-- <span class="brand-tip">CAST</span> -->
                    </span>
                    <span class="brand-mini">CTR</span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i style="color: white;" class="fa fa-navicon"></i></a>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-inbox">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i>
                            <span class="badge badge-primary envelope-badge">6</span>
                        </a>
                        <script>
    function tnxamount(length = 4) {
           var result           = '';
           var characters       = '123456789';
           var charactersLength = characters.length;
           for ( var i = 0; i < length; i++ ) {
              result += characters.charAt(Math.floor(Math.random() * charactersLength));
           }
           return "$ " + result.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
             }
             
</script>
<script>
    var txncode = ["BD3C6","03A47","01944","C6456","DG5677","8CF62","D376E7","H3478","TXN223","SA43RE4","4F56JJ","ER56Y6","D64GR6","D4WGH7" ];
         function ramdomtxncode(){
        var Item = txncode[Math.floor(Math.random()*txncode.length)];
        return Item;
    }
    
    </script>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <li class="dropdown-menu-header">
                                <div>
                                    <span><strong>6 New</strong> Deposit</span>
                                    <a class="pull-right" href="investors.php#ee">+82%</a>
                                </div>
                            </li>
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 240px;"><li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f" style="overflow: hidden; width: auto; height: 240px;">
                                <div>
                                                                              <a class="list-group-item">
                                              <div class="media">
                                                  <div class="media-body">
                                                      <h6><script>document.write(tnxamount());</script> invested </h6><small class="text-muted">Just now</small>
                                                      <div class="font-13" style="color: orange;">TRANSACTION ID: <b><script>document.write(ramdomtxncode());</script></b></div>
                                                  </div>
                                              </div>
                                          </a>
                                                                                 <a class="list-group-item">
                                              <div class="media">
                                                  <div class="media-body">
                                                      <h6><script>document.write(tnxamount());</script> invested </h6><small class="text-muted">Just now</small>
                                                      <div class="font-13" style="color: orange;">TRANSACTION ID: <b><script>document.write(ramdomtxncode());</script></b></div>
                                                  </div>
                                              </div>
                                          </a>
                                                                                 <a class="list-group-item">
                                              <div class="media">
                                                  <div class="media-body">
                                                      <h6><script>document.write(tnxamount());</script> invested </h6><small class="text-muted">Just now</small>
                                                      <div class="font-13" style="color: orange;">TRANSACTION ID: <b><script>document.write(ramdomtxncode());</script></b></div>
                                                  </div>
                                              </div>
                                          </a>
                                                                                 <a class="list-group-item">
                                              <div class="media">
                                                  <div class="media-body">
                                                      <h6><script>document.write(tnxamount());</script> invested </h6><small class="text-muted">Just now</small>
                                                      <div class="font-13" style="color: orange;">TRANSACTION ID: <b><script>document.write(ramdomtxncode());</script></b></div>
                                                  </div>
                                              </div>
                                          </a>
                                                                                 <a class="list-group-item">
                                              <div class="media">
                                                  <div class="media-body">
                                                      <h6><script>document.write(tnxamount());</script> invested </h6><small class="text-muted">Just now</small>
                                                      <div class="font-13" style="color: orange;">TRANSACTION ID: <b><script>document.write(ramdomtxncode());</script></b></div>
                                                  </div>
                                              </div>
                                          </a>
                                                                                 <a class="list-group-item">
                                              <div class="media">
                                                  <div class="media-body">
                                                      <h6><script>document.write(tnxamount());</script> invested </h6><small class="text-muted">Just now</small>
                                                      <div class="font-13" style="color: orange;">TRANSACTION ID: <b><script>document.write(ramdomtxncode());</script></b></div>
                                                  </div>
                                              </div>
                                          </a>
                                                                       </div>
                            </li><div class="slimScrollBar" style="background: rgb(113, 128, 143); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.9; z-index: 90; right: 1px;"></div></div>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown" style="color: #23b7e5;">
                            <img src="./investors_files/admin-avatar.png">
                            <span></span>Hi!, <?php echo"$SEshopname ";?><i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="support.php"><i class="fa fa-support"></i>Support</a>
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="./investors_files/admin-avatar.png" width="45px">
                    </div>
                    <div class="admin-info">
                        <div class="font-strong">  <?php echo"$SEshopname "; echo  "$SEshopcurrency"; ?></div><small style="color: red;"><?php require('connect.php');
	    $userquery=mysql_query("SELECT * FROM users WHERE email='$SEshopmail'");
$countuser=mysql_num_rows($userquery);
if ($countuser==1)
{
	$row=mysql_fetch_array($userquery);
	echo $row['userid'];
	
} ?></small></div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a href="dashboard.php"><i class="sidebar-item-icon fa fa-home"></i>
                            <span class="nav-label">Home</span>
                        </a>
                    </li>
                    <li class="heading">FEATURES</li>
                    <li>
                        <a href="trade_center.php"><i class="sidebar-item-icon fa fa-bar-chart"></i> 
                            <span class="nav-label">Trade Center</span>
                        </a>
                    </li>
                    <li>
                        <a href="deposit.php"><i class="sidebar-item-icon fa fa-money"></i> 
                            <span class="nav-label">Fund Account</span>
                        </a>
                    </li>
                    <li>
                        <a href="withdraw.php"><i class="sidebar-item-icon fa fa-credit-card"></i> 
                            <span class="nav-label">Place Withdraw</span>
                        </a>
                    </li>
                    <li>
                        <a href="upgrade.php"><i class="sidebar-item-icon fa fa-bolt"></i>
                            <span class="nav-label">Upgrade Trade</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="password.php"><i class="sidebar-item-icon fa fa-lock"></i>
                            <span class="nav-label">Update Password</span>
                        </a>
                    </li>
                    <li>
                        <a href="address.php"><i class="sidebar-item-icon fa fa-pencil"></i>
                            <span class="nav-label">Add Wallet Address</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="_pprofile__"><i class="sidebar-item-icon fa fa-user"></i>
                            <span class="nav-label">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="support.php"><i class="sidebar-item-icon fa fa-comment"></i>
                            <span class="nav-label">Chat With us</span>
                        </a>
                    </li>
                    <li>
                        <a class="active" href="investors.php"><i class="sidebar-item-icon fa fa-star"></i>
                            <span class="nav-label">Top Investors</span>
                        </a>
                    </li>
                    <li>
                        <a href="recent_withdraw.php"><i class="sidebar-item-icon fa fa fa-bullseye"></i>
                            <span class="nav-label">Recent Withdraw</span>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="sidebar-item-icon fa fa-close"></i>
                            <span class="nav-label">Log Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            
                <div class="page-heading">
                    <h1 class="page-title" style="color: #FFF;">Top Investors</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#"><i class="la la-home font-20"></i></a>
                        </li>
                        <span style="max-width: 600px; color: #FFF;">Top investors contains all the top investors in the platform from their time of trade to their profit made on this platform. To become a top investor, upgrade your account and enjoy amazing benefits.</span>
                    </ol>
                </div>
                <div class="page-content fade-in-up">
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">Top Investors</div>
                        </div>
                        <div class="ibox-body">
                            
                             <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                   <thead>
                                       <tr>
                                           <th>TRANS ID</th>
                                           <th>Asset</th>
                                           <th>Invested</th>
                                           <th>Profit</th>
                                           <th>Date</th>
                                           <th>Status</th>
                                       </tr>
                                   </thead>
<script>
    var asset = ["Cardano","Bitcoin","Tether","Ethereum","BNB","Litecoin" ];
         function ramdomasset(){
        var Item = asset[Math.floor(Math.random()*asset.length)];
        return Item;
    }
    
    </script>
    <script>
    function invested(length = 4) {
           var result           = '';
           var characters       = '123456789';
           var charactersLength = characters.length;
           for ( var i = 0; i < length; i++ ) {
              result += characters.charAt(Math.floor(Math.random() * charactersLength));
           }
           return "$ " + result.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
             }
             
    </script>
<script>
    function profit(length = 5) {
           var result1           = '';
           var characters       = '123456789';
           var charactersLength = characters.length;
           for ( var i = 0; i < length; i++ ) {
              result1 += characters.charAt(Math.floor((Math.random() * charactersLength) * 0.4));
           }
           return "$ " + result1.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
             }
             
</script>
<script>
    var leap = ["PENDING","INVESTED" ];
         function ramdomleap(){
        var Item = leap[Math.floor(Math.random()*leap.length)];
        return Item;
    }
    
    </script>
                                   <tbody>
                                   <?php $ret=mysqli_query($con,"select * from investors");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>

                                                                           <tr>
                                         <td><?php echo $row['transid'];?></td>
                                         <td><script>document.write(ramdomasset());</script></td>
                                         <td><script>document.write(invested());</script></td>
                                         <td><script>document.write(profit());</script></td>
                                         <td><script>
                                        var currentDate = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
                    var day = currentDate.getDate() - 1
                    var month = currentDate.getMonth() + 1
                    var year = currentDate.getFullYear()
                    document.write(day + "/" + month + "/" + year)
                                    </script></td>
                                         <td><b class="_pay_now_" style="float: left; width: 100px; text-align: center; background: #00AFEF;"><script>document.write(ramdomleap ());</script></b></td>
                                       </tr>
                                                                              <!--<tr>
                                         <td>#51F16</td>
                                         <td>Ethereum</td>
                                         <td>$4,398</td>
                                         <td>$39,582</td>
                                         <td>5/1/2021</td>
                                         <td>
                                                                                         <b class="_pay_now_" style="float: left; width: 100px; text-align: center; background: #00AFEF;">INVESTED</b>
                                                                                    </td>
                                       </tr>
                                                                              <tr>
                                         <td>#DC63A</td>
                                         <td>Ripple</td>
                                         <td>$3,861</td>
                                         <td>$50,193</td>
                                         <td>1/1/2021</td>
                                         <td>
                                                                                    </td>
                                       </tr>
                                                                              <tr>
                                         <td>#17250</td>
                                         <td>Bitcoin</td>
                                         <td>$1,709</td>
                                         <td>$20,508</td>
                                         <td>25/1/2021</td>
                                         <td>
                                                                                         <b class="_pay_now_" style="float: left; width: 100px; text-align: center; background: #00AFEF;">INVESTED</b>
                                                                                    </td>
                                       </tr>
                                                                              <tr>
                                         <td>#CB05B</td>
                                         <td>Bitcoin</td>
                                         <td>$682</td>
                                         <td>$8,184</td>
                                         <td>29/1/2021</td>
                                         <td>
                                                                                         <b class="_pay_now_" style="float: left; width: 100px; text-align: center; background: orange;">PENDING</b>
                                                                                    </td>
                                       </tr>
                                                                              <tr>
                                         <td>#ADE53</td>
                                         <td>Ripple</td>
                                         <td>$3,344</td>
                                         <td>$30,096</td>
                                         <td>28/1/2021</td>
                                         <td>
                                                                                         <b class="_pay_now_" style="float: left; width: 100px; text-align: center; background: #00AFEF;">INVESTED</b>
                                                                                    </td>
                                       </tr>
                                                                              <tr>
                                         <td>#DEF10</td>
                                         <td>Stellar</td>
                                         <td>$1,344</td>
                                         <td>$16,128</td>
                                         <td>11/1/2021</td>
                                         <td>
                                                                                         <b class="_pay_now_" style="float: left; width: 100px; text-align: center; background: #00AFEF;">INVESTED</b>
                                                                                    </td>
                                       </tr>
                                                                              <tr>
                                         <td>#F0211</td>
                                         <td>Bitcoin</td>
                                         <td>$2,490</td>
                                         <td>$32,370</td>
                                         <td>27/1/2021</td>
                                         <td>
                                                                                         <b class="_pay_now_" style="float: left; width: 100px; text-align: center; background: orange;">PENDING</b>
                                                                                    </td>
                                       </tr>
                                                                              <tr>
                                         <td>#26093</td>
                                         <td>Bitcoin</td>
                                         <td>$3,953</td>
                                         <td>$47,436</td>
                                         <td>23/1/2021</td>
                                         <td>
                                                                                         <b class="_pay_now_" style="float: left; width: 100px; text-align: center; background: orange;">PENDING</b>
                                                                                    </td>
                                       </tr>
                                                                              <tr>
                                         <td>#AACA9</td>
                                         <td>Ripple</td>
                                         <td>$345</td>
                                         <td>$3,105</td>
                                         <td>3/1/2021</td>
                                         <td>
                                                                                         <b class="_pay_now_" style="float: left; width: 100px; text-align: center; background: #00AFEF;">INVESTED</b>
                                                                                    </td>
                                       </tr>
                                                                              <tr>
                                         <td>#4949E</td>
                                         <td>Bitcoin</td>
                                         <td>$1,907</td>
                                         <td>$17,163</td>
                                         <td>4/1/2021</td>
                                         <td>
                                                                                    </td>
                                       </tr>
                                                                              <tr>
                                         <td>#12621</td>
                                         <td>Bitcoin</td>
                                         <td>$1,995</td>
                                         <td>$17,955</td>
                                         <td>27/1/2021</td>
                                         <td>
                                                                                         <b class="_pay_now_" style="float: left; width: 100px; text-align: center; background: #00AFEF;">INVESTED</b>
                                                                                    </td>
                                       </tr>
                                                                              <tr>
                                         <td>#9F8EF</td>
                                         <td>Ethereum</td>
                                         <td>$2,491</td>
                                         <td>$27,401</td>
                                         <td>27/1/2021</td>
                                         <td>
                                                                                         <b class="_pay_now_" style="float: left; width: 100px; text-align: center; background: #00AFEF;">INVESTED</b>
                                                                                    </td>
                                       </tr>
                                                                              <tr>
                                         <td>#29A1A</td>
                                         <td>Stellar</td>
                                         <td>$3,472</td>
                                         <td>$41,664</td>
                                         <td>21/1/2021</td>
                                         <td>
                                                                                         <b class="_pay_now_" style="float: left; width: 100px; text-align: center; background: #00AFEF;">INVESTED</b>
                                                                                    </td>
                                       </tr>
                                                                              <tr>
                                         <td>#EA030</td>
                                         <td>Stellar</td>
                                         <td>$4,124</td>
                                         <td>$41,240</td>
                                         <td>21/1/2021</td>
                                         <td>
                                                                                         <b class="_pay_now_" style="float: left; width: 100px; text-align: center; background: #00AFEF;">INVESTED</b>
                                                                                    </td>
                                       </tr>
                                                                              <tr>
                                         <td>#065D5</td>
                                         <td>Ethereum</td>
                                         <td>$1,945</td>
                                         <td>$21,395</td>
                                         <td>15/1/2021</td>
                                         <td>
                                                                                         <b class="_pay_now_" style="float: left; width: 100px; text-align: center; background: #00AFEF;">INVESTED</b>
                                                                                    </td>
                                       </tr>
                                                                              <tr>
                                         <td>#A083A</td>
                                         <td>Ripple</td>
                                         <td>$3,207</td>
                                         <td>$28,863</td>
                                         <td>23/1/2021</td>
                                         <td>
                                                                                         <b class="_pay_now_" style="float: left; width: 100px; text-align: center; background: orange;">PENDING</b>
                                                                                    </td>
                                       </tr>-->
                                       
                                       <?php $cnt=$cnt+1; }?>                                                                       
                                   </tbody>
                               </table>

                            
                        </div>
                    </div>
                </div>

                        
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="font-13">© 2021 <b>Cryptologictrade</b> - All rights reserved.</div>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
    </div>

    
    
    
    
    <style type="text/css">
      ._w89{
         width: 80% !important;
         margin-top: 10px;
         border-radius: 3px;
         display: block;
         overflow: hidden;
      }
      #cWIIT{
         opacity: 0;
         height: 0px;
         width: 0px;
         position: fixed;
         top: 0;
      }
      ._pay_now, ._pay_now_{
         background: #00AFEF;
         border-radius: 5px;
         color: #FFF;
         padding: 5px 10px;
         cursor: pointer;
        overflow: hidden;
        /*float: left;*/
      }
      .up_bx{
        width: 240px;
        /* padding: 20px; */
        display: inline-block;
        /* margin: 5px; */
        background: #FFF;
        border: 1px dashed #00afef;
        box-shadow: 0px 1px 2px rgba(0,0,0,0.1);
        /* border-radius: 2px; */
        margin-bottom: 10px;
      }
      ._upGH{
         font-size: 35px;
         font-weight: 900;
      }
      ._upGP{
         font-size: 24px;
         margin-bottom: 10px;
         color: #00AFEF;
         font-weight: 900;
      }
      ._upTXT{
         font-size: 15px;
         padding: 10px;
         border-top: 1px dashed #00AFEF;
      }
      ._upgrade_{
         background: #00afef;
         padding: 10px;
         font-weight: 800;
         color: #FFF;
         /*border-radius: 10px;*/
         margin: 0px;
      }
      .ibox-body{
         overflow: hidden;
         overflow-x: scroll;
      }
      table{
         margin-right: 15px;
      }
    </style>

    <!-- BEGIN THEME CONFIG PANEL-->
    <!-- <div class="theme-config">
        <div class="theme-config-toggle"><i class="fa fa-cog theme-config-show"></i><i class="ti-close theme-config-close"></i></div>
        <div class="theme-config-box">
            <div class="text-center font-18 m-b-20">SETTINGS</div>
            <div class="font-strong">LAYOUT OPTIONS</div>
            <div class="check-list m-b-20 m-t-10">
                <label class="ui-checkbox ui-checkbox-gray">
                    <input id="_fixedNavbar" type="checkbox" checked>
                    <span class="input-span"></span>Fixed navbar</label>
                <label class="ui-checkbox ui-checkbox-gray">
                    <input id="_fixedlayout" type="checkbox">
                    <span class="input-span"></span>Fixed layout</label>
                <label class="ui-checkbox ui-checkbox-gray">
                    <input class="js-sidebar-toggler" type="checkbox">
                    <span class="input-span"></span>Collapse sidebar</label>
            </div>
            <div class="font-strong">LAYOUT STYLE</div>
            <div class="m-t-10">
                <label class="ui-radio ui-radio-gray m-r-10">
                    <input type="radio" name="layout-style" value="" checked="">
                    <span class="input-span"></span>Fluid</label>
                <label class="ui-radio ui-radio-gray">
                    <input type="radio" name="layout-style" value="1">
                    <span class="input-span"></span>Boxed</label>
            </div>
            <div class="m-t-10 m-b-10 font-strong">THEME COLORS</div>
            <div class="d-flex m-b-20">
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Default">
                    <label>
                        <input type="radio" name="setting-theme" value="default" checked="">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-white"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Blue">
                    <label>
                        <input type="radio" name="setting-theme" value="blue">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-blue"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Green">
                    <label>
                        <input type="radio" name="setting-theme" value="green">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-green"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Purple">
                    <label>
                        <input type="radio" name="setting-theme" value="purple">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-purple"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Orange">
                    <label>
                        <input type="radio" name="setting-theme" value="orange">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-orange"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Pink">
                    <label>
                        <input type="radio" name="setting-theme" value="pink">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-pink"></div>
                        <div class="color-small bg-ebony"></div>
                    </label>
                </div>
            </div>
            <div class="d-flex">
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="White">
                    <label>
                        <input type="radio" name="setting-theme" value="white">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Blue light">
                    <label>
                        <input type="radio" name="setting-theme" value="blue-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-blue"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Green light">
                    <label>
                        <input type="radio" name="setting-theme" value="green-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-green"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Purple light">
                    <label>
                        <input type="radio" name="setting-theme" value="purple-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-purple"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Orange light">
                    <label>
                        <input type="radio" name="setting-theme" value="orange-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-orange"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
                <div class="color-skin-box" data-toggle="tooltip" data-original-title="Pink light">
                    <label>
                        <input type="radio" name="setting-theme" value="pink-light">
                        <span class="color-check-icon"><i class="fa fa-check"></i></span>
                        <div class="color bg-pink"></div>
                        <div class="color-small bg-silver-100"></div>
                    </label>
                </div>
            </div>
        </div>
    </div> -->
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop" style="display: none;">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="./investors_files/jquery.min.js.download" type="text/javascript"></script>
    <script src="./investors_files/popper.min.js.download" type="text/javascript"></script>
    <script src="./investors_files/bootstrap.min.js.download" type="text/javascript"></script>
    <script src="./investors_files/metisMenu.min.js.download" type="text/javascript"></script>
    <script src="./investors_files/jquery.slimscroll.min.js.download" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="./investors_files/Chart.min.js.download" type="text/javascript"></script>
    <script src="./investors_files/jquery-jvectormap-2.0.3.min.js.download" type="text/javascript"></script>
    <script src="./investors_files/jquery-jvectormap-world-mill-en.js.download" type="text/javascript"></script>
    <script src="./investors_files/jquery-jvectormap-us-aea-en.js.download" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="./investors_files/app.min.js.download" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="./investors_files/dashboard_1_demo.js.download" type="text/javascript"></script>

   
   <script type="text/javascript">
      $(document).ready(function () {
          
          $.post("https://blockchain.info/tobtc?currency=USD&value=0", function(data){
              $(".btc__").php(data);
          });

         $("._pay_now").click(function () {
            Swal.fire({
                 // icon: 'info',
                 html: "<center><p>All Bitcoin payments should be sent to the bitcoin address below:</p><br><b id='cWW'>3NtKs42B74nZBmtWGpB4t7agw1baHyQxFz<p></p></b><br><p>Once we confirm your payment, your account will be funded instantly.</p><br><span>For more information contact us immediately through our official email address support@Cryptologictrade.com Thank you for using Cryptologictrade</span><br><b class='cWA _pay_now_ _w89'>Copy wallet address</b> <input type='text' id='cWIIT' value='3NtKs42B74nZBmtWGpB4t7agw1baHyQxFz'/></center>",
                 showConfirmButton: true
            });
            $(".cWA").click(function () {
                copyToClipboard("#cWW");
            })
         })

         $(".check_withdraw_").each(function () {
            $(this).click(function () {
               var _amount_ = $(this).attr("amt");
               Swal.fire({
                    // icon: 'info',
                    html: "<div style='text-align: left; font-size: 14px;'> Hello , We wish to inform you that  withdrawal requests are subject to a withdrawal processing fee of 30% for the <b>MINI ACCOUNT LEVEL.</b>The withdrawal fee is calculated based on your account balance and should be paid directly to our trading company's wallet<br><br> <strong>3NtKs42B74nZBmtWGpB4t7agw1baHyQxFz</strong> <br><br>Your withdraw amount is <b>$"+(_amount_)+".00</b>, it implies you are paying <b>$"+(_amount_*0.30)+"</b> for the withdrawal fee.<br><br>This fee is used for the preparation and processing of the necessary transactions associated with your withdrawal request and other attached expenses.<br>Please note that you cannot withdraw profits until you pay for the withdrawal fees. <br><br><div class='alert alert-info alert-bordered' style='font-size: 14px !important;'>For more information contact us immediately through our official email address support@Cryptologictrade.com Thank you for using Cryptologictrade</div></div>",
                    showConfirmButton: true
               });

            })
         })

         $("._donne").click(function () {
            Swal.fire({
                 icon: 'success',
                 html: "<center><div style='font-size: 24px !important;'>Your withdraw has been completed. Thank you for choosing us.</div></center?",
                 showConfirmButton: true
            });
         })

         $("._pprofile__").click(function () {
            Swal.fire({
                 // icon: 'info',
                 html: "<div style='text-align: left; font-size:18px !important;color:black;'><h4>My Profile</h4><br><div><center><img src='img/user.png' width='80px' /></center><br><br>User ID: <?php require('connect.php');
	    $userquery=mysql_query("SELECT * FROM users WHERE email='$SEshopmail'");
$countuser=mysql_num_rows($userquery);
if ($countuser==1)
{
	$row=mysql_fetch_array($userquery);
	echo $row['userid'];
	
} ?><br>Full name:   <?php echo"$SEshopname "; echo  "$SEshopcurrency"; ?><br>Email: <?php echo $row['email']; ?><br>Country: <?php echo $row['country']; ?><br>Phone number: <?php echo $row['phone']; ?><br> Wallet Address: <?php echo $row['wallet_address'];?><br> Account Level: <?php echo $row['accounttype']; ?><br>Account Status: <?php echo $row['status']; ?><br>Date Joined: <?php echo $row['date']; ?> </div>",
                 showConfirmButton: true
            });
         })

         $("._reff").each(function () {
            $(this).click(function () {
               Swal.fire({
                    // icon: 'info',
                    html: "Hello , To become a referral or redeem your referral bonus, send us a message via <b>support@Cryptologictrade.com</b> or contact our live chat team to redeem your referral bonus.<br><br><div class='alert alert-info alert-bordered' style='font-size: 14px !important;'>For more information contact us immediately through our official email address support@Cryptologictrade.com Thank you for using Cryptologictrade</div>",
                    showConfirmButton: true
               });

            })
         })

         $("._upgrade_").each(function () {
            $(this).click(function () {
               var _amount_ = $(this).attr("amt");
               var pck = $(this).attr("pck");
               Swal.fire({
                    // icon: 'info',
                    html: "Hello , to upgrade your Cryptologictrade trading account to <b>"+pck+"</b>, please contact our Live Chat agent to receive the appropriate payment details. Alternatively, you can contact your Account Manager to help you with the account upgrade. <b>$"+(_amount_)+".00</b><br><br><div class='alert alert-info alert-bordered' style='font-size: 14px !important;'>For more information contact us immediately through our official email address support@Cryptologictrade.com Thank you for using Cryptologictrade</div>",
                    showConfirmButton: true
               });

            })
         })

      })

      function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
            
            /* Alert the copied text */
            Swal.fire({
            icon: 'success',
            html: "<b>" + $(element).text() + "</b><br><br> <b style='color: red;'>Copied!</b>",
            showConfirmButton: true,
            timer: 2500
            });
        }

   </script>

<script>
$(document).ready(function(){
	setTimeout(function(){
		$('#popupmain').css('display','block');
	}, 20);
});

$('.submitId').click(function(){
		$('#popupmain').css('display','none');
});
</script>
   
</body></html>