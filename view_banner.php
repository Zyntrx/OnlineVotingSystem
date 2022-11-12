<style type="text/css">
nav ul li{
    display: inline-block;
    padding-left: 20px;
    padding-bottom: 10px;
}
nav ul li:hover{
    text-decoration: none;
}
a:hover{
    text-decoration: none;
}
div::before,
div::after {
  content: "";
  position: fixed;
  top: 0;
  left: 0;
  opacity: 0.9;
  transform-origin: top;
  transition: all 5s linear 0s;
}

.purple {
  -webkit-animation: purple linear 30s alternate infinite;
          animation: purple linear 30s alternate infinite;
  border: 2px solid #241379;
  border-radius: 100%;
  width: 7px;
  height: 7px;
  transform: translate3d(3vw, 2vh, 0);
  z-index: 2;
}

.purple::before {
  -webkit-animation: purple-pseudo linear 15s alternate infinite;
          animation: purple-pseudo linear 15s alternate infinite;
  background: #241379;
  border: 2px solid #241379;
  width: 49px;
  height: 7px;
  transform: translate3d(90vw, 55vh, 0) rotate(181deg);
}

.purple::after {
  -webkit-animation: purple-pseudo linear 20s alternate infinite;
          animation: purple-pseudo linear 20s alternate infinite;
  border: 2px solid #241379;
  width: 14px;
  height: 42px;
  transform: translate3d(57vw, 84vh, 0) rotate(41deg);
}

@-webkit-keyframes purple {
  50% {
    transform: translate3d(8vw, 87vh, 0);
  }
  100% {
    transform: translate3d(66vw, 82vh, 0);
  }
}

@keyframes purple {
  50% {
    transform: translate3d(8vw, 87vh, 0);
  }
  100% {
    transform: translate3d(66vw, 82vh, 0);
  }
}
@-webkit-keyframes purple-pseudo {
  33% {
    transform: translate3d(32vw, -83vh, 0) rotate(196deg);
  }
  100% {
    transform: translate3d(10vw, -26vh, 0) rotate(236deg);
  }
}
@keyframes purple-pseudo {
  33% {
    transform: translate3d(32vw, -83vh, 0) rotate(196deg);
  }
  100% {
    transform: translate3d(10vw, -26vh, 0) rotate(236deg);
  }
}
.medium-blue {
  -webkit-animation: medium-blue linear 30s alternate infinite;
          animation: medium-blue linear 30s alternate infinite;
  border: 2px solid #2185bf;
  border-radius: 100%;
  width: 31px;
  height: 31px;
  transform: translate3d(69vw, 84vh, 0);
  z-index: 8;
}

.medium-blue::before {
  -webkit-animation: medium-blue-pseudo linear 15s alternate infinite;
          animation: medium-blue-pseudo linear 15s alternate infinite;
  background: #2185bf;
  border: 2px solid #2185bf;
  width: 49px;
  height: 48px;
  transform: translate3d(4vw, -45vh, 0) rotate(163deg);
}

.medium-blue::after {
  -webkit-animation: medium-blue-pseudo linear 20s alternate infinite;
          animation: medium-blue-pseudo linear 20s alternate infinite;
  border: 2px solid #2185bf;
  width: 37px;
  height: 9px;
  transform: translate3d(-69vw, -4vh, 0) rotate(316deg);
}

@-webkit-keyframes medium-blue {
  50% {
    transform: translate3d(73vw, 25vh, 0);
  }
  100% {
    transform: translate3d(31vw, 84vh, 0);
  }
}

