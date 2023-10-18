<!DOCTYPE html>
  <html lang="zh-CN"><head><meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <meta name="robots" content="noindex, nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="Cache-Control" content="max-age=7200">
  <meta name="description" content="检测中">
  <meta name="keywords" content="检测中">
  <title>正在检测你浏览器是否安全</title>
  <style type="text/css">
    html,
    body {
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
    }

    body {
      background-color: #ffffff;
      font-family: Helvetica, Arial, sans-serif;
      font-size: 100%;
    }

    h1 {
      font-size: 1.5em;
      color: #404040;
      text-align: center;
    }

    p {
      font-size: 1em;
      color: #404040;
      text-align: center;
      margin: 10px 0 0 0;
    }

    #spinner {
      margin: 0 auto 30px auto;
      display: block;
    }

    .attribution {
      margin-top: 20px;
    }

    #cssload-wrapper {
      position: absolute;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      z-index: 15;
      overflow: hidden;
    }

    .cssload-loader {
      width: 206px;
      height: 206px;
      border: 1px rgb(0, 0, 0) solid;
      position: absolute;
      left: 50%;
      top: 50%;
      margin: -250px 0 0 -103px;
      border-radius: 50%;
      -o-border-radius: 50%;
      -ms-border-radius: 50%;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
    }

    .cssload-loader .cssload-loading {
      font-size: 14px;
      position: absolute;
      width: 100%;
      text-align: center;
      line-height: 19px;
      font-family: 'Century Gothic', sans-serif;
      font-style: italic;
      left: 0;
      top: 50%;
      margin-top: 28px;
      color: rgb(0, 0, 0);
      font-weight: bold;
      text-transform: uppercase;
      -o-text-transform: uppercase;
      -ms-text-transform: uppercase;
      -webkit-text-transform: uppercase;
      -moz-text-transform: uppercase;
    }

    .cssload-loader-circle-1 {
      width: 190px;
      height: 190px;
      left: 7px;
      top: 7px;
      border: 1px rgb(0, 0, 0) solid;
      position: absolute;
      border-right-color: transparent;
      border-radius: 50%;
      -o-border-radius: 50%;
      -ms-border-radius: 50%;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      animation: spin 3.45s linear infinite;
      -o-animation: spin 3.45s linear infinite;
      -ms-animation: spin 3.45s linear infinite;
      -webkit-animation: spin 3.45s linear infinite;
      -moz-animation: spin 3.45s linear infinite;
    }

    .cssload-loader-circle-2 {
      width: 173px;
      height: 173px;
      left: 7px;
      top: 7px;
      border: 1px transparent solid;
      position: absolute;
      border-right-color: rgb(232, 21, 18);
      border-radius: 50%;
      -o-border-radius: 50%;
      -ms-border-radius: 50%;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      animation: spin 5.75s linear infinite;
      -o-animation: spin 5.75s linear infinite;
      -ms-animation: spin 5.75s linear infinite;
      -webkit-animation: spin 5.75s linear infinite;
      -moz-animation: spin 5.75s linear infinite;
    }

    .cssload-loader .cssload-line {
      width: 14px;
      height: 3px;
      background: rgb(0, 0, 0);
      position: absolute;
    }

    .cssload-loader .cssload-line:nth-child(1) {
      left: 22px;
      top: 50%;
      margin-top: -1px;
    }

    .cssload-loader .cssload-line:nth-child(2) {
      transform: rotate(45deg);
      -o-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      -webkit-transform: rotate(45deg);
      -moz-transform: rotate(45deg);
      left: 45px;
      top: 45px;
    }

    .cssload-loader .cssload-line:nth-child(3) {
      top: 22px;
      left: 50%;
      width: 3px;
      height: 14px;
    }

    .cssload-loader .cssload-line:nth-child(4) {
      transform: rotate(135deg);
      -o-transform: rotate(135deg);
      -ms-transform: rotate(135deg);
      -webkit-transform: rotate(135deg);
      -moz-transform: rotate(135deg);
      right: 45px;
      top: 45px;
    }

    .cssload-loader .cssload-line:nth-child(5) {
      right: 22px;
      top: 50%;
      margin-top: -1px;
    }

    .cssload-loader .cssload-line:nth-child(6) {
      transform: rotate(45deg);
      -o-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      -webkit-transform: rotate(45deg);
      -moz-transform: rotate(45deg);
      right: 45px;
      bottom: 45px;
      background: rgb(232, 21, 18);
    }

    .cssload-loader .cssload-subline {
      position: absolute;
      width: 4px;
      height: 3px;
      background: rgb(0, 0, 0);
    }

    .cssload-loader .cssload-subline:nth-child(7) {
      transform: rotate(22.5deg);
      -o-transform: rotate(22.5deg);
      -ms-transform: rotate(22.5deg);
      -webkit-transform: rotate(22.5deg);
      -moz-transform: rotate(22.5deg);
      left: 29px;
      top: 69px;
    }

    .cssload-loader .cssload-subline:nth-child(8) {
      transform: rotate(67.5deg);
      -o-transform: rotate(67.5deg);
      -ms-transform: rotate(67.5deg);
      -webkit-transform: rotate(67.5deg);
      -moz-transform: rotate(67.5deg);
      left: 69px;
      top: 29px;
    }

    .cssload-loader .cssload-subline:nth-child(9) {
      transform: rotate(112.5deg);
      -o-transform: rotate(112.5deg);
      -ms-transform: rotate(112.5deg);
      -webkit-transform: rotate(112.5deg);
      -moz-transform: rotate(112.5deg);
      right: 69px;
      top: 29px;
    }

    .cssload-loader .cssload-subline:nth-child(10) {
      transform: rotate(157.5deg);
      -o-transform: rotate(157.5deg);
      -ms-transform: rotate(157.5deg);
      -webkit-transform: rotate(157.5deg);
      -moz-transform: rotate(157.5deg);
      right: 29px;
      top: 69px;
    }

    .cssload-loader .cssload-subline:nth-child(11) {
      transform: rotate(22.5deg);
      -o-transform: rotate(22.5deg);
      -ms-transform: rotate(22.5deg);
      -webkit-transform: rotate(22.5deg);
      -moz-transform: rotate(22.5deg);
      right: 28px;
      bottom: 67px;
      background: rgb(232, 21, 18);
    }

    .cssload-loader .cssload-needle {
      width: 19px;
      height: 19px;
      border: 1px rgb(0, 0, 0) solid;
      position: absolute;
      left: 50%;
      top: 50%;
      margin: -11px 0 0 -11px;
      z-index: 1;
      border-radius: 50%;
      -o-border-radius: 50%;
      -ms-border-radius: 50%;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      animation: pegIt 3.45s infinite ease-in-out;
      -o-animation: pegIt 3.45s infinite ease-in-out;
      -ms-animation: pegIt 3.45s infinite ease-in-out;
      -webkit-animation: pegIt 3.45s infinite ease-in-out;
      -moz-animation: pegIt 3.45s infinite ease-in-out;
    }

    .cssload-loader .cssload-needle:before {
      content: "";
      width: 0;
      height: 0;
      border-style: solid;
      border-width: 4.5px 69px 4.5px 0;
      border-color: transparent rgb(232, 21, 18) transparent transparent;
      position: absolute;
      right: 50%;
      top: 50%;
      margin: -4.5px 0 0 0;
      border-radius: 0 50% 50% 0;
      -o-border-radius: 0 50% 50% 0;
      -ms-border-radius: 0 50% 50% 0;
      -webkit-border-radius: 0 50% 50% 0;
      -moz-border-radius: 0 50% 50% 0;
    }





    @keyframes pegIt {
      0% {
        transform: rotate(0deg);
      }
      16% {
        transform: rotate(75deg);
      }
      25% {
        transform: rotate(55deg);
      }
      30% {
        transform: rotate(90deg);
      }
      36% {
        transform: rotate(170deg);
      }
      42% {
        transform: rotate(150deg);
      }
      50% {
        transform: rotate(227deg);
      }
      100% {
        transform: rotate(0deg);
      }
    }

    @-o-keyframes pegIt {
      0% {
        -o-transform: rotate(0deg);
      }
      16% {
        -o-transform: rotate(75deg);
      }
      25% {
        -o-transform: rotate(55deg);
      }
      30% {
        -o-transform: rotate(90deg);
      }
      36% {
        -o-transform: rotate(170deg);
      }
      42% {
        transform: rotate(150deg);
      }
      50% {
        -o-transform: rotate(227deg);
      }
      100% {
        -o-transform: rotate(0deg);
      }
    }

    @-ms-keyframes pegIt {
      0% {
        -ms-transform: rotate(0deg);
      }
      16% {
        -ms-transform: rotate(75deg);
      }
      25% {
        -ms-transform: rotate(55deg);
      }
      30% {
        -ms-transform: rotate(90deg);
      }
      36% {
        -ms-transform: rotate(170deg);
      }
      42% {
        transform: rotate(150deg);
      }
      50% {
        -ms-transform: rotate(227deg);
      }
      100% {
        -ms-transform: rotate(0deg);
      }
    }

    @-webkit-keyframes pegIt {
      0% {
        -webkit-transform: rotate(0deg);
      }
      16% {
        -webkit-transform: rotate(75deg);
      }
      25% {
        -webkit-transform: rotate(55deg);
      }
      30% {
        -webkit-transform: rotate(90deg);
      }
      36% {
        -webkit-transform: rotate(170deg);
      }
      42% {
        transform: rotate(150deg);
      }
      50% {
        -webkit-transform: rotate(227deg);
      }
      100% {
        -webkit-transform: rotate(0deg);
      }
    }

    @-moz-keyframes pegIt {
      0% {
        -moz-transform: rotate(0deg);
      }
      16% {
        -moz-transform: rotate(75deg);
      }
      25% {
        -moz-transform: rotate(55deg);
      }
      30% {
        -moz-transform: rotate(90deg);
      }
      36% {
        -moz-transform: rotate(170deg);
      }
      42% {
        transform: rotate(150deg);
      }
      50% {
        -moz-transform: rotate(227deg);
      }
      100% {
        -moz-transform: rotate(0deg);
      }
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
      }
    }

    @-o-keyframes spin {
      0% {
        -o-transform: rotate(0deg);
      }
      100% {
        -o-transform: rotate(360deg);
      }
    }

    @-ms-keyframes spin {
      0% {
        -ms-transform: rotate(0deg);
      }
      100% {
        -ms-transform: rotate(360deg);
      }
    }

    @-webkit-keyframes spin {
      0% {
        -webkit-transform: rotate(0deg);
      }
      100% {
        -webkit-transform: rotate(360deg);
      }
    }

    @-moz-keyframes spin {
      0% {
        -moz-transform: rotate(0deg);
      }
      100% {
        -moz-transform: rotate(360deg);
      }
    }
  </style>
