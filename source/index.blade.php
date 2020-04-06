
@extends('_layouts.master')

{{-- https://laravel.com/docs/5.4/blade#stacks --}}
@push('head')


    @section('title', ' Discord Templates')

    {{-- https://laravel.com/docs/5.4/blade#template-inheritance --}}
    @section('body')
<!-- Design: https://dribbble.com/shots/5035559-Cookie-Pop-up-Overlay-UI -->
<!-- Icon from flaticon -->
<div class="popup">
	<h1>👋</h1>
	<h2 class="h">Heya! This site is under construction.</h2>
	<p>Feel free to have a chat with us while we're working on the page! We'd love to have your thoughts included in the newest version.</p>
	<div class="btn-container">
		<a href ="https://discord.gg/8kSnjNN" class="btn">Join Discord</a>
		<button class="btnF ghost" id="trick">
			No. Not for me!
			<span>Don't click me</span>
		</button>
	</div>
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
.btn:hover {
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

.btnF.ghost {
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