@keyframes medium-blue {
  50% {
    transform: translate3d(73vw, 25vh, 0);
  }
  100% {
    transform: translate3d(31vw, 84vh, 0);
  }
}
@-webkit-keyframes medium-blue-pseudo {
  33% {
    transform: translate3d(-56vw, 60vh, 0) rotate(147deg);
  }
  100% {
    transform: translate3d(-12vw, -54vh, 0) rotate(291deg);
  }
}
@keyframes medium-blue-pseudo {
  33% {
    transform: translate3d(-56vw, 60vh, 0) rotate(147deg);
  }
  100% {
    transform: translate3d(-12vw, -54vh, 0) rotate(291deg);
  }
}
.light-blue {
  -webkit-animation: light-blue linear 30s alternate infinite;
          animation: light-blue linear 30s alternate infinite;
  border: 2px solid #1fbce1;
  border-radius: 100%;
  width: 34px;
  height: 34px;
  transform: translate3d(18vw, 65vh, 0);
  z-index: 9;
}

.light-blue::before {
  -webkit-animation: light-blue-pseudo linear 15s alternate infinite;
          animation: light-blue-pseudo linear 15s alternate infinite;
  background: #1fbce1;
  border: 2px solid #1fbce1;
  width: 44px;
  height: 22px;
  transform: translate3d(61vw, 25vh, 0) rotate(299deg);
}

.light-blue::after {
  -webkit-animation: light-blue-pseudo linear 20s alternate infinite;
          animation: light-blue-pseudo linear 20s alternate infinite;
  border: 2px solid #1fbce1;
  width: 18px;
  height: 19px;
  transform: translate3d(38vw, 28vh, 0) rotate(93deg);
}

@-webkit-keyframes light-blue {
  50% {
    transform: translate3d(17vw, 98vh, 0);
  }
  100% {
    transform: translate3d(91vw, 90vh, 0);
  }
}

@keyframes light-blue {
  50% {
    transform: translate3d(17vw, 98vh, 0);
  }
  100% {
    transform: translate3d(91vw, 90vh, 0);
  }
}
@-webkit-keyframes light-blue-pseudo {
  33% {
    transform: translate3d(-10vw, -8vh, 0) rotate(171deg);
  }
  100% {
    transform: translate3d(-30vw, -46vh, 0) rotate(253deg);
  }
}
@keyframes light-blue-pseudo {
  33% {
    transform: translate3d(-10vw, -8vh, 0) rotate(171deg);
  }
  100% {
    transform: translate3d(-30vw, -46vh, 0) rotate(253deg);
  }
}
.red {
  -webkit-animation: red linear 30s alternate infinite;
          animation: red linear 30s alternate infinite;
  border: 2px solid #b62f56;
  border-radius: 100%;
  width: 12px;
  height: 12px;
  transform: translate3d(97vw, 17vh, 0);
  z-index: 8;
}

.red::before {
  -webkit-animation: red-pseudo linear 15s alternate infinite;
          animation: red-pseudo linear 15s alternate infinite;
  background: #b62f56;
  border: 2px solid #b62f56;
  width: 7px;
  height: 5px;
  transform: translate3d(-70vw, 21vh, 0) rotate(72deg);
}

.red::after {
  -webkit-animation: red-pseudo linear 20s alternate infinite;
          animation: red-pseudo linear 20s alternate infinite;
  border: 2px solid #b62f56;
  width: 23px;
  height: 12px;
  transform: translate3d(1vw, 64vh, 0) rotate(265deg);
}

@-webkit-keyframes red {
  50% {
    transform: translate3d(92vw, 86vh, 0);
  }
  100% {
    transform: translate3d(55vw, 26vh, 0);
  }
}

@keyframes red {
  50% {
    transform: translate3d(92vw, 86vh, 0);
  }
  100% {
    transform: translate3d(55vw, 26vh, 0);
  }
}
@-webkit-keyframes red-pseudo {
  33% {
    transform: translate3d(-9vw, -26vh, 0) rotate(255deg);
  }
  100% {
    transform: translate3d(-53vw, 46vh, 0) rotate(278deg);
  }
}
@keyframes red-pseudo {
  33% {
    transform: translate3d(-9vw, -26vh, 0) rotate(255deg);
  }
  100% {
    transform: translate3d(-53vw, 46vh, 0) rotate(278deg);
  }
}
.orange {
  -webkit-animation: orange linear 30s alternate infinite;
          animation: orange linear 30s alternate infinite;
  border: 2px solid #d5764c;
  border-radius: 100%;
  width: 48px;
  height: 48px;
  transform: translate3d(17vw, 16vh, 0);
  z-index: 9;
}

