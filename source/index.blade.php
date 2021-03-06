
@extends('_layouts.master')

{{-- https://laravel.com/docs/5.4/blade#stacks --}}
<head>
<meta name="keywords" content="discord, discord template, templates, discord template, discord library">
<meta name="description" content="Online library with free Discord Templates!">
</head>
@push('head')

<script type="text/javascript" data-cfasync="false">
 var _foxpush = _foxpush || [];
 _foxpush.push(['_setDomain', 'discordstyle']);
 (function(){
     var foxscript = document.createElement('script');
     foxscript.src = '//cdn.foxpush.net/sdk/foxpush_SDK_min.js';
     foxscript.type = 'text/javascript';
     foxscript.async = 'true';
     var fox_s = document.getElementsByTagName('script')[0];
     fox_s.parentNode.insertBefore(foxscript, fox_s);})();
 </script>
    @section('title', ' Discord Templates')

    {{-- https://laravel.com/docs/5.4/blade#template-inheritance --}}
    @section('body')
<!-- Design: https://dribbble.com/shots/5035559-Cookie-Pop-up-Overlay-UI -->
<!-- Icon from flaticon -->
<div class="popup">
	<h1>👋</h1>
	<h2 class="h">ETA: Within this week!</h2>
	<p>Online library for Discord Templates! Launching THIS week. Join our Discord for a lil chat before we launch? ;)</p>
	<div class="btn-container">
		<a href ="https://discord.gg/8kSnjNN" class="btn ff">Join Discord</a>
		<button class="btn ghost" id="trick">
			No. Not for me!
			<span>Don't click me</span>
		</button>
	</div>
	<p>
		<br>
	<iframe src="https://discordapp.com/widget?id=554405736139194408&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
</div>


<script>
	const trickBtn = document.getElementById('trick');
const btnContainer = document.querySelector('.btn-container');
// setting it initially
btnContainer.style.flexDirection = 'row';

trickBtn.addEventListener('mouseover', (e) => {
	const currentDir = btnContainer.style.flexDirection;
	if(currentDir === 'row') {
		btnContainer.style.flexDirection = 'row-reverse';
	} else {
		btnContainer.style.flexDirection = 'row';
	}
})
</script>
<style>
	@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');

* {
	box-sizing: border-box;
}

body {
	background-color: #3498db;
	display: flex;
	align-items: center;
	font-family: 'Muli', sans-serif;
	justify-content: center;
	height: 100vh;
	margin: 0;
}

.popup{
	background-color: #fff;
	box-shadow: -4px 4px 5px rgba(0, 0, 0, 0.3);
	border-radius: 5px;
	padding: 20px 30px;
	text-align: center;
	max-width: 500px;
}
h1, h2, h4, h5, p {
    margin: 15px;
}
.popup p {
	color: #555;
}

.btn-container {
	display: flex;
	align-items: center;
	justify-content: center;
}
.ff:hover {
    background-color: #3498db !important;
}
.btn {
	background-color: #3498db;
	border: 0;
	border-radius: 5px;
	box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);
	color: #fff;
	cursor: pointer;
	font-size: 18px;
	padding: 15px 30px;
	position: relative;
	margin: 10px;
}

.btn:active {
	box-shadow: none;
	transform: scale(0.98);
}

.btn:focus {
	outline: none;
}

.btn.ghost {
	background-color: #fff;
	color: #3498db;
	box-shadow: none;
}

.btn.ghost span {
	background-color: #3498db;
	border: 0;
	border-radius: 5px;
	color: #fff;
	font-size: 10px;
	padding: 3px 7px;
	position: absolute;
	top: -10px;
	right: -10px;
	transform: rotate(10deg);
}

.popup img {
	width: 70px;
}

	h1.h{
		font-weight:bold;
	}


</style> 



@endsection
