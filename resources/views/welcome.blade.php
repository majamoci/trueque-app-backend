
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="mobile-web-app-capable" content="yes">
    <title>
        Trueque API DOCS - HackMD
    </title>
    <link rel="icon" type="image/png" href="https://hackmd.io/favicon.png">
    <link rel="apple-touch-icon" href="https://hackmd.io/apple-touch-icon.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha256-916EbMg70RQy9LHiGkXzG8hSg9EdNy97GazNG/aiY1w=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" integrity="sha256-3iu9jgsy9TpTwXKb7bNQzqWekRX7pPK+2OLj3R922fo=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.5.0/octicons.min.css" integrity="sha256-QiWfLIsCT02Sdwkogf6YMiQlj4NE84MKkzEMkZnMGdg=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/themes/prism.min.css" integrity="sha256-vtR0hSWRc3Tb26iuN2oZHt3KRUomwTufNIf5/4oeCyg=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@hackmd/emojify.js@2.1.0/dist/css/basic/emojify.min.css" integrity="sha256-UOrvMOsSDSrW6szVLe8ZDZezBxh5IoIfgTwdNDgTjiU=" crossorigin="anonymous" />
    <style>
        @charset "UTF-8";@import url(https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i|Source+Code+Pro:300,400,500|Source+Sans+Pro:300,300i,400,400i,600,600i|Source+Serif+Pro&subset=latin-ext);.hljs{display:block;background:#fff;padding:.5em;color:#333;overflow-x:auto}.hljs-comment,.hljs-meta{color:#969896}.hljs-emphasis,.hljs-quote,.hljs-string,.hljs-strong,.hljs-template-variable,.hljs-variable{color:#df5000}.hljs-keyword,.hljs-selector-tag,.hljs-type{color:#a71d5d}.hljs-attribute,.hljs-bullet,.hljs-literal,.hljs-number,.hljs-symbol{color:#0086b3}.hljs-built_in,.hljs-builtin-name{color:#005cc5}.hljs-name,.hljs-section{color:#63a35c}.hljs-tag{color:#333}.hljs-attr,.hljs-selector-attr,.hljs-selector-class,.hljs-selector-id,.hljs-selector-pseudo,.hljs-title{color:#795da3}.hljs-addition{color:#55a532;background-color:#eaffea}.hljs-deletion{color:#bd2c00;background-color:#ffecec}.hljs-link{text-decoration:underline}.markdown-body{font-size:16px;line-height:1.5;word-wrap:break-word}.markdown-body:after,.markdown-body:before{display:table;content:""}.markdown-body:after{clear:both}.markdown-body>:first-child{margin-top:0!important}.markdown-body>:last-child{margin-bottom:0!important}.markdown-body a:not([href]){color:inherit;text-decoration:none}.markdown-body .absent{color:#c00}.markdown-body .anchor{float:left;padding-right:4px;margin-left:-20px;line-height:1}.markdown-body .anchor:focus{outline:none}.markdown-body blockquote,.markdown-body dl,.markdown-body ol,.markdown-body p,.markdown-body pre,.markdown-body table,.markdown-body ul{margin-top:0;margin-bottom:16px}.markdown-body hr{height:.25em;padding:0;margin:24px 0;background-color:#e7e7e7;border:0}.markdown-body blockquote{font-size:16px;padding:0 1em;color:#777;border-left:.25em solid #ddd}.markdown-body blockquote>:first-child{margin-top:0}.markdown-body blockquote>:last-child{margin-bottom:0}.markdown-body kbd,.popover kbd{display:inline-block;padding:3px 5px;font-size:11px;line-height:10px;color:#555;vertical-align:middle;background-color:#fcfcfc;border:1px solid #ccc;border-bottom-color:#bbb;border-radius:3px;box-shadow:inset 0 -1px 0 #bbb}.markdown-body .loweralpha{list-style-type:lower-alpha}.markdown-body h1,.markdown-body h2,.markdown-body h3,.markdown-body h4,.markdown-body h5,.markdown-body h6{margin-top:24px;margin-bottom:16px;font-weight:600;line-height:1.25}.markdown-body h1 .octicon-link,.markdown-body h2 .octicon-link,.markdown-body h3 .octicon-link,.markdown-body h4 .octicon-link,.markdown-body h5 .octicon-link,.markdown-body h6 .octicon-link{color:#000;vertical-align:middle;visibility:hidden}.markdown-body h1:hover .anchor,.markdown-body h2:hover .anchor,.markdown-body h3:hover .anchor,.markdown-body h4:hover .anchor,.markdown-body h5:hover .anchor,.markdown-body h6:hover .anchor{text-decoration:none}.markdown-body h1:hover .anchor .octicon-link,.markdown-body h2:hover .anchor .octicon-link,.markdown-body h3:hover .anchor .octicon-link,.markdown-body h4:hover .anchor .octicon-link,.markdown-body h5:hover .anchor .octicon-link,.markdown-body h6:hover .anchor .octicon-link{visibility:visible}.markdown-body h1 code,.markdown-body h1 tt,.markdown-body h2 code,.markdown-body h2 tt,.markdown-body h3 code,.markdown-body h3 tt,.markdown-body h4 code,.markdown-body h4 tt,.markdown-body h5 code,.markdown-body h5 tt,.markdown-body h6 code,.markdown-body h6 tt{font-size:inherit}.markdown-body h1{font-size:2em}.markdown-body h1,.markdown-body h2{padding-bottom:.3em;border-bottom:1px solid #eee}.markdown-body h2{font-size:1.5em}.markdown-body h3{font-size:1.25em}.markdown-body h4{font-size:1em}.markdown-body h5{font-size:.875em}.markdown-body h6{font-size:.85em;color:#777}.markdown-body ol,.markdown-body ul{padding-left:2em}.markdown-body ol.no-list,.markdown-body ul.no-list{padding:0;list-style-type:none}.markdown-body ol ol,.markdown-body ol ul,.markdown-body ul ol,.markdown-body ul ul{margin-top:0;margin-bottom:0}.markdown-body li>p{margin-top:16px}.markdown-body li+li{padding-top:.25em}.markdown-body dl{padding:0}.markdown-body dl dt{padding:0;margin-top:16px;font-size:1em;font-style:italic;font-weight:700}.markdown-body dl dd{padding:0 16px;margin-bottom:16px}.markdown-body table{display:block;width:100%;overflow:auto;word-break:normal;word-break:keep-all}.markdown-body table th{font-weight:700}.markdown-body table td,.markdown-body table th{padding:6px 13px;border:1px solid #ddd}.markdown-body table tr{background-color:#fff;border-top:1px solid #ccc}.markdown-body table tr:nth-child(2n){background-color:#f8f8f8}.markdown-body img{max-width:100%;box-sizing:content-box;background-color:#fff}.markdown-body img[align=right]{padding-left:20px}.markdown-body img[align=left]{padding-right:20px}.markdown-body .emoji{max-width:none;vertical-align:text-top;background-color:transparent}.markdown-body span.frame{display:block;overflow:hidden}.markdown-body span.frame>span{display:block;float:left;width:auto;padding:7px;margin:13px 0 0;overflow:hidden;border:1px solid #ddd}.markdown-body span.frame span img{display:block;float:left}.markdown-body span.frame span span{display:block;padding:5px 0 0;clear:both;color:#333}.markdown-body span.align-center{display:block;overflow:hidden;clear:both}.markdown-body span.align-center>span{display:block;margin:13px auto 0;overflow:hidden;text-align:center}.markdown-body span.align-center span img{margin:0 auto;text-align:center}.markdown-body span.align-right{display:block;overflow:hidden;clear:both}.markdown-body span.align-right>span{display:block;margin:13px 0 0;overflow:hidden;text-align:right}.markdown-body span.align-right span img{margin:0;text-align:right}.markdown-body span.float-left{display:block;float:left;margin-right:13px;overflow:hidden}.markdown-body span.float-left span{margin:13px 0 0}.markdown-body span.float-right{display:block;float:right;margin-left:13px;overflow:hidden}.markdown-body span.float-right>span{display:block;margin:13px auto 0;overflow:hidden;text-align:right}.markdown-body code,.markdown-body tt{padding:0;padding-top:.2em;padding-bottom:.2em;margin:0;font-size:85%;background-color:rgba(0,0,0,.04);border-radius:3px}.markdown-body code:after,.markdown-body code:before,.markdown-body tt:after,.markdown-body tt:before{letter-spacing:-.2em;content:"\00a0"}.markdown-body code br,.markdown-body tt br{display:none}.markdown-body del code{text-decoration:inherit}.markdown-body pre{word-wrap:normal}.markdown-body pre>code{padding:0;margin:0;font-size:100%;word-break:normal;white-space:pre;background:transparent;border:0}.markdown-body .highlight{margin-bottom:16px}.markdown-body .highlight pre{margin-bottom:0;word-break:normal}.markdown-body .highlight pre,.markdown-body pre{padding:16px;overflow:auto;font-size:85%;line-height:1.45;background-color:#f7f7f7;border-radius:3px}.markdown-body pre code,.markdown-body pre tt{display:inline;max-width:auto;padding:0;margin:0;overflow:visible;line-height:inherit;word-wrap:normal;background-color:transparent;border:0}.markdown-body pre code:after,.markdown-body pre code:before,.markdown-body pre tt:after,.markdown-body pre tt:before{content:normal}.markdown-body .csv-data td,.markdown-body .csv-data th{padding:5px;overflow:hidden;font-size:12px;line-height:1;text-align:left;white-space:nowrap}.markdown-body .csv-data .blob-line-num{padding:10px 8px 9px;text-align:right;background:#fff;border:0}.markdown-body .csv-data tr{border-top:0}.markdown-body .csv-data th{font-weight:700;background:#f8f8f8;border-top:0}.news .alert .markdown-body blockquote{padding:0 0 0 40px;border:0 none}.activity-tab .news .alert .commits,.activity-tab .news .markdown-body blockquote{padding-left:0}.task-list-item{list-style-type:none}.task-list-item label{font-weight:400}.task-list-item.enabled label{cursor:pointer}.task-list-item+.task-list-item{margin-top:3px}.task-list-item-checkbox{float:left;margin:.31em 0 .2em -1.3em!important;vertical-align:middle;cursor:default!important}.markdown-body{padding-top:40px;padding-bottom:40px;max-width:758px;overflow:visible!important;position:relative}.markdown-body .emoji{vertical-align:top}.markdown-body pre{border:inherit!important}.markdown-body code{color:inherit!important}.markdown-body pre code .wrapper{display:-moz-inline-flex;display:-ms-inline-flex;display:-o-inline-flex;display:inline-flex}.markdown-body pre code .gutter{float:left;overflow:hidden;-webkit-user-select:none;user-select:none}.markdown-body pre code .gutter.linenumber{text-align:right;position:relative;display:inline-block;cursor:default;z-index:4;padding:0 8px 0 0;min-width:20px;box-sizing:content-box;color:#afafaf!important;border-right:3px solid #6ce26c!important}.markdown-body pre code .gutter.linenumber>span:before{content:attr(data-linenumber)}.markdown-body pre code .code{float:left;margin:0 0 0 16px}.markdown-body .gist .line-numbers{border-left:none;border-top:none;border-bottom:none}.markdown-body .gist .line-data{border:none}.markdown-body .gist table{border-spacing:0;border-collapse:inherit!important}.markdown-body code[data-gist-id]{background:none;padding:0}.markdown-body code[data-gist-id]:after,.markdown-body code[data-gist-id]:before{content:""}.markdown-body code[data-gist-id] .blob-num{border:unset}.markdown-body code[data-gist-id] table{overflow:unset;margin-bottom:unset}.markdown-body code[data-gist-id] table tr{background:unset}.markdown-body[dir=rtl] pre{direction:ltr}.markdown-body[dir=rtl] code{direction:ltr;unicode-bidi:embed}.markdown-body .alert>p{margin-bottom:0}.markdown-body pre.abc,.markdown-body pre.flow-chart,.markdown-body pre.graphviz,.markdown-body pre.mermaid,.markdown-body pre.sequence-diagram,.markdown-body pre.vega{text-align:center;background-color:inherit;border-radius:0;white-space:inherit;overflow:visible}.markdown-body pre.abc>code,.markdown-body pre.flow-chart>code,.markdown-body pre.graphviz>code,.markdown-body pre.mermaid>code,.markdown-body pre.sequence-diagram>code,.markdown-body pre.vega>code{text-align:left}.markdown-body pre.abc>svg,.markdown-body pre.flow-chart>svg,.markdown-body pre.graphviz>svg,.markdown-body pre.mermaid>svg,.markdown-body pre.sequence-diagram>svg,.markdown-body pre.vega>svg{max-width:100%;height:100%}.markdown-body pre>code.wrap{white-space:pre-wrap;white-space:-moz-pre-wrap;white-space:-pre-wrap;white-space:-o-pre-wrap;word-wrap:break-word}.markdown-body .alert>p,.markdown-body .alert>ul{margin-bottom:0}.markdown-body summary{display:list-item}.markdown-body summary:focus{outline:none}.markdown-body details summary{cursor:pointer}.markdown-body details:not([open])>:not(summary){display:none}.markdown-body figure{margin:1em 40px}.markdown-body .mark,.markdown-body mark{background-color:#fff1a7}.vimeo,.youtube{cursor:pointer;display:table;text-align:center;background-position:50%;background-repeat:no-repeat;background-size:contain;background-color:#000;overflow:hidden}.vimeo,.youtube{position:relative;width:100%}.youtube{padding-bottom:56.25%}.vimeo img{width:100%;object-fit:contain;z-index:0}.youtube img{object-fit:cover;z-index:0}.vimeo iframe,.youtube iframe,.youtube img{width:100%;height:100%;position:absolute;top:0;left:0}.vimeo iframe,.youtube iframe{vertical-align:middle;z-index:1}.vimeo .icon,.youtube .icon{position:absolute;height:auto;width:auto;top:50%;left:50%;transform:translate(-50%,-50%);color:#fff;opacity:.3;transition:opacity .2s;z-index:0}.vimeo:hover .icon,.youtube:hover .icon{opacity:.6;transition:opacity .2s}.slideshare .inner,.speakerdeck .inner{position:relative;width:100%}.slideshare .inner iframe,.speakerdeck .inner iframe{position:absolute;top:0;bottom:0;left:0;right:0;width:100%;height:100%}.MJX_Assistive_MathML{display:none}.ui-infobar{position:relative;z-index:2;max-width:760px;margin:25px auto -25px;color:#777}.toc .invisable-node{list-style-type:none}.ui-toc{position:fixed;bottom:20px;z-index:998}.ui-toc.both-mode{margin-left:8px}.ui-toc.both-mode .ui-toc-label{height:40px;padding:10px 4px;border-top-left-radius:0;border-bottom-left-radius:0}.ui-toc-label{background-color:#e6e6e6;border:none;color:#868686;transition:opacity .2s}.ui-toc .open .ui-toc-label{opacity:1;color:#fff;transition:opacity .2s}.ui-toc-label:focus{opacity:.3;background-color:#ccc;color:#000}.ui-toc-label:hover{opacity:1;background-color:#ccc;transition:opacity .2s}.ui-toc-dropdown{margin-top:20px;margin-bottom:20px;padding-left:10px;padding-right:10px;max-width:45vw;width:25vw;max-height:70vh;overflow:auto;text-align:inherit}.ui-toc-dropdown>.toc{max-height:calc(70vh - 100px);overflow:auto}.ui-toc-dropdown[dir=rtl] .nav{padding-right:0;letter-spacing:.0029em}.ui-toc-dropdown a{overflow:hidden;text-overflow:ellipsis;white-space:pre}.ui-toc-dropdown .nav>li>a{display:block;padding:4px 20px;font-size:13px;font-weight:500;color:#767676}.ui-toc-dropdown .nav>li:first-child:last-child > ul,.ui-toc-dropdown .toc.expand ul{display:block}.ui-toc-dropdown .nav>li>a:focus,.ui-toc-dropdown .nav>li>a:hover{padding-left:19px;color:#000;text-decoration:none;background-color:transparent;border-left:1px solid #000}.ui-toc-dropdown[dir=rtl] .nav>li>a:focus,.ui-toc-dropdown[dir=rtl] .nav>li>a:hover{padding-right:19px;border-left:none;border-right:1px solid #000}.ui-toc-dropdown .nav>.active:focus>a,.ui-toc-dropdown .nav>.active:hover>a,.ui-toc-dropdown .nav>.active>a{padding-left:18px;font-weight:700;color:#000;background-color:transparent;border-left:2px solid #000}.ui-toc-dropdown[dir=rtl] .nav>.active:focus>a,.ui-toc-dropdown[dir=rtl] .nav>.active:hover>a,.ui-toc-dropdown[dir=rtl] .nav>.active>a{padding-right:18px;border-left:none;border-right:2px solid #000}.ui-toc-dropdown .nav .nav{display:none;padding-bottom:10px}.ui-toc-dropdown .nav>.active>ul{display:block}.ui-toc-dropdown .nav .nav>li>a{padding-top:1px;padding-bottom:1px;padding-left:30px;font-size:12px;font-weight:400}.ui-toc-dropdown[dir=rtl] .nav .nav>li>a{padding-right:30px}.ui-toc-dropdown .nav .nav>li>ul>li>a{padding-top:1px;padding-bottom:1px;padding-left:40px;font-size:12px;font-weight:400}.ui-toc-dropdown[dir=rtl] .nav .nav>li>ul>li>a{padding-right:40px}.ui-toc-dropdown .nav .nav>li>a:focus,.ui-toc-dropdown .nav .nav>li>a:hover{padding-left:29px}.ui-toc-dropdown[dir=rtl] .nav .nav>li>a:focus,.ui-toc-dropdown[dir=rtl] .nav .nav>li>a:hover{padding-right:29px}.ui-toc-dropdown .nav .nav>li>ul>li>a:focus,.ui-toc-dropdown .nav .nav>li>ul>li>a:hover{padding-left:39px}.ui-toc-dropdown[dir=rtl] .nav .nav>li>ul>li>a:focus,.ui-toc-dropdown[dir=rtl] .nav .nav>li>ul>li>a:hover{padding-right:39px}.ui-toc-dropdown .nav .nav>.active:focus>a,.ui-toc-dropdown .nav .nav>.active:hover>a,.ui-toc-dropdown .nav .nav>.active>a{padding-left:28px;font-weight:500}.ui-toc-dropdown[dir=rtl] .nav .nav>.active:focus>a,.ui-toc-dropdown[dir=rtl] .nav .nav>.active:hover>a,.ui-toc-dropdown[dir=rtl] .nav .nav>.active>a{padding-right:28px}.ui-toc-dropdown .nav .nav>.active>.nav>.active:focus>a,.ui-toc-dropdown .nav .nav>.active>.nav>.active:hover>a,.ui-toc-dropdown .nav .nav>.active>.nav>.active>a{padding-left:38px;font-weight:500}.ui-toc-dropdown[dir=rtl] .nav .nav>.active>.nav>.active:focus>a,.ui-toc-dropdown[dir=rtl] .nav .nav>.active>.nav>.active:hover>a,.ui-toc-dropdown[dir=rtl] .nav .nav>.active>.nav>.active>a{padding-right:38px}.markdown-body{font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Helvetica,Roboto,Arial,sans-serif}html[lang^=ja] .markdown-body{font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Helvetica,Roboto,Arial,Hiragino Kaku Gothic Pro,ヒラギノ角ゴ Pro W3,Osaka,Meiryo,メイリオ,MS Gothic,ＭＳ\ ゴシック,sans-serif}html[lang=zh-tw] .markdown-body{font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Helvetica,Roboto,Arial,PingFang TC,Microsoft JhengHei,微軟正黑,sans-serif}html[lang=zh-cn] .markdown-body{font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Helvetica,Roboto,Arial,PingFang SC,Microsoft YaHei,微软雅黑,sans-serif}html .markdown-body[lang^=ja]{font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Helvetica,Roboto,Arial,Hiragino Kaku Gothic Pro,ヒラギノ角ゴ Pro W3,Osaka,Meiryo,メイリオ,MS Gothic,ＭＳ\ ゴシック,sans-serif}html .markdown-body[lang=zh-tw]{font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Helvetica,Roboto,Arial,PingFang TC,Microsoft JhengHei,微軟正黑,sans-serif}html .markdown-body[lang=zh-cn]{font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Helvetica,Roboto,Arial,PingFang SC,Microsoft YaHei,微软雅黑,sans-serif}html[lang^=ja] .ui-toc-dropdown{font-family:Source Sans Pro,Helvetica,Arial,Meiryo UI,MS PGothic,ＭＳ\ Ｐゴシック,sans-serif}html[lang=zh-tw] .ui-toc-dropdown{font-family:Source Sans Pro,Helvetica,Arial,Microsoft JhengHei UI,微軟正黑UI,sans-serif}html[lang=zh-cn] .ui-toc-dropdown{font-family:Source Sans Pro,Helvetica,Arial,Microsoft YaHei UI,微软雅黑UI,sans-serif}html .ui-toc-dropdown[lang^=ja]{font-family:Source Sans Pro,Helvetica,Arial,Meiryo UI,MS PGothic,ＭＳ\ Ｐゴシック,sans-serif}html .ui-toc-dropdown[lang=zh-tw]{font-family:Source Sans Pro,Helvetica,Arial,Microsoft JhengHei UI,微軟正黑UI,sans-serif}html .ui-toc-dropdown[lang=zh-cn]{font-family:Source Sans Pro,Helvetica,Arial,Microsoft YaHei UI,微软雅黑UI,sans-serif}.ui-affix-toc{position:fixed;top:0;max-width:15vw;max-height:70vh;overflow:auto}.back-to-top,.expand-toggle,.go-to-bottom{display:block;padding:4px 10px;margin-top:10px;margin-left:10px;font-size:12px;font-weight:500;color:#999}.back-to-top:focus,.back-to-top:hover,.expand-toggle:focus,.expand-toggle:hover,.go-to-bottom:focus,.go-to-bottom:hover{color:#563d7c;text-decoration:none}.back-to-top,.go-to-bottom{margin-top:0}.ui-user-icon{width:20px;height:20px;display:block;border-radius:3px;margin-top:2px;margin-bottom:2px;margin-right:5px;background-position:50%;background-repeat:no-repeat;background-size:cover}.ui-user-icon.small{width:18px;height:18px;display:inline-block;vertical-align:middle;margin:0 0 .2em}.ui-infobar>small>span{line-height:22px}.ui-infobar>small .dropdown{display:inline-block}.ui-infobar>small .dropdown a:focus,.ui-infobar>small .dropdown a:hover{text-decoration:none}.ui-published-note{color:#337ab7}.ui-published-note .fa{font-size:20px;vertical-align:top}.unselectable{-webkit-user-select:none;-o-user-select:none;user-select:none}.selectable{-webkit-user-select:text;-o-user-select:text;user-select:text}@media print{blockquote,div,img,pre,table{page-break-inside:avoid!important}a[href]:after{font-size:12px!important}}.markdown-body.slides{position:relative;z-index:1;color:#222}.markdown-body.slides:before{content:"";display:block;position:absolute;top:0;left:0;right:0;bottom:0;z-index:-1;background-color:currentColor;box-shadow:0 0 0 50vw}.markdown-body.slides section[data-markdown]{position:relative;margin-bottom:1.5em;background-color:#fff;text-align:center}.markdown-body.slides section[data-markdown] code{text-align:left}.markdown-body.slides section[data-markdown]:before{content:"";display:block;padding-bottom:56.23%}.markdown-body.slides section[data-markdown]>div:first-child{position:absolute;top:50%;left:1em;right:1em;transform:translateY(-50%);max-height:100%;overflow:hidden}.markdown-body.slides section[data-markdown]>ul{display:inline-block}.markdown-body.slides>section>section+section:after{content:"";position:absolute;top:-1.5em;right:1em;height:1.5em;border:3px solid #777}.site-ui-font{font-family:Source Sans Pro,Helvetica,Arial,sans-serif}html[lang^=ja] .site-ui-font{font-family:Source Sans Pro,Helvetica,Arial,Hiragino Kaku Gothic Pro,ヒラギノ角ゴ Pro W3,Osaka,Meiryo,メイリオ,MS Gothic,ＭＳ\ ゴシック,sans-serif}html[lang=zh-tw] .site-ui-font{font-family:Source Sans Pro,Helvetica,Arial,PingFang TC,Microsoft JhengHei,微軟正黑,sans-serif}html[lang=zh-cn] .site-ui-font{font-family:Source Sans Pro,Helvetica,Arial,PingFang SC,Microsoft YaHei,微软雅黑,sans-serif}body{font-smoothing:subpixel-antialiased!important;-webkit-font-smoothing:subpixel-antialiased!important;-moz-osx-font-smoothing:auto!important;text-shadow:0 0 1em transparent,1px 1px 1.2px rgba(0,0,0,.004);-webkit-overflow-scrolling:touch;letter-spacing:.025em}.focus,:focus{outline:none!important}::-moz-focus-inner{border:0!important}body{font-family:Source Sans Pro,Helvetica,Arial,sans-serif}html[lang^=ja] body{font-family:Source Sans Pro,Helvetica,Arial,Hiragino Kaku Gothic Pro,ヒラギノ角ゴ Pro W3,Osaka,Meiryo,メイリオ,MS Gothic,ＭＳ\ ゴシック,sans-serif}html[lang=zh-tw] body{font-family:Source Sans Pro,Helvetica,Arial,PingFang TC,Microsoft JhengHei,微軟正黑,sans-serif}html[lang=zh-cn] body{font-family:Source Sans Pro,Helvetica,Arial,PingFang SC,Microsoft YaHei,微软雅黑,sans-serif}abbr[title]{border-bottom:none;text-decoration:underline;-webkit-text-decoration:underline dotted;text-decoration:underline dotted}abbr[data-original-title],abbr[title]{cursor:help}body.modal-open{overflow-y:auto;padding-right:0!important}
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" integrity="sha256-3Jy/GbSLrg0o9y5Z5n1uw0qxZECH7C6OQpVBgNFYa0g=" crossorigin="anonymous"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js" integrity="sha256-g6iAfvZp+nDQ2TdTR/VVKJf3bGro4ub5fvWSWVRi2NE=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/es5-shim/4.5.9/es5-shim.min.js" integrity="sha256-8E4Is26QH0bD52WoQpcB+R/tcWQtpzlCojrybUd7Mxo=" crossorigin="anonymous"></script>
    <![endif]-->
</head>

<body>
    <div id="doc" class="markdown-body container-fluid comment-inner comment-enabled" data-hard-breaks="true"><h1 id="Trueque-API-DOCS" data-id="Trueque-API-DOCS"><a class="anchor hidden-xs" href="#Trueque-API-DOCS" title="Trueque-API-DOCS"><span class="octicon octicon-link"></span></a><span>Trueque API DOCS</span></h1><p><a href="https://hackmd.io/-UaK6bTGTueEIF9h60zBJQ?both" target="_blank" rel="noopener"><span>Hecho con HackMD</span></a></p><h1 id="URL" data-id="URL"><a class="anchor hidden-xs" href="#URL" title="URL"><span class="octicon octicon-link"></span></a><span>URL</span></h1><pre><code>https://trueque-admin.herokuapp.com
</code></pre><h2 id="Rutas-Auth" data-id="Rutas-Auth"><a class="anchor hidden-xs" href="#Rutas-Auth" title="Rutas-Auth"><span class="octicon octicon-link"></span></a><span>Rutas Auth</span></h2><hr><h3 id="POST-Register" data-id="POST-Register"><a class="anchor hidden-xs" href="#POST-Register" title="POST-Register"><span class="octicon octicon-link"></span></a><span>POST Register</span></h3><p><span>Registra un nuevo usuario con rol:USER</span></p><pre><code>/api/register
</code></pre><h5 id="BODY" data-id="BODY"><a class="anchor hidden-xs" href="#BODY" title="BODY"><span class="octicon octicon-link"></span></a><span>BODY</span></h5><pre><code>name:string
email:string
password:string
</code></pre><p><span>Se genera un token al momento de registrarse</span></p><h5 id="RESPONSES" data-id="RESPONSES"><a class="anchor hidden-xs" href="#RESPONSES" title="RESPONSES"><span class="octicon octicon-link"></span></a><span>RESPONSES</span></h5><p><span>OK</span></p><pre><code class="json hljs">status_code<span class="token operator">:</span>number
access_token<span class="token operator">:</span>string
roles<span class="token operator">:</span><span class="token punctuation">[</span>'ADMIN'?<span class="token punctuation">,</span> 'USER'?<span class="token punctuation">]</span>
token_type<span class="token operator">:</span>string = 'Bearer'
</code></pre><p><span>Error</span></p><pre><code>status_code:number
errors: [email?, password? ], Error?
</code></pre><h3 id="POST-Login" data-id="POST-Login"><a class="anchor hidden-xs" href="#POST-Login" title="POST-Login"><span class="octicon octicon-link"></span></a><span>POST Login</span></h3><p><span>Permite a un usuario registrado obtener un token para realizar peticiones</span></p><pre><code>/api/login
</code></pre><h5 id="BODY1" data-id="BODY"><a class="anchor hidden-xs" href="#BODY1" title="BODY1"><span class="octicon octicon-link"></span></a><span>BODY</span></h5><pre><code>email:string
password:string
</code></pre><p><span>Se genera un token al momento de loguearse</span></p><h5 id="RESPONSES1" data-id="RESPONSES"><a class="anchor hidden-xs" href="#RESPONSES1" title="RESPONSES1"><span class="octicon octicon-link"></span></a><span>RESPONSES</span></h5><p><span>OK</span></p><pre><code class="json hljs">status_code<span class="token operator">:</span>number
access_token<span class="token operator">:</span>string
roles<span class="token operator">:</span><span class="token punctuation">[</span>'ADMIN'?<span class="token punctuation">,</span> 'USER'?<span class="token punctuation">]</span>
token_type<span class="token operator">:</span>string = 'Bearer'
</code></pre><p><span>Error</span></p><pre><code>status_code:number
errors: [email?, password? ], Error?
</code></pre><h3 id="POST-Send-Reset-Password" data-id="POST-Send-Reset-Password"><a class="anchor hidden-xs" href="#POST-Send-Reset-Password" title="POST-Send-Reset-Password"><span class="octicon octicon-link"></span></a><span>POST Send Reset Password</span></h3><p><span>Permite a un usuario registrado enviar una petición para recuperar la contraseña.</span></p><pre><code>/api/send-reset-password
</code></pre><h5 id="BODY2" data-id="BODY"><a class="anchor hidden-xs" href="#BODY2" title="BODY2"><span class="octicon octicon-link"></span></a><span>BODY</span></h5><pre><code>reset_email:string
</code></pre><p><span>Se genera un OTP al enviar la solicitud y se envía por correo al usuario registrado.</span></p><h5 id="RESPONSES2" data-id="RESPONSES"><a class="anchor hidden-xs" href="#RESPONSES2" title="RESPONSES2"><span class="octicon octicon-link"></span></a><span>RESPONSES</span></h5><p><span>OK</span></p><pre><code class="json hljs">message<span class="token operator">:</span>string
</code></pre><p><span>Error</span></p><pre><code>status_code:number
errors: [reset_email?], Error?
</code></pre><h3 id="POST-Verificar-OTP" data-id="POST-Verificar-OTP"><a class="anchor hidden-xs" href="#POST-Verificar-OTP" title="POST-Verificar-OTP"><span class="octicon octicon-link"></span></a><span>POST Verificar OTP</span></h3><p><span>Verifica si el OTP es válido.</span></p><pre><code>/api/verify-otp
</code></pre><h5 id="BODY3" data-id="BODY"><a class="anchor hidden-xs" href="#BODY3" title="BODY3"><span class="octicon octicon-link"></span></a><span>BODY</span></h5><pre><code>verify_otp:number|size:6
</code></pre><p><span>Devuelve un token.</span></p><h5 id="RESPONSES3" data-id="RESPONSES"><a class="anchor hidden-xs" href="#RESPONSES3" title="RESPONSES3"><span class="octicon octicon-link"></span></a><span>RESPONSES</span></h5><p><span>OK</span></p><pre><code class="json hljs">token<span class="token operator">:</span>string
</code></pre><p><span>Error</span></p><pre><code>status_code:number
errors: [verify_otp?], Error?
</code></pre><h3 id="POST-Cambiar-contraseña" data-id="POST-Cambiar-contraseña"><a class="anchor hidden-xs" href="#POST-Cambiar-contraseña" title="POST-Cambiar-contraseña"><span class="octicon octicon-link"></span></a><span>POST Cambiar contraseña</span></h3><p><span>Cambia la contraseña del usuario registrado.</span></p><pre><code>/api/reset-password
</code></pre><h5 id="BODY4" data-id="BODY"><a class="anchor hidden-xs" href="#BODY4" title="BODY4"><span class="octicon octicon-link"></span></a><span>BODY</span></h5><pre><code>reset_password:string
verify_password:string
token:string
</code></pre><p><span>Devuelve un mensaje de confirmación</span></p><h5 id="RESPONSES4" data-id="RESPONSES"><a class="anchor hidden-xs" href="#RESPONSES4" title="RESPONSES4"><span class="octicon octicon-link"></span></a><span>RESPONSES</span></h5><p><span>OK</span></p><pre><code>message:string
</code></pre><p><span>Error</span></p><pre><code>status_code:number
errors: [reset_password?,verify_password?], Error?
</code></pre><h2 id="Rutas-Autenticadas" data-id="Rutas-Autenticadas"><a class="anchor hidden-xs" href="#Rutas-Autenticadas" title="Rutas-Autenticadas"><span class="octicon octicon-link"></span></a><span>Rutas Autenticadas</span></h2><hr><h3 id="GET-Profile" data-id="GET-Profile"><a class="anchor hidden-xs" href="#GET-Profile" title="GET-Profile"><span class="octicon octicon-link"></span></a><span>GET Profile</span></h3><p><span>Consulta el perfil de un usuario registrado</span></p><pre><code>/api/profile/{NOMBRE_USUARIO}
</code></pre><h5 id="RESPONSES5" data-id="RESPONSES"><a class="anchor hidden-xs" href="#RESPONSES5" title="RESPONSES5"><span class="octicon octicon-link"></span></a><span>RESPONSES</span></h5><p><span>OK</span></p><pre><code>status_code:number
profile:User
</code></pre><h5 id="HEADERS" data-id="HEADERS"><a class="anchor hidden-xs" href="#HEADERS" title="HEADERS"><span class="octicon octicon-link"></span></a><span>HEADERS</span></h5><pre><code>Bearer token
</code></pre><p><span>El token se genera cuando el usuario se registra o se loguea.</span></p><h3 id="PUT-Profile" data-id="PUT-Profile"><a class="anchor hidden-xs" href="#PUT-Profile" title="PUT-Profile"><span class="octicon octicon-link"></span></a><span>PUT Profile</span></h3><p><span>Actualiza el perfil de un usuario registrado</span></p><pre><code>/api/profile/{NOMBRE_USUARIO}
</code></pre><h5 id="HEADERS1" data-id="HEADERS"><a class="anchor hidden-xs" href="#HEADERS1" title="HEADERS1"><span class="octicon octicon-link"></span></a><span>HEADERS</span></h5><pre><code>Bearer token
</code></pre><h5 id="BODY5" data-id="BODY"><a class="anchor hidden-xs" href="#BODY5" title="BODY5"><span class="octicon octicon-link"></span></a><span>BODY</span></h5><pre><code>firstname:string
lastanme:string
gender:["Femenino, "Masculino"]
birthday:date
city:string
telephone:string
mobile:string
mobile_2:string
profession:string
facebook:url
twitter:url
instagram:url
whatsapp:url
telegram:url
insterests:string (lista de items, separados en comas)
</code></pre><h5 id="RESPONSES6" data-id="RESPONSES"><a class="anchor hidden-xs" href="#RESPONSES6" title="RESPONSES6"><span class="octicon octicon-link"></span></a><span>RESPONSES</span></h5><p><span>OK</span></p><pre><code class="json hljs">status_code<span class="token operator">:</span><span class="token number">200</span>
message<span class="token operator">:</span>string
</code></pre><h3 id="DELETE-User" data-id="DELETE-User"><a class="anchor hidden-xs" href="#DELETE-User" title="DELETE-User"><span class="octicon octicon-link"></span></a><span>DELETE User</span></h3><p><span>Elimina un usuario</span></p><pre><code>/api/profile/{NOMBRE_USUARIO}
</code></pre><h5 id="HEADERS2" data-id="HEADERS"><a class="anchor hidden-xs" href="#HEADERS2" title="HEADERS2"><span class="octicon octicon-link"></span></a><span>HEADERS</span></h5><pre><code>Bearer token
</code></pre><h5 id="RESPONSES7" data-id="RESPONSES"><a class="anchor hidden-xs" href="#RESPONSES7" title="RESPONSES7"><span class="octicon octicon-link"></span></a><span>RESPONSES</span></h5><p><span>OK</span></p><pre><code>status_code:number
message:string
</code></pre><h3 id="GET-Users" data-id="GET-Users"><a class="anchor hidden-xs" href="#GET-Users" title="GET-Users"><span class="octicon octicon-link"></span></a><span>GET Users</span></h3><p><span>Obtiene todos los usuarios</span></p><pre><code>/api/users
</code></pre><h5 id="HEADERS3" data-id="HEADERS"><a class="anchor hidden-xs" href="#HEADERS3" title="HEADERS3"><span class="octicon octicon-link"></span></a><span>HEADERS</span></h5><pre><code>Bearer token
</code></pre><h5 id="RESPONSES8" data-id="RESPONSES"><a class="anchor hidden-xs" href="#RESPONSES8" title="RESPONSES8"><span class="octicon octicon-link"></span></a><span>RESPONSES</span></h5><p><span>OK</span></p><pre><code>[
    {
        "id": number,
        "name": string,
        "email": string
    },
    ...
]
</code></pre><h2 id="Publicaciones" data-id="Publicaciones"><a class="anchor hidden-xs" href="#Publicaciones" title="Publicaciones"><span class="octicon octicon-link"></span></a><span>Publicaciones</span></h2><hr><h3 id="GET-Publicaciones" data-id="GET-Publicaciones"><a class="anchor hidden-xs" href="#GET-Publicaciones" title="GET-Publicaciones"><span class="octicon octicon-link"></span></a><span>GET Publicaciones</span></h3><p><span>Obtiene las publicaciones por state para un usuario registrado.</span></p><pre><code>/api/publication/{state}
</code></pre><h5 id="HEADERS4" data-id="HEADERS"><a class="anchor hidden-xs" href="#HEADERS4" title="HEADERS4"><span class="octicon octicon-link"></span></a><span>HEADERS</span></h5><pre><code>Bearer token
</code></pre><h5 id="PARAMETERS" data-id="PARAMETERS"><a class="anchor hidden-xs" href="#PARAMETERS" title="PARAMETERS"><span class="octicon octicon-link"></span></a><span>PARAMETERS</span></h5><pre><code>state:draft|published|complete
</code></pre><h5 id="RESPONSES9" data-id="RESPONSES"><a class="anchor hidden-xs" href="#RESPONSES9" title="RESPONSES9"><span class="octicon octicon-link"></span></a><span>RESPONSES</span></h5><p><span>OK</span></p><pre><code class="json hljs">status_code<span class="token operator">:</span><span class="token number">200</span><span class="token punctuation">,</span>
publications<span class="token operator">:</span> <span class="token punctuation">[</span>
    <span class="token punctuation">{</span>
        pub_id<span class="token operator">:</span> number<span class="token punctuation">,</span>
        pub<span class="token operator">:</span> <span class="token punctuation">{</span>
            id<span class="token operator">:</span>number
            title<span class="token operator">:</span>string
            price<span class="token operator">:</span>number
            category<span class="token operator">:</span>string
            photos<span class="token operator">:</span> <span class="token punctuation">{</span>
                name<span class="token operator">:</span>string
                path<span class="token operator">:</span>string
            <span class="token punctuation">}</span>
        <span class="token punctuation">}</span>
    <span class="token punctuation">}</span><span class="token punctuation">,</span>
    ...
<span class="token punctuation">]</span>
</code></pre><h3 id="GET-Publicaciones-Usuario-no-registrado" data-id="GET-Publicaciones-Usuario-no-registrado"><a class="anchor hidden-xs" href="#GET-Publicaciones-Usuario-no-registrado" title="GET-Publicaciones-Usuario-no-registrado"><span class="octicon octicon-link"></span></a><span>GET Publicaciones (Usuario no registrado)</span></h3><p><span>Obtiene las publicaciones por categoria para un usuario no registrado.</span></p><pre><code>/api/publications/{category}
</code></pre><h5 id="HEADERS5" data-id="HEADERS"><a class="anchor hidden-xs" href="#HEADERS5" title="HEADERS5"><span class="octicon octicon-link"></span></a><span>HEADERS</span></h5><pre><code>Bearer token
</code></pre><h5 id="PARAMETERS1" data-id="PARAMETERS"><a class="anchor hidden-xs" href="#PARAMETERS1" title="PARAMETERS1"><span class="octicon octicon-link"></span></a><span>PARAMETERS</span></h5><pre><code>category:FRUT|HORT
</code></pre><h5 id="RESPONSES10" data-id="RESPONSES"><a class="anchor hidden-xs" href="#RESPONSES10" title="RESPONSES10"><span class="octicon octicon-link"></span></a><span>RESPONSES</span></h5><p><span>OK</span></p><pre><code class="json hljs">status_code<span class="token operator">:</span><span class="token number">200</span><span class="token punctuation">,</span>
publications<span class="token operator">:</span> <span class="token punctuation">[</span>
    <span class="token punctuation">{</span>
        pub_id<span class="token operator">:</span> number<span class="token punctuation">,</span>
        trans_id<span class="token operator">:</span> number<span class="token punctuation">,</span>
        state<span class="token operator">:</span> string<span class="token punctuation">,</span>
        title<span class="token operator">:</span> string<span class="token punctuation">,</span>
        price<span class="token operator">:</span> number<span class="token punctuation">,</span>
        category<span class="token operator">:</span> string<span class="token punctuation">,</span>
        photos<span class="token operator">:</span> json

    <span class="token punctuation">}</span><span class="token punctuation">,</span>
    ...
<span class="token punctuation">]</span>
</code></pre><h3 id="POST-Publicacion" data-id="POST-Publicacion"><a class="anchor hidden-xs" href="#POST-Publicacion" title="POST-Publicacion"><span class="octicon octicon-link"></span></a><span>POST Publicacion</span></h3><p><span>Añade una publicacion de un usuario</span></p><pre><code>/api/publication
</code></pre><h5 id="HEADERS6" data-id="HEADERS"><a class="anchor hidden-xs" href="#HEADERS6" title="HEADERS6"><span class="octicon octicon-link"></span></a><span>HEADERS</span></h5><pre><code>Bearer token
</code></pre><h5 id="BODY6" data-id="BODY"><a class="anchor hidden-xs" href="#BODY6" title="BODY6"><span class="octicon octicon-link"></span></a><span>BODY</span></h5><pre><code>title:string
price:number
address:string
category:string
available:one|multiple
description:string
photos:Files
state:draft|published
</code></pre><h5 id="RESPONSES11" data-id="RESPONSES"><a class="anchor hidden-xs" href="#RESPONSES11" title="RESPONSES11"><span class="octicon octicon-link"></span></a><span>RESPONSES</span></h5><p><span>OK</span></p><pre><code class="json hljs">status_code<span class="token operator">:</span> <span class="token number">200</span><span class="token punctuation">,</span>
message<span class="token operator">:</span> <span class="token string">"Publicación creada"</span>
id<span class="token operator">:</span> **id de la transaccion**
</code></pre><p><span>Error</span></p><pre><code class="json hljs">status_code<span class="token operator">:</span>number
errors<span class="token operator">:</span> <span class="token punctuation">[</span>title?<span class="token punctuation">,</span> price?<span class="token punctuation">,</span> address?<span class="token punctuation">,</span> category?<span class="token punctuation">,</span> available?<span class="token punctuation">,</span> description?<span class="token punctuation">,</span> photos?<span class="token punctuation">,</span> active? <span class="token punctuation">]</span><span class="token punctuation">,</span> Error?
</code></pre><h3 id="PUT-Publicacion" data-id="PUT-Publicacion"><a class="anchor hidden-xs" href="#PUT-Publicacion" title="PUT-Publicacion"><span class="octicon octicon-link"></span></a><span>PUT Publicacion</span></h3><p><span>Actualiza una publicacion de un usuario</span></p><pre><code>/api/publication/update/{id}
</code></pre><h5 id="HEADERS7" data-id="HEADERS"><a class="anchor hidden-xs" href="#HEADERS7" title="HEADERS7"><span class="octicon octicon-link"></span></a><span>HEADERS</span></h5><pre><code>Bearer token
</code></pre><h5 id="PARAMETERS2" data-id="PARAMETERS"><a class="anchor hidden-xs" href="#PARAMETERS2" title="PARAMETERS2"><span class="octicon octicon-link"></span></a><span>PARAMETERS</span></h5><pre><code>id:number - el id de la transaccion
</code></pre><h5 id="BODY7" data-id="BODY"><a class="anchor hidden-xs" href="#BODY7" title="BODY7"><span class="octicon octicon-link"></span></a><span>BODY</span></h5><pre><code>title?:string
price?:number
address?:string
category?:string
available?:one|multiple
description?:string
state?:draft|published
</code></pre><h5 id="RESPONSES12" data-id="RESPONSES"><a class="anchor hidden-xs" href="#RESPONSES12" title="RESPONSES12"><span class="octicon octicon-link"></span></a><span>RESPONSES</span></h5><p><span>OK</span></p><pre><code class="json hljs">status_code<span class="token operator">:</span> <span class="token number">200</span><span class="token punctuation">,</span>
message<span class="token operator">:</span> <span class="token string">"Publicación actualizada"</span>
</code></pre><p><span>Error</span></p><pre><code class="json hljs">status_code<span class="token operator">:</span>number
errors<span class="token operator">:</span> <span class="token punctuation">[</span>title?<span class="token punctuation">,</span> price?<span class="token punctuation">,</span> address?<span class="token punctuation">,</span> category?<span class="token punctuation">,</span> available?<span class="token punctuation">,</span> description?<span class="token punctuation">,</span> active? <span class="token punctuation">]</span><span class="token punctuation">,</span> Error?
</code></pre><h3 id="DELETE-Publicacion" data-id="DELETE-Publicacion"><a class="anchor hidden-xs" href="#DELETE-Publicacion" title="DELETE-Publicacion"><span class="octicon octicon-link"></span></a><span>DELETE Publicacion</span></h3><p><span>Elimina una publicacion de un usuario</span></p><pre><code>/api/publication/delete/{id}
</code></pre><h5 id="HEADERS8" data-id="HEADERS"><a class="anchor hidden-xs" href="#HEADERS8" title="HEADERS8"><span class="octicon octicon-link"></span></a><span>HEADERS</span></h5><pre><code>Bearer token
</code></pre><h5 id="PARAMETERS3" data-id="PARAMETERS"><a class="anchor hidden-xs" href="#PARAMETERS3" title="PARAMETERS3"><span class="octicon octicon-link"></span></a><span>PARAMETERS</span></h5><pre><code>id:number - el id de la transaccion
</code></pre><h5 id="RESPONSES13" data-id="RESPONSES"><a class="anchor hidden-xs" href="#RESPONSES13" title="RESPONSES13"><span class="octicon octicon-link"></span></a><span>RESPONSES</span></h5><p><span>OK</span></p><pre><code class="json hljs">status_code<span class="token operator">:</span> <span class="token number">200</span><span class="token punctuation">,</span>
message<span class="token operator">:</span> <span class="token string">"Publicación eliminada"</span>
</code></pre><p><span>Error</span></p><pre><code class="json hljs">status_code<span class="token operator">:</span>number
errors<span class="token operator">:</span> Error?
</code></pre></div>
    <div class="ui-toc dropup unselectable hidden-print" style="display:none;">
        <div class="pull-right dropdown">
            <a id="tocLabel" class="ui-toc-label btn btn-default" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" title="Table of content">
                <i class="fa fa-bars"></i>
            </a>
            <ul id="ui-toc" class="ui-toc-dropdown dropdown-menu" aria-labelledby="tocLabel">
                <div class="toc"><ul class="nav">
<li class=""><a href="#Trueque-API-DOCS" title="Trueque API DOCS">Trueque API DOCS</a></li>
<li class=""><a href="#URL" title="URL">URL</a><ul class="nav">
<li class=""><a href="#Rutas-Auth" title="Rutas Auth">Rutas Auth</a><ul class="nav">
<li class=""><a href="#POST-Register" title="POST Register">POST Register</a></li>
<li class=""><a href="#POST-Login" title="POST Login">POST Login</a></li>
<li><a href="#POST-Send-Reset-Password" title="POST Send Reset Password">POST Send Reset Password</a></li>
<li><a href="#POST-Verificar-OTP" title="POST Verificar OTP">POST Verificar OTP</a></li>
<li><a href="#POST-Cambiar-contraseña" title="POST Cambiar contraseña">POST Cambiar contraseña</a></li>
</ul>
</li>
<li class=""><a href="#Rutas-Autenticadas" title="Rutas Autenticadas">Rutas Autenticadas</a><ul class="nav">
<li><a href="#GET-Profile" title="GET Profile">GET Profile</a></li>
<li><a href="#PUT-Profile" title="PUT Profile">PUT Profile</a></li>
<li><a href="#DELETE-User" title="DELETE User">DELETE User</a></li>
<li class=""><a href="#GET-Users" title="GET Users">GET Users</a></li>
</ul>
</li>
<li><a href="#Publicaciones" title="Publicaciones">Publicaciones</a><ul class="nav">
<li><a href="#GET-Publicaciones" title="GET Publicaciones">GET Publicaciones</a></li>
<li><a href="#GET-Publicaciones-Usuario-no-registrado" title="GET Publicaciones (Usuario no registrado)">GET Publicaciones (Usuario no registrado)</a></li>
<li><a href="#POST-Publicacion" title="POST Publicacion">POST Publicacion</a></li>
<li><a href="#PUT-Publicacion" title="PUT Publicacion">PUT Publicacion</a></li>
<li><a href="#DELETE-Publicacion" title="DELETE Publicacion">DELETE Publicacion</a></li>
</ul>
</li>
</ul>
</li>
</ul>
</div><div class="toc-menu"><a class="expand-toggle" href="#">Expand all</a><a class="back-to-top" href="#">Back to top</a><a class="go-to-bottom" href="#">Go to bottom</a></div>
            </ul>
        </div>
    </div>
    <div id="ui-toc-affix" class="ui-affix-toc ui-toc-dropdown unselectable hidden-print" data-spy="affix" style="top:17px;display:none;" null null>
        <div class="toc"><ul class="nav">
<li class=""><a href="#Trueque-API-DOCS" title="Trueque API DOCS">Trueque API DOCS</a></li>
<li class=""><a href="#URL" title="URL">URL</a><ul class="nav">
<li class=""><a href="#Rutas-Auth" title="Rutas Auth">Rutas Auth</a><ul class="nav">
<li class=""><a href="#POST-Register" title="POST Register">POST Register</a></li>
<li class=""><a href="#POST-Login" title="POST Login">POST Login</a></li>
<li><a href="#POST-Send-Reset-Password" title="POST Send Reset Password">POST Send Reset Password</a></li>
<li><a href="#POST-Verificar-OTP" title="POST Verificar OTP">POST Verificar OTP</a></li>
<li><a href="#POST-Cambiar-contraseña" title="POST Cambiar contraseña">POST Cambiar contraseña</a></li>
</ul>
</li>
<li class=""><a href="#Rutas-Autenticadas" title="Rutas Autenticadas">Rutas Autenticadas</a><ul class="nav">
<li><a href="#GET-Profile" title="GET Profile">GET Profile</a></li>
<li><a href="#PUT-Profile" title="PUT Profile">PUT Profile</a></li>
<li><a href="#DELETE-User" title="DELETE User">DELETE User</a></li>
<li class=""><a href="#GET-Users" title="GET Users">GET Users</a></li>
</ul>
</li>
<li><a href="#Publicaciones" title="Publicaciones">Publicaciones</a><ul class="nav">
<li><a href="#GET-Publicaciones" title="GET Publicaciones">GET Publicaciones</a></li>
<li><a href="#GET-Publicaciones-Usuario-no-registrado" title="GET Publicaciones (Usuario no registrado)">GET Publicaciones (Usuario no registrado)</a></li>
<li><a href="#POST-Publicacion" title="POST Publicacion">POST Publicacion</a></li>
<li><a href="#PUT-Publicacion" title="PUT Publicacion">PUT Publicacion</a></li>
<li><a href="#DELETE-Publicacion" title="DELETE Publicacion">DELETE Publicacion</a></li>
</ul>
</li>
</ul>
</li>
</ul>
</div><div class="toc-menu"><a class="expand-toggle" href="#">Expand all</a><a class="back-to-top" href="#">Back to top</a><a class="go-to-bottom" href="#">Go to bottom</a></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha256-U5ZEeKfGNOja007MMD3YBI0A3OSZOQbeG6z2f2Y0hu8=" crossorigin="anonymous" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gist-embed/2.6.0/gist-embed.min.js" integrity="sha256-KyF2D6xPIJUW5sUDSs93vWyZm+1RzIpKCexxElmxl8g=" crossorigin="anonymous" defer></script>
    <script>
        var markdown = $(".markdown-body");
        //smooth all hash trigger scrolling
        function smoothHashScroll() {
            var hashElements = $("a[href^='#']").toArray();
            for (var i = 0; i < hashElements.length; i++) {
                var element = hashElements[i];
                var $element = $(element);
                var hash = element.hash;
                if (hash) {
                    $element.on('click', function (e) {
                        // store hash
                        var hash = this.hash;
                        if ($(hash).length <= 0) return;
                        // prevent default anchor click behavior
                        e.preventDefault();
                        // animate
                        $('body, html').stop(true, true).animate({
                            scrollTop: $(hash).offset().top
                        }, 100, "linear", function () {
                            // when done, add hash to url
                            // (default click behaviour)
                            window.location.hash = hash;
                        });
                    });
                }
            }
        }

        smoothHashScroll();
        var toc = $('.ui-toc');
        var tocAffix = $('.ui-affix-toc');
        var tocDropdown = $('.ui-toc-dropdown');
        //toc
        tocDropdown.click(function (e) {
            e.stopPropagation();
        });

        var enoughForAffixToc = true;

        function generateScrollspy() {
            $(document.body).scrollspy({
                target: ''
            });
            $(document.body).scrollspy('refresh');
            if (enoughForAffixToc) {
                toc.hide();
                tocAffix.show();
            } else {
                tocAffix.hide();
                toc.show();
            }
            $(document.body).scroll();
        }

        function windowResize() {
            //toc right
            var paddingRight = parseFloat(markdown.css('padding-right'));
            var right = ($(window).width() - (markdown.offset().left + markdown.outerWidth() - paddingRight));
            toc.css('right', right + 'px');
            //affix toc left
            var newbool;
            var rightMargin = (markdown.parent().outerWidth() - markdown.outerWidth()) / 2;
            //for ipad or wider device
            if (rightMargin >= 133) {
                newbool = true;
                var affixLeftMargin = (tocAffix.outerWidth() - tocAffix.width()) / 2;
                var left = markdown.offset().left + markdown.outerWidth() - affixLeftMargin;
                tocAffix.css('left', left + 'px');
            } else {
                newbool = false;
            }
            if (newbool != enoughForAffixToc) {
                enoughForAffixToc = newbool;
                generateScrollspy();
            }
        }
        $(window).resize(function () {
            windowResize();
        });
        $(document).ready(function () {
            windowResize();
            generateScrollspy();
        });

        //remove hash
        function removeHash() {
            window.location.hash = '';
        }

        var backtotop = $('.back-to-top');
        var gotobottom = $('.go-to-bottom');

        backtotop.click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            if (scrollToTop)
                scrollToTop();
            removeHash();
        });
        gotobottom.click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            if (scrollToBottom)
                scrollToBottom();
            removeHash();
        });

        var toggle = $('.expand-toggle');
        var tocExpand = false;

        checkExpandToggle();
        toggle.click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            tocExpand = !tocExpand;
            checkExpandToggle();
        })

        function checkExpandToggle () {
            var toc = $('.ui-toc-dropdown .toc');
            var toggle = $('.expand-toggle');
            if (!tocExpand) {
                toc.removeClass('expand');
                toggle.text('Expand all');
            } else {
                toc.addClass('expand');
                toggle.text('Collapse all');
            }
        }

        function scrollToTop() {
            $('body, html').stop(true, true).animate({
                scrollTop: 0
            }, 100, "linear");
        }

        function scrollToBottom() {
            $('body, html').stop(true, true).animate({
                scrollTop: $(document.body)[0].scrollHeight
            }, 100, "linear");
        }
    </script>
</body>

</html>