.orange::before {
  -webkit-animation: orange-pseudo linear 15s alternate infinite;
          animation: orange-pseudo linear 15s alternate infinite;
  background: #d5764c;
  border: 2px solid #d5764c;
  width: 32px;
  height: 22px;
  transform: translate3d(39vw, 67vh, 0) rotate(176deg);
}

.orange::after {
  -webkit-animation: orange-pseudo linear 20s alternate infinite;
          animation: orange-pseudo linear 20s alternate infinite;
  border: 2px solid #d5764c;
  width: 49px;
  height: 48px;
  transform: translate3d(1vw, 13vh, 0) rotate(330deg);
}

@-webkit-keyframes orange {
  50% {
    transform: translate3d(13vw, 1vh, 0);
  }
  100% {
    transform: translate3d(22vw, 25vh, 0);
  }
}

@keyframes orange {
  50% {
    transform: translate3d(13vw, 1vh, 0);
  }
  100% {
    transform: translate3d(22vw, 25vh, 0);
  }
}
@-webkit-keyframes orange-pseudo {
  33% {
    transform: translate3d(31vw, 98vh, 0) rotate(49deg);
  }
  100% {
    transform: translate3d(77vw, 2vh, 0) rotate(153deg);
  }
}
@keyframes orange-pseudo {
  33% {
    transform: translate3d(31vw, 98vh, 0) rotate(49deg);
  }
  100% {
    transform: translate3d(77vw, 2vh, 0) rotate(153deg);
  }
}
.yellow {
  -webkit-animation: yellow linear 30s alternate infinite;
          animation: yellow linear 30s alternate infinite;
  border: 2px solid #ffd53e;
  border-radius: 100%;
  width: 11px;
  height: 11px;
  transform: translate3d(18vw, 6vh, 0);
  z-index: 3;
}

.yellow::before {
  -webkit-animation: yellow-pseudo linear 15s alternate infinite;
          animation: yellow-pseudo linear 15s alternate infinite;
  background: #ffd53e;
  border: 2px solid #ffd53e;
  width: 32px;
  height: 6px;
  transform: translate3d(32vw, 13vh, 0) rotate(129deg);
}

.yellow::after {
  -webkit-animation: yellow-pseudo linear 20s alternate infinite;
          animation: yellow-pseudo linear 20s alternate infinite;
  border: 2px solid #ffd53e;
  width: 38px;
  height: 47px;
  transform: translate3d(40vw, 92vh, 0) rotate(203deg);
}

@-webkit-keyframes yellow {
  50% {
    transform: translate3d(37vw, 57vh, 0);
  }
  100% {
    transform: translate3d(33vw, 96vh, 0);
  }
}

@keyframes yellow {
  50% {
    transform: translate3d(37vw, 57vh, 0);
  }
  100% {
    transform: translate3d(33vw, 96vh, 0);
  }
}
@-webkit-keyframes yellow-pseudo {
  33% {
    transform: translate3d(-24vw, 37vh, 0) rotate(317deg);
  }
  100% {
    transform: translate3d(7vw, -46vh, 0) rotate(12deg);
  }
}
@keyframes yellow-pseudo {
  33% {
    transform: translate3d(-24vw, 37vh, 0) rotate(317deg);
  }
  100% {
    transform: translate3d(7vw, -46vh, 0) rotate(12deg);
  }
}
.cyan {
  -webkit-animation: cyan linear 30s alternate infinite;
          animation: cyan linear 30s alternate infinite;
  border: 2px solid #78ffba;
  border-radius: 100%;
  width: 47px;
  height: 47px;
  transform: translate3d(6vw, 83vh, 0);
  z-index: 3;
}

