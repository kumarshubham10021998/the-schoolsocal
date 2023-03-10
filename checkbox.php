<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
/*         
html, body{ margin: 0; height: 100%; }
body{
  display: flex;
  background: #212121;
  justify-content: center;
  align-items: center;
  font: 24px/1.4 "RobotoDraft", sans-serif;
  color: #fff;
} */

section{
  display: flex;
  flex-direction: column;
  padding: 0.5em;
}

h1{
  font-weight: 400;
  font-size: 2em;
  cursor: default;
  margin: 0 0 .5em 0;
}

input[type='checkbox']{ height: 0; width: 0; }

input[type='checkbox'] + label{
  position: relative;
  display: flex;
  margin: .6em 0;
  align-items: center;
  color: #ec3131;
  transition: color 250ms cubic-bezier(.4,.0,.23,1);
}
input[type='checkbox'] + label > ins{
  position: absolute;
  display: block;
  bottom: 0;
  left: 2em;
  height: 0;
  width: 100%;
  overflow: hidden;
  text-decoration: none;
  transition: height 300ms cubic-bezier(.4,.0,.23,1);
}
input[type='checkbox'] + label > ins > i{
  position: absolute;
  bottom: 0;
  font-style: normal;
  color: #310cd6;
}
input[type='checkbox'] + label > span{
  display: flex;
  justify-content: center;
  align-items: center;
  margin-right: 1em;
  width: 1em;
  height: 1em;
  background: transparent;
  border: 2px solid #9E9E9E;
  border-radius: 2px;
  cursor: pointer;  
  transition: all 250ms cubic-bezier(.4,.0,.23,1);
}

input[type='checkbox'] + label:hover, input[type='checkbox']:focus + label{
  color: #fff;
}
input[type='checkbox'] + label:hover > span, input[type='checkbox']:focus + label > span{
  background: rgba(255,255,255,.1);
}
input[type='checkbox']:checked + label > ins{ height: 100%; }

input[type='checkbox']:checked + label > span{
  border: .5em solid #FFEB3B;
  animation: shrink-bounce 200ms cubic-bezier(.4,.0,.23,1);
}
input[type='checkbox']:checked + label > span:before{
  content: "";
  position: absolute;
  top: .6em;
  left: .2em;
  border-right: 3px solid transparent;
  border-bottom: 3px solid transparent;
  transform: rotate(45deg);
  transform-origin: 0% 100%;
  animation: checkbox-check 125ms 250ms cubic-bezier(.4,.0,.23,1) forwards;
}

@keyframes shrink-bounce{
  0%{
    transform: scale(1);
  }
  33%{    
    transform: scale(.85);
  }
  100%{
    transform: scale(1);    
  }
}
@keyframes checkbox-check{
  0%{
    width: 0;
    height: 0;
    border-color: #212121;
    transform: translate3d(0,0,0) rotate(45deg);
  }
  33%{
    width: .2em;
    height: 0;
    transform: translate3d(0,0,0) rotate(45deg);
  }
  100%{    
    width: .2em;
    height: .5em;    
    border-color: #212121;
    transform: translate3d(0,-.5em,0) rotate(45deg);
  }
}
    </style>
</head>
<body>
<section>
  
  <h1>Interested</h1>
  
  <input id='one' type='checkbox' />
  <label for='one'>
    <span></span>
    Off with your head
    <ins><i>Off with your head</i></ins>
  </label>
  
  <input id='two' type='checkbox' />
  <label for='two'>
    <span></span>
    Dance ???til you???re dead
    <ins><i>Dance ???til you???re dead</i></ins>
  </label>
  
  <input id='three' type='checkbox' />
  <label for='three'>
    <span></span>
    Heads will roll
    <ins><i>Heads will roll</i></ins>
  </label>
  
  <input id='four' type='checkbox' />
  <label for='four'>
    <span></span>
    On the floor
    <ins><i>On the floor</i></ins>
  </label>
  <input id='four' type='checkbox' />
  <label for='four'>
    <span></span>
    On the floor
    <ins><i>On the floor</i></ins>
  </label>
  <input id='four' type='checkbox' />
  <label for='four'>
    <span></span>
    On the floor
    <ins><i>On the floor</i></ins>
  </label>
  <input id='four' type='checkbox' />
  <label for='four'>
    <span></span>
    On the floor
    <ins><i>On the floor</i></ins>
  </label>
  <input id='four' type='checkbox' />
  <label for='four'>
    <span></span>
    On the floor
    <ins><i>On the floor</i></ins>
  </label>
  
</section>
</body>
</html>