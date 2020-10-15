@include('home/header')

<div class="container alert-success text-center py-5 px-4">
	{{Auth::id()}}
</div>
@include('home/fooder')