.cyan::before {
  -webkit-animation: cyan-pseudo linear 15s alternate infinite;
          animation: cyan-pseudo linear 15s alternate infinite;
  background: #78ffba;
  border: 2px solid #78ffba;
  width: 31px;
  height: 37px;
  transform: translate3d(93vw, -20vh, 0) rotate(47deg);
}

.cyan::after {
  -webkit-animation: cyan-pseudo linear 20s alternate infinite;
          animation: cyan-pseudo linear 20s alternate infinite;
  border: 2px solid #78ffba;
  width: 10px;
  height: 8px;
  transform: translate3d(79vw, -2vh, 0) rotate(341deg);
}

@-webkit-keyframes cyan {
  50% {
    transform: translate3d(19vw, 4vh, 0);
  }
  100% {
    transform: translate3d(2vw, 35vh, 0);
  }
}

@keyframes cyan {
  50% {
    transform: translate3d(19vw, 4vh, 0);
  }
  100% {
    transform: translate3d(2vw, 35vh, 0);
  }
}
@-webkit-keyframes cyan-pseudo {
  33% {
    transform: translate3d(22vw, 11vh, 0) rotate(345deg);
  }
  100% {
    transform: translate3d(66vw, 4vh, 0) rotate(19deg);
  }
}
@keyframes cyan-pseudo {
  33% {
    transform: translate3d(22vw, 11vh, 0) rotate(345deg);
  }
  100% {
    transform: translate3d(66vw, 4vh, 0) rotate(19deg);
  }
}
.light-green {
  -webkit-animation: light-green linear 30s alternate infinite;
          animation: light-green linear 30s alternate infinite;
  border: 2px solid #98fd85;
  border-radius: 100%;
  width: 38px;
  height: 38px;
  transform: translate3d(88vw, 41vh, 0);
  z-index: 1;
}

.light-green::before {
  -webkit-animation: light-green-pseudo linear 15s alternate infinite;
          animation: light-green-pseudo linear 15s alternate infinite;
  background: #98fd85;
  border: 2px solid #98fd85;
  width: 28px;
  height: 7px;
  transform: translate3d(-64vw, -30vh, 0) rotate(120deg);
}

.light-green::after {
  -webkit-animation: light-green-pseudo linear 20s alternate infinite;
          animation: light-green-pseudo linear 20s alternate infinite;
  border: 2px solid #98fd85;
  width: 28px;
  height: 39px;
  transform: translate3d(-28vw, -3vh, 0) rotate(137deg);
}

@-webkit-keyframes light-green {
  50% {
    transform: translate3d(80vw, 53vh, 0);
  }
  100% {
    transform: translate3d(100vw, 26vh, 0);
  }
}

@keyframes light-green {
  50% {
    transform: translate3d(80vw, 53vh, 0);
  }
  100% {
    transform: translate3d(100vw, 26vh, 0);
  }
}
@-webkit-keyframes light-green-pseudo {
  33% {
    transform: translate3d(15vw, -5vh, 0) rotate(229deg);
  }
  100% {
    transform: translate3d(-9vw, 43vh, 0) rotate(293deg);
  }
}
@keyframes light-green-pseudo {
  33% {
    transform: translate3d(15vw, -5vh, 0) rotate(229deg);
  }
  100% {
    transform: translate3d(-9vw, 43vh, 0) rotate(293deg);
  }
}
.lime {
  -webkit-animation: lime linear 30s alternate infinite;
          animation: lime linear 30s alternate infinite;
  border: 2px solid #befb46;
  border-radius: 100%;
  width: 37px;
  height: 37px;
  transform: translate3d(60vw, 18vh, 0);
  z-index: 4;
}

.lime::before {
  -webkit-animation: lime-pseudo linear 15s alternate infinite;
          animation: lime-pseudo linear 15s alternate infinite;
  background: #befb46;
  border: 2px solid #befb46;
  width: 36px;
  height: 6px;
  transform: translate3d(22vw, 10vh, 0) rotate(216deg);
}

