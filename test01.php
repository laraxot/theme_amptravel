<!doctype html>

<!---
Copyright 2017 The AMP Start Authors. All Rights Reserved.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

      http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS-IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->

<!--
WARNING: 
 Uses experimental AMP features.
-->
<html ⚡="">

<head>
  <meta charset="utf-8">
  <title>The Photo Blog</title>
  <link rel="canonical" href="https://www.ampstart.com/templates/article.amp">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

  <style amp-boilerplate="">
    body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
  </style><noscript><style amp-boilerplate="">body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

  <script custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js" async></script>
  <script custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js" async></script>
  <script custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js" async></script>
  <script custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js" async=""></script>
  <script custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js" async=""></script>
  <script custom-element="amp-instagram" src="https://cdn.ampproject.org/v0/amp-instagram-0.1.js" async=""></script>
  <script custom-element="amp-twitter" src="https://cdn.ampproject.org/v0/amp-twitter-0.1.js" async=""></script>
  <script custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js" async=""></script>


  <style amp-custom="">
    /*! Bassplate | MIT License | https://github.com/basscss/bassplate */
    
    /*! normalize.css v5.0.0 | MIT License | github.com/necolas/normalize.css */html{font-family:sans-serif;line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,footer,header,nav,section{display:block}h1{font-size:2em;margin:.67em 0}figcaption,figure,main{display:block}figure{margin:1em 40px}hr{box-sizing:content-box;height:0;overflow:visible}pre{font-family:monospace,monospace;font-size:1em}a{background-color:transparent;-webkit-text-decoration-skip:objects}a:active,a:hover{outline-width:0}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:inherit;font-weight:bolder}code,kbd,samp{font-family:monospace,monospace;font-size:1em}dfn{font-style:italic}mark{background-color:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}audio,video{display:inline-block}audio:not([controls]){display:none;height:0}img{border-style:none}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0}button,input{overflow:visible}button,select{text-transform:none}[type=reset],[type=submit],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:1px dotted ButtonText}fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}legend{box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal}progress{display:inline-block;vertical-align:baseline}textarea{overflow:auto}[type=checkbox],[type=radio]{box-sizing:border-box;padding:0}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}details,menu{display:block}summary{display:list-item}canvas{display:inline-block}[hidden],template{display:none}.h1{font-size:3rem}.h2{font-size:2rem}.h3{font-size:1.5rem}.h4{font-size:1.125rem}.h5{font-size:.875rem}.h6{font-size:.75rem}.font-family-inherit{font-family:inherit}.font-size-inherit{font-size:inherit}.text-decoration-none{text-decoration:none}.bold{font-weight:700}.regular{font-weight:400}.italic{font-style:italic}.caps{text-transform:uppercase;letter-spacing:.2em}.left-align{text-align:left}.center{text-align:center}.right-align{text-align:right}.justify{text-align:justify}.nowrap{white-space:nowrap}.break-word{word-wrap:break-word}.line-height-1{line-height:1rem}.line-height-2{line-height:1.125rem}.line-height-3{line-height:1.5rem}.line-height-4{line-height:2rem}.list-style-none{list-style:none}.underline{text-decoration:underline}.truncate{max-width:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.list-reset{list-style:none;padding-left:0}.inline{display:inline}.block{display:block}.inline-block{display:inline-block}.table{display:table}.table-cell{display:table-cell}.overflow-hidden{overflow:hidden}.overflow-scroll{overflow:scroll}.overflow-auto{overflow:auto}.clearfix:after,.clearfix:before{content:" ";display:table}.clearfix:after{clear:both}.left{float:left}.right{float:right}.fit{max-width:100%}.max-width-1{max-width:24rem}.max-width-2{max-width:32rem}.max-width-3{max-width:48rem}.max-width-4{max-width:64rem}.border-box{box-sizing:border-box}.align-baseline{vertical-align:baseline}.align-top{vertical-align:top}.align-middle{vertical-align:middle}.align-bottom{vertical-align:bottom}.m0{margin:0}.mt0{margin-top:0}.mr0{margin-right:0}.mb0{margin-bottom:0}.ml0,.mx0{margin-left:0}.mx0{margin-right:0}.my0{margin-top:0;margin-bottom:0}.m1{margin:.5rem}.mt1{margin-top:.5rem}.mr1{margin-right:.5rem}.mb1{margin-bottom:.5rem}.ml1,.mx1{margin-left:.5rem}.mx1{margin-right:.5rem}.my1{margin-top:.5rem;margin-bottom:.5rem}.m2{margin:1rem}.mt2{margin-top:1rem}.mr2{margin-right:1rem}.mb2{margin-bottom:1rem}.ml2,.mx2{margin-left:1rem}.mx2{margin-right:1rem}.my2{margin-top:1rem;margin-bottom:1rem}.m3{margin:1.5rem}.mt3{margin-top:1.5rem}.mr3{margin-right:1.5rem}.mb3{margin-bottom:1.5rem}.ml3,.mx3{margin-left:1.5rem}.mx3{margin-right:1.5rem}.my3{margin-top:1.5rem;margin-bottom:1.5rem}.m4{margin:2rem}.mt4{margin-top:2rem}.mr4{margin-right:2rem}.mb4{margin-bottom:2rem}.ml4,.mx4{margin-left:2rem}.mx4{margin-right:2rem}.my4{margin-top:2rem;margin-bottom:2rem}.mxn1{margin-left:-.5rem;margin-right:-.5rem}.mxn2{margin-left:-1rem;margin-right:-1rem}.mxn3{margin-left:-1.5rem;margin-right:-1.5rem}.mxn4{margin-left:-2rem;margin-right:-2rem}.ml-auto{margin-left:auto}.mr-auto,.mx-auto{margin-right:auto}.mx-auto{margin-left:auto}.p0{padding:0}.pt0{padding-top:0}.pr0{padding-right:0}.pb0{padding-bottom:0}.pl0,.px0{padding-left:0}.px0{padding-right:0}.py0{padding-top:0;padding-bottom:0}.p1{padding:.5rem}.pt1{padding-top:.5rem}.pr1{padding-right:.5rem}.pb1{padding-bottom:.5rem}.pl1{padding-left:.5rem}.py1{padding-top:.5rem;padding-bottom:.5rem}.px1{padding-left:.5rem;padding-right:.5rem}.p2{padding:1rem}.pt2{padding-top:1rem}.pr2{padding-right:1rem}.pb2{padding-bottom:1rem}.pl2{padding-left:1rem}.py2{padding-top:1rem;padding-bottom:1rem}.px2{padding-left:1rem;padding-right:1rem}.p3{padding:1.5rem}.pt3{padding-top:1.5rem}.pr3{padding-right:1.5rem}.pb3{padding-bottom:1.5rem}.pl3{padding-left:1.5rem}.py3{padding-top:1.5rem;padding-bottom:1.5rem}.px3{padding-left:1.5rem;padding-right:1.5rem}.p4{padding:2rem}.pt4{padding-top:2rem}.pr4{padding-right:2rem}.pb4{padding-bottom:2rem}.pl4{padding-left:2rem}.py4{padding-top:2rem;padding-bottom:2rem}.px4{padding-left:2rem;padding-right:2rem}.col{float:left}.col,.col-right{box-sizing:border-box}.col-right{float:right}.col-1{width:8.33333%}.col-2{width:16.66667%}.col-3{width:25%}.col-4{width:33.33333%}.col-5{width:41.66667%}.col-6{width:50%}.col-7{width:58.33333%}.col-8{width:66.66667%}.col-9{width:75%}.col-10{width:83.33333%}.col-11{width:91.66667%}.col-12{width:100%}@media (min-width:40.06rem){.sm-col{float:left;box-sizing:border-box}.sm-col-right{float:right;box-sizing:border-box}.sm-col-1{width:8.33333%}.sm-col-2{width:16.66667%}.sm-col-3{width:25%}.sm-col-4{width:33.33333%}.sm-col-5{width:41.66667%}.sm-col-6{width:50%}.sm-col-7{width:58.33333%}.sm-col-8{width:66.66667%}.sm-col-9{width:75%}.sm-col-10{width:83.33333%}.sm-col-11{width:91.66667%}.sm-col-12{width:100%}}@media (min-width:52.06rem){.md-col{float:left;box-sizing:border-box}.md-col-right{float:right;box-sizing:border-box}.md-col-1{width:8.33333%}.md-col-2{width:16.66667%}.md-col-3{width:25%}.md-col-4{width:33.33333%}.md-col-5{width:41.66667%}.md-col-6{width:50%}.md-col-7{width:58.33333%}.md-col-8{width:66.66667%}.md-col-9{width:75%}.md-col-10{width:83.33333%}.md-col-11{width:91.66667%}.md-col-12{width:100%}}@media (min-width:64.06rem){.lg-col{float:left;box-sizing:border-box}.lg-col-right{float:right;box-sizing:border-box}.lg-col-1{width:8.33333%}.lg-col-2{width:16.66667%}.lg-col-3{width:25%}.lg-col-4{width:33.33333%}.lg-col-5{width:41.66667%}.lg-col-6{width:50%}.lg-col-7{width:58.33333%}.lg-col-8{width:66.66667%}.lg-col-9{width:75%}.lg-col-10{width:83.33333%}.lg-col-11{width:91.66667%}.lg-col-12{width:100%}}.flex{display:-webkit-box;display:-ms-flexbox;display:flex}@media (min-width:40.06rem){.sm-flex{display:-webkit-box;display:-ms-flexbox;display:flex}}@media (min-width:52.06rem){.md-flex{display:-webkit-box;display:-ms-flexbox;display:flex}}@media (min-width:64.06rem){.lg-flex{display:-webkit-box;display:-ms-flexbox;display:flex}}.flex-column{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.flex-wrap{-ms-flex-wrap:wrap;flex-wrap:wrap}.items-start{-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start}.items-end{-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end}.items-center{-webkit-box-align:center;-ms-flex-align:center;align-items:center}.items-baseline{-webkit-box-align:baseline;-ms-flex-align:baseline;align-items:baseline}.items-stretch{-webkit-box-align:stretch;-ms-flex-align:stretch;align-items:stretch}.self-start{-ms-flex-item-align:start;align-self:flex-start}.self-end{-ms-flex-item-align:end;align-self:flex-end}.self-center{-ms-flex-item-align:center;-ms-grid-row-align:center;align-self:center}.self-baseline{-ms-flex-item-align:baseline;align-self:baseline}.self-stretch{-ms-flex-item-align:stretch;-ms-grid-row-align:stretch;align-self:stretch}.justify-start{-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.justify-end{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.justify-center{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.justify-between{-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.justify-around{-ms-flex-pack:distribute;justify-content:space-around}.content-start{-ms-flex-line-pack:start;align-content:flex-start}.content-end{-ms-flex-line-pack:end;align-content:flex-end}.content-center{-ms-flex-line-pack:center;align-content:center}.content-between{-ms-flex-line-pack:justify;align-content:space-between}.content-around{-ms-flex-line-pack:distribute;align-content:space-around}.content-stretch{-ms-flex-line-pack:stretch;align-content:stretch}.flex-auto{-webkit-box-flex:1;-ms-flex:1 1 auto;flex:1 1 auto;min-width:0;min-height:0}.flex-none{-webkit-box-flex:0;-ms-flex:none;flex:none}.order-0{-webkit-box-ordinal-group:1;-ms-flex-order:0;order:0}.order-1{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}.order-2{-webkit-box-ordinal-group:3;-ms-flex-order:2;order:2}.order-3{-webkit-box-ordinal-group:4;-ms-flex-order:3;order:3}.order-last{-webkit-box-ordinal-group:100000;-ms-flex-order:99999;order:99999}.relative{position:relative}.absolute{position:absolute}.fixed{position:fixed}.top-0{top:0}.right-0{right:0}.bottom-0{bottom:0}.left-0{left:0}.z1{z-index:1}.z2{z-index:2}.z3{z-index:3}.z4{z-index:4}.border{border-style:solid;border-width:1px}.border-top{border-top-style:solid;border-top-width:1px}.border-right{border-right-style:solid;border-right-width:1px}.border-bottom{border-bottom-style:solid;border-bottom-width:1px}.border-left{border-left-style:solid;border-left-width:1px}.border-none{border:0}.rounded{border-radius:3px}.circle{border-radius:50%}.rounded-top{border-radius:3px 3px 0 0}.rounded-right{border-radius:0 3px 3px 0}.rounded-bottom{border-radius:0 0 3px 3px}.rounded-left{border-radius:3px 0 0 3px}.not-rounded{border-radius:0}.hide{position:absolute;height:1px;width:1px;overflow:hidden;clip:rect(1px,1px,1px,1px)}@media (max-width:40rem){.xs-hide{display:none}}@media (min-width:40.06rem) and (max-width:52rem){.sm-hide{display:none}}@media (min-width:52.06rem) and (max-width:64rem){.md-hide{display:none}}@media (min-width:64.06rem){.lg-hide{display:none}}.display-none{display:none}*{box-sizing:border-box}body{background:#fff;color:#4a4a4a;line-height:1.5rem;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue,Arial,sans-serif;min-width:315px;overflow-x:hidden;font-smooth:always;-webkit-font-smoothing:antialiased}main{max-width:700px;margin:0 auto}p{padding:0;margin:0}.ampstart-subtitle{color:#4f4f4f;font-size:.875rem}.ampstart-accent{color:#003f93}.ampstart-card{box-shadow:0 1px 1px 0 rgba(0,0,0,.14),0 1px 1px -1px rgba(0,0,0,.14),0 1px 5px 0 rgba(0,0,0,.12)}.h1,h1{font-size:3rem;line-height:3.5rem}.h2,h2{font-size:2rem;line-height:2.5rem}.h3,h3{font-size:1.5rem;line-height:2rem}.h4,h4{font-size:1.125rem;line-height:1.5rem}.h5,h5{font-size:.875rem;line-height:1.125rem}.h6,h6{font-size:.75rem;line-height:1rem}h1,h2,h3,h4,h5,h6{margin:0;padding:0;font-weight:400;letter-spacing:.06em}a,a:active,a:visited{color:inherit}.ampstart-btn{font-size:1rem;padding:.7em .8em;text-decoration:none;white-space:nowrap;word-wrap:normal;vertical-align:middle;cursor:pointer;background-color:#000;color:#fff;border:1px solid #fff}.ampstart-btn-secondary{background-color:#fff;color:#000;border:1px solid #000}.ampstart-btn:active .ampstart-btn:focus{opacity:.8}.ampstart-btn[disabled],.ampstart-btn[disabled]:active,.ampstart-btn[disabled]:focus,.ampstart-btn[disabled]:hover{opacity:.5;outline:0;cursor:default}.ampstart-dropcap{padding-top:1rem;margin-top:1.5rem}.ampstart-dropcap:first-letter{color:#000;font-size:3rem;font-weight:700;margin-left:-2px}.ampstart-pullquote{border:none;border-left:4px solid #000;font-size:1.5rem;padding-left:1.5rem}.ampstart-byline{color:#4a4a4a}.ampstart-byline time{font-style:normal;white-space:nowrap}.amp-carousel-button-next{background-image:url('data:image/svg+xml;charset=utf-8,<svg width="18" height="18" viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg"><title>Shape</title><path d="M25.557 14.7L13.818 2.961 16.8 0l16.8 16.8-16.8 16.8-2.961-2.961L25.557 18.9H0v-4.2z" fill="#FFF" fill-rule="evenodd"/></svg>')}.amp-carousel-button-prev{background-image:url('data:image/svg+xml;charset=utf-8,<svg width="18" height="18" viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg"><title>Shape</title><path d="M33.6 14.7H8.043L19.782 2.961 16.8 0 0 16.8l16.8 16.8 2.961-2.961L8.043 18.9H33.6z" fill="#FFF" fill-rule="evenodd"/></svg>')}.ampstart-dropdown{min-width:200px}.ampstart-dropdown.absolute{z-index:100}.ampstart-dropdown.absolute>section,.ampstart-dropdown.absolute>section>header{height:100%}.ampstart-dropdown>section>header{background-color:#000;border:0;color:#fff}.ampstart-dropdown>section>header:after{display:inline-block;content:"+";padding:0 0 0 1.5rem;color:#003f93}.ampstart-dropdown>[expanded]>header:after{content:"-"}.absolute .ampstart-dropdown-items{z-index:200}.ampstart-dropdown-item{background-color:#000;color:#003f93;opacity:.9}.ampstart-dropdown-item:active,.ampstart-dropdown-item:hover{opacity:1}.ampstart-footer{background-color:#fff;color:#000;font-size:.75rem;padding-top:5rem;padding-bottom:5rem}.ampstart-footer .ampstart-icon{fill:#000}.ampstart-footer .ampstart-social-follow li:last-child{margin-right:0}.ampstart-image-fullpage-hero{color:#fff}.ampstart-fullpage-hero-heading-text,.ampstart-image-fullpage-hero .ampstart-image-credit{-webkit-box-decoration-break:clone;box-decoration-break:clone;background:#000;padding:0 1rem .2rem}.ampstart-image-fullpage-hero>amp-img{max-height:calc(100vh - 3.5rem)}.ampstart-image-fullpage-hero>amp-img img{-o-object-fit:cover;object-fit:cover}.ampstart-fullpage-hero-heading{line-height:3.5rem}.ampstart-fullpage-hero-cta{background:transparent}.ampstart-readmore{background:-webkit-linear-gradient(bottom,rgba(0,0,0,.65),transparent);background:linear-gradient(0deg,rgba(0,0,0,.65) 0,transparent);color:#fff;margin-top:5rem;padding-bottom:3.5rem}.ampstart-readmore:after{display:block;content:"v"}@media (min-width:52.06rem){.ampstart-image-fullpage-hero>amp-img{height:60vh}}.ampstart-image-heading{color:#fff;background:-webkit-linear-gradient(bottom,rgba(0,0,0,.65),transparent);background:linear-gradient(0deg,rgba(0,0,0,.65) 0,transparent)}.ampstart-image-heading>*{margin:0}amp-carousel .ampstart-image-with-heading{margin-bottom:0}.ampstart-image-with-caption figcaption{color:#4f4f4f;line-height:1.125rem}amp-carousel .ampstart-image-with-caption{margin-bottom:0}.ampstart-input{max-width:100%;width:300px;min-width:100px;font-size:1rem;line-height:1.5rem}.ampstart-input [disabled],.ampstart-input [disabled]+label{opacity:.5}.ampstart-input [disabled]:focus{outline:0}.ampstart-input>input,.ampstart-input>select,.ampstart-input>textarea{width:100%;margin-top:1rem;line-height:1.5rem;border:0;border-radius:0;border-bottom:1px solid #4a4a4a;background:none;color:#4a4a4a;outline:0}.ampstart-input>label{color:#003f93;pointer-events:none;font-size:.875rem;line-height:1rem;opacity:0;-webkit-animation:.2s;animation:.2s;-webkit-animation-timing-function:cubic-bezier(.4,0,.2,1);animation-timing-function:cubic-bezier(.4,0,.2,1);-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards}.ampstart-input>input:focus,.ampstart-input>select:focus,.ampstart-input>textarea:focus{outline:0}.ampstart-input>input:focus::-webkit-input-placeholder,.ampstart-input>select:focus::-webkit-input-placeholder,.ampstart-input>textarea:focus::-webkit-input-placeholder{color:transparent}.ampstart-input>input:focus::-moz-placeholder,.ampstart-input>select:focus::-moz-placeholder,.ampstart-input>textarea:focus::-moz-placeholder{color:transparent}.ampstart-input>input:focus:-ms-input-placeholder,.ampstart-input>select:focus:-ms-input-placeholder,.ampstart-input>textarea:focus:-ms-input-placeholder{color:transparent}.ampstart-input>input:focus::placeholder,.ampstart-input>select:focus::placeholder,.ampstart-input>textarea:focus::placeholder{color:transparent}.ampstart-input>input:not(:placeholder-shown):not([disabled])+label,.ampstart-input>select:not(:placeholder-shown):not([disabled])+label,.ampstart-input>textarea:not(:placeholder-shown):not([disabled])+label{opacity:1}.ampstart-input>input:focus+label,.ampstart-input>select:focus+label,.ampstart-input>textarea:focus+label{-webkit-animation-name:a;animation-name:a}@-webkit-keyframes a{to{opacity:1}}@keyframes a{to{opacity:1}}.ampstart-input>label:after{content:"";height:2px;position:absolute;bottom:0;left:45%;background:#003f93;-webkit-transition:.2s;transition:.2s;-webkit-transition-timing-function:cubic-bezier(.4,0,.2,1);transition-timing-function:cubic-bezier(.4,0,.2,1);visibility:hidden;width:10px}.ampstart-input>input:focus+label:after,.ampstart-input>select:focus+label:after,.ampstart-input>textarea:focus+label:after{left:0;width:100%;visibility:visible}.ampstart-input>input[type=search]{-webkit-appearance:none;-moz-appearance:none;appearance:none}.ampstart-input>input[type=range]{border-bottom:0}.ampstart-input>input[type=range]+label:after{display:none}.ampstart-input>select{-webkit-appearance:none;-moz-appearance:none;appearance:none}.ampstart-input>select+label:before{content:"⌄";line-height:1.5rem;position:absolute;right:5px;zoom:2;top:0;bottom:0;color:#003f93}.ampstart-input-chk,.ampstart-input-radio{width:auto;color:#4a4a4a}.ampstart-input input[type=checkbox],.ampstart-input input[type=radio]{margin-top:0;-webkit-appearance:none;-moz-appearance:none;appearance:none;width:20px;height:20px;border:1px solid #003f93;vertical-align:middle;margin-right:.5rem;text-align:center}.ampstart-input input[type=radio]{border-radius:20px}.ampstart-input input[type=checkbox]:not([disabled])+label,.ampstart-input input[type=radio]:not([disabled])+label{pointer-events:auto;-webkit-animation:none;animation:none;vertical-align:middle;opacity:1}.ampstart-input input[type=checkbox]+label:after,.ampstart-input input[type=radio]+label:after{display:none}.ampstart-input input[type=checkbox]:after,.ampstart-input input[type=radio]:after{position:absolute;top:0;left:0;bottom:0;right:0;content:" ";line-height:1.4rem;vertical-align:middle;text-align:center;background-color:#fff}.ampstart-input input[type=checkbox]:checked:after{background-color:#003f93;color:#fff;content:"✓"}.ampstart-input input[type=radio]:checked{background-color:#fff}.ampstart-input input[type=radio]:after{top:3px;bottom:3px;left:3px;right:3px;border-radius:12px}.ampstart-input input[type=radio]:checked:after{content:"";font-size:3rem;background-color:#003f93}.ampstart-input>label,_:-ms-lang(x){opacity:1}.ampstart-input>input:-ms-input-placeholder,_:-ms-lang(x){color:transparent}.ampstart-input>input::placeholder,_:-ms-lang(x){color:transparent}.ampstart-input>input::-ms-input-placeholder,_:-ms-lang(x){color:transparent}.ampstart-input>select::-ms-expand{display:none}.ampstart-headerbar{background-color:#fff;color:#000;z-index:999;box-shadow:0 0 5px 2px rgba(0,0,0,.1)}.ampstart-headerbar+:not(amp-sidebar),.ampstart-headerbar+amp-sidebar+*{margin-top:3.5rem}.ampstart-headerbar-nav .ampstart-nav-item{padding:0 1rem;background:transparent;opacity:.8}.ampstart-headerbar-nav{line-height:3.5rem}.ampstart-nav-item:active,.ampstart-nav-item:focus,.ampstart-nav-item:hover{opacity:1}.ampstart-navbar-trigger:focus{outline:none}.ampstart-nav a,.ampstart-navbar-trigger,.ampstart-sidebar-faq a{cursor:pointer;text-decoration:none}.ampstart-navbar-trigger{line-height:3.5rem;font-size:2rem}.ampstart-headerbar-nav{-webkit-box-flex:1;-ms-flex:1;flex:1}.ampstart-nav-search{-webkit-box-flex:0.5;-ms-flex-positive:0.5;flex-grow:0.5}.ampstart-headerbar .ampstart-nav-search:active,.ampstart-headerbar .ampstart-nav-search:focus,.ampstart-headerbar .ampstart-nav-search:hover{box-shadow:none}.ampstart-nav-search>input{border:none;border-radius:3px;line-height:normal}.ampstart-nav-dropdown{min-width:200px}.ampstart-nav-dropdown amp-accordion header{background-color:#fff;border:none}.ampstart-nav-dropdown amp-accordion ul{background-color:#fff}.ampstart-nav-dropdown .ampstart-dropdown-item,.ampstart-nav-dropdown .ampstart-dropdown>section>header{background-color:#fff;color:#000}.ampstart-nav-dropdown .ampstart-dropdown-item{color:#003f93}.ampstart-sidebar{background-color:#fff;color:#000;min-width:300px;width:300px}.ampstart-sidebar .ampstart-icon{fill:#003f93}.ampstart-sidebar-header{line-height:3.5rem;min-height:3.5rem}.ampstart-sidebar .ampstart-dropdown-item,.ampstart-sidebar .ampstart-dropdown header,.ampstart-sidebar .ampstart-faq-item,.ampstart-sidebar .ampstart-nav-item,.ampstart-sidebar .ampstart-social-follow{margin:0 0 2rem}.ampstart-sidebar .ampstart-nav-dropdown{margin:0}.ampstart-sidebar .ampstart-navbar-trigger{line-height:inherit}.ampstart-related-article-section{border-color:#4a4a4a}.ampstart-related-article-section .ampstart-heading{color:#4a4a4a;font-weight:400}.ampstart-related-article-readmore{color:#000;letter-spacing:0}.ampstart-related-section-items>li{border-bottom:1px solid #4a4a4a}.ampstart-related-section-items>li:last-child{border:none}.ampstart-related-section-items .ampstart-image-with-caption{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin-bottom:0}.ampstart-related-section-items .ampstart-image-with-caption>amp-img,.ampstart-related-section-items .ampstart-image-with-caption>figcaption{-webkit-box-flex:1;-ms-flex:1;flex:1}.ampstart-related-section-items .ampstart-image-with-caption>figcaption{padding-left:1rem}@media (min-width:40.06rem){.ampstart-related-section-items>li{border:none}.ampstart-related-section-items .ampstart-image-with-caption>figcaption{padding:1rem 0}.ampstart-related-section-items .ampstart-image-with-caption>amp-img,.ampstart-related-section-items .ampstart-image-with-caption>figcaption{-ms-flex-preferred-size:100%;flex-basis:100%}}.ampstart-social-box{display:-webkit-box;display:-ms-flexbox;display:flex}.ampstart-social-box>amp-social-share{background-color:#000}.ampstart-icon{fill:#003f93}
    
    /* low opacity for non-selected thumbnails */
    amp-selector amp-img[option] {
      opacity: 0.4;
    }

    /* normal opacity for the selected thumbnail */
    amp-selector amp-img[option][selected] {
      opacity: 1;
    }
  </style>

  <script async="" src="https://cdn.ampproject.org/v0.js"></script>
</head>

<body>

  <!-- Start Navbar -->
  <header class="ampstart-headerbar fixed flex justify-start items-center top-0 left-0 right-0 pl2 pr4">
    <div role="button" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger md-hide lg-hide pr2">☰</div>
    <amp-img src="../img/thescenic/header-logo.png" width="110" height="33" layout="fixed" class="my0 mx-auto " alt="The Blog"></amp-img>
    <nav class="ampstart-headerbar-nav ampstart-nav xs-hide sm-hide">
      <ul class="list-reset center m0 p0 flex justify-center nowrap">
        <li class="ampstart-nav-item ampstart-nav-dropdown relative">

          <!-- Start Dropdown -->
          <amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown absolute top-0 left-0 right-0 bottom-0">
            <section>
              <header>Fashion</header>
              <ul class="ampstart-dropdown-items list-reset m0 p0">
                <li class="ampstart-dropdown-item">
                  <a href="#" class="text-decoration-none">Styling Tips</a>
                </li>
                <li class="ampstart-dropdown-item">
                  <a href="#" class="text-decoration-none">Designers</a>
                </li>
              </ul>
            </section>
          </amp-accordion>

          <!-- End Dropdown -->
        </li>
        <li class="ampstart-nav-item ">
          <a href="#" class="text-decoration-none block">Travel</a>
        </li>
        <li class="ampstart-nav-item ampstart-nav-dropdown relative">


          <!-- Start Dropdown -->
          <amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown absolute top-0 left-0 right-0 bottom-0">
            <section>
              <header>Food</header>
              <ul class="ampstart-dropdown-items list-reset m0 p0">
                <li class="ampstart-dropdown-item"><a href="#" class="text-decoration-none">Recipes</a></li>
                <li class="ampstart-dropdown-item"><a href="#" class="text-decoration-none">Hosting Tips</a></li>
              </ul>
            </section>
          </amp-accordion>

          <!-- End Dropdown -->
        </li>
        <li class="ampstart-nav-item ">
          <a href="#" class="text-decoration-none block">Beauty</a>
        </li>
        <li class="ampstart-nav-item ">
          <a href="#" class="text-decoration-none block">Shop</a>
        </li>
      </ul>
    </nav>
  </header>

  <!-- Start Sidebar -->
  <amp-sidebar id="header-sidebar" class="ampstart-sidebar px3 md-hide lg-hide" layout="nodisplay">
    <div class="flex justify-start items-center ampstart-sidebar-header">
      <div role="button" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger items-start">✕</div>
    </div>
    <nav class="ampstart-sidebar-nav ampstart-nav">
      <ul class="list-reset m0 p0 caps h5">
        <li class="ampstart-nav-item ampstart-nav-dropdown relative">


          <!-- Start Dropdown-inline -->
          <amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown">
            <section>
              <header>Fashion</header>
              <ul class="ampstart-dropdown-items list-reset m0 p0">
                <li class="ampstart-dropdown-item"><a href="#" class="text-decoration-none">Styling Tips</a></li>
                <li class="ampstart-dropdown-item"><a href="#" class="text-decoration-none">Designers</a></li>
              </ul>
            </section>
          </amp-accordion>

          <!-- End Dropdown-inline -->
        </li>
        <li class="ampstart-nav-item"><a href="#">Travel</a></li>
        <li class="ampstart-nav-item ampstart-nav-dropdown relative">


          <!-- Start Dropdown-inline -->
          <amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown">
            <section>
              <header>Food</header>
              <ul class="ampstart-dropdown-items list-reset m0 p0">
                <li class="ampstart-dropdown-item"><a href="#" class="text-decoration-none">Recipes</a></li>
                <li class="ampstart-dropdown-item"><a href="#" class="text-decoration-none">Hosting Tips</a></li>
              </ul>
            </section>
          </amp-accordion>

          <!-- End Dropdown-inline -->
        </li>
        <li class="ampstart-nav-item"><a href="#">Beauty</a></li>
        <li class="ampstart-nav-item"><a href="#">Shop</a></li>
      </ul>
    </nav>

    <ul class="ampstart-social-follow list-reset flex justify-around items-center flex-wrap m0 mb4">
      <li class="mr2">
        <a href="#" class="inline-block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="22.2" viewbox="0 0 53 49"><title>Twitter</title><path d="M45 6.9c-1.6 1-3.3 1.6-5.2 2-1.5-1.6-3.6-2.6-5.9-2.6-4.5 0-8.2 3.7-8.2 8.3 0 .6.1 1.3.2 1.9-6.8-.4-12.8-3.7-16.8-8.7C8.4 9 8 10.5 8 12c0 2.8 1.4 5.4 3.6 6.9-1.3-.1-2.6-.5-3.7-1.1v.1c0 4 2.8 7.4 6.6 8.1-.7.2-1.5.3-2.2.3-.5 0-1 0-1.5-.1 1 3.3 4 5.7 7.6 5.7-2.8 2.2-6.3 3.6-10.2 3.6-.6 0-1.3-.1-1.9-.1 3.6 2.3 7.9 3.7 12.5 3.7 15.1 0 23.3-12.6 23.3-23.6 0-.3 0-.7-.1-1 1.6-1.2 3-2.7 4.1-4.3-1.4.6-3 1.1-4.7 1.3 1.7-1 3-2.7 3.6-4.6" class="ampstart-icon ampstart-icon-twitter"></path></svg></a>
      </li>
      <li class="mr2">
        <a href="#" class="inline-block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="23.6" viewbox="0 0 56 55"><title>Facebook</title><path d="M47.5 43c0 1.2-.9 2.1-2.1 2.1h-10V30h5.1l.8-5.9h-5.9v-3.7c0-1.7.5-2.9 3-2.9h3.1v-5.3c-.6 0-2.4-.2-4.6-.2-4.5 0-7.5 2.7-7.5 7.8v4.3h-5.1V30h5.1v15.1H10.7c-1.2 0-2.2-.9-2.2-2.1V8.3c0-1.2 1-2.2 2.2-2.2h34.7c1.2 0 2.1 1 2.1 2.2V43" class="ampstart-icon ampstart-icon-fb"></path></svg></a>
      </li>
      <li class="mr2">
        <a href="#" class="inline-block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 54 54"><title>instagram</title><path d="M27.2 6.1c-5.1 0-5.8 0-7.8.1s-3.4.4-4.6.9c-1.2.5-2.3 1.1-3.3 2.2-1.1 1-1.7 2.1-2.2 3.3-.5 1.2-.8 2.6-.9 4.6-.1 2-.1 2.7-.1 7.8s0 5.8.1 7.8.4 3.4.9 4.6c.5 1.2 1.1 2.3 2.2 3.3 1 1.1 2.1 1.7 3.3 2.2 1.2.5 2.6.8 4.6.9 2 .1 2.7.1 7.8.1s5.8 0 7.8-.1 3.4-.4 4.6-.9c1.2-.5 2.3-1.1 3.3-2.2 1.1-1 1.7-2.1 2.2-3.3.5-1.2.8-2.6.9-4.6.1-2 .1-2.7.1-7.8s0-5.8-.1-7.8-.4-3.4-.9-4.6c-.5-1.2-1.1-2.3-2.2-3.3-1-1.1-2.1-1.7-3.3-2.2-1.2-.5-2.6-.8-4.6-.9-2-.1-2.7-.1-7.8-.1zm0 3.4c5 0 5.6 0 7.6.1 1.9.1 2.9.4 3.5.7.9.3 1.6.7 2.2 1.4.7.6 1.1 1.3 1.4 2.2.3.6.6 1.6.7 3.5.1 2 .1 2.6.1 7.6s0 5.6-.1 7.6c-.1 1.9-.4 2.9-.7 3.5-.3.9-.7 1.6-1.4 2.2-.7.7-1.3 1.1-2.2 1.4-.6.3-1.7.6-3.5.7-2 .1-2.6.1-7.6.1-5.1 0-5.7 0-7.7-.1-1.8-.1-2.9-.4-3.5-.7-.9-.3-1.5-.7-2.2-1.4-.7-.7-1.1-1.3-1.4-2.2-.3-.6-.6-1.7-.7-3.5 0-2-.1-2.6-.1-7.6 0-5.1.1-5.7.1-7.7.1-1.8.4-2.8.7-3.5.3-.9.7-1.5 1.4-2.2.7-.6 1.3-1.1 2.2-1.4.6-.3 1.6-.6 3.5-.7h7.7zm0 5.8c-5.4 0-9.7 4.3-9.7 9.7 0 5.4 4.3 9.7 9.7 9.7 5.4 0 9.7-4.3 9.7-9.7 0-5.4-4.3-9.7-9.7-9.7zm0 16c-3.5 0-6.3-2.8-6.3-6.3s2.8-6.3 6.3-6.3 6.3 2.8 6.3 6.3-2.8 6.3-6.3 6.3zm12.4-16.4c0 1.3-1.1 2.3-2.3 2.3-1.3 0-2.3-1-2.3-2.3 0-1.2 1-2.3 2.3-2.3 1.2 0 2.3 1.1 2.3 2.3z" class="ampstart-icon ampstart-icon-instagram"></path></svg></a>
      </li>
      <li class="mr2">
        <a href="#" class="inline-block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="28.5" viewbox="0 0 43 51"><title>pinterest</title><path d="M-13.6-5c0-1.6.2-3 .8-4.4.5-1.4 1.2-2.6 2.2-3.6.9-1 2-1.9 3.2-2.6 1.2-.8 2.5-1.3 3.9-1.7 1.5-.4 2.9-.5 4.4-.5 2.2 0 4.3.4 6.2 1.4 1.9.9 3.5 2.3 4.7 4.1 1.2 1.9 1.8 3.9 1.8 6.2 0 1.4-.1 2.7-.4 4C13-.8 12.5.5 12 1.7c-.6 1.2-1.3 2.3-2.2 3.2C9 5.8 8 6.6 6.7 7.1c-1.2.6-2.5.9-4 .9-1 0-1.9-.3-2.9-.7-.9-.5-1.6-1.1-2-1.9-.1.5-.3 1.4-.6 2.4-.3 1.1-.4 1.7-.5 2-.1.3-.2.9-.4 1.6-.3.7-.4 1.2-.6 1.5-.1.3-.4.7-.7 1.3-.3.6-.6 1.2-1 1.7-.3.5-.7 1.1-1.3 1.8l-.3.1-.2-.2c-.2-2.2-.3-3.6-.3-4 0-1.3.2-2.8.5-4.4.3-1.7.8-3.7 1.4-6.2.6-2.5 1-3.9 1.1-4.4-.5-.9-.7-2.1-.7-3.6 0-1.2.4-2.3 1.1-3.3.8-1.1 1.7-1.6 2.8-1.6.9 0 1.6.3 2.1.9.4.6.7 1.3.7 2.2 0 .9-.3 2.3-1 4.1C-.7-.9-1 .4-1 1.3c0 .9.3 1.6 1 2.2.6.6 1.4.9 2.3.9.8 0 1.5-.2 2.2-.5.6-.4 1.2-.9 1.6-1.5.5-.6.9-1.3 1.2-2 .4-.8.6-1.5.8-2.4.2-.8.4-1.6.5-2.4.1-.7.1-1.4.1-2.1 0-2.5-.8-4.4-2.3-5.8-1.6-1.4-3.6-2.1-6.1-2.1-2.8 0-5.2 1-7.1 2.8-1.9 1.9-2.9 4.2-2.9 7.1 0 .6.1 1.2.3 1.8.2.6.4 1.1.6 1.4.2.3.4.7.5 1 .2.3.3.5.3.6 0 .4-.1.9-.3 1.6-.2.6-.5 1-.8 1 0 0-.1-.1-.4-.1-.7-.2-1.3-.6-1.9-1.2-.5-.6-1-1.3-1.3-2-.3-.8-.5-1.6-.7-2.4-.2-.7-.2-1.5-.2-2.2z" transform="translate(21.734 23.748)" class="ampstart-icon ampstart-icon-pinterest"></path></svg></a>
      </li>
      <li class="mr2">
        <a href="#" class="inline-block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="18.4" viewbox="0 0 56 43"><title>email</title><path d="M10.5 6.4C9.1 6.4 8 7.5 8 8.9v21.3c0 1.3 1.1 2.5 2.5 2.5h34.9c1.4 0 2.5-1.2 2.5-2.5V8.9c0-1.4-1.1-2.5-2.5-2.5H10.5zm2.1 2.5h30.7L27.9 22.3 12.6 8.9zm-2.1 1.4l16.6 14.6c.5.4 1.2.4 1.7 0l16.6-14.6v19.9H10.5V10.3z" class="ampstart-icon ampstart-icon-email"></path></svg></a>
      </li>
    </ul>

    <ul class="ampstart-sidebar-faq list-reset m0">
      <li class="ampstart-faq-item">
        <a href="#" class="text-decoration-none">About</a>
      </li>
      <li class="ampstart-faq-item">
        <a href="#" class="text-decoration-none">Contact</a>
      </li>
    </ul>

  </amp-sidebar>
  <!-- End Sidebar -->
  <!-- End Navbar -->

  <figure class="ampstart-image-fullpage-hero m0 relative mb4">
    <amp-img width="600" height="900" layout="responsive" src="https://unsplash.it/600/900?image=1003" media="(max-width: 415px)"></amp-img>
    <amp-img height="1800" layout="fixed-height" src="https://unsplash.it/1200/1800?image=1003" media="(min-width: 416px)"></amp-img>
    <figcaption class="absolute top-0 right-0 bottom-0 left-0">
      <header class="p3">
        <h1 class="ampstart-fullpage-hero-heading mb3">
        <span class="ampstart-fullpage-hero-heading-text">
          Most Beautiful Hikes in the Pacific Northwest
        </span>
      </h1>
        <span class="ampstart-image-credit h4">
        By <a href="#" role="author" class="text-decoration-none">D.F. Roy</a>,<br> January 14, 2017
      </span>
      </header>
      <footer class="absolute left-0 right-0 bottom-0">
        <a class="ampstart-readmore py3 caps line-height-2 text-decoration-none center block h5" href="#content">Read more</a>
      </footer>
    </figcaption>
  </figure>

  <main id="content">
    <!-- Add headings and paragraphs -->
    <h2 class="px3 pt2 mb2">Photo Gallery</h2>
    <p class="ampstart-dropcap mb4 px3">Vivamus viverra augue libero, vitae dapibus lectus accumsan eget. Pellentesque eget ipsum purus. Maecenas leo odio, ornare nec ex id, suscipit porta ipsum. Ut fringilla semper cursus.</p>

    <!-- Add an image-->
    <amp-img layout="responsive" width="1080" height="720" srcset="https://unsplash.it/1080/720?image=1043 1080w, https://unsplash.it/720/480?image=1043 720w" alt="Photo of mountains and trees landscape">
    </amp-img>


    <p class="my2 px3">Vivamus viverra augue libero, vitae dapibus lectus accumsan eget. Pellentesque eget ipsum purus. Maecenas leo odio, ornare nec ex id, suscipit porta ipsum. Ut fringilla semper cursus.</p>

    <!-- Add an autoplaying video-->
    <amp-video layout="responsive" width="1280" height="720" autoplay controls loop src="https://storage.googleapis.com/ampconf-76504.appspot.com/Bullfinch%20-%202797.mp4">
    </amp-video>

    <p class="my2 px3">Vivamus viverra augue libero, vitae dapibus lectus accumsan eget. Pellentesque eget ipsum purus. Maecenas leo odio, ornare nec ex id, suscipit porta ipsum. Ut fringilla semper cursus.</p>

    <!-- Add an embed -->
    <amp-instagram layout="responsive" width="566" height="708" data-shortcode="BJ_sPxzAGyg">
    </amp-instagram>

    <p class="my2 px3">Vivamus viverra augue libero, vitae dapibus lectus accumsan eget. Pellentesque eget ipsum purus. Maecenas leo odio, ornare nec ex id, suscipit porta ipsum. Ut fringilla semper cursus.</p>

    <div class="px3">Image <span [text]="1*selectedSlide + 1">1</span> of 8</div>

    <amp-carousel [slide]="selectedSlide" on="slideChange:AMP.setState({selectedSlide:event.index})" type="slides" id="imageSlides" layout="responsive" width="1080" height="720">

      <amp-img src="https://unsplash.it/1080/720?image=1037" layout="fill"></amp-img>
      <amp-img src="https://unsplash.it/1080/720?image=1038" layout="fill"></amp-img>
      <amp-img src="https://unsplash.it/1080/720?image=1039" layout="fill"></amp-img>
      <amp-img src="https://unsplash.it/1080/720?image=1040" layout="fill"></amp-img>
      <amp-img src="https://unsplash.it/1080/720?image=1041" layout="fill"></amp-img>
      <amp-img src="https://unsplash.it/1080/720?image=1042" layout="fill"></amp-img>
      <amp-img src="https://unsplash.it/1080/720?image=1043" layout="fill"></amp-img>
      <amp-img src="https://unsplash.it/1080/720?image=1044" layout="fill"></amp-img>

    </amp-carousel>

    <amp-selector [selected]="selectedSlide" on="select:AMP.setState({selectedSlide:event.targetOption})">

      <amp-carousel layout="fixed-height" height="78" class="mt1">

        <amp-img option=0 selected src="https://unsplash.it/108/72?image=1037" layout="fixed" width="108" height="72"></amp-img>
        <amp-img option=1 src="https://unsplash.it/108/72?image=1038" layout="fixed" width="108" height="72"></amp-img>
        <amp-img option=2 src="https://unsplash.it/108/72?image=1039" layout="fixed" width="108" height="72"></amp-img>
        <amp-img option=3 src="https://unsplash.it/108/72?image=1040" layout="fixed" width="108" height="72"></amp-img>
        <amp-img option=4 src="https://unsplash.it/108/72?image=1041" layout="fixed" width="108" height="72"></amp-img>
        <amp-img option=5 src="https://unsplash.it/108/72?image=1042" layout="fixed" width="108" height="72"></amp-img>
        <amp-img option=6 src="https://unsplash.it/108/72?image=1043" layout="fixed" width="108" height="72"></amp-img>
        <amp-img option=7 src="https://unsplash.it/108/72?image=1044" layout="fixed" width="108" height="72"></amp-img>

      </amp-carousel>

    </amp-selector>

  </main>
</body>

</html>