</head>

<body>
  <table width="100%" height="100%" cellpadding="20">
    <tbody><tr>
      <td align="center" valign="middle">
        <div class="up-browser-verification up-im-under-attack">
          <noscript><h1 data-translate="turn_on_js" style="color:#bd2426;">Please turn JavaScript on and reload the page.</h1></noscript>
          <div id="anticc-content">
            <div id="cssload-wrapper">
              <div class="cssload-loader">
                <div class="cssload-line"></div>
                <div class="cssload-line"></div>
                <div class="cssload-line"></div>
                <div class="cssload-line"></div>
                <div class="cssload-line"></div>
                <div class="cssload-line"></div>
                <div class="cssload-subline"></div>
                <div class="cssload-subline"></div>
                <div class="cssload-subline"></div>
                <div class="cssload-subline"></div>
                <div class="cssload-subline"></div>
                <div class="cssload-loader-circle-1">
                  <div class="cssload-loader-circle-2"></div>
                </div>
                <div class="cssload-needle"></div>
                <div class="cssload-loading">loading</div>
              </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1><span data-translate="checking_browser">当前客户端正在接受检测</span></h1>
            <h2><span data-translate="checking_browser">正在检测您浏览器是否安全.....</span></h2>
            <span style="color:red;font-family:&#x27;Microsoft YaHei&#x27;">检测完毕自动跳转中</span>
         
          </div>
        </div>
      </td>
    </tr>
  </tbody></table>
<!--跳转目标地址自行更换-->
<meta http-equiv="refresh" content="2; url=www.baidu.com">	
</body></html>
/////by杺楠
////公益域名分发https://hkj66.lmkm.asia