.lime::after {
  -webkit-animation: lime-pseudo linear 20s alternate infinite;
          animation: lime-pseudo linear 20s alternate infinite;
  border: 2px solid #befb46;
  width: 37px;
  height: 7px;
  transform: translate3d(-24vw, 16vh, 0) rotate(354deg);
}

@-webkit-keyframes lime {
  50% {
    transform: translate3d(7vw, 94vh, 0);
  }
  100% {
    transform: translate3d(30vw, 80vh, 0);
  }
}

@keyframes lime {
  50% {
    transform: translate3d(7vw, 94vh, 0);
  }
  100% {
    transform: translate3d(30vw, 80vh, 0);
  }
}
@-webkit-keyframes lime-pseudo {
  33% {
    transform: translate3d(30vw, -21vh, 0) rotate(219deg);
  }
  100% {
    transform: translate3d(-7vw, -36vh, 0) rotate(130deg);
  }
}
@keyframes lime-pseudo {
  33% {
    transform: translate3d(30vw, -21vh, 0) rotate(219deg);
  }
  100% {
    transform: translate3d(-7vw, -36vh, 0) rotate(130deg);
  }
}
.magenta {
  -webkit-animation: magenta linear 30s alternate infinite;
          animation: magenta linear 30s alternate infinite;
  border: 2px solid #6c046c;
  border-radius: 100%;
  width: 22px;
  height: 22px;
  transform: translate3d(36vw, 54vh, 0);
  z-index: 7;
}

.magenta::before {
  -webkit-animation: magenta-pseudo linear 15s alternate infinite;
          animation: magenta-pseudo linear 15s alternate infinite;
  background: #6c046c;
  border: 2px solid #6c046c;
  width: 32px;
  height: 12px;
  transform: translate3d(51vw, -42vh, 0) rotate(99deg);
}

.magenta::after {
  -webkit-animation: magenta-pseudo linear 20s alternate infinite;
          animation: magenta-pseudo linear 20s alternate infinite;
  border: 2px solid #6c046c;
  width: 17px;
  height: 45px;
  transform: translate3d(8vw, 12vh, 0) rotate(97deg);
}

@-webkit-keyframes magenta {
  50% {
    transform: translate3d(52vw, 51vh, 0);
  }
  100% {
    transform: translate3d(2vw, 97vh, 0);
  }
}

@keyframes magenta {
  50% {
    transform: translate3d(52vw, 51vh, 0);
  }
  100% {
    transform: translate3d(2vw, 97vh, 0);
  }
}
@-webkit-keyframes magenta-pseudo {
  33% {
    transform: translate3d(-35vw, 33vh, 0) rotate(239deg);
  }
  100% {
    transform: translate3d(19vw, -14vh, 0) rotate(26deg);
  }
}
@keyframes magenta-pseudo {
  33% {
    transform: translate3d(-35vw, 33vh, 0) rotate(239deg);
  }
  100% {
    transform: translate3d(19vw, -14vh, 0) rotate(26deg);
  }
}
.lightish-red {
  -webkit-animation: lightish-red linear 30s alternate infinite;
          animation: lightish-red linear 30s alternate infinite;
  border: 2px solid #f04c81;
  border-radius: 100%;
  width: 38px;
  height: 38px;
  transform: translate3d(18vw, 49vh, 0);
  z-index: 12;
}

.lightish-red::before {
  -webkit-animation: lightish-red-pseudo linear 15s alternate infinite;
          animation: lightish-red-pseudo linear 15s alternate infinite;
  background: #f04c81;
  border: 2px solid #f04c81;
  width: 35px;
  height: 48px;
  transform: translate3d(80vw, -6vh, 0) rotate(33deg);
}

