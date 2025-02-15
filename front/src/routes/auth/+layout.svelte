

<script>

	let {children} = $props(); 


</script>


<nav>
	<figure>
		<img src="" alt="LOGO HERE">
	</figure>
	<ul class="nav-list">
		<li> <a href="#">Login</a></li>
		<li><a href="#">Sign up</a></li>
	</ul>
</nav>



{@render children()}





<style>

	nav{
		display: flex;
	}

	.nav-list {
		margin-left: auto;
		display:flex;
		padding: 0%;
		list-style-type: none;
		gap:.5rem;
	}

	.nav-list > li{
		display: block;
		a{
			display: block;
			border: 1px solid black;
			padding: 1rem;
		}
		
	}

</style>