<?php header("Content-type: text/css; charset: UTF-8"); ?>
#banner{
    width: auto;
    background-size: cover;
    background-repeat: no-repeat;
    border:6px red;
    
}

.box2{
    margin: 20px auto;
    width: 300px;
    min-height: 150px;
    padding: 10px;
    position:relative;
    background: -webkit-gradient(linear, 0% 20%, 0% 92%, from(#f3f3f3), to(#fff), color-stop(.1,#f3f3f3));
    border-top: 1px solid #ccc;
    border-right: 1px solid #ccc;
    -webkit-border-bottom-right-radius: 60px 60px;
    -webkit-box-shadow: -1px 2px 2px rgba(0, 0, 0, 0.2);
    
}
.box2:before{
    content:'';    
    width: 25px;
    height: 20px;
    position: absolute;
    bottom:0;
    right:0;
    -webkit-border-bottom-right-radius: 30px;
    -webkit-box-shadow: -2px -2px 5px rgba(0, 0, 0, 0.3);
    -webkit-transform:
    rotate(-20deg)
    skew(-40deg,-3deg)
    translate(-13px,-13px);
}

.box2:after{
    content: '';
    z-index: -1;
    width: 100px;
    height: 100px;
    position:absolute;
    bottom:0;
    right:0;
    background: rgba(0, 0, 0, 0.2);
    display: inline-block;
    -webkit-box-shadow: 20px 20px 8px rgba(0, 0, 0, 0.2);
    -webkit-transform: rotate(0deg)
                        translate(-45px,-20px)
                           skew(20deg);
}

.box2 img {
    width: 100%;
    margin-top: 15px;
}

p{ 
    margin-top: 15px;
    text-align: justify;
}

h1{
    font-size: 20px;
    font-weight: bold;
    margin-top: 5px; 
    text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
}

a{
    text-decoration: none;
    color: #4A4A4A !important;
}

a:hover{
    text-decoration: underline;
    color: #6B6B6B !important ;
}


.box3{
    margin: 20px auto;
    width: 300px;
    min-height: 310px;
    padding: 10px;
    position:relative;
    background: -webkit-gradient(linear, 0% 20%, 0% 92%, from(#fff), to(#f3f3f3), color-stop(.1,#fff));
    border: 1px solid #ccc;
    -webkit-border-radius: 60px 5px;
    -webkit-box-shadow: 0px 0px 35px rgba(0, 0, 0, 0.1) inset;
}

.box3:before{
    content: '';
    width: 50px;
    height: 50px;
    top:0; right:0;
    position:absolute;
    display: inline-block;
    z-index:-1;
    -webkit-box-shadow: 10px -10px 8px rgba(0, 0, 0, 0.2);
    -webkit-transform: rotate(2deg)
                        translate(-14px,20px)
                           skew(-20deg);
}

.box3:after{
    content: '';
    width: 100px;
    height: 100px;
    top:0; left:0;
    position:absolute;
    z-index:-1;
    display: inline-block;
    -webkit-box-shadow: -10px -10px 10px rgba(0, 0, 0, 0.2);
    -webkit-transform: rotate(2deg)
                        translate(20px,25px)
                           skew(20deg);
}

.box3 img {
    width: 100%;
    margin-top: 15px;
}

wrap {
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    -ms-border-radius: 8px;
    -o-border-radius: 8px;
    border-radius: 8px;
    -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
    display: -moz-inline-box;
    -moz-box-orient: vertical;
    display: inline-block;
    width: 300px;
    height:310px;
    background: #EBEBEB;
    border: 1px solid #CCC;
    margin: 20px auto;
    position: relative;
    padding: 20px 10px 10px;
}

.noise {
    position: relative;
    z-index: 1;
}
        
.noise:before, .body-noise:before {
    content: "";
    position: absolute;
    z-index: -1;
    top:0;
    bottom:0;
    left:1px;
    right:0;
    background-image: url(data:image/png;base64,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);
    
    
    }

.horiz-flag {
    -webkit-box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.35);
    -moz-box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.35);
    box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.35);
    background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #9FBFDC), color-stop(100%, #3C74A6));
    background-image: -webkit-linear-gradient(#9FBFDC, #3C74A6);
    background-image: -moz-linear-gradient(#9FBFDC, #3C74A6);
    background-image: -o-linear-gradient(#9FBFDC, #3C74A6);
    background-image: -ms-linear-gradient(#9FBFDC, #3C74A6);
    background-image: linear-gradient(#9FBFDC, #3C74A6);
    display: -moz-inline-box;
    -moz-box-orient: vertical;
    display: inline-block;
    vertical-align: middle;
    height: 40px;
    line-height: 40px;
    position: absolute;
    padding-right: 40px;
    left: -2px;
    padding-left: 10px;
    top: 15px;
    color: white;
}

.horiz-flag::before {
    content: '';
    display: block;
    height: 0;
    border-style: solid;
    border-width: 20px;
    border-color: transparent;
    border-right-color: #EBEBEB;
    position: absolute;
    right: -1px;
    top: 0;
}

.wrap img {
    width: 100%;
    margin-top: 50px;
}