.lightish-red::after {
  -webkit-animation: lightish-red-pseudo linear 20s alternate infinite;
          animation: lightish-red-pseudo linear 20s alternate infinite;
  border: 2px solid #f04c81;
  width: 39px;
  height: 8px;
  transform: translate3d(43vw, -36vh, 0) rotate(84deg);
}

@-webkit-keyframes lightish-red {
  50% {
    transform: translate3d(23vw, 80vh, 0);
  }
  100% {
    transform: translate3d(63vw, 82vh, 0);
  }
}

@keyframes lightish-red {
  50% {
    transform: translate3d(23vw, 80vh, 0);
  }
  100% {
    transform: translate3d(63vw, 82vh, 0);
  }
}
@-webkit-keyframes lightish-red-pseudo {
  33% {
    transform: translate3d(56vw, -18vh, 0) rotate(137deg);
  }
  100% {
    transform: translate3d(-20vw, -66vh, 0) rotate(343deg);
  }
}
@keyframes lightish-red-pseudo {
  33% {
    transform: translate3d(56vw, -18vh, 0) rotate(137deg);
  }
  100% {
    transform: translate3d(-20vw, -66vh, 0) rotate(343deg);
  }
}
.pink {
  -webkit-animation: pink linear 30s alternate infinite;
          animation: pink linear 30s alternate infinite;
  border: 2px solid #ff4293;
  border-radius: 100%;
  width: 16px;
  height: 16px;
  transform: translate3d(37vw, 45vh, 0);
  z-index: 5;
}

.pink::before {
  -webkit-animation: pink-pseudo linear 15s alternate infinite;
          animation: pink-pseudo linear 15s alternate infinite;
  background: #ff4293;
  border: 2px solid #ff4293;
  width: 17px;
  height: 41px;
  transform: translate3d(23vw, 1vh, 0) rotate(110deg);
}

.pink::after {
  -webkit-animation: pink-pseudo linear 20s alternate infinite;
          animation: pink-pseudo linear 20s alternate infinite;
  border: 2px solid #ff4293;
  width: 31px;
  height: 40px;
  transform: translate3d(-28vw, -34vh, 0) rotate(262deg);
}

@-webkit-keyframes pink {
  50% {
    transform: translate3d(12vw, 12vh, 0);
  }
  100% {
    transform: translate3d(38vw, 75vh, 0);
  }
}

@keyframes pink {
  50% {
    transform: translate3d(12vw, 12vh, 0);
  }
  100% {
    transform: translate3d(38vw, 75vh, 0);
  }
}
@-webkit-keyframes pink-pseudo {
  33% {
    transform: translate3d(28vw, 60vh, 0) rotate(128deg);
  }
  100% {
    transform: translate3d(25vw, 17vh, 0) rotate(155deg);
  }
}
@keyframes pink-pseudo {
  33% {
    transform: translate3d(28vw, 60vh, 0) rotate(128deg);
  }
  100% {
    transform: translate3d(25vw, 17vh, 0) rotate(155deg);
  }
}

</style>
<body >
<div class="purple" ></div>
<div class="medium-blue"></div>
<div class="light-blue"></div>
<div class="red"></div>
<div class="orange"></div>
<div class="yellow"></div>
<div class="cyan"></div>
<div class="light-green"></div>
<div class="lime"></div>
<div class="magenta"></div>
<div class="lightish-red"></div>
<div class="pink"></div>
</body>  

    <div class="text-center text-success animateuse" style="background-color: rgb(22 177 128); font-size:25px;text-align:center; margin-top:-300px; padding-top:30px;">
                <a style="color:blue; font-weight:bold; font-size:30px;">Online Voting System</a>
              
        <nav class="nav-menue">

            <ul style = "color">
                <li>
                <a href="index.php">Home</a>
                </li>
                <li> <a href="register/index.php">Register</a></li>
                <li><a href="voters.php">Voter List</a></li>
                <li><a href="login.php">Login</a></li>

            </ul>
        </nav>
    </div>
        
